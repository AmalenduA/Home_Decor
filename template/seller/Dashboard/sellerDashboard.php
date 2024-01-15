
 <?php include_once("../layout/sellerhead.php");?>  
 <?php include_once("../layout/sellerheader.php");?> 

<div class="content-box shadow rounded border">
        <div class="container p-4">
            <h1>Dashboard</h1>
            <?php
            session_start();
            ?>
             <h3><?php print_r($_SESSION);?></h3>
           

        </div>
</div>
<?php include_once("../layout/aside.php") ?>
<?php include_once("../layout/sellerfooter.php");?> 