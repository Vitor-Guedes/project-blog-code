<?php

define('BASE_DIR', dirname(__DIR__));

require_once(BASE_DIR . '/vendor/autoload.php');

try {
    $app = new BlogCodar\App();

    require(BASE_DIR . '/src/Helpers/helper.php');
    
    require(BASE_DIR . '/src/Routes/collection.php');

    $app->run();
} catch (Exception $e) {
    echo $e->getMessage();
}