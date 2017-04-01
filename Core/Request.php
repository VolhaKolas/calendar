<?php
/**
 * Created by PhpStorm.
 * User: olgakolos
 * Date: 25.03.17
 * Time: 21:08
 */

namespace Core;


class Request
{
    public static function getMethod() {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function url()
    {
        $request = parse_url($_SERVER['REQUEST_URI']);

        return trim($request['path'], '/');
    }

}