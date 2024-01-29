<?php

use helper\Helper;
use helper\HtmlBuilder;
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
        $this->v['titleH1'] = 'Города по странам и регионам';

        $lang = $this->getLang();

        $cityLang = "city_$lang";

        $getCache = (new Cache())->get($cityLang);
        if ($getCache) {
            $this->v['result'] = $getCache;
            return;
        }

        try {
            $cities = City::getCityByLang($lang);
        } catch (Exception $e) {
            $this->v['error'] = $e->getMessage();
            return;
        }

        $countries = Helper::prepareCitiesInfo($cities);

        if (!empty($countries['countries']) && is_array($countries['countries'])) {
            (new Cache())->set($cityLang, $countries, 30);
        }

        $this->v['html'] = HtmlBuilder::buildListCountryBlock($countries['countries'], $countries['descriptions'])
            ?? '<div class="col-12"><p>Нет данных</p></div>';
    }

    /**
     * @return string
     */
    private function getLang(): string
    {
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
        return $lang;
    }
}