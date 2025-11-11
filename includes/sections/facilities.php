<?php
/**
 * Facilities Section - Manaj School
 * Designed to match the school's color theme and aesthetic
 */
?>

<section id="facilities" class="section bg-light">
  <div class="container">
    <!-- Section Title -->
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="section-title">Our Facilities</h2>
      <p class="section-subtitle">Providing an environment for holistic learning and growth</p>
    </div>

    <div class="row g-4">
      <!-- Facility 1: Smart Classrooms -->
      <div class="col-md-6 col-lg-4" data-aos="fade-up">
        <div class="facility-card text-center p-4 h-100">
          <div class="facility-icon mb-3">
            <i class="fas fa-chalkboard-teacher"></i>
          </div>
          <h5 class="facility-title mb-2">Smart Classrooms</h5>
          <p class="facility-text">Equipped with digital boards and interactive technology to enhance the learning experience.</p>
        </div>
      </div>

      <!-- Facility 2: Science Laboratories -->
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="facility-card text-center p-4 h-100">
          <div class="facility-icon mb-3">
            <i class="fas fa-flask"></i>
          </div>
          <h5 class="facility-title mb-2">Science Laboratories</h5>
          <p class="facility-text">State-of-the-art labs for Physics, Chemistry, and Biology that encourage hands-on learning.</p>
        </div>
      </div>

      <!-- Facility 3: Computer Lab -->
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="facility-card text-center p-4 h-100">
          <div class="facility-icon mb-3">
            <i class="fas fa-desktop"></i>
          </div>
          <h5 class="facility-title mb-2">Computer Lab</h5>
          <p class="facility-text">Modern computer lab with high-speed internet access and updated learning software.</p>
        </div>
      </div>

      <!-- Facility 4: Library -->
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="facility-card text-center p-4 h-100">
          <div class="facility-icon mb-3">
            <i class="fas fa-book-reader"></i>
          </div>
          <h5 class="facility-title mb-2">Library</h5>
          <p class="facility-text">A vast collection of books, journals, and digital resources to inspire a love for learning.</p>
        </div>
      </div>

      <!-- Facility 5: Sports Ground -->
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
        <div class="facility-card text-center p-4 h-100">
          <div class="facility-icon mb-3">
            <i class="fas fa-football-ball"></i>
          </div>
          <h5 class="facility-title mb-2">Sports Ground</h5>
          <p class="facility-text">Large sports complex encouraging physical fitness, teamwork, and healthy competition.</p>
        </div>
      </div>

      <!-- Facility 6: Art & Music Room -->
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
        <div class="facility-card text-center p-4 h-100">
          <div class="facility-icon mb-3">
            <i class="fas fa-palette"></i>
          </div>
          <h5 class="facility-title mb-2">Art & Music Room</h5>
          <p class="facility-text">Dedicated spaces for creativity — where students express themselves through art and music.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  :root {
    --primary-color: #EC3237;
    --secondary-color: #FBBB71;
    --dark-color: #363435;
    --light-color: #FEFEFE;
    --gradient-primary: linear-gradient(135deg, #EC3237 0%, #C72C31 100%);
    --gradient-secondary: linear-gradient(135deg, #FBBB71 0%, #F9A952 100%);
  }

  /* Facilities Section */
  #facilities {
    background: var(--light-color);
    padding: 80px 0;
  }

  .facility-card {
    background: white;
    border-radius: 20px;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
  }

  .facility-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 35px rgba(236, 50, 55, 0.15);
  }

  .facility-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto;
    background: var(--gradient-primary);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    box-shadow: 0 8px 20px rgba(236, 50, 55, 0.3);
  }

  .facility-title {
    color: var(--primary-color);
    font-weight: 700;
    margin-top: 10px;
  }

  .facility-text {
    color: #555;
    font-size: 15px;
    line-height: 1.6;
  }

  .section-title {
    font-weight: 800;
    font-size: 40px;
    color: var(--dark-color);
    position: relative;
    display: inline-block;
  }

  .section-title:after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: var(--gradient-secondary);
    border-radius: 2px;
  }

  .section-subtitle {
    color: #666;
    font-size: 17px;
    margin-top: 10px;
  }

  @media (max-width: 768px) {
    .facility-icon {
      width: 70px;
      height: 70px;
      font-size: 28px;
    }

    .facility-title {
      font-size: 18px;
    }

    .section-title {
      font-size: 32px;
    }
  }
</style>
