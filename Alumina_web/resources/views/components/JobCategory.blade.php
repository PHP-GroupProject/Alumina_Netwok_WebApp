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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-R+u6N6EJN2RcO0aG0RgF9TZhH/gxV8qMVO+SlWHlH4T6Vo+8eyDXNjG30hFX3P9P2F9I5EB5iHJCH6lBRn4Kmw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
  

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
            background-color: #2bc826  ;
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


    </style>
</head>

<body>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>
