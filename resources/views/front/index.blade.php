<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Explore high-quality web development and design services with a vibrant RGB-themed portfolio.">
    <meta name="author" content="Rakesh Yadav">
    <title> Portfolio | Rakesh Yadav</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Custom styles -->
    <link rel="stylesheet" href="assets/css/johndoe.css">
    <style>
        body {
            background: linear-gradient(135deg, #ff0000, #00ff00, #0000ff);
            background-size: 600% 600%;
            animation: rgbBackground 20s ease infinite;
        }

        @keyframes rgbBackground {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
        }

        .card-header i {
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-10px);
            }
            60% {
                transform: translateY(-5px);
            }
        }
    </style>
</head>

@include('front.layouts.header')

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <div class="container-fluid">

        <section class="section bg-dark text-center">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6 col-lg-3">
                        <div class="row">
                            <div class="col-5 text-right text-light border-right py-3">
                                <div class="m-auto"><i class="ti-alarm-clock icon-xl"></i></div>
                            </div>
                            <div class="col-7 text-left py-3">
                                <h1 class="text-danger font-weight-bold font40">230</h1>
                                <p class="text-light mb-1">Hours Worked</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="row">
                            <div class="col-5 text-right text-light border-right py-3">
                                <div class="m-auto"><i class="ti-layers-alt icon-xl"></i></div>
                            </div>
                            <div class="col-7 text-left py-3">
                                <h1 class="text-danger font-weight-bold font40">3</h1>
                                <p class="text-light mb-1">Projects Finished</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="row">
                            <div class="col-5 text-right text-light border-right py-3">
                                <div class="m-auto"><i class="ti-face-smile icon-xl"></i></div>
                            </div>
                            <div class="col-7 text-left py-3">
                                <h1 class="text-danger font-weight-bold font40">3</h1>
                                <p class="text-light mb-1">Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="row">
                            <div class="col-5 text-right text-light border-right py-3">
                                <div class="m-auto"><i class="ti-heart-broken icon-xl"></i></div>
                            </div>
                            <div class="col-7 text-left py-3">
                                <h1 class="text-danger font-weight-bold font40">1</h1>
                                <p class="text-light mb-1">Cups of Coffee</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="service">
            <div class="container">
                <h2 class="mb-5 pb-4 text-white"><span class="text-danger">My</span> Services</h2>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="card mb-5">
                            <div class="card-header has-icon">
                                <i class="ti-vector text-danger" aria-hidden="true"></i>
                            </div>
                            <div class="card-body px-4 py-3">
                                <h5 class="mb-3 card-title text-dark">Web Development</h5>
                                <p class="subtitle">Modern, responsive, and secure websites built using Laravel, PHP, and the latest front-end frameworks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card mb-5">
                            <div class="card-header has-icon">
                                <i class="ti-write text-danger" aria-hidden="true"></i>
                            </div>
                            <div class="card-body px-4 py-3">
                                <h5 class="mb-3 card-title text-dark">Content Management</h5>
                                <p class="subtitle">Custom CMS solutions tailored to your business, allowing easy updates and management of your content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card mb-5">
                            <div class="card-header has-icon">
                                <i class="ti-package text-danger" aria-hidden="true"></i>
                            </div>
                            <div class="card-body px-4 py-3">
                                <h5 class="mb-3 card-title text-dark">API Integration</h5>
                                <p class="subtitle">Seamless integration with third-party APIs and services for added functionality and automation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card mb-5">
                            <div class="card-header has-icon">
                                <i class="ti-map-alt text-danger" aria-hidden="true"></i>
                            </div>
                            <div class="card-body px-4 py-3">
                                <h5 class="mb-3 card-title text-dark">SEO Optimization</h5>
                                <p class="subtitle">Boost your visibility with on-page SEO best practices and performance enhancements.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card mb-5">
                            <div class="card-header has-icon">
                                <i class="ti-bar-chart text-danger" aria-hidden="true"></i>
                            </div>
                            <div class="card-body px-4 py-3">
                                <h5 class="mb-3 card-title text-dark">Analytics Setup</h5>
                                <p class="subtitle">Track your site’s performance and visitor behavior using Google Analytics and custom dashboards.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card mb-5">
                            <div class="card-header has-icon">
                                <i class="ti-support text-danger" aria-hidden="true"></i>
                            </div>
                            <div class="card-body px-4 py-3">
                                <h5 class="mb-3 card-title text-dark">Technical Support</h5>
                                <p class="subtitle">Ongoing support and maintenance to keep your website running smoothly and up-to-date.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section bg-dark py-5">
            <div class="container text-center">
                <h2 class="text-light mb-5 font-weight-normal">I Am Available For Freelance</h2>
                <button class="btn bg-primary w-lg">Hire me</button>
            </div>
        </section>
    </div>

    @include('front.layouts.footer')

    <!-- core scripts -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>
    <script src="assets/js/johndoe.js"></script>
</body>

</html>
