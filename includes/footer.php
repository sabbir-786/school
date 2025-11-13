<?php
// FOOTER FILE – include at bottom of all pages
?>
<footer class="modern-footer">
  <div class="footer-background">
    <!-- Orbs colored with your site's palette -->
    <div class="gradient-orb orb-1"></div>
    <div class="gradient-orb orb-2"></div>
    <div class="gradient-orb orb-3"></div>
  </div>

  <div class="container">
    <div class="row g-4">

      <!-- Brand Section -->
      <div class="col-lg-4 col-md-6">
        <div class="footer-brand fade-in">
          <h3 class="brand-title">Manaj School</h3>
          <p class="brand-subtitle">of Career Development</p>
          <p class="brand-tagline mt-3">
            Excellence in Education<br>
            Modern Learning<br>
            Experienced Faculty
          </p>
          <div class="social-links mt-4">
            <a href="#" class="social-icon" aria-label="Facebook">
              <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon" aria-label="Twitter">
              <i class="fa-brands fa-x-twitter"></i>
            </a>
            <a href="#" class="social-icon" aria-label="LinkedIn">
              <i class="fa-brands fa-linkedin-in"></i>
            </a>
            <a href="#" class="social-icon" aria-label="Instagram">
              <i class="fa-brands fa-instagram"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="col-lg-2 col-md-6">
        <div class="footer-links fade-in" style="animation-delay: 0.1s;">
          <h6 class="footer-heading">Quick Links</h6>
          <ul class="links-list">
            <li><a href="about.php">About Us</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a href="admission.php">Admissions</a></li>
            <li><a href="#faculty">Faculty</a></li>
            <li><a href="#events">Events</a></li>
          </ul>
        </div>
      </div>

      <!-- Programs -->
      <div class="col-lg-2 col-md-6">
        <div class="footer-links fade-in" style="animation-delay: 0.2s;">
          <h6 class="footer-heading">Programs</h6>
          <ul class="links-list">
            <li><a href="#">Science</a></li>
            <li><a href="#">Commerce</a></li>
            <li><a href="#">Arts</a></li>
            <li><a href="#">Technology</a></li>
            <li><a href="#">Vocational</a></li>
          </ul>
        </div>
      </div>

      <!-- Resources -->
      <div class="col-lg-2 col-md-6">
        <div class="footer-links fade-in" style="animation-delay: 0.3s;">
          <h6 class="footer-heading">Resources</h6>
          <ul class="links-list">
            <li><a href="#">Library</a></li>
            <li><a href="#">Career Guide</a></li>
            <li><a href="#">Student Portal</a></li>
            <li><a href="#">Downloads</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>

      <!-- Contact Info -->
      <div class="col-lg-2 col-md-6">
        <div class="footer-links fade-in" style="animation-delay: 0.4s;">
          <h6 class="footer-heading">Connect</h6>
          <ul class="links-list">
            <li><a href="tel:+919876543210">+91 98765 43210</a></li>
            <li><a href="mailto:info@manajschool.edu">info@manajschool.edu</a></li>
            <li><a href="#">Campus Location</a></li>
            <li><a href="#">Support</a></li>
          </ul>
        </div>
      </div>

    </div>

    <!-- Bottom Bar -->
    <div class="footer-bottom fade-in" style="animation-delay: 0.5s;">
      <div class="row align-items-center">
        <div class="col-md-6 text-center text-md-start">
          <p class="mb-0">© <?= date('Y'); ?> Manaj School. All Rights Reserved.</p>
        </div>
        <div class="col-md-6 text-center text-md-end">
          <a href="#" class="footer-link">Privacy Policy</a>
          <span class="mx-2">•</span>
          <a href="#" class="footer-link">Terms of Service</a>
        </div>
      </div>
    </div>

  </div>
</footer>

<style>
:root {
  /* SCHOOL PALETTE VARIABLES */
  --footer-primary: #EC3237;   /* Red */
  --footer-secondary: #FBBB71; /* Yellow */
  --footer-dark: #363435;      /* Dark */
  --footer-light: #FEFEFE;     /* White */
  --footer-text-muted: rgba(254, 254, 254, 0.7);
}

.modern-footer {
  position: relative;
  background: var(--footer-dark);
  color: var(--footer-light);
  padding: 80px 0 30px;
  overflow: hidden;
  /* Red top border matches the topbar's bottom border */
  border-top: 4px solid var(--footer-primary);
}

/* Animated Background */
.footer-background {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  z-index: 0;
}

.gradient-orb {
  position: absolute;
  border-radius: 50%;
  filter: blur(80px);
  opacity: 0.15; /* Subtle opacity on the dark background */
  animation: float 20s ease-in-out infinite;
}

/* Orb 1: Red */
.orb-1 {
  width: 400px;
  height: 400px;
  background: var(--footer-primary);
  top: -200px;
  left: -100px;
  animation-delay: 0s;
}

/* Orb 2: Gold */
.orb-2 {
  width: 350px;
  height: 350px;
  background: var(--footer-secondary);
  bottom: -150px;
  right: 10%;
  animation-delay: 7s;
}

/* Orb 3: Red */
.orb-3 {
  width: 300px;
  height: 300px;
  background: var(--footer-primary);
  top: 50%;
  right: -100px;
  animation-delay: 14s;
}

@keyframes float {
  0%, 100% { transform: translate(0, 0) scale(1); }
  33% { transform: translate(30px, -30px) scale(1.1); }
  66% { transform: translate(-20px, 20px) scale(0.9); }
}

/* Content */
.modern-footer .container {
  position: relative;
  z-index: 1;
}

/* Fade In Animation */
.fade-in {
  animation: fadeInUp 0.8s ease-out forwards;
  opacity: 0;
}

@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}

/* Brand Section */
.footer-brand {
  padding-right: 20px;
}

.brand-title {
  font-size: 28px;
  font-weight: 700;
  color: var(--footer-light); /* White title */
  margin-bottom: 5px;
  line-height: 1.2;
}

.brand-subtitle {
  font-size: 14px;
  color: var(--footer-secondary); /* Gold Subtitle */
  margin-bottom: 0;
  font-weight: 500;
  letter-spacing: 0.5px;
  text-transform: uppercase;
}

.brand-tagline {
  font-size: 14px;
  color: var(--footer-text-muted);
  line-height: 1.8;
}

/* Social Links */
.social-links {
  display: flex;
  gap: 12px;
}

.social-icon {
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 10px;
  color: var(--footer-light);
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  backdrop-filter: blur(10px);
  text-decoration: none;
}

.social-icon:hover {
  background: var(--footer-primary); /* Red Background on hover */
  border-color: transparent;
  color: #fff;
  transform: translateY(-3px);
  box-shadow: 0 10px 25px rgba(236, 50, 55, 0.3);
}

/* Footer Links */
.footer-heading {
  font-size: 14px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-bottom: 20px;
  color: var(--footer-light);
  position: relative;
  padding-bottom: 10px;
}

.footer-heading::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  width: 30px;
  height: 3px;
  background: var(--footer-secondary); /* Gold underline */
  border-radius: 2px;
}

.links-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.links-list li {
  margin-bottom: 12px;
}

.links-list a {
  color: var(--footer-text-muted);
  text-decoration: none;
  font-size: 14px;
  transition: all 0.3s ease;
  display: inline-block;
  position: relative;
}

.links-list a::before {
  content: '';
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 0;
  height: 1px;
  background: var(--footer-primary); /* Red underline on hover */
  transition: width 0.3s ease;
}

.links-list a:hover {
  color: var(--footer-secondary); /* Turns Gold on hover */
  transform: translateX(5px);
}

.links-list a:hover::before {
  width: 100%;
}

/* Footer Bottom */
.footer-bottom {
  margin-top: 60px;
  padding-top: 30px;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  font-size: 14px;
  color: var(--footer-text-muted);
}

.footer-link {
  color: var(--footer-text-muted);
  text-decoration: none;
  transition: color 0.3s ease;
  font-size: 14px;
}

.footer-link:hover {
  color: var(--footer-secondary); /* Gold on hover */
}

/* Responsive */
@media (max-width: 991px) {
  .modern-footer {
    padding: 60px 0 30px;
  }

  .footer-brand {
    margin-bottom: 30px;
    padding-right: 0;
  }

  .brand-title {
    font-size: 24px;
  }
}

@media (max-width: 767px) {
  .footer-bottom {
    text-align: center;
  }

  .footer-bottom .col-md-6 {
    margin-bottom: 10px;
  }

  .orb-1, .orb-2, .orb-3 {
    width: 250px;
    height: 250px;
  }
}
</style>

<!-- JS for animations (can be removed if already in index.php) -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Check if this script hasn't been loaded already
  if (!window.footerObserver) {
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, observerOptions);

    document.querySelectorAll('.fade-in').forEach(el => {
      observer.observe(el);
    });

    window.footerObserver = true; // Mark as loaded
  }
});
</script>
