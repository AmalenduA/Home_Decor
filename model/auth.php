<?php 

// Database connect 
include_once('../Database/Db_connect.php');

class Auth
{
    var $_db;
    public function __construct($db=new DB_CON()) 
    {
        $this->_db = $db->con;
    }
    
    public function login($email,$password)
    {
        $sql ="SELECT * FROM `users` WHERE `email`='$email'";
        $res= $this->_db->query($sql)->fetch_object();
        if ($res && password_verify($password,$res->password)){

            session_start();
            $_SESSION['logined']=true;
            $_SESSION['user_id']=$res->user_id;
            $_SESSION['user_name']=$res->name;
            $_SESSION['role']=$res->role;
            if($res->role=="seller"){
            echo "<script>
            alert('Login Successful');
            window.location.href='./seller/dashboard/sellerdashboard.php'
                 </script>";
            } 
        
                echo "<script>
                alert('Login Success');
                window.location.href='/decor/template/customer/home.php'
                </script>";

        }else {
            echo "<script>
            alert('Login failed'$res->id);
            window.location.href='./login.php'
            </script>";
        }
    
    }
}
?>