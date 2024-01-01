<?php
$title = "Login";
?>
<?php include_once("../layout/head.php") ?>
<?php include_once("../layout/header.php") ?>

<div class="container shadow rounded mt-10 p-15" >
<!-- Section: Design Block -->
    <section class="text-center text-lg-start">
        <style>
            .cascading-right {
              margin-right: -50px;
            }

            @media (max-width: 991.98px) {
              .cascading-right {
                margin-right: 0;
              }
            }
        </style>

  <!-- Jumbotron -->
        <div class="container py-4">
          <div class="row g-0 align-items-center">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="card cascading-center" style="
                    background: hsla(0, 0%, 100%, 0.55);
                    backdrop-filter: blur(30px);">
                <div class="card-body p-5 shadow-5 text-center">
                  <h2 class="fw-bold mb-5">Login </h2>
                  <form action="#" method="post">
                      <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="email" id="form3Example3" class="form-control" name="email">
                      <label class="form-label" for="form3Example3">Email address</label>
                    </div>
    
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" id="form3Example4" class="form-control" name="password">
                    <label class="form-label" for="form3Example4">Password</label>
                  </div>
    
              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                <label class="form-check-label" for="form2Example33">
                  agree terms and conditions
                </label>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-success btn-block mb-4">
                Sign up
              </button>

              <!-- Register buttons -->
              <p>Don't have an account? <a href="/decor/template/registration.php" class="link-info">Register here</a></p><br>
              <p><a href="/decor/template/seller/sellerRegister.php"  class="link-info">Are you a seller?</a></p>

            </form>
          </div>
        </div>
      </div>

            <div class="col-lg-8 mb-7 mb-lg-0">
              <img src="../images/image31.jpg" class="w-50 rounded-4 shadow-4" alt="...">
            </div>
        </div>
        <div>
  <!-- Jumbotron -->
    </section>
<!-- Section: Design Block -->

<br><br><br>
<?php include_once("../layout/footer.php") ?>

<?php 
  // Request
  if ($_SERVER['REQUEST_METHOD']=="POST") {
    // Add user model
      include('../model/auth.php');
      $auth_model=new Auth();

      $email=$_REQUEST['email'];
      $password=$_REQUEST['password'];

      // insert
      $auth_model->login($email,$password);
  }
?>