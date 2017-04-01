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

    public static $weekDays = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];

    /*
     * this method creates an array of month names and month days
     */
    public static function month() {
        $year = Year::year();
        $feb = February::feb($year);
        $month = [
            ['month' => "Январь", 'days' => 31],
            ['month' => "Февраль", 'days' => $feb],
            ['month' => "Март", 'days' => 31],
            ['month' => "Апрель", 'days' => 30],
            ['month' => "Май", 'days' => 31],
            ['month' => "Июнь", 'days' => 30],
            ['month' => "Июль", 'days' => 31],
            ['month' => "Август", 'days' => 31],
            ['month' => "Сентябрь", 'days' => 30],
            ['month' => "Октябрь", 'days' => 31],
            ['month' => "Ноябрь", 'days' => 30],
            ['month' => "Декабрь", 'days' => 31]
        ];
        return $month;
    }

    /*
     * this method returns first month day
     * $key - month number (from 0 to 11)
     */
    public static function day($key) {
        $days = 0;
        for ($i = 1; $i < Year::year(); $i++) {
            $leap = 365;
            if ($i % 4 == 0 and $i % 100 != 0 or $i % 400 == 0) {
                $leap = 366;
            }
            $days = $days + $leap;
        }

        //days for no first month of the year
        if($key != 0) {
            for ($i = 0; $i < $key; $i++) {
                $days = $days + static::month()[$i]['days'];
            }
        }
        $firstMonthDay = $days % 7;
        return $firstMonthDay;
    }

}