<?php
    require_once("HtmlPage.php");

    class MainPage extends HtmlPage {

        function setContent(){
            $this->content = "CONTENT";
        }

        function setHeader(){
            $this->header = $this->renderTemplate('views/Header.php',[]);
        }

    }

?>