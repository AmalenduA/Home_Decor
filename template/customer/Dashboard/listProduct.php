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
        <img class="card-img-top" src="<?= $row['image'] ?>" alt="Card image cap">
        <div class="card-body">
            <h6 class="card-title"><?= $row['product_name'] ?></h6>
            <p class="card-text">Rs.<?= $row['price'] ?></p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?= $row['description'] ?></li>
        </ul>
        <div class="card-body">
            <a href="./editproduct.php?id=<?=$row['id']?>" class="card-link"><button class="btn btn-success">Cart</button></a>
        </div>
    </div>
<?php }?>
</div>
</div>




