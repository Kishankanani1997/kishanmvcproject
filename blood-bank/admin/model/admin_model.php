<?php
class admin_model
{
    public $connection="";
    public function __construct()
    {
        // database connection
        session_start();

        try
        {

            $this->connection =new mysqli("localhost","root","","kishanmvc_project");
            //echo "Connection success";
        }
        catch( Exceptions $e)
        {
            die(mysqli_error($this->coonection,$e));
        }
    }

    //here we create member function to insert adminuser to admin panel
    public function insertingalldata($table,$data)
    {
        $column=array_keys($data);
        $column1=implode(",",$column);
        
        $value=array_values($data);
        $value1=implode("','",$value);

        $insert="insert into $table($column1) values('$value1')";
        $execute=mysqli_query($this->connection,$insert);
        return $execute; 
    }


}
?>