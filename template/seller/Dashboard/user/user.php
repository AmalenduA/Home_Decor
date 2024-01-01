<?php 
include('../../../../model/user.php');
include('../../../../Database/Db_connect.php');
$user_model=new User(new DB_CON());
$users=$user_model->fetchUsers();
?>
    <?php include("../../layout/sellerHead.php"); ?>
    <?php include("../../layout/sellerHeader.php"); ?>
    <?php include("../../layout/aside.php"); ?>

    <div class="content-box shadow rounded border">
        <div class="container">
                <table class="table"><br><br>
                    <thead class="thead-success">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($users as $row){ ?>
                        <tr>
                            <td><?= $row['name']?></td>
                            <td><?= $row['email']?></td>
                            <td><?= $row['role']?></td>
                            <td class="d-flex">
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
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_REQUEST["id"];
        $user_model=new User(new DB_CON());
        $res=$user_model->deleteUser($id);
        echo "<script>
        location.href='./user.php';
        </script>";
    }      

    ?>
