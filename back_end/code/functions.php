<?php
function fire($query)
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Project_5th_sem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = $query;
    try{
       $value = $conn->query($sql);
    $conn->close();
   
    return $value; 
    }
    catch(Exception $e)
    {
    echo "no";
        $conn->close();
        
    }




}




function search($phone)
{

  $data = fire("SELECT uid FROM user_info WHERE uid=$phone");
  $val= $data->fetch_assoc()['uid'];
  if($val==$phone) {
    return true;}
  else{
    return false;
  }
   
}

function varify($phone,$password)
{
  $data = fire("SELECT * FROM user_info WHERE uid=$phone");
  $val = $data->fetch_assoc();
  if($val["uid"]==$phone && $val["password"]==$password)
  {
    return true;
  } else
    return false;
}



function upload_img($name_upload,$target_dir)
{
  
  $target_file = $target_dir . basename($_FILES[$name_upload]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
  // Check if image file is a actual image or fake image
  
    $check = getimagesize($_FILES[$name_upload]["tmp_name"]);
    if($check !== false) {
      // echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      // echo "File is not an image.";
      $uploadOk = 0;
    }
  
  
  // Check if file already exists
  if (file_exists($target_file)) {
    unlink($target_file);
  }
  
  // Check file size
  if ($_FILES[$name_upload]["size"] > 500000) {
    $err = 0;
    $uploadOk = 0;
  }
  
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    $err = 0;
    $uploadOk = 0;
  }
  
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    $err = 0;
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES[$name_upload]["tmp_name"], $target_file)) {
      $err = $target_file;
    } else {
      $err = 0;
    }
  }
  return $err;

}



function upload_pdf($name_upload,$target_dir)
{
  
  $target_file = $target_dir . basename($_FILES[$name_upload]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
  // Check if image file is a actual image or fake image
  
    $check = getimagesize($_FILES[$name_upload]["tmp_name"]);
    if($check !== false) {
      // echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      // echo "File is not an image.";
      $uploadOk = 0;
    }
  
  
  // Check if file already exists
  if (file_exists($target_file)) {
    unlink($target_file);
  }
  
  // Check file size
  if ($_FILES[$name_upload]["size"] > 500000) {
    $err = 0;
    $uploadOk = 0;
  }
  
  // Allow certain file formats
  if($imageFileType != "pdf") {
    $err = 0;
    $uploadOk = 0;
  }
  
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    $err = 0;
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES[$name_upload]["tmp_name"], $target_file)) {
      $err = $target_file;
    } else {
      $err = 0;
    }
  }
  return $err;

}





?>