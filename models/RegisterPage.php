<?php
    require_once("HtmlPage.php");

    class RegisterPage extends HtmlPage {

        function setContent(){
            $this->content = $this->renderTemplate('views/registration.php',[]);
        }

        function setHeader(){
            $this->header = $this->renderTemplate('views/Header.php',[]);
        }

    }

?>