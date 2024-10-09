<?php


$url = $_SERVER['REQUEST_URI'];



switch( $url) {
    case '':
    case '/':
    case '/frontpage':
        require_once(__DIR__ . "/controllers/frontpageController.php");
        $FrontIndex = new frontpageController();
        $FrontIndex->frontPage();
        break;
    case '/backpage':
        require_once(__DIR__ . "/controllers/backpageController.php");
        $backIndex = new backpageController();
        $backIndex->backPage();
        break;
    case '/formpage':
        require_once(__DIR__ . '/controllers/formpageController.php');
        $formPageController = new formpageController();
        $formPageController->index();
        break;
    case '/submit-form':
        require_once(__DIR__ . '/controllers/formpageController.php');
        $formPageController = new formpageController();
        $formPageController->create();
        break;
    case '/commentAdd':
        require_once(__DIR__ . '/controllers/formpageController.php');
        $formPageController = new formpageController();
        $formPageController->Addcomment();
        break;
    
    default:
        echo "404 - Page not found";
        break;
    }