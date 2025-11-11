<!-- ==============================
     FLOATING ICONS COMPONENT
     ============================== -->

<!-- ===== Floating Buttons (Left) ===== -->
<div class="floating-buttons-left">
  <!-- WhatsApp -->
  <a href="https://wa.me/919876543210"
     target="_blank"
     class="btn btn-floating float-whatsapp shadow"
     title="Chat on WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>

  <!-- Call -->
  <a href="tel:+919876543210"
     class="btn btn-floating float-call shadow"
     title="Call Now">
    <i class="fas fa-phone-alt"></i>
  </a>
</div>

<!-- ===== Scroll to Top (Right) ===== -->
<button id="scrollTopBtn"
        class="btn btn-floating scroll-top-btn shadow"
        title="Back to Top">
  <i class="fas fa-arrow-up"></i>
</button>

<!-- ===== Floating Buttons CSS ===== -->
<style>
  :root {
    --primary-color: #EC3237;
    --secondary-color: #FBBB71;
    --gradient-primary: linear-gradient(135deg, #EC3237 0%, #C72C31 100%);
    --gradient-secondary: linear-gradient(135deg, #FBBB71 0%, #F9A952 100%);
  }

  /* Container for left side icons */
  .floating-buttons-left {
    position: fixed;
    bottom: 25px;
    left: 25px;
    z-index: 2000;
    display: flex;
    flex-direction: column;
    gap: 15px;
  }

  /* Common floating button style */
  .btn-floating {
    width: 52px;
    height: 52px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    color: white;
    transition: all 0.3s ease;
  }

  .btn-floating:hover {
    transform: translateY(-4px);
  }

  /* Specific button colors */
  .float-whatsapp {
    background: linear-gradient(135deg, #25d366, #128c7e);
  }

  .float-call {
    background: var(--gradient-primary);
  }

  .scroll-top-btn {
    position: fixed;
    bottom: 25px;
    right: 25px;
    background: var(--gradient-primary);
    color: white;
    width: 55px;
    height: 55px;
    border-radius: 50%;
    display: none; /* Hidden until scroll */
    justify-content: center;
    align-items: center;
    font-size: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
    z-index: 2000;
  }

  .scroll-top-btn:hover {
    transform: translateY(-4px);
    background: var(--gradient-secondary);
    color: #363435;
  }

  /* Responsive adjustments */
  @media (max-width: 992px) {
    .btn-floating {
      width: 48px;
      height: 48px;
      font-size: 20px;
    }

    .scroll-top-btn {
      width: 48px;
      height: 48px;
      font-size: 18px;
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

<!-- ===== Scroll To Top Script ===== -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const scrollBtn = document.getElementById("scrollTopBtn");

    // Show or hide the scroll button
    window.addEventListener("scroll", () => {
      if (window.scrollY > 250) {
        scrollBtn.style.display = "flex";
      } else {
        scrollBtn.style.display = "none";
      }
    });

    // Smooth scroll to top
    scrollBtn.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  });
</script>
