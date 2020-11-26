<?php

require 'bootstrap.php';

$path = strtolower(trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
$subDirPath = 'squire-rethink';// No trailing slash

$routes = [
    $subDirPath => 'default',
    $subDirPath . 'test' => 'test',
    $subDirPath . 'contact' => 'contact',
    $subDirPath . 'index.php' => 'default'
];

view('layout', ['page' => array_key_exists($path, $routes) ? $routes[$path] : '404']);
