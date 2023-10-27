<?php
    require_once("HtmlPage.php");

    class ShelterPage extends HtmlPage {


        function setContent(){
            $this->content = $this->renderTemplate('views/shelterInfo.php',[]);
        }

        
    }

?>