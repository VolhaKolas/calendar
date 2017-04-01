<?php
/**
 * Created by PhpStorm.
 * User: olgakolos
 * Date: 01.04.17
 * Time: 17:26
 */

namespace Core;


class February
{
    /*
     * this method returns february days in current year
     */
    public static function feb($year) {
        $feb = 28;
        if ($year % 4 == 0 and $year % 100 != 0 or $year % 400 == 0) {
            $feb = 29;
        }
        return $feb;
    }
}