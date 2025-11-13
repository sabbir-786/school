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
           1. ADMISSION PAGE HEADER
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
           2. ADMISSION FORM & STEPS
           ========================================= */
        .admission-section {
            padding: 80px 0;
        }

        /* Form Card */
        .form-card {
            background: var(--light);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        .form-card h3 {
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 25px;
        }

        /* Modern Form Styling */
        .form-label {
            font-weight: 600;
            color: var(--dark);
        }
        .form-control,
        .form-select {
            padding: 12px 16px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(236, 50, 55, 0.15);
            outline: none;
        }
        .form-control.is-invalid,
        .form-select.is-invalid {
            border-color: #dc3545;
        }
        .form-control.is-valid,
        .form-select.is-valid {
            border-color: #198754;
        }

        /* Submit Button */
        .btn-submit {
            background-color: var(--primary);
            border-color: var(--primary);
            padding: 12px 24px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
            width: 100%;
            font-size: 1.1rem;
        }
        .btn-submit:hover {
            background-color: #c82a2f; /* Darker Red */
            border-color: #c82a2f;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(236, 50, 55, 0.3);
        }

        /* Steps Card */
        .steps-card {
            background: var(--light);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            border-top: 4px solid var(--secondary); /* Yellow accent */
        }
        .steps-card h4 {
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 25px;
        }
        .step-item {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
        }
        .step-icon {
            flex-shrink: 0;
            width: 50px;
            height: 50px;
            background-color: rgba(251, 187, 113, 0.15); /* Light Yellow */
            color: var(--secondary);
            border: 2px solid var(--secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            font-weight: 700;
        }
        .step-content h6 {
            font-weight: 600;
            margin-bottom: 2px;
        }
        .step-content p {
            font-size: 0.9rem;
            color: #6c757d;
            line-height: 1.5;
        }

    </style>
</head>

<body>

    <?php include 'includes/topbar.php'; ?>
    <?php include 'includes/navbar.php'; ?>

    <!-- =========================================
         1. ADMISSION PAGE HEADER
         ========================================= -->
    <section class="page-header">
        <div class="header-background">
            <div class="gradient-orb orb-1"></div>
            <div class="gradient-orb orb-2"></div>
        </div>
        <div class="container text-center">
            <h1 class="page-header-title fade-in">Admissions <span class="highlight">2024-2025</span></h1>
            <p class="page-header-subtitle mx-auto fade-in" style="animation-delay: 0.2s;">
                Take the first step towards a bright future. Fill out the form to begin your journey with us.
            </p>
        </div>
    </section>

    <!-- =========================================
         2. ADMISSION FORM & STEPS
         ========================================= -->
    <main class="admission-section">
        <div class="container">
            <div class="row g-5">
                <!-- Form Column -->
                <div class="col-lg-7">
                    <div class="form-card fade-in">
                        <h3>Online Application Form</h3>
                        <form id="admissionForm" novalidate>
                            <div class="row g-3">
                                <!-- Full Name -->
                                <div class="col-12">
                                    <label for="fullName" class="form-label">Student's Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter full name" required />
                                    <div class="invalid-feedback">Please enter student's full name.</div>
                                </div>
                                <!-- Email -->
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Parent's Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required />
                                    <div class="invalid-feedback">Please enter a valid email.</div>
                                </div>
                                <!-- Phone -->
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Parent's Phone <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="+91 98765 43210" pattern="^\+?\d{10,15}$" required />
                                    <div class="invalid-feedback">Please enter a valid phone number.</div>
                                </div>
                                <!-- Grade -->
                                <div class="col-md-6">
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
                                    <div class="invalid-feedback">Please select a grade.</div>
                                </div>
                                <!-- Date of Birth -->
                                <div class="col-md-6">
                                    <label for="dob" class="form-label">Date of Birth <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="dob" name="dob" required />
                                    <div class="invalid-feedback">Please select a date of birth.</div>
                                </div>
                                <!-- Address -->
                                <div class="col-12">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter residential address"></textarea>
                                </div>
                                <!-- Submit Button -->
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-submit btn-primary">
                                        <i class="fa-solid fa-paper-plane me-2"></i> Submit Application
                                    </button>
                                </div>
                            </div>

                            <!-- Success Message -->
                            <div id="formSuccess" class="alert alert-success mt-4 d-none" role="alert">
                                <i class="fa-solid fa-circle-check me-2"></i>
                                Your application has been submitted successfully! We will contact you shortly.
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Steps Column -->
                <div class="col-lg-5">
                    <div class="steps-card fade-in" style="animation-delay: 0.2s;">
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
                                <p>Our admission team will review your application and documents. We will contact you if we need more information.</p>
                            </div>
                        </div>

                        <div class="step-item">
                            <div class="step-icon">3</div>
                            <div class="step-content">
                                <h6>Interview & Test</h6>
                                <p>Shortlisted candidates will be called for a simple entrance test (for Grade 1 and above) and a parent-principal interview.</p>
                            </div>
                        </div>

                        <div class="step-item mb-0">
                            <div class="step-icon"><i class="fa-solid fa-star"></i></div>
                            <div class="step-content">
                                <h6>Confirmation</h6>
                                <p>Successful candidates will receive an admission offer. Welcome to the Manaj School family!</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Form Validation & Animation Script -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Form Validation
        const form = document.getElementById('admissionForm');
        const successMsg = document.getElementById('formSuccess');

        form.addEventListener('submit', function (event) {
            event.preventDefault();
            event.stopPropagation();

            if (form.checkValidity()) {
                // Handle form submission here (e.g., AJAX)
                console.log('Form is valid. Submitting...');

                // For demo: show success, reset form and remove validation styles
                successMsg.classList.remove('d-none');
                form.reset();
                form.classList.remove('was-validated');

                // Hide success message after 5 seconds
                setTimeout(() => {
                    successMsg.classList.add('d-none');
                }, 5000);

            } else {
                form.classList.add('was-validated');
                successMsg.classList.add('d-none');
            }
        });

        // Scroll Animation
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
    });
    </script>

</body>
</html>
