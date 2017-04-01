<?php
/**
 * Created by PhpStorm.
 * User: olgakolos
 * Date: 01.04.17
 * Time: 17:00
 */

namespace Core;


class FirstMonthDay
{

    public static function day($key) {
        $year = Year::year();
        $days = 0;
        $feb = February::feb($year);
        $month = [31, $feb, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        for ($i = 1; $i < $year; $i++) {
            $leap = 365;
            if ($i % 4 == 0 and $i % 100 != 0 or $i % 400 == 0) {
                $leap = 366;
            }
            $days = $days + $leap;
        }
        if($key != 0) {
            for ($i = 0; $i < $key; $i++) {
                $days = $days + $month[$i];
            }
        }
        $firstMonthDay = $days % 7;
        return $firstMonthDay;
    }
    public static function firstDay($firstMonthDay) {
        //$firstDay = ceil(($year['days'] + $firstMonthDay)/ 7);

    }
}