<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Network</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="{{ asset('css/filter.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-R+u6N6EJN2RcO0aG0RgF9TZhH/gxV8qMVO+SlWHlH4T6Vo+8eyDXNjG30hFX3P9P2F9I5EB5iHJCH6lBRn4Kmw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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

        .category-section {
            background-color: #F1F1F1;
            margin-top: 100px;
            padding: 40px 0px;
            padding-bottom: 80px;
            text-align: center;
            position: relative;
        }

        .category-title {
            font-size: 45px;
            padding-top: 20px;
            font-weight: bold;
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
            box-shadow: 0 4px 4px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .scroll-left-button,
        .scroll-right-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            padding: 10px;
            background-color: #2bc826;
            color: #fff;
            border: none;
            cursor: pointer;
            z-index: 1000;
            border-radius: 8px;

        }

        .scroll-left-button {
            left: 20px;
        }

        .scroll-right-button {
            right: 20px;
        }

        .mb-4 {
            border-bottom: 0px solid rgb(219, 219, 219);
        }

        .Jobcontainer {
            margin-top: 5px;
            padding: 10px 60px 60px 60px;
            margin-left: 10px;
            padding-bottom: 10px;
        }

        .Jobcontainer2 {
            margin-top: 5px;
            padding: 40px 60px;
            margin-left: 10px;
            padding-bottom: 0px;
            transform: translateY(-50px);
        }

        .job-card {
            background: linear-gradient(to right, #c0ccc3, #ccd9ce);
            border-radius: 20px;
            border: 1px solid #a3a2a2;
            padding: 30px 30px;
            margin-bottom: 20px;
            box-shadow: 0px 10px 10px -5px rgba(0, 0, 0, 0.1);
        }

        .job-card h5 {
            margin-top: 15px;
            margin-bottom: 10px;
            font-size: 30px;
            font-weight: bold;
        }

        .job-card .job-details {
            display: flex;
            color: #616060;
            gap: 10px;
            flex-direction: row;
            align-items: center;
            font-size: 15px;
        }

        .job-card .job-details span {
            background: none;
            border: 1px solid #828181;
            border-radius: 18px;
            padding: 6px 15px;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .apply-btn {
            background: none;
            padding: 10px 20px;
            border: 2px solid black;
            border-radius: 25px;
            width: 100%;
            margin-top: auto;
        }

        .apply-btn:hover {
            background: #063D19;
            color: white;
        }

        .job-card img {
            height: 60px;
            margin-top: 5px;
            border-radius: 50%;
        }

        .job-site {
            margin-top: 10px;
            margin-bottom: 20px;
            font-size: 20px;
            display: flex;
            justify-content: space-between;
        }

        #view-more-btn {
            padding: 12px 44px 12px 24px;
            border-radius: 25px;
            border: 2px solid black;
            background-color: #282828;
            color: white;
            border: none;
            display: inline-block;
            transition: background-color 0.3s, color 0.3s, border-color 0.3s;
            position: relative;
        }

        #view-more-btn:hover {
            background-color: #515151;
            color: white;
        }

        .fa-chevron-right {
            position: absolute;
            right: 20px;
            margin-left: 10px;

            top: 50%;
            transform: translateY(-50%);
            font-size: 15px;
            color: white;
        }


        .User-name {
            margin-top: 15px;
            margin-bottom: 10px;
            font-size: 30px;
            font-weight: bold;
        }

        .user-details {
            display: flex;
            color: #616060;
            gap: 10px;
            flex-direction: row;
            align-items: center;
            margin-top: 10px;
            font-size: 15px;
        }

        .user-details span {
            background: none;
            border: 1px solid #828181;
            border-radius: 18px;
            padding: 6px 15px;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .User-card {
            flex: 0 0 auto;
            width: 450px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            padding: 20px;
            transition: transform 0.3s ease, background-color 0.3s ease, color 0.3s ease;
            cursor: pointer;
        }

        .feedbacks {
            display: flex;
            gap: 50px;
            padding: 4px;
            width: 90%;
            margin: auto;
            overflow-x: auto;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .Feedback-title {
            font-size: 45px;
            padding-top: 20px;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .Feedback-section {
            background-color: #F1F1F1;
            margin-top: 0px;
            padding: 40px 0px;
            padding-bottom: 80px;
            text-align: center;
            position: relative;
        }

        .Feedback-container {
            display: flex;
            justify-content: center;
            overflow-x: hidden;
            width: 100%;
        }

        .User-card img {

            width: 60px;
            /* Adjust image width as needed */
            height: auto;
            margin-top: 5px;
            border-radius: 50%;
        }

        .checked {
            color: orange;
        }

        .User-profile {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>


    <div class="Feedback-section">
        <h2 class="Feedback-title">Feedback from our Partners</h2>
        <div class="Feedback-container">
            <div class="feedbacks">

                <div class="User-card">
                    <div class="user-details">
                        <span>Designer</span>
                    </div>
                    <div class="User-profile">
                        <img src="{{ asset('images/Logos/user-logo.png') }}">
                        <div class="User-name">Janis Reeves</div>
                    </div>
                    <div class="Starts">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="user-details">
                        Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus </div>
                </div>

                <div class="User-card">
                    <div class="user-details">
                        <span>Designer</span>
                    </div>
                    <div class="User-profile">
                        <img src="{{ asset('images/Logos/user-logo.png') }}">
                        <div class="User-name">Janis Reeves</div>
                    </div>
                    <div class="Starts">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="user-details">
                        Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus </div>
                </div>

                <div class="User-card">
                    <div class="user-details">
                        <span>Designer</span>
                    </div>
                    <div class="User-profile">
                        <img src="{{ asset('images/Logos/user-logo.png') }}">
                        <div class="User-name">Janis Reeves</div>
                    </div>
                    <div class="Starts">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="user-details">
                        Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus </div>
                </div>

                <div class="User-card">
                    <div class="user-details">
                        <span>Designer</span>
                    </div>
                    <div class="User-profile">
                        <img src="{{ asset('images/Logos/user-logo.png') }}">
                        <div class="User-name">Janis Reeves</div>
                    </div>
                    <div class="Starts">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="user-details">
                        Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus </div>
                </div>

            </div>
        </div>
        <button class="scroll-left-button scroll-button" onclick="scrollFeedbacks('left')">
            <i class="bi bi-chevron-left"></i>
        </button>
        <button class="scroll-right-button scroll-button" onclick="scrollFeedbacks('right')">
            <i class="bi bi-chevron-right"></i>
        </button>
    </div>








    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script>
 
        function scrollFeedbacks(direction) {
            const container = document.querySelector('.feedbacks');
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


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  

</body>

</html>