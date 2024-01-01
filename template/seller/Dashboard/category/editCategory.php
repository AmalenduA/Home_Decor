<?php 
include('../../../../model/category.php');
include('../../../../Database/Db_connect.php');
$category_model=new Category( new DB_CON());
$id=intval($_GET['id']);
$categories=$category_model->categoryById($id);
?>

<?php include("../../layout/sellerHead.php"); ?>
<?php include("../../layout/sellerHeader.php"); ?>
<?php include("../../layout/aside.php"); ?>

<div class="content-box shadow rounded border">
        <div class="container">
            <form method="post">
                <h3><u>Add New Category</u></h3>
                <div class="mt-3">
                    <input type="hidden" name="id" value="<?= $categories->id?>">
                    <label for="">Category Name</label>
                    <input type="text" name="category_name" class="form-control" value="<?= $categories->category_name?>">
                </div>
                <div class="mt-3">
                    <label for="">Category Description</label>
                    <textarea  name="category_description" cols="5" rows="10" class="form-control" value="<?= $categories->category_description?>"></textarea>
                </div>
                <div class="mt-3">
                   <input type="submit" value="Save" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

<?php include("../../layout/sellerFooter.php"); ?>

<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $category_name=$_REQUEST['category_name'];
    $category_description=$_REQUEST["category_description"];
    $id=$_REQUEST["id"];
    $res= $category_model->updateCategory($id,$category_name,$category_description);

    if ($res) {
        echo "<script>
            location.href='./listCategory.php';
            </script>";
    } else {
        echo "<script>
            alert('failed');
        </script>";
    }
}
?>