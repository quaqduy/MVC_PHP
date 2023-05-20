<?php
class DB {
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbName = "mvc";
    public $conn ;

    function __construct(){
        // Create connection
        $this->conn = new mysqli($this->servername, $this->username, $this->password);

        mysqli_select_db($this->conn, $this->dbName);
        mysqli_query($this->conn,"SET NAMES 'utf8'");


        // Check connection
        if ($this->conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully <br>";
    }
   
}
?>