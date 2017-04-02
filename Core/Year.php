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
    /*
     * this method return data from form
     */
    public static function year() {
        if(Request::getMethod() == 'POST' and isset($_POST['year']) and $_POST['year'] > 0 and $_POST['year'] <= 1e+4) {
            $year = trim(intval($_POST['year']));
        }
        else {
            $year = date('Y');
        }
        return $year;
    }
}