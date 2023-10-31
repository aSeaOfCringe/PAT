<?php
    require_once("HtmlPage.php");

    class ProfilePage extends HtmlPage {

        private $profileData = [];
        private $sludinajumuData = [];

        function setContent(){
            $this->content = $this->renderTemplate('views/profile.php',['data'=> $this->profileData,'sludinajumi' => $this->sludinajumuData]);
        }

        function getProfileData($db){
            $currentID = $_SESSION['id'];
            $profileQuery = mysqli_query($db->connection,"SELECT * FROM `lietotaji` where `lietotaji_id` = '$currentID'");
            $resultProfile = mysqli_fetch_assoc($profileQuery);
            $this->profileData = $resultProfile;
            $advertismentQuery =  mysqli_query($db->connection,"SELECT * FROM `sludinajumi` where `lietotatajs_id` = '$currentID'");
            while($row = mysqli_fetch_array($advertismentQuery)) {
                $resultAdvertismetns[] = $row;
            }
            $this->sludinajumuData = $resultAdvertismetns;
            $this->setContent();
        }


    }

?>