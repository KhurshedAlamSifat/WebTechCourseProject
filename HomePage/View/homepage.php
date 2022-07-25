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


    <div class="popup-screen">
      <div class="popup-box">
        <h2>Cookie Constent</h2>
        <p>We use cookies and similar technology to help personalize content,tailor and measure ads and
            provide a better experience. By clicking accept, you agree to this, as outlined in our Cookie Policy.
        </p>
        <a href="#" class="Activebtn">Accept</a>
      </div>
    </div>
        
        <!-- header section starts  -->
        <header class="header">

            <div class="header-1">
                <a href="#" class="logo"> <i><img src="../../Logo/logo.png"></i> </a>
                <form action="" class="search-form">
                    <input type="search" name="" placeholder="search here..." id="search-box">
                    <label for="search-box" class="fas fa-search"></label>
                </form>
                <div class="icons">
                    <div id="search-btn" class="fas fa-search"></div>
                    <ul class ="dropdown">
                    <div class="fas fa-user"><i class="fa fa-caret-down icon"></i></div>
                    <div class="user-list">    
                        <div><a href="../../Admin/Login/View/adminlogin.php">Admin</a></div>
                        <div><a href="../../Buyer/Login/View/buyerlogin.php">Buyer</a></div>
                        <div><a href="../../Seller/Login/View/sellerlogin.php">Seller</a></div>
                        <div><a href="../../Deliveryman/Login/View/deliverlogin.php">Delivery Man</a></div>
                    </div></ul>
                    <ul><a href="#" class="fas fa-heart"></a></ul>
                    <ul><a href="#" class="fas fa-shopping-cart"></a></ul>
                </div>
            </div>
            <div class="header-2">
                <nav class="navbar">
                    <a href="#home">Home</a>
                    <a href="#featured">Featured</a>
                    <a href="#newbooks">New Books</a>
                    <a href="#reviews">Reviews</a>
                    <a href="#trems">Terms & Conditions</a>
                    <a href="#aboutus">About us</a>
                </nav>
            </div>
        </header>
        <!-- header section ends  -->


        <div class="homeslider">
            <div class="load"></div>
            <div class ="pics">
                <div class="principal">
                    <h1>WELCOME TO</h1>
                    <h1>MOLLA'S BOOK Gallery</h1><br><br><br>
                    <p>“Every book in a bookstore is a fresh beginning. Every book is the next iteration of a very old story. Every bookstore, therefore, is like a safe-deposit box for civilization.”</p>
                </div>
            </div>
        </div>

        

        <!-- home section starts  -->
        <section class="home" id="home">
            <div class="row">
                <div class="swiper books-slider">
                    <div class="swiper-wrapper">
                        <a href="#" class="swiper-slide"><img src="../Files/b-2.jpg" alt=""></a>
                        <a href="#" class="swiper-slide"><img src="../Files/b-3.jpg" alt=""></a>
                        <a href="#" class="swiper-slide"><img src="../Files/b-4.jpg" alt=""></a>
                        <a href="#" class="swiper-slide"><img src="../Files/b-1.jpg" alt=""></a>
                        <a href="#" class="swiper-slide"><img src="../Files/b-5.jpg" alt=""></a>
                        <a href="#" class="swiper-slide"><img src="../Files/b-6.jpg" alt=""></a>
                    </div>
                    <img src="../Files/Shelf-Storage-PNG-Pic.png" class="stand" alt="">
                </div>
                
                <div class="content">
                    <h3>upto 45% off</h3>
                    <p>You can't miss this awesome discount, that allows you to save 45% on your purchase. What're you waiting for?</p>
                    <a href="#" class="btn">shop now</a>
                </div>
            </div>
        </section>
        <!-- home section ends  -->

        <!-- featured section starts  -->
        <section class="featured" id="featured">
            <h1 class="heading"> <span>featured books</span> </h1>
            <div class="swiper featured-slider">

            <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="../Files/b-1.jpg" alt="">
                </div>
                <div class="content">
                    <div class="price">BDT 445.00 <span>BDT 599.00</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="../Files/b-2.jpg" alt="">
                </div>
                <div class="content">
                    <div class="price">BDT 340.00 <span>BDT 420.00</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="../Files/b-3.jpg" alt="">
                </div>
                <div class="content">
                    <div class="price">BDT 465.00 <span>BDT 600.00</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="../Files/b-4.jpg" alt="">
                </div>
                <div class="content">
                    <div class="price">BDT 390.00 <span>BDT 450.00</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="../Files/b-5.jpg" alt="">
                </div>
                <div class="content">
                    <div class="price">BDT 455.00 <span>BDT 570.00</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="../Files/b-6.jpg" alt="">
                </div>
                <div class="content">
                    <div class="price">BDT 465.00 <span>BDT 600.00</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="../Files/b-7.jpg" alt="">
                </div>
                <div class="content">
                    <div class="price">BDT 420.00 <span>BDT 545.00</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="../Files/b-8.jpg" alt="">
                </div>
                <div class="content">
                    <div class="price">BDT 465.00 <span>BDT 600.00</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="../Files/b-9.jpg" alt="">
                </div>
                <div class="content">
                    <div class="price">BDT 510.00 <span>BDT 700.00</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="../Files/b-10.jpg" alt="">
                </div>
                <div class="content">
                    <div class="price">BDT 365.00 <span>BDT 515.00</span></div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        </div>
        </section>
        <!-- featured section ends  -->

        <!-- newsletter section starts -->
        <section class="newsletter">
            <form action="">
                <h3>“Bookshops are dreams built of wood and paper. They are time travel and escape and knowledge and power. They are, simply put, the best of places.”</h3>
            </form>
        </section>
        <!-- newsletter section ends -->

        <!-- new books section starts  -->
        <section class="newbooks" id="newbooks">
            <h1 class="heading"> <span>New Books</span> </h1>
            <div class="swiper newbooks-slider">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="../Files/b-5.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="price">BDT 365.00 <span>BDT 515.00</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="../Files/b-4.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="price">BDT 365.00 <span>BDT 515.00</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="../Files/b-3.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="price">BDT 365.00 <span>BDT 515.00</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="../Files/b-2.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="price">BDT 365.00 <span>BDT 515.00</span></div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="swiper-slide box">
                        <div class="image">
                            <img src="../Files/b-1.jpg" alt="">
                        </div>
                        <div class="content">
                        <div class="price">BDT 365.00 <span>BDT 515.00</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="swiper newbooks-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../Files/b-7.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="price">BDT 365.00 <span>BDT 515.00</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>
                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../Files/b-8.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="price">BDT 365.00 <span>BDT 515.00</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>
                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../Files/b-10.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="price">BDT 365.00 <span>BDT 515.00</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>
                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../Files/b-9.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="price">BDT 365.00 <span>BDT 515.00</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>
                <a href="#" class="swiper-slide box">
                    <div class="image">
                        <img src="../Files/b-6.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="price">BDT 365.00 <span>BDT 515.00</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- arrivals section ends -->

    <!-- reviews section starts  -->
    <section class="reviews" id="reviews">
        <h1 class="heading"> <span>client's reviews</span> </h1>
        <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide box">
                <img src="../Files/Pic(1).jpg" alt="">
                <h3>Mugdho</h3>
                <p>Ami er age eto valo boi kothao pai ni. Khub valo laglo.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="../Files/Pic(2).jpg" alt="">
                <h3>Nadim</h3>
                <p>Ami er age eto valo boi kothao pai ni. Khub valo laglo.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="../Files/Pic(3).jpg" alt="">
                <h3>Rahat</h3>
                <p>Ami er age eto valo boi kothao pai ni. Khub valo laglo.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="../Files/Pic(4).jpg" alt="">
                <h3>Limon</h3>
                <p>Ami er age eto valo boi kothao pai ni. Khub valo laglo.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="../Files/Pic(5).jpg" alt="">
                <h3>Anas</h3>
                <p>Ami er age eto valo boi kothao pai ni. Khub valo laglo.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="../Files/Pic(6).jpg" alt="">
                <h3>Shams</h3>
                <p>Ami er age eto valo boi kothao pai ni. Khub valo laglo.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- reviews section ends -->

        <!-- terms and conditions section ends -->
        <section class="trems" id="trems">
            <h1 class="heading"> <span>Terms & Conditions</span> </h1>
            <div class="trems-slider">
                <div>
                    <div class="slide box">
                        <div class="content">
                            <h3>Molla's Book Gallery, Inc Website Terms of Use</h3>
                            <p>Use of the J & M Bookstore, Inc. website (the "Site") and the content contained herein (the "Site") is governed by the terms of this Agreement (the "Agreement") between you and J & M Bookstore, Inc. ("Bookstore"). 
                                Your use of this Site constitutes your unconditional agreement to be bound by the terms of this Agreement. <br>
                                If you do not agree with the terms and conditions of this Agreement, you must immediately cease using this Site.<br>
                                The Site is subject to protection under copyrights, trademarks and/or other intellectual property rights owned,
                                 controlled or licensed by Bookstore and its affiliates or by third parties. These rights are protected by common
                                  law, state laws, and U.S. and international laws. Bookstore expressly reserves all rights, titles, and interests in 
                                  and to all copyrights, trade names, logos, patents and other intellectual property and proprietary rights in and to the Site, 
                                  including but not limited to any images, photographs, animations, video, audio, music, text, and "applets"; the overall "look and feel", 
                                  processes, software, technology, and other materials which appear on this Site; and the business processes used to market products and 
                                  services. You agree that your rights are limited to those granted herein, and you will not acquire any rights except as expressly set 
                                  forth in this Agreement....
                            </p>
                            <a href="#" class="btn">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- terms and conditions section ends -->

        <!-- About us section starts -->
        <section class="aboutus" id="aboutus">
            <h1 class="heading"> <span>About us</span> </h1>
            <div class="aboutus-slider">
                <div>
                    <div class="slide box">
                        <div class="content">
                            <h3>Molla's book gallery is an online bookstore with a mission to financially support local, independent bookstores.</h3>
                            <p>We believe that bookstores are essential to a healthy culture. They’re where authors can connect with readers, where we discover new writers, where children get hooked on the thrill of reading that can last a lifetime.
                                They’re also anchors for our downtowns and communities.As more and more people buy their books online, we wanted to create an easy, convenient way for you to get your books and support bookstores at the same time...</p>
                            <a href="#" class="btn">read more</a>
                        </div>
                        <div class="wrapper">
                            <h1>Leadership</h1>
                            <br><br><br><br><br><br><br><br><br><br>
                            <div class="team">
                                <div class="team_member">
                                    <div class="team_img">
                                        <img src="../Files/Sifatmolla.png" alt="Team_image">
                                    </div>
                                    <h3>Khurshed Alam Sifat</h3>
                                    <p class="id">ID: 20-42422-1</p>
                                    <p class="role">Project Leader</p>
                                    <p>Student at AMERICAN INTERNATION UNIVERSITY-BANGLADESH (AIUB)</p>
                                    <p>Semester : 7th</p>
                                    <p>Department : Computer Science and Engineering</p>
                                </div>
                                <div class="team_member">
                                    <div class="team_img">
                                        <img src="../Files/anikdebnath.png" alt="Team_image">
                                    </div>
                                    <h3>Anik Debnath</h3>
                                    <p class="id">ID: 20-42780-1</p>
                                    <p class="role">The (quality) tester</p>
                                    <p>Student at AMERICAN INTERNATION UNIVERSITY-BANGLADESH (AIUB)</p>
                                    <p>Semester : 7th</p>
                                    <p>Department : Computer Science and Engineering</p>
                                </div>
                                <div class="team_member">
                                    <div class="team_img">
                                        <img src="../Files/oisisingh.png" alt="Team_image">
                                    </div>
                                    <h3>Oishi Singh</h3>
                                    <p class="id">ID: 20-43067-1</p>
                                    <p class="role">Analyst</p>
                                    <p>Student at AMERICAN INTERNATION UNIVERSITY-BANGLADESH (AIUB)</p>
                                    <p>Semester : 7th</p>
                                    <p>Department : Computer Science and Engineering</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <!-- About us section section ends -->

        <!-- icons section starts  -->
        <section class="icons-container">
            <div class="icons">
                <i class="fas fa-shipping-fast"></i>
                <div class="content">
                    <h3>free shipping</h3>
                    <p>order over BDT 2000.00</p>
                </div>
            </div>
            <div class="icons">
                <i class="fas fa-lock"></i>
                <div class="content">
                    <h3>secure payment</h3>
                    <p>100 secure payment</p>
                </div>
            </div>
            <div class="icons">
                <i class="fas fa-redo-alt"></i>
                <div class="content">
                    <h3>easy returns</h3>
                    <p>5 days returns</p>
                </div>
            </div>
            <div class="icons">
                <i class="fas fa-headset"></i>
                <div class="content">
                    <h3>24/7 support</h3>
                    <p>call us anytime</p>
                </div>
            </div>
        </section>
        <!-- icons section ends  -->

        <!-- payment section starts  -->
        <section class="payment-container">
            <div class="paymenticons">
                <h3>We accept paymet via </h3>
            </div>
            <div class="paymenticons">
                <img src="../Files/b.png" alt="">
            </div>
            <div class="paymenticons">
                <img src="../Files/n.png" alt="">
            </div>
            <div class="paymenticons">
                <img src="../Files/v.png" alt="">
            </div>
            <div class="paymenticons">
                <img src="../Files/m.png" alt="">
            </div>
        </section>
        <!-- payment section ends  -->

        <!-- footer section starts  -->
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>our locations</h3>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> Dhaka </a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> Sylhet </a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> Chittagong </a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> Rajshahi </a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> Rongpur </a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> Khulna </a>
                </div>
                <div class="box">
                    <h3>quick links</h3>
                    <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                    <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
                    <a href="#"> <i class="fas fa-arrow-right"></i> new books </a>
                    <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
                    <a href="#"> <i class="fas fa-arrow-right"></i> terms & conditions </a>
                    <a href="#"> <i class="fas fa-arrow-right"></i> about us </a>
                </div>
                <div class="box">
                    <h3>contact info</h3>
                    <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                    <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                    <a href="#"> <i class="fas fa-envelope"></i> khurshedalamsifat@gmail.com </a>
                </div>
                <div class="box">
                    <img src="../Files/bdmap.png" class="map" alt="">
                </div>
            </div>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <div class="credit"> created by <span>team Molla Man</span> | © 2021-2022 mollasbookgallery.com </div>
        </section>
        <!-- footer section ends -->

        <!-- loader  -->
        <div class="loader-container">
            <img src="../Files/Crimsonload.gif" alt="">
        </div>



        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <!-- custom js file link  -->
        <script src="../JS/script.js"></script>
    </body>
</html>