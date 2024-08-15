<?php
function fire($query)
{
  $servername="localhost";

  $username="root";
  
  $password="";
  
  $dbname="project_5th_sem";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = $query;
  try {
    $value = $conn->query($sql);
    $conn->close();
   

    return $value;
  } catch (Exception $e) {
    echo "connection failed";
    $conn->close();

  }




}




function search($phone)
{

  $data = fire("SELECT uid FROM user_info WHERE uid=$phone");
  $val = $data->fetch_assoc()['uid'];
  if ($val == $phone) {
    return true;
  } else {
    return false;
  }

}

function varify($phone, $password)
{
  $data = fire("SELECT * FROM user_info WHERE uid=$phone");
  $val = $data->fetch_assoc();
  if ($val["uid"] == $phone && $val["password"] == $password) {
    return true;
  } else
    return false;
}



function upload($dir,$file)
{

  $target_dir = $dir;
  $target_file = $target_dir . basename($_FILES[$file]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  
  // Check if file already exists
  if (file_exists($target_file)) {
  
  }
  
  // Check file size
  if ($_FILES[$file]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "pdf" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    return 0;
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES[$file]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES[$file]["name"])). " has been uploaded.";
      return $target_file;

    } else {
      echo "Sorry, there was an error uploading your file.";
      return 0;
    }
  }


}







?>