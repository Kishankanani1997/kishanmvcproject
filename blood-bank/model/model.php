<?php
class model
{
    public $connection="";
    public function __construct()
    {
        // database connection
        session_start();

        try
        {
            $this->connection =new mysqli("localhost","root","","kishanmvc_project");
            // echo "Connection Success";
        }
        catch(Exceptions $e)
        {
            die(mysqli_error($this->connection,$e));
        }
    }

    // Here we create member function for selectall the data
        public function selectalldata($table)
        {
            $select="select * from $table";
            $execute=mysqli_query($this->connection,$select);
            while($fetch=mysqli_fetch_array($execute))
            {
                $arr[]=$fetch;
            }
            return $arr;
        }
    // here we create member function to insert the user data
    public function insertalldata($table,$data)
    {
        $column=array_keys($data);
        $column1=implode(",",$column);
        
        $value=array_values($data);
        $value1=implode("','",$value);

        $insert="insert into $table($column1) values('$value1')";
        $execute=mysqli_query($this->connection,$insert);
        return $execute; 
    }

    // here we create public function for loogin asa user 
    public function userlogin ($table,$email,$pass)
    {
        $select="select * from $table where email='$email' and password='$pass'";
        $execute=mysqli_query($this->connection,$select);
        $fetch=mysqli_fetch_array($execute);
        $no_rows=mysqli_num_rows($execute);

        if($no_rows==1)
        {
            $_SESSION["user_id"]=$fetch["user_id"];
            $_SESSION["name"]=$fetch["name"];
            $_SESSION["email"]=$fetch["email"];
            return true;
        }
        else 
        {
            return false;
        }
    }

    //here we write code for logout as a customer
    public function logout()
    {
        unset($_SESSION["user_id"]);
        unset($_SESSION["name"]);
        unset($_SESSION["email"]);
        session_destroy();
        return true;
    }

    // code for forgot password
    public function forgotpassword($table,$column,$email)
    {
        $select="select password from $table where $column='$email'";
        $execute=mysqli_query($this->connection,$select);
        $fetch=mysqli_fetch_array($execute);
        $num_rows=mysqli_num_rows($execute);
        $pass=base64_decode($fetch["password"]);
        if($num_rows==1)
        {
            return $pass;
        }
        else
        {
            return false;
        }
    }
        
}
?>