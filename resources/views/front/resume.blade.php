<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>JohnDoe Landing page | Resume Section</title>
  <!-- font icons -->
  <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="assets/css/johndoe.css">

  <!-- Embedded CSS for Resume Section -->
  <style>
    /* RGB Color Theme */
    :root {
      --accent-color: rgb(226, 33, 129);
      --accent-light: rgba(33, 226, 129, 0.5);
      --hover-glow: 0 0 15px rgba(33, 226, 129, 0.8);
    }

    .card-header .line {
      background: var(--accent-color);
      height: 3px;
      display: block;
      width: 50px;
      margin-top: 5px;
      border-radius: 3px;
    }

    .progress-bar.gradient {
      background: linear-gradient(to right, var(--accent-color), var(--accent-light));
      transition: width 0.6s ease-in-out;
    }

    #resume h2 span,
    .title.text-danger {
      color: var(--accent-color) !important;
    }

    /* Card Hover Effect */
    .card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border-radius: 12px;
      overflow: hidden;
    }

    .card:hover {
      transform: scale(1.03);
      box-shadow: var(--hover-glow);
      cursor: pointer;
    }

    /* Glow Effect on Headers */
    .card-header h4 {
      transition: color 0.3s ease;
    }

    .card:hover .card-header h4 {
      color: var(--accent-color);
      text-shadow: 0 0 5px var(--accent-color);
    }

    /* Smooth transition for skills */
    .card-body h6 {
      position: relative;
      transition: color 0.3s ease;
    }

    .card-body h6:hover {
      color: var(--accent-color);
      text-shadow: 0 0 5px var(--accent-color);
    }
  </style>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const cards = document.querySelectorAll(".card");

      cards.forEach((card) => {
        card.addEventListener("mouseover", () => {
          card.style.animation = "bounce 0.4s ease";
        });
        card.addEventListener("animationend", () => {
          card.style.animation = "";
        });
      });
    });

    // Keyframe Animation in JS
    const style = document.createElement("style");
    style.innerHTML = `
      @keyframes bounce {
        0%   { transform: translateY(0); }
        25%  { transform: translateY(-5px); }
        50%  { transform: translateY(0); }
        75%  { transform: translateY(-3px); }
        100% { transform: translateY(0); }
      }
    `;
    document.head.appendChild(style);
  </script>
</head>

<body>
  @include('front.layouts.header')

  <section class="section" id="resume">
    <div class="container">
      <h2 class="mb-5"><span class="text-danger">My</span> Resume</h2>
      <div class="row">

        <!-- Expertise -->
        <div class="col-md-6 col-lg-4">
          <div class="card mb-4">
            <div class="card-header">
              <h4>Expertise</h4>
              <span class="line"></span>
            </div>
            <div class="card-body">
              <h6 class="title text-danger">2025 – Present</h6>
              <p>Full-Stack Developer at Acme Corp</p>
              <p class="subtitle">Building and maintaining scalable Laravel applications, integrating third-party APIs, and optimizing database queries for high performance.</p>
              <hr>
              <h6 class="title text-danger">2024</h6>
              <p>Front-End Developer</p>
              <p class="subtitle">Designed responsive UI components using Bootstrap and JavaScript, improving page-load times by 30% and enhancing UX consistency.</p>
              <hr>
              <h6 class="title text-danger">2023 – 2024</h6>
              <p>Web Dev Intern at Promosys Technology</p>
              <p class="subtitle">Collaborated on a client portal project using PHP & Laravel, implemented authentication, and wrote unit tests to ensure reliability.</p>
            </div>
          </div>
        </div>

        <!-- Education -->
        <div class="col-md-6 col-lg-4">
          <div class="card mb-4">
            <div class="card-header">
              <h4>Education</h4>
              <span class="line"></span>
            </div>
            <div class="card-body">
              <h6 class="title text-danger">2020 – 2024</h6>
              <p>B.E. in Computer Engineering, St. Peter’s Inter College</p>
              <p class="subtitle">Graduated with First Class Honors; specialized in web technologies, data structures, and database management systems.</p>
              <hr>
              <h6 class="title text-danger">2017</h6>
              <p>Intermediate (PCM)</p>
              <p class="subtitle">Scored 80% in Physics, Chemistry & Mathematics at Central Board examinations.</p>
              <hr>
              <h6 class="title text-danger">2015 – 2016</h6>
              <p>High School</p>
              <p class="subtitle">Completed Secondary School Certificate with a CGPA of 7.4.</p>
            </div>
          </div>
        </div>

        <!-- Skills & Languages -->
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-header">
              <h4>Skills</h4>
              <span class="line"></span>
            </div>
            <div class="card-body pb-2">
              <!-- HTML5 & CSS3 -->
              <h6>HTML5 &amp; CSS3</h6>
              <div class="progress mb-3">
                <div class="progress-bar gradient" role="progressbar" style="width:97%" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <!-- JavaScript -->
              <h6>JavaScript</h6>
              <div class="progress mb-3">
                <div class="progress-bar gradient" role="progressbar" style="width:85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <!-- PHP -->
              <h6>PHP</h6>
              <div class="progress mb-3">
                <div class="progress-bar gradient" role="progressbar" style="width:80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <!-- MySQL -->
              <h6>MySQL</h6>
              <div class="progress mb-3">
                <div class="progress-bar gradient" role="progressbar" style="width:90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <!-- Laravel -->
              <h6>Laravel</h6>
              <div class="progress mb-3">
                <div class="progress-bar gradient" role="progressbar" style="width:90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <!-- Bootstrap -->
              <h6>Bootstrap</h6>
              <div class="progress mb-3">
                <div class="progress-bar gradient" role="progressbar" style="width:90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <!-- jQuery -->
              <h6>jQuery</h6>
              <div class="progress mb-3">
                <div class="progress-bar gradient" role="progressbar" style="width:90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <h4>Languages</h4>
              <span class="line"></span>
            </div>
            <div class="card-body pb-2">
              <h6>English</h6>
              <div class="progress mb-3">
                <div class="progress-bar gradient" role="progressbar" style="width:80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h6>Hindi</h6>
              <div class="progress mb-3">
                <div class="progress-bar gradient" role="progressbar" style="width:45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  @include('front.layouts.footer')
  <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
  <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
  <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
  <script src="assets/vendors/isotope/isotope.pkgd.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
  <script src="assets/js/johndoe.js"></script>
</body>
</html>
