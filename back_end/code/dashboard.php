<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Dashboard</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap);

body {
    font-family: "Roboto", sans-serif;
    background: #EFF1F3;
    min-height: 100vh;
    position: relative;
}

.section-50 {
    padding: 50px 0;
}

.m-b-50 {
    margin-bottom: 50px;
}

.dark-link {
    color: #333;
}

.heading-line {
    position: relative;
    padding-bottom: 5px;
}

.heading-line:after {
    content: "";
    height: 4px;
    width: 75px;
    background-color: #29B6F6;
    position: absolute;
    bottom: 0;
    left: 0;
}

.notification-ui_dd-content {
    margin-bottom: 30px;
}

.notification-list {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 20px;
    margin-bottom: 7px;
    background: #fff;
    -webkit-box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
}

.notification-list--unread {
    border-left: 2px solid #29B6F6;
}

.notification-list .notification-list_content {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}

.notification-list .notification-list_content .notification-list_img img {
    height: 48px;
    width: 48px;
    border-radius: 50px;
    margin-right: 20px;
}

.notification-list .notification-list_content .notification-list_detail p {
    margin-bottom: 5px;
    line-height: 1.2;
}

.notification-list .notification-list_feature-img img {
    height: 48px;
    width: 48px;
    border-radius: 5px;
    margin-left: 20px;
}
    </style>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
function update(str1,str2, addr) {
    // console.log(strings);
    $(document).ready(function () {
        $.ajax({
            type: "POST",
            // contentType: "application/json; charset=utf-8",
            url: addr,
            data: { ulp: str1,
                decision:str2
             },
        });
    });
}

</script>



  </head>
  <body>
    







<?php
require "navbar.php";
require "functions.php";
session_start();
$ph=$_SESSION["uid_session"];
?>















<section class="section-50">
    <div class="container">
        <h3 class="m-b-50 heading-line">Notifications <i class="fa fa-bell text-muted"></i></h3>
<?php


$prop=fire("SELECT * FROM `property` WHERE `approval_status`=0;");


while ($row = $prop->fetch_assoc()) 
{
    $ulp = $row["ulpin"];
    $uid=$row["uid"];
    $pdf=fire("SELECT `pdf_addr` FROM `documents` WHERE `ulpin`=$ulp;")->fetch_assoc()["pdf_addr"];
    $detial = fire("SELECT * FROM `details` WHERE `ulpin`=$ulp")->fetch_assoc();
    $ad = fire("SELECT * FROM `address` WHERE `ulpin`=$ulp")->fetch_assoc();
    $usr=fire("SELECT * FROM `user_info` WHERE `uid`=$uid")->fetch_assoc();
    $usr_p=fire("SELECT * FROM `user_profile` WHERE `uid`=$uid")->fetch_assoc();
    // echo $detial[""];
    echo '

<div class="notification-ui_dd-content">
            <div class="notification-list notification-list--unread">
                <div class="notification-list_content">
                    <div class="notification-list_img">
                        <img src="'.$usr_p["profile_image"].'" alt="user">
                    </div>
                    <div class="notification-list_detail">
                        <p><b>'.$usr["name"].' </b>
                        <br>
                        <i>
'.$usr["email"].'<br>
'.$usr["uid"].'
                        </i><br><br>

                       

                       
                        ULPIN : '.$ulp.'</p>

                        <img style="height:200px;width:200px;"src="'.$detial["image_1"].'">
                        <br>
                        <a href="'.$pdf.'" download>
 DOWNLOAD pdf!
</a>
                        <p class="text-muted">Area:'.$detial["area"].'<br>Rate:'.$detial["rate"].'<br>State:'.$ad["state"].'<br>City:'.$ad["city"].'<br>Landmark:'.$ad["landmark"].'</p>
                        <p class="text-muted"><small>'.$row["registered_time"].'</small></p>
                    </div>
                </div>
                <div class="notification-list_feature-img">
                    <button type="button" class="btn btn-success m-3">Approve</button>
                   <br>
                   <button type="button" class="btn btn-danger m-3">Delete</button>

                </div>
            </div>
            
        </div>

';
}






?>
        
        <div class="text-center">
            <a href="dashboard.php" class="dark-link">Load more activity</a>
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
