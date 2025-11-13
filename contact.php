<?php
// PHP variables for header customization
$page_title = "Contact Us - Manaj School";
$page_description = "Get in touch with Manaj School for admissions, inquiries, or support.";

// Handle form submission
$formSubmitted = false;
$formError = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (!$name || !$email || !$message) {
        $formError = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $formError = 'Please enter a valid email address.';
    } else {
        // TODO: Handle actual form processing (send email or store in DB)
        // This is a demo success state.
        $formSubmitted = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php echo $page_title ?? 'Manaj School of Career Development'; ?></title>
    <meta name="description" content="<?php echo $page_description ?? 'Manaj School provides quality education, modern classrooms, and holistic development for students.'; ?>">

    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $page_description; ?>">
    <meta property="og:type" content="website">

    <link rel="icon" type="image/png" href="assets/images/logo.png">

    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* =========================================
           GLOBAL STYLING & COLOR PALETTE
           ========================================= */
        :root {
            --primary: #EC3237;   /* Red */
            --secondary: #FBBB71; /* Yellow */
            --dark: #363435;      /* Dark */
            --light: #FEFEFE;     /* White */
            --light-gray: #f8f9fa;
            --bs-body-font-family: 'Poppins', sans-serif;
            --bs-body-color: var(--dark);
        }

        body {
            background-color: var(--light-gray); /* Light gray bg for contrast */
        }

        .section-padding {
            padding: 80px 0;
        }

        /* Fade-in Animation */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .fade-in.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* =========================================
           1. CONTACT PAGE HEADER
           ========================================= */
        .page-header {
            position: relative;
            background: var(--dark);
            color: var(--light);
            padding: 140px 0 80px 0;
            overflow: hidden;
            border-bottom: 4px solid var(--primary);
        }
        .header-background {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            overflow: hidden; z-index: 0;
        }
        .gradient-orb {
            position: absolute; border-radius: 50%;
            filter: blur(80px); opacity: 0.15;
            animation: float 20s ease-in-out infinite;
        }
        .orb-1 {
            width: 400px; height: 400px; background: var(--primary);
            top: -200px; left: -100px; animation-delay: 0s;
        }
        .orb-2 {
            width: 350px; height: 350px; background: var(--secondary);
            bottom: -150px; right: 10%; animation-delay: 7s;
        }
        @keyframes float {
            0%, 100% { transform: translate(0, 0); }
            50% { transform: translate(40px, -40px); }
        }
        .page-header .container {
            position: relative;
            z-index: 1;
        }
        .page-header-title {
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            font-weight: 800;
        }
        .page-header-title .highlight {
            color: var(--secondary); /* Yellow */
        }
        .page-header-subtitle {
            font-size: 1.25rem;
            color: rgba(254, 254, 254, 0.8);
            max-width: 600px;
        }

        /* =========================================
           2. CONTACT INFO CARDS
           ========================================= */
        .contact-main-section {
            padding: 80px 0;
        }
        .contact-info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
            margin-bottom: 60px;
        }

        .info-card {
            background: var(--light);
            border-radius: 12px;
            padding: 32px;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }
        .info-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 4px;
            background: var(--primary); /* Red accent */
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }
        .info-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(236, 50, 55, 0.15); /* Red shadow */
        }
        .info-card:hover::before {
            transform: scaleX(1);
        }
        .info-icon {
            width: 70px;
            height: 70px;
            background: var(--primary); /* Red icon background */
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 28px;
            color: white;
            transition: transform 0.4s ease;
        }
        .info-card:hover .info-icon {
            transform: scale(1.1) rotate(5deg);
        }
        .info-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 12px;
        }
        .info-text {
            color: #6c757d;
            font-size: 15px;
            line-height: 1.6;
        }
        .info-text a {
            color: var(--primary);
            text-decoration: none;
            transition: color 0.3s ease;
            font-weight: 500;
        }
        .info-text a:hover {
            color: var(--secondary);
        }

        /* =========================================
           3. FORM & MAP
           ========================================= */
        .form-map-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        /* Contact Form */
        .contact-form-wrapper {
            background: var(--light);
            border-radius: 12px;
            padding: 32px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        }
        .form-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 12px;
        }
        .form-subtitle {
            color: #6c757d;
            font-size: 1rem;
            margin-bottom: 32px;
        }
        .form-group {
            margin-bottom: 24px;
        }
        .form-label {
            display: block;
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 8px;
            font-size: 14px;
        }
        .form-control {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
            background: #f9fafb;
            font-family: inherit;
        }
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            background: white;
            box-shadow: 0 0 0 4px rgba(236, 50, 55, 0.15);
        }
        textarea.form-control {
            resize: vertical;
            min-height: 140px;
        }

        .submit-btn {
            width: 100%;
            padding: 16px;
            background: var(--primary); /* Red */
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .submit-btn:hover {
            background-color: #c82a2f; /* Darker Red */
            transform: translateY(-3px);
            box-shadow: 0 12px 32px rgba(236, 50, 55, 0.3);
        }
        .submit-btn:disabled {
            background-color: #aaa;
            cursor: not-allowed;
        }

        /* Map Container */
        .map-wrapper {
            background: var(--light);
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
            min-height: 500px;
        }
        .map-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 20px;
        }
        .map-container {
            border-radius: 12px;
            overflow: hidden;
            height: 450px; /* Adjust as needed */
            border: 2px solid #e5e7eb;
            transition: all 0.3s ease;
        }
        .map-container:hover {
            border-color: var(--secondary); /* Yellow border on hover */
            box-shadow: 0 8px 24px rgba(251, 187, 113, 0.2);
        }
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .form-map-container {
                grid-template-columns: 1fr;
            }
            .map-wrapper {
                min-height: auto;
            }
        }
        @media (max-width: 767px) {
            .contact-info-grid {
                grid-template-columns: 1fr;
            }
            .contact-form-wrapper,
            .map-wrapper {
                padding: 24px;
            }
        }
    </style>
</head>

<body>

    <?php include 'includes/topbar.php'; ?>
    <?php include 'includes/navbar.php'; ?>

    <!-- =========================================
         1. CONTACT PAGE HEADER
         ========================================= -->
    <section class="page-header">
        <div class="header-background">
            <div class="gradient-orb orb-1"></div>
            <div class="gradient-orb orb-2"></div>
        </div>
        <div class="container text-center">
            <h1 class="page-header-title fade-in">Get In <span class="highlight">Touch</span></h1>
            <p class="page-header-subtitle mx-auto fade-in" style="animation-delay: 0.2s;">
                We're here to answer your questions and help you start your journey with Manaj School.
            </p>
        </div>
    </section>

    <!-- =========================================
         2. CONTACT INFO CARDS
         ========================================= -->
    <section class="contact-main-section">
        <div class="container">

            <div class="contact-info-grid">
                <!-- Card 1: Visit Us -->
                <div class="info-card fade-in">
                    <div class="info-icon"><i class="fa-solid fa-location-dot"></i></div>
                    <h3 class="info-title">Visit Us</h3>
                    <p class="info-text">
                        Manaj School, 123 Education Lane<br>
                        Bokaro Steel City, Jharkhand<br>
                        India, 827001
                    </p>
                </div>
                <!-- Card 2: Call Us -->
                <div class="info-card fade-in" style="animation-delay: 0.1s;">
                    <div class="info-icon"><i class="fa-solid fa-phone"></i></div>
                    <h3 class="info-title">Call Us</h3>
                    <p class="info-text">
                        <a href="tel:+919876543210">+91 98765 43210</a><br>
                        Mon - Sat: 9:00 AM - 5:00 PM
                    </p>
                </div>
                <!-- Card 3: Email Us -->
                <div class="info-card fade-in" style="animation-delay: 0.2s;">
                    <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
                    <h3 class="info-title">Email Us</h3>
                    <p class="info-text">
                        <a href="mailto:info@manajschool.edu.in">info@manajschool.edu.in</a><br>
                        We reply within 24 hours
                    </p>
                </div>
                <!-- Card 4: Office Hours -->
                <div class="info-card fade-in" style="animation-delay: 0.3s;">
                    <div class="info-icon"><i class="fa-solid fa-clock"></i></div>
                    <h3 class="info-title">Office Hours</h3>
                    <p class="info-text">
                        Monday - Friday: 9:00 AM - 5:00 PM<br>
                        Saturday: 9:00 AM - 1:00 PM
                    </p>
                </div>
            </div>

            <!-- =========================================
                 3. FORM & MAP
                 ========================================= -->
            <div class="form-map-container">

                <!-- Contact Form -->
                <div class="contact-form-wrapper fade-in" style="animation-delay: 0.4s;">
                    <h2 class="form-title">Send us a Message</h2>
                    <p class="form-subtitle">Fill out the form and we'll get back to you.</p>

                    <?php if ($formSubmitted): ?>
                        <div class="alert alert-success">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            Thank you for contacting us! We'll get back to you soon.
                        </div>
                    <?php endif; ?>
                    <?php if ($formError): ?>
                        <div class="alert alert-danger">
                            <i class="fa-solid fa-circle-xmark me-2"></i>
                            <?= htmlspecialchars($formError) ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!$formSubmitted): ?>
                        <form id="contactForm" method="post" action="contact.php" novalidate>
                            <div class="form-group">
                                <label class="form-label" for="name">Full Name *</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter your full name" required
                                    value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="email">Email Address *</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="your.email@example.com" required
                                    value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="phone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone"
                                    placeholder="+91 98765 43210"
                                    value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="subject">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject"
                                    placeholder="What is this regarding?"
                                    value="<?= htmlspecialchars($_POST['subject'] ?? '') ?>">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="message">Your Message *</label>
                                <textarea class="form-control" id="message" name="message"
                                    placeholder="Tell us how we can help you..."
                                    required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                            </div>

                            <button type="submit" class="submit-btn">
                                <i class="fa-solid fa-paper-plane me-2"></i> Send Message
                            </button>
                        </form>
                    <?php endif; ?>
                </div>

                <!-- Map -->
                <div class="map-wrapper fade-in" style="animation-delay: 0.5s;">
                    <h2 class="map-title">Find Us on Map</h2>
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116934.02012672322!2d86.06992794342617!3d23.66579161740833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f423070701049d%3A0x6629cef56e3001a1!2sBokaro%20Steel%20City%2C%20Jharkhand%2C%20India!5e0!3m2!1sen!2sus!4v1731502390000!5m2!1sen!2sus"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Animation Script -->
    <script>
    document.addEventListener("DOMContentLoaded", () => {
        // Scroll Animation
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 }); // Trigger when 10% visible

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Form loading state
        const form = document.getElementById('contactForm');
        if (form) {
            form.addEventListener('submit', function(e) {
                // Basic client-side check
                if (form.checkValidity()) {
                    const submitBtn = form.querySelector('.submit-btn');
                    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Sending...';
                    submitBtn.disabled = true;
                } else {
                    // If form is invalid, prevent submission and let Bootstrap styles handle it
                    e.preventDefault();
                    e.stopPropagation();
                    form.classList.add('was-validated');
                }
            });
        }
    });
    </script>

</body>
</html>
