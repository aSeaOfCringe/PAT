<?php
    require_once("HtmlPage.php");

    class NewsPage extends HtmlPage {

        function setContent(){
            $this->content = $this->renderTemplate('views/news.php',[]);
        }

        function setHeader(){
            $this->header = $this->renderTemplate('views/Header.php',[]);
        }

    }

?>