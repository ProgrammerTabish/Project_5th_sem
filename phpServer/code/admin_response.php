<?php require "functions.php";
function delete($ulpin)
{
    fire("DELETE FROM `address` WHERE `address`.`ulpin` = '$ulpin';");
    fire("DELETE FROM `details` WHERE `details`.`ulpin` = '$ulpin';");
    $pdf=fire("SELECT * FROM `documents` WHERE `ulpin`='$ulpin';")->fetch_assoc();
    unlink($pdf["pdf_addr"]);
    fire("DELETE FROM `documents` WHERE `documents`.`ulpin` = '$ulpin';");
    fire("DELETE FROM `property` WHERE `property`.`ulpin` = '$ulpin';");
}
function approve($ulpin)
{
    fire("UPDATE `property` SET `approval_status` = '1' WHERE `property`.`ulpin` = '$ulpin';");
}
if (isset($_POST)) {
    $ulpin = $_POST["ulp"];
    $decision = $_POST["decision"];
    
    echo $ulpin." ".$decision;
}
?>