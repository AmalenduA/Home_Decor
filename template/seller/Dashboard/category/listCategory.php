
<?php 
include('../../../../model/category.php');
include('../../../../Database/Db_connect.php');
?>
<?php
$category_model=new Category(new DB_CON());
$categories=$category_model->fetchCategory();?>

<?php include("../../layout/sellerHead.php"); ?>
<?php include("../../layout/sellerHeader.php"); ?>
<?php include("../../layout/aside.php"); ?>

<div class="content-box shadow rounded border">
        <div class="container">
                <table class="table"><br><br>
                    <thead class="thead-success">
                        <tr>
                        <th scope="col">Category Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($categories as $row){ ?>
                        <tr>
                        <td><?= $row['category_name']?></td>
                        <td><?= $row['description']?></td>
                        <td class="d-flex">
                                <a href="./editCategory.php?id=<?= $row['id']?>" class="btn btn-warning">Edit</a>
                                <form method="post">
                                    <input type="hidden" name="id" value="<?= $row['id']?>">
                                    <input type="submit" class="btn btn-danger  ms-2" value="Delete" >
                                </form>
                          
                            </td>
                        </tr>
                    <?php }?>    
                    </tbody>
                    </table>
        </div>
    </div>

<?php include("../../layout/sellerFooter.php"); ?>

<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id=$_REQUEST['id'];
    $category_model->deleteCategory($id);
    echo "<script>
        location.href='./listCategory.php';
        </script>";
}

?>