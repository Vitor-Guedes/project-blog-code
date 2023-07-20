<?php

use BlogCodar\Controllers\BlogController;

/** @var BlogCodar\App $app */
$app->get('/', [BlogController::class, 'index'], [
    'name' => 'home'
]);

$app->get('/post/{id}', [BlogController::class, 'get'], [
    'name' => 'post-view'
]);

$app->get('/categories', [BlogController::class, 'categoryList'], [
    'name' => 'categories'
]);

$app->get('/about', [BlogController::class, 'about'], [
    'name' => 'about'
]);

$app->get('/contact', [BlogController::class, 'contact'], [
    'name' => 'contact'
]);