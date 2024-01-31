
<?php include_once('../database/Db_connect.php');?>

<?php

class Cart{
    var $_db;
    public function __construct($db) 
    {
        $this->_db = $db->con;
    }

    public function insertCart($product_id,$user_id){
        $sql=$this->_db->prepare("INSERT INTO `cart` (`product_id`,`user_id` ) VALUES (?,?)");
        $sql->bind_param("ss", $product_id,$user_id);
        return $sql->execute();
    }
}

?>