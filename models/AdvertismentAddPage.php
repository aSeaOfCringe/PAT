<?php
    require_once("HtmlPage.php");

    class AdvertismentAddPage extends HtmlPage {

        function setContent(){
            $this->content = $this->renderTemplate('views/new_advertisement.php',[]);
        }

    }

?>