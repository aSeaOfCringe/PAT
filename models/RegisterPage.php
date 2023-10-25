<?php
    require_once("HtmlPage.php");

    class RegisterPage extends HtmlPage {

        private $kludasPazinojums = "";

        function setContent(){
            $this->content = $this->renderTemplate('views/registration.php',['errorInfo' => $this->kludasPazinojums]);
        }


        function registerNewProfile($db){
            if(empty($_POST['email'])){
                $this->kludasPazinojums =  "Email nav ievadits";
                $this->setContent();
                return;
            }
            elseif (!preg_match("/^[a-zA-Z0-9_\.\-]+@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/", $_POST['email'])) {
                $this->kludasPazinojums =  "email nav ievadits korekti";
                $this->setContent();
                return;
            }
                
            if(empty($_POST["name"])){
                $this->kludasPazinojums =  "Vards nav ievadits";
                $this->setContent();
                return;
            }


            if(empty($_POST["surname"])){
                $this->kludasPazinojums =  "Uzvards nav ievadits";
                $this->setContent();
                return;
            }

            if(empty($_POST["password"])){
                $this->kludasPazinojums =  "Parole nav ievadita";
                $this->setContent();
                return;
            }

            if(empty($_POST["confirm_password"])){
                $this->kludasPazinojums =  "Atkartoti ievadiet parole";
                $this->setContent();
                return;
            }

            if($_POST["password"] != $_POST["confirm_password"]){
                $this->kludasPazinojums =  "Paroles nesakrit";
                $this->setContent();
                return;
            }

            $email = mysqli_real_escape_string($db->connection,$_POST["email"]);
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $name = mysqli_real_escape_string($db->connection,$_POST["name"]);
            $surname = mysqli_real_escape_string($db->connection,$_POST["surname"]);
            $address = mysqli_real_escape_string($db->connection,$_POST["address"]);
            $phone = mysqli_real_escape_string($db->connection,$_POST["phone"]);
            
            //TODO check if user is already registered
            //TODO add Address field to sql table

            $RegisterQuery = "INSERT INTO `lietotaji` VALUES(0,'$name','$surname','','$email','$phone','$password')";
            $result = mysqli_query($db->connection,$RegisterQuery) or die(mysqli_error());

            $this->kludasPazinojums =  "REGISTRETS!";
            $this->setContent();

            header("location:/");
        }

    }

?>