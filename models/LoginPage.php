<?php
    require_once("HtmlPage.php");

    class LoginPage extends HtmlPage {

        function setContent(){
            $this->content = $this->renderTemplate('views/login.php',[]);
        }

        function setHeader(){
            $this->header = $this->renderTemplate('views/Header.php',[]);
        }

    }

?>