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
      color: var(--dark-color);
      background-color: var(--light-color);
      overflow-x: hidden;
    }

    /* ===== FLOATING BUTTONS ===== */
    .floating-buttons-left {
      position: fixed;
      bottom: 25px;
      left: 25px;
      z-index: 2000;
      display: flex;
      flex-direction: column;
      gap: 15px;
      transition: all 0.4s ease;
    }

    .float-btn-square {
      width: 52px;
      height: 52px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 22px;
      box-shadow: 0 6px 25px rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease;
      border: none;
    }

    .float-btn-square:hover {
      transform: translateY(-4px);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .float-whatsapp {
      background: linear-gradient(135deg, #25d366, #128c7e);
    }

    .float-call {
      background: var(--gradient-primary);
    }

    /* ===== RIGHT SCROLL TO TOP BUTTON ===== */
    .scroll-top-btn {
      position: fixed;
      bottom: 25px;
      right: 25px;
      width: 55px;
      height: 55px;
      border-radius: 12px;
      background: var(--gradient-primary);
      color: white;
      font-size: 22px;
      border: none;
      outline: none;
      display: none;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      box-shadow: 0 6px 25px rgba(0, 0, 0, 0.25);
      transition: all 0.3s ease;
      z-index: 2000;
    }

    .scroll-top-btn:hover {
      transform: translateY(-4px);
      background: var(--gradient-secondary);
      color: var(--dark-color);
      box-shadow: 0 10px 35px rgba(0, 0, 0, 0.3);
    }

    /* ===== HIDDEN STATE ===== */
    .hide-floating {
      transform: translateY(100px);
      opacity: 0;
      pointer-events: none;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 992px) {
      .float-btn-square {
        width: 48px;
        height: 48px;
        font-size: 20px;
        border-radius: 10px;
      }

      .scroll-top-btn {
        width: 48px;
        height: 48px;
        font-size: 18px;
        border-radius: 10px;
      }

      .floating-buttons-left {
        bottom: 20px;
        left: 20px;
        gap: 10px;
      }
    }

    @media (max-width: 576px) {
      .floating-buttons-left {
        bottom: 15px;
        left: 15px;
      }

      .scroll-top-btn {
        bottom: 15px;
        right: 15px;
      }
    }
  </style>
</head>

<body>
  <!-- HEADER + NAVIGATION -->
   <?php include 'includes/header.php'; ?>
   <?php include 'includes/nav.php'; ?>

<!-- PAGE SECTIONS -->
  <?php include 'includes/sections/hero.php'; ?>
  <?php include 'includes/sections/about.php'; ?>
  <?php include 'includes/sections/facilities.php'; ?>
  <?php include 'includes/sections/gallery.php'; ?>
  <?php include 'includes/sections/contact.php'; ?>

  <!-- FOOTER -->
  <?php include 'includes/footer.php'; ?>

  <!-- ADMISSION FORM (MODAL) -->
  <?php include 'includes/sections/admission.php'; ?>

  <!-- ===== FLOATING BUTTONS (LEFT) ===== -->
  <div class="floating-buttons-left">
    <!-- WhatsApp -->
    <a href="https://wa.me/919876543210" target="_blank" class="float-btn-square float-whatsapp" title="Chat on WhatsApp">
      <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Call -->
    <a href="tel:+919876543210" class="float-btn-square float-call" title="Call Now">
      <i class="fas fa-phone-alt"></i>
    </a>
  </div>

  <!-- ===== SCROLL TO TOP BUTTON (RIGHT) ===== -->
  <button id="scrollTopBtn" class="scroll-top-btn" title="Back to Top">
    <i class="fas fa-arrow-up"></i>
  </button>

  <!-- ====== SCRIPTS ====== -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    // Initialize AOS
    AOS.init({
      duration: 800,
      once: true,
      offset: 100
    });

    // Navbar scroll effect
    window.addEventListener('scroll', function () {
      const nav = document.querySelector('.main-nav');
      if (window.scrollY > 50) nav.classList.add('scrolled');
      else nav.classList.remove('scrolled');
    });

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          e.preventDefault();
          const offset = 80;
          window.scrollTo({ top: target.offsetTop - offset, behavior: 'smooth' });
        }
      });
    });

    // Active link highlight
    const sections = document.querySelectorAll('section[id]');
    window.addEventListener('scroll', () => {
      let current = '';
      sections.forEach(section => {
        const sectionTop = section.offsetTop;
        if (scrollY >= (sectionTop - 100)) current = section.getAttribute('id');
      });
      document.querySelectorAll('.nav-link').forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href').includes(current)) link.classList.add('active');
      });
    });

    // Floating buttons scroll behavior (with stable detection)
    const scrollTopBtn = document.getElementById("scrollTopBtn");
    const leftButtons = document.querySelector(".floating-buttons-left");
    let lastScrollTop = 0;
    let ticking = false;

    window.addEventListener("scroll", () => {
      if (!ticking) {
        window.requestAnimationFrame(() => {
          const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

          // Show scroll-top button after 300px
          if (currentScroll > 300) {
            scrollTopBtn.style.display = "flex";
          } else {
            scrollTopBtn.style.display = "none";
          }

          // Detect scroll direction
          if (currentScroll > lastScrollTop + 10) {
            // Scrolling down
            leftButtons.classList.add("hide-floating");
            scrollTopBtn.classList.add("hide-floating");
          } else if (currentScroll < lastScrollTop - 10) {
            // Scrolling up
            leftButtons.classList.remove("hide-floating");
            scrollTopBtn.classList.remove("hide-floating");
          }

          lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
          ticking = false;
        });

        ticking = true;
      }
    });

    // Scroll-to-top action
    scrollTopBtn.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  </script>
</body>
</html>
