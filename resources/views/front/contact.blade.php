<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>JohnDoe Horror Form</title>
  <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css" />
  <link rel="stylesheet" href="assets/css/johndoe.css" />

  <style>
    /* Full-page RGB gradient background */
    body {
      margin: 0;
      background: linear-gradient(-45deg, #ff0000, #00ff00, #0000ff, #ffff00);
      background-size: 400% 400%;
      animation: gradientFlow 20s ease infinite;
      color: #fff;
      font-family: Arial, sans-serif;
    }

    @keyframes gradientFlow {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* Horror Overlay Styles with RGB gradient */
    .fake-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background: rgba(0, 0, 0, 0.8);
      background: linear-gradient(135deg, #ff0000, #00ff00, #0000ff);
      background-size: 600% 600%;
      animation: gradientFlow 10s ease infinite;
      color: #00ff00;
      font-family: monospace;
      font-size: 1.6rem;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      z-index: 99999;
      text-align: center;
    }

    .fake-overlay p {
      margin: 10px;
      animation: flicker 1s infinite;
    }

    @keyframes flicker {
      0%, 100% { opacity: 1; }
      50% { opacity: 0.2; color: #ff0000; }
    }

    .horror-spinner {
      border: 4px solid #ff0000;
      border-top: 4px solid transparent;
      border-radius: 50%;
      width: 60px;
      height: 60px;
      margin-top: 20px;
      animation: spin 1.2s linear infinite;
    }

    @keyframes spin {
      to { transform: rotate(360deg); }
    }

    /* Prevent user interaction during overlay */
    body.blocked * {
      pointer-events: none;
    }

    /* Contact form card styling adaptation for RGB theme */
    .contact-form-card, .contact-info-card {
      background: rgba(0,0,0,0.6);
      border-radius: 0.5rem;
      padding: 1.5rem;
      box-shadow: 0 0 15px rgba(255,255,255,0.2);
    }

    .contact-title {
      color: #00ffff;
    }

    .btn-danger {
      background: linear-gradient(45deg, #ff0000, #00ff00, #0000ff);
      border: none;
      color: #fff;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-danger:hover {
      transform: scale(1.05);
      box-shadow: 0 0 15px rgba(255,255,255,0.5);
    }
  </style>
</head>

<body>
  @include('front.layouts.header')

  <!-- Contact Section -->
  <div class="section contact" id="contact">
    <div class="container">
      <div class="row">
        <!-- Form -->
        <div class="col-lg-8">
          <div class="contact-form-card">
            <h4 class="contact-title">Send a message</h4>
            <form action="{{ URL::to('contact_add') }}" method="post" enctype="multipart/form-data" id="contactForm">
              @csrf
              <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Name *" required>
              </div>
              <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email *" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" placeholder="Message *" rows="7" required></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="form-control btn btn-danger">Send Message</button>
              </div>
            </form>
          </div>
        </div>

        <!-- Contact Info -->
        <div class="col-lg-4">
          <div class="contact-info-card">
            <h4 class="contact-title">Get in touch</h4>
            <div class="row mb-2">
              <div class="col-1 pt-1 mr-1"><i class="ti-mobile icon-md"></i></div>
              <div class="col-10"><h6 class="d-inline">Phone:<br><span class="text-muted">+ 7505256152</span></h6></div>
            </div>
            <div class="row mb-2">
              <div class="col-1 pt-1 mr-1"><i class="ti-map-alt icon-md"></i></div>
              <div class="col-10"><h6 class="d-inline">Address:<br><span class="text-muted">Khargapur, Gomti Nagar, Lucknow</span></h6></div>
            </div>
            <div class="row mb-2">
              <div class="col-1 pt-1 mr-1"><i class="ti-envelope icon-md"></i></div>
              <div class="col-10"><h6 class="d-inline">Email:<br><span class="text-muted">blkheart989@gmail.com</span></h6></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('front.layouts.footer')

  <!-- Scripts -->
  <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
  <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
  <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
  <script src="assets/vendors/isotope/isotope.pkgd.js"></script>
  <script src="assets/js/johndoe.js"></script>

  <!-- Horror Hacker Script -->
  <script>
    document.getElementById('contactForm').addEventListener('submit', function (e) {
      e.preventDefault();

      // Prevent interaction
      document.body.classList.add('blocked');

      // Block keyboard input
      window.addEventListener('keydown', disableKeys, true);
      function disableKeys(event) {
        event.stopPropagation();
        event.preventDefault();
      }

      // Create horror overlay
      const overlay = document.createElement('div');
      overlay.className = 'fake-overlay';
      overlay.innerHTML = `
        <p>🔓 BREACH DETECTED</p>
        <p>Accessing your bank account...</p>
        <p>💸 Draining funds...</p>
        <div class="horror-spinner"></div>
      `;
      document.body.appendChild(overlay);

      // Update messages after 4 seconds
      setTimeout(() => {
        overlay.innerHTML = `
          <p>🧠 Injecting malware...</p>
          <p>💀 pls wait your money is being transferred.</p>
          <div class="horror-spinner"></div>
        `;
      }, 4000);

      // Finish and submit after 30 seconds
      setTimeout(() => {
        overlay.remove();
        window.removeEventListener('keydown', disableKeys, true);
        document.body.classList.remove('blocked');
        e.target.submit();
      }, 30000);
    });
  </script>
</body>

</html>
