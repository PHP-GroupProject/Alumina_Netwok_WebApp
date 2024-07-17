<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Network</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="{{ asset('css/filter.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-R+u6N6EJN2RcO0aG0RgF9TZhH/gxV8qMVO+SlWHlH4T6Vo+8eyDXNjG30hFX3P9P2F9I5EB5iHJCH6lBRn4Kmw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

      .form-container {
      max-width: 800px;
      margin: 50px auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    }
    .form-title {
      margin-bottom: 30px;
      text-align: center;
      color: #007bff;
      font-weight: bold;
    }
    .form-group label {
      font-weight: bold;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      font-weight: bold;
    }
    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
    .age-display {
      margin-top: 10px;
      font-weight: bold;
      color: #007bff;
    }
    .custom-input {
      border-radius: 5px;
      border: 1px solid #ced4da;
      padding: 10px;
      font-size: 16px;
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
            <div >
            </div>
         


        </div>
      

        @include('components.ProfileForm')
    </main>
 

</body>

</html>