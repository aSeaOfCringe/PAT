<?php   

class PATWebApplication {

    function __construct() {
        require_once("controls/Router.php");
        require_once("controls/DB.php");
    }

    function Run(){
        $db = new DBase();
        $db->test();
        session_start();
        $router = new Router($db);
    }

}

$Programm = new PATWebApplication();

$Programm->Run();


?>