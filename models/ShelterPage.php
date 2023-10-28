<?php
    require_once("HtmlPage.php");

    class ShelterPage extends HtmlPage {

        public $sh = [];

        function setContent(){
            $this->content = $this->renderTemplate('views/shelterInfo.php',['data' => $this->sh]);
        }

        function fetchShelters($db){
            $result = mysqli_query($db->connection,"SELECT `id`, `nosaukums`, `adrese`, `telefona_nr`, `majaslapa`, `informacija` FROM `patversmes`");
                while($row = $result->fetch_assoc()){
                    array_push($this->sh, [
                        'id' => $row['id'],
                        'nosaukums' =>$row['nosaukums'],
                        'adrese' =>$row['adrese'],
                        'telefons' => $row['telefona_nr'],
                        'majaslapa' => $row['majaslapa'],
                        'info' => $row['informacija']
                        ]);
                }
            $this->setContent();
        }

    }

?>