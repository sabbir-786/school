<?php
/**
 * Manaj School of Career Development
 * Main Entry File (index.php)
 * Author: Chahat
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manaj School of Career Development</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Global CSS (optional external file) -->
  <link rel="stylesheet" href="assets/css/global.css">

  <style>
    body {
      font-family: 'Inter', sans-serif;
      color: #363435;
      background-color: #FEFEFE;
      overflow-x: hidden;
    }

    /* Optional: add global section padding */
    section {
      padding: 80px 0;
    }
  </style>
</head>

<body>

  <!-- =========================
       TOP HEADER + NAVIGATION
       ========================= -->
  <?php include 'includes/header.php'; ?>
  <?php include 'includes/nav.php'; ?>

  <!-- =========================
       MAIN PAGE SECTIONS
       ========================= -->
  <main>
    <?php include 'includes/sections/hero.php'; ?>
    <?php include 'includes/sections/about.php'; ?>
    <?php include 'includes/sections/faculty.php'; ?>
    <?php include 'includes/sections/gallery.php'; ?>
    <?php include 'includes/sections/contact.php'; ?>
  </main>

  <!-- =========================
       ADMISSION FORM MODAL
       ========================= -->
  <?php include 'includes/sections/admission.php'; ?>

  <!-- =========================
       FOOTER SECTION
       ========================= -->
  <?php include 'includes/footer.php'; ?>

  <!-- =========================
       FLOATING ICONS (WhatsApp, Call, Scroll Top)
       ========================= -->
  <?php include 'includes/float.php'; ?>

  <!-- =========================
       JS FILES
       ========================= -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      once: true,
      offset: 100
    });
  </script>
</body>
</html>
