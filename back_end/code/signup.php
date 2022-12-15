<?php
require 'functions.php';
$err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $scr = 0;



  //validaions

  function validating($phone)
  {
    if (preg_match('/^[0-9]{10}+$/', $phone) && $phone != "") {

      return 1;
    } else {
      return 0;
    }
  }

  function v_pass($pass, $rep_pass)
  {
    if ($pass == $rep_pass && $pass != "") {
      return 1;
    } else {
      return 0;
    }
  }

  function v_email($email)
  {

    if (filter_var($email, FILTER_VALIDATE_EMAIL) !== false && $email != "") {
      return 1;
    } else {
      return 0;
    }
  }
  // 
  $name = $_POST["name"];
  $ph = $_POST["phone"];
  $em = $_POST["email"];
  $password = $_POST["password"];
  $rep = $_POST["repeat_password"];
$city=$_POST["city"];
  $state = $_POST["state"];
  $scr = validating($ph) + v_pass($password, $rep) + v_email($em);
  // if ( $scr==3 && varify($ph,$password)==false) {

  //   fire("INSERT IGNORE INTO `user_info` (`uid`, `name`, `email`, `city`, `state`, `password`) VALUES ('$ph', '$name', '$em', '$city', '$state', '$rep')");
  //   fire("INSERT INTO `user` (`uid`, `type`) VALUES ('$ph', '');");
  //   fire("INSERT INTO `user_profile` (`uid`, `profile_image`) VALUES ('$ph', '');");
  //   fire("INSERT INTO `user` (`uid`, `type`) VALUES ('$ph', '');");
  //   session_start();
  //   $_SESSION["uid_session"] = $ph;
  //   header("location: home.php");
  // } 
  // else {
  //   $err = "Enter valid credentials or the Phone number is already registered!";
  // }
}




?>


















<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Sign up!</title>
</head>

<body>




<?php
require "navbar.php";
?>









  <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                  <form class="mx-1 mx-md-4" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="form3Example1c" name="name" class="form-control" />
                        <label class="form-label" for="form3Example1c">Your Name</label>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="tel" id="form3Example3c" name="phone" class="form-control" />
                        <label class="form-label" for="form3Example3c">Your Phone</label>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="email" id="form3Example3c" name="email" class="form-control" />
                        <label class="form-label" for="form3Example3c">Your Email</label>
                      </div>
                    </div>


                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="form3Example3c" name="city" class="form-control" />
                        <label class="form-label" for="form3Example3c">Name of your city eg.Aurangabad</label>
                      </div>
                    </div>



                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="form3Example3c" name="state" class="form-control" />
                        <label class="form-label" for="form3Example3c">Name of your State eg.Maharashtra</label>
                      </div>
                    </div>



                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" id="form3Example4c" name="password" class="form-control" />
                        <label class="form-label" for="form3Example4c">Password</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" id="form3Example4cd" name="repeat_password" class="form-control" />
                        <label class="form-label" for="form3Example4cd">Repeat your password</label>
                      </div>
                    </div>

                    <?php
                    echo "<p style='color:red';>" . $err . "</p>";
                    ?>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btn-primary btn-lg">Register</button>
                    </div>

                  </form>

                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>