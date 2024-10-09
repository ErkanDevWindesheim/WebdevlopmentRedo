<?php

/*--------------------------------------------------//
//                                                  //
//                     Routeing                     //
//                                                  //
//--------------------------------------------------*/


// server url ophalen
$url = $_SERVER['REQUEST_URI'];


// switch om te checken welke url op zit en bij de elk url naar path leidt
switch( $url) {
    case '':
    case '/':
    case '/frontpage':
        require_once(__DIR__ . "/controllers/frontpageController.php");
        $frontPageController = new frontpageController();
        $frontPageController->frontPage();
        break;
    case '/backpage':
        require_once(__DIR__ . "/controllers/backpageController.php");
        $backPageController = new backpageController();
        $backPageController->backPage();
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