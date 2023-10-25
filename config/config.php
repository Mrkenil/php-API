<?php 

class Config{
    public $HOSTNAME = "127.0.0.1";
    public $USERNAME = "root";
    public $PASSWORD = "";
    public $DB_NAME = "php";
    public $con_res;

    public function connect(){
        $this->con_res = mysqli_connect($this->HOSTNAME,$this->USERNAME,$this->PASSWORD,$this->DB_NAME);
        return $this->con_res;
    }

    public function insert($name,$grid){
        $this->connect();
        $query = "INSERT INTO class(name,grid) VALUE('$name',$grid);";

        $res = mysqli_query($this->con_res,$query);
        return $res;
    }

    public function select(){
        $this->connect();
        $query = "SELECT * FROM class;";

        $res = mysqli_query($this->con_res,$query);
        
        return $res;
    }

    public function delete($id){
        $this->connect();
        $query = "DELETE FROM class WHERE id=$id;";

        $res = mysqli_query($this->con_res,$query);
        return $res;
    }
}

?>