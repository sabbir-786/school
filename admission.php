<?php
// PHP variables for header customization
$page_title = "Admission Form - Manaj School";
$page_description = "Apply online for admission at Manaj School of Career Development.";
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
           RESET & VARIABLES (Matched with Index.php)
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

        /* Typography */
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
        .text-center { text-align: center; }

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
           1. PAGE HEADER & BREADCRUMBS
           ========================================= */
        .page-header {
            position: relative;
            background: var(--secondary);
            color: var(--light);
            padding: 140px 0 80px 0;
            text-align: center;
            border-bottom: 4px solid var(--primary);
            overflow: hidden;
        }

        .page-header-title {
            font-size: 3.5rem;
            font-weight: 900;
            color: var(--light);
            margin-bottom: 10px;
        }
        .page-header-title .highlight {
            color: var(--accent);
            font-style: italic;
        }

        /* Breadcrumbs */
        .breadcrumb {
            display: flex;
            justify-content: center;
            gap: 10px;
            font-size: 0.95rem;
            color: rgba(255,255,255,0.7);
            margin-top: 15px;
        }
        .breadcrumb li a:hover { color: var(--accent); }
        .breadcrumb li.active { color: var(--accent); font-weight: 600; }
        .breadcrumb li:not(:last-child)::after {
            content: '/';
            margin-left: 10px;
            color: rgba(255,255,255,0.4);
        }

        /* =========================================
           2. ADMISSION CONTENT (Grid Layout)
           ========================================= */
        .admission-grid {
            display: grid;
            grid-template-columns: 2fr 1fr; /* Form takes 2/3, Steps take 1/3 */
            gap: 40px;
            align-items: start;
        }

        /* --- Form Card --- */
        .form-card {
            background: var(--light);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        .form-card h3 {
            font-size: 1.8rem;
            color: var(--dark);
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        /* Form Layout */
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }
        .form-full {
            width: 100%;
            margin-bottom: 20px;
        }

        /* Inputs */
        .form-label {
            display: block;
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 8px;
            font-size: 0.95rem;
        }
        .text-danger { color: var(--primary); }

        .form-control, .form-select {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-family: var(--font-body);
            font-size: 1rem;
            transition: var(--transition);
            background-color: #fff;
        }
        .form-control:focus, .form-select:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(236, 50, 55, 0.1);
        }

        textarea.form-control { resize: vertical; }

        /* Submit Button */
        .btn-submit {
            background-color: var(--primary);
            color: var(--light);
            padding: 14px 28px;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: var(--transition);
            width: 100%;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .btn-submit:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(236, 50, 55, 0.3);
        }

        /* --- Steps Sidebar --- */
        .steps-card {
            background: var(--light);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            border-top: 4px solid var(--accent);
            position: sticky;
            top: 100px; /* Sticky sidebar */
        }

        .steps-card h4 { margin-bottom: 30px; font-size: 1.4rem; }

        .step-item {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }
        .step-item:last-child { margin-bottom: 0; }

        .step-icon {
            flex-shrink: 0;
            width: 45px;
            height: 45px;
            background-color: rgba(251, 187, 113, 0.15); /* Light Yellow */
            color: var(--accent);
            border: 2px solid var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            font-size: 1.1rem;
        }

        .step-content h6 {
            margin: 0 0 5px 0;
            font-size: 1.1rem;
            color: var(--secondary);
        }
        .step-content p {
            font-size: 0.9rem;
            margin: 0;
            line-height: 1.5;
            color: #666;
        }

        /* Messages */
        .alert {
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
            font-size: 0.95rem;
            display: none; /* Hidden by default */
        }
        .alert.show { display: block; }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        /* Responsive */
        @media (max-width: 900px) {
            .admission-grid { grid-template-columns: 1fr; }
            .form-row { grid-template-columns: 1fr; }
            .steps-card { position: static; margin-top: 40px; }
            .page-header-title { font-size: 2.5rem; }
        }
    </style>
</head>

<body>

    <?php include 'includes/topbar.php'; ?>
    <?php include 'includes/navbar.php'; ?>

    <section class="page-header">
        <div class="container">
            <h1 class="page-header-title fade-in">Admissions <span class="highlight">2024-2025</span></h1>

            <ul class="breadcrumb fade-in" style="transition-delay: 0.1s;">
                <li><a href="index.php">Home</a></li>
                <li class="active">Admission</li>
            </ul>
        </div>
    </section>

    <main class="section-padding">
        <div class="container">
            <div class="admission-grid">

                <div class="form-card fade-in">
                    <h3>Online Application Form</h3>
                    <form id="admissionForm" novalidate>

                        <div class="form-full">
                            <label for="fullName" class="form-label">Student's Full Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter full name" required />
                        </div>

                        <div class="form-row">
                            <div>
                                <label for="email" class="form-label">Parent's Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required />
                            </div>
                            <div>
                                <label for="phone" class="form-label">Parent's Phone <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="+91 98765 43210" required />
                            </div>
                        </div>

                        <div class="form-row">
                            <div>
                                <label for="grade" class="form-label">Applying for Grade <span class="text-danger">*</span></label>
                                <select class="form-select" id="grade" name="grade" required>
                                    <option value="" selected disabled>Select grade</option>
                                    <option>Kindergarten</option>
                                    <option>1st Grade</option>
                                    <option>2nd Grade</option>
                                    <option>3rd Grade</option>
                                    <option>4th Grade</option>
                                    <option>5th Grade</option>
                                    <option>6th Grade</option>
                                    <option>7th Grade</option>
                                    <option>8th Grade</option>
                                    <option>9th Grade</option>
                                    <option>10th Grade</option>
                                </select>
                            </div>
                            <div>
                                <label for="dob" class="form-label">Date of Birth <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="dob" name="dob" required />
                            </div>
                        </div>

                        <div class="form-full">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter residential address"></textarea>
                        </div>

                        <div class="form-full" style="margin-top: 30px;">
                            <button type="submit" class="btn-submit">
                                <i class="fa-solid fa-paper-plane"></i> Submit Application
                            </button>
                        </div>

                        <div id="formSuccess" class="alert alert-success">
                            <i class="fa-solid fa-circle-check" style="margin-right: 8px;"></i>
                            Your application has been submitted successfully! We will contact you shortly.
                        </div>

                    </form>
                </div>

                <div class="steps-card fade-in" style="transition-delay: 0.2s;">
                    <h4>Admission Process</h4>

                    <div class="step-item">
                        <div class="step-icon">1</div>
                        <div class="step-content">
                            <h6>Submit the Form</h6>
                            <p>Fill out the online application with all the required details for the student and parent/guardian.</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-icon">2</div>
                        <div class="step-content">
                            <h6>Document Review</h6>
                            <p>Our admission team will review your application. We will contact you if we need more information.</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-icon">3</div>
                        <div class="step-content">
                            <h6>Interview & Test</h6>
                            <p>Shortlisted candidates will be called for a simple entrance test and a parent-principal interview.</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-icon"><i class="fa-solid fa-star"></i></div>
                        <div class="step-content">
                            <h6>Confirmation</h6>
                            <p>Successful candidates will receive an admission offer. Welcome to the Manaj School family!</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script>
    document.addEventListener('DOMContentLoaded', function () {

        // 1. Scroll Animation
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // 2. Form Handling
        const form = document.getElementById('admissionForm');
        const successMsg = document.getElementById('formSuccess');

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            // Simple validation check
            if (form.checkValidity()) {
                const btn = form.querySelector('.btn-submit');
                btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Processing...';
                btn.style.opacity = '0.7';

                // Simulate server request
                setTimeout(() => {
                    successMsg.classList.add('show');
                    form.reset();
                    btn.innerHTML = '<i class="fa-solid fa-paper-plane"></i> Submit Application';
                    btn.style.opacity = '1';

                    // Hide success after 5s
                    setTimeout(() => { successMsg.classList.remove('show'); }, 5000);
                }, 1500);
            } else {
                // If invalid, browser will show default tooltips required
                form.reportValidity();
            }
        });
    });
    </script>

</body>
</html>
