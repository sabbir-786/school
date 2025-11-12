<?php
/**
 * Hero Section with Slideshow - Manaj School
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manaj School - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>


  <!-- ===== HERO SLIDESHOW ===== -->
  <section id="home" class="hero-slideshow">
    <div class="hero-slide active">
      <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=1920" alt="Students Learning">
      <div class="hero-slide-overlay">
        <div class="container">
          <div class="hero-slide-content">
            <h1>Welcome to Manaj School</h1>
            <p>Empowering young minds with quality education and holistic development for a brighter tomorrow.</p>
            <a href="#admissions" class="btn btn-primary">Apply Now</a>
            <a href="#about" class="btn btn-outline-light">Learn More</a>
          </div>
        </div>
      </div>
    </div>

    <div class="hero-slide">
      <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=1920" alt="Sports Day">
      <div class="hero-slide-overlay">
        <div class="container">
          <div class="hero-slide-content">
            <h1>Beyond Academics</h1>
            <p>Fostering excellence in sports, arts, and extracurricular activities for well-rounded development.</p>
            <a href="#activities" class="btn btn-primary">View Activities</a>
            <a href="#achievements" class="btn btn-outline-light">Our Achievements</a>
          </div>
        </div>
      </div>
    </div>

    <div class="hero-slide">
      <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?w=1920" alt="Cultural Event">
      <div class="hero-slide-overlay">
        <div class="container">
          <div class="hero-slide-content">
            <h1>Celebrating Culture & Creativity</h1>
            <p>Nurturing talents and celebrating diversity through cultural programs and creative expression.</p>
            <a href="#events" class="btn btn-primary">Upcoming Events</a>
            <a href="#gallery" class="btn btn-outline-light">View Gallery</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Indicators -->
    <div class="hero-indicators">
      <span class="hero-indicator active" onclick="goToSlide(0)"></span>
      <span class="hero-indicator" onclick="goToSlide(1)"></span>
      <span class="hero-indicator" onclick="goToSlide(2)"></span>
    </div>
  </section>

  <!-- ===== HERO STYLES ===== -->
  <style>
    .hero-slideshow {
      position: relative;
      width: 100%;
      height: 100vh;
      min-height: 600px;
      overflow: hidden;
      background: #000;
    }
    .hero-slide {
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      opacity: 0;
      transition: opacity 0.8s ease-in-out;
    }
    .hero-slide.active { opacity: 1; }
    .hero-slide img {
      width: 100%; height: 100%;
      object-fit: cover;
    }
    .hero-slide-overlay {
      position: absolute; top: 0; left: 0;
      width: 100%; height: 100%;
      background: linear-gradient(to right, rgba(0,0,0,0.7), rgba(0,0,0,0.3));
      display: flex; align-items: center;
    }
    .hero-slide-content {
      color: white;
      max-width: 700px;
      padding: 0 20px;
      animation: slideInLeft 0.8s ease-out;
    }
    @keyframes slideInLeft {
      from {opacity: 0; transform: translateX(-50px);}
      to {opacity: 1; transform: translateX(0);}
    }
    .hero-slide-content h1 {
      font-size: 3.5rem; font-weight: 700; margin-bottom: 1.5rem;
    }
    .hero-slide-content p {
      font-size: 1.3rem; margin-bottom: 2rem; opacity: 0.95;
    }
    .hero-slide-content .btn-primary {
      background: var(--primary-color);
      border: none; padding: 1rem 2.5rem;
      font-size: 1.1rem; font-weight: 600;
      border-radius: 8px; transition: all 0.3s;
    }
    .hero-slide-content .btn-primary:hover {
      background: var(--secondary-color);
      transform: translateY(-2px);
    }
    .hero-slide-content .btn-outline-light {
      border: 2px solid white;
      padding: 1rem 2.5rem;
      font-size: 1.1rem;
      font-weight: 600;
      border-radius: 8px;
      margin-left: 1rem;
      transition: all 0.3s;
    }
    .hero-slide-content .btn-outline-light:hover {
      background: white; color: var(--primary-color);
    }
    .hero-indicators {
      position: absolute; bottom: 40px; left: 50%;
      transform: translateX(-50%);
      display: flex; gap: 12px; z-index: 10;
    }
    .hero-indicator {
      width: 14px; height: 14px;
      background: rgba(255,255,255,0.5);
      border: 2px solid white; border-radius: 50%;
      cursor: pointer; transition: all 0.4s;
    }
    .hero-indicator.active {
      background: white; width: 45px; border-radius: 7px;
    }
  </style>

  <!-- ===== HERO SCRIPT ===== -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.hero-slide');
    const indicators = document.querySelectorAll('.hero-indicator');
    function showSlide(n) {
      slides.forEach(slide => slide.classList.remove('active'));
      indicators.forEach(ind => ind.classList.remove('active'));
      currentSlide = (n + slides.length) % slides.length;
      slides[currentSlide].classList.add('active');
      indicators[currentSlide].classList.add('active');
    }
    setInterval(() => showSlide(currentSlide + 1), 5000);
  </script>
</body>
</html>
