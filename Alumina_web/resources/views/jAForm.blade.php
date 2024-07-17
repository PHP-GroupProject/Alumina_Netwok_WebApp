<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Network</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
     
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

main {
padding: 20px;    
}


.light{
display: flex;

img{
width: 350px;
height: 350px;
margin: 45px;
margin-left: 60px;
}

h1{
font-size: 80px;
margin: 70px;   
}
}
.form{
form {
    display: flex; 
}

form label {
    margin-top: 15px;   
}

form input {
    padding: 10px;
    margin-top: 10px;
    margin-left: 120px;
    border-radius: 40px;
    border: none;
    width: 600px;
    height: 60px;
    background: #f8f8ff ;
    font-size: 25px;
    margin-bottom: 60px;  
}

form button{
    padding: 10px;
    margin-top: 10px;
    border-radius: 40px;
    background: black;
    color: #fff;
    width: 150px;
    margin-left: -60px;
    font-size: 25px;
    margin-bottom: 60px;
    cursor: pointer;
}
}
.job_level{
    margin-left: 450px;
    button{
    padding: 10px;
    margin-top: -90px;
    border-radius: 20px;
    background: #063D19;
    color: #fff;
    width: 150px;
    font-size: 25px;
    margin-bottom: 60px;
    margin-left: 10px;
    cursor: pointer;    
    }
}
.company img{
    width: 95%;
    height: 600px;
    border-color: rgb(220,220,220);
    border-top-left-radius: 60px;
    border-top-right-radius: 60px;
    margin-left: 30px;
    margin-right: 30px;
    margin-top: 80px;
}
.logo {
    img{
    height: 300px;
    width: 300px;
    margin-left: 100px;
    margin-top: -169px;
}

h1{
    display: flex;
    font-size: 90px;
    margin-top: -280px;
    color: #f8f8ff;
    margin-left: 450px;
}
p{
    color: #f8f8ff;
    margin-top: -70px;
    margin-left: 450px;
    font-size: 25px;
}
}
.time{
    color: gray;
    margin-left: 1050px;
    margin-top: -130px;
    margin-bottom: 110px;
}

    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f9f9f9;
        }

        .container {
            display: flex;
            height: 100vh;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .uploading {
    margin-bottom: 20px;
     }
        .left-side, .right-side {
            flex: 1;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin: 0 10px;
        }
        .upload-container {
    background: #fff;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 100%;}
    .custom-file-upload {
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
    border: 2px solid #004d40;
    border-radius: 4px;
    color: #004d40;
    background-color: #e0f2f1;
    text-align: center;
    margin-bottom: 10px;
    width: 100%;
}
        .upload-section {
            text-align: center;
            width: 100%;
        }

        .upload-box {
            border: 2px dashed #ccc;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
            border-radius: 8px;
            background-color: #f0f0f0;
            width: 100%;
        }

        .upload-box p {
            margin: 10px 0;
            width: 100%;
            

        }

        .upload-box input[type="file"] {
            display: none;
        }

        .upload-box label {
            color: #0066cc;
            cursor: pointer;
            width: 100%;
        }

        .upload-box .button {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: rgb(2, 48, 32);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .uploaded-files {
            list-style: none;
            padding: 0;
        }

        .uploaded-files li {
            padding: 10px;
            background: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            position: relative;
            width: 100%;
        }

        .uploaded-files .delete {
            color: #ff0000;
            cursor: pointer;
            position: absolute;
            right: 10px;
            top: 10px;
            background-color: #f0f0f0;
            width: 100%;
        }

        .form-group {
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
        }
        .form-row {
            display: flex;
            justify-content: space-between;
        }
        .form-group label {
            margin-bottom: 5px;
        }

        .form-group input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="date"] {
            flex: 1;
        }

        .submit-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: rgb(2, 48, 32);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            width: 100%;
        }
        
        .submit-button:hover {
            background-color: #45a049;
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
        <section>
            <div class="light">
                <img src="{{ asset('images/Light.png') }}"/>
                <h1>Get your dream job<br/>with Find Jobs.</h1>
            </div>
            <div class="form">
            <form>
            
                <input type="text" name="search" placeholder="Job Title, Keywords...">
                <button type="submit">Search</button>
                
            </form>
            </div>
        </section>

        <section>
            <div class="company">
             <img src="{{ asset('images/Company.jpg') }}"/>
            </div>
            <div class="logo">
             <img src="{{ asset('images/Company_logo.png') }}"/>
             <h1>Web Developer</h1><br><br>
             <p>John keels IT, Colombo 02</p>
          </div>
        </section>

        <section>
            <div class="job_level">
        
              <button type="submit">Remote</button>
              <button type="submit">Entry level</button>
              <button type="submit">Full Stack</button>
            </div>
            <div class="time"><br>
              <p>Published 2h ago</p>
            </div>
        </section>

        </div>
            
        <div class="container">
        <div class="form-section">
            <h2>Get your dream job with Find Jobs</h2>
            
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            <div class="container">
                <!-- left -->
    <div class="left-side">
        <div class="upload-section">
            <h2>Upload Resume & Cover Letter</h2>
            <div class="upload-box">
                <input type="file" id="file-upload" multiple>
                <label for="file-upload">Drag & drop files or <span>Browse</span></label>
                <p>Supported formats: JPEG, PNG, GIF, MP4, PDF, PSD, AI, Word, PPT</p>
            </div>
            <ul class="uploaded-files" id="uploaded-files">
            <div class="upload-container">
        <form action="/upload" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="uploading">
                <label for="file-upload" class="custom-file-upload">
                    <input id="file-upload" type="file" name="files[]" multiple><br>
                    <span id="file-name">Upload Files</span>
                </label>
                <div id="progress-bar-container">
                    <div id="progress-bar"></div>
                </div>
            </div>
            <div class="uploaded">
                <div class="uploaded-file">
                    <span class="file-name">document-name.PDF</span>
                </div>
                <div class="uploaded-file">
                    <span class="file-name">image-name-goes-here.png</span>
                </div>
            </div>
            
            <button type="submit" class="submit-button">UPLOAD FILES</button>
            
        </form>
    </div>
    <script src="scripts.js"></script>
                <!-- Uploaded files will be listed here -->
            </ul>
        </div>
    </div>
    <!-- right -->
    <div class="right-side">
        <form action="{{ route('jAForm') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                    <label for="full_name">Full Name</label>
                    <input type="text" name="full_name" id="full_name" class="form-control" required>
                </div>
            <div class="form-group">
                <label for="residence">Residence</label>
                <input type="text" id="residence" name="residence" required>
            </div>
            <div class="form-row">
            <div class="form-group">
                <label for="birthdate">Birth Date</label>
                <input type="date" id="birthdate" name="birthdate" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            </div>
            <div class="form-row">
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            
            <div class="form-group">
                <label for="linkedin">LinkedIn</label>
                <input type="url" id="linkedin" name="linkedin">
            </div>
            </div>  
            <div class="form-group">
                <label for="experience">Experience</label>
                <input type="text" id="experience" name="experience">
            </div>

            <div class="form-row">
            <div class="form-group">
                <label for="position">Position Applied</label>
                <input type="text" id="position" name="position" required>
            </div>
            
            <div class="form-group">
                <label for="available-date">Available Date</label>
                <input type="date" id="available-date" name="available_date">
            </div>
            </div>
            <button type="submit" class="submit-button">Send Application</button>
        </form>
    </div>
</div>
<script>
    const fileUpload = document.getElementById('file-upload');
    const uploadedFiles = document.getElementById('uploaded-files');

    fileUpload.addEventListener('change', (event) => {
        uploadedFiles.innerHTML = '';
        Array.from(event.target.files).forEach(file => {
            const li = document.createElement('li');
            li.textContent = file.name;
            const deleteButton = document.createElement('span');
            deleteButton.textContent = 'Delete';
            deleteButton.classList.add('delete');
            deleteButton.addEventListener('click', () => {
                li.remove();
            });
            li.appendChild(deleteButton);
            uploadedFiles.appendChild(li);
        });
    });
</script>
</body>

</html>