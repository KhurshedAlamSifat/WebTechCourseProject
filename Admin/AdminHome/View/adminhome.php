<?php
session_start(); 
include('../../Model/model.php');

if(empty($_SESSION["adminuserid"]))
{
header("Location: ../../Login/View/adminlogin.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Molla's Book Gallery</title>
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../Style/style.css">
    </head>
    <body>
    <header class="header">
        <div class="header-1">
        <a href="#" class="logo"> <i><img src="../../../Logo/logo.png"></i> </a>
        </div>
    </header>
    <hr class="line"></hr>
    <div class="sidebar">
        <a class="active" href="#profile">Dashboard</a>
        <a href="#news">Add User</a>
        <a href="#news">Details</a>
        <a href="#contact">Request</a>
        <a class="logout" href="../../Logout/logout.php">logout</a>
    </div>
    <div class="panel">
        <h4>Profile Dashboard</h4>
        <span>Buyer </span>
            <input type="text" id= "live_search1" autocomplete="off" class="box" placeholder="search here...">
    
        <h4 id="buyerresult"></h4>
        <span>Seller </span>
            <input type="text" id= "live_search2" autocomplete="off" class="box" placeholder="search here...">
    
        <h4 id="sellerresult"></h4>
        <span>Delivery man </span>
            <input type="text" id= "live_search3" autocomplete="off" class="box" placeholder="search here...">
    
        <h4 id="deliverresult"></h4>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../JS/script.js"></script>
    </body>
</html>
