<?php

namespace model;

use Imy\Core\Model;

/**
 * Class City
 * @package model
 */
class City extends Model
{
    /** @var int ID Европы */
    private const EUROPE = 1;
    /** @var int ID Азии */
    private const ASIA = 2;
    /** @var int ID Сев. Америки */
    private const NORTH_AMERICA = 3;

    /**
     * Получение городов с разбивкой по странам и регионам
     * @param string $lang
     * @return array
     */
    public static function getCityByLang(string $lang = "rus"): array
    {
        return (new City('city'))->factory()
            ->get()
            ->select([
                "city.c_name_$lang as city",
                "city.c_descr_$lang as description",
                "country.c_name_$lang as country",
                "country.c_descr_$lang as country_description",
                "region.r_name_$lang as region",
                "region.r_descr_$lang as region_description",
            ])
            ->join('country')->on('country.id', 'city.c_country_id')
            ->join('glob_region')->on('glob_region.id', 'country.glob_region_id')
            ->join('region', 'left')->on('region.id', 'city.c_region_id')
            ->where('glob_region.id', self::EUROPE)
            ->orderBy("country.c_name_$lang", "ASC")
            ->orderBy("region.r_name_$lang", "ASC")
            ->orderBy("city.c_name_$lang", "ASC")
            ->fetchAll();
    }
}