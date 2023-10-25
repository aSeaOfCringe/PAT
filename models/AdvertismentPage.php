<?php
    require_once("HtmlPage.php");

    class AdvertismentPage extends HtmlPage {

        function setContent(){
            $this->content = $this->renderTemplate('views/advertisement.php',[]);
        }

    }

?>