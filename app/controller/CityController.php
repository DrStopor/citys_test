<?php

use model\City;
use Imy\Core\Cache;
use Imy\Core\Controller;

/**
 * Class CityController
 * @package controller
 */
class CityController extends Controller
{
    final public function init(): void
    {
        $this->v['name'] = 'Города по странам и регионам';

        switch ($this->request->get('lang')) {
            case 'eng':
                $lang = 'eng';
                break;
            case 'ger':
                $lang = 'ger';
                break;
            default:
                $lang = 'rus';
        }

        $getCache = (new Cache())->get("city_$lang");
        if ($getCache) {
            $this->v['result'] = $getCache;
            return;
        }

        $cities = City::getCityByLang($lang);

        [$countryDescription, $regionDescriptionByCountry, $countries] = $this->prepareValues($cities);

        if (!empty($countries) && is_array($countries)) {
            (new Cache())->set("city_$lang", $countries, 30);
        }

        $this->v['countries'] = $countries;
        $this->v['descriptions'] = $this->getDescriptions($countryDescription, $regionDescriptionByCountry);
    }

    /**
     * @param array $countryDescription
     * @param array $regionDescription
     * @return Descriptive
     */
    private function getDescriptions(array $countryDescription, array $regionDescription): \Descriptive
    {
        return new class($countryDescription, $regionDescription) extends \Descriptions implements \Descriptive
        {
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

    /**
     * @param array $cities
     * @return array
     */
    private function prepareValues(array $cities): array
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
        return array($countryDescription, $regionDescriptionByCountry, $countries);
    }
}