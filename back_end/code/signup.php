<?php
$err="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$scr=0;


//validaions

function validating($phone){
  if(preg_match('/^[0-9]{10}+$/', $phone) && $phone!="") {
  
  return 1;
  } else {
    return 0;
  }
  }

function v_pass($pass,$rep_pass)
{
    if($pass==$rep_pass && $pass!="")
    {
      return 1;
    }
    else{
      return 0;
    }
}

function v_email($email){
  
   if(filter_var($email, FILTER_VALIDATE_EMAIL) !== false && $email!="")
   {
    return 1;
   }
   else{
    return 0;
   }

}
$name=$_POST["name"];
$ph=$_POST["phone"];
$em=$_POST["email"];
$password=$_POST["password"];
$rep=$_POST["repeat_password"];

$scr=validating($ph)+v_pass($password,$rep)+v_email($em);
echo $scr;
if($scr==3)
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_5th_sem";






// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT EXISTS(SELECT * from `user` WHERE `uid=$ph`)";

if ($conn->query($sql) ===1) {
//  $sql = "INSERT INTO `user` (`uid`, `type`) VALUES ('1245', 'asdfgasdfgasdfgasdfg');";
echo"hi";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}else{
  $err="Enter valid credentials!";
}
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




  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="icons/logo.jpg" alt="" width="50" height="50">
          </a>
        <a class="navbar-brand" href="#">Arkan Developers</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Manage Property
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Sell property</a>
                <a class="dropdown-item" href="#">Buy a property</a>
                <a class="dropdown-item" href="#">Get recommendations</a>
                <a class="dropdown-item" href="#">Contact expert</a>
                <a class="dropdown-item" href="#">Buy a property</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><img src="icons/history.png" alt="" width="25" height="25"> History</a>
              </div>
            </li>
            <button type="button" class="btn btn-outline-primary">Sign in</button>
          </ul>
          
          <form class="form-inline my-2 my-lg-0">
       
          <input class="form-control mr-sm-2" type="search" placeholder="Enter name of the city" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            
          </form>
       
        </div>
      </nav>










    <section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

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
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" name="password" class="form-control" />
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4cd"  name="repeat_password" class="form-control" />
                      <label class="form-label" for="form3Example4cd">Repeat your password</label>
                    </div>
                  </div>

            <?php
echo"<p style='color:red';>".$err."</p>";
?>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                  class="img-fluid" alt="Sample image">

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