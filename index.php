<?php

require 'bootstrap.php';

$page_url = substr($_SERVER['REQUEST_URI'], strlen(ROOT_HTTP));
$path = strtolower(parse_url($page_url, PHP_URL_PATH));

$routes = [
    ''          => 'default',
    'test'      => 'test',
    'contact'   => 'contact',
    'other'   => 'other/anotherfile',
    'index.php' => 'default'
];

view('layout', ['page' => array_key_exists($path, $routes) ? $routes[$path] : '404']);
