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
        .search-bar {
            display: flex;
            margin: 40px 20px;
            align: right;
            color:#E7ECE8;
            border-color:#015C20;
            
        }
        .search-bar input {
            width: 20%;
            padding: 10px;
            font-size: 16px;
            color:#015C20;
        }
        .main-content {
            display: flex;
        }
        .content-box {
            width: 70%;
            display: flex;
        }
        .alumni-list {
            flex: 3;
            padding: 20px;
            align: center;
        }
        .sidebar {
            flex: 2;
            padding: 20px;
        }
        .alumni-box{
             display: flex; /* Added to align image and text */
            align-items: center; /*Added to align image and text vertically*/
            background-color: #E7ECE8;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            padding: 10px;
        }
        .sidebar-box {
            background-color: #E7ECE8;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            padding: 10px;
           
        }
        .alumni-item {
            display: flex;
            align-items: center;
            background-color: #004400;
            color: white;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            flex-grow: 1; /* Ensures text takes available space */
        }
        .alumni-box img {
            border-radius: 50%;
            margin-right: 20px;
            height: 50px;
            width: 50px; /* Ensures images are the same size */
        }
        .friend-item {
            display: flex;
            align-items: center;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }
        .friend-item img {
            border-radius: 50%;
            margin-right: 20px;
            height: 50px;
            width: 50px; /* Ensures images are the same size */
        }
        .horizontal-line {
            width: 100%; 
            height: 2px; 
            background-color: black; 
            margin: 20px 0; 
        }
        .friends-text {
            text-align: center;
            color: #015C20;
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
    <div class="search-bar">
        <input type="text" placeholder="Search">
    </div>
    <div class="main-content">
        <div class="content-box">
            <div class="alumni-list">
                <div class="alumni-box">
                    <img src="{{ asset('images/Profile1.jpg') }}" alt="Profile1">
                    <div class="alumni-item">
                        <span>Jane Doe<br>Graduated in 2021</span>
                    </div>
                </div>
                <div class="alumni-box">
                    <img src="{{ asset('images/Profile2.jpg') }}" alt="Profile2">
                    <div class="alumni-item">
                        <span>Emily Smith<br>Graduated in 2020</span>
                    </div>
                </div>
                <div class="alumni-box">
                    <img src="{{ asset('images/Profile3.jpg') }}" alt="Profile3">
                    <div class="alumni-item">
                        <span>David Johnson<br>Graduated in 2019</span>
                    </div>
                </div>
                <div class="alumni-box">
                    <img src="{{ asset('images/Profile4.jpg') }}" alt="Profile4">
                    <div class="alumni-item">
                        <span>Emma Thompson<br>Graduated in 2021</span>
                    </div>
                </div>
                <div class="alumni-box">
                    <img src="{{ asset('images/Profile12.jpg') }}" alt="Profile1">
                    <div class="alumni-item">
                        <span>Sarah Brown <br>Graduated in 2015</span>
                    </div>
                </div>
                <div class="alumni-box">
                    <img src="{{ asset('images/Profile10.jpg') }}" alt="Profile1">
                    <div class="alumni-item">
                        <span>Alexander Hernandez<br>Graduated in 2017</span>
                    </div>
                </div>
            </div>
        </div>
        <aside class="sidebar">
            <div class="sidebar-box">
                <div class="friends-text">
                    <h3>Friends</h3>
                </div>
                <div class="horizontal-line"></div>
                <div class="friend-item">
                    <img src="{{ asset('images/Profile5.jpg') }}" alt="Profile5">
                    <span>Sophia Miller</span>
                </div>
                <div class="friend-item">
                    <img src="{{ asset('images/Profile6.jpg') }}" alt="Profile6">
                    <span>Ethan Clark</span>
                </div>
                <div class="friend-item">
                    <img src="{{ asset('images/Profile7.jpg') }}" alt="Profile7">
                    <span>Alexander Lee</span>
                </div>
                <div class="friend-item">
                    <img src="{{ asset('images/Profile8.jpg') }}" alt="Profile8">
                    <span>Grace Walker</span>
                </div>
                <div class="friend-item">
                    <img src="{{ asset('images/Profile9.jpg') }}" alt="Profile8">
                    <span>Ethan Martinez </span>
                </div>
                <div class="friend-item">
                    <img src="{{ asset('images/Profile11.jpg') }}" alt="Profile8">
                    <span>Grace Robinson </span>
                </div>
            </div>
        </aside>
    </div>
</body>
</html>
