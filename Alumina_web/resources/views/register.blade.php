<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

        .gradient-custom-2 {
            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
        }

        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }

        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;
            }
        }

        .form-outline {
            margin-bottom: 1.5rem;
        }

        .form-outline label {
            font-weight: bold;
        }

        .form-outline input[type="text"],
        .form-outline input[type="email"] {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            padding: 0.375rem 0.75rem;
        }

        .btn-custom {
            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
            color: white;
            border: none;
        }

        .btn-custom:hover {
            background: linear-gradient(to right, #d8363a, #dd3675, #b44593, #ee7724);
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
        <a href="{{ route('login') }}">
            <button class="login">Login</button>
        </a>
    </header>

    <section class="h-100 gradient-form" style="background-color:  #ffffff ;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="{{ asset('images/logo.png') }}" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">We are The Link Plus Team</h4>
                                    </div>
                                    <div class="mt-5">

                                        @if ($errors->any())

                                        <div class="col-12">

                                            @foreach ($errors->all() as $error)

                                            <div class="alert alert-danger">{{$error}}</div>

                                            @endforeach

                                        </div>

                                        @endif
                                        @if(session()->has('error'))

                                        <div class="alert alert-danger">{{session('error')}}</div>

                                        @endif

                                        @if(session()->has('success'))

                                        <div class="alert alert-success">{{session('success')}}</div>

                                        @endif
                                    </div>
                                    <form action="{{ route('register.post') }}" method="post">
                                        @csrf
                                        <p>Please register as a student</p>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="firstName">User Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Enter a valid Username" />
                                        </div>




                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="email">Email ID</label>
                                            <input type="email" class="form-control" name="email" placeholder="Enter an email address" />
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="pincode">Password</label>
                                            <input type="text" id="password" name="password" class="form-control" />
                                        </div>





                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-custom btn-block fa-lg mb-3" type="submit">Register</button>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Alreday have an account?</p>
                                            <a href="{{ route('login') }}">
                                                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger">Login here</button>
                                            </a>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We are more than just a company</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>

</html>