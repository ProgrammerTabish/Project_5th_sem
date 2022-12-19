<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Profile</title>
  </head>
  <body>
<?php

include 'navbar.php';
require 'functions.php';

session_start();
$ph=$_SESSION["uid_session"];
$info=$user_i = fire("SELECT * FROM `user_info` WHERE `uid`=$ph;")->fetch_assoc();
$usr = fire("SELECT * FROM `user` WHERE `uid`=$ph;")->fetch_assoc();
$usrp = fire("SELECT * FROM `user_profile` WHERE `uid`=$ph;")->fetch_assoc();
$err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
  $scr = 0;
  //validaions

  $image = $_POST["image"];
  $about = $_POST["about"];
  $name = $_POST["name"];
  $city = $_POST["city"];
  $state = $_POST["state"];
  $file=$_POST["fileToUpload"];


  
fire("UPDATE `user_info` SET `name` = '$name', `state`='$state', `city`='$city' WHERE `user_info`.`uid` = '$ph';");
fire("UPDATE `user` SET `type` = '$about' WHERE `user`.`uid` = '$ph';");



    $dir = "uplaod/";
    $file = "fileToUpload";
   $path = upload($dir, $file);

  

  

 if($path!=0){
  
    fire("UPDATE `user_profile` SET `profile_image` = '$path' WHERE `user_profile`.`uid` = '$ph';");
 }
 

  
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <section style="background-color: #eee;">
        <div class="container py-5">
          <div class="row">
            <div class="col">
              <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">

                  <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                </ol>
              </nav>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <div class="card mb-4">
                <div class="card-body text-center">
                  <img src="<?php echo $usrp["profile_image"];?>" alt="avatar"
                    class="rounded-circle img-fluid" style="width: 150px;">
                  <h5 class="my-3"> <input type="file" name="fileToUpload" id="fileToUpload"><p style="color:red">*Upload profile picture</p></h5>
                  <p class="text-muted mb-1"><input name="about" type="text" placeholder="<?php echo $usr["type"];?>"></p>
                </div>
              </div>
              <div class="card mb-4 mb-lg-0">

              </div>
            </div>
            <div class="col-lg-8">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Username</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><input type="text" name="name" placeholder="<?php echo $info["name"];?>"></p>
                    </div>
                  </div>
                  <hr>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Address</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><div class="row">
                        <div class="col-md-8 mb-4">
                          <div class="card mb-4">
                            <div class="card-header py-3">
                              <h5 class="mb-0">Address info</h5>      
                            </div>
                            <div class="card-body">
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row mb-4">
                                  
                                  <div class="col">
                                    <div class="form-outline">
                                      <input type="text" id="form7Example2"  name='state' placeholder="<?php echo $info["state"];?>" class="form-control" />
                                      <label class="form-label" for="form7Example2">State</label>
                                    </div>
                                  </div>
                                </div>
                                <!-- Text input -->
                                <div class="form-outline mb-4">
                                  <input type="text" placeholder="<?php echo $info["city"];?>" id="form7Example3" name='city' class="form-control" />
                                  <label class="form-label" for="form7Example3">City</label>
                                </div>
                                <!-- Text input -->
                                <button type="submit" class="btn btn-success">Change!</button>
                           
                            </div>
                          </div>
                        </div>
                      
                       
                       
                      </div></p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>










    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
