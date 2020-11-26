<?php

$allowedPages = ['default', 'test', 'contact'];
$path = strtolower(trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));

if (empty($path))
{
    $page = 'default.php';
}
elseif (in_array($path, $allowedPages) && file_exists("./pages/$path.php"))
{
    $page = "$path.php";
}
else
{
    $page = '404.php';
}

require './partials/head.php';
require './partials/menu.php';
require "./pages/$page";
require './partials/footer.php';
