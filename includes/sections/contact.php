<?php
// contact.php — Modern Split Contact Section with Map
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact Us - Manaj School of Career Development</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <style>
    :root {
      --primary-color: #EC3237;
      --secondary-color: #FBBB71;
      --dark-color: #1e1e1e;
      --light-color: #ffffff;
      --gradient-primary: linear-gradient(135deg, #EC3237, #C72C31);
      --gradient-secondary: linear-gradient(135deg, #FBBB71, #F9A952);
    }

    body {
      font-family: 'Inter', sans-serif;
      background: var(--light-color);
      color: var(--dark-color);
    }

    /* === Section Wrapper === */
    .contact-section {
      width: 100%;
      display: flex;
      flex-wrap: wrap;
      min-height: 100vh;
      background: linear-gradient(120deg, #fff 60%, #fff6f6 100%);
    }

    /* === Left Side (Info + Map) === */
    .contact-info {
      flex: 1;
      background: var(--gradient-primary);
      color: #fff;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 60px;
      position: relative;
      overflow: hidden;
    }

    .contact-info::after {
      content: '';
      position: absolute;
      inset: 0;
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
    }

    .contact-info-content {
      position: relative;
      z-index: 2;
      max-width: 500px;
    }

    .contact-info h2 {
      font-weight: 800;
      font-size: 2.4rem;
      margin-bottom: 20px;
    }

    .contact-info p {
      font-size: 1.1rem;
      opacity: 0.9;
      margin-bottom: 30px;
    }

    .info-item {
      margin-bottom: 15px;
      display: flex;
      align-items: center;
    }

    .info-item i {
      background: rgba(255, 255, 255, 0.15);
      padding: 14px;
      border-radius: 50%;
      margin-right: 15px;
      font-size: 1.2rem;
    }

    /* === Embedded Map === */
    .map-container {
      position: relative;
      z-index: 2;
      margin-top: 30px;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
    }

    .map-container iframe {
      width: 100%;
      height: 250px;
      border: 0;
      display: block;
    }

    .map-container iframe:hover {
      filter: brightness(1.05);
      transition: filter 0.3s ease;
    }

    /* === Right Side (Form) === */
    .contact-form-side {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #fff;
      padding: 60px 40px;
    }

    .contact-form-container {
      width: 100%;
      max-width: 600px;
      background: rgba(255, 255, 255, 0.85);
      border-radius: 20px;
      box-shadow: 0 15px 45px rgba(0, 0, 0, 0.08);
      padding: 40px 35px;
      backdrop-filter: blur(8px);
      transition: all 0.3s ease;
    }

    .contact-form-container:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 50px rgba(236, 50, 55, 0.15);
    }

    .contact-form h3 {
      font-weight: 700;
      margin-bottom: 20px;
      text-align: center;
    }

    .contact-form input,
    .contact-form textarea {
      border-radius: 12px;
      border: 1.5px solid #ddd;
      padding: 12px 16px;
      transition: all 0.3s ease;
      font-size: 16px;
      font-family: 'Inter', sans-serif;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 8px rgba(236, 50, 55, 0.3);
    }

    .btn-submit {
      background: var(--gradient-primary);
      color: #fff;
      font-weight: 700;
      border: none;
      border-radius: 40px;
      padding: 14px;
      transition: all 0.3s ease;
    }

    .btn-submit:hover {
      background: var(--gradient-secondary);
      color: var(--dark-color);
      transform: translateY(-3px);
      box-shadow: 0 8px 30px rgba(251, 187, 113, 0.6);
    }

    /* === Responsive === */
    @media (max-width: 992px) {
      .contact-section {
        flex-direction: column;
      }

      .contact-info,
      .contact-form-side {
        flex: unset;
        width: 100%;
      }

      .contact-info {
        padding: 50px 30px;
        text-align: center;
      }

      .info-item {
        justify-content: center;
      }

      .map-container {
        height: 220px;
      }
    }
  </style>
</head>
<body>

<section id="contact" class="contact-section">
  <!-- Left: School Info + Map -->
  <div class="contact-info" data-aos="fade-right">
    <div class="contact-info-content">
      <h2>Visit Our School</h2>
      <p>We’d love to connect with you. Visit us, call us, or drop a message — we’re here to help every student achieve their dreams.</p>

      <div class="info-item">
        <i class="fas fa-map-marker-alt"></i>
        <span>Main Road, Chas, Jharkhand - 827013</span>
      </div>
      <div class="info-item">
        <i class="fas fa-phone"></i>
        <span>+91 9876 543 210</span>
      </div>
      <div class="info-item">
        <i class="fas fa-envelope"></i>
        <span>info@manajschool.edu.in</span>
      </div>

      <!-- Google Map -->
      <div class="map-container" data-aos="fade-up" data-aos-delay="200">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.5336343341305!2d85.36779771543962!3d23.66992098467079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4eecba7f365ab%3A0xdee1283c8de17a85!2sChas%20Jharia!5e0!3m2!1sen!2sin!4v1699433979979!5m2!1sen!2sin"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="Manaj School Location"
        ></iframe>
      </div>
    </div>
  </div>

  <!-- Right: Contact Form -->
  <div class="contact-form-side" data-aos="fade-left">
    <div class="contact-form-container">
      <form class="contact-form" action="send_contact.php" method="POST" novalidate>
        <h3>Send Us a Message</h3>

        <div class="mb-3">
          <input type="text" name="name" class="form-control" placeholder="Full Name *" required />
        </div>

        <div class="mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email Address *" required />
        </div>

        <div class="mb-3">
          <input type="tel" name="phone" class="form-control" placeholder="Phone Number" />
        </div>

        <div class="mb-3">
          <textarea name="message" rows="5" class="form-control" placeholder="Your Message *" required></textarea>
        </div>

        <div class="d-grid">
          <button type="submit" class="btn btn-submit">Send Message</button>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({ duration: 900, once: true, offset: 120 });
</script>

</body>
</html>
