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

        .ApplyForm {

            border-right: 1px solid grey;
            border-left: 1px solid grey;
            border-bottom: 1px solid grey;
            margin-top: 60px;
            border-top-right-radius: 40px;
            border-top-left-radius: 40px;
            margin-left: 20px;
            margin-right: 20px;
            box-shadow: 0px 10px 10px -5px rgba(0, 0, 0, 0.1);

            background-color: white;
        }

        .hero-section {



            color: white;
            width: 100%;
            text-align: center;
            margin-bottom: 5px;

            position: relative;

        }

        .hero-sectionCover img {
            width: 100%;
            background-size: cover;
            border-top-right-radius: 40px;
            border-top-left-radius: 40px;

        }

        .hero-section .logo {
            width: 100px;
            height: 100px;
            background-color: #007bff;
            border-radius: 50%;
            display: inline-block;
            margin-bottom: 20px;
            margin-left: 100px;
            overflow: hidden;
        }


        .hero-section .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-section h1 {
            font-size: 48px;
            margin: 0;
        }

        .hero-section p {
            font-size: 24px;
        }

        .tags {
            margin-top: 20px;
        }

        .tags .btn {
            margin: 0 5px;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: -60px auto 0;
            max-width: 800px;
        }

        .form-title {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .upload-section {
            border: 2px dashed #007bff;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
            cursor: pointer;
        }

        .upload-section.dragging {
            background-color: #e9ecef;
        }

        .upload-section input[type="file"] {
            display: none;
        }

        .upload-list {
            margin-top: 20px;
        }

        .upload-list li {
            list-style: none;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .upload-list li .remove-btn {
            background: none;
            border: none;
            color: red;
            cursor: pointer;
        }

        .form-control,
        .form-select {
            margin-bottom: 15px;
        }

        .submit-btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }

        .TitleContainer {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
            margin-left: 100px;
            transform: translateY(-180px);

        }

        .tagT {
            margin-top: 0px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-left: 20px;

        }

        .logoTitle {
            background-image: url('../../public/images/Logos/JKIT.jpg');
            border-radius: 50%;
            width: 300px;
            height: 300px;
            border: 2px solid gray;
            display: flex;
            background-size: cover;
            justify-content: center;
            background-position: center;
            align-items: center;
            margin-bottom: 10px;
            margin-top: 10px;

        }

        .logoTitle img {
            width: 300px;
            height: 300px;
            margin-top: 5px;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }

        .logoTitle span {
            color: black;
            font-size: 24px;
            font-weight: bold;
        }

        .headerJob {
            font-size: 78px;
            font-weight: bold;
            margin-left: 10px;

            text-align: left;
        }

        .subJob {
            font-size: 36px;
            color: #555;
            margin-left: 10px;
            margin-top: -20px;
            color: #e4e4e4;
            text-align: left;
        }

        .buttonsTags {
            margin-top: 50px;
            display: flex;
            gap: 10px;
            margin-left: 15px;

        }

        .buttonTag {
            background-color: #4CAF50;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        .buttonTagH {
            background-color: white;
            color: gray;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }




        .Formcontainer {
            margin-top: 5px;

            padding: 20px 40px;
        }

        .input-tab-green input {
            border-color: green;
        }

        .input-tab-green input:focus {
            border-color: green;
            box-shadow: 0 0 5px green;
        }

        .success-message {
            display: none;
            margin-top: 10px;
        }

        .upload-section {
            border: 2px dashed #ccc;
            padding: 20px;
            height: 300px;

            text-align: center;
            cursor: pointer;
            position: relative;
            transition: background-color 0.3s ease;
        }

        .upload-section input[type="file"] {
            display: none;
        }

        .upload-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            color: #4CAF50;
            transform: translate(-50%, -50%);
            font-size: 250px;
            font-weight: 500px;
        }

        .upload-list li {
            list-style: none;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .upload-list li .remove-btn {
            background: none;
            border: none;
            color: red;
            cursor: pointer;
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

    @include('components.HeroSection')


    <div class="ApplyForm">
        <div class="hero-section">
            <div class="hero-sectionCover">
                <img src="{{ asset('images/FormCover.png') }}" alt="Logo">

            </div>

            <div class="TitleContainer">
                <div class="logoTitle">
                    <img src="{{ asset('images/Logos/JKIT.jpg') }}" alt="Logo">

                </div>
                <div class="tagT">
                    <div class="tag2">
                        <div class="headerJob">Web Developer</div>
                        <div class="subJob">John Keels IT, Colombo 02</div>
                    </div>

                    <div class="buttonsTags">
                        <button class="buttonTag">Remote</button>
                        <button class="buttonTag">Entry Level</button>
                        <button class="buttonTag">Full Stack</button>
                        <button class="buttonTagH">Posted 24h ago</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="Formcontainer">

            <form id="applicationForm">
                <div class="row">
                <div class="col-md-6">
    <h4>Upload Resume</h4>
    <div class="upload-section" onclick="document.getElementById('fileUpload').click()">
        <i class="fa fa-cloud-upload" style="font-size: 180px;"></i>
        <p>Drag &amp; Drop your file here or click to browse</p>
        <input type="file" id="fileUpload" onchange="displayFileName()">
    </div>
   
    <button type="button" class="btn btn-primary mt-3" onclick="uploadFile()">Upload Files</button>
</div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fullName">Full Name</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
                        </div>
                        <div class="form-group">
                            <label for="residence">Residence</label>
                            <input type="text" class="form-control" id="residence" placeholder="Enter your residence" required>
                        </div>
                        <div class="form-group">
                            <label>Birthdate</label>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Year" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Month" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Day" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="linkedin">LinkedIn</label>
                            <input type="text" class="form-control" id="linkedin" placeholder="Enter your LinkedIn URL">
                        </div>
                        <div class="form-group">
                            <label for="experience">Experience</label>
                            <input type="text" class="form-control" id="experience" placeholder="Enter your experience">
                        </div>
                        <div class="form-group">
                            <label for="positionDate">Position Available Date</label>
                            <input type="date" class="form-control" id="positionDate" required>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                            </div>
                            <div class="col">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="agreement" required>
                                <label class="form-check-label" for="agreement">I agree to the terms and conditions</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Send Application</button>
                        <div class="alert alert-success success-message" role="alert">
                            Application submitted successfully!
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('applicationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            document.querySelector('.success-message').style.display = 'block';
        });

        function displayFileName() {
            const input = document.getElementById('fileUpload');
            const fileList = document.getElementById('fileList');
            fileList.innerHTML = '';
            for (let i = 0; i < input.files.length; i++) {
                const li = document.createElement('li');
                li.textContent = input.files[i].name;
                fileList.appendChild(li);
            }
        }

        function uploadFile() {
            alert('Files uploaded successfully!');
        }
    </script>
</body>

</html>