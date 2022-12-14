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





?>