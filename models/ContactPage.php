<?php
    require_once("HtmlPage.php");

    class ContactPage extends HtmlPage {

        function setContent(){
            $this->content = $this->renderTemplate('views/contacts.php',[]);
        }

    }

?>