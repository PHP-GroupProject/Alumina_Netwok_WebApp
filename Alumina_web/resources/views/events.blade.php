<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details</title>
    <style>
       body {
            font-family: 'Lora';
            margin: 0;
            padding: 0;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: linear-gradient(to right, white -20%, #062D19 80%);
            padding: 10px 25px;
            color: white;
        }
        .header img {
            height: 55px;
            width: 60px;
        }
        .header nav a {
            margin: 0 15px;
            color: #062D19;
            text-decoration: none;
        }
        .header .login {
            background-color: white;
            color: #015C20;
            padding: 10px 25px;
            border: none;
            cursor: pointer;
            border-radius: 10px;
        }
        * {box-sizing: border-box;}

        .slideshow-container {
            position: relative;
            margin: auto;
            max-height: 651px;
        }

        .mySlides {
            display: none;
        }
        .mySlides img {
            max-height: 651px;
            object-fit: cover;
        }

        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 2px 2px 0;
            user-select: none;
        }

        .next {
            right: 0;
            border-radius: 2px 0 0 2px;
        }

        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        .text {
            color: #fff;
            padding: 8px 120px;
            position: absolute;
            bottom: 100px;
            width: 100%;
            text-align: left;
        }

        .text .tag,
        .eventset .tag {
            padding: 2px 8px;
            background-color: #1D442A;
            border-radius: 8px;
            font-size: 15px;
            color: #fff;
        }

        .text .heading {
            font-size: 46px;
            font-weight: bold;
            text-shadow: -2px 0 #062D19, 0 2px #062D19, 2px 0 #062D19, 0 -2px #062D19;
            width: 530px;
        }

        .text .description {
            text-shadow: -1px 0 #062D19, 0 1px #062D19, 1px 0 #062D19, 0 -1px #062D19;
            font-size: 16px;
        }

        .dot-container {
            margin-top: 15px;
        }

        .dot {
            cursor: pointer;
            height: 10px;
            width: 10px;
            margin: 0 2px;
            background-color: #fff;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {opacity: .4;}
            to {opacity: 1;}
        }

        .popular {
            background-color: #F2E7E7;
            margin-top: -20px;
            padding: 100px 120px;
        }
        .popular h3 {
            font-size: 36px;
            font-weight: bold;
            color: #495057;
        }
        .filter {
            display: flex;
            justify-content: space-between;
            width: 80%;
        }
        .filter p {
            font-size: 16px;
            color: #495057;
            font-weight: bold;
        }
        .category {
            margin-top: 60px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }
        .addnew-button {
            border-radius: 6px;
            background-color: green;
            color: white; /* Text color */
            border: none; /* Remove default border */
            padding: 10px 20px; /* Add some padding */
            font-size: 16px; 
            cursor: pointer; 
            text-decoration: none;
            top: 200px; 
            margin-left: 800px; 
            display: inline-block; 

        }
        .event-list{

        }
    </style>
</head>
<body>
<header class="header">
        <img src="{{ asset('images/logo.png') }}" width="45" height="25">
        <nav>
            <a href="{{ route('welcome') }}">Home</a>
            <a href="{{ route('alumini') }}">Network</a>
            <a href="{{ route('events') }}">Events</a>
            <a href="{{ route('jobs') }}">Jobs</a>
            <a href="#">Contact</a>
        </nav>
        <button class="login">Login</button>
    </header>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="{{ asset('images/hero_image1.jpg') }}" style="width:100%">
            <div class="text">
                <span class="tag">
                    Workshop
                </span>
                <br><br>
                <span class="heading">
                    Information and <br>Communication Technology<br><br>
                </span>
                <span class="description">08.08.2021<br>Progressively incentivize cooperative systems through technically sound functionalities. The credibly productivate seamless data.</span>
                <div class="dot-container">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <div class="mySlides fade">
            <img src="{{ asset('images/hero_image2.jpg') }}" style="width:100%">
            <div class="text">
                <span class="tag">
                    Workshop
                </span>
                <br><br>
                <span class="heading">
                    Information and <br>Communication Technology<br><br>
                </span>
                <span class="description">08.08.2021<br>Progressively incentivize cooperative systems through technically sound functionalities. The credibly productivate seamless data.</span>
                <div class="dot-container">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <div class="mySlides fade">
            <img src="{{ asset('images/hero_image3.jpg') }}" style="width:100%">
            <div class="text">
                <span class="tag">
                    Workshop
                </span>
                <br><br>
                <span class="heading">
                    Information and <br>Communication Technology<br><br>
                </span>
                <span class="description">08.08.2021<br>Progressively incentivize cooperative systems through technically sound functionalities. The credibly productivate seamless data.</span>
                <div class="dot-container">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <script>
        let slideIndex = 0;
        showSlides();

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n - 1);
        }

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 3000); // Change image every 3 seconds
        }
    </script>

    <div class="popular">
    <div class="container">
    <a href="{{ route('create') }}" class="addnew-button">Add New Event</a>

    </div>
        <h3> Popular Events </h3>

        <div class="filter">
            <p>All</p>
            <p>Cloud Computing</p>
            <p>DevOps</p>
            <p>Machine Learning</p>
            <p>Artificial Intelligence</p>
        </div>



    <div class="container">
        <h2>Event Details</h2>
        <div id="event-list">
            <!-- This is where event details will be dynamically inserted -->
        </div>
        <form method="GET" action="{{ route('events') }}">
            @csrf
            <button type="submit" class="btn-secondary">Back to Events</button>
        </form>
    </div>

    <script>
        // Assume eventsData is an array of objects containing event details fetched from backend
        const eventsData = {!! json_encode($events) !!};
        
        const eventListContainer = document.getElementById('event-list');
        
        // Loop through eventsData and generate HTML for each event
        eventsData.forEach(event => {
            const eventHTML = `
                <div class="event-item">
                    <h3>${event.title}</h3>
                    <p><strong>Date:</strong> ${event.date}</p>
                    <p><strong>Venue:</strong> ${event.venue}</p>
                    <p><strong>Description:</strong> ${event.description}</p>
                    <p><strong>Images:</strong> ${event.images}</p>
                    <p><strong>Keywords:</strong> ${event.keywords}</p>
                </div>
                <hr>
            `;
            eventListContainer.innerHTML += eventHTML;
        });
    </script>
</body>
</html>
