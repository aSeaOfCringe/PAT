<?php
    require_once("HtmlPage.php");

    class NewsPage extends HtmlPage {

        private $data = [];
        function setContent(){
            $this->content = $this->renderTemplate('views/news.php',['data' => $this->data]);
        }


        function getData($db){
            $DataQuery = "SELECT * FROM `sludinajumi`";
            $ResultQuery = mysqli_query($db->connection, $DataQuery);

            $this->data = mysqli_fetch_array($ResultQuery);
            $this->setContent();
        }


    }

?>