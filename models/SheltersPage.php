<?php
    require_once("HtmlPage.php");
    

    class SheltersPage extends HtmlPage {

        function setContent(){
            $this->content = $this->renderTemplate('views/shelters.php',[]);
        }


    }

?>