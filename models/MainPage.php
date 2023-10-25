<?php
    require_once("HtmlPage.php");

    class MainPage extends HtmlPage {

        function setContent(){
            $this->content = $this->renderTemplate('views/Main.php',[]);
        }

    }

?>