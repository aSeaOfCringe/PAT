<?php
declare(strict_types=1);
// // Please specify your Mail Server - Example: mail.example.com.
// ini_set("SMTP","mail.example.com");

// // Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
// ini_set("smtp_port","25");

// // Please specify the return address to use
// ini_set('sendmail_from', 'pat@pat.com');

    require_once("HtmlPage.php");
    class RestorePasswordPage extends HtmlPage {

        private $kludasPazinojums = "";

        function setContent(){
            $this->content = $this->renderTemplate('views/restore_password.php',['errorInfo' => $this->kludasPazinojums]);
        }

        function restorePassword($db) {
            if(empty($_POST["email"])){
                $this->kludasPazinojums =  "Ievadiet e-pastu!";
                $this->setContent();
                return;
            }
            $email = mysqli_real_escape_string($db->connection,$_POST['email']);
            $result = mysqli_query($db->connection,"SELECT `parole`,`epasts` FROM `lietotaji`  WHERE `epasts` = '$email'");

            $user = [];
            while($row = $result->fetch_assoc()){
                // echo"email sent";
                array_push($user, [
                    'epasts' => $row['epasts'],
                    'parole' =>$row['parole']]);
            }
            // print_r($user);

            if($user == []) {
                $this->kludasPazinojums =  "E-pasts nav reģistrēts";
                $this->setContent();
                return;
            }

            $mail=$user[0]['epasts'];
            $subject = "PAT paroles atgūšana";
            $message = "Vietnē PAT tika saņemts pieprasījums atjaunot paroli kontam ar lietotājvārdu: " . $mail . ".
            Jūsu parole ir " . $user[0]['parole'] . ".";
            wordwrap($message,70);
            // echo $message;

            ini_set('max_execution_time', '300');
            // phpinfo();
            mail($mail, $subject, $message);
            
            // $this->setContent();
            return;
        }

    }
?>