<?php
define("DBNAME","edsa_app");
define("DBUSER","root");
define("DBPASS","");

try{
    $conn = new PDO("mysql:host=localhost;dbname=".DBNAME,DBUSER,DBPASS);

    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo $e->getMessage();
}



if(isset($_POST['submit'])){
    $error= array();

    if(empty($_POST['fullname'])){
        $error [] ="Please enter your name";
    }else{
       $fullname = $_POST['fullname'];
    }

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

    if(empty($_POST['fullname'])){
        $error [] ="Please enter your name";
    }else{
        $fullname = $_POST['fullname'];
     }

    if(empty($_POST['confirm_password'])){
        $error [] = "Password does not match the confirm password.";

    }elseif($_POST['confirm_password'] !== $_POST['password']){
        $error[] = "Password mismatched";
    }else{
        $confirm_password = $_POST['confirm_password'];
    }

    if(empty($error)){
        $encrypted = password_hash($password,PASSWORD_BCRYPT);

        $statement = $conn->prepare("INSERT INTO users VALUES(NULL,:nm,:em,:ps,NOW(),NOW())") ;
        $statement -> bindParam(":nm",$fullname);
        $statement -> bindParam(":em",$email);
        $statement -> bindParam(":ps",$encrypted);

        $statement->execute();

        header("Location:page-login.php");
    }else{
        foreach($error as $key => $value){
            echo $value."<br>";
        }
    }

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Ekiti Learning Hub</title>

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="assets/css/vendor.min.css">

  <!-- CSS Unify Template -->
  <link rel="stylesheet" href="assets/css/theme.minc619.css?v=1.0">
</head>

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
              <a class="navbar-brand mx-auto" href="index.html" aria-label="">
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
                          <h3 class="card-title">Create your account</h3>

                        </div>

                        <a class="btn btn-white btn-lg d-grid mb-4" href="#">
                          <span class="d-flex justify-content-center align-items-center">
                            <img class="avatar avatar-xss me-2" src="assets/svg/brands/google-icon.svg" alt="Image Description">
                            Sign up with Google
                          </span>
                        </a>

                        <span class="divider-center text-muted mb-4">OR</span>
                      </div>

                      <label class="form-label" for="fullNameSrEmail">Full name</label>

                      <!-- Form -->
                      <div class="row">
                        <div class="col-sm-6">
                          <!-- Form -->
                          <div class="mb-4">
                            <input type="text" class="form-control form-control-lg" name="fullname" id="fullNameSrEmail" placeholder="First Name" aria-label="" required>
                            <span class="invalid-feedback">Please enter your first name.</span>
                          </div>
                          <!-- End Form -->
                        </div>

                        <div class="col-sm-6">
                          <!-- Form -->
                          <div class="mb-4">
                            <input type="text" class="form-control form-control-lg" name="fullname" placeholder="Last Name" aria-label="" required>
                            <span class="invalid-feedback">Please enter your last name.</span>
                          </div>
                          <!-- End Form -->
                        </div>
                      </div>
                      <!-- End Form -->

                      <!-- Form -->
                      <div class="mb-4">
                        <label class="form-label" for="signupSrEmail">Your email</label>
                        <input type="email" class="form-control form-control-lg" name="email" id="signupSrEmail" placeholder="example@site.com" aria-label="" required>
                        <span class="invalid-feedback">Please enter a valid email address.</span>
                      </div>
                      <!-- End Form -->

                      <!-- Form -->
                      <div class="mb-4">
                        <label class="form-label" for="signupSrPassword">Password</label>
                        <div class="input-group-merge">
                          <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8" data-hs-toggle-password-options='{
                                   "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                                   "defaultClass": "bi-eye-slash",
                                   "showClass": "bi-eye",
                                   "classChangeTarget": ".js-toggle-password-show-icon-1"
                                 }'>
                          <a class="js-toggle-password-target-1 input-group-append input-group-text" href="javascript:;">
                            <i class="js-toggle-password-show-icon-1 bi-eye"></i>
                          </a>

                          <span class="invalid-feedback">Your password is invalid. Please try again.</span>
                        </div>
                      </div>
                      <!-- End Form -->

                      <!-- Form -->
                      <div class="mb-4">
                        <label class="form-label" for="signupSrConfirmPassword">Confirm password</label>

                        <div class="input-group-merge">
                          <input type="password" class="js-toggle-password form-control form-control-lg" name="confirm_password" id="signupSrConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8" data-hs-toggle-password-options='{
                                   "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                                   "defaultClass": "bi-eye-slash",
                                   "showClass": "bi-eye",
                                   "classChangeTarget": ".js-toggle-password-show-icon-2"
                                 }'>
                          <a class="js-toggle-password-target-2 input-group-append input-group-text" href="javascript:;">
                            <i class="js-toggle-password-show-icon-2 bi-eye"></i>
                          </a>

                          <span class="invalid-feedback">Password does not match the confirm password.</span>
                        </div>
                      </div>
                      <!-- End Form -->

                      <!-- Form Check -->
                      <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="termsCheckbox" required>
                        <label class="form-check-label" for="termsCheckbox">I accept the <a href="page-terms.php">Terms and Conditions</a></label>
                        <span class="invalid-feedback">Please accept our Terms and Conditions.</span>
                      </div>
                      <!-- End Form Check -->

                      <div class="d-grid gap-4">
                        <button type="submit" name="submit" value="Create an account" class="btn btn-primary btn-lg">Create an account</button>
                        <p class="card-text text-muted">Remember your password? <a class="link" href="page-login.php">Log in</a></p>
                      </div>
                    </form>
                    <!-- End Form -->
                  </div>
                </div>
                <!-- End Col -->

                <div class="col-md-4 d-md-flex justify-content-center flex-column bg-soft-primary p-8 p-md-5" style="background-image: url(assets/svg/components/wave-pattern.svg);">
                  <h5 class="mb-4">Learn From Ekiti Digital Learning Hub with:</h5>

                  <!-- List Checked -->
                  <ul class="list-checked list-checked-primary list-py-2">
                    <li class="list-checked-item">All-in-one tool</li>
                    <li class="list-checked-item">Easily add &amp; manage your services</li>
                  </ul>
                  <!-- End List Checked -->

                  <span class="d-block">
                    <a class="link link-pointer" href="page-about.php">Learn more</a>
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


<!-- Add the following JavaScript code block -->
<script>
  // Function to display the alert after form submission
  function displayAlert() {
    alert("CONGRATULATION! Registration successful!");
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