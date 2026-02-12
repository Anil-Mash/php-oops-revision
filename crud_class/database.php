<?php

class Database{
    private $db_host = "localhost";
    private $db_name = "opps_testing";
    private $db_username = "root"; 
    private $db_password = "";
    private $conn = null;
    private $result = array();

    public function __construct()
    {
        if(!$this->conn){
        $this->conn = new mysqli($this->db_host, $this->db_username, $this->db_password, $this->db_name);
        
        if ($this->conn->connect_error) {
            //die("Connection failed: " . $this->conn->connect_error);
            array_push($this->result, $this->conn->connect_error);
            return false;
        }
        }else{
            return true;
        }

    }

    public function insert(){
        
    }

    public function __destruct()
    {
        if($this->conn){
            if($this->conn->close()){
            $this->conn = null;
            return true;
            }
        }else{
            return false;
        }
    }
}

?>