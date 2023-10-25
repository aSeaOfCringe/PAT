<?php   

class PATWebApplication {

    function __construct() {
        require_once("controls/Router.php");
        require_once("controls/DB.php");
    }

    function Run(){
        $db = new DBase();
        $router = new Router();
    }

}

$Programm = new PATWebApplication();

$Programm->Run();


?>