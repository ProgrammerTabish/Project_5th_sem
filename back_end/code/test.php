<?php
require 'functions.php';



?>
<?php

if(isset($_POST["submit"])) 
{
$dir="upload";
  $file = "fileToUpload";
  upload($dir, $file);
}


?>


<!DOCTYPE html>
<html>
<body>

<form action="test.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>