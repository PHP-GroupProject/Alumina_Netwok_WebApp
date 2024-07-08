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
        .dis {
            margin-left: 200px;
            margin-right: 200px;
            line-height: 1.6; 
            text-align: justify;
            flex: 1;
            
        }
        .img1 {
            display: flex;
            flex: 1; 
            gap: 10px; 
            margin-top: 20px; 
        }
        .color-box {
            background-color: #1D442A;
            padding: 100px; 
            margin-top: 20px; 
        }
        .image-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start; 
            margin-top: 20px; 
        }
        .image-container div {
            width: 23%; 
            text-align: center; 
            color: white; 
        }
        .image-container img {
            max-width: 100%; 
            height: auto;
            display: block;
            margin: 0 auto;
        }
        .image-container p {
            margin-top: 10px; 
        }
        .dis2 {
            margin-left: 200px;
            margin-right: 200px;
            line-height: 1.6;
            text-align: justify;
            margin-top: 20px;
        }
        .dis2 h2 {
            text-align: center;
            color: #063D19;
        }
        
        .con {
            display: flex;
            justify-content: space-between; 
            align-items: center; 
            padding: 10px; 
            margin-left:200px;
            margin-right:500px;
            font-size:12px;
        }
        .con button {
            padding: 8px 20px; 
            font-size: 16px; 
            border: none; 
            cursor: pointer; 
            border-radius:10px;
            font-size:12px;
            background-color:#1D442A;
            color:white;
        }
        .con button:first-child {
            background-color: #1D442A; 
            color: white; 
        }
        .line{
            margin-left:200px;
            margin-right:200px;
        }
        .profile {
            display: flex;
            justify-content: center; /* Center the images container horizontally */
            margin-top: 20px; /* Add margin top for spacing */
            justify-content: space-between;
            margin-left:200px;
            margin-right:200px;
        }
        .profile .ex1, .profile .ex2 {
            margin: 0 10px; 
            display: block;
        }
        .profile .ex1 img, .profile .ex2 img {
            width: 100%; 
            height: auto; }
        .outer {
            display: flex;
            display
            align-items: center;
            display: block;
        
        }
        date {
            white-space: nowrap; /* Prevent date from wrapping */
            margin-right: 5px; /* Add space between date and text */
            margin-bottem:10px;
            line-height: 1.6;
            margin-top:10 px;
            
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
    
    <div class="col-md-6">
        <img src="{{ asset('images/sevent.png') }}" style="width: 100%; height: 500px;">
    </div>
    <div class="outer">
    <div class="date">
        08.08.2021-------6.00pm
    </div>
    <div class="dis">
        
Seamlessly syndicate cutting-edge architectures rather than collaborative collaboration and idea-sharing. Proactively incubate visionary interfaces whereas premium benefits. Seamlessly negotiate ubiquitous leadership skills rather than parallel ideas. Dramatically visualize superior interfaces for best-of-breed alignments. Synergistically formulate performance based users through customized relationships. Interactively deliver cross-platform ROI via granular systems. Intrinsicly enhance effective initiatives vis-a-vis orthogonal outsourcing. Rapidiously monetize market-driven opportunities with multifunctional users. Collaboratively enhance visionary opportunities through revolutionary schemas. Progressively network just in time customer service without real-time scenarios.
        <br><br>
        Synergistically drive e-business leadership with unique synergy. Compellingly seize market positioning ROI and bricks-and-clicks e-markets. Proactively myocardinate timely platforms through distributed ideas. Professionally optimize enabled core competencies for leading-edge sources. Professionally enhance stand-alone leadership with innovative synergy. Rapidiously generate backend experiences vis-a-vis long-term high-impact relationships.
    
    
    <div class="img1">
        <img src="{{ asset('images/sevent2.png') }}" style="width: 50%; height: 300px;">
        <img src="{{ asset('images/sevent3.png') }}" style="width: 50%; height: 300px;">
    </div>
    
    </div>
        
        </div>


    
    <div class="dis2">
        Efficiently empower seamless meta-services with impactful opportunities. Distinctively transition virtual outsourcing with focused e-tailers.
        <h2>“Monotonectally seize superior mindshare rather than efficient technology.”</h2>
        Compellingly enhance seamless resources through competitive content. Continually actualize 24/365 alignments for resource-leveling platforms. Energistically enhance high standards in models and professional expertise. Intrinsicly iterate extensible metrics for prospective opportunities. Continually develop leading-edge experiences through quality e-services.

    </div>
    <div class="con">

    <button>WORKSHOP</button>
    <button>WORKSHOP</button>
    <button>WORKSHOP</button>
</div>
<div class="line">
<img src="{{ asset('images/sevent11.png') }}" style="width: 100%; height: 3px;">
    </div>
    <div class="profile">
        
            <div class='ex1'>
<img src="{{ asset('images/sevent13.png') }}" style="width: 60%; height: 80px;">
<h6>By Jennifer Lawrence<br>
Thinker & Designer</h6>
</div>
<div class='ex2'>
<img src="{{ asset('images/sevent14.png') }}" style="width: 60%; height: 20px;"></div>
    
    </div>
    <div class="color-box">
        <div class="image-container">
            <div>
                <img src="{{ asset('images/sevent6.png') }}" alt="Image 1">
                <p>
                    08.08.2021<br>
                    Things to know before visiting Cave in Germany<br>
                   <h6> Progressively incentivize cooperative systems through technically sound functionalities.<br>
                    Credibly productivate seamless data with flexible schemas.</h6>
                </p>
            </div>
            <div>
                <img src="{{ asset('images/sevent7.png') }}" alt="Image 2">
                <p>
                    08.08.2021<br>
                    Nina Smith vibrant work collab with Nike Dunk<br>
                  <h6>progressively incentivize cooperative systems through
technically sound functionalities. Credibly productivate
seamless data with flexible schemas.</h6>
                </p>
            </div>
            <div>
                <img src="{{ asset('images/sevent8.png') }}" alt="Image 3">
                <p>
                    08.08.2021<br>
                    Richard Norton photorealistic
rendering as real photos
<h6>
Progressively incentivize cooperative systems through
technically sound functionalities. Credibly productivate
seamless data with flexible schemas.
</h6>
                </p>
            </div>
            <div>
                <img src="{{ asset('images/sevent9.png') }}" alt="Image 4">
                <p>
                    08.08.2021<br>
                    25 quality collectors toys inspired
                    by famous films
                    <h6>
                    Progressively incentivize cooperative systems through
technically sound functionalities. Credibly productivate
seamless data with flexible schemas.
                    </h6>
                </p>
            </div>
        </div>
    </div>
    
</body>
</html>
