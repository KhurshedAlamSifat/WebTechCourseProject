<?php
include('../../Model/model.php');
session_start(); 

$error="";

// store session data
if (isset($_POST['adminsignin'])) {
if (empty($_POST['adminuserid']) || empty($_POST['adminpass'])) {
$error = "UserID or Password is invalid";
}
else
{
$adminemail=$_POST['adminuserid'];
$adminpass=$_POST['adminpass'];

$connection = new db();
$conobj=$connection->opencon();

$userQuery=$connection->CheckUser($adminemail,$adminpass,"admin",$conobj);

if ($userQuery->num_rows > 0) 
{
$_SESSION["adminuserid"] = $adminemail;
$_SESSION["adminpass"] = $adminpass;
}

else 
{
$error = "UserID or Password is invalid";
}
$connection->closecon($conobj);

}
}
?>
