<?php
/**
 * About Section - Manaj School of Career Development
 * Modern Framer/WordPress Inspired UI + Layered Images + AOS Animations
 */
?>
<section id="about" class="about-section position-relative py-5">
  <div class="container py-5">
    <div class="row align-items-center">

      <!-- Left Side: Layered Images -->
      <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
        <div class="about-image-stack position-relative">
          <img src="images/school.webp" alt="Manaj School Campus" class="about-img img-main rounded-4 shadow-lg">
          <img src="images/play.webp" alt="Classroom" class="about-img img-secondary rounded-4 shadow-lg">
        </div>
      </div>

      <!-- Right Side: Content -->
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
        <div class="about-content">
          <h6 class="about-subtitle text-uppercase fw-bold mb-3">
            <span class="line"></span>About Us
          </h6>
          <h2 class="about-title fw-bold mb-3">
            Building <span class="highlight">Tomorrow’s Leaders</span> Today
          </h2>
          <p class="lead text-muted">
            At <strong>Manaj School of Career Development</strong>, we believe in transforming education into a journey of discovery and growth.
            Our mission is to empower students to achieve academic excellence while nurturing creativity and moral values.
          </p>
          <p>
            Since our establishment in <strong>1990</strong>, we’ve inspired thousands of learners to lead with integrity, innovation, and empathy.
            With our <em>modern classrooms</em> and <em>dedicated teachers</em>, every student is guided to realize their potential.
          </p>

          <!-- Highlights -->
          <div class="row mt-4">
            <div class="col-sm-6 mb-3" data-aos="fade-up" data-aos-delay="200">
              <div class="about-feature">
                <i class="fas fa-school"></i>
                <h6>CBSE Affiliated</h6>
                <p>High academic standards aligned with CBSE curriculum.</p>
              </div>
            </div>
            <div class="col-sm-6 mb-3" data-aos="fade-up" data-aos-delay="300">
              <div class="about-feature">
                <i class="fas fa-chalkboard-teacher"></i>
                <h6>Experienced Faculty</h6>
                <p>Dedicated educators committed to personalized learning.</p>
              </div>
            </div>
            <div class="col-sm-6 mb-3" data-aos="fade-up" data-aos-delay="400">
              <div class="about-feature">
                <i class="fas fa-laptop-code"></i>
                <h6>Smart Classrooms</h6>
                <p>Interactive digital learning with modern technology.</p>
              </div>
            </div>
            <div class="col-sm-6 mb-3" data-aos="fade-up" data-aos-delay="500">
              <div class="about-feature">
                <i class="fas fa-running"></i>
                <h6>Sports & Activities</h6>
                <p>Balanced growth through physical and cultural programs.</p>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= CSS ================= -->
<style>
  :root {
    --primary-color: #EC3237;
    --secondary-color: #FBBB71;
    --dark-color: #1a1a1a;
    --light-color: #ffffff;
    --gradient-primary: linear-gradient(135deg, #EC3237, #C72C31);
    --gradient-secondary: linear-gradient(135deg, #FBBB71, #F9A952);
  }

  .about-section {
    background: radial-gradient(circle at top left, #fff, #f9f9f9);
    overflow: hidden;
    position: relative;
  }

  /* Layered Images */
  .about-image-stack {
    position: relative;
    width: 100%;
    height: 550px;
  }

  .about-img {
    position: absolute;
    border-radius: 20px;
    transition: all 0.5s ease;
  }

  .img-main {
    width: 80%;
    top: 0;
    left: 0;
    z-index: 3;
  }

  .img-secondary {
    width: 60%;
    bottom: -30px;
    right: 0;
    transform: rotate(4deg);
    z-index: 2;
  }

  .img-tertiary {
    width: 55%;
    top: 60%;
    left: 20%;
    transform: rotate(-4deg);
    z-index: 1;
  }

  .about-image-stack:hover .img-main {
    transform: scale(1.05);
  }

  .about-image-stack:hover .img-secondary,
  .about-image-stack:hover .img-tertiary {
    transform: translateY(-5px) rotate(0deg);
  }


  /* Content */
  .about-content .about-subtitle .line {
    display: inline-block;
    width: 35px;
    height: 4px;
    background: var(--primary-color);
    border-radius: 4px;
    margin-right: 10px;
  }

  .about-title {
    font-size: 38px;
    line-height: 1.3;
    color: var(--dark-color);
  }

  .about-title .highlight {
    background: var(--gradient-primary);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  .lead {
    font-size: 17px;
    color: #555;
  }

  /* Features */
  .about-feature {
    background: rgba(255, 255, 255, 0.9);
    border: 1px solid rgba(236, 50, 55, 0.1);
    border-radius: 15px;
    padding: 20px;
    transition: all 0.3s ease;
  }

  .about-feature i {
    font-size: 28px;
    color: var(--primary-color);
    margin-bottom: 10px;
  }

  .about-feature h6 {
    font-weight: 700;
    color: var(--dark-color);
  }

  .about-feature:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(236, 50, 55, 0.15);
  }

  /* Button */
  .btn-primary {
    background: var(--gradient-primary);
    border: none;
    border-radius: 30px;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .btn-primary:hover {
    background: var(--gradient-secondary);
    color: var(--dark-color);
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(236, 50, 55, 0.3);
  }

  /* Responsive */
  @media (max-width: 992px) {
    .about-title {
      font-size: 30px;
    }
    .about-image-stack {
      height: 350px;
    }
    .img-secondary, .img-tertiary {
      display: none;
    }
  }

  @media (max-width: 576px) {
    .floating-badge {
      font-size: 14px;
      padding: 8px 15px;
    }
  }
</style>

<!-- ================= JS (AOS Animations) ================= -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 900,
    once: true,
    offset: 120
  });
</script>
