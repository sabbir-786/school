<?php
/**
 * Top Header Component - Fully Responsive Version
 * Bootstrap 5 + Font Awesome + Custom Styling
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manaj School of Career Development</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
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
      background: var(--light-color);
      color: var(--dark-color);
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
      text-decoration: none;
      transition: color 0.3s ease;
      white-space: nowrap;
    }

    .top-header .header-item:hover {
      color: var(--secondary-color);
    }

    .top-header .header-item i {
      color: var(--secondary-color);
      margin-right: 6px;
      font-size: 15px;
    }

    /* Social icons */
    .top-header .social-link {
      color: var(--light-color);
      background: rgba(255, 255, 255, 0.15);
      border-radius: 50%;
      width: 32px;
      height: 32px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
      font-size: 14px;
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
      padding: 6px 16px;
      border-radius: 6px;
      font-weight: 600;
      font-size: 14px;
      text-decoration: none;
      transition: all 0.3s ease;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .btn-admission:hover {
      background: var(--secondary-color);
      color: var(--dark-color);
      transform: translateY(-2px);
    }

    /* ======= Responsive ======= */
    @media (max-width: 992px) {
      .top-header .container {
        flex-direction: column;
        text-align: center;
        gap: 5px;
      }

      .top-header .header-item {
        justify-content: center;
        font-size: 13px;
      }

      .top-header .social-link {
        width: 30px;
        height: 30px;
        font-size: 13px;
      }

      .btn-admission {
        font-size: 13px;
        padding: 6px 12px;
      }
    }

    @media (max-width: 576px) {
      .top-header {
        font-size: 13px;
        padding: 8px 0;
      }

      .top-header .header-item {
        flex-wrap: wrap;
      }

      .top-header .header-item i {
        font-size: 14px;
      }

      .top-header .social-link {
        margin: 0 4px;
      }
    }
  </style>
</head>
<body>

  <!-- ===== TOP HEADER ===== -->
  <header class="top-header py-2">
    <div class="container d-flex flex-wrap justify-content-between align-items-center gap-2">

      <!-- Left: Contact Info -->
      <div class="d-flex flex-wrap align-items-center gap-3 justify-content-center">
        <a href="tel:+911123456789" class="header-item">
          <i class="fas fa-phone"></i>
          <span>+91 11 2345 6789</span>
        </a>
        <a href="mailto:info@manajschool.edu.in" class="header-item">
          <i class="fas fa-envelope"></i>
          <span>info@manajschool.edu.in</span>
        </a>
      </div>

      <!-- Right: Social Links + Admission Button -->
      <div class="d-flex flex-wrap align-items-center gap-3 justify-content-center">
        <div class="d-flex align-items-center gap-2">
          <a href="#" class="social-link" title="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-link" title="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" class="social-link" title="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-link" title="YouTube"><i class="fab fa-youtube"></i></a>
          <a href="#" class="social-link" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>

      </div>
    </div>
  </header>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
