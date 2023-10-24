<?php
    require_once("HtmlPage.php");
    

    class SheltersPage extends HtmlPage {

        function setContent(){
            $this->content = $this->renderTemplate('views/shelters.php',[]);
        }

        function setHeader(){
            $this->header = $this->renderTemplate('views/Header.php',[]);
        }

    }

?>