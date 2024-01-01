 <?php 
// session_start();
// $uri=basename($_SERVER["REQUEST_URI"]);
// if($uri== "login.php"|| $uri== "registration.php"|| $uri== "sellerRegister.php"){

// } else if(!isset($_SESSION['logined'])){
//     header("location:/decor/template/login.php");
//     exit();
// }else  if ($_SESSION['role']!=='seller') {
//   header("Location:/decor/template/seller/accessdenied.php");
//   exit();
// }
?> 

<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ANTIQUES</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/decor/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Home decor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#" tabindex="-1" >Garden decor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#" tabindex="-1" >About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#" tabindex="-1" >Contact us</a>
        </li>
      </ul>
      <form class="d-flex">
      </form>
    </div>
  </div>
</nav>