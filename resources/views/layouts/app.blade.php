<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- JAVA SCRIPTS -->
<script  src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky-sidebar.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/line-awesome@1.3.0/dist/line-awesome/css/line-awesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
<!-- Styles -->

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
{{-- <div id="app">
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
<div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
            <li><a href="{{ url('/post') }}">Add Post</a></li>
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        
                    </div>
                    
                    <div >
                    @include('subscription')
                </div>
                    
            
                </li>
                
                
            @endguest
        </ul>
    </div>
</div>
</nav>

<main class="py-4">
@yield('content')
</main>
</div> --}}


<!-- STYLES -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" media="all">
<link rel="stylesheet" href={{ asset("css/all.min.css") }} type="text/css" media="all">
<link rel="stylesheet" href="{{ asset('css/slick.css') }}" type="text/css" media="all">
<link rel="stylesheet" href="{{ asset('css/simple-line-icons.css') }}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('css/style.css')  }}" type="text/css" media="all">
<div class="site-wrapper">

	<div class="main-overlay"></div>

    <div class="container-xl">
        <!-- header -->
        <header class="header-minimal">
            
            <div class="row align-items-center">

                <div class="col-4">
                    <button class="burger-menu icon-button">
                        <span class="burger-icon"></span>
                    </button>
                </div>

                <div class="col-4 text-center">
                    <!-- site logo -->
                    <h2>BLOG</h2>
                </div>

                <div class="col-4">
                    <button class="search icon-button float-end">
                        <i class="icon-magnifier"></i>
                    </button>
                </div>

            </div>

        </header>
    </div>


<!-- section main content -->
<section class="main-content mt-5">
<div class="container-xl">
    

<div class="row gy-4">

    <div class="col-lg-12">

        <div class="row gy-4">
            <div class="col-sm-12">


                @yield('content')
                {{-- <!-- post -->
                <div class="post post-grid rounded bordered">
                    <div class="thumb top-rounded">
                        <span class="post-format">
                            <i class="icon-picture"></i>
                        </span>
                        <a href="blog-single.html">
                            <div class="inner">
                                <img src="images/posts/post-md-1.jpg" alt="post-title" />
                            </div>
                        </a>
                    </div>
                    <div class="details">
                        <ul class="meta list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
                            <li class="list-inline-item">29 March 2021</li>
                        </ul>
                        <h5 class="post-title mb-3 mt-3"><a href="blog-single.html">How To Become Better With Building In 1 Month</a></h5>
                        <p class="excerpt mb-0">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.</p>
                    </div>
                    <div class="post-bottom clearfix d-flex align-items-center">
                        <div class="social-share me-auto">
                            <button class="toggle-button icon-share"></button>
                            <ul class="icons list-unstyled list-inline mb-0">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                            </ul>
                        </div>
                        <div class="more-button float-end">
                            <a href="blog-single.html"><span class="icon-options"></span></a>
                        </div>
                    </div>
                </div> --}}
            </div>

            
               
        </div>

      

    </div>
    
{{-- 
<!-- instagram feed -->
<div class="instagram">
<div class="container-xl">
<!-- button -->
<a href="#" class="btn btn-default btn-instagram">@Katen on Instagram</a>
<!-- images -->
<div class="instagram-feed d-flex flex-wrap">
    <div class="insta-item col-sm-2 col-6 col-md-2">
        <a href="#">
            <img src="images/insta/insta-1.jpg" alt="insta-title" />
        </a>
    </div>
    <div class="insta-item col-sm-2 col-6 col-md-2">
        <a href="#">
            <img src="images/insta/insta-2.jpg" alt="insta-title" />
        </a>
    </div>
    <div class="insta-item col-sm-2 col-6 col-md-2">
        <a href="#">
            <img src="images/insta/insta-3.jpg" alt="insta-title" />
        </a>
    </div>
    <div class="insta-item col-sm-2 col-6 col-md-2">
        <a href="#">
            <img src="images/insta/insta-4.jpg" alt="insta-title" />
        </a>
    </div>
    <div class="insta-item col-sm-2 col-6 col-md-2">
        <a href="#">
            <img src="images/insta/insta-5.jpg" alt="insta-title" />
        </a>
    </div>
    <div class="insta-item col-sm-2 col-6 col-md-2">
        <a href="#">
            <img src="images/insta/insta-6.jpg" alt="insta-title" />
        </a>
    </div>
</div>
</div>
</div> --}}

<!-- footer -->
<footer>
<div class="container-xl">
<div class="footer-inner">
    <div class="row d-flex align-items-center gy-4">
        <!-- copyright text -->
        <div class="col-md-4">
            <span class="copyright">© 2021 Katen. Template by ThemeGer.</span>
        </div>

        <!-- social icons -->
        <div class="col-md-4 text-center">
            <ul class="social-icons list-unstyled list-inline mb-0">
                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>

        <!-- go to top button -->
        <div class="col-md-4">
            <a href="#" id="return-to-top" class="float-md-end"><i class="icon-arrow-up"></i>Back to Top</a>
        </div>
    </div>
</div>
</div>
</footer>

</div><!-- end site wrapper -->

<!-- search popup area -->
<div class="search-popup">
<!-- close button -->
<button type="button" class="btn-close" aria-label="Close"></button>
<!-- content -->
<div class="search-content">
<div class="text-center">
<h3 class="mb-4 mt-0">Press ESC to close</h3>
</div>
<!-- form -->
<form class="d-flex search-form">
<input class="form-control me-2" type="search" placeholder="Search and press enter ..." aria-label="Search">
<button class="btn btn-default btn-lg" type="submit"><i class="icon-magnifier"></i></button>
</form>
</div>
</div>

<!-- canvas menu -->
<div class="canvas-menu d-flex align-items-end flex-column">
<!-- close button -->
<button type="button" class="btn-close" aria-label="Close"></button>

<!-- logo -->
<div class="logo">
<img src="images/logo.svg" alt="Katen" />
</div>

<!-- menu -->
<nav>
<ul class="vertical-menu">
<li class="active">
    <a href="index.html">Home</a>
    <ul class="submenu">
        <li><a href="index.html">Magazine</a></li>
        <li><a href="personal.html">Personal</a></li>
        <li><a href="personal-alt.html">Personal Alt</a></li>
        <li><a href="minimal.html">Minimal</a></li>
        <li><a href="classic.html">Classic</a></li>
    </ul>
</li>
<li><a href="category.html">Lifestyle</a></li>
<li><a href="category.html">Inspiration</a></li>
<li>
    <a href="#">Pages</a>
    <ul class="submenu">
        <li><a href="category.html">Category</a></li>
        <li><a href="blog-single.html">Blog Single</a></li>
        <li><a href="blog-single-alt.html">Blog Single Alt</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</li>
<li><a href="contact.html">Contact</a></li>
</ul>
</nav>
</div>

<!-- social icons -->
<ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
</ul>
</div>



</body>
</html>
