<?php
    require_once("HtmlPage.php");

    class NewsPage extends HtmlPage {

        public $data = [];
        function setContent(){
            $this->content = $this->renderTemplate('views/news.php',['data' => $this->data]);
        }


        function getData($db){
            $DataQuery = "SELECT * FROM `sludinajumi`";
            $ResultQuery = mysqli_query($db->connection, $DataQuery);

            $dataArray = [];
            while($row = mysqli_fetch_array($ResultQuery)) {
                $dataArray[] = $row;
            }
            $this->data = $dataArray;
            $this->setContent();
        }

        function fetchAdoption($db){
            $DataQuery = "SELECT * FROM `sludinajumi` WHERE `darijuma_veids` == 'adoption'";
            $ResultQuery = mysqli_query($db->connection, $DataQuery);

            $dataArray = [];
            while($row = mysqli_fetch_array($ResultQuery)) {
                $dataArray[] = $row;
            }
            $this->data = $dataArray;
            $this->setContent();
        }

    }

?>