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
    <title>Stone</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/fans/images/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

     <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
    <!-- END: Vendor CSS-->
<!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assetss/vendors/css/forms/wizard/bs-stepper.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assetss/vendors/css/forms/select/select2.min.css">
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
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/data-list-view.css">
    <!-- END: Page CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"  />

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->
    <style>
        td{
            color:black;
            /*border-style: solid;*/
        }
        tr{
            border-style: solid;
        }

    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-12 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Blogs</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit Blogs
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

               <!-- Column selectors with Export Options and print table -->
                <section id="column-selectors">
                    <div class="row">

                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Blogs </h4>
                                </div>

                                <div class="card-content">
                                    <div class="card-body card-dashboard">

                                        <div class="table-re sponsive">
                                            <form method="post" action="{{URL::to('blog_update')}}" enctype="multipart/form-data">@csrf
                                                <div class="row filter-row">
                                                    <div class="form-group custom-mt-form-group">
                                                        <label>Name</label>
                                                            <input type="hidden" name="blog_id" class="form-control" value="{{$blog->blog_id}}"  placeholder="id">

                                                        <label>Image</label>
                                                        <input type="hidden" name="image" class="form-control" value="{{$blog->image}}"  placeholder="image">
                                                    </div>
                                                    <div class="col-sm-12 col-md-12">

                                                            <label>title</label>
                                                                <input type="text" name="title" class="form-control" value="{{$blog->title}}" placeholder="title">
                                                        </div>

                                                            <div class="col-sm-12 col-md-12">
                                                                <label for="label-textarea">Short Description</label>

                                                                    <textarea class="form-control" name="short_description" id="label-textarea" rows="3" col="8" placeholder="Label in Textarea">{!!$blog->short_description!!}</textarea>

                                                            </div>


                                                <div class="col-sm-12 col-md-12">
                                                    <label for="label-textarea"> Long Description</label>

                                                   <textarea class="form-control" id="label-textarea" name="long_description" rows="3" col="8" placeholder="Label in Textarea">{!!$blog->long_description!!}</textarea>

                                                </div>


                                                <div class="col-sm-12 col-md-12">

                                                    <label>Date</label>
                                                        <input type="text" name="date" class="form-control" value="{{$blog->date}}" placeholder="date">

                                                </div>
                                                <div class="col-sm-12 col-md-12">

                                                    <label>Image</label>
                                                        <input type="file" name="image" class="form-control" placeholder="image">

                                                </div>




                                                <div class="col-sm-3 col-md-3">
                                                  <button class="btn btn-success btn-block" >Submit</button>
                                                </div>

                                            </div>
                                           </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Column selectors with Export Options and print table -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
 <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.22.0/apexcharts.min.js" ></script>

    <script type="text/javascript" src="assets/js/chart.js"></script>
    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.slimscroll.js"></script>
    <script type="text/javascript" src="assets/js/select2.min.js"></script>
    <script type="text/javascript" src="assets/js/moment.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>


     <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/remiserbuttons.html5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/remiserbuttons.print.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <!-- END: Page Vendor JS-->


    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/datatables/datatable.js"></script>


 <script src="../../../app-assetss/vendors/js/forms/select/select2.full.min.js"></script>
 <script src="../../../app-assetss/js/scripts/forms/form-select2.js"></script>
    <!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>
