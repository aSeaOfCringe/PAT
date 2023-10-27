<?php
    require_once("HtmlPage.php");

    class SheltersPage extends HtmlPage {

        public $shelters = [];

        function startPage($DB){
            $dbShelters = $this->fetchShelters($db);
            setContent();
        }

        function setContent(){
            
            $this->content = $this->renderTemplate('views/shelters.php', $this->shelters);
        }

        function fetchShelters($db){
            $result = mysqli_query($db->connection,"SELECT `id`, `nosaukums`, `adrese`, `lat`, `lng` FROM `patversmes`");
                while($row = $result->fetch_assoc()){
                    array_push($this->shelters, [
                        'id' => $row['id'],
                        'nosaukums' =>$row['nosaukums'],
                        'adrese' =>$row['adrese'],
                        'lat' =>$row['lat'],
                        'lng' =>$row['lng']]);
                }
            print_r($this->shelters);
            return $this->shelters;
        }

    }

?>