<?php
    require_once("HtmlPage.php");

    class DonatePage extends HtmlPage {

        function setContent(){
            $this->content = $this->renderTemplate('views/donate.php',[]);
        }

        function setHeader(){
            $this->header = $this->renderTemplate('views/Header.php',[]);
        }

    }

?>