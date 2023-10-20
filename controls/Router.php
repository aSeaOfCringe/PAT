<?php

class Router {
    function __construct() {
        $pageURL = explode('/', $_SERVER['REQUEST_URI']);
        
        
        switch ($pageURL[1]) {
            case 'news':
                require_once("models/NewsPage.php");
                $Page = new NewsPage("Jaunumi");
                break;    
            default:
                require_once("models/MainPage.php");
                $Page = new MainPage("Paws and Tails");             
              break;
          }

          print($Page->getPage());  
    }
}

?>