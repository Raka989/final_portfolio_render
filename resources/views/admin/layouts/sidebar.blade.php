 <!-- BEGIN: Main Menu-->
 <!DOCTYPE html>
 <html class="loading" lang="en" data-textdirection="ltr">
 <!-- BEGIN: Head-->


 <head>
     <meta http-equiv="saurabh babu" content="saurabhbabu">
     <meta http-equiv="saurabh babu" content="saurabhbabu">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
     <meta name="description" content="saurabh babu saurabhbabu">
     <meta name="keywords" content="Saurabh babu saurabh babu Babu">
     <meta name="author" content="Saurabh Babu">
     <title>Welcome | Home</title>
     <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
     <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.png">
     <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

     <!-- BEGIN: Vendor CSS-->
     <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
     <!-- END: Vendor CSS-->

     <!-- BEGIN: Theme CSS-->
     <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
     <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
     <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
     <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
     <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">

     <!-- BEGIN: Page CSS-->
     <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
     <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
     <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-todo.css">
     <!-- END: Page CSS-->
     <!-- BEGIN: Page CSS-->
     <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/dashboard-ecommerce.css">
     <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/card-analytics.css">
     <!-- END: Page CSS-->
     <!-- BEGIN: Custom CSS-->
     <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
     <!-- END: Custom CSS-->

 </head>



 <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="home">
                    <!-- <div class="brand-logo"></div> -->
                    <h2 class="brand-text mb-0 ">blkheartyt</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class=" navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="active nav-item"><a href="{{('index_page')}}"><i class="feather icon-home"></i><span class="menu-title text-white" data-i18n="Dashboard">Dashboard</span><!-- <span class="badge badge badge-warning badge-pill float-right mr-2">2</span> --></a>

            </li>


          <!--  <li class=" nav-item" ><a href="#"><i class="feather icon-message-square"></i><span class="menu-title" data-i18n="Ecommerce"></span></a>
                <ul class="menu-content" style="border-radius: 10px;">
                    <li><a href="pendingcomplain"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop"></span></a>
                    </li>

                </ul>
            </li>-->

           <!-- <li class=" navigation-header"><span>Apps</span>
            </li>-->
            <li class=" nav-item"><a href="portfolio_view"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">portfolio</span></a>
                <ul class="menu-content">
                    <li><a href="{{('portfolio_view')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Add Portfolio</span></a>
                    </li>
                </ul>
                <ul class="menu-content">
                    <li><a href="{{('portfolio_show')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Show Portfolio List</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="blog_view"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">Blog</span></a>
                <ul class="menu-content">
                    <li><a href="{{('blog_view')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Add Blog </span></a>
                    </li>
                </ul>
                <ul class="menu-content">
                    <li><a href="{{('blog_show')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Show Blog List </span></a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item"><a href="{{'slider_view'}}"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">Slider</span></a>
                <ul class="menu-content">
                    <li><a href="{{('slider_view')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Add Slider </span></a>
                    </li>
                </ul>
                <ul class="menu-content">
                    <li><a href="{{('slider_show')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Show Slider </span></a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item"><a href="{{'Contact_view'}}"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">Contact</span></a>
                <ul class="menu-content">
                    <li><a href="{{('Contact_view')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Contact  </span></a>
                    </li>
                </ul>
                <ul class="menu-content">
                    <li><a href="{{('contact_show')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Show Contact List </span></a>
                    </li>
                </ul>
            </li>

            {{-- <li class=" nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">Blog</span></a>
                <ul class="menu-content">
                    <li><a href="{{('blog_view')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Add Blog </span></a>
                    </li>
                </ul>
                <ul class="menu-content">
                    <li><a href="{{('blog_show')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Show Blog </span></a>
                    </li>
                </ul>
            </li> --}}




             {{-- <li class=" nav-item"><a href="#"><i class="feather icon-truck"></i><span class="menu-title" data-i18n="Ecommerce">contact</span></a>
                <ul class="menu-content">
                    <!-- <li><a href="{{('#')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop"></span></a> -->
                    <!-- </li> -->
                    <li><a href="{{('contact_show')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Show Contact List</span></a>
                    </li>

                </ul>
            </li> --}}
             {{-- <li class=" nav-item"><a href="#"><i class="feather icon-truck"></i><span class="menu-title" data-i18n="Ecommerce">Booking</span></a>
                <ul class="menu-content">
                    <li><a href="{{('booking_view')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Add Booking</span></a>
                    </li><!--
                    <li><a href="mypeddingorder"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">My Order</span></a>
                    </li> -->
                    <li><a href="{{('booking_show')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Show Booking List</span></a>
                    </li>
                </ul>
            </li> --}}

            {{-- <li class=" nav-item"><a href="#"><i class="feather icon-truck"></i><span class="menu-title" data-i18n="Ecommerce">Testimonial</span></a>
                <ul class="menu-content">
                    <li><a href="{{('testimonial_view')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Add Testimonial</span></a>
                    </li><!--
                    <li><a href="mypeddingorder"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">My Order</span></a>
                    </li> -->
                    <li><a href="{{('testimonial_show')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Show Testimonial List</span></a>
                    </li>
                </ul>
            </li> --}}



            <!--<li class=" nav-item"><a href="staff"><i class="feather icon-users"></i><span class="menu-title" data-i18n="Ecommerce">Cash Managment</span></a>-->

            <!--</li>-->


            {{-- <li class=" nav-item"><a href="#"><i class="feather icon-folder"></i><span class="menu-title" data-i18n="Ecommerce"> Aboutus</span></a>
                <ul class="menu-content">
                    <li><a href="{{('about_view')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Add Aboutus</span></a>
                    </li>
                </ul>
                <ul class="menu-content">
                    <li><a href="{{('about_show')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Aboutus List</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-folder"></i><span class="menu-title" data-i18n="Ecommerce"> Ourstory</span></a>
                <ul class="menu-content">
                    <li><a href="{{('ourstory_view')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Add Ourstory</span></a>
                    </li>
                </ul>
                <ul class="menu-content">
                    <li><a href="{{('ourstory_show')}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Ourstory List</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="mail_view"><i class="feather icon-folder"></i><span class="menu-title" data-i18n="Ecommerce"> Mail</span></a>


            </li>





 --}}








             <!-- <li class=" nav-item"><a href="#"><i class="feather icon-circle"></i><span class="menu-title" data-i18n="Ecommerce">Investment</span></a>
                <ul class="menu-content">
                    <li><a href="investment"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Investment</span></a>
                    </li>

                </ul>
            </li> -->



           <!-- <li ><a href="profit"><i class="feather icon-layers"></i><span class="menu-title" >Profit</span></a>-->
                <!--<ul class="menu-content">-->
                <!--    <li><a href="profit"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Profit</span></a>-->
                <!--    </li>-->

                <!--</ul>-->
            </li>

            <!-- <li class=" navigation-header"><span>Cashier</span>
            </li>-->

           <!-- <li class=" nav-item"><a href="#"><i class="fa fa-inr"></i><span class="menu-title" data-i18n="Ecommerce">Cashier</span></a>
                <ul class="menu-content">
                    <li><a href="collection"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Collection</span></a>
                    </li>-->

                </ul>
            </li>
            <!--<li class=" navigation-header"><span>Payment Daybook</span>-->
            <!--</li>-->

            <!--<li class=" nav-item"><a href="#"><i class="fa fa-inr"></i><span class="menu-title" data-i18n="Ecommerce">Payment</span></a>-->
            <!--    <ul class="menu-content">-->
            <!--        <li><a href="dailypayment"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Shop">Daily Payment</span></a>-->
            <!--        </li>-->

            <!--    </ul>-->
            <!--</li>-->




        </ul>
    </div>
</div>
<!-- END: Main Menu-->

