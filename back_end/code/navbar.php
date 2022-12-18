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
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Manage Property
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="register_property.php">Sell property</a>
          <a class="dropdown-item" href="property-grid.php">Buy a property</a>
          <a class="dropdown-item" href="#">Notifications</a>
          
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><img src="icons/history.png" alt="" width="25" height="25"> History</a>
        </div>
      </li>
      <?php
      session_start();
      
      $btn_str = "Sign in";
        $btn_location = "login.php";
       if($_SESSION["uid_session"]!="")
       {
        $btn_str = "Profile";
        $btn_location = "view_profile.php";
       }
 
    
     
 
      ?>
      <button type="button" onclick="location.href='<?php echo $btn_location; ?>'" class="btn btn-outline-primary"><?php echo $btn_str;?></button>
    </ul>

    <form action="property-grid.php" type="POST" class="form-inline my-2 my-lg-0">

      <input class="form-control mr-sm-2" type="search" placeholder="Enter name of the city" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
 
    </form>

  </div>
</nav>