<?php
    require_once("HtmlPage.php");

    class LoginPage extends HtmlPage {

        private $kludasPazinojums = "";

        function setContent(){
            $this->content = $this->renderTemplate('views/login.php',['errorInfo' => $this->kludasPazinojums]);
        }


        function login($db){
            if(empty($_POST["username"])){
                $this->kludasPazinojums =  "Email nav ievadits";
                $this->setContent();
                return;
            }
            if(empty($_POST["password"])){
                $this->kludasPazinojums =  "parole nav ievadita";
                $this->setContent();
                return;
            }

            $email = mysqli_real_escape_string($db->connection,$_POST['username']);
            $password = $_POST["password"];
            $checkpassword = mysqli_query($db->connection,"SELECT `parole`,`epasts` FROM `lietotaji` where `epasts` = '$email'");
            $verifyPsw =  FALSE;
            while($x = mysqli_fetch_array($checkpassword)){
                $verifyPsw = password_verify($password, $x['parole']);   
            }
      
            if(!$verifyPsw){
                $this->kludasPazinojums = 'Epasts vai parole nav pareiza';
                $this->setContent();
                return;
            }

            $userQuery = mysqli_query($db->connection,"SELECT `lietotaji_id`,`vards`,`uzvards` FROM `lietotaji` where `epasts` = '$email'");
            $user = mysqli_fetch_array($userQuery);
            $_SESSION['id'] = $user['lietotaji_id'];
            $_SESSION['name'] = $user['vards'];
            $_SESSION['surname'] = $user['uzvards'];
            
            header("location:/");

        }

        function logout($db){
            unset($_SESSION['id']);
            unset($_SESSION['name']);
            unset($_SESSION['surname']);
            header("location:/");
        }

    }

?>