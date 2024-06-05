<?php require "../config/config.php"; ?>

<?php

   class App {

      public $host = HOST;
      public $dbname = DBNAME;
      public $user = USER;
      public $pass = PASS;

      public $link;

      //create construct

      public function __construct()
      {
          $this->connect();
      }

      public function connect(){
            $this->link = new PDO("mysql:host=". $this->host .";dbname=". $this->dbname .";user=". $this->user .";pass=". $this->pass .";");

            if($this->link){
                echo "DB Connection is working";
            }
      }

   }

   $obj = new App;
 