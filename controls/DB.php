<?php
Class DBase{
  private $db_ip = "sql11.freemysqlhosting.net";
  private $login = "sql11656494";
  private $psw = 'I6kLPHcA5G';
  private $db_name="sql11656494";

        public $connection;

        function conncect(){
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $this->connection = mysqli_connect($this->db_ip,$this->login,$this->psw,$this->db_name) or die(mysqli_error($this->connection));
        }

        function test(){
            $testQuery = mysqli_query($this->connection,
            "SELECT * FROM `testTable`");
		    $testString = mysqli_fetch_assoc($testQuery);
            echo($testString["tekst"]);
        }

        function __construct(){
            $this->conncect();
        }
    }

?>