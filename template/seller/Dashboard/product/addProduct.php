<?php include("../../layout/sellerHead.php"); ?>
<?php include("../../layout/sellerHeader.php"); ?>
<?php include("../../layout/aside.php"); ?>

    <div class="content-box shadow rounded border">
        <div class="container">
            <form method="post">
                <div class="mt-3">
                    <label for="">Product Name</label>
                    <input type="text" name="product_name" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="">Select Category</label>
                    <select name="id" id="" class="form-select">
                        <option disabled selected >Select Category</option>
                        <?php 
                        include('../../../../model/category.php');
                        include('../../../../Database/Db_connect.php');
                            $category_model=new Category(new DB_CON());
                            $categories=$category_model->fetchCategory();
                            foreach($categories as $row){ ?>
                                <option name="id" value="<?= $row['id'] ?>"><?=$row['category_name']?></option>
                            <?php } ?>
                    </select>
                </div>
                <div class="mt-3">
                    <label for="">Product price</label>
                    <input type="text" name="product_price" class="form-control">
                </div>
                <div class="mt-3">
                    <label for="">Product image</label>
                    <input type="text" name="image" class="form-control" placeholder="formate:/decor/images/your image">
                </div>
                <div class="mt-3">
                    <label for="">Product description</label>
                    <input type="text" name="product_description" class="form-control">
                </div>
                
                <div class="mt-3">
                   <input type="submit" value="Save" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

<?php include("../../layout/sellerFooter.php"); ?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

   include('../../../../model/product.php');
    //include('../../../../Database/Db_connect.php');
    $product_model=new Product(new DB_CON());
    $product_name=$_REQUEST['product_name'];
    $category_id=$_REQUEST['id'];
    $product_price=$_REQUEST['product_price'];
    $product_image=$_REQUEST['image'];
    $product_description=$_REQUEST['product_description'];
    
    $res= $product_model->addProduct($product_name,$product_price,$product_image,$product_description,$category_id);

    if($res){
        echo "<script>
                alert('product Added');
                window.location.href='./listProduct.php'
            </script>";
    }else{
        echo "<script>
                alert('failed');
            </script>";
    }

}


?>