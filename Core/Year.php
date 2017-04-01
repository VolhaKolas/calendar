<?php
/**
 * Created by PhpStorm.
 * User: olgakolos
 * Date: 01.04.17
 * Time: 17:02
 */

namespace Core;


class Year
{
    public static function year() {
        if(Request::getMethod() == 'POST' and isset($_POST['year'])) {
            $year = $_POST['year'];
        }
        else {
            $year = date('Y');
        }
        return $year;
    }
}