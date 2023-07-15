<?php

$http = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";  

$BASE_URL = $http . $_SERVER['HTTP_HOST'] . '/';

$CURRENT_URL = $http . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 

$URL_PATH = parse_url($CURRENT_URL)['path'];

$path = array_filter(explode('/', $URL_PATH));
$postId = null;

if (count($path) > 1) {
    $URL_PATH = array_shift($path);
    $postId = array_shift($path);
}

$CURRENT_TEMPLATE = str_replace('/', '', $URL_PATH);
$CURRENT_TEMPLATE = $CURRENT_TEMPLATE ? $CURRENT_TEMPLATE : 'home';