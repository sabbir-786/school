<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EDUKATE Navbar</title>

  <!-- Bootstrap 5 & Font Awesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      background: #f8f9fa;
      min-height: 200vh;
    }

    /* ===== General Navbar Styling ===== */
    .navbar-brand span {
      letter-spacing: 1px;
    }
    .nav-link {
      margin: 0 10px;
      transition: color 0.3s ease;
    }
    .nav-link:hover {
      color: #0d6efd !important;
    }
    .navbar-toggler {
      border: 2px solid #ffc107;
      border-radius: 6px;
      padding: 8px 10px;
      background: transparent;
      position: relative;
    }
    .navbar-toggler:focus {
      box-shadow: none;
      outline: none;
    }

    /* ===== Custom Toggler (Hamburger to Cross) ===== */
    .toggler-icon {
      position: relative;
      width: 26px;
      height: 20px;
      display: inline-block;
    }
    .toggler-icon span {
      position: absolute;
      height: 3px;
      width: 100%;
      background: #212529;
      border-radius: 3px;
      left: 0;
      transition: all 0.3s ease;
    }
    .toggler-icon span:nth-child(1) {
      top: 0;
    }
    .toggler-icon span:nth-child(2) {
      top: 50%;
      transform: translateY(-50%);
    }
    .toggler-icon span:nth-child(3) {
      bottom: 0;
    }

    /* Cross icon when active */
    .navbar-toggler[aria-expanded="true"] .toggler-icon span:nth-child(1) {
      transform: rotate(45deg);
      top: 50%;
      margin-top: -1.5px;
    }
    .navbar-toggler[aria-expanded="true"] .toggler-icon span:nth-child(2) {
      opacity: 0;
    }
    .navbar-toggler[aria-expanded="true"] .toggler-icon span:nth-child(3) {
      transform: rotate(-45deg);
      bottom: 50%;
      margin-bottom: -1.5px;
    }

    /* Dropdown hover effect */
    .dropdown-menu .dropdown-item:hover {
      background-color: #f8f9fa;
      color: #0d6efd;
    }

    /* Demo content */
    .demo-content {
      padding: 40px 0;
      text-align: center;
    }

    .demo-section {
      padding: 100px 0;
      background: white;
      margin: 20px 0;
      border-radius: 10px;
    }
  </style>
</head>
<body>

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3 sticky-top">
    <div class="container">

      <!-- Brand / Logo -->
      <a class="navbar-brand d-flex align-items-center fw-bold text-primary" href="#home">
        <i class="fas fa-book-open fs-3 me-2"></i>
        <span>EDUKATE</span>
      </a>

      <!-- Toggler Button -->
      <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <div class="toggler-icon">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </button>

      <!-- Navbar Links -->
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-primary fw-semibold" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold text-dark" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold text-dark" href="#facility">Facility</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold text-dark" href="#gallery">Gallery</a>
          </li>
        </ul>
      </div>

      <!-- Right-side Button -->
      <div class="d-none d-lg-block ms-3">
        <a href="#join" class="btn btn-primary px-4 fw-semibold">Join Us</a>
      </div>

    </div>
  </nav>




  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS: Auto-close on Link Click & Scroll -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const navbarCollapse = document.querySelector('#navbarNav');
      const navLinks = document.querySelectorAll('.nav-link');
      let lastScrollTop = 0;

      // Auto close navbar on link click (mobile only)
      navLinks.forEach(link => {
        link.addEventListener('click', () => {
          if (window.innerWidth < 992) {
            const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
            if (bsCollapse && navbarCollapse.classList.contains('show')) {
              bsCollapse.hide();
            }
          }
        });
      });

      // Close menu on scroll (mobile only)
      window.addEventListener('scroll', function() {
        if (window.innerWidth < 992) {
          const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

          // Check if menu is open and user is scrolling
          if (navbarCollapse.classList.contains('show')) {
            // Close menu if scrolled more than 50px in any direction
            if (Math.abs(currentScroll - lastScrollTop) > 50) {
              const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse) ||
                                new bootstrap.Collapse(navbarCollapse, { toggle: false });
              bsCollapse.hide();
            }
          }

          lastScrollTop = currentScroll;
        }
      });
    });
  </script>

</body>
</html>
