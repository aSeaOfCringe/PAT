<?php
    require_once("HtmlPage.php");

    class ProfilePage extends HtmlPage {

        function setContent(){
            $this->content = $this->renderTemplate('views/profile.php',[]);
        }

        function setHeader(){
            $this->header = $this->renderTemplate('views/Header.php',[]);
        }

    }

?>