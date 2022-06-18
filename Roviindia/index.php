<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>complete responsive tour and travel agency website design tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
    
    

</head>
<body>
    

<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>T</span>ravel</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#book">book</a>
        <a href="#packages">packages</a>
        <a href="#services">services</a>
        <a href="#gallery">gallery</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>
    </div>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->

<!-- login form container  -->

<div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="/Roviindia/index.php" method="post">
        <h3>login</h3>
        <input type="email" name="email" class="box" placeholder="enter your email">
        <input type="password" name="password"class="box" placeholder="enter your password">
        <input type="submit" value="login now" class="btn">
        <input type="checkbox" id="remember">
        <label for="remember">remember me</label>
        <p>don't have and account? <a href="register.php">register now</a></p>
    </form>

</div>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password=$_POST['password'];

        //submit these to database

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "sigin";
        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
            die("sorry we failed to connect" . mysqli_connect_error());
        } else {
            echo "connect is successfully";
            // submit these to database

            

            $sql="INSERT INTO `register` ( `email`, `password`, `dt`) VALUES ( '$email', '$password', current_timestamp())";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>success!</strong>your entry  has been submitted successfully!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>';
            } else {
                echo "The table was not created successfully because this errror---->" . mysqli_error($conn);
            }
        }
    }


    ?>




<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Rove India</h3>
        <p>Dicover new places with Arshita and Avinash</p>
        
    </div>
    
    <div class="controls">
        <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
        <span class="vid-btn" data-src="images/vid-2.mp4"></span>
        <span class="vid-btn" data-src="images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="images/vid-4.mp4"></span>
        <span class="vid-btn" data-src="images/vid-5.mp4"></span>
    </div>
   

    <div class="video-container">
        <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- home section ends -->

<!-- book section starts  -->

<section class="book" id="book">


    <h1 class="heading">
        <span>E</span>
        <span>x</span>
        <span>p</span>
        <span>l</span>
        <span>o</span>
        <span>r</span>
        <span>e</span>
        <span class="space"></span>
        <span>I</span>
        <span>n</span>
        <span>d</span>
        <span>i</span>
        <span>a</span>
    </h1>


    <div class="row">

        <div class="image">
            <img src="images/image3.jpg" alt="">
        </div>

        <form  action="">
            <div class="inputBox">
                <h3>where to</h3>
                <input type="text" placeholder="place name">
            </div>
            <div class="inputBox">
                <h3>how many</h3>
                <input type="number" placeholder="number of guests">
            </div>
            <div class="inputBox">
                <h3>arrivals</h3>
                <input type="date">
            </div>
            <div class="inputBox">
                <h3>leaving</h3>
                <input type="date">
            </div>
                <div>
                <a href="main.html"  input type= "submit" class="btns" value="book now ">book now</a>
                </div>
            </div>
        </form>

    </div>
   

</section>

<!-- book section ends -->

<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/p-1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Uttar Pradesh </h3>
                <p>Uttar Pradesh is a land of culture, tradition, history, festival, black spell, agriculture, cuisines, and tourist spots.
                From ancient temples to national parks, wildlife sanctuaries, historic places, spectacular architectural marvels,
                massive forts.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                
                </div>
                <!--<div class="price"> Rs.3600  <span> Rs.4500 </span> </div>-->
                <a href="up.html" class="btn">Explore Uttar pradesh</a>
            </div>

        </div>

        <div class="box">
            <img src="images/p-2.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Punjab </h3>
                <p>Punjab has one of the oldest and richest cultures of the world.While the Punjabis are known for their strong
                determination, their culture presents a multi-hued heritage of ancient civilizations.the Golden Temple is the famous visting place .</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
               </div>
                <!--<div class="price"> Rs.3000 <span> Rs.4000</span> </div>-->
                <a href="punjab.html" class="btn">Explore punjab</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-3.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Kerala </h3>
                <p>Kerala is a state in India, situated in the south west region.The capital city of Kerala is Trivandrum.
                The official language of Kerala is Malayalam.The state is bordered by a number of beaches; covered by hills of Western Ghats and filled with backwaters!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
               <!-- <div class="price"> Rs.5000<span> Rs.5500</span> </div>-->
                <a href="kerala.html" class="btn">Explore kerala</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-4.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Himanchal Pradesh </h3>
                <p>With plunging river valleys and picturesque snowy peaks, Himachal Pradesh is India’s adventure playground. Surrounded by
                the majestic Himalayas, lush green forests, breathtaking lakes, and towering mountains, Himachal is perhaps a paradise
                for backpackers.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <!--<div class="price"> Rs.4800<span> Rs.5500</span> </div>-->
                <a href="himachal pardesh .html" class="btn">Explore Himanchal Pradesh</a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-5.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Tamil Nadu  </h3>
                <p>Situated along the Bay of Bengal in south India, Tamil Nadu is one of India's most well-known tourist destinations owing to its natural splendour, unique culture as well as religious significance. The state boasts of a plethora of religious sites that attract pilgrims, historical attractions.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <!--<div class="price"> Rs.3200<span> Rs.4000</span> </div>-->
                <a href="Tamil Nadu.html" class="btn">Explore Tamil Nadu  </a>
            </div>
        </div>

        <div class="box">
            <img src="images/p-6.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Karnataka </h3>
                <p>Capital of Karnataka is Bangalore. Kannada is the most widely spoken language in Karnataka. It is the largest state in South India.It is bound by Arabian Sea to its West.The silicon valley of India is located in Karnataka.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
               <!--<div class="price"> Rs.4900 <span> Rs.6500</span> </div>-->
                <a href="karnataka.html" class="btn">Explore Karnataka</a>
            </div>
        </div>

    </div>

</section>

<!-- packages section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
         <!--<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>-->
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <!--<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>-->
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>safty guide</h3>
           <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>-->
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>around the world</h3>
           <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>-->
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>fastest travel</h3>
           <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>-->
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>adventures</h3>
            <!--<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>-->
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/g-1.jpg" alt="">
            <div class="content">
            </div>
        </div>
        <div class="box">
            <img src="images/g-2.jpg" alt="">
            <div class="content">
               
            </div>
        </div>
        <div class="box">
            <img src="images/g-3.jpg" alt="">
            <div class="content">
            </div>
        </div>
        <div class="box">
            <img src="images/g-4.jpg" alt="">
            <div class="content">
            </div>
        </div>
        <div class="box">
            <img src="images/g-5.jpg" alt="">
            <div class="content">
            </div>
        </div>
        <div class="box">
            <img src="images/g-6.jpg" alt="">
            <div class="content">
            </div>
        </div>
        <div class="box">
            <img src="images/g-7.jpg" alt="">
            <div class="content">
            </div>
        </div>
        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <div class="content">
            </div>
        </div>
        <div class="box">
            <img src="images/g-9.jpg" alt="">
            <div class="content">
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic1.png" alt="">
                    <h3>Vikas Mishra</h3>
                    <p>"I could not have asked for a better trvel places than Uttar pradesh.It took us to very good places. Thanks to Rove India."</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic2.png" alt="">
                    <h3>Sandeep</h3>
                    <p>"We got a great last minute rate with Rove India and the places on it was massive. Thanks for Guide us Rove India "</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic3.png" alt="">
                    <h3>Nishant mishra</h3>
                    <p>“I have used this website to find a weekend visiting places and I really like it! It can be very time consuming  to find a good places but this website makes it easy. Thanks Rove India”</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic4.png" alt="">
                    <h3>Hitesh Singla</h3>
                    <p>“Great website! pretty sure my wife wants to take about 8 vacations next summer now. Thanks Rove India”</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class ="far fa-star"></i>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

        <div class="contect">

        

      <form action="/Roviindia/index.php" method="post">
            <center><h1>Get in Touch</h1></center>
            <input type="text" id="name" name = "name" placeholder="your name" required>
            <input type="email" id="email" name = "email" placeholder="Email id" required>
            <input type="text" id="phone" name = "phone" placeholder="phone no" required>
            <textarea id="message" name = "message" rows="4" placeholder="How Can We Help You?"></textarea>
            <button type="submit">send</button>
        </form>

    </div>

    
</section>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        //submit these to database

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "contactmail";
        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
            die("sorry we failed to connect" . mysqli_connect_error());
        } else {
            echo "connect is successfully";
            // submit these to database


            $sql="INSERT INTO `user` ( `name`, `email`, `phone`, `message`, `dt`) VALUES ( '$name', '$email', '$phone', '$message', current_timestamp())";
             $result = mysqli_query($conn, $sql);

            if ($result) {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>success!</strong>your entry  has been submitted successfully!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>';
            } else {
                echo "The table was not created successfully because this errror---->" . mysqli_error($conn);
            }
        }
    }


    ?>


<!-- contact section ends -->

<!-- brand section  -->
<section class="brand-container">

    <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
        </div>
    </div>

</section>

<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Hello! visitors we are your tour guide we can help you to visit all places with happiness and without any difficulty.we wish you a happy journey!</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">japan</a>
            <a href="#">france</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">book</a>
            <a href="#">packages</a>
            <a href="#">services</a>
            <a href="#">gallery</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    <h1 class="credit"> created by <span> Avinash & Arshita</span> | Enjoy your day! </h1>

</section>


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>