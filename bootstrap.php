<?php

define(
    'SCRIPT_PATH',
    cleanPath(pathinfo($_SERVER['SCRIPT_NAME'], PATHINFO_DIRNAME))
);

define(
    'ROOT_HTTP',
    '/' . SCRIPT_PATH . (SCRIPT_PATH == '' ? '' : '/')
);

function hashCreate() {
    return bin2hex(random_bytes(24));
}

function cleanPath($path) {
    return trim(str_replace(['\\', '%5C'], '/', $path), '/');
}

function view(string $name, array $data = []): int
{
    extract($data, EXTR_OVERWRITE);
    return require "./pages/$name.php";
}