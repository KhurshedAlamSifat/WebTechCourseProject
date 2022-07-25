<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{
header("Location: ../Login/View/adminlogin.php"); // Redirecting To Home Page
}
?>