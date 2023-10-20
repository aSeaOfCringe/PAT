<?php
    require_once("HtmlPage.php");

    class ProfileChangePage extends HtmlPage {

        function setContent(){
            $this->content = $this->renderTemplate('views/profile_change.php',[]);
        }

        function setHeader(){
            $this->header = $this->renderTemplate('views/Header.php',[]);
        }

    }

?>