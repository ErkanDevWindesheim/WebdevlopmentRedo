<?php


$url = $_SERVER['REQUEST_URI'];

switch( $url ) {
    case '':
    case '/':
        require(__DIR__ . "/controllers/indexController.php");
        $Index = new indexController();
        $Index->index();
        break;
}