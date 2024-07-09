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

        .HeroSection {
            text-align: center;
            margin-top: 100px;
        }

        .Herocontent {
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

        .search-container {
            display: flex;
            margin-top: 50px;
            margin-left: 100px;
            align-items: flex-start;
        }

        .search-bar {
            display: flex;
            align-items: center;
            background: white;
            box-shadow: 0px 0px 30px 2px rgba(0, 0, 0, 0.08);
            border-radius: 50px;
            padding: 10px;
            width: 700px;
            height: 50px;
        }

        .search-bar input {
            flex-grow: 1;
            border: none;
            outline: none;
            font-size: 16px;
            color: #515151;
            padding-left: 20px;
            border-radius: 50px 0 0 50px;
        }

        .search-bar button {
            background: #1D442A;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 0 30px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            height: 150%;
        }

        .search-bar .search-icon {
            font-size: 20px;
            color: #dbdbdb;
            margin-right: 10px;
            margin-left: 20px;
        }


    </style>
</head>

<body>
  
    <div class="HeroSection">
   
        <div class="Herocontent">
            <img src="{{ asset('images/BulbLogo.png') }}" alt="Bulb Logo" class="bulb-logo">
            <div class="text-content">
                <h1>Get your <span class="highlight">dream</span> job<br>with Link Plus.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod sed do eiusmod</p>
            </div>
        </div>
        <div class="search-container">
            <div class="search-bar">
                <span class="search-icon">
                    <i class="fa fa-search"></i>
                </span>
                <input type="text" placeholder="Job Title, keywords......">
                <button>Search</button>
            </div>
        </div>
    </div>

 
  
</body>

</html>