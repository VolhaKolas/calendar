<?php
/**
 * Created by PhpStorm.
 * User: olgakolos
 * Date: 25.03.17
 * Time: 21:22
 */
namespace App;
use Core\February;
use Core\Request;
use Core\Router;
use Core\Year;


class CalendarController
{
    public function calendar() {
        $year = Year::year();

        $feb = February::feb($year);
        $currentYear = [
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

        $weekDays = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];


        return require_once('views/calendar.view.php');
    }
}