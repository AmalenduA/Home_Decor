<?php

class Category
{
    var $_db;
    public function __construct($db){
        $this->_db =$db->con;
    }
    public function addCategory($category_name,$category_description){
     $sql=$this->_db->prepare("INSERT INTO `categories` (`category_name`,`description`) VALUES (?,?)");
     $sql->bind_param("ss", $category_name, $category_description);
     return $sql->execute();
    }

    public function fetchCategory(){
        $sql="SELECT * FROM `categories`";
        return $this->_db->query($sql);
    }

    public function deleteCategory($id){
        $sql= "DELETE FROM `categories` WHERE  `id`=$id";
        return $this->_db->query($sql);
    }

    public function categoryById($id){
        $sql= "SELECT * FROM `categories` WHERE `id`=$id";
        return $this->_db->query($sql)->fetch_object();
    }

    public function updateCategory($id, $category_name, $category_description){
        $sql= "UPDATE   `categories`SET `category_name`='$category_name' , `description`='$category_description' WHERE  `id`=$id";
        return $this->_db->query($sql);
    }
}

?>