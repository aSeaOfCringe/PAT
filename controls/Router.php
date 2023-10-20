<?php

class Router {
    function __construct() {
        $pageURL = explode('/', $_SERVER['REQUEST_URI']);
        


        switch ($pageURL[1]) {
            case 'test':
                print("test");
                break;    

            default:
                require_once("models/MainPage.php");
                $Page = new MainPage("Paws and Tails");
                print($Page->getPage());              
              break;
          }
    }
}

?>