<?php 
class modal{
    public $connection="";
    //databse connectivity
    public function __construct(){
        try{
            //error_reporting(0);
            $this->connection=new mysqli("localhost","root","","testing");
            //echo "connection successfully";
        }catch(Exception $e){
            echo "this database not connected";
        }
    }
    public function insert_data($table,$peram){
        $key1=array_keys($peram);
        $key=implode(",",$key1);

        $value=array_values($peram);
        $value1=implode("','",$value);
        $query="INSERT INTO $table($key) values('$value1') ORDER BY eid DESC";
        $exe=mysqli_query($this->connection,$query);
        return $exe;
    }
    public function select_data($table,$table1,$table2,$where,$where1){
        $query="SELECT * FROM $table join $table1 on $where join $table2 on $where1";
        
        $exe=mysqli_query($this->connection,$query);
        
        while($fetch=mysqli_fetch_array($exe)){
            $arr[]=$fetch;
        }
        return $arr;

    }
    public function delete_employee($table,$data){
        $key=array_keys($data);
        $key1=implode(",",$key);

        $value=array_values($data);
        $value1=implode("','",$value);
        $query="DELETE  FROM $table WHERE eid='$value1'";
       // exit();
        $exe= mysqli_query($this->connection,$query);
        return $exe;
        
    }
    //member function in city and state data
    public function fetch_data($table){
        $query="SELECT * FROM $table";
        $exe=mysqli_query($this->connection,$query);
        while($fetch=mysqli_fetch_array($exe)){
            $arr[]=$fetch;
        }
        return $arr;
    }

}
?>