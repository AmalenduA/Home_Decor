<?php 
include('../../../../model/product.php');
include('../../../../Database/Db_connect.php');
$product_model=new Product(new DB_CON());
$id=intval($_GET['id']);
$products=$product_model->productById($id);
?>

<?php include("../../layout/sellerHead.php"); ?>
<?php include("../../layout/sellerHeader.php"); ?>
<?php include("../../layout/aside.php"); ?>

<div class="content-box shadow rounded border">
        <div class="container">
            <form method="post">
            <input type="hidden" name="id" value="<?= $products->id?>">
                <div class="mt-3">
                    <label for="">Product Name</label>
                    <input type="text" name="product_name" class="form-control" value="<?php $products->product_name?>">
                </div>
                <div class="mt-3">
                    <label for="">Product price</label>
                    <input type="text" name="price" class="form-control" value="<?= $products->price?>">
                </div>
                <div class="mt-3">
                    <label for="">Product image</label>
                    <input type="text" name="image" class="form-control" placeholder="formate:/decor/images/your image" value="<?= $products->image?>">
                </div>
                <div class="mt-3">
                    <label for="">Product description</label>
                    <input type="text" name="description" class="form-control" value="<?= $products->description?>">
                </div>
                
                <div class="mt-3">
                   <input type="submit" value="Save" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>

<?php include("../../layout/sellerFooter.php"); ?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

    //include('../../../../model/product.php');
    //include('../../../../Database/Db_connect.php');
    $product_model=new Product(new DB_CON());
    $product_name=$_REQUEST['product_name'];
    $product_price=$_REQUEST['price'];
    $product_image=$_REQUEST['image'];
    $product_description=$_REQUEST['description'];

    $res= $product_model->updateProduct($id,$product_name,$product_price,$product_image,$product_description);

    if($res){
        echo "<script>
                alert('product successfully edited');
                window.location.href='./listProduct.php'
            </script>";
    }else{
        echo "<script>
                alert('failed');
            </script>";
    }

}


?>