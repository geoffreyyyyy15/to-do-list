<?php 

    class Connection {
        public $hostname;
        public $username;
        public $password;
        public $database; 
       
       public function setConnection($hostname, $username, $password, $database) {
          $this->hostname = $hostname; $this->username = $username;
             $this->password = $password; $this->database = $database;


          
        }
        public function connect($conn) {
         $conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
        // Check Connection
         if($conn->connect_error) {
            die("Connection Failed" . $conn->connect_error);
        }
        }
    }

$connect1 = new Connection();

$conn->setConnection("localhost", "root", "", "todo");






