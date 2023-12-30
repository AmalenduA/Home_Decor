<?php 

// Database connect 
include_once('../Database/Db_connect.php');

class User
{
    var $_db;
    public function __construct($db=new DB_CON()) 
    {
        $this->_db = $db->con;
    }
    
    public function login($email,$password)
    {
        $sql ="SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
        $res= $this->_db->query($sql)->fetch_object();
        if ($res){

            echo "<script>
            alert('Login Successful');
            window.location.href='../index.php'
        </script>";
        } else{

           // $_SESSION['user_id']=$res->id;
            //$_SESSION['user_name']=$res->name;
            //exit();
            echo "<script>
            alert('Login failed'$res->id);
            window.location.href='./login.php'
            </script>";
        }
        
        
    }

    public function insert($name,$email,$password)  
    {

        // $sql="INSERT INTO `users` (`name`,`email`,`password`) VALUES ('$name','$email','$password')";
        $sql = $this->_db->prepare("INSERT INTO `users` (`name`,`email`,`password`) VALUES (?, ?, ?)");
        $sql->bind_param("sss",$name, $email,$password);
        return $sql->execute();
    }
}
?>