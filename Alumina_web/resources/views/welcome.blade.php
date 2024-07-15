<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= device-width, initial-scale=1.0">
    <title>LinkPlus</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <style>
        /* CSS */

        /* body */
        body {
            font-family: Poppins;
            width: 1440px;
            margin: auto;
            padding: 0;
            align-items:center;
            justify-content:center;
        }

        /* header + navigation bar*/
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #F8FBF9;
            margin: auto;
            color: white;
            height: 158px;
            width: 1440px;
        }

        .header img {
            height: 114px;
            width: 114px;;
        }
        .header nav a {
            margin: 0 20px;
            color: #063D19;
            text-decoration: none;
            font-size: 24px;
            font-weight: 400;
        }
        .header .login {
            background: linear-gradient(to right, #192D20 0%,#1F5C33 59%, #013111 100%);
            color: #fff;
            padding: 10px 35px;
            border: none;
            cursor: pointer;
            border-radius: 10px;
            width: 198px;
            height: 80.1px;
            font-size: 24px;
        }

        /* landing page content */
        .content-container {
            padding: 5px;
        }

        .hero{
            width: 1440px;
            height: 807px;
            background-size: cover;
            background-position: center;
            align-items: center;
            margin-top: 8px;
            display: flex;
        }

        /* hero-content(side) */
        .hero-content {
            max-width: 50%;
            color: #2F4F4F; /* Dark Green */
            margin-left: 107px;
            flex:1;
        }

        .hero-content h1{
            font-size: 35px;
            margin-bottom: 10px;
        }

        .hero-content p {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .hero-content button {
            background: linear-gradient(to right, #192D20 0%,#1F5C33 59%, #013111 100%);
            color: #fff;
            padding: 10px 35px;
            border: none;
            cursor: pointer;
            border-radius: 10px;
            width: 198px;
            height: 80.1px;
            font-size: 24px;
        }

        /* hero section, contact section */
        .hero, .contact{
            margin-bottom: 20px;
        }

        /* side image collage */
        .hero-img{
            display: flex;
            margin-left: 10px;
            gap: 10px;
            margin-right: 84px;
        }

        .hero-img1{
            flex: 1;
        }

        .hero-img1 img{
            width: 270px;
            height: 503px;
            border-radius: 20px;
        }

        .hero-img2{
            flex: 1;
            display: flex;
            flex-direction: column;

        }

        .HeroImage2 img{
            width: 316px;
            height: 202px;
            border-radius: 20px;
        }

        .HeroImage3 img{
            width: 316px;
            height: 293px;
            border-radius: 20px;
        }
        
        /* explore our services section -03 cards */
        .services{
            width: 1142px;
            height: 382px;
            margin-left: 149px;
            margin-bottom: 97px;
        }

        .services h2{
            font-size: 35px;
            color: #1D442A;
            text-align: center;
            font-weight: 700;
        }

        .services-content {
            display: flex;
            justify-content: space-between;   
        }

        .services-content .service1,
        .services-content .service2,
        .services-content .service3 {
            flex: 1;
            justify-content: space-between;
            align-items: center;
            text-align: center;
            border-radius: 25px;
            border: 2px solid #1D442A; /* Corrected border property */
            width: 337px;
            height: 279px;
            background-color: #fff;
            padding: 0px; /* Adjust padding as needed */
            box-shadow: 0 4px 4px rgba(0, 0, 0, 0.1);
            margin: 10px;
        }

        .services-content .service1 img,
        .services-content .service2 img,
        .services-content .service3 img {
            width: 135px;
            height: 134px;
            border-radius: 25px 25px 0 0; /* Example rounded top corners for images */
            margin-top: 50px;
        }

        .services-content .service1 p,
        .services-content .service2 p,
        .services-content .service3 p {
            margin-top: 10px;
            font-weight: bold;
            font-size: 20px;
        }

        /* services slideshow */
        .services-carousel{
            position: relative;
            width: 100%;
            max-width: 1260px; /* Adjust width as needed */
        }

        .services-desc{
            display: flex;
            overflow-x: hidden;
            max-width: 1260px;
            height: 547px;
            margin-left: 90px;
            background-color: #FAFEFB;
            border-radius: 20px;
        }

        .third-section{
            margin-left:60px;
            max-width: 50%;
            margin-top: 60px;
            font-size: 20px;
        } 

        .image-edit img{
            margin-top: 60px;
            margin-left: 95px;
            width: 358px;
            height: 408px;
        }

        .third-section, .image-edit img {
            flex: 1 1 auto;
            width: 100%;
            display: block;
        }

        .prev-slide, .next-slide {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .prev-slide {
            left: 10px;
        }

        .next-slide {
            right: 5px;
        }

        .slides {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .slide {
            display: none;
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.2s ease;
        }

        .slide.active {
            display: block;
            position: relative;
            opacity: 1;
        }

        .progress-bar {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .progress-dot {
            width: 40px;
            height: 10px;
            background-color: #ccc;
            border-radius: 10%;
            margin: 0 5px;
            cursor: pointer;
        }

        .progress-dot.active {
            background-color: #333;
        }

        
        /*contact container form*/
        .contact-container {
            align-items: center;
            margin-left: 9px;
            width: 1422px;
            height: 700px;
            display: flex;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            margin-top: 74px;
        }

        .form-section, .info-section {
            padding: 40px;
        }

        .form-section {
            flex: 1;
        }

        .submit1 button{
            background: linear-gradient(to right, #192D20 0%,#1F5C33 59%, #013111 100%);
            color: #fff;
            padding: 10px 35px;
            border: none;
            cursor: pointer;
            border-radius: 10px;
            width: 198px;
            height: 80.1px;
            font-size: 24px;
        }

        .imageSocialmedia {
            flex: 1;
            background-color: #fff;
            text-align: center;
        }

        .form-section h2 {
            color: #004400;
        }

        .form-section p {
            color: #666666;
        }

        .form-section label {
            display: block;
            margin: 10px 0 5px;
            color: #004400;
        }

        .form-section input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #cccccc;
            border-radius: 5px;
        }


        .imageSocialmedia ul {
            list-style: none;
            padding: 0;
            margin-top: 28px;
        }

        .imageSocialmedia ul li {
            margin: 10px 0;
            color: #004400;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .imageSocialmedia ul li i {
            margin-right: 10px;
        }

        .social-media a{
            display: flex;
            margin: 10px;
            color: #004400;
            font-size: 20px;
            text-decoration: none;
        }

        .social-media a:hover {
            color: #003300;
        }

        footer {
            width: 1440px;
            background: linear-gradient(to right, #192D20 0%,#1F5C33 59%, #013111 100%);
            padding: 5px;
            height: 100px;
            text-align: center;
            margin-top: 10px;
        }

        footer p{
            color: white;
        }

    </style>
</head>
<body>

    <header class="header">
        <img src="{{ asset('images/logo.png') }}">
        <nav>
            <a href="{{ route('welcome') }}">Home</a>
            <a href="{{ route('alumini') }}">Network</a>
            <a href="{{ route('events') }}">Events</a>
            <a href="{{ route('jobs') }}">Jobs</a>
            <a href="#">Contact</a>
        </nav>
        <button class="login">Login</button>
    </header>


    <div class="content-container">

    <!--hero section-->
        <section class="hero" id="home" style="background-image: url('images/home-page/bg-header.jpg');">
            <div class="hero-content">
                <h1>Start connecting with alumni and professionals.</h1>
                <p> 
                    We believe in the power of community and the strength of connections. Our app is designed to bridge the gap between 
                    alumni and current students, offering a platform where experienced professionals can provide guidance, mentorship, 
                    and job opportunities to those just starting their careers.
                </p>
                <button onclick="location.href='#contact'">Reach Us</button>
            </div>

            <div class="hero-img">
                <div class="hero-img1">
                    <img src="images/home-page/heroImage1.jpg" alt="HeroImage1">
                </div>

                <div class="hero-img2">
                    <div class="HeroImage2"><img src="images/home-page/heroImage2.jpg" alt="HeroImage2"></div>
                    <div class="HeroImage3"><img src="images/home-page/heroImage3.jpg" alt="HeroImage3"></div>
                </div>
            </div>
        </section>

    <!--explore our services 03 cards-->
        <section class="services">
            <h2>Explore our services</h2>
                <div class="services-content">
                    <div class="service1">
                        <img src="images/home-page/alumni1.jpg" alt="Connect with Alumni"/>
                        <p>Connect with Alumni</p>
                    </div>
                    <div class="service2">
                        <img src="images/home-page/events2.jpg" alt="Experience the events"/>
                        <p>Experience the events</p>
                    </div>
                    <div class="service3">
                        <img src="images/home-page/jobs3.jpg" alt="More Job notices">
                        <p>More Job notices</p>
                    </div>
                </div>
        </section>

    <!--
        <section class="services-carousel">
            <div class="services-desc">
                <div class="third-section">
                    <h2>Connect with alumni</h2>
                        <div>
                            <p>
                                We're here to help you make the most of your LinkPlus experience. Whether you have questions, need support,
                                or want to provide feedback, our team is ready to assist you. Reach out to us through any of the following 
                                channels.
                            </p>
                            <ul>
                                <li>We're here to help you make the most of</li>
                                <li>your LinkPlus experience. </li>
                                <li>Whether you have questions, need support, or want to provide feedback.</li>
                            </ul>
                        </div>
                </div>

                <div class="image-edit">
                        <img src="images/home-page/service-desc.jpg" alt="servimg1">
                </div>
            </div>

            <div class="services-desc">
                <div class="third-section">
                    <h2>Connect with alumni</h2>
                        <div>
                            <p>
                                We're here to help you make the most of your LinkPlus experience. Whether you have questions, need support,
                                or want to provide feedback, our team is ready to assist you. Reach out to us through any of the following 
                                channels.
                            </p>
                            <ul>
                                <li>We're here to help you make the most of</li>
                                <li>your LinkPlus experience. </li>
                                <li>Whether you have questions, need support, or want to provide feedback.</li>
                            </ul>
                        </div>
                </div>

                <div class="image-edit">
                        <img src="images/home-page/service-desc.jpg" alt="servimg1">
                </div>
            </div>

            <div class="services-desc">
                <div class="third-section">
                    <h2>Connect with alumni</h2>
                        <div>
                            <p>
                                We're here to help you make the most of your LinkPlus experience. Whether you have questions, need support,
                                or want to provide feedback, our team is ready to assist you. Reach out to us through any of the following 
                                channels.
                            </p>
                            <ul>
                                <li>We're here to help you make the most of</li>
                                <li>your LinkPlus experience. </li>
                                <li>Whether you have questions, need support, or want to provide feedback.</li>
                            </ul>
                        </div>
                </div>

                <div class="image-edit">
                        <img src="images/home-page/service-desc.jpg" alt="servimg1">
                </div>
            </div>


            <button class="prev-slide">Previous</button>
            <button class="next-slide">Next</button>
        </section>-->

        <!-- <section class="jobs">
            <h2>Job Titles you may search</h2>
            <div>
                <img src="software-engineer.jpg" alt="Software Engineer">
                <p>Software Engineer</p>
            </div>
            <div>
                <img src="qa-engineer.jpg" alt="Q/A Engineer">
                <p>Q/A Engineer</p>
            </div>
            <div>
                <img src="fullstack-developer.jpg" alt="Full-stack Developer">
                <p>Full-stack Developer</p>
            </div>
        </section>*/ -->

        <section class="services-carousel">
            <div class="slides">
                <?php
                $services = array(
                    array(
                        'title' => 'Connect with alumni',
                        'content' => 'We\'re here to help you make the most of your LinkPlus experience. Whether you have questions, need support, or want to provide feedback, our team is ready to assist you. Reach out to us through any of the following channels.',
                        'list_items' => array(
                            'We\'re here to help you make the most of',
                            'your LinkPlus experience.',
                            'Whether you have questions, need support, or want to provide feedback.'
                        ),
                        'image' => 'images/home-page/service-desc.jpg'
                    ),
                    array(
                        'title' => 'Develop your skills',
                        'content' => 'Expand your knowledge and skills with our wide range of courses and resources. From beginner to advanced levels, we have something for everyone.',
                        'list_items' => array(
                            'Wide range of courses and resources',
                            'Suitable for all skill levels',
                            'Continuous learning opportunities'
                        ),
                        'image' => 'images/home-page/service-desc2.jpg'
                    ),
                    array(
                        'title' => 'Career guidance',
                        'content' => 'Get personalized career advice and guidance from industry experts. Whether you are starting your career or looking for a change, we\'re here to support you.',
                        'list_items' => array(
                            'Personalized career advice',
                            'Expert guidance',
                            'Career change support'
                        ),
                        'image' => 'images/home-page/service-desc3.jpg'
                    ),
                );

                foreach ($services as $index => $service) {
                ?>
                <div class="slide <?php echo $index === 0 ? 'active' : ''; ?>">
                    <div class="services-desc">
                        <div class="third-section">
                            <h2><?php echo $service['title']; ?></h2>
                            <div>
                                <p><?php echo $service['content']; ?></p>
                                <ul>
                                    <?php foreach ($service['list_items'] as $item) { ?>
                                        <li><?php echo $item; ?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="image-edit">
                            <img src="<?php echo $service['image']; ?>" alt="service image">
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="progress-bar">
                <?php foreach ($services as $index => $service) { ?>
                    <span class="progress-dot <?php echo $index === 0 ? 'active' : ''; ?>" data-index="<?php echo $index; ?>"></span>
                <?php } ?>
            </div>
            <button class="prev-slide">Prev</button>
            <button class="next-slide">Next</button>
        </section>


        <!-- Corrected path to script.js -->
        <script src="script.js"></script>


        <div class="contact-container">

            <div class="form-section">
                <h2>Get in touch</h2>
                <p>We are here for you! How can we help?</p>
                    <form action="process_form.php" method="post">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                        
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                        
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="4" required></textarea>
                        
                        <div class="submit1">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
            </div>

            <div class="imageSocialmedia">
                <img src="images/home-page/Contact-us.jpg" alt="Contact Us" width="510px" height="458px">
                <ul>
                    <li> <img src="images/home-page/mi_location.png" alt="location">545 Mavis Island, IL 99191</li>
                    <li> <img src="images/home-page/Vector.png" alt="call">+2034 4040 3030</li>
                    <li> <span class="material-symbols-outlined">mail</span>hello@gmail.com</li>
                </ul>
            </div>

            <div class="social-media">
                    <a href="#"><img src="images/home-page/insta.png"></a>
                    <a href="#"><img src="images/home-page/facebook.png"></a>
                    <a href="#"><img src="images/home-page/linkedin.png"></a>
            </div>

        </div>

    <footer>
        <p>&copy; 2024 LinkPlus. All rights reserved.</p>
        <p>545 Mavis Island, IL 89191 | +2034 4040 3030 | hello@gmail.com</p>
    </footer>

</body>
</html>
