<?php
// PHP variables for header customization
$page_title = 'About Us | Manaj School';
$page_description = 'Learn about Manaj School\'s mission, vision, history, and our commitment to educational excellence and holistic student development.';

// HEADER FILE CONTENT
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
           1. ABOUT PAGE HEADER
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
           2. MISSION & VISION
           ========================================= */
        .mission-vision-section {
            background: var(--light);
        }
        .mv-card {
            background: var(--light);
            border: 1px solid #eee;
            border-radius: 12px;
            padding: 30px;
            height: 100%;
            box-shadow: 0 5px 15px rgba(0,0,0,0.03);
        }
        .mv-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 15px;
        }
        .mv-card h3 {
            font-weight: 700;
            color: var(--dark);
        }
        .mv-card p {
            color: #6c757d;
        }

        /* =========================================
           3. HISTORY TIMELINE
           ========================================= */
        .timeline-section {
            background-color: var(--light-gray);
        }
        .timeline {
            position: relative;
            max-width: 900px;
            margin: 0 auto;
        }
        /* The vertical line */
        .timeline::after {
            content: '';
            position: absolute;
            width: 4px;
            background-color: var(--primary);
            opacity: 0.2;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -2px;
            border-radius: 2px;
        }
        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
        }
        /* The circle on the timeline */
        .timeline-dot {
            content: '';
            position: absolute;
            width: 18px;
            height: 18px;
            right: -9px;
            background-color: var(--light);
            border: 4px solid var(--primary);
            top: 28px;
            border-radius: 50%;
            z-index: 1;
        }
        /* Left vs Right Alignment */
        .timeline-left {
            left: 0;
        }
        .timeline-right {
            left: 50%;
        }
        .timeline-right .timeline-dot {
            left: -9px;
        }
        /* Content Card */
        .timeline-content {
            padding: 20px 30px;
            background-color: var(--light);
            position: relative;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.07);
            border-top: 4px solid var(--primary);
        }
        .timeline-right .timeline-content {
             border-top: 4px solid var(--secondary);
        }
        .timeline-content h4 {
            font-weight: 700;
            color: var(--dark);
        }
        .timeline-year {
            font-weight: 600;
            color: var(--primary);
            font-size: 1.1rem;
            margin-bottom: 5px;
        }
        .timeline-right .timeline-year {
            color: var(--secondary);
        }

        /* =========================================
           4. OUR LEADERSHIP
           ========================================= */
        .team-card {
            background: var(--light);
            border-radius: 12px;
            overflow: hidden;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        .team-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.1);
        }
        .team-card-img {
            aspect-ratio: 1 / 1;
            object-fit: cover;
        }
        .team-card .card-body {
            padding: 25px;
        }
        .team-card h5 {
            font-weight: 600;
            margin-bottom: 5px;
        }
        .team-card .team-title {
            color: var(--primary);
            font-weight: 500;
            font-size: 0.9rem;
        }

        /* =========================================
           5. OUR FACILITIES
           ========================================= */
        .facilities-section {
            background-color: var(--light-gray);
        }
        .facility-card {
            border-radius: 12px;
            overflow: hidden;
            background: var(--light);
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            height: 100%;
        }
        .facility-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.12);
        }
        .facility-card img {
            border-bottom: 4px solid var(--primary);
        }
        .facility-card:nth-child(even) img {
             border-bottom: 4px solid var(--secondary);
        }
        .facility-card .card-body {
            padding: 25px;
        }
        .facility-card h5 {
            font-weight: 600;
        }
        .facility-card p {
            font-size: 0.95rem;
            color: #6c757d;
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

        /* Responsive Timeline */
        @media (max-width: 767px) {
            .timeline::after {
                left: 20px;
            }
            .timeline-item {
                width: 100%;
                padding-left: 50px;
                padding-right: 10px;
            }
            .timeline-left, .timeline-right {
                left: 0%;
            }
            .timeline-dot, .timeline-right .timeline-dot {
                left: 11px;
            }
            .timeline-content {
                border-top: 4px solid var(--primary) !important;
            }
            .timeline-year {
                 color: var(--primary) !important;
            }
        }
    </style>
</head>

<body>

    <?php include 'includes/topbar.php'; ?>
    <?php include 'includes/navbar.php'; ?>

    <!-- =========================================
         1. ABOUT PAGE HEADER
         ========================================= -->
    <section class="page-header">
        <div class="header-background">
            <div class="gradient-orb orb-1"></div>
            <div class="gradient-orb orb-2"></div>
        </div>
        <div class="container text-center">
            <h1 class="page-header-title fade-in">About <span class="highlight">Manaj School</span></h1>
            <p class="page-header-subtitle mx-auto fade-in" style="animation-delay: 0.2s;">
                Our Mission, Vision, and Commitment to Excellence in Career Development.
            </p>
        </div>
    </section>

    <!-- =========================================
         2. MISSION & VISION SECTION
         ========================================= -->
    <section class="mission-vision-section section-padding">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="mv-card fade-in">
                        <div class="mv-icon"><i class="fa-solid fa-bullseye"></i></div>
                        <h3>Our Mission</h3>
                        <p>To provide a nurturing and modern learning environment that empowers students with the knowledge, skills, and discipline required to achieve their full potential and succeed in their chosen careers.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mv-card fade-in" style="animation-delay: 0.2s;">
                        <div class="mv-icon"><i class="fa-solid fa-eye"></i></div>
                        <h3>Our Vision</h3>
                        <p>To be a leading educational institution recognized for our innovative teaching methods, holistic student development, and a consistent track record of academic and professional excellence.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
         3. OUR HISTORY (TIMELINE)
         ========================================= -->
    <section class="timeline-section section-padding">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Our <span class="highlight">History</span></h2>
                <p class="section-subtitle">A journey of dedication, growth, and educational excellence over the years.</p>
            </div>

            <div class="timeline mt-5">
                <!-- Timeline Item 1 -->
                <div class="timeline-item timeline-left fade-in">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">2008</div>
                        <h4>The Foundation</h4>
                        <p class="small text-muted">Manaj School was founded with a small campus and a passionate team of 10 teachers, driven by a vision for quality education.</p>
                    </div>
                </div>
                <!-- Timeline Item 2 -->
                <div class="timeline-item timeline-right fade-in">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">2012</div>
                        <h4>First Expansion</h4>
                        <p class="small text-muted">We expanded our campus, introduced the Science stream, and celebrated our first graduating class with a 90% success rate.</p>
                    </div>
                </div>
                <!-- Timeline Item 3 -->
                <div class="timeline-item timeline-left fade-in">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">2017</div>
                        <h4>Smart Campus</h4>
                        <p class="small text-muted">Launched our "Smart Classroom" initiative, integrating digital learning tools and technology across all programs.</p>
                    </div>
                </div>
                <!-- Timeline Item 4 -->
                <div class="timeline-item timeline-right fade-in">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-year">2023</div>
                        <h4>New Heights</h4>
                        <p class="small text-muted">Achieved a milestone of 1500+ students and were awarded "Best School for Career Development" in the region.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
         4. OUR LEADERSHIP
         ========================================= -->
    <section class="leadership-section section-padding">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Meet Our <span class="highlight">Leadership</span></h2>
                <p class="section-subtitle">Our dedicated team is committed to guiding our students to success.</p>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-lg-3 col-md-6">
                    <div class="team-card fade-in">
                        <img src="https://placehold.co/400x400/363435/FEFEFE?text=Dr.+R.+Verma" alt="Principal" class="img-fluid team-card-img">
                        <div class="card-body">
                            <h5>Dr. R. Verma</h5>
                            <p class="team-title">Principal</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-card fade-in" style="animation-delay: 0.1s;">
                        <img src="https://placehold.co/400x400/EC3237/FEFEFE?text=Mrs.+A.+Sharma" alt="Vice Principal" class="img-fluid team-card-img">
                        <div class="card-body">
                            <h5>Mrs. A. Sharma</h5>
                            <p class="team-title">Vice-Principal</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-card fade-in" style="animation-delay: 0.2s;">
                        <img src="https://placehold.co/400x400/FBBB71/363435?text=Mr.+S.+Singh" alt="Academics Head" class="img-fluid team-card-img">
                        <div class="card-body">
                            <h5>Mr. S. Singh</h5>
                            <p class="team-title">Head of Academics</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-card fade-in" style="animation-delay: 0.3s;">
                        <img src="https://placehold.co/400x400/363435/FEFEFE?text=Ms.+P.+Patel" alt="Student Counselor" class="img-fluid team-card-img">
                        <div class="card-body">
                            <h5>Ms. P. Patel</h5>
                            <p class="team-title">Student Counselor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================
         5. OUR FACILITIES
         ========================================= -->
    <section class="facilities-section section-padding">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Our Modern <span class="highlight">Campus</span></h2>
                <p class="section-subtitle">State-of-the-art facilities designed to provide the best learning environment.</p>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-lg-4 col-md-6">
                    <div class="facility-card fade-in">
                        <img src="https://placehold.co/600x400/EC3237/FEFEFE?text=Science+Labs" alt="Science Labs" class="img-fluid">
                        <div class="card-body">
                            <h5>Advanced Science Labs</h5>
                            <p>Fully equipped laboratories for Physics, Chemistry, and Biology to foster practical, hands-on learning.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facility-card fade-in" style="animation-delay: 0.1s;">
                        <img src="https://placehold.co/600x400/FBBB71/363435?text=Digital+Library" alt="Digital Library" class="img-fluid">
                        <div class="card-body">
                            <h5>Digital Library</h5>
                            <p>A vast collection of physical books and extensive digital resources, providing a quiet space for research and study.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facility-card fade-in" style="animation-delay: 0.2s;">
                        <img src="https://placehold.co/600x400/363435/FEFEFE?text=Sports+Complex" alt="Sports Complex" class="img-fluid">
                        <div class="card-body">
                            <h5>Sports Complex</h5>
                            <p>Promoting physical fitness and teamwork with our playgrounds, indoor courts, and dedicated coaching staff.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Scroll Animation Script -->
    <script>
    document.addEventListener("DOMContentLoaded", () => {
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
    });
    </script>

</body>
</html>
