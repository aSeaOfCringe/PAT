<?php   


class PATWebApplication {

    function __construct() {
        require_once("controls/Router.php");
    }

    function Run(){
        $router = new Router();
    }

}

$Programm = new PATWebApplication();

$Programm->Run();


?>