<?php 

// Database connect 
//include_once('decor/database/Db_connect.php');

class User
{
    var $_db;
    public function __construct($db) 
    {
        $this->_db = $db->con;
    }
    
    public function insert($name,$email,$password,$role="user")  
    {
        $pass_hash=password_hash($password,PASSWORD_BCRYPT);
        $sql = $this->_db->prepare("INSERT INTO `users` (`name`,`email`,`password`,`role`) VALUES (?, ?, ?,?)");
        $sql->bind_param("ssss",$name, $email,$pass_hash,$role);
        return $sql->execute();
    }
    public function fetchUsers()  {
        $sql2="SELECT * FROM `users` WHERE `role`='user'";
        return $this->_db->query($sql2);
        
    }
    public function deleteUser($id){
        $sql="DELETE FROM `users` WHERE `id`=$id";
        return $this->_db->query($sql);

    }
}
?>