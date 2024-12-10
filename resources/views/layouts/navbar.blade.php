<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ config('app.name') }}</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.PNG')}}" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script src="{{asset('js/scripts.js')}}"></script>
    </head>
    <body style="display: flex; flex-direction: column; min-height: 100vh;">

        <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
            <symbol id="whatsapp" viewBox="0 0 50 50">
                <!-- SVG content -->
            </symbol>
            <symbol id="instagram" viewBox="0 0 24 24">
                <!-- SVG content -->
            </symbol>
            <symbol id="youtube" viewBox="0 0 50 50">
                <!-- SVG content -->
            </symbol>
            <symbol id="tiktok" viewBox="0 0 50 50">
                <!-- SVG content -->
            </symbol>
        </svg>

        {{-- <nav class="navbar fixed-top navbar-expand-lg navbar-light" id="main-navbar">
            <div class="container-fluid">
                    <a class="navbar-brand ml-3" href="#"><img src="{{ url('assets/img/logoipsum-332.svg') }}" alt="Image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="navbar-toggler">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">UAC Doctors <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">UAC Products</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Treatments
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Your Journey</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">UAC Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact US</a>
                        </li>
                    </ul>
                </div>

            </div>

        </nav> --}}

        <nav class="navbar navbar-expand-md  fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand ml-3" href="{{route('home')}}"><img src="{{asset('assets/Logo PNG (2).PNG')}}" alt="Image" style="width: 100px; height: auto;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Unicare</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('product')}}">UAC Products</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Treatment
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{route('facial')}}">Facial Treatment</a></li>
                              <li><a class="dropdown-item" href="{{route('hairRemoval')}}">Hair Removal</a></li>
                              <li><a class="dropdown-item" href="{{route('infuseBrightening')}}">Infuse Brightening</a></li>
                              <li><a class="dropdown-item" href="{{route('fnbContouring')}}">Face & Body Contouring</a></li>
                              <li><a class="dropdown-item" href="{{route('skinBooster')}}">Skin Booster</a></li>
                              <li><a class="dropdown-item" href="{{route('healthWellness')}}">Health & Wellness</a></li>
                              <li>
                              </li>
                            </ul>
                          </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('career')}}">UAC Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </nav>

        {{-- <div class="container-fluid content-container " > --}}
            @yield('content')
        {{-- </div> --}}


        <footer class="flex-wrap justify-content-between align-items-center py-4 border-top mx" style="z-index: 0; position: relative;">

                <div class="row d-flex mx-md-4 align-items-stretch">

                    <div class="footer-content col-sm-12 col-md-4 d-flex align-items-center justify-content-center">
                            <a href="/" class="mb-3  mb-md-0 text-body-secondary text-decoration-none lh-1">
                                <img src="{{ asset('assets/Logo PNG (2).PNG') }}" alt="Image" style="width: 200px; height: auto;" >
                            </a>
                    </div>

                    <div class="footer-content footer-slogan-container col-sm-12 col-md-4 d-flex align-items-center justify-content-center text-center ">
                        {{-- <h2 class="uac-text" style="white-space: nowrap; font-size: 2em;">Be the <span class="fw-bolder">Best Version</span> of You</h2> --}}
                        <p class="footer-slogan uac-text"> Be the <span class="fw-bolder">Best Version</span> of You</p>
                    </div>

                    <div class="footer-content col-sm-12 col-md-4 ">

                        <h5 class="connect-text text-center">
                            Connect With Us
                        </h5>
                        <ul class=" justify-content-center list-unstyled d-flex">
                            <li class="mx-2">
                                <a class="text-body-secondary footer-icon-container" href="https://www.instagram.com/unicareaesthetic/">
                                    <img src="{{ url('assets/instagram.svg') }}" alt="" class="footer-icon">
                                </a>
                            </li>
                            <li class="mx-2">
                                <a class="text-body-secondary footer-icon-container" href="http://www.tiktok.com/@unicareaesthetic">
                                    <img src="{{ url('assets/tik-tok.svg') }}" alt="" class="footer-icon">
                                </a>
                            </li>
                            <li class="mx-2">
                                <a class="text-body-secondary footer-icon-container" href="https://www.youtube.com/@unicareaestheticclinic7102">
                                    <img src="{{ url('assets/youtube.svg') }}" alt="" class="footer-icon">
                                </a>
                            </li>
                            <li class="mx-2">
                                <a class="text-body-secondary footer-icon-container" href="http://wa.me/6285173155211">
                                    <img src="{{ url('assets/whatsapp.svg') }}" alt="" class="footer-icon">
                                </a>
                            </li>
                        </ul>


                    </div>

                </div>

        </footer>


        </div>

        </body>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <script>
            $(function (){
                $(window).scroll(function(){
                    if ($(window).scrollTop() <= 40){
                        $('.navbar').removeClass('scroll_navbar')
                    }else{
                        $('.navbar').addClass('scroll_navbar')
                    }
                })
            })


            $(document).ready(function() {
                $('#navbar-toggler').click(function() {
                    $('#main-navbar').toggleClass('navbar-colored');
                });
            });

        </script>

    </html>
