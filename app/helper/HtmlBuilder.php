<?php

namespace helper;

use Imy\Core\Tools;

/**
 * Формирует html-блоки для вывода списка стран, регионов и городов
 * Class HtmlBuilder
 * @package helper
 */
final class HtmlBuilder
{
    /**
     * Формирует HTML для вывода списка стран, регионов и городов
     * @param array $countries
     * @param \Descriptive $descriptions
     * @return string
     */
    public static function buildListCountryBlock(array $countries, \Descriptive $descriptions): string
    {
        $html = '';
        foreach ($countries as $country => $regions) {
            $html .= self::buildCountryBlock($country, $descriptions, $regions);
        }
        return $html;
    }

    /**
     * @param string $country
     * @param \Descriptive $descriptions
     * @param array $regions
     * @return string
     */
    private static function buildCountryBlock(string $country, \Descriptive $descriptions, array $regions = []): string
    {
        $regionContent = '';
        $countryContent = self::buildCountry($country, $descriptions->getCountryDescription($country));

        foreach ($regions as $region => $cities) {
            if ($region === '') {
                foreach ($cities as $city) {
                    /** cities without region */
                    $regionContent .= self::buildCity($city['city'], $city['description']);
                }
                continue;
            }
            $citiesInRegion = '';

            foreach ($cities as $city) {
                $citiesInRegion .= self::buildCity($city['city'], $city['description']);
            }

            $regionContent .= Tools::get_include_contents(tpl('tmp/regionLi'), [
                'region' => $region,
                'description' => $descriptions->getRegionDescription($country ,$region),
                'cityTemplate' => $citiesInRegion
            ]);
        }

        return Tools::get_include_contents(tpl('tmp/list-group'), [
            'countryContent' => $countryContent,
            'regionContent' => $regionContent
        ]);
    }

    /**
     * @param string $city
     * @param string $description
     * @return string
     */
    private static function buildCity(string $city, string $description = ""): string
    {
        return Tools::get_include_contents(tpl('tmp/cityLi'), [
            'city' => $city,
            'description' => $description
        ]);
    }

    /**
     * @param string $region
     * @param string $description
     * @return string
     */
    private static function buildRegion(string $region, string $description = ""): string
    {
        return Tools::get_include_contents(tpl('tmp/regionLi'), [
            'region' => $region,
            'description' => $description
        ]);
    }

    /**
     * @param string $country
     * @param string $description
     * @return string
     */
    private static function buildCountry(string $country, string $description = ""): string
    {
        return Tools::get_include_contents(tpl('tmp/countryLi'), [
            'country' => $country,
            'description' => $description
        ]);
    }
}