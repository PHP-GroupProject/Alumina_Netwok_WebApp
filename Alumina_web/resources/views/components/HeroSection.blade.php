<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Network</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
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

        .HeroSection {
            text-align: center;
            margin-top: 100px;
        }

        .HeroContent {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .bulb-logo {
            width: 200px;
            height: auto;
            margin-left: 100px;
        }

        .text-content {
            margin-left: 200px;
            align-items: flex-start;
        }

        .text-content h1 {
            font-size: 80px;
            color: #282828;
            margin: 0;
        }

        .text-content .highlight {
            color: #1D442A;
        }

        .text-content p {
            font-size: 16px;
            color: #515151;
        }

        .searchbar {
            margin-bottom: auto;
            margin-top: auto;
            margin-left: 150px;
            height: 65px;
            background-color: #353b48;
            border-radius: 30px;
            padding: 10px;
            display: flex;
            align-items: center;
        }

        .searchbar form {
            display: flex;
            width: 100%;
            margin: 0;
        }

        .search_input {
            color: white;
            margin-left: 10px;
            border: 0;
            outline: 0;
            background: none;
            width: 450px;
            font-size: 17px;
            caret-color: red;
            line-height: 40px;
            transition: width 0.4s linear;
        }

        .searchbar:hover > .search_input{
    caret-color:red;
    transition: width 0.4s linear;
    }
  
   .search_icon:hover{
    background: white;
    color: #e74c3c;
    }

        .search_icon {
            height: 40px;
            width: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color: white;
            text-decoration: none;
            background: none;
            margin-left: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="HeroSection">
        <div class="HeroContent">
            <img src="{{ asset('images/BulbLogo.png') }}" alt="Bulb Logo" class="bulb-logo">
            <div class="text-content">
                <h1>Get your <span class="highlight">dream</span> job<br>with Link Plus.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod sed do eiusmod</p>
            </div>
        </div>
   
        <div class="d-flex justify-content-center h-100">
            <div class="searchbar">
                <form method="GET" action"{{url('/jobs/search')}}>
                    <input class="search_input" type="search" name="search" placeholder="Jobs, Title, Keywords">
                    <a href="#" class="search_icon" type="submit"><i class="fas fa-search" ></i></a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
