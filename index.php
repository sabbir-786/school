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

    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $page_description; ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/images/logo.png">

    <link rel="icon" type="image/png" href="assets/images/logo.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* =========================================
           RESET & VARIABLES
           ========================================= */
        :root {
            /* --- COLORS --- */
            --primary: #EC3237;   /* Red */
            --primary-dark: #c82a2f;
            --secondary: #01334d; /* Dark Blue */
            --accent: #FBBB71;    /* Yellow/Gold */
            --dark: #363435;      /* Black/Dark Grey */
            --light: #FEFEFE;     /* White */
            --text-grey: #555555; /* Slightly darker grey for better readability */
            --text-light: #f0f0f0;/* Light Text for dark bg */

            /* --- FONTS --- */
            /* Merriweather for Headings (Academic feel) */
            --font-heading: 'Merriweather', serif;
            /* Poppins for Body (Modern/Clean feel) */
            --font-body: 'Poppins', sans-serif;

            --max-width: 1200px;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* =========================================
           GLOBAL TYPOGRAPHY STYLES
           ========================================= */

        body {
            font-family: var(--font-body); /* Use Poppins for general text */
            background-color: var(--light);
            color: var(--text-grey);       /* Grey text on white bg */
            font-size: 16px;               /* Standard readable size */
            line-height: 1.7;              /* Good breathing room for reading */
            font-weight: 400;
            overflow-x: hidden;
        }

        /* Headings (H1 - H6) */
        h1, h2, h3, h4, h5, h6 {
            font-family: var(--font-heading); /* Use Merriweather for titles */
            color: var(--secondary);          /* Dark Blue looks more academic than black */
            font-weight: 700;                 /* Bold for authority */
            margin-bottom: 15px;
            line-height: 1.3;
        }

        /* Specific Heading Sizes */
        h1 { font-size: 3.5rem; } /* Hero Titles */
        h2 { font-size: 2.5rem; } /* Section Titles */
        h3 { font-size: 1.75rem; } /* Card Titles */
        h4 { font-size: 1.25rem; } /* Subtitles */

        /* Paragraphs */
        p {
            margin-bottom: 1.5rem;
            font-weight: 400;
            color: var(--text-grey);
        }

        /* Links & Buttons (Keep Poppins for navigation/action items) */
        a, .btn, button, .nav-link {
            font-family: var(--font-body);
            text-decoration: none;
            color: inherit;
        }

        ul { list-style: none; }
        img { max-width: 100%; display: block; }

        /* Section Titles (Specific Style) */
        .section-title {
            font-family: var(--font-heading);
            font-weight: 900; /* Extra Bold */
            color: var(--dark);
            text-transform: capitalize; /* Normal capitalization looks more prestigious */
            letter-spacing: -0.5px;     /* Tighter spacing for serif headings */
            margin-bottom: 10px;
        }

        .section-title .highlight {
            color: var(--primary);
        }

        .section-subtitle {
            font-family: var(--font-body);
            font-size: 1.1rem;
            font-weight: 400;
            color: #888;
            letter-spacing: 1px;        /* Slight spacing for subtitles */
            text-transform: uppercase;  /* Uppercase for small subtitles */
            max-width: 600px;
            margin: 0 auto 40px auto;
        }

        /* Highlight Text (e.g. inside spans) */
        .highlight {
            color: var(--primary);
            font-style: italic; /* Italic Serif looks very elegant */
        }

        /* Responsive Typography */
        @media (max-width: 768px) {
            h1 { font-size: 2.5rem; }
            h2 { font-size: 2rem; }
            body { font-size: 15px; }
        }

        /* =========================================
           UTILITIES & LAYOUT
           ========================================= */
        .container {
            max-width: var(--max-width);
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-padding {
            padding: 80px 0;
        }

        .text-center { text-align: center; }

        /* Grid System Replacement */
        .grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .grid-4 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        @media (max-width: 768px) {
            .grid-2 { grid-template-columns: 1fr; }
        }

        /* =========================================
           BUTTONS
           ========================================= */
        .btn {
            display: inline-block;
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: var(--transition);
            border: none;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--light);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(236, 50, 55, 0.3);
            color: var(--light);
        }

        .btn-secondary {
            background-color: var(--secondary);
            color: var(--light);
        }

        .btn-secondary:hover {
            background-color: var(--accent);
            color: var(--dark);
            transform: translateY(-3px);
        }

        /* =========================================
           1. HERO SLIDER
           ========================================= */
        .hero-slider {
            position: relative;
            height: 90vh;
            min-height: 600px;
            overflow: hidden;
            background: var(--dark);
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            display: flex;
            align-items: center;
            z-index: 1;
        }

        .slide.active {
            opacity: 1;
            z-index: 2;
        }

        .slide-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(54, 52, 53, 0.9) 0%, rgba(54, 52, 53, 0.4) 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 3;
            color: var(--light);
            max-width: 700px;
            padding-left: 20px;
        }

        .hero-title {
            /* Typography handled by global h1, adding animation specific styles */
            margin-bottom: 20px;
            transform: translateY(30px);
            opacity: 0;
            transition: all 0.8s ease 0.3s;
            color: var(--light); /* Override default dark blue for hero */
        }

        .hero-description {
            font-size: 1.2rem;
            color: rgba(255,255,255,0.9);
            margin-bottom: 30px;
            transform: translateY(30px);
            opacity: 0;
            transition: all 0.8s ease 0.5s;
        }

        .hero-btns {
            display: flex;
            gap: 15px;
            transform: translateY(30px);
            opacity: 0;
            transition: all 0.8s ease 0.7s;
        }

        .slide.active .hero-title,
        .slide.active .hero-description,
        .slide.active .hero-btns {
            transform: translateY(0);
            opacity: 1;
        }

        /* Slide Backgrounds */
        .slide-1 { background-image: url('https://placehold.co/1920x1080/363435/FEFEFE?text=Modern+Campus'); }
        .slide-2 { background-image: url('https://placehold.co/1920x1080/EC3237/FEFEFE?text=Smart+Classrooms'); }
        .slide-3 { background-image: url('https://placehold.co/1920x1080/FBBB71/363435?text=Expert+Faculty'); }
        .slide-4 { background-image: url('https://placehold.co/1920x1080/363435/FEFEFE?text=Student+Life'); }

        .slider-dots {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 10;
        }
        .dot {
            width: 12px;
            height: 12px;
            background: rgba(255,255,255,0.5);
            border-radius: 50%;
            cursor: pointer;
            transition: 0.3s;
        }
        .dot.active {
            background: var(--accent);
            width: 30px;
            border-radius: 10px;
        }

        /* =========================================
           2. ABOUT SECTION
           ========================================= */
        .about-img {
            border-radius: 12px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            width: 100%;
        }

        .highlight-text {
            font-size: 1.2rem;
            color: var(--dark);
            font-weight: 500;
            margin-bottom: 15px;
            display: block;
        }

        /* =========================================
           3. WHY CHOOSE US
           ========================================= */
        .bg-grey { background-color: #f8f9fa; }

        .feature-card {
            background: var(--light);
            padding: 40px 30px;
            text-align: center;
            border-radius: 12px;
            border: 1px solid #eee;
            transition: var(--transition);
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
            border-left: 5px solid var(--primary);
        }

        .feature-icon {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .feature-card h5 {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 10px;
            font-family: var(--font-heading);
        }

        /* =========================================
           4. PROGRAMS
           ========================================= */
        .program-card {
            background: var(--light);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: var(--transition);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .program-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 30px rgba(0,0,0,0.1);
        }

        .card-body { padding: 25px; flex: 1; }

        .badge {
            display: inline-block;
            background: var(--primary);
            color: white;
            padding: 4px 12px;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 500;
            margin-bottom: 10px;
            font-family: var(--font-body);
        }

        .card-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 10px;
        }

        .card-link {
            color: var(--primary);
            font-weight: 600;
            margin-top: 15px;
            display: inline-block;
        }
        .card-link:hover { text-decoration: underline; }

        /* =========================================
           5. STATS SECTION
           ========================================= */
        .stats-section {
            background-color: var(--dark);
            color: var(--text-light); /* Rule: White text on black bg */
        }

        .stat-item {
            text-align: center;
            padding: 20px;
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--accent);
            display: block;
            margin-bottom: 5px;
            font-family: var(--font-body); /* Numbers often look better in Sans Serif */
        }

        .stat-label {
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0.8;
            font-family: var(--font-body);
        }

    </style>
</head>

<body>

    <?php include 'includes/topbar.php'; ?>
    <?php include 'includes/navbar.php'; ?>

    <?php include 'Home/hero.php'; ?>
    <?php include 'Home/notification.php'; ?>
    <?php include 'Home/about.php'; ?>
    <?php include 'Home/why.php'; ?>








    <section class="section-padding bg-grey">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Why <span class="highlight">Choose Us?</span></h2>
                <p class="section-subtitle">Discover the advantages that make Manaj School the right choice for your family.</p>
            </div>

            <div class="grid-3">
                <div class="feature-card">
                    <div class="feature-icon"><i class="fa-solid fa-laptop-code"></i></div>
                    <h5>Smart Classrooms</h5>
                    <p>Interactive, technology-enabled classrooms that make learning engaging and effective.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fa-solid fa-user-tie"></i></div>
                    <h5>Expert Faculty</h5>
                    <p>Highly qualified and dedicated teachers who provide personalized attention to each student.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <h5>Safe & Secure Campus</h5>
                    <p>A completely secure campus with 24/7 surveillance and trained staff to ensure student safety.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Our <span class="highlight">Programs</span></h2>
                <p class="section-subtitle">We offer a diverse range of academic streams to cater to every student's passion.</p>
            </div>

            <div class="grid-3">
                <div class="program-card">
                    <img src="https://placehold.co/600x400/EC3237/FEFEFE?text=SCIENCE" alt="Science Program">
                    <div class="card-body">
                        <span class="badge">Academic</span>
                        <h3 class="card-title">Science Stream</h3>
                        <p>Focus on Physics, Chemistry, Maths, and Biology, preparing students for careers in medicine and engineering.</p>
                        <a href="courses.php" class="card-link">Learn More <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="program-card">
                    <img src="https://placehold.co/600x400/FBBB71/363435?text=COMMERCE" alt="Commerce Program">
                    <div class="card-body">
                        <span class="badge">Professional</span>
                        <h3 class="card-title">Commerce Stream</h3>
                        <p>Building a strong foundation in Accountancy, Economics, and Business for future financial leaders.</p>
                        <a href="courses.php" class="card-link">Learn More <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="program-card">
                    <img src="https://placehold.co/600x400/363435/FEFEFE?text=ARTS" alt="Arts Program">
                    <div class="card-body">
                        <span class="badge">Creative</span>
                        <h3 class="card-title">Arts & Humanities</h3>
                        <p>Exploring subjects like History, Literature, and Political Science to create informed global citizens.</p>
                        <a href="courses.php" class="card-link">Learn More <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="stats-section section-padding">
        <div class="container">
            <div class="grid-4">
                <div class="stat-item">
                    <span class="stat-number" data-target="1500">0</span>
                    <span class="stat-label">Happy Students</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-target="75">0</span>
                    <span class="stat-label">Expert Teachers</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-target="15">0</span>
                    <span class="stat-label">Years of Experience</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-target="95">0</span>
                    <span class="stat-label">Success Rate (%)</span>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script>
    // ======================
    // 1. Custom Slider Logic
    // ======================
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const totalSlides = slides.length;
    let slideInterval;

    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));

        if (index >= totalSlides) currentSlide = 0;
        else if (index < 0) currentSlide = totalSlides - 1;
        else currentSlide = index;

        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function setSlide(index) {
        showSlide(index);
        resetTimer();
    }

    function startTimer() {
        slideInterval = setInterval(nextSlide, 5000);
    }

    function resetTimer() {
        clearInterval(slideInterval);
        startTimer();
    }

    startTimer();

    // ======================
    // 2. Animated Counters
    // ======================
    document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll('.stat-number');
        const speed = 200;

        const animateCounter = (counter) => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const inc = Math.ceil(target / speed);

            if (count < target) {
                counter.innerText = Math.min(count + inc, target);
                setTimeout(() => animateCounter(counter), 20);
            } else {
                if (target === 1500 || target === 75 || target === 15) {
                     counter.innerText = target + '+';
                } else if (target === 95) {
                     counter.innerText = target + '%';
                } else {
                    counter.innerText = target;
                }
            }
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    counters.forEach(counter => {
                        if (counter.innerText === '0') {
                            animateCounter(counter);
                        }
                    });
                    observer.disconnect();
                }
            });
        }, { threshold: 0.5 });

        const statsSection = document.querySelector('.stats-section');
        if (statsSection) {
            observer.observe(statsSection);
        }
    });
    </script>

</body>
</html>
