<?php
/**
 * Top Header Component
 * Includes Bootstrap 5, Font Awesome, and custom design for Manaj School
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manaj School of Career Development</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- ===== Custom CSS ===== -->
  <style>
    :root {
      --primary-color: #EC3237;
      --secondary-color: #FBBB71;
      --dark-color: #363435;
      --light-color: #FEFEFE;
      --gradient-primary: linear-gradient(135deg, #EC3237 0%, #C72C31 100%);
      --gradient-secondary: linear-gradient(135deg, #FBBB71 0%, #F9A952 100%);
    }

    body {
      font-family: 'Inter', sans-serif;
      color: var(--dark-color);
      background-color: var(--light-color);
      overflow-x: hidden;
    }

    /* =========================
       TOP HEADER STYLING
       ========================= */
    .top-header {
      background: var(--gradient-primary);
      color: var(--light-color);
      font-size: 14px;
      font-weight: 500;
      letter-spacing: 0.3px;
    }

    .top-header .header-item {
      display: flex;
      align-items: center;
      color: var(--light-color);
      font-weight: 500;
      transition: color 0.3s ease;
    }

    .top-header .header-item:hover {
      color: var(--secondary-color);
    }

    .top-header .header-item i {
      color: var(--secondary-color);
      font-size: 14px;
    }

    .top-header .social-link {
      color: var(--light-color);
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
      width: 32px;
      height: 32px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
      transition: all 0.3s ease;
      text-decoration: none;

    }

    .top-header .social-link:hover {
      background: var(--secondary-color);
      color: var(--dark-color);
      transform: translateY(-2px);
    }

    .btn-admission {
      background: var(--light-color);
      color: var(--primary-color);
      padding: 6px 14px;
      border-radius: 6px;
      font-weight: 600;
      display: flex;
      align-items: center;
      font-size: 14px;
      transition: all 0.3s ease;
    }

    .btn-admission:hover {
      background: var(--secondary-color);
      color: var(--dark-color);
      transform: translateY(-2px);
    }

    /* Responsive Tweaks */
    @media (max-width: 768px) {
      .top-header {
        font-size: 13px;
        text-align: center;
      }
      .top-header .header-item span {
        display: none;
      }
      .top-header .social-link {
        width: 28px;
        height: 28px;
        font-size: 12px;
      }
      .btn-admission span {
        display: none;
      }
    }
  </style>
</head>

<body>
  <!-- ===== TOP HEADER ===== -->
  <header class="top-header">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between align-items-center py-2">

        <!-- Left Side - Contact Info -->
        <div class="d-flex flex-wrap align-items-center gap-3">
          <a href="tel:+911123456789" class="header-item text-decoration-none">
            <i class="fas fa-phone me-2"></i>
            <span class="d-none d-md-inline">+91 11 2345 6789</span>
          </a>
          <a href="mailto:info@manajschool.edu.in" class="header-item text-decoration-none d-none d-sm-flex">
            <i class="fas fa-envelope me-2"></i>
            <span class="d-none d-lg-inline">info@manajschool.edu.in</span>
          </a>

        </div>

        <!-- Right Side - Social Links & Actions -->
        <div class="d-flex align-items-center gap-3">

          <!-- Social Links -->
          <div class="d-none d-lg-flex align-items-center gap-2">
            <a href="#" class="social-link" aria-label="Facebook" title="Facebook">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-link" aria-label="Twitter" title="Twitter">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-link" aria-label="Instagram" title="Instagram">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="social-link" aria-label="YouTube" title="YouTube">
              <i class="fab fa-youtube"></i>
            </a>
            <a href="#" class="social-link" aria-label="LinkedIn" title="LinkedIn">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>


        </div>
      </div>
    </div>
  </header>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AOS Script -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 800, once: true, offset: 100 });
  </script>
</body>
</html>
