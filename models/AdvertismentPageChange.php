<?php
    require_once("HtmlPage.php");

    class AdvertismentPageChange extends HtmlPage {

        function setContent(){
            $this->content = $this->renderTemplate('views/advertisement_change.php',[]);
        }

    }

?>