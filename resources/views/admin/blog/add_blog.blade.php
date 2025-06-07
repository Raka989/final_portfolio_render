<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">

    <title>Blog</title>
    <link rel="apple-touch-icon" href="../../../admin/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../admin/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../admin/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../admin/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../admin/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../admin/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../admin/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../admin/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../admin/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../admin/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../admin/css/core/menu/menu-types/vertical-menu.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

   @include('admin.layouts.header')
   @include('admin.layouts.sidebar')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Blog </h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="home">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Add Blog
                                    </li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @elseif(session('failed'))
                <div class="alert alert-danger">
                    {{ session('failed') }}
                </div>
                @endif

            </div>

            <div class="content-body">


                <!-- Tooltip validations start -->
                <section class="tooltip-validations" id="tooltip-validation">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Blog</h4>
                                </div>
                                <div class="card-body">

                                    <form class="needs-validation" novalidate method="post" action="{{URL::to('blog_add')}}" enctype="multipart/form-data">@csrf
                                        <div class="form-row">


                                            <div class="col-md-12 col-12 mb-3">
                                                <label for="validationTooltip03">title</label>
                                                 <div class="form-group">
                                               <input type="text" class="form-control" name="title" id="validationTooltip02" placeholder="" required/>
                                                </div>

                                                <div class="valid-tooltip">success!</div>
                                                <div class="invalid-tooltip">Please provide a title.</div>
                                            </div>




                                            <div class="col-md-12 col-12 mb-3">
                                                <label for="validationTooltip03">Blog Description</label>
                                                 <div class="form-group">
                                               <textarea class="form-control" name="short_description" id="validationTooltip02" rows='4' placeholder="" required/></textarea>
                                                </div>

                                                <div class="valid-tooltip">success!</div>
                                                <div class="invalid-tooltip">Please provide a message.</div>
                                            </div>
                                            <div class="col-md-12 col-12 mb-3">
                                                <label for="validationTooltip03">Blog Description</label>
                                                 <div class="form-group">
                                               <textarea class="form-control" name="long_description" id="validationTooltip02" rows='4' placeholder="" required/></textarea>
                                                </div>

                                                <div class="valid-tooltip">success!</div>
                                                <div class="invalid-tooltip">Please provide a message.</div>
                                            </div>


                                            <div class="col-md-12 col-12 mb-3">
                                                <label for="validationTooltip02">Blog date</label>
                                                <input type="Date" class="form-control" name="date" id="validationTooltip02" placeholder="" required />
                                                <div class="valid-tooltip">Looks good!</div>
                                                <div class="invalid-tooltip">Please provide a valid image.</div>
                                            </div>

                                            <div class="col-md-12 col-12 mb-3">
                                                <label for="validationTooltip02">Blog image</label>
                                                <input type="file" class="form-control" name="image" id="validationTooltip02" placeholder="" required />
                                                <div class="valid-tooltip">Looks good!</div>
                                                <div class="invalid-tooltip">Please provide a valid image.</div>
                                            </div>

                                        </div>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </form>
                                </div>


                            </div>

                        </div>
                    </div>
                </section>
                <!-- Tooltip validations end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ml-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../admin/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../admin/js/core/app-menu.js"></script>
    <script src="../../../admin/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../admin/js/scripts/forms/form-tooltip-valid.js"></script>
    <!-- END: Page JS-->

</head>
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>



</body>
<!-- END: Body-->

</html>
