<?php 
include "../../Control/sellersignupcheck.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Molla's Book Gallery-Sign Up</title>
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
                    <h1> Sign up </h1>
                    <p>Please sign up for selling Books</p>
                </section>
            </div>
            <div class="right">
            <section class ="copy">
                <div class="Buyerlogin-form-container">
                <form action="" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
                        <h3>Sign in</h3>
                        <span>Fullname</span>
                        <input type="text" name="sellername" class="box" placeholder="enter your fullname" id="sellername">
                        <p style="color:red" id="errname"></p>
                        <table><tr><td><span>Gender</span></td></tr>
                        <tr><td><input type="radio" name="sellergender"  value="Male" id="sellergender1"><span>Male</span></td>
                        <td><input type="radio" name="sellergender"  value="Female" id="sellergender2"><span>Female</span></td></tr></table>
                        <p style="color:red" id="errgender"></p>
                        <span>E-mail</span>
                        <input type="email" name="selleremail" class="box" placeholder="enter your email" id="selleremail">
                        <p style="color:red" id="erremail"></p>
                        
                        <span>Publication</span>
                        <input type="text" name="sellerpublication" class="box" placeholder="enter your publication name" id="sellerpublication">
                        <p style="color:red" id="errpb"></p>


                        <span>Password</span>
                        <input type="password" name="sellerpass" class="box" placeholder="enter your password" id="sellerpass">
                        <p style="color:red" id="errpass"></p>
                        <div class="checkbox">
                            <input type="checkbox" name="" id="remember-me">
                            <label for="remember-me"> Agreed to terms and conditions</label>
                        </div>
                        <input type="submit" name = "sellersignup"value="sign up" class="btn">
                        <p>want to go back ? <a href="../../Login/View/sellerlogin.php">click here</a></p>
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
        <script src="../JS/script.js"></script>
    </body>
</html>