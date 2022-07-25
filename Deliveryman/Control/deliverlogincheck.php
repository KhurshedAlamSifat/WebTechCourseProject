<?php
include('../../Model/model.php');
session_start(); 

 $error="";
// store session data
if (isset($_POST['deliversignin'])) {
if (empty($_POST['deliveremail']) || empty($_POST['deliverpass'])) {
$error = "Email or Password is invalid";
}
else
{
$deliveremail=$_POST['deliveremail'];
$deliverpass=$_POST['deliverpass'];

$connection = new db();
$conobj=$connection->opencon();

$userQuery=$connection->CheckUser($deliveremail,$deliverpass,"deliver",$conobj);

if ($userQuery->num_rows > 0) {
$_SESSION["deliveremail"] = $deliveremail;
$_SESSION["deliverpass"] = $deliverpass;

   }
 else {
$error = "Email or Password is invalid";
}
$connection->closecon($conobj);

}
}


?>
