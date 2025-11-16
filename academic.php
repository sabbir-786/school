<?php
// PHP variables for header customization
$page_title = "Academic Program - Manaj School";
$page_description = "Discover our comprehensive academic curriculum ranging from Foundational to Secondary levels.";
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

    <link rel="icon" type="image/png" href="assets/images/logo.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* =========================================
           1. RESET & VARIABLES (Matches Index.php)
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
            line-height: 1.8;
            scroll-behavior: smooth;
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
        img { max-width: 100%; display: block; }

        /* Utilities */
        .container {
            max-width: var(--max-width);
            margin: 0 auto;
            padding: 0 20px;
        }
        .section-padding { padding: 100px 0; }

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
           2. PAGE HEADER
           ========================================= */
        .page-header {
            position: relative;
            background: var(--dark);
            color: var(--light);
            padding: 140px 0 80px 0;
            text-align: center;
            border-bottom: 4px solid var(--primary);
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
        .breadcrumb {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 15px;
            color: rgba(255,255,255,0.7);
        }
        .breadcrumb li.active { color: var(--accent); font-weight: 600; }
        .breadcrumb li:not(:last-child)::after { content: '/'; margin-left: 10px; color: rgba(255,255,255,0.4); }

        /* =========================================
           3. ACADEMIC LAYOUT (Sidebar + Content)
           ========================================= */
        .academic-layout {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 50px;
            align-items: start;
        }

        /* --- Sidebar Menu --- */
        .academic-sidebar {
            background: var(--light);
            padding: 30px;
            border-radius: 12px;
            position: sticky;
            top: 100px; /* Sticky on scroll */
            border: 1px solid rgba(0,0,0,0.05);
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        .sidebar-title {
            font-size: 1.2rem;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--accent);
            color: var(--dark);
        }

        .sidebar-nav li { margin-bottom: 10px; }

        .sidebar-nav a {
            display: block;
            padding: 12px 15px;
            border-radius: 8px;
            font-weight: 500;
            color: var(--text-grey);
            transition: var(--transition);
            background: transparent;
        }

        .sidebar-nav a:hover, .sidebar-nav a.active {
            background: var(--secondary);
            color: var(--light);
            transform: translateX(5px);
        }

        .sidebar-nav a i { margin-right: 10px; width: 20px; }

        /* --- Content Sections --- */
        .academic-section {
            background: var(--light);
            border-radius: 16px;
            overflow: hidden;
            margin-bottom: 50px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            border: 1px solid rgba(0,0,0,0.05);
            scroll-margin-top: 120px; /* For smooth scrolling offset */
        }

        .section-header {
            background: var(--secondary);
            padding: 25px 40px;
            color: var(--light);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .section-header h3 { margin: 0; color: var(--light); font-size: 1.5rem; }
        .section-icon { font-size: 1.8rem; color: var(--accent); opacity: 0.8; }

        .section-body {
            padding: 40px;
        }

        .level-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .level-content h4 { font-size: 1.2rem; color: var(--primary); margin-bottom: 15px; }

        .feature-list { margin-top: 20px; }
        .feature-list li {
            margin-bottom: 10px;
            position: relative;
            padding-left: 25px;
            font-size: 0.95rem;
        }
        .feature-list li::before {
            content: '\f00c'; /* FontAwesome Check */
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            left: 0; top: 2px;
            color: var(--accent);
            font-size: 0.8rem;
        }

        .level-image {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        .level-image img { width: 100%; height: auto; transition: transform 0.5s ease; }
        .academic-section:hover .level-image img { transform: scale(1.05); }

        /* Alternate Layout for visual interest */
        .academic-section:nth-child(even) .level-grid {
            grid-template-columns: 1fr 1.5fr;
            direction: rtl; /* Flip order visually */
        }
        .academic-section:nth-child(even) .level-grid > * {
            direction: ltr; /* Reset text direction */
        }

        /* Responsive */
        @media (max-width: 900px) {
            .academic-layout { grid-template-columns: 1fr; }
            .academic-sidebar { display: none; /* Hide sidebar on mobile, stack content */ }
            .level-grid, .academic-section:nth-child(even) .level-grid {
                grid-template-columns: 1fr;
                direction: ltr;
            }
        }
    </style>
</head>

<body>

    <?php include 'includes/topbar.php'; ?>
    <?php include 'includes/navbar.php'; ?>

    <section class="page-header">
        <div class="container">
            <h1 class="page-header-title">Academic <span class="highlight">Program</span></h1>
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Academics</li>
            </ul>
        </div>
    </section>

    <main class="section-padding">
        <div class="container">
            <div class="academic-layout">

                <aside class="academic-sidebar">
                    <h3 class="sidebar-title">Academic Levels</h3>
                    <ul class="sidebar-nav">
                        <li><a href="#foundational" class="active"><i class="fa-solid fa-shapes"></i> Foundational Level</a></li>
                        <li><a href="#primary"><i class="fa-solid fa-book-open"></i> Primary Level</a></li>
                        <li><a href="#middle"><i class="fa-solid fa-flask"></i> Middle Level</a></li>
                        <li><a href="#secondary"><i class="fa-solid fa-graduation-cap"></i> Secondary Level</a></li>
                    </ul>
                </aside>

                <div class="academic-content">

                    <div id="foundational" class="academic-section fade-in">
                        <div class="section-header">
                            <h3>Foundational Level</h3>
                            <div class="section-icon"><i class="fa-solid fa-shapes"></i></div>
                        </div>
                        <div class="section-body">
                            <div class="level-grid">
                                <div class="level-content">
                                    <h4>Nursery, LKG & UKG</h4>
                                    <p>
                                        Our Foundational Stage focuses on play-based, activity-based, and inquiry-based learning. We believe that the early years are crucial for cognitive, affective, and psychomotor development.
                                    </p>
                                    <ul class="feature-list">
                                        <li>Focus on good behavior and courtesy.</li>
                                        <li>Development of gross and fine motor skills.</li>
                                        <li>Learning through toys, visual aids, and storytelling.</li>
                                        <li>Safe and colorful classroom environment.</li>
                                    </ul>
                                </div>
                                <div class="level-image">
                                    <img src="https://placehold.co/500x350/FBBB71/363435?text=Kids+Playing" alt="Foundational Level">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="primary" class="academic-section fade-in">
                        <div class="section-header">
                            <h3>Primary Level</h3>
                            <div class="section-icon"><i class="fa-solid fa-book-open"></i></div>
                        </div>
                        <div class="section-body">
                            <div class="level-grid">
                                <div class="level-content">
                                    <h4>Class 1 to Class 5</h4>
                                    <p>
                                        The Preparatory Stage builds on the play-based learning of the foundational stage but introduces more formal classroom learning. The focus shifts to building literacy, numeracy, and communication skills.
                                    </p>
                                    <ul class="feature-list">
                                        <li>Introduction to core subjects: Math, Science, Languages.</li>
                                        <li>Emphasis on reading, writing, and speaking skills.</li>
                                        <li>Project-based learning to encourage curiosity.</li>
                                        <li>Introduction to reasoning and logical thinking classes.</li>
                                    </ul>
                                </div>
                                <div class="level-image">
                                    <img src="https://placehold.co/500x350/EC3237/FEFEFE?text=Primary+Classroom" alt="Primary Level">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="middle" class="academic-section fade-in">
                        <div class="section-header">
                            <h3>Middle Level</h3>
                            <div class="section-icon"><i class="fa-solid fa-flask"></i></div>
                        </div>
                        <div class="section-body">
                            <div class="level-grid">
                                <div class="level-content">
                                    <h4>Class 6 to Class 8</h4>
                                    <p>
                                        At the Middle Stage, students are introduced to more abstract concepts in sciences, mathematics, arts, social sciences, and humanities. Experiential learning remains a core pedagogical tool.
                                    </p>
                                    <ul class="feature-list">
                                        <li>Subject-specialist teachers for in-depth learning.</li>
                                        <li>Computer education and coding basics.</li>
                                        <li>Science laboratories and practical experiments.</li>
                                        <li>Preparation for competitive scholarship exams.</li>
                                    </ul>
                                </div>
                                <div class="level-image">
                                    <img src="https://placehold.co/500x350/01334d/FEFEFE?text=Science+Lab" alt="Middle Level">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="secondary" class="academic-section fade-in">
                        <div class="section-header">
                            <h3>Secondary Level</h3>
                            <div class="section-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                        </div>
                        <div class="section-body">
                            <div class="level-grid">
                                <div class="level-content">
                                    <h4>Class 9 & Class 10</h4>
                                    <p>
                                        The Secondary Stage is designed to prepare students for their board examinations and future career paths. We offer a rigorous academic environment balanced with career counseling and life skills.
                                    </p>
                                    <ul class="feature-list">
                                        <li>Intensive preparation for CBSE Board Exams.</li>
                                        <li>Career counseling and stream selection guidance.</li>
                                        <li>Focus on critical thinking and problem-solving.</li>
                                        <li>Strictly focused on English spoken environment.</li>
                                    </ul>
                                </div>
                                <div class="level-image">
                                    <img src="https://placehold.co/500x350/363435/FEFEFE?text=Senior+Students" alt="Secondary Level">
                                </div>
                            </div>
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

        // 2. Active Link Switching on Scroll
        const sections = document.querySelectorAll('.academic-section');
        const navLinks = document.querySelectorAll('.sidebar-nav a');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (pageYOffset >= sectionTop - 150) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('active');
                }
            });
        });
    });
    </script>

</body>
</html>
