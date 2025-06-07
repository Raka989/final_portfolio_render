<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JohnDoe landing page.">
    <meta name="author" content="Devcrud">
    <title>JohnDoe Landing page | Free Bootstrap 4.3.x landing page</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + JohnDoe main styles -->
	<link rel="stylesheet" href="assets/css/johndoe.css">

    <!-- Custom Styles for fixed image dimensions -->
    <style>
        .portfolio-item img {
            width: 100%;
            height: 250px; /* Set a fixed height */
            object-fit: cover; /* Ensure image covers the div without distortion */
            border-radius: 10px; /* Optional: Add some border-radius for aesthetics */
        }

        .portfolio-item {
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .portfolio-item:hover {
            transform: scale(1.05);
        }

        .content-holder {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.6); /* Dark overlay */
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .content-holder h6,
        .content-holder p {
            margin: 0;
        }

        .content-holder h6 {
            font-size: 16px;
            font-weight: bold;
        }

        .content-holder p {
            font-size: 14px;
        }

    </style>

</head>

@include('front.layouts.header')

<section class="section bg-custom-gray" id="portfolio">
    <div class="container">
        <h1 class="mb-5"><span class="text-danger">My</span> Portfolio</h1>
        <div class="portfolio">
            <!-- Portfolio Grid -->
            <div class="row">
                <!-- Loop through portfolio items -->
                @foreach($portfolio as $portfolios)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="portfolio-item">
                        <!-- Display image -->
                        <img src="{{ asset('portfolio_images/' . $portfolios->image) }}" style="height: 100px; object-fit: contain;">
                        <!-- Content Holder with static text -->
                        <div class="content-holder">
                            <a class="img-popup" href="{{ asset('admin.portfolio.show_portfolio/' . $portfolios->image) }}"></a>
                            <div class="text-holder">
                                <h6 class="title">project</h6>
                                <p class="subtitle">projects</p>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@include('front.layouts.footer')

<script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
<!-- Bootstrap affix -->
<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
<!-- Isotope -->
<script src="assets/vendors/isotope/isotope.pkgd.js"></script>
<!-- Google Maps -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>
<!-- JohnDoe js -->
<script src="assets/js/johndoe.js"></script>

</html>
