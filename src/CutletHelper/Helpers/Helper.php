<?php

namespace Va\CutletHelper\Helpers;

class Helper
{
    /**
     * @param int $length
     * @return int
     */
    public function integerToken($length = 5)
    {
        return mt_rand(pow(10, $length - 1), pow(10, $length) - 1);
    }

    /**
     * @param int $length
     * @param string $characters
     * @return string
     */
    public function stringToken($length = 16, $characters = '2345679acdefghjkmnpqrstuvwxyz')
    {
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function digitsToEastern($number)
    {

        $western = range(0, 9);
        $eastern = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];

        return str_replace($western, $eastern, $number);
    }

    /**
     * @param $key
     * @param string $activeClassName
     * @return string
     */
    public function isActive($key, $activeClassName = 'active')
    {
        if(is_array($key)) {
            return in_array(Route::currentRouteName(), $key) ? $activeClassName : '';
        }
        return Route::currentRouteName() == $key ? $activeClassName : '';
    }
}
