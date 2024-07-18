<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Network</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: linear-gradient(to right, white -20%, #063D19 80%);
            padding: 10px 25px;
            color: white;
        }

        .header img {
            height: 55px;
            width: 60px;
            ;
        }

        .header nav a {
            margin: 0 15px;
            color: #063D19;
            text-decoration: none;
        }

        .header .login {
            background-color: white;
            color: #015C20;
            padding: 10px 35px;
            border: none;
            cursor: pointer;
            border-radius: 10px;
        }

        .profile-header {
            position: relative;
            width: 100%;
            height: 250px;
        }

        .banner img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .profile-picture {
            position: absolute;
            bottom: -0.5px;
            left: 50%;
            transform: translateX(-50%);
            border: 5px solid white;
            border-radius: 50%;
            overflow: hidden;
        }

        .profile-picture img {
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

        .profile-container {
            text-align: center;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile-details h1 {
            font-size: 24px;
            margin: 0;
            color: #2c3e50;
        }

        .profile-details p {
            font-size: 16px;
            color: #7f8c8d;
        }

        .profile-actions {
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            font-size: 14px;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .connect-btn {
            background-color: #015C20;
            color: white;
        }

        .message-btn {
            background-color: #015C20;
            color: white;
        }

        .connect-btn:hover {
            background-color: #34495e;
        }

        .message-btn:hover {
            background-color: #1abc9c;
        }

        .socialmedia {
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .social-login {
            display: flex;
            justify-content: space-between;
            width: 200px;
            margin: 0 auto;
        }

        .social-login a {
            text-decoration: none;
        }

        .social-login img {
            width: 40px;
            height: 40px;
        }

        .details {
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
            padding: 20px;
            background-color: #edf2f1;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 1300px;
            text-align: center;
            justify-content: center;

        }

        .info-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 150px;
        }

        .label {
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
        }

        .value {
            background-color: #ffffff;
            padding: 10px 20px;
            border-radius: 8px;
            color: #333;
            border: 1px solid #ddd;

        }

        .container {
            background-color: #edf2f1;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 1300px;
            width: 100%;
        }

        .about-section,
        .skills-section {
            margin-bottom: 20px;
        }

        .about-section h2,
        .skills-section h2 {
            font-size: 1.2em;
            color: #333;
            margin-bottom: 10px;
        }

        .about-section p {
            font-size: 0.9em;
            color: #333;
        }

        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .skill {
            background-color: #fff;
            border: 2px solid #015C20;
            color: #333;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9em;
            text-align: center;
        }
    </style>
</head>





<body>
    <header class="header">
        <img src="{{ asset('images/logo.png') }}" width="45" height="35">
        <nav>
            <a href="{{ route('welcome') }}">Home</a>
            <a href="{{ route('alumini') }}">Network</a>
            <a href="{{ route('events') }}">Events</a>
            <a href="{{ route('jobs') }}">Jobs</a>
            <a href="#">Contact</a>
        </nav>
        <button class="login">Login</button>
    </header>
    <main>
        <div class="profile-header">
            <div class="banner">
                <img src="{{ asset('images\sevent15.jpg') }}" alt="Banner">
            </div>
            <div class="profile-picture">
                <img src="{{ asset('images\profile7.jpg') }}" alt="Profile Picture">
            </div>
        </div>
        <div class="profile-container">
            <div class="profile-details">
                <h1>Alexander Lee</h1>
                <p>Full Stack Web Developer</p>
            </div>
    <div class="profile-actions">
        <a href="{{ route('message') }}" class="btn connect-btn">Message</a>
        <a href="{{ url('/message') }}" class="btn message-btn">Contact</a>
        <a href="{{ route('ProfileDetails') }}" class="btn message-btn">Update Profile</a>
    </div>

        <div class="socialmedia">
    
            <div class="social-login">
                <a href="#"><img src="images\github.png" alt="github"></a>
                <a href="#"><img src="images\linkedin.png" alt="linkedin"></a>
                <a href="#"><img src="images\twitter.png" alt="Twitter"></a>
                <a href="#"><img src="images\facebook.png" alt="facebook"></a>
                <a href="#"><img src="images\whatsapp.png" alt="whtsapp"></a>
            </div>

            @foreach ($alumini_details as $data)

            <div class="details">
                <div class="info-item">
                    <span class="label">Availability</span>
                    <span class="value">{{ $data->availability }}</span>
                </div>
                <div class="info-item">
                    <span class="label">Age</span>
                    <span class="value">{{ $data->age }}</span>
                </div>
                <div class="info-item">
                    <span class="label">Location</span>
                    <span class="value">{{ $data->country }}, {{ $data->city }}</span>
                                </div>
                <div class="info-item">
                    <span class="label">Workplace</span>
                    <span class="value">{{ $data->workplace }}</span>
                </div>
            </div>
            @endforeach

        </div>



        <div class="container">
            <div class="about-section">
                <h2>ABOUT</h2>
                <p>Our website deserves an amazing About Us page. This is your opportunity to tell your story and the
                    business's mission and vision. With a powerful About Us page, you can connect with customers better
                    and build trust. Over time, that trust will turn into returning revenue from loyal shoppers who
                    continue to support your business. Want to share your About Us page ideas? Please share them with
                    our community in the comments below!</p>
            </div>
            <div class="skills-section">
                <h2>SKILLS</h2>
                <div class="skills">
                    <span class="skill">C</span>
                    <span class="skill">UI</span>
                    <span class="skill">UX</span>
                    <span class="skill">PHP</span>
                    <span class="skill">Flutter</span>
                    <span class="skill">C#</span>
                    <span class="skill">React</span>
                    <span class="skill">HTML</span>
                    <span class="skill">CSS</span>
                </div>
            </div>
        </div>


    </main>

</body>

</html>