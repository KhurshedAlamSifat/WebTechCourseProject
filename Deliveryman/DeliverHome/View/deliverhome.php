<?php
session_start(); 
include('../../Model/model.php');
if(empty($_SESSION["deliveremail"]))
{
header("Location: ../../Login/View/deliverlogin.php"); // Redirecting To Home Page
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
        <a class="active" href="#profile">Profile</a>
        <a href="#news">Update Profile</a>
        <a href="#news">Get Job</a>
        <a href="#contact">Delivery items</a>
        <a class="logout" href="../../Logout/logout.php">logout</a>
    </div>
    <div class="panel">
        <h2>Profile Dashboard</h2>
        
        <?php

        $name=$email=$gender=$address="";
        $connection = new db();
        $conobj=$connection->opencon();
        $userQuery=$connection->CheckUser($_SESSION["deliveremail"],$_SESSION["deliverpass"],"deliver",$conobj);
        
        if ($userQuery->num_rows > 0) 
        {
            while($row = $userQuery->fetch_assoc()) 
            {
                $name=$row["fname"];
                $email=$row["mail"];
                $city=$row["city"];
                $area=$row["area"];
                $phn=$row["phone"];
            }
        }else 
        {
            echo "0 results";
        }
        
        ?>
        <h5> Hi <p class ="font"><?php echo $name." !";?></p></h5><br><br><br>
        <h7 class ="font1">E-mail: <?php echo $email;?></h7><br>
        <h7 class ="font1">Phone No: <?php echo $phn;?></h7><br>
        <h7 class ="font1">City: <?php echo $city;?></h7><br>
        <h7 class ="font1">Area: <?php echo $area;?></h7><br>
    </div>
    </body>
</html>


