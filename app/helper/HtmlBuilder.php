<?php

namespace helper;

/**
 * Формирует html-блоки для вывода списка стран, регионов и городов
 * Class HtmlBuilder
 * @package helper
 */
final class HtmlBuilder
{
    /**
     * @param string $city
     * @param string $description
     * @return string
     */
    public static function buildCity(string $city, string $description = ""): string
    {
        return "<li class='list-group-item'>
<div class='city pt-1 pb-1' data-toggle='tooltip' data-placement='left' title='{$description}'>{$city}</div>
</li>";
    }

    /**
     * @param string $region
     * @param string $description
     * @return string
     */
    public static function buildRegion(string $region, string $description = ""): string
    {
        return "<div class='region pt-1 pb-1' data-toggle='tooltip' data-placement='left' title='$description'>$region</div>";
    }

    /**
     * @param string $country
     * @param string $description
     * @return string
     */
    public static function buildCountry(string $country, string $description = ""): string
    {
        return "<div class='country pt-2 pb-2' data-toggle='tooltip' data-placement='left' title='$description'>$country</div>";
    }

    /**
     * @param string $country
     * @param \Descriptive $descriptions
     * @param array $regions
     * @return string
     */
    public static function buildCountryBlock(string $country, \Descriptive $descriptions, array $regions = []): string
    {
        $content = '';
        $countryContent = self::buildCountry($country, $descriptions->getCountryDescription($country));
        $content .= "<li class='list-group-item active'>$countryContent<ul class='list-group'>";
        foreach ($regions as $region => $cities) {
            if ($region === '') {
                foreach ($cities as $city) {
                    $content .= self::buildCity($city['city'], $city['description']);
                }
                continue;
            }
            //$region = trim(ClearName::deleteID($region));
            $regionContent = self::buildRegion($region, $descriptions->getRegionDescription($country ,$region));
            $content .= "<li class='list-group-item active'>$regionContent<ul class='list-group'>";
            foreach ($cities as $city) {
                $content .= self::buildCity($city['city'], $city['description']);
            }
            $content .= "</ul></li>";
        }
        $content .= "</ul></li>";
        return "<div class='col-12 mb-3'><ul class='list-group'>$content</ul></div>";
    }

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
}