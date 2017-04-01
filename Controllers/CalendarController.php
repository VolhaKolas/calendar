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
        return require_once('views/calendar.view.php');
    }
}