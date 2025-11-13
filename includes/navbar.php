<?php
// NAVBAR FILE – Framer UI Style with Brand Colors
// Color Palette: Red #EC3237 | White #FEFEFE | Dark #363435 | Gold #FBBB71
?>
<nav class="modern-navbar navbar navbar-expand-lg sticky-top">
  <div class="container">

    <!-- Brand Logo & Text -->
    <a class="navbar-brand modern-brand" href="index.php" aria-label="Manaj School Home">
      <span class="brand-icon">
        <img src="assets/images/logo.png" alt="Manaj School Logo" width="40" height="40" class="brand-img" loading="lazy">
      </span>
      <span class="brand-text">
        <span class="brand-name">Manaj School</span>
        <span class="brand-tagline">Career Development</span>
      </span>
    </a>

    <!-- Mobile Toggle Button -->
    <button class="navbar-toggler modern-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="toggler-line"></span>
      <span class="toggler-line"></span>
      <span class="toggler-line"></span>
    </button>

    <!-- Navigation Menu -->
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center" role="menubar">

        <li class="nav-item" role="none">
          <a class="nav-link modern-nav-link" href="index.php" role="menuitem">
            <span class="link-text">Home</span>
            <span class="link-indicator"></span>
          </a>
        </li>

        <li class="nav-item" role="none">
          <a class="nav-link modern-nav-link" href="about.php" role="menuitem">
            <span class="link-text">About</span>
            <span class="link-indicator"></span>
          </a>
        </li>

        <li class="nav-item" role="none">
          <a class="nav-link modern-nav-link" href="courses.php" role="menuitem">
            <span class="link-text">Courses</span>
            <span class="link-indicator"></span>
          </a>
        </li>

        <li class="nav-item" role="none">
          <a class="nav-link modern-nav-link" href="admission.php" role="menuitem">
            <span class="link-text">Admission</span>
            <span class="link-indicator"></span>
          </a>
        </li>

        <li class="nav-item" role="none">
          <a class="nav-link modern-nav-link" href="contact.php" role="menuitem">
            <span class="link-text">Contact</span>
            <span class="link-indicator"></span>
          </a>
        </li>

        <!-- CTA Button -->
        <li class="nav-item ms-lg-3" role="none">
          <a class="btn modern-cta-btn" href="admission.php" role="button">
            <span>Apply Now</span>
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
              <path d="M6 3L11 8L6 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
        </li>

      </ul>
    </div>

  </div>
</nav>

<style>
:root {
  /* Your Brand Colors */
  --nav-primary: #EC3237;      /* Vibrant Red */
  --nav-white: #FEFEFE;         /* Pure White */
  --nav-dark: #363435;          /* Professional Dark Gray */
  --nav-gold: #FBBB71;          /* Warm Gold */

  /* Derived Colors */
  --nav-bg: rgba(254, 254, 254, 0.98);
  --nav-text-muted: rgba(54, 52, 53, 0.7);
  --nav-shadow: 0 2px 16px rgba(54, 52, 53, 0.08);
  --nav-shadow-scroll: 0 4px 24px rgba(54, 52, 53, 0.12);
}

/* Modern Navbar Base */
.modern-navbar {
  background: var(--nav-bg);
  backdrop-filter: blur(24px) saturate(180%);
  -webkit-backdrop-filter: blur(24px) saturate(180%);
  box-shadow: var(--nav-shadow);
  padding: 14px 0;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  border-bottom: 2px solid rgba(236, 50, 55, 0.12);
  position: relative;
  z-index: 1000;
}

/* Navbar on Scroll */
.modern-navbar.scrolled {
  box-shadow: var(--nav-shadow-scroll);
  padding: 10px 0;
  border-bottom-color: rgba(236, 50, 55, 0.2);
  background: rgba(254, 254, 254, 0.95);
}

/* ========== BRAND SECTION ========== */
.modern-brand {
  display: flex;
  align-items: center;
  gap: 14px;
  padding: 6px 0;
  text-decoration: none;
  transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
}

.modern-brand:hover {
  transform: translateY(-3px);
}

.brand-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 48px;
  height: 48px;
  background: linear-gradient(135deg, rgba(236, 50, 55, 0.1) 0%, rgba(251, 187, 113, 0.1) 100%);
  border-radius: 12px;
  padding: 4px;
  transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
  border: 1px solid rgba(236, 50, 55, 0.15);
}

.modern-brand:hover .brand-icon {
  transform: rotate(-8deg) scale(1.08);
  background: linear-gradient(135deg, rgba(236, 50, 55, 0.15) 0%, rgba(251, 187, 113, 0.15) 100%);
  box-shadow: 0 4px 12px rgba(236, 50, 55, 0.2);
}

.brand-img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  transition: transform 0.3s ease;
}

.brand-text {
  display: flex;
  flex-direction: column;
  line-height: 1.15;
}

.brand-name {
  font-size: 22px;
  font-weight: 700;
  background: linear-gradient(135deg, var(--nav-primary) 0%, var(--nav-dark) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  letter-spacing: -0.6px;
  transition: all 0.3s ease;
}

.modern-brand:hover .brand-name {
  background: linear-gradient(135deg, var(--nav-primary) 0%, var(--nav-gold) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.brand-tagline {
  font-size: 11px;
  color: var(--nav-text-muted);
  font-weight: 600;
  letter-spacing: 0.8px;
  text-transform: uppercase;
  margin-top: 1px;
}

/* ========== TOGGLE BUTTON ========== */
.modern-toggler {
  border: none;
  padding: 10px;
  background: transparent;
  position: relative;
  width: 44px;
  height: 44px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 6px;
  border-radius: 10px;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  cursor: pointer;
}

.modern-toggler:hover {
  background: rgba(236, 50, 55, 0.08);
}

.modern-toggler:focus {
  box-shadow: 0 0 0 3px rgba(236, 50, 55, 0.2);
  outline: none;
  background: rgba(236, 50, 55, 0.1);
}

.toggler-line {
  width: 26px;
  height: 2.5px;
  background: var(--nav-dark);
  border-radius: 3px;
  transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Animated Hamburger → X */
.modern-toggler:not(.collapsed) .toggler-line:nth-child(1) {
  transform: rotate(45deg) translate(6px, 6px);
  background: var(--nav-primary);
}

.modern-toggler:not(.collapsed) .toggler-line:nth-child(2) {
  opacity: 0;
  transform: scale(0.2);
}

.modern-toggler:not(.collapsed) .toggler-line:nth-child(3) {
  transform: rotate(-45deg) translate(6px, -6px);
  background: var(--nav-primary);
}

/* ========== NAVIGATION LINKS ========== */
.modern-nav-link {
  position: relative;
  color: var(--nav-dark);
  font-weight: 600;
  font-size: 15px;
  padding: 10px 18px !important;
  margin: 0 2px;
  border-radius: 10px;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  display: flex;
  align-items: center;
  gap: 6px;
  overflow: hidden;
}

.link-text {
  position: relative;
  z-index: 2;
  transition: transform 0.3s ease;
}

/* Gold Underline Indicator */
.link-indicator {
  width: 0;
  height: 3px;
  background: var(--nav-gold);
  position: absolute;
  bottom: 6px;
  left: 50%;
  transform: translateX(-50%);
  border-radius: 3px;
  transition: width 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  box-shadow: 0 2px 8px rgba(251, 187, 113, 0.4);
}

/* Hover State */
.modern-nav-link::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, rgba(236, 50, 55, 0.06) 0%, rgba(251, 187, 113, 0.06) 100%);
  opacity: 0;
  transition: opacity 0.3s ease;
  border-radius: 10px;
  z-index: 1;
}

.modern-nav-link:hover {
  color: var(--nav-primary);
  transform: translateY(-2px);
}

.modern-nav-link:hover::before {
  opacity: 1;
}

.modern-nav-link:hover .link-indicator {
  width: calc(100% - 36px);
}

.modern-nav-link:hover .link-text {
  transform: translateY(-1px);
}

/* Active State */
.modern-nav-link.active {
  color: var(--nav-primary);
  background: linear-gradient(135deg, rgba(236, 50, 55, 0.08) 0%, rgba(251, 187, 113, 0.08) 100%);
}

.modern-nav-link.active .link-indicator {
  width: calc(100% - 36px);
}

/* ========== CTA BUTTON ========== */
.modern-cta-btn {
  background: var(--nav-primary);
  color: var(--nav-white);
  border: none;
  padding: 11px 24px;
  border-radius: 12px;
  font-weight: 700;
  font-size: 15px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
  box-shadow: 0 4px 14px rgba(236, 50, 55, 0.35);
  position: relative;
  overflow: hidden;
  letter-spacing: 0.3px;
}

/* Shine Effect */
.modern-cta-btn::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
  transition: left 0.6s ease;
}

.modern-cta-btn:hover::before {
  left: 100%;
}

/* Hover State */
.modern-cta-btn:hover {
  transform: translateY(-3px) scale(1.02);
  box-shadow: 0 8px 24px rgba(236, 50, 55, 0.45);
  color: var(--nav-white);
  background: linear-gradient(135deg, var(--nav-primary) 0%, var(--nav-dark) 100%);
}

.modern-cta-btn:active {
  transform: translateY(-1px) scale(0.98);
}

.modern-cta-btn svg {
  transition: transform 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
}

.modern-cta-btn:hover svg {
  transform: translateX(4px);
}

/* ========== RESPONSIVE DESIGN ========== */
@media (max-width: 991px) {
  .modern-navbar {
    padding: 12px 0;
  }

  .navbar-collapse {
    margin-top: 18px;
    padding: 24px;
    background: var(--nav-white);
    border-radius: 16px;
    box-shadow: 0 8px 32px rgba(54, 52, 53, 0.15);
    border: 2px solid rgba(236, 50, 55, 0.1);
    animation: slideDown 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  }

  .modern-nav-link {
    margin: 6px 0;
    padding: 14px 18px !important;
    justify-content: space-between;
  }

  .link-indicator {
    right: 18px;
    left: auto;
    transform: translateX(0);
    width: 3px;
    height: 0;
    bottom: 50%;
    transform: translateY(50%);
  }

  .modern-nav-link:hover .link-indicator,
  .modern-nav-link.active .link-indicator {
    height: 60%;
    width: 3px;
  }

  .modern-cta-btn {
    width: 100%;
    justify-content: center;
    margin-top: 16px;
    padding: 14px 24px;
    font-size: 16px;
  }

  .brand-name {
    font-size: 19px;
  }

  .brand-icon {
    width: 44px;
    height: 44px;
  }
}

@media (max-width: 575px) {
  .brand-name {
    font-size: 17px;
  }

  .brand-tagline {
    font-size: 10px;
  }
}

/* ========== ANIMATIONS ========== */
@keyframes slideDown {
  from {
    opacity: 0;
    transform: translateY(-15px) scale(0.98);
  }
  to {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}

/* Navbar Entrance */
.modern-navbar {
  animation: fadeInDown 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

@keyframes fadeInDown {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* ========== ACTIVE PAGE DETECTION ========== */
body[data-page="index"] .modern-nav-link[href="index.php"],
body[data-page="about"] .modern-nav-link[href="about.php"],
body[data-page="courses"] .modern-nav-link[href="courses.php"],
body[data-page="admission"] .modern-nav-link[href="admission.php"],
body[data-page="contact"] .modern-nav-link[href="contact.php"] {
  color: var(--nav-primary);
  background: linear-gradient(135deg, rgba(236, 50, 55, 0.1) 0%, rgba(251, 187, 113, 0.1) 100%);
}

body[data-page="index"] .modern-nav-link[href="index.php"] .link-indicator,
body[data-page="about"] .modern-nav-link[href="about.php"] .link-indicator,
body[data-page="courses"] .modern-nav-link[href="courses.php"] .link-indicator,
body[data-page="admission"] .modern-nav-link[href="admission.php"] .link-indicator,
body[data-page="contact"] .modern-nav-link[href="contact.php"] .link-indicator {
  width: calc(100% - 36px);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const navbar = document.querySelector('.modern-navbar');
  const navbarToggler = document.querySelector('.modern-toggler');
  const navbarCollapse = document.querySelector('.navbar-collapse');

  // ========== NAVBAR SCROLL EFFECT ==========
  let lastScroll = 0;
  let ticking = false;

  window.addEventListener('scroll', function() {
    lastScroll = window.pageYOffset;

    if (!ticking) {
      window.requestAnimationFrame(function() {
        if (lastScroll > 50) {
          navbar.classList.add('scrolled');
        } else {
          navbar.classList.remove('scrolled');
        }
        ticking = false;
      });
      ticking = true;
    }
  });

  // ========== ACTIVE PAGE DETECTION ==========
  const currentPage = window.location.pathname.split('/').pop().replace('.php', '') || 'index';
  document.body.setAttribute('data-page', currentPage);

  // Add active class to current link
  const currentLink = document.querySelector(`.modern-nav-link[href="${currentPage}.php"]`);
  if (currentLink) {
    currentLink.classList.add('active');
  }

  // ========== CLOSE NAVBAR ON LINK CLICK (MOBILE) ==========
  const navLinks = document.querySelectorAll('.modern-nav-link');
  navLinks.forEach(link => {
    link.addEventListener('click', function() {
      if (window.innerWidth < 992 && navbarCollapse.classList.contains('show')) {
        navbarToggler.click();
      }
    });
  });

  // ========== SMOOTH SCROLL FOR ANCHOR LINKS ==========
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const href = this.getAttribute('href');
      if (href !== '#' && href !== '#mainNav') {
        e.preventDefault();
        const target = document.querySelector(href);
        if (target) {
          const offsetTop = target.offsetTop - navbar.offsetHeight - 20;
          window.scrollTo({
            top: offsetTop,
            behavior: 'smooth'
          });
        }
      }
    });
  });

  // ========== CLOSE NAVBAR ON OUTSIDE CLICK ==========
  document.addEventListener('click', function(event) {
    const isClickInside = navbar.contains(event.target);
    if (!isClickInside && navbarCollapse.classList.contains('show')) {
      navbarToggler.click();
    }
  });

  // ========== PREVENT SCROLL WHEN MOBILE MENU OPEN ==========
  navbarToggler.addEventListener('click', function() {
    setTimeout(function() {
      if (navbarCollapse.classList.contains('show')) {
        document.body.style.overflow = 'hidden';
      } else {
        document.body.style.overflow = '';
      }
    }, 100);
  });
});
</script>
