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

.time{
    color: gray;
    margin-left: 1260px;
    margin-top: -130px;
    margin-bottom: 110px;
}

.about{
    display: flex;
    margin: 150px;
}

.description{
    
    h1{
        font-size: 60px;
        margin-left: 50px;  
    }

    p{
        color: gray;
        margin-left: 50px;
        font-size: 25px;
    }
}

.skill{
margin-left: 80px;

h1{
    font-size: 60px;
}
li{
    font-size: 25px;
    color: gray;
   padding-left: 0;
}

}
.about2{
    display: flex;
    margin: 150px;

.recruitment{
    margin-top: -120px;

    h1{
    font-size: 60px;
    margin-top: -80px;
    margin-left: 50px;
    }

    p{
        color: gray;
        font-size: 25px;
        margin-bottom: 100px;
        margin-left: 50px;
    }
}

button{ 
    padding: 10px;
    border-radius: 20px;
    background: #063D19;
    color: #fff;
    width: 350px;
    font-size: 25px;
    height: 80px;
    cursor: pointer;
}
}

.background_main{
    background: linear-gradient(to bottom ,#94B09E, #063D19 ,#1D442A );
    width: 100%;
    border-radius: 15px;
    height: 720px;

    .title1{
        
        h1{
            font-size: 60px;
            margin-left: 50px;    
        }  
    }

    .scrollbar{
        display: flex;
        overflow-x: scroll;
    }
  
.background{
    background: white;
    width: 500px;
    margin-left:40px ;
    border-radius:20px ;
    
    img{
        width: 500px;
        margin-left: 0;
        border-radius: 20px;
    } 

.details{
    h2{
        font-size: 15px;
        color: red;
        margin-left: 120px;
    }

    .scrollbar-flex {
        display: flex;
        img{
        width: 50px;
        height: 50px;
        margin-left: 50px;
        margin-top: 20px; 
    }

    .job{
         h1{
            margin-left: 30px;   
        }

        p{
            margin-left: 30px;
            color: gray;
            margin-top: -5px;
        }
    }  

}
.margin{
    margin-left: 70px;
    cursor: pointer;

button{
    width: 120px;
    height: 40px;
    background: gainsboro;
    border-radius: 15px;
    margin-top: 15px;
    border: none;
}
    
}
h3{
    margin-left: 70px;
    margin-top: 15px;
    margin-bottom: 10px;
}

.read_more button{
    background: none;
    cursor: pointer;
    border: none;
    font-size: 20px;
    margin-left: 70px;
    margin-top: 15px;
    margin-bottom: 10px;
}
}
}
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
             <h1>Web Developer</h1>
             <p>John keels IT, Colombo 02</p>
          </div>
        </section>

        <section>
            <div class="job_level">
        
              <button type="submit">Remote</button>
              <button type="submit">Entry level</button>
              <button type="submit">Full Stack</button>
            </div>
            <div class="time">
              <p>Published 2h ago</p>
            </div>
        </section>



    <section>
          <div class="about">
              <div class="description">
                 <h1>Job Description </h1>
                  <p>We are currently looking for a web developer with 2 years experience, 
                     and can operate our product, namely web builder,
                     we will recruit candidates on a full time basis and can work from anywhere, aka WFA
                  </p>
              </div>
             <div class="skill">
                  <h1>Must Have Skills </h1>
                  <li>JavaScript</li>
                  <li>HTML</li>
                  <li>CSS</li>
                  <li>Mastering Web Builder</li>
                  <li>PHP</li>
             </div>
          </div>

        <div class="about2">
                <div class="recruitment">
                    <h1>Candidate Recruitment</h1>
                     <p>Graduated from S1 majoring in informatics
                          1 - 2 years of experience with web </br> builder
                          Mastering web builder especially webflow
                          Strong communication, design and creative skills
                          Maximum age of 35 years
                    </p>
                </div>
                <button type="submit">Apply</button>
        </div>
    </section>



        <section>

         <div class="background_main">
                <div class="title1">
                    <h1>Other Related Jobs</h1>
                </div>

            <div class="scrollbar">

            
                <div class="background">
                    <img src="{{ asset('images/Job_thumbnail.jpg') }}"/>

                    <div class="details">
                        <h2>Amazon</h2>
            
                        <div class="scrollbar-flex">
                            <img src="{{ asset('images/amazon_logo.png') }}"/>
                            <div class="job">
                                <h1>Data Analyst </h1>
                                 <p>800 000 - 1 200 000 </p>
                            </div>
                        </div>

                        <div class="margin">
                            <button type="submit">Remote</button>
                            <button type="submit">Intermediate</button>
                             <button type="submit">Full Time</button>
                        </div>

                         <div class="read_more">
                             <button type="submit">READ MORE</button>
                         </div>
                    </div>
            </div>


            <div class="background">
                    <img src="{{ asset('images/Job_thumbnail.jpg') }}"/>

                    <div class="details">
                        <h2>Amazon</h2>
            
                        <div class="scrollbar-flex">
                            <img src="{{ asset('images/amazon_logo.png') }}"/>
                            <div class="job">
                                <h1>Data Analyst </h1>
                                 <p>800 000 - 1 200 000 </p>
                            </div>
                        </div>

                        <div class="margin">
                            <button type="submit">Remote</button>
                            <button type="submit">Intermediate</button>
                             <button type="submit">Full Time</button>
                        </div>

                         <div class="read_more">
                             <button type="submit">READ MORE</button>
                         </div>
                    </div>
            </div>


            <div class="background">
                    <img src="{{ asset('images/Job_thumbnail.jpg') }}"/>

                    <div class="details">
                        <h2>Amazon</h2>
            
                        <div class="scrollbar-flex">
                            <img src="{{ asset('images/amazon_logo.png') }}"/>
                            <div class="job">
                                <h1>Data Analyst </h1>
                                 <p>800 000 - 1 200 000 </p>
                            </div>
                        </div>

                        <div class="margin">
                            <button type="submit">Remote</button>
                            <button type="submit">Intermediate</button>
                             <button type="submit">Full Time</button>
                        </div>

                         <div class="read_more">
                             <button type="submit">READ MORE</button>
                         </div>
                    </div>
            </div>


            <div class="background">
                    <img src="{{ asset('images/Job_thumbnail.jpg') }}"/>

                    <div class="details">
                        <h2>Amazon</h2>
            
                        <div class="scrollbar-flex">
                            <img src="{{ asset('images/amazon_logo.png') }}"/>
                            <div class="job">
                                <h1>Data Analyst </h1>
                                 <p>800 000 - 1 200 000 </p>
                            </div>
                        </div>

                        <div class="margin">
                            <button type="submit">Remote</button>
                            <button type="submit">Intermediate</button>
                             <button type="submit">Full Time</button>
                        </div>

                         <div class="read_more">
                             <button type="submit">READ MORE</button>
                         </div>
                    </div>
            </div>


            <div class="background">
                    <img src="{{ asset('images/Job_thumbnail.jpg') }}"/>

                    <div class="details">
                        <h2>Amazon</h2>
            
                        <div class="scrollbar-flex">
                            <img src="{{ asset('images/amazon_logo.png') }}"/>
                            <div class="job">
                                <h1>Data Analyst </h1>
                                 <p>800 000 - 1 200 000 </p>
                            </div>
                        </div>

                        <div class="margin">
                            <button type="submit">Remote</button>
                            <button type="submit">Intermediate</button>
                             <button type="submit">Full Time</button>
                        </div>

                         <div class="read_more">
                             <button type="submit">READ MORE</button>
                         </div>
                    </div>
            </div>
            
            

            

            

            


            </div>    
        
        </section>

        
    </main>
    
</body>
</html>
