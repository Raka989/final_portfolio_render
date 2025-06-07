<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JohnDoe landing page.">
    <meta name="author" content="Devcrud">
    <title>Portfolio website | Free Bootstrap 4.3.x landing page</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + JohnDoe main styles -->
	<link rel="stylesheet" href="assets/css/johndoe.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">






</head>


<header class="header">
    <div class="container">
        <ul class="social-icons pt-3">
            <li class="social-item"><a class="social-link text-light" href="https://youtube.com/@blkheartyt?si=vuuG5sdUAsvdZ2zm"><i class="fab fa-youtube" style="color: red; font-size: 24px;"></i>
</a></li>
           <a href="https://wa.me/7505256152" target="_blank">
    <i class="fab fa-whatsapp" style="color: green; font-size: 28px;"></i>
</a>

            {{-- <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-google" aria-hidden="true"></i></a></li> --}}
            <li class="social-item"><a class="social-link text-light" href="https://www.instagram.com/rakesh_yaduvanshi9451/"><i class="ti-instagram" aria-hidden="true"></i></a></li>
            {{-- <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-github" aria-hidden="true"></i></a></li> --}}
        </ul>
        <div class="header-content">
            <h4 class="header-subtitle" >Hello, I am</h4>
            <h1 class="header-title">Rakesh Yadav</h1>
            <h6 class="header-mono" >Front end Designer | Back end Developer</h6>
            {{-- @foreach ($abc as $slider) --}}


            {{-- <img src="{{asset('admin.slider.show_slider/'.$slider->image)}}" alt="Dynamic Image"> --}}
            {{-- @endforeach --}}
          <a href={{"download_pdf"}} > <button class="btn btn-primary btn-rounded"><i class="ti-printer pr-2"></i>Print Resume</button></a>
        </div>
    </div>
</header>
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
    <div class="container">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about_page" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="resume_page" class="nav-link">Resume</a>
                </li>
            </ul>
            <ul class="navbar-nav brand">
                @foreach($abc as $value)
                <img src="{{asset('admin.slider.show_slider/'.$value->image)}}" alt="" class="brand-img">
                @endforeach
                <li class="brand-txt">
                    <h5 class="brand-title">Rakesh yadav</h5>
                    <div class="brand-subtitle">Web Designer | Developer</div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="portfolio_page" class="nav-link">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a href="blog_page" class="nav-link">Blog</a>
                </li>
                <li class="nav-item last-item">
                    <a href="contact_page" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope  -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>

    <!-- Google mpas -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- JohnDoe js -->
    <script src="assets/js/johndoe.js"></script>
