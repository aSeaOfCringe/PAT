<?php
    require_once("HtmlPage.php");

    class AdvertismentPage extends HtmlPage {
    public $users = [];
    public $advertisments = [];

        function setContent(){
            $this->content = $this->renderTemplate('views/advertisement.php',['data'=> $this->users,'sludinajumi' => $this->advertisments]);
        }

        function fetchData($db){
            $ResultAdv = mysqli_query($db->connection, "SELECT * FROM `sludinajumi`");
            $dataArray = [];
            while($row = mysqli_fetch_array($ResultAdv)) {
                $dataArray[] = $row;
            }
            $this->advertisments = $dataArray;

            $ResultUsers = mysqli_query($db->connection, "SELECT * FROM `lietotaji`");
            $dataArray2 = [];
            while($row = mysqli_fetch_array($ResultUsers)) {
                $dataArray2[] = $row;
            }
            $this->users = $dataArray2;
            $this->setContent();
        }

    }

?>