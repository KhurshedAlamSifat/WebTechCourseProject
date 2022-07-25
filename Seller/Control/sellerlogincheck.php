<?php
include('../../Model/model.php');
session_start(); 

 $error="";
// store session data
if (isset($_POST['sellersignin'])) {
if (empty($_POST['selleremail']) || empty($_POST['sellerpass'])) {
$error = "Email or Password is invalid";
}
else
{
$selleremail=$_POST['selleremail'];
$sellerpass=$_POST['sellerpass'];

$connection = new db();
$conobj=$connection->opencon();

$userQuery=$connection->CheckUser($selleremail,$sellerpass,"seller",$conobj);

if ($userQuery->num_rows > 0) {
$_SESSION["selleremail"] = $selleremail;
$_SESSION["sellerpass"] = $sellerpass;

   }
 else {
$error = "Email or Password is invalid";
}
$connection->closecon($conobj);

}
}


?>
