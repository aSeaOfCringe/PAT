<?php
    require_once("HtmlPage.php");

    class ContactPage extends HtmlPage {

        function setContent(){
            $this->content = $this->renderTemplate('views/contacts.php',[]);
        }

        function setHeader(){
            $this->header = $this->renderTemplate('views/Header.php',[]);
        }

    }

?>