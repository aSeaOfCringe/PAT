<?php
    require_once("HtmlPage.php");

    class ShopPage extends HtmlPage {

        function setContent(){
            $this->content = $this->renderTemplate('views/shop.php',[]);
        }

        function setHeader(){
            $this->header = $this->renderTemplate('views/Header.php',[]);
        }

    }

?>