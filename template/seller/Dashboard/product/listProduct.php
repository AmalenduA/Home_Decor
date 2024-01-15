<?php 
include('../../../../model/product.php');
include('../../../../Database/Db_connect.php');
?>
<?php
$product_model=new Product(new DB_CON());
$products=$product_model->fetchProduct();?>

<?php include("../../layout/sellerHead.php"); ?>
<?php include("../../layout/sellerHeader.php"); ?>
<?php include("../../layout/aside.php"); ?>


    <div class="content-box shadow rounded border" >
        <div class="items">
<?php foreach($products as $row){?>
    <div class="card" style="width: 10rem; height: 400px;">
        <img class="card-img-top" src="./uploads/<?= $row['image'] ?>" alt="Card image cap">
        <div class="card-body">
            <h6 class="card-title"><?= $row['product_name'] ?></h6>
            <p class="card-text">Rs.<?= $row['price'] ?></p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?= $row['description'] ?></li>
        </ul>
        <div class="card-body">
            <a href="./editproduct.php?id=<?=$row['id']?>" class="card-link"><button class="btn btn-success">Edit</button></a>
            <form method="post">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input style="position:relative; top:-38px;left:55px" type="submit" class="btn btn-danger  ms-2" value="Delete" >
            </form>
        </div>
    </div>
<?php }?>
</div>
</div>


<?php include("../../layout/sellerFooter.php"); ?>

<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id=$_REQUEST['id'];
    $product_model->deleteProduct($id);
    echo "<script>
        location.href='./listproduct.php';
        </script>";
}

?>