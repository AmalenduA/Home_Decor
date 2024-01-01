<?php 
session_start();
session_destroy();
header("Location:/decor/template/login.php");
?>