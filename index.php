<?php

require(__DIR__ . "/controllers/frontpageController.php");
require(__DIR__ . "/controllers/backpageController.php");

$url = $_SERVER['REQUEST_URI'];

$FrontIndex = new frontpageController();
$backIndex = new backpageController();


switch( $url) {
    case '':
    case '/':
    case '/frontpage':
        $FrontIndex->frontPage();
        break;
    case '/backpage':
        $backIndex->backPage();
        break;
    default:
        echo "404 - Page not found";
        break;
}