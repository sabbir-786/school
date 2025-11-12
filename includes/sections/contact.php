
<?php
/**
 * Contact Section - Manaj School of Career Development
 * Clean, responsive split layout with embedded map
 * Consistent with About section design
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact Us - Manaj School of Career Development</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <style>
    :root {
      --primary-color: #EC3237;
      --secondary-color: #FBBB71;
      --dark-color: #1a1a1a;
      --light-color: #ffffff;
      --gradient-primary: linear-gradient(135deg, #EC3237, #C72C31);
      --gradient-secondary: linear-gradient(135deg, #FBBB71, #F9A952);
    }

    body {
      font-family: "Poppins", sans-serif;
      overflow-x: hidden;
      background: radial-gradient(circle at top left, #fff, #f9f9f9);
    }

    /* ================= Contact Section ================= */
    .contact-section {
      padding: 80px 0;
      overflow-x: clip;
    }

    .contact-content h6 {
      text-transform: uppercase;
      font-weight: 700;
      color: var(--primary-color);
      letter-spacing: 1px;
      margin-bottom: 10px;
    }

    .contact-content h2 {
      font-size: 38px;
      font-weight: 700;
      color: var(--dark-color);
      margin-bottom: 25px;
    }

    .contact-content .highlight {
      background: var(--gradient-primary);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .contact-info {
      margin-top: 25px;
    }

    .contact-info i {
      font-size: 22px;
      color: var(--primary-color);
      margin-right: 10px;
    }

    .contact-info p {
      margin: 5px 0;
      color: #555;
    }

    /* ================= Contact Form ================= */
    .contact-form {
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(236, 50, 55, 0.1);
      padding: 40px;
    }

    .form-control {
      border-radius: 10px;
      padding: 12px 15px;
      border: 1px solid rgba(0, 0, 0, 0.1);
      box-shadow: none;
    }

    .form-control:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 0 0.2rem rgba(236, 50, 55, 0.15);
    }

    .btn-primary {
      background: var(--gradient-primary);
      border: none;
      border-radius: 10px;
      padding: 12px 25px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(236, 50, 55, 0.3);
    }

    /* ================= Map ================= */
    .map-container {
      border-radius: 15px;
      overflow: hidden;
      height: 100%;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    iframe {
      width: 100%;
      height: 100%;
      border: 0;
    }

    /* Responsive */
    @media (max-width: 992px) {
      .contact-content h2 { font-size: 32px; }
      .contact-form { margin-top: 30px; }
    }

    @media (max-width: 576px) {
      .contact-content h2 { font-size: 28px; }
      .contact-form { padding: 25px; }
    }
  </style>
</head>

<body>

<!-- ================= Contact Section ================= -->
<section id="contact" class="contact-section">
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- Left: Contact Info & Map -->
      <div class="col-lg-6" data-aos="fade-right">
        <div class="contact-content">
          <h6><span class="line"></span>Contact Us</h6>
          <h2>Get in <span class="highlight">Touch</span> With Us</h2>
          <p class="text-muted">
            We’re here to answer your questions and help you start your learning journey with <strong>Manaj School of Career Development</strong>.
          </p>

          <div class="contact-info mt-4">
            <p><i class="fas fa-map-marker-alt"></i> 123 Knowledge Lane, Mumbai, India</p>
            <p><i class="fas fa-phone"></i> +91 98765 43210</p>
            <p><i class="fas fa-envelope"></i> info@manajschool.edu.in</p>
          </div>

          <!-- Map -->
          <div class="map-container mt-4">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.0508856857927!2d72.877655875949!3d19.07146085226302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c82f4cafe77d%3A0x94096caa4d1963c4!2sMumbai%20Educational%20Trust!5e0!3m2!1sen!2sin!4v1701343324915"
              allowfullscreen=""
              loading="lazy">
            </iframe>
          </div>
        </div>
      </div>

      <!-- Right: Contact Form -->
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
        <div class="contact-form">
          <form action="send-message.php" method="POST">
            <div class="mb-3">
              <label class="form-label fw-semibold">Full Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
              <label class="form-label fw-semibold">Email Address</label>
              <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
              <label class="form-label fw-semibold">Phone Number</label>
              <input type="tel" class="form-control" name="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="mb-3">
              <label class="form-label fw-semibold">Message</label>
              <textarea class="form-control" name="message" rows="4" placeholder="Write your message..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">
              <i class="fas fa-paper-plane me-2"></i> Send Message
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 900,
    once: true,
    offset: 120
  });
</script>
</body>
</html>
