<?php
    require_once("HtmlPage.php");

    class RestorePasswordPage extends HtmlPage {

        function setContent(){
            $this->content = $this->renderTemplate('views/restore_password.php',[]);
        }

        function setHeader(){
            $this->header = $this->renderTemplate('views/Header.php',[]);
        }

    }

?>