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
    <meta name="description" content="<?php echo $page_description; ?>">

    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $page_description; ?>">
    <meta property="og:type" content="website">

    <link rel="icon" type="image/png" href="assets/images/logo.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* =========================================
           RESET & VARIABLES (Matching Index.php)
           ========================================= */
        :root {
            /* --- COLORS --- */
            --primary: #EC3237;   /* Red */
            --primary-dark: #c82a2f;
            --secondary: #01334d; /* Dark Blue */
            --accent: #FBBB71;    /* Yellow/Gold */
            --dark: #363435;      /* Black/Dark Grey */
            --light: #FEFEFE;     /* White */
            --light-gray: #f8f9fa;
            --text-grey: #555555;
            --text-light: #f0f0f0;

            /* --- FONTS --- */
            --font-heading: 'Merriweather', serif;
            --font-body: 'Poppins', sans-serif;

            --max-width: 1200px;
            --transition: all 0.3s ease;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: var(--font-body);
            background-color: var(--light-gray);
            color: var(--text-grey);
            font-size: 16px;
            line-height: 1.7;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: var(--font-heading);
            color: var(--secondary);
            font-weight: 700;
            margin-bottom: 15px;
            line-height: 1.3;
        }

        p { margin-bottom: 1.5rem; }
        a { text-decoration: none; color: inherit; transition: var(--transition); }
        ul { list-style: none; }

        /* Utilities */
        .container {
            max-width: var(--max-width);
            margin: 0 auto;
            padding: 0 20px;
        }
        .section-padding { padding: 80px 0; }

        /* =========================================
           1. PAGE HEADER & BREADCRUMBS
           ========================================= */
        .page-header {
            background: var(--dark);
            color: var(--light);
            padding: 120px 0 60px 0;
            text-align: center;
            border-bottom: 4px solid var(--primary);
            position: relative;
        }

        .page-header h1 {
            font-size: 3.5rem;
            color: var(--light);
            margin-bottom: 10px;
        }

        .page-header h1 .highlight { color: var(--accent); font-style: italic; }

        /* Breadcrumbs Style */
        .breadcrumb {
            display: flex;
            justify-content: center;
            gap: 10px;
            font-size: 0.95rem;
            color: rgba(255,255,255,0.7);
            margin-top: 10px;
        }
        .breadcrumb li a:hover { color: var(--accent); }
        .breadcrumb li.active { color: var(--accent); font-weight: 600; }
        .breadcrumb li:not(:last-child)::after {
            content: '/';
            margin-left: 10px;
            color: rgba(255,255,255,0.4);
        }

        /* =========================================
           2. MAIN CONTENT LAYOUT (Form Left / Info Right)
           ========================================= */
        .contact-wrapper {
            display: grid;
            grid-template-columns: 2fr 1fr; /* 2 parts Form, 1 part Info */
            gap: 40px;
            align-items: start;
        }

        /* --- Left Side: Form --- */
        .form-card {
            background: var(--light);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        .form-title {
            font-size: 2rem;
            color: var(--dark);
            margin-bottom: 10px;
        }

        .form-subtitle {
            margin-bottom: 30px;
            font-size: 1rem;
            color: #777;
        }

        .form-group { margin-bottom: 20px; }

        .form-label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--dark);
        }

        .form-input, .form-textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-family: var(--font-body);
            font-size: 1rem;
            transition: var(--transition);
            background: #fdfdfd;
        }

        .form-input:focus, .form-textarea:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(236, 50, 55, 0.1);
        }

        .form-textarea { resize: vertical; min-height: 150px; }

        .btn-submit {
            background: var(--primary);
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
            transition: var(--transition);
        }

        .btn-submit:hover {
            background: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(236, 50, 55, 0.2);
        }

        /* Messages */
        .alert { padding: 15px; border-radius: 6px; margin-bottom: 20px; font-size: 0.9rem; }
        .alert-success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .alert-danger { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }

        /* --- Right Side: Contact Details --- */
        .info-sidebar {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .info-box {
            background: var(--light);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.03);
            border-left: 4px solid var(--primary);
            transition: var(--transition);
        }

        .info-box:hover { transform: translateY(-5px); }

        .info-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        .info-icon {
            width: 45px;
            height: 45px;
            background: rgba(236, 50, 55, 0.1);
            color: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .info-box h4 { margin: 0; font-size: 1.2rem; color: var(--dark); }

        .info-content p { margin: 0; font-size: 0.95rem; line-height: 1.6; color: #666; }
        .info-content a:hover { color: var(--primary); text-decoration: underline; }

        /* =========================================
           3. FULL WIDTH MAP
           ========================================= */
        .map-section {
            width: 100%;
            height: 450px;
            margin-top: 0; /* Attached to bottom */
            filter: grayscale(20%); /* Slight aesthetic filter */
            transition: var(--transition);
        }
        .map-section:hover { filter: grayscale(0%); }

        iframe { width: 100%; height: 100%; border: 0; }

        /* Responsive */
        @media (max-width: 900px) {
            .contact-wrapper { grid-template-columns: 1fr; }
            .page-header h1 { font-size: 2.5rem; }
        }

    </style>
</head>

<body>

    <?php include 'includes/topbar.php'; ?>
    <?php include 'includes/navbar.php'; ?>

    <header class="page-header">
        <div class="container">
            <h1>Get In <span class="highlight">Touch</span></h1>

            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </header>

    <section class="section-padding">
        <div class="container">
            <div class="contact-wrapper">

                <div class="form-card">
                    <h2 class="form-title">Send us a Message</h2>
                    <p class="form-subtitle">Have a query? Fill out the form below and our team will get back to you shortly.</p>

                    <?php if ($formSubmitted): ?>
                        <div class="alert alert-success">
                            <i class="fa-solid fa-circle-check"></i> Thank you! Your message has been sent successfully.
                        </div>
                    <?php endif; ?>

                    <?php if ($formError): ?>
                        <div class="alert alert-danger">
                            <i class="fa-solid fa-circle-exclamation"></i> <?= htmlspecialchars($formError) ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!$formSubmitted): ?>
                    <form id="contactForm" method="post" action="">
                        <div class="form-group">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-input" placeholder="John Doe" required value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-input" placeholder="email@example.com" required value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" name="phone" class="form-input" placeholder="+91 98765 43210" value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Subject</label>
                            <input type="text" name="subject" class="form-input" placeholder="Admissions / General Inquiry" value="<?= htmlspecialchars($_POST['subject'] ?? '') ?>">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Message</label>
                            <textarea name="message" class="form-textarea" placeholder="How can we help you?" required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                        </div>

                        <button type="submit" class="btn-submit">
                            <i class="fa-solid fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                    <?php endif; ?>
                </div>

                <div class="info-sidebar">

                    <div class="info-box">
                        <div class="info-header">
                            <div class="info-icon"><i class="fa-solid fa-location-dot"></i></div>
                            <h4>Visit Us</h4>
                        </div>
                        <div class="info-content">
                            <p>Manaj School of Career Development<br/>
					Near Kichanee Pul, NH-30A <br/>
					Harnaut, Nalanda, Bihar Pin Code-803110<br/></p>
                        </div>
                    </div>

                    <div class="info-box">
                        <div class="info-header">
                            <div class="info-icon"><i class="fa-solid fa-phone"></i></div>
                            <h4>Call Us</h4>
                        </div>
                        <div class="info-content">
                            <p><a href="tel:+919876543210">+91 98765 43210</a></p>
                            <p><a href="tel:+911234567890">+91 12345 67890</a></p>
                        </div>
                    </div>

                    <div class="info-box">
                        <div class="info-header">
                            <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
                            <h4>Email Us</h4>
                        </div>
                        <div class="info-content">
                            <p><a href="mailto:info@manajschool.edu.in">info@manajschool.edu.in</a></p>
                            <p><a href="mailto:admissions@manajschool.edu.in">admissions@manajschool.edu.in</a></p>
                        </div>
                    </div>

                    <div class="info-box">
                        <div class="info-header">
                            <div class="info-icon"><i class="fa-solid fa-clock"></i></div>
                            <h4>Office Hours</h4>
                        </div>
                        <div class="info-content">
                            <p><strong>Mon - Fri:</strong> 9:00 AM - 5:00 PM</p>
                            <p><strong>Saturday:</strong> 9:00 AM - 1:00 PM</p>
                            <p><strong>Sunday:</strong> Closed</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="map-section">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3605.1755779443424!2d85.55655416781198!3d25.36543139306447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f288d009393419%3A0x8e49251c12448c14!2sManaj%20School%20of%20Career%20Development!5e0!3m2!1sen!2sin!4v1729247708346!5m2!1sen!2sin"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script>
        const form = document.getElementById('contactForm');
        if(form) {
            form.addEventListener('submit', function() {
                const btn = document.querySelector('.btn-submit');
                btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Sending...';
                btn.style.opacity = '0.7';
                btn.style.pointerEvents = 'none';
            });
        }
    </script>

</body>
</html>
