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
            width: 60px;;
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
    
</body>
</html>
