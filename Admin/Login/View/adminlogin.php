<?php 
include "../../Control/adminlogincheck.php";
if(isset($_SESSION['adminuserid'])){
    header("location: ../../AdminHome/View/adminhome.php");
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
    <a href="../../../index.php" class="logo"> <i><img src="../../../Logo/logo.png"></i> </a>
    <div class="icons">
        <a href="../../../index.php" class="fas fa-home"></a>
    </div>
</div>
</header>
<hr class="line">
        <div class="split-screen">
            <div class="left">
                <section class ="copy">
                    <h1> Sign In </h1>
                    <p>Please sign in as a Admin</p>
                </section>
            </div>
            <div class="right">
            <section class ="copy">
                <div class="Buyerlogin-form-container">
                    <form action="" method="post" enctype="multipart/form-data">
                        <h3>Sign in </h3>
                        <span>User ID</span>
                        <input type="text" name="adminuserid" class="box" placeholder="enter admin userid" id="">
                        <span>Password</span>
                        <input type="password" name="adminpass" class="box" placeholder="enter your password" id="">
                        <p style="color:red"><?php echo $error; ?></p>
                        <input type="submit" name ="adminsignin" value="sign in" class="btn">
                       
                    </form>
                    <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <div class="credit"> created by <span>team Molla Man</span> | © 2021-2022 mollasbookgallery.com </div>
                </div>
            </section>
            </div>
        </div>
</hr><hr class="line2"></hr>
    </body>
</html>