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

    private function tableExists($table){
        $sql = "SHOW TABLES FROM $this->db_name LIKE '$table'";
        $tableInDb = $this->conn->query($sql);
        if($tableInDb){
            if($tableInDb->num_rows == 1){
                return true;
            }else{
                array_push($this->result, $table." does not exist in this database");
                return false;
            }
        }
    }

    public function getResult(){
        $val = $this->result;
        $this->result = array();
        return $val;
    }

    public function insert( $table, $params = array()){
        if($this->tableExists($table)){
           // print_r($params);
            $table_columns = implode(',', array_keys($params));
            $table_values = implode("','", array_values($params));
            $sql = "INSERT INTO $table ($table_columns) VALUES ('$table_values')";
            if($this->conn->query($sql)){
                array_push($this->result, $this->conn->insert_id);
                return true;
            }else{
                array_push($this->result, $this->conn->error);
                return false;
            }
        }else{
            return false;
        }
        
    }

    public function update($table, $params = array(), $where = null){
        if($this->tableExists($table)){
            $args = array();
            foreach($params as $key => $value){
                $args[] = "$key='$value'";
            }
            $sql = "UPDATE $table SET ". implode(', ', $args);
            if($where != null){
                $sql .= " WHERE $where";
            }
            if($this->conn->query($sql)){
                array_push($this->result, $this->conn->affected_rows);
                return true;
            }else{
                array_push($this->result, $this->conn->error);
                return false;
            }
        }else{
            return false;
        }

    }

    public function delete($table,  $where = null){
        if($this->tableExists($table)){
            $sql = "DELETE FROM $table";
            if($where != null){
                $sql .= " WHERE $where";
            }
            if($this->conn->query($sql)){
                array_push($this->result, $this->conn->affected_rows);
                return true;
            }else{
                array_push($this->result, $this->conn->error);
                return false;
            }
        }else{
            return false;
        }
    }

    public function select($table, $cols = "*", $join=null,  $where = null, $order = null, $limit = null){

        if($this->tableExists($table)){
            $sql = "SELECT $cols FROM $table";
            if($join != null){
                $sql .= " JOIN $join";
            }
            if($where != null){
                $sql .= " WHERE $where";
            }
            if($order != null){
                $sql .= " ORDER BY $order";
            }
            if($limit != null){
                $sql .= " LIMIT 0, $limit";
            }
            $query = $this->conn->query($sql);
            if($query){
                $this->result = $query->fetch_all(MYSQLI_ASSOC);
                return true;
            }else{
                array_push($this->result, $this->conn->error);
                return false;
            }
        }else{
            return false;
        }
    }

    public function rawQuery($sql){
        $query = $this->conn->query($sql);
        if($query){
            $this->result = $query->fetch_all(MYSQLI_ASSOC);
            return true;
        }else{
            array_push($this->result, $this->conn->error);
            return false;
        }
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