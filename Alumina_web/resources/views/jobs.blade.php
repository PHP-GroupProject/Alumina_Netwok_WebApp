<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Network</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">

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
        }

        .Herocontent {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .bulb-logo {
            width: 200px;
            /* Increased size */
            height: auto;
            margin-left: 100px;
            margin-top: 100px;
            margin-right: 20px;
            /* Added space between image and text */
        }

        .text-content h1 {
            font-size: 80px;
            color: #282828;
            margin: 0;
        }

        .text-content .highlight {
            color: #1D442A;
        }

        .text-content {
            margin-left: 200px;
            font-size: 66px;
            align-items: flex-start;
            margin-top: 100px;
        }

        .text-content p {
            font-size: 16px;
            color: #515151;
        }

        .search-container {
            display: flex;
            margin-Top: 50px;
            margin-left: 100px;
            /* justify-content: center; */
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


        .category-section {
            background-color: #F1F1F1;
            margin-top: 40px;
            padding: 40px 0px;
            padding-bottom: 80px;
            text-align: center;
            position: relative;
        }

        .category-title {
            font-size: 45px;
            padding-top: 20px;
            font-weight: 800px;
            margin-bottom: 40px;
        }

        .categories-container {
            overflow-x: hidden;
        }

        .categories {
            display: flex;
            gap: 50px;
            padding: 10px;
            width: 80%;
            margin: auto;
            overflow-x: auto;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .categories::-webkit-scrollbar {
            display: none;
        }

        .category-card {
            flex: 0 0 auto;
            width: 200px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
            transition: transform 0.3s ease, background-color 0.3s ease, color 0.3s ease;
            cursor: pointer;
        }

        .category-card:hover {
            transform: translateY(-10px);
            background-color: #1D442A;
            color: white;
        }

        .category-card:hover .category-name {
            color: white;
        }

        .category-card:hover .category-icon {
            color: white;
        }

        .category-icon {
            font-size: 50px;
            margin-bottom: 15px;
            color: #1D442A;
        }

        .category-name {
            font-size: 18px;
            font-weight: 600;
            color: #282828;
        }

        .category-active {
            background-color: #1D442A;
            color: white;
        }

        .category-active .category-icon,
        .category-active .category-name {
            color: white;
        }

        .scroll-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(255, 255, 255, 0.8);
            padding: 5px;
            border: none;
            cursor: pointer;
            z-index: 1;
            border-radius: 50%;
            /* Rounded shape */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .scroll-left-button {
            left: 5px;
            padding: 10px;
        }

        .scroll-right-button {
            right: 5px;
            padding: 10px;
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


    <div class="category-section">
        <h2 class="category-title">Our Categories</h2>
        <div class="categories-container">
            <div class="categories">
                <div class="category-card">
                    <i class="bi bi-laptop category-icon"></i>
                    <div class="category-name">Web Design</div>
                </div>
                <div class="category-card">
                    <i class="bi bi-code-slash category-icon"></i>
                    <div class="category-name">Web Development</div>
                </div>
                <div class="category-card">
                    <i class="bi bi-megaphone category-icon"></i>
                    <div class="category-name">Marketing</div>
                </div>
                <div class="category-card">
                    <i class="bi bi-file-earmark-text category-icon"></i>
                    <div class="category-name">Data Entry</div>
                </div>
                <div class="category-card">
                    <i class="bi bi-cpu category-icon"></i>
                    <div class="category-name">Software Engineer</div>
                </div>
                <div class="category-card">
                    <i class="bi bi-palette category-icon"></i>
                    <div class="category-name">Graphic Design</div>
                </div>
            </div>
        </div>
        <button class="scroll-left-button scroll-button" onclick="scrollCategories('left')">
            <i class="bi bi-chevron-left"></i>
        </button>
        <button class="scroll-right-button scroll-button" onclick="scrollCategories('right')">
            <i class="bi bi-chevron-right"></i>
        </button>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function scrollCategories(direction) {
            const container = document.querySelector('.categories');
            const scrollStep = 220;
            if (direction === 'left') {
                container.scrollBy({
                    left: -scrollStep,
                    behavior: 'smooth'
                });
            } else if (direction === 'right') {
                container.scrollBy({
                    left: scrollStep,
                    behavior: 'smooth'
                });
            }
        }
    </script>
</body>
</body>

</html>