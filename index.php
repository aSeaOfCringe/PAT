<?php   


class PATWebApplication {

    function __construct() {
        require_once("models/MainPage.php");
    }

    function Run(){
        $pageURL = explode('/', $_SERVER['REQUEST_URI']);
        


        switch ($pageURL[1]) {
            case 'test':
                print("test");
                break;    

            default:
                $Page = new MainPage("Paws and Tails");
                print($Page->getPage());              
              break;
          }
    }

}

$Programm = new PATWebApplication();

$Programm->Run();


?>