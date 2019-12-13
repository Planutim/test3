<?php

require 'Loader.php';


use App\Test;
use App\Router;


define('ROOT', __DIR__ .'/');


spl_autoload_register(array('App\Loader','loadClasses'));



$router = new Router();

$router->run();