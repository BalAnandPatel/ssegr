<?php
date_default_timezone_set("Asia/Kolkata");
class Database{
  
    // specify your own database credentials
    private $host = "ssegr.org.in";
    private $db_name = "glintqnj_recruitment";
    private $username = "glintqnj_recruitment";
    private $password = "12qw!@QW9984";
    public $conn;
  
    // get the database connection
    public function getConnection(){
  
        $this->conn = null;
  
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
  
        return $this->conn;
    }
}
?>