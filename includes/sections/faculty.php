<?php
/**
 * Faculty Section - Meet Our Instructors (Framer / WordPress Style)
 * Modern UI with animation, hover effects, and elegant design
 * Bootstrap 5 | Font Awesome 6
 */
?>

<section id="faculty" class="py-5 bg-light position-relative overflow-hidden">
  <div class="container">

    <!-- Section Heading -->
    <div class="text-center mb-5" data-aos="fade-up">
      <p class="text-uppercase text-primary fw-semibold letter-spacing-sm mb-2">Instructors</p>
      <h2 class="fw-bold display-6 mb-3">Meet Our Instructors</h2>
      <p class="text-muted mx-auto" style="max-width: 600px;">
        Learn from passionate educators and industry professionals dedicated to your growth and success.
      </p>
    </div>

    <!-- Instructors Grid -->
    <div class="row g-4 justify-content-center">

      <!-- Instructor Card -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100 instructor-card">
          <div class="position-relative">
            <img src="images/instructor1.jpg" class="card-img-top" alt="Instructor 1">
            <div class="social-overlay d-flex justify-content-center align-items-center gap-3">
              <a href="#" class="text-white fs-5"><i class="fab fa-twitter"></i></a>
              <a href="#" class="text-white fs-5"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="text-white fs-5"><i class="fab fa-linkedin-in"></i></a>
              <a href="#" class="text-white fs-5"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          <div class="card-body py-4">
            <h5 class="fw-bold mb-1">Instructor Name</h5>
            <p class="text-muted mb-0">Web Design & Development</p>
          </div>
        </div>
      </div>

      <!-- Instructor Card -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100 instructor-card">
          <div class="position-relative">
            <img src="images/instructor2.jpg" class="card-img-top" alt="Instructor 2">
            <div class="social-overlay d-flex justify-content-center align-items-center gap-3">
              <a href="#" class="text-white fs-5"><i class="fab fa-twitter"></i></a>
              <a href="#" class="text-white fs-5"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="text-white fs-5"><i class="fab fa-linkedin-in"></i></a>
              <a href="#" class="text-white fs-5"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          <div class="card-body py-4">
            <h5 class="fw-bold mb-1">Instructor Name</h5>
            <p class="text-muted mb-0">Digital Marketing</p>
          </div>
        </div>
      </div>

      <!-- Instructor Card -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100 instructor-card">
          <div class="position-relative">
            <img src="images/instructor3.jpg" class="card-img-top" alt="Instructor 3">
            <div class="social-overlay d-flex justify-content-center align-items-center gap-3">
              <a href="#" class="text-white fs-5"><i class="fab fa-twitter"></i></a>
              <a href="#" class="text-white fs-5"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="text-white fs-5"><i class="fab fa-linkedin-in"></i></a>
              <a href="#" class="text-white fs-5"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          <div class="card-body py-4">
            <h5 class="fw-bold mb-1">Instructor Name</h5>
            <p class="text-muted mb-0">App Development</p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- Custom CSS -->
<style>
  .instructor-card {
    transition: transform 0.4s ease, box-shadow 0.4s ease;
  }
  .instructor-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
  }
  .instructor-card img {
    width: 100%;
    height: 350px;
    object-fit: cover;
    transition: transform 0.4s ease;
  }
  .instructor-card:hover img {
    transform: scale(1.05);
  }
  .social-overlay {
    position: absolute;
    top: 0; left: 0;
    height: 100%; width: 100%;
    background: rgba(0, 0, 0, 0.55);
    opacity: 0;
    transition: opacity 0.4s ease;
  }
  .instructor-card:hover .social-overlay {
    opacity: 1;
  }
  .letter-spacing-sm {
    letter-spacing: 2px;
  }
</style>

<!-- Dependencies -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script>
  AOS.init({
    duration: 1000,
    once: true
  });
</script>
