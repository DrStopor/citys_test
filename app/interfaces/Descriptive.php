<?php

interface Descriptive
{
    /**
     * Возвращает описание страны
     * @param string $country
     * @return string
     */
    public function getCountryDescription(string $country): string;
    /**
     * Возвращает описание региона
     * @param string $country
     * @param string $region
     * @return string
     */
    public function getRegionDescription(string $country, string $region): string;
}
