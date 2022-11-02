<?php 

    include 'db_connection.php';
    //  include 'session.php';
    session_start();
    $Email=$_SESSION['Email'];

    $sql="SELECT * FROM customer WHERE Email='$Email'";
    $result=$conn->query($sql);
    $retrive=mysqli_fetch_array($result);
    //print_r($retrive);

    $Name=$retrive['Name'];

 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gazellig-your dream event</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- css  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header  -->

<header class="header">

    <a href="#" class="logo"><span>G</span>azellig</a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#service">Service</a>
        <a href="#price">Price</a>
        <a href="#gallery">Gallery</a>
        <a href="#review">Review</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <?php
            if (!$Name) {
                echo '<a href="sign.html">Sign in</a> <a href="reg.html">Sign up</a> ';
            } else {
                echo '<a href="#">',$Name,'</a> <a href="signout.php">Sign out</a> ';
            } 
        ?>
    </nav>

    <div id="menu-bars" class="fas fa-bars"></div>

</header>



<!-- home -->

<section class="home" id="home">

    <div class="content">
        <h3> <span>Gazellig</span>
            -Your Dream Event</h3>
        <h3>It's time to celebrate! <span>The best event organizers</span> </h3>
        <?php
            if (!$Name) {
                echo '<a href="reg.html" class="btn">Sign up Now!!!</a> ';
            } else {
                echo '<a href="order.php" class="btn">Place An Order Now!!!</a> ';
            } 
        ?>
        
    </div>

    <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="img/slide-1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/slide-2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/slide-3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/slide-4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/slide-5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/slide-6.jpg" alt=""></div>
        </div>
    </div>

</section>

<!-- home section ends -->

<!-- service   -->

<section class="service" id="service">

    <h1 class="heading"> our  <span> services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>venue selection</h3>
            <p>We provide you the best venue within your budget.</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>invitation card</h3>
            <p>No more difficulties to invite your family & friends.</p>
        </div>

        <div class="box">
            <i class="fas fa-music"></i>
            <h3>entertainment</h3>
            <p>Best entertainment along with gadagets for you and your guest.</p>
        </div>

        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p>We ensure the best quality food and drinks .</p>
        </div>

        <div class="box">
            <i class="fas fa-photo-video"></i>
            <h3>photos and videos</h3>
            <p>Capture your moments.Time flies, Moments stays.</p>
        </div>

        <div class="box">
            <i class="fas fa-birthday-cake"></i>
            <h3>custom food</h3>
            <p>Customize your oen menu card as per your test.</p>
        </div>

    </div>

</section>



<!-- about   -->

<section class="about" id="about">

<h1 class="heading">  <span>about </span> us </h1>

<div class="row">

    <div class="image">
        <img src="img/about-img.jpg" alt="">
    </div>

    <div class="content">
        <h3>we will give a very special celebration for you</h3>
        <p>

            The Event Planner team is made up of a mix of people. James and Ilona take care of corporate events. Josette is the wedding guru. Nicole is the creative one. Sergio is the merchandise expert. In addition to this group of people, a large support team helps out in everything the company does, in office work to on-site logistics planning. One thing we can truly say about our team is that we are very passionate about our job!
            
            </p>
        <a href="#" class="btn">contact us</a>
    </div>

</div>

</section>



<!-- gallery  -->

<section class="gallery" id="gallery">

    <h1 class="heading">our  <span>gallery</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="img/g-1.jpg" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="img/g-2.jpg" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="img/g-3.jpg" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="img/g-4.jpg" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="img/g-5.jpg" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="img/g-6.jpg" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="img/g-7.jpg" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="img/g-8.jpg" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="img/g-9.jpg" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

    </div>

</section>



<!-- price -->

<section class="price" id="price">

    <h1 class="heading"> our <span>price</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3 class="title">for birthdays</h3>
            <h3 class="amount">$250.99</h3>
            <ul>
                <li><i class="fas fa-check"></i>full services</li>
                <li> <i class="fas fa-check"></i> decorations </li>
                <li> <i class="fas fa-check"></i> music and photos </li>
                <li> <i class="fas fa-check"></i> food and drinks </li>
                <li> <i class="fas fa-check"></i> invitation card </li>
            </ul>
            <a href="#" class="btn">check out</a>
        </div>

        <div class="box">
            <h3 class="title">for weddings</h3>
            <h3 class="amount">$450.99</h3>
            <ul>
                <li><i class="fas fa-check"></i>full services</li>
                <li> <i class="fas fa-check"></i> decorations </li>
                <li> <i class="fas fa-check"></i> music and photos </li>
                <li> <i class="fas fa-check"></i> food and drinks </li>
                <li> <i class="fas fa-check"></i> invitation card </li>
            </ul>
            <a href="#" class="btn">check out</a>
        </div>

        <div class="box">
            <h3 class="title">for concerts</h3>
            <h3 class="amount">$650.99</h3>
            <ul>
                <li><i class="fas fa-check"></i>full services</li>
                <li> <i class="fas fa-check"></i> decorations </li>
                <li> <i class="fas fa-check"></i> music and photos </li>
                <li> <i class="fas fa-check"></i> food and drinks </li>
                <li> <i class="fas fa-check"></i> invitation card </li>
            </ul>
            <a href="#" class="btn">check out</a>
        </div>

        <div class="box">
            <h3 class="title">for others</h3>
            <h3 class="amount">$850.99</h3>
            <ul>
                <li><i class="fas fa-check"></i>full services</li>
                <li> <i class="fas fa-check"></i> decorations </li>
                <li> <i class="fas fa-check"></i> music and photos </li>
                <li> <i class="fas fa-check"></i> food and drinks </li>
                <li> <i class="fas fa-check"></i> invitation card </li>
            </ul>
            <a href="#" class="btn">check out</a>
        </div>

    </div>


</section>



<!-- review  -->

<section class="reivew" id="review"> 
    
    <h1 class="heading">client's <span>review</span></h1>

    <div class="review-slider swiper-container">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="img/pic-1.png" alt="">
                    <div class="user-info">
                        <h3>Flora jim.</h3>
                        <span>happy clients</span>
                    </div>
                </div>
                <p>The most positive point about Gazellig is their support team as they are always available for any question we have.Best wishes for them.</p>
            </div>

            <div class="swiper-slide box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="img/pic-2.png" alt="">
                    <div class="user-info">
                        <h3>Kader khan</h3>
                        <span>happy clients</span>
                    </div>
                </div>
                <p>The customer service and professional help received from the customer success manager was fantastic.Sge answeeed our calls in a timely manner and was more than happy to address all our question.</p>
            </div>

            <div class="swiper-slide box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="img/pic-3.png" alt="">
                    <div class="user-info">
                        <h3>Vhumi Kar.</h3>
                        <span>happy clients</span>
                    </div>
                </div>
                <p>Gazellig, Thank you so much for EVERYTHING!! for our corporate holiday party. The food was fantastic and the DJ/karaoke was awesome. Everyone had such a great time and we will be contacting you again next year!</p>
            </div>

            <div class="swiper-slide box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="img/pic-4.png" alt="">
                    <div class="user-info">
                        <h3>Tim jon</h3>
                        <span>happy clients</span>
                    </div>
                </div>
                <p>Great, great job the last couple of days... I just wanted to say thank you again for your impeccable facilitation. You and the entire  team are stellar. We appreciate your professionalism and attention to detail.  Cindy – thanks for assigning Leslie to this event. She was fabulous.</p>
            </div>

        </div>

    </div>

</section>

\

<!-- contact us -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <form action="">
        <div class="inputBox">
            <input type="text" placeholder="name">
            <input type="email" placeholder="email">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="number">
            <input type="text" placeholder="subject">
        </div>
        <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

</section>



<!-- footer s  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Dhaka </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Khulna</a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Rajshahi </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Cumilla</a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Chittagong </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> service </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> price </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> gallery </a> 
            <a href="#"> <i class="fas fa-arrow-right"></i> reivew </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> about </a>
        </div>

        <div class="box">
            <h3>contact info</h3> </a>
            <a href="#"> <i class="fas fa-phone"></i> 01710000000 </a>
            <a href="#"> <i class="fas fa-envelope"></i> gazellig@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> gazelligteam@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Mirpur, Dhaka- 1204 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>

    <div class="credit"> created by <span>Team-Gazellig</span> | all rights reserved </div>

</section>

<!-- footer section ends -->

<!-- theme toggler  -->

<div class="theme-toggler">

    <div class="toggle-btn">
        <i class="fas fa-cog"></i>
    </div>

    <h3>choose color</h3>

    <div class="buttons">
        <div class="theme-btn" style="background: #3867d6;"></div>
        <div class="theme-btn" style="background: #f7b731;"></div>
        <div class="theme-btn" style="background: #ff0033;"></div>
        <div class="theme-btn" style="background: #830ef1;"></div>
        <div class="theme-btn" style="background: #fa8231;"></div>
        <div class="theme-btn" style="background: #FC427B;"></div>
    </div>

</div>





<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- js file link  -->
<script src="script.js"></script>

</body>
</html>