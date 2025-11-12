<?php
/**
 * Top Header Component - Manaj School
 * Fully Responsive, No Side Gap (Mobile/Desktop)
 */
?>
<header class="top-header py-2">
  <div class="container-fluid d-flex flex-wrap justify-content-between align-items-center gap-2 px-3 px-md-5">

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

    <!-- Right: Social Links -->
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
    overflow-x: hidden !important;
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
    width: 100%;
    overflow-x: clip;
  }

  .header-item {
    display: flex;
    align-items: center;
    color: var(--light-color);
    text-decoration: none;
    transition: color 0.3s ease;
    font-weight: 500;
    white-space: nowrap;
  }

  .header-item:hover {
    color: var(--secondary-color);
  }

  .header-item i {
    color: var(--secondary-color);
    margin-right: 6px;
    font-size: 15px;
  }

  .social-link {
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

  .social-link:hover {
    background: var(--secondary-color);
    color: var(--dark-color);
    transform: translateY(-2px);
  }

  /* ===== Responsive ===== */
  @media (max-width: 992px) {
    .top-header .container-fluid {
      flex-direction: column;
      text-align: center;
      gap: 5px;
    }
    .header-item { justify-content: center; font-size: 13px; }
    .social-link { width: 30px; height: 30px; font-size: 13px; }
  }

  @media (max-width: 576px) {
    .top-header {
      font-size: 13px;
      padding: 8px 0;
    }
    .header-item { flex-wrap: wrap; }
    .header-item i { font-size: 14px; }
    .social-link { margin: 0 4px; }
  }
</style>
