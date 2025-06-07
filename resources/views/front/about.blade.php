<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Professional portfolio of Rakesh Yadav, a skilled web developer and video editor.">
  <meta name="author" content="Rakesh Yadav">
  <title>About | Rakesh Yadav Portfolio</title>

  <!-- Font Icons -->
  <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
  <!-- Bootstrap + Custom CSS -->
  <link rel="stylesheet" href="assets/css/johndoe.css">

  <style>
    body {
      scroll-behavior: smooth;
    }

    /* About section styling with RGB background */
    .about-section {
      background: linear-gradient(to right, rgb(255, 0, 100), rgb(255, 159, 245)); /* Gradient background */
      padding: 60px 0;
      animation: fadeIn 1s ease-in;
    }

    .about-card {
      background: rgb(255, 255, 255);
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      padding: 30px;
      margin-bottom: 30px;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      animation: slideUp 1.2s ease;
    }

    .about-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }

    .about-card h3 {
      color: rgb(30, 30, 60); /* RGB text color */
    }

    .line {
      width: 60px;
      height: 3px;
      background: rgb(255, 0, 100); /* RGB for line color */
      display: block;
    }

    .subtitle {
      color: rgb(80, 80, 90);
      font-size: 15px;
      line-height: 1.6;
    }

    .btn-outline-danger {
      transition: background-color 0.4s, color 0.4s;
      border-color: rgb(255, 0, 100);
      color: rgb(255, 0, 100); /* Button initial color */
    }

    .btn-outline-danger:hover {
      background-color: rgb(255, 0, 100); /* Hover color */
      color: white;
    }

    .social-link i {
      font-size: 20px;
      color: rgb(70, 70, 100); /* Icon color */
      transition: transform 0.3s, color 0.3s;
    }

    .social-link:hover i {
      color: rgb(255, 0, 100); /* Icon hover color */
      transform: scale(1.2) rotate(5deg);
    }

    /* Animations */
    @keyframes fadeIn {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }

    @keyframes slideUp {
      0% {
        transform: translateY(40px);
        opacity: 0;
      }
      100% {
        transform: translateY(0px);
        opacity: 1;
      }
    }

    /* RGB Text Hover Effects */
    .about-card h6:hover {
      color: rgb(255, 0, 100);
      transition: color 0.4s ease;
    }

    /* Social Icons Hover RGB Effect */
    .social-item:hover .social-link i {
      color: rgb(255, 0, 100);
      transform: scale(1.2);
    }

    /* Section Heading Color Change */
    .about-card h3 {
      color: rgb(30, 30, 60);
      transition: color 0.4s ease;
    }
    .about-card:hover h3 {
      color: rgb(255, 0, 100); /* Color change on hover */
    }

  </style>
</head>

<body>
  @include('front.layouts.header')

  <div id="about" class="row about-section container mx-auto">
    <!-- Who Am I -->
    <div class="col-lg-4 about-card">
      <h3 class="font-weight-light">Who Am I?</h3>
      <span class="line mb-4"></span>
      <h5 class="mb-3">A Full-Stack Web Developer Based in India</h5>
      <p class="mt-20">I am passionate about building high-performance web applications that offer great user experiences. I specialize in both front-end and back-end development using the latest technologies.</p>
      <a href="{{ url('pdf_view') }}">
        <button class="btn btn-outline-danger mt-3">
          <i class="icon-down-circled2"></i> Download My CV
        </button>
      </a>
    </div>

    <!-- Personal Info -->
    <div class="col-lg-4 about-card">
      <h3 class="font-weight-light">Personal Info</h3>
      <span class="line mb-4"></span>
      <ul class="mt-4 info list-unstyled">
        <li><span>Birthdate:</span> 25/04/1996</li>
        <li><span>Email:</span> blkheart989@gmail.com</li>
        <li><span>Phone:</span> 7505256152</li>
        <li><span>Skype:</span> Rakesh Yadav</li>
        <li><span>Address:</span> Khargapur, Gomti Nagar, Lucknow</li>
      </ul>
      <ul class="social-icons pt-3">
        <li class="social-item"><a class="social-link" href="https://www.facebook.com/share/1CwoJs1rxF/"><i class="ti-facebook" aria-hidden="true"></i></a></li>
        <li class="social-item"><a class="social-link" href="https://www.instagram.com/rakesh_yaduvanshi9451?igsh=eDBudWQ2dmFrZWt5"><i class="ti-instagram" aria-hidden="true"></i></a></li>
        <li class="social-item"><a class="social-link" href="https://github.com/Raka989/my-portfolio"><i class="ti-github" aria-hidden="true"></i></a></li>
      </ul>
    </div>

    <!-- My Expertise -->
    <div class="col-lg-4 about-card">
      <h3 class="font-weight-light">My Expertise</h3>
      <span class="line mb-4"></span>

      <div class="row mb-3">
        <div class="col-1 text-danger pt-1"><i class="ti-paint-bucket icon-lg"></i></div>
        <div class="col-10 ml-auto mr-3">
          <h6>Web Development</h6>
          <p class="subtitle">I specialize in full-stack web development using Laravel, PHP, HTML5, CSS3, Bootstrap, and JavaScript. I ensure responsive design, optimized performance, and seamless user experience across all platforms.</p>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-1 text-danger pt-1"><i class="ti-stats-up icon-lg"></i></div>
        <div class="col-10 ml-auto mr-3">
          <h6>Video Editing</h6>
          <p class="subtitle">Proficient in Adobe Premiere Pro, Final Cut Pro, and DaVinci Resolve. I create engaging and professional video content for social media, advertising, and business promotions.</p>
        </div>
      </div>
    </div>
  </div>

  @include('front.layouts.footer')

  <!-- JS Scripts -->
  <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
  <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
  <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
  <script src="assets/vendors/isotope/isotope.pkgd.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
  <script src="assets/js/johndoe.js"></script>
</body>
</html>
