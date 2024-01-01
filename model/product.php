<?php

class Product
{
    var $_db;
    public function __construct($db){
        $this->_db =$db->con;
    }
    public function addProduct($product_name,$product_price,$product_image,$product_description,$category_id){
     $sql=$this->_db->prepare("INSERT INTO `product` ( `product_name`,`price`,`image`,`description`,`category_id`) VALUES (?,?,?,?,?)");
     $sql->bind_param("sssss", $product_name,$product_price,$product_image,$product_description,$category_id);
     return $sql->execute();
    }

    public function fetchProduct(){
        $sql="SELECT * FROM `product`";
        return $this->_db->query($sql);
    }

    public function deleteProduct($id){
        $sql= "DELETE FROM `product` WHERE  `id`=$id";
        return $this->_db->query($sql);
    }

    public function productById($id){
        $sql= "SELECT * FROM `product` WHERE `id`=$id";
        return $this->_db->query($sql)->fetch_object();
    }

    public function updateProduct($id,$product_name,$product_price,$product_image,$product_description){
        $sql= "UPDATE   `product` SET `product_name`='$product_name' ,`price`='$product_price',`image`='$product_image', `description`='$product_description' WHERE  `id`=$id";
        return $this->_db->query($sql);
    }

    public function fetchProductById($id){
        $sql="SELECT * FROM `product` WHERE `category_id`=$id";
        return $this->_db->query($sql);
    }
}

?>