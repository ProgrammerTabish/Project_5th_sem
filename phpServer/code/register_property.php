<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Register a property</title>
</head>

<body>




  <?php
  include 'navbar.php';
  require 'functions.php';


  session_start();
  $ph = $_SESSION["uid_session"];
  $dir = "uplaod/";


  if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $ulp = $_POST["ulpin"];
    $type = $_POST["type_of_porperty"];
    $ar = $_POST["area"];
    $rt = $_POST["rate"];
    $st = $_POST["state"];
    $ct = $_POST["city"];
    $lm = $_POST["landmark"];



    fire("INSERT INTO `details` (`ulpin`, `area`, `rate`, `image_1`) VALUES ('$ulp', '$ar', '$rt', '');");
    fire("INSERT INTO `documents` (`ulpin`, `pdf_addr`) VALUES ('$ulp', '');");
    fire("INSERT INTO `address` (`ulpin`, `state`, `city`, `landmark`) VALUES ('$ulp', '$st', '$ct', '$lm');");
    fire("INSERT INTO `property` (`ulpin`, `uid`, `registered_time`, `approval_status`) VALUES ('$ulp', '$ph', current_timestamp(), '0');");
    
 
 
    
     


      
    $dir = "uplaod/";
    $file1 = "fileToUpload1";
    $file2 = "fileToUpload2";
    $path1 = upload($dir, $file1);
  

    $path2 = upload($dir, $file2);
  
 if($path1!=0 && $path2!=0){
    
     fire("UPDATE `details` SET `image_1` = '$path1' WHERE `details`.`ulpin` = '$ulp';");
  fire("UPDATE `documents` SET `pdf_addr` = '$path2' WHERE `documents`.`ulpin` = '$ulp';");
 }
   
 }
  ?>
  <!-- recommendations container added flex property -->
  <div class="container">
    <div class="page-header p-3">
      <h1 style="color: green">Apply for registration</h1>
      <hr>

    </div>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

      <section style="background-color: #eee;">
        <div class="container py-5">
          <div class="row">
            <div class="col">
              <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">

                  <li class="breadcrumb-item active" aria-current="page">Registration From</li>
                </ol>
              </nav>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <div class="card mb-4">
                <div class="card-body text-center">
                  <label for="img">Upload 1 image proprty</label>

                  <input type="file" name="fileToUpload1" id="fileToUpload1">


                  <div class="d-flex justify-content-center mb-2">



                  </div>
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
                      <p class="mb-0">ULPIN</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><input type="text" name="ulpin"></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Type of property</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><input type="text" name="type_of_porperty"></p>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Area</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><input type="text" name="area"></p>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Rate</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><input type="text" name="rate"></p>
                    </div>
                  </div>
                  <hr>



                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">state</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><input type="text" name="state"></p>
                    </div>
                  </div>
                  <hr>



                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">City</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><input type="text" name="city"></p>
                    </div>
                  </div>





                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Landmark</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="landmark"></textarea></p>
                    </div>
                  </div>

                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0"> Proprty documents</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><input type="file" name="fileToUpload2" id="fileToUpload2"></p>
                    </div>

                  </div>
                </div>
              </div> <button class="btn btn-outline-success" type="submit">Apply for registration!</button>

            </div>
          </div>
        </div>
      </section>










  </div>


  </section>

  </form>


  </div>






  <hr class="my-5">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <footer id="dk-footer" class="dk-footer justify-content-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-4">
          <div class="dk-footer-box-info">
            <a href="index.html" class="footer-logo">
              <img src="icons/logo.jpg" alt="footer_logo" class="img-fluid">
            </a>
            <p class="footer-info-text">
              Arkan Builders and Developers.
            </p>
            <div class="footer-social-link">
              <h3>Follow us</h3>
              <ul>
                <li>
                  <a href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-google-plus"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
            <!-- End Social link -->
          </div>
          <!-- End Footer info -->
          <div class="footer-awarad">
            <img src="images/icon/best.png" alt="">

          </div>
        </div>
        <!-- End Col -->
        <div class="col-md-12 col-lg-8">
          <div class="row">
            <div class="col-md-6">
              <div class="contact-us">
                <div class="contact-icon">
                  <i class="fa fa-map-o" aria-hidden="true"></i>
                </div>
                <!-- End contact Icon -->
                <div class="contact-info">
                  <h3>Aurangabad India</h3>
                  <p> 63 Cantonment Area </p>
                </div>
                <!-- End Contact Info -->
              </div>
              <!-- End Contact Us -->
            </div>
            <!-- End Col -->
            <div class="col-md-6">
              <div class="contact-us contact-us-last">
                <div class="contact-icon">
                  <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                </div>
                <!-- End contact Icon -->
                <div class="contact-info">
                  <h3>8275927876</h3>
                  <p>Give us a call</p>
                </div>
                <!-- End Contact Info -->
              </div>
              <!-- End Contact Us -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Contact Row -->
          <div class="row">
            <div class="col-md-12 col-lg-6">
              <div class="footer-widget footer-left-widget">
                <div class="section-heading">
                  <h3>Useful Links</h3>
                  <span class="animate-border border-black"></span>
                </div>
                <ul>
                  <li>
                    <a href="#">About us</a>
                  </li>
                  <li>
                    <a href="#">Services</a>
                  </li>
                  <li>
                    <a href="#">Projects</a>
                  </li>
                  <li>
                    <a href="#">Our Team</a>
                  </li>
                </ul>
                <ul>
                  <li>
                    <a href="#">Contact us</a>
                  </li>
                  <li>
                    <a href="#">Blog</a>
                  </li>
                  <li>
                    <a href="#">Testimonials</a>
                  </li>
                  <li>
                    <a href="#">Faq</a>
                  </li>
                </ul>
              </div>
              <!-- End Footer Widget -->
            </div>
            <!-- End col -->

            <div class="col-md-12 col-lg-6">
              <hr>
              <div class="footer-widget">
                <div class="section-heading">
                  <h3>Subscribe</h3>
                  <span class="animate-border border-black"></span>
                </div>
                <p>
                  <!-- Don’t miss to subscribe to our new feeds, kindly fill the form below. -->
                  Arkan Builders and Developers.
                </p>
                <form action="#">
                  <div class="form-row">
                    <div class="col dk-footer-form">
                      <input type="email" class="form-control" placeholder="Email Address">
                      <br>
                      <button type="submit">

                        <i class="fa fa-send">Send</i>
                      </button>
                      <hr>
                    </div>
                  </div>
                </form>
                <!-- End form -->
              </div>
              <!-- End footer widget -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Widget Row -->
    </div>
    <!-- End Contact Container -->


    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <span>Copyright © 2022, All Right Reserved</span>
          </div>
          <!-- End Col -->
          <div class="col-md-6">
            <div class="copyright-menu">
              <ul>
                <li>
                  <a href="#">Home</a>
                </li>
                <li>
                  <a href="#">Terms</a>
                </li>
                <li>
                  <a href="#">Privacy Policy</a>
                </li>
                <li>
                  <a href="#">Contact</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- End col -->
        </div>
        <!-- End Row -->
      </div>
      <!-- End Copyright Container -->
    </div>
    <!-- End Copyright -->
    <!-- Back to top -->
    <hr>
    <div id="back-to-top" class="back-to-top justify-content-left">
      <button class="btn btn-dark m-5" title="Back to Top">
        <i class="fa fa-angle-up">Back to Top</i>
      </button>
    </div>
    <!-- End Back to top -->
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>