<?php 
include('../../model/product.php');
include('../../Database/Db_connect.php');
?>
<?php
$product_model=new Product(new DB_CON());
$products=$product_model->fetchProduct();?>

<?php include("./layout/custHead.php"); ?>

    <div class="content-box shadow rounded border" >
        <div class="items">
<?php foreach($products as $row){?>
    <div class="card" style="width: 10rem; height: 400px;">
        <img class="card-img-top" src="/decor/template/seller/dashboard/product/uploads/<?= $row['image'] ?>" alt="Card image cap">
        <div class="card-body">
            <h6 class="card-title"><?= $row['product_name'] ?></h6>
            <p class="card-text">Rs.<?= $row['price'] ?></p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?= $row['description'] ?></li>
        </ul>
        <form method="post">
        <div class="card-body">
            <input type="hidden" name="product_id" value="<?=$row['id']?>">
            <a href="" class="card-link" ><button class="btn btn-success">Cart</button></a>
        </div>
        </form>
    </div>
<?php }?>
</div>
</div>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

    include('../../model/cart.php');
    $cart_model=new Cart(new DB_CON());
    $auth_model=new Auth(new DB_CON());
    session_start();
    $user_id=$_SESSION['user_id'];
    $product_id=$_REQUEST['product_id'];
    $res=$cart_model->insertCart($product_id,$user_id);
    if($res){
        echo "<script>
        alert('successful');
        </script>";
    }

}

?>




