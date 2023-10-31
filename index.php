<?php   

class PATWebApplication {

    function __construct() {
        require_once("controls/Router.php");
        require_once("controls/DB.php");
    }

    function Run(){
        $db = new DBase();
        session_start();
        if(isset($_SESSION["id"])){
            $router = new AuthRouter($db);
        }else{
            $router = new Router($db);
        }
    }

}

$Programm = new PATWebApplication();

$Programm->Run();


?>