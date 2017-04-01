<?php
require_once 'Core/bootstrap.php';
use Core\Request;
use Core\Router;

Router::run('routes')->path(Request::url());