<?php
/**
 * Navbar Component - Manaj School
 * Fully responsive with scroll-based active highlighting and auto-hide
 */
?>

<!-- ===== NAVBAR ===== -->
<nav class="navbar navbar-expand-lg sticky-top shadow-sm">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center fw-bold text-white" href="#home">
      <img src="images/Logo.png" alt="Manaj School Logo" width="45" class="me-2 rounded-circle">
      <span>Manaj <span class="text-highlight">School</span></span>
    </a>

    <button class="navbar-toggler border-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#manajNavbar" aria-controls="manajNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="manajNavbar">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#academics">Academics</a></li>
        <li class="nav-item"><a class="nav-link" href="#faculty">Faculty</a></li>
        <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
      <a href="admission.php" class="btn-admission ms-lg-3 mt-3 mt-lg-0">
        <i class="fas fa-user-graduate"></i> Apply Now
      </a>
    </div>
  </div>
</nav>

<!-- ===== NAVBAR STYLES ===== -->
<style>
  :root {
    --primary-color: #EC3237;
    --secondary-color: #FBBB71;
    --dark-color: #1e1e1e;
    --light-color: #ffffff;
    --gradient-primary: linear-gradient(135deg, #EC3237, #C72C31);
    --gradient-secondary: linear-gradient(135deg, #FBBB71, #F9A952);
  }

  .navbar {
    background: var(--gradient-primary);
    transition: all 0.3s ease;
    padding: 0.8rem 1rem;
    z-index: 9999;
  }

  .navbar-brand {
    font-size: 1.3rem;
    color: var(--light-color);
  }

  .navbar-brand .text-highlight {
    color: var(--secondary-color);
  }

  .nav-link {
    color: var(--light-color);
    font-weight: 500;
    margin: 0 6px;
    padding: 8px 14px !important;
    border-radius: 6px;
    transition: all 0.3s ease;
  }

  .nav-link.active {
    background: var(--secondary-color);
    color: var(--dark-color) !important;
  }

  .nav-link:hover {
    background: var(--secondary-color);
    color: var(--dark-color) !important;
  }

  .navbar-toggler {
    font-size: 1.4rem;
    color: var(--light-color);
    background: rgba(255, 255, 255, 0.15);
    padding: 6px 10px;
    border-radius: 6px;
  }

  .navbar-toggler:hover {
    background: var(--secondary-color);
    color: var(--dark-color);
  }

  .btn-admission {
    background: var(--light-color);
    color: var(--primary-color);
    padding: 6px 18px;
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

  @media (max-width: 991px) {
    .navbar-nav {
      background: var(--primary-color);
      border-radius: 8px;
      padding: 10px;
      margin-top: 10px;
    }

    .nav-link {
      display: block;
      padding: 10px 12px !important;
    }

    .btn-admission {
      display: block;
      width: 100%;
      text-align: center;
    }
  }
</style>

<!-- ===== NAVBAR SCRIPT ===== -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const navbarCollapse = document.getElementById('manajNavbar');
    const navLinks = document.querySelectorAll('.navbar .nav-link');

    // ✅ Close navbar on link click (mobile)
    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        if (window.innerWidth < 992) {
          const bsCollapse = new bootstrap.Collapse(navbarCollapse, { toggle: false });
          bsCollapse.hide();
        }
      });
    });

    // ✅ Close navbar on scroll (mobile)
    window.addEventListener('scroll', () => {
      if (window.innerWidth < 992) {
        const bsCollapse = new bootstrap.Collapse(navbarCollapse, { toggle: false });
        bsCollapse.hide();
      }
    });

    // ✅ Activate link on scroll (ScrollSpy)
    const sections = document.querySelectorAll("section[id]");
    window.addEventListener("scroll", () => {
      let scrollPos = window.scrollY + 120; // offset for fixed navbar
      sections.forEach(section => {
        const top = section.offsetTop;
        const height = section.offsetHeight;
        const id = section.getAttribute("id");

        if (scrollPos >= top && scrollPos < top + height) {
          document.querySelectorAll(".navbar .nav-link").forEach(link => link.classList.remove("active"));
          const currentLink = document.querySelector('.navbar .nav-link[href="#' + id + '"]');
          if (currentLink) currentLink.classList.add("active");
        }
      });
    });
  });
</script>
