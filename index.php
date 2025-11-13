<?php
    // Set the page title for the header
    $page_title = 'Manaj School of Career Development - Home';
    $page_description = 'Welcome to Manaj School. We offer quality education with a modern curriculum, expert faculty, and a focus on holistic student development.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $page_description; ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/images/logo.png">

    <!-- Favicon -->
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
            --bs-body-font-family: 'Poppins', sans-serif;
            --bs-body-color: var(--dark);
        }

        body {
            background-color: var(--light);
        }

        .section-padding {
            padding: 80px 0;
        }

        /* Titles */
        .section-title {
            font-weight: 700;
            color: var(--dark);
            font-size: clamp(2rem, 4vw, 2.8rem);
            margin-bottom: 12px;
        }

        .section-title .highlight {
            color: var(--primary);
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: #6c757d;
            max-width: 600px;
            margin: 0 auto 40px auto;
        }

        /* Buttons */
        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
            padding: 12px 24px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #c82a2f; /* Darker Red */
            border-color: #c82a2f;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(236, 50, 55, 0.3);
        }

        .btn-secondary {
            background-color: var(--secondary);
            border-color: var(--secondary);
            color: var(--dark);
            padding: 12px 24px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .btn-secondary:hover {
            background-color: #e6951b; /* Darker Yellow */
            border-color: #e6951b;
            color: var(--dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(251, 187, 113, 0.4);
        }

        /* =========================================
           1. HERO CAROUSEL
           ========================================= */
        .hero-carousel {
            height: 90vh;
            min-height: 700px;
            position: relative;
        }
        .carousel-item {
            height: 90vh;
            min-height: 700px;
            background-size: cover;
            background-position: center;
        }
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(54, 52, 53, 0.8) 0%, rgba(54, 52, 53, 0.3) 100%);
        }
        .hero-content {
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            align-items: center;
        }
        .hero-title {
            font-size: clamp(2.5rem, 5vw, 4.2rem);
            font-weight: 800;
            color: var(--light);
            line-height: 1.2;
            margin-bottom: 20px;
            opacity: 0;
        }
        .hero-title .highlight {
            color: var(--secondary); /* Yellow Highlight */
        }
        .hero-description {
            font-size: 1.2rem;
            color: rgba(254, 254, 254, 0.9);
            max-width: 550px;
            margin-bottom: 30px;
            opacity: 0;
        }
        .hero-cta-group {
            opacity: 0;
        }

        /* Slide Animations */
        .carousel-item.active .hero-title { animation: fadeInUp 0.8s 0.2s ease-out forwards; }
        .carousel-item.active .hero-description { animation: fadeInUp 0.8s 0.4s ease-out forwards; }
        .carousel-item.active .hero-cta-group { animation: fadeInUp 0.8s 0.6s ease-out forwards; }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Slide Images (Placeholders) */
        .slide-1 { background-image: url('https://placehold.co/1920x1080/363435/FEFEFE?text=Modern+Campus'); }
        .slide-2 { background-image: url('https://placehold.co/1920x1080/EC3237/FEFEFE?text=Smart+Classrooms'); }
        .slide-3 { background-image: url('https://placehold.co/1920x1080/FBBB71/363435?text=Expert+Faculty'); }
        .slide-4 { background-image: url('https://placehold.co/1920x1080/363435/FEFEFE?text=Student+Life'); }

        /* Carousel Indicators */
        .carousel-indicators [data-bs-target] {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: var(--light);
            border: 0;
            opacity: 0.5;
            transition: all 0.3s ease;
        }
        .carousel-indicators .active {
            width: 30px;
            border-radius: 10px;
            opacity: 1;
            background-color: var(--secondary); /* Active dot is Yellow */
        }

        /* =========================================
           2. ABOUT US PREVIEW
           ========================================= */
        .about-preview img {
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        /* =========================================
           3. WHY CHOOSE US
           ========================================= */
        .feature-card {
            background: var(--light);
            border: 1px solid #eee;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
        }
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.07);
            border-left: 4px solid var(--primary); /* Red accent on hover */
        }
        .feature-icon {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 20px;
        }
        .feature-card h5 {
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 10px;
        }
        .feature-card p {
            font-size: 0.95rem;
            color: #6c757d;
        }

        /* =========================================
           4. OUR PROGRAMS
           ========================================= */
        .program-card {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            height: 100%;
        }
        .program-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.12);
        }
        .program-card .card-body {
            padding: 25px;
        }
        .program-card h5 {
            font-weight: 700;
            color: var(--dark);
        }
        .program-card .badge {
            background-color: var(--primary);
            font-weight: 500;
        }
        .program-card .card-link {
            text-decoration: none;
            font-weight: 600;
            color: var(--primary);
        }
        .program-card .card-link:hover {
            text-decoration: underline;
        }

        /* =========================================
           5. STATS SECTION
           ========================================= */
        .stats-section {
            background-color: var(--dark);
            color: var(--light);
        }
        .stat-item .stat-number {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--secondary); /* Yellow numbers */
        }
        .stat-item .stat-label {
            font-size: 1rem;
            font-weight: 500;
            color: rgba(254, 254, 254, 0.8);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* =========================================
           6. CTA SECTION
           ========================================= */
        .cta-section {
            background-color: var(--primary);
            color: var(--light);
        }
        .cta-section .btn-light {
            color: var(--primary);
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 8px;
        }
        .cta-section .btn-outline-light {
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 8px;
            border-width: 2px;
        }

    </style>
</head>

<body>

    <?php include 'includes/topbar.php'; ?>
    <?php include 'includes/navbar.php'; ?>

    <!-- =========================================
         1. HERO CAROUSEL SECTION
         ========================================= -->
    <section id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>

        <!-- Slides -->
        <div class="carousel-inner">
            <!-- Slide 1: Welcome -->
            <div class="carousel-item active slide-1">
                <div class="hero-overlay"></div>
                <div class="container hero-content">
                    <div class="col-lg-7">
                        <h1 class="hero-title">Welcome to <span class="highlight">Manaj School</span> of Career Development</h1>
                        <p class="hero-description">Empowering students with quality education, modern facilities, and a path to a successful future.</p>
                        <div class="hero-cta-group d-flex gap-3">
                            <a href="admission.php" class="btn btn-primary">Apply Now</a>
                            <a href="about.php" class="btn btn-secondary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Academics -->
            <div class="carousel-item slide-2">
                <div class="hero-overlay"></div>
                <div class="container hero-content">
                    <div class="col-lg-7">
                        <h1 class="hero-title">Modern <span class="highlight">Curriculum</span></h1>
                        <p class="hero-description">Our courses are designed to meet contemporary standards, ensuring your child is ready for tomorrow's challenges.</p>
                        <div class="hero-cta-group d-flex gap-3">
                            <a href="courses.php" class="btn btn-primary">View Courses</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Faculty -->
            <div class="carousel-item slide-3">
                <div class="hero-overlay"></div>
                <div class="container hero-content">
                    <div class="col-lg-7">
                        <h1 class="hero-title">Expert & <span class="highlight">Caring Faculty</span></h1>
                        <p class="hero-description">Learn from dedicated and experienced teachers who are masters in their fields and mentors at heart.</p>
                        <div class="hero-cta-group d-flex gap-3">
                            <a href="about.php#faculty" class="btn btn-primary">Meet Our Team</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 4: Student Life -->
            <div class="carousel-item slide-4">
                <div class="hero-overlay"></div>
                <div class="container hero-content">
                    <div class="col-lg-7">
                        <h1 class="hero-title">Holistic <span class="highlight">Development</span></h1>
                        <p class="hero-description">We focus on more than just academics, with rich programs in sports, arts, and leadership.</p>
                        <div class="hero-cta-group d-flex gap-3">
                            <a href="admission.php" class="btn btn-primary">Join Our_Community</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls (Optional, can be uncommented) -->
        <!--
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span>
        </button>
        -->
    </section>

    <!-- =========================================
         2. ABOUT US PREVIEW SECTION
         ========================================= -->
    <section class="about-preview section-padding">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <img src="https://placehold.co/600x400/FEFEFE/363435?text=Our+Students" alt="Manaj School Students" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title">A Tradition of <span class="highlight">Excellence</span></h2>
                    <p class="text-secondary-emphasis fs-5 mb-3">We are more than just a school; we are a community dedicated to nurturing the next generation of leaders, thinkers, and innovators.</p>
                    <p class="text-muted">For over 15 years, Manaj School has been a cornerstone of education, blending rigorous academics with strong moral values. Our mission is to provide a safe, disciplined, and modern learning environment where every student can thrive.</p>
                    <a href="about.php" class="btn btn-primary mt-3">More About Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
         3. WHY CHOOSE US SECTION
         ========================================= -->
    <section class="why-choose-us section-padding" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Why <span class="highlight">Choose Us?</span></h2>
                <p class="section-subtitle">Discover the advantages that make Manaj School the right choice for your family.</p>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fa-solid fa-laptop-code"></i></div>
                        <h5>Smart Classrooms</h5>
                        <p>Interactive, technology-enabled classrooms that make learning engaging and effective.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fa-solid fa-user-tie"></i></div>
                        <h5>Expert Faculty</h5>
                        <p>Highly qualified and dedicated teachers who provide personalized attention to each student.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon"><i class="fa-solid fa-shield-halved"></i></div>
                        <h5>Safe & Secure Campus</h5>
                        <p>A completely secure campus with 24/7 surveillance and trained staff to ensure student safety.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
         4. OUR PROGRAMS SECTION
         ========================================= -->
    <section class="programs-section section-padding">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Our <span class="highlight">Programs</span></h2>
                <p class="section-subtitle">We offer a diverse range of academic streams to cater to every student's passion and career goals.</p>
            </div>

            <div class="row g-4 mt-4 justify-content-center">
                <!-- Program 1: Science -->
                <div class="col-lg-4 col-md-6">
                    <div class="program-card">
                        <img src="https://placehold.co/600x400/EC3237/FEFEFE?text=SCIENCE" class="card-img-top" alt="Science Program">
                        <div class="card-body">
                            <span class="badge mb-2">Academic</span>
                            <h5 class="card-title">Science Stream</h5>
                            <p class="card-text text-muted small">Focus on Physics, Chemistry, Maths, and Biology, preparing students for careers in medicine and engineering.</p>
                            <a href="courses.php" class="card-link">Learn More <i class="fa-solid fa-arrow-right-long ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Program 2: Commerce -->
                <div class="col-lg-4 col-md-6">
                    <div class="program-card">
                        <img src="https://placehold.co/600x400/FBBB71/363435?text=COMMERCE" class="card-img-top" alt="Commerce Program">
                        <div class="card-body">
                            <span class="badge mb-2">Professional</span>
                            <h5 class="card-title">Commerce Stream</h5>
                            <p class="card-text text-muted small">Building a strong foundation in Accountancy, Economics, and Business for future financial leaders.</p>
                            <a href="courses.php" class="card-link">Learn More <i class="fa-solid fa-arrow-right-long ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Program 3: Arts -->
                <div class="col-lg-4 col-md-6">
                    <div class="program-card">
                        <img src="https://placehold.co/600x400/363435/FEFEFE?text=ARTS" class="card-img-top" alt="Arts Program">
                        <div class="card-body">
                            <span class="badge mb-2">Creative</span>
                            <h5 class="card-title">Arts & Humanities</h5>
                            <p class="card-text text-muted small">Exploring subjects like History, Literature, and Political Science to create informed global citizens.</p>
                            <a href="courses.php" class="card-link">Learn More <i class="fa-solid fa-arrow-right-long ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
         5. STATS SECTION
         ========================================= -->
    <section class="stats-section section-padding">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <h3 class="stat-number" data-target="1500">0</h3>
                        <p class="stat-label">Happy Students</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <h3 class="stat-number" data-target="75">0</h3>
                        <p class="stat-label">Expert Teachers</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <h3 class="stat-number" data-target="15">0</h3>
                        <p class="stat-label">Years of Experience</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <h3 class="stat-number" data-target="95">0</h3>
                        <p class="stat-label">Success Rate (%)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Animated Counter Script -->
    <script>
    document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll('.stat-number');
        const speed = 200; // The lower the number, the faster the count

        const animateCounter = (counter) => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const inc = Math.ceil(target / speed);

            if (count < target) {
                counter.innerText = Math.min(count + inc, target);
                setTimeout(() => animateCounter(counter), 10);
            } else {
                // Add '+' if the original target had it
                if (target === 1500 || target === 75 || target === 15) {
                     counter.innerText = target + '+';
                } else if (target === 95) {
                     counter.innerText = target + '%';
                }
                else {
                    counter.innerText = target;
                }
            }
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    counters.forEach(counter => {
                        // Check if already counted
                        if (counter.innerText === '0') {
                            animateCounter(counter);
                        }
                    });
                    observer.disconnect(); // Disconnect after animating once
                }
            });
        }, { threshold: 0.5 }); // Trigger when 50% of the section is visible

        const statsSection = document.querySelector('.stats-section');
        if (statsSection) {
            observer.observe(statsSection);
        }
    });
    </script>

</body>
</html>
