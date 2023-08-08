<?php
session_start();
include 'db.php';


?>

<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'?>

<body class="d-flex align-items-center min-h-100 bg-dark">
  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main" class="flex-grow-1 overflow-hidden">
    <!-- Content -->
    <div class="container content-space-t-1 content-space-b-2">
      <div class="mx-lg-auto" style="max-width: 55rem;">
        <div class="d-flex justify-content-center align-items-center flex-column min-vh-lg-100">
          <!-- ========== HEADER ========== -->
          <header id="header" class="navbar navbar-height navbar-light mb-3">
            <div class="container">
              <a class="navbar-brand mx-auto" href="index.php" aria-label="Ekiti Learning Hub">
                <img src="assets/img/500x650/logo.jpg" width="70px" height="70px" alt="" style="border: 1px solid black; border-radius: 50px;"><span style="font-size: 25px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-weight: 300;">Ekiti Learning Hub.</span></h2>
              </a>
            </div>
          </header>
          <!-- ========== END HEADER ========== -->

          <div class="position-relative">
            <!-- Card -->
            <div class="card card-shadow card-login">
              <div class="row">
                <div class="col-md-8">
                  <div class="card-body">
                    <!-- Form -->
                    <form class="js-validate needs-validation" action=""  method="POST">
                      <div class="text-center">
                        <div class="mb-5">
                          <h3 class="card-title">Login to Ekiti Learning Hub</h3>
                        </div>

  <?php

if(isset($_POST['submit'])){
  $error= array();

  if(empty($_POST['email'])){
      $error [] ="Please enter your email";
  }else{
     $email = $_POST['email'];
  }

  if(empty($_POST['password'])){
      $error [] ="Please enter password";
  }else{
     $password = $_POST['password'];
  }

  if(empty($error)){

    $statement = $conn->prepare("SELECT * FROM users WHERE email=:em");
        $statement -> bindParam(":em",$email);
        $statement->execute();

        $row = $statement->fetch(PDO::FETCH_BOTH);


        if($statement->rowCount() > 0 && password_verify($password,$row['hash'])){
          
          $_SESSION['id'] = $row['user_id'];
          $_SESSION['name'] = $row['name'];
          header("Location:home.php");

        }else{
          header("location:page-login.php?error=Either email or password incorrect");
        }


}else{
    foreach($error as $key => $value){
        echo $value."<br>";
    }
}
}
?>



                        <a class="btn btn-white btn-lg d-grid mb-4" href="#">
                          <span class="d-flex justify-content-center align-items-center">
                            <img class="avatar avatar-xss me-2" src="assets/svg/brands/google-icon.svg" alt="Image Description">
                            Log in with Google
                          </span>
                        </a>

                        <span class="divider-center text-muted mb-4">OR</span>
                      </div>
                                            <?php
                                             if(isset($_GET['message'])){
                                              echo $_GET['message'];
                                            }

                                            if(isset($_GET['error'])){
                                              echo $_GET['error'];
                                            }
                                            ?>
                      <!-- Form -->
                      <div class="mb-4">
                        <label class="form-label" for="signinSrEmail">Your email</label>
                        <input type="email" class="form-control form-control-lg" name="email" id="signinSrEmail" tabindex="1" placeholder="email@address.com" aria-label="email@address.com" required>
                        <span class="invalid-feedback">Please enter a valid email address.</span>
                      </div>
                      <!-- End Form -->

                      <!-- Form -->
                      <div class="mb-4">
                        <label class="form-label" for="signupSrPassword" tabindex="0">Password</label>

                        <div class="input-group-merge">
                          <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8" data-hs-toggle-password-options='{
                                   "target": "#changePassTarget",
                                   "defaultClass": "bi-eye-slash",
                                   "showClass": "bi-eye",
                                   "classChangeTarget": "#changePassIcon"
                                 }'>
                          <a id="changePassTarget" class="input-group-append input-group-text" href="javascript:;">
                            <i id="changePassIcon" class="bi-eye"></i>
                          </a>

                          <span class="invalid-feedback">Please enter a valid password.</span>
                        </div>
                      </div>
                      <!-- End Form -->

                      <div class="d-flex justify-content-end mb-4">
                        <a class="form-label-link" href="page-reset-password.php">Forgot Password?</a>
                      </div>

                      <div class="d-grid gap-4">
                        <button type="submit" name="submit" value="Sign in" class="btn btn-primary btn-lg">Sign in</button>
                        <p class="card-text text-muted">Don't have an account yet? <a class="link" href="page-signup.php">Sign up here</a></p>
                      </div>
                    </form>
                    <!-- End Form -->
                  </div>
                </div>
                <!-- End Col -->

                <div class="col-md-4 d-md-flex justify-content-center flex-column bg-soft-primary p-8 p-md-5" style="background-image: url(assets/svg/components/wave-pattern.svg);">
                  <h5 class="mb-4">Build digital products with:</h5>

                  <!-- List Checked -->
                  <ul class="list-checked list-checked-primary list-py-2">
                    <li class="list-checked-item">All-in-one tool</li>
                    <li class="list-checked-item">Easily add &amp; manage your services</li>
                  </ul>
                  <!-- End List Checked -->

                  <span class="d-block">
                    <a class="link link-pointer" href="#">Learn more</a>
                  </span>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
            <!-- End Card -->

            <!-- SVG Shape -->
            <figure class="position-absolute top-0 end-0 zi-n1 d-none d-sm-block mt-n7 me-n10" style="width: 4rem;">
              <img class="img-fluid" src="assets/svg/components/pointer-up.svg" alt="Image Description">
            </figure>
            <!-- End SVG Shape -->

            <!-- SVG Shape -->
            <figure class="position-absolute bottom-0 start-0 d-none d-sm-block ms-n10 mb-n10" style="width: 15rem;">
              <img class="img-fluid" src="assets/svg/components/curved-shape.svg" alt="Image Description">
            </figure>
            <!-- End SVG Shape -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Content -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- JS Implementing Plugins -->
  <script src="assets/js/vendor.min.js"></script>

  <!-- JS Unify -->
  <script src="assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
  // Function to display the alert after form submission
  function displayAlert() {
    
  }

  // Function to handle form submission and display the alert
  (function () {
    HSBsValidation.init('.js-validate', {
      onSubmit: data => {
        // Perform client-side validation here
        const form = data.form;

        if (!form.checkValidity()) {
          // If the form is invalid, prevent submission and show error messages
          data.event.preventDefault();
          data.event.stopPropagation();
          form.classList.add('was-validated');
        } else {
          // If the form is valid, display the success alert
          displayAlert();
        }
      }
    });
    new HSTogglePassword('.js-toggle-password');
  })();
</script>
</body>

</html>