<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Nunito:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <title>Pizza</title>

</head>

<body class="">



    <nav class="navbar navbar-expand-lg sticky-top bg-light " style="border: 1px solid #20202044">
        <div class="container">
            <a class="navbar-brand" href="#">PIZZA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link p-2 p-lg-3 " aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    @can('see_dashboard')
                        <li class="nav-item">
                            <a class="nav-link p-2 p-lg-3 " aria-current="page"
                                href="{{ route('dashboard') }}">DashBoard</a>
                        </li>
                    @endcan



                    <li class="nav-item">
                        <a class="nav-link p-2 p-lg-3" href="{{ route('home') }}#gallery">Gallery</a>
                    </li>

                    @guest

                        <li class="nav-item">
                            <a class="nav-link p-2 p-lg-3" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2 p-lg-3" href="{{ route('register') }}">Register</a>
                        </li>
                    @endguest

                    @auth
                        <li class="nav-item">
                            <a class="nav-link p-2 p-lg-3"
                                href="{{ route('users.profile.orders', auth()->user()) }}">Orders</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link p-2 p-lg-3 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->firstname . ' ' . auth()->user()->lastname }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item p-2 p-lg-3"
                                        href="{{ route('users.profile', auth()->user()) }}">Profile</a></li>
                                <li><a class="dropdown-item p-2 p-lg-3" href="{{ route('logout') }}">Logout</a></li>

                            </ul>
                        </li>
                    @endauth

                </ul>
                <div class="search px-3 d-none d-lg-block">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </div>
    </nav>
    <!-- end nav -->


    @yield('content')


    <!-- start footer -->
    <footer id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <p class="text-center">Copyright &copy; 2084 Pizza</p>
                    <hr>
                    <ul class="d-flex justify-content-between  col-4 offset-4 list-unstyled">
                        <li><a href="#"><i class="fa-brands fa-facebook fs-4 text-black "></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram fs-4 text-black"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter fs-4 text-black"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/all.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
