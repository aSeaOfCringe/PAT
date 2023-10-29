<?php
    require_once("HtmlPage.php");

    class ShopPage extends HtmlPage {

        public $shops = [];

        function setContent(){
            $this->content = $this->renderTemplate('views/shop.php',[]);
        }

        function fetchShops($db){
            $result = mysqli_query($db->connection,"SELECT * FROM `veikali`");
            while($row = $result->fetch_assoc()){
                array_push($this->shops, [
                    'id' => $row['id'],
                    'logo' =>$row['logo'],
                    'nosaukums' =>$row['nosaukums'],
                    'majaslapa' =>$row['majaslapa']]);
            }
            $this->setContent();
        }
    }

?>