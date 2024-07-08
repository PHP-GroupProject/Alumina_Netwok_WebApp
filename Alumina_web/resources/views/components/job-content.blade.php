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

        .HeroSection {
            text-align: center;
            margin-top:100px;
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

        .scroll-left-button {
            left: 20px;
            padding: 10px;
        }

        .scroll-right-button {
            right: 20px;
            padding: 10px;
        }

        .Jobcontainer {
            margin-top: 5px;
            padding: 40px 60px;
            margin-left: 10px;
            padding-bottom: 80px;
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
            padding: 12px 24px;
            border-radius: 25px;
            background-color: #343A40;
            color: white;
            border: none;
            transition: background-color 0.3s, color 0.3s;
        }

        #view-more-btn:hover {
            background-color: #212529;
            color: #FFFFFF;
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

    <div class="Jobcontainer">
        <div class="d-flex justify-content-between align-items-center my-4">
            <h1>Our Featured Jobs</h1>
            <button class="btn btn-outline-secondary">
                <i class="bi bi-funnel"></i> Filter
            </button>
        </div>
        <div class="row row-cols-1 row-cols-md-2" id="job-list">
            <!-- Jobs will be dynamically inserted here -->
        </div>
        <div class="text-center my-4">
            <button class="btn btn-dark" id="view-more-btn">View More</button>
        </div>
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

        document.addEventListener('DOMContentLoaded', function () {
            const jobList = document.getElementById('job-list');
            const viewMoreBtn = document.getElementById('view-more-btn');
            const jobs = [
                {
                    title: "Product Manager",
                    companyLogo: "{{ asset('images/Logos/ggl.png') }}",
                    type: "Full Time",
                    location: "Colombo 03, LK",
                    category: "Marketing",
                    site: "Acentura Inc.",
                },
                {
                    title: "Product Designer",
                    companyLogo: "{{ asset('images/Logos/ggl.png') }}",
                    type: "Full Time",
                    location: "Colombo, LK",
                    category: "Designer",
                    site: "John Keels IT",
                },
                {
                    title: "Software Engineer",
                    companyLogo: "{{ asset('images/Logos/ggl.png') }}",
                    type: "Full Time",
                    location: "Trace, Colombo 10, LK",
                    category: "Developer",
                    site: "LSEG (PVT) Ltd.",
                },
                {
                    title: "Customer Support",
                    companyLogo: "{{ asset('images/Logos/ggl.png') }}",
                    type: "Part Time",
                    location: "Coooperative Office, LK",
                    category: "Support",
                    site: "Dialog Axiata",
                },
                {
                    title: "Recruiting Coordinator",
                    companyLogo: "{{ asset('images/Logos/ggl.png') }}",
                    type: "Part Time",
                    location: "Panadura, LK",
                    category: "Customer Service",
                    site: "MAS Intimates",
                },
                {
                    title: "UI / UX Designer",
                    companyLogo: "{{ asset('images/Logos/ggl.png') }}",
                    type: "F Time",
                    location: "Colombo, LK",
                    category: "Designer",
                    site: "Creative Software",
                },
                {
                    title: "Marketing Specialist",
                    companyLogo: "{{ asset('images/Logos/ggl.png') }}",
                    type: "Full Time",
                    location: "Nugegoda, LK",
                    category: "Marketing",
                    site: "EAM Maliban Group",
                },
                {
                    title: "Data Analyst",
                    companyLogo: "{{ asset('images/Logos/ggl.png') }}",
                    type: "Full Time",
                    location: "Katunayake, LK",
                    category: "Data",
                    site: "HNB Assuarance PLC",
                }
            ];

            function createJobCard(job) {
                return `
                    <div class="col mb-4">
                        <div class="job-card">
                            <div class="job-details">
                                <span>${job.type}</span>
                                <span>${job.category}</span>
                            </div>
                            <img src="${job.companyLogo}" alt="${job.title}">
                            <h5>${job.title}</h5>
                            <div class="job-site">
                                <span>${job.site}</span>
                                <span>${job.location}</span>
                            </div>
                            <button class="apply-btn">Apply Now</button>
                        </div>
                    </div>
                `;
            }

            function loadJobs(showAll = false) {
                jobList.innerHTML = '';
                const jobSubset = showAll ? jobs : jobs.slice(0, 6);
                jobSubset.forEach(job => {
                    jobList.innerHTML += createJobCard(job);
                });
                if (showAll) {
                    viewMoreBtn.style.display = 'none';
                }
            }

            loadJobs();

            viewMoreBtn.addEventListener('click', function () {
                loadJobs(true);
            });
        });
    </script>
</body>

</html>
