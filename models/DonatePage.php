<?php
    require_once("HtmlPage.php");

    class DonatePage extends HtmlPage {

        function setContent(){
            $this->content = $this->renderTemplate('views/donate.php',[]);
        }


    }

?>