<?php

namespace helper;

use Descriptive;

final class Helper
{
    /**
     * @param array $cities
     * @return array
     */
    public static function prepareCitiesInfo(array $cities): array
    {
        $countries = [];
        $countryDescription = [];
        $regionDescriptionByCountry = [];
        foreach ($cities as $city) {
            !isset($countryDescription[$city->country]) || empty($countryDescription[$city->country])
                ? $countryDescription[$city->country] = $city->country_description
                : null;

            !isset($regionDescriptionByCountry[$city->country][$city->region]) || empty($regionDescriptionByCountry[$city->country][$city->region])
                ? $regionDescriptionByCountry[$city->country][$city->region] = $city->region_description
                : null;

            $countries[$city->country][$city->region][] = [
                'city' => $city->city,
                'description' => $city->description
            ];
        }
        $descriptions = self::getDescriptions($countryDescription, $regionDescriptionByCountry);
        return [
            'countries' => $countries,
            'descriptions' => $descriptions
        ];
    }

    /**
     * @param array $countryDescription
     * @param array $regionDescription
     * @return Descriptive
     */
    private static function getDescriptions(array $countryDescription, array $regionDescription): \Descriptive
    {
        return new class($countryDescription, $regionDescription) extends \Descriptions implements \Descriptive {
            public function __construct(array $countryDescription, array $regionDescription)
            {
                $this->countryDescription = $countryDescription;
                $this->regionDescription = $regionDescription;
            }

            /**
             * @inheritDoc
             */
            public function getCountryDescription(string $country): string
            {
                return $this->countryDescription[$country] ?? '';
            }

            /**
             * @inheritDoc
             */
            public function getRegionDescription(string $country, string $region): string
            {
                return $this->regionDescription[$country][$region] ?? '';
            }
        };
    }
}