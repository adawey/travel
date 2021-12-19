<?php
$title = 'home';

include_once "nav.php";


?>

<!-- Home Section -->
<section class="home" id="home">
    <div class="content">
        <span data-aos="fade-up" data-aos-delay="150">follow us</span>
        <h3 data-aos="fade-up" data-aos-delay="300">to the unknown</h3>
        <p data-aos="fade-up" data-aos-delay="450">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam temporibus similique neque itaque vero
            inventore quod ratione non corporis odio.</p>
        <a data-aos="fade-up" data-aos-delay="600" href="#book-form" class="btn">book now</a>
    </div>
</section>

<!-- booking form section  -->
<section class="book-form" id="book-form">
    <form action="connection.php" method="POST">
        <div class="inpuBox" data-aos="zoom-in" data-aos-delay="150">
            <span>to where ?</span>
            <input name='place' type="text" placeholder="place name" value="">
        </div>
        <div class="inpuBox" data-aos="zoom-in" data-aos-delay="300">
            <span>name </span>
            <input name='name' type="text" value="">
        </div>
        <div class="inpuBox" data-aos="zoom-in" data-aos-delay="600">
            <span>how many pepole ?</span>
            <input type="number" name='count' placeholder="number of travelers" value="">
        </div>
        <div class="inpuBox" data-aos="zoom-in" data-aos-delay="700">
            <span>phone </span>
            <input type="number" name='phone' placeholder="phone" value="">
        </div>
        <div class="inpuBox" data-aos="zoom-in" data-aos-delay="800">
            <span>email</span>
            <input type="email" name='email' placeholder="your email" value="">
        </div>
        <input type="submit" name='fly now' value="fly now" class="btn" data-aos="zoom-in" data-aos-delay="750">

    </form>
</section>

<!-- about section satrts -->
<section class="about in" id="about">
    <div class="video-container" data-aos="fade-right" data-aos-delay="300">
        <video src="./images/about-vid-1.mp4" muted autoplay loop class="video"></video>
        <div class="controls">
            <span class="control-btn" data-src="./images/about-vid-1.mp4"></span>
            <span class="control-btn" data-src="./images/about-vid-2.mp4"></span>
            <span class="control-btn" data-src="./images/about-vid-3.mp4"></span>
        </div>
    </div>
    <div class="content" data-aos="fade-left" data-aos-delay="150" data-aos-delay=" 600">
        <span>why us ?</span>
        <h3>nature's majesty awaits you</h3>
        <p>Enjoy your time in the water and on the mountains and practice many of your favorite sports such as snowboarding, diving, mountaineering and many more</p>
        <a href="destination.php" class="btn">read more</a>
    </div>
</section>

<!-- destination section -->

<section class="destination" id="destination">
    <div class="heading">
        <span>our destinations</span>
        <h1>make yours destination</h1>
    </div>

    <div class="box-container">
        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <div class="image">
                <img src="./images/des-1.jpg" alt="destination">
            </div>
            <div class="content">
                <h3>Switzerland</h3>
                <p>There are many reasons why you decide to travel to one of the paradises of the Alps in Europe</p>
                <a href="destination.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <div class="image">
                <img src="./images/se1.png" alt="destination">
            </div>
            <div class="content">
                <h3>Seychelles Islands</h3>
                <p>Besides the beaches, there is a group of beautiful tropical forests, waterfalls and picturesque trees, especially a package of the most luxurious tourist resorts</p>
                <a href="destination.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <div class="image">
                <img src="./images/eg1.jpg" alt="destination">
            </div>
            <div class="content">
                <h3>egypt</h3>
                <p>The pyramids of Egypt Giza in Cairo, located on the Giza plateau. It includes three pyramids of Khufu, Khafre, and Menkaure, which were built about 25 centuries BC.</p>
                <a href="destination.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="600">
            <div class="image">
                <img src="./images/ser.jpg" alt="destination">
            </div>
            <div class="content">
                <h3>Sri Lanka</h3>
                <p>We start our list of the best travel destinations for nature lovers in Sri Lanka, nicknamed the “Radiant Island”, while it was once known as Ceylon.</p>
                <a href="destination.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="750">
            <div class="image">
                <img src="./images/bali.jpg" alt="destination">
            </div>
            <div class="content">
                <h3>Bali island</h3>
                <p>The island of Bali is one of the most famous tourist cities in the Republic of Indonesia and one of the most frequented travel destinations for nature lovers. Classification of the island of Bali as one of the most beautiful tourist cities in the world.</p>
                <a href="destination.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="900">
            <div class="image">
                <img src="./images/ton.jpg" alt="destination">
            </div>
            <div class="content">
                <h3>Tunisia</h3>
                <p>Tunisia has been known throughout the ages for its picturesque nature and the beauty of its regions, which reflect the authenticity of the hospitable people who love culture and art.</p>
                <a href="destination.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="1150">
            <div class="image">
                <img src="./images/Greece.jpg" alt="destination">
            </div>
            <div class="content">
                <h3>Greece</h3>
                <p>Greece, a country known for its myths, is one of the oldest civilizations in the world and one of the most popular travel destinations for nature lovers in all parts of the earth.</p>
                <a href="destination.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="1300">
            <div class="image">
                <img src="./images/Turkey.jpeg" alt="destination">
            </div>
            <div class="content">
                <h3>Turkey</h3>
                <p>Turkey is characterized by its strategic location and is also distinguished by its ancient history that dates back to the Stone Age through the Greek, Roman and Byzantine eras, all the way to the Ottoman era.</p>
                <a href="destination.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- services section -->


<!-- gallery section starts -->
<section class="gallery" id="gallery">
    <div class="heading">
        <span>our gallery</span>
        <h1>we make the moment</h1>
    </div>

    <div class="box-container">
        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="./images/gallery-img-1.jpg" alt="gallery">
            <span>travel spot</span>
            <h3>iceland</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="./images/gallery-img-2.jpg" alt="gallery">
            <span>travel spot</span>
            <h3>greenland</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="./images/gallery-img-3.jpg" alt="gallery">
            <span>travel spot</span>
            <h3>alaska</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="600">
            <img src="./images/gallery-img-4.jpg" alt="gallery">
            <span>travel spot</span>
            <h3>thailand</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="750">
            <img src="./images/gallery-img-5.jpg" alt="gallery">
            <span>travel spot</span>
            <h3>brazil</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="900">
            <img src="./images/gallery-img-6.jpg" alt="gallery">
            <span>travel spot</span>
            <h3>maldives</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="1150">
            <img src="./images/gallery-img-7.jpg" alt="gallery">
            <span>travel spot</span>
            <h3>paris</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="1300">
            <img src="./images/gallery-img-8.jpg" alt="gallery">
            <span>travel spot</span>
            <h3>newyork</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="1450">
            <img src="./images/gallery-img-9.jpg" alt="gallery">
            <span>travel spot</span>
            <h3>egypt</h3>
        </div>
    </div>
</section>
<!-- banner section start -->
<div class="banner">
    <div class="content" data-aos="zoom-in-up">
        <span>start your adventures</span>
        <h3>let's explore this world</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quidem incidunt ut, in cumque placeat?</p>
        <a href="#book-form" class="btn">Explore now</a>
    </div>
</div>


<?php

include_once "footer.php";
?>