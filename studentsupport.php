<?php
// PHP variables for header customization
$page_title = "Student Support - Manaj School";
$page_description = " Comprehensive career counseling, financial aid, and life skills education for holistic growth.";
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
           3. INTRODUCTION SECTION (What is Career?)
           ========================================= */
        .intro-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            margin-bottom: 80px;
        }

        .intro-text h2 { font-size: 2.5rem; margin-bottom: 20px; }

        .definition-box {
            background: var(--light);
            border-left: 4px solid var(--primary);
            padding: 20px 25px;
            margin-bottom: 25px;
            font-style: italic;
            color: var(--dark);
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border-radius: 0 8px 8px 0;
        }

        .intro-img-box {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        .intro-img-box img { width: 100%; height: 100%; object-fit: cover; }

        /* =========================================
           4. SUPPORT GRID (Manaj School Offerings)
           ========================================= */
        .support-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .support-card {
            background: var(--light);
            padding: 40px;
            border-radius: 16px;
            border: 1px solid rgba(0,0,0,0.05);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            position: relative;
            overflow: hidden;
        }

        .support-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        }

        /* Accent Lines */
        .support-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 4px;
            background: var(--secondary);
            transition: var(--transition);
        }
        .support-card:hover::before { background: var(--primary); }

        /* Icon */
        .card-icon {
            width: 60px; height: 60px;
            background: rgba(1, 51, 77, 0.05);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--secondary);
            margin-bottom: 25px;
            transition: var(--transition);
        }
        .support-card:hover .card-icon {
            background: var(--primary);
            color: var(--light);
        }

        .support-card h3 { font-size: 1.5rem; color: var(--dark); margin-bottom: 15px; }
        .support-card p { font-size: 0.95rem; color: var(--text-grey); margin-bottom: 10px; line-height: 1.6; }

        /* Specific Styling for Career Security (USP) */
        .support-card.highlight-card {
            background: #fffbf5; /* Light Yellow Tint */
            border: 1px solid var(--accent);
        }
        .support-card.highlight-card::before { background: var(--accent); }
        .support-card.highlight-card h3 { color: var(--primary); }

        /* =========================================
           5. LIFE SKILLS SECTION
           ========================================= */
        .life-skills-section {
            margin-top: 80px;
            background: var(--secondary);
            color: var(--light);
            border-radius: 20px;
            padding: 60px;
            position: relative;
            overflow: hidden;
        }

        .life-skills-content { position: relative; z-index: 2; }

        .life-skills-section h2 { color: var(--light); font-size: 2.5rem; }
        .life-skills-section p { color: rgba(255,255,255,0.9); font-size: 1.05rem; }

        /* Background Circle Decoration */
        .bg-circle {
            position: absolute;
            width: 300px; height: 300px;
            background: rgba(255,255,255,0.05);
            border-radius: 50%;
            top: -50px; right: -50px;
            z-index: 1;
        }

        /* Responsive */
        @media (max-width: 900px) {
            .intro-grid { grid-template-columns: 1fr; }
            .page-header-title { font-size: 2.5rem; }
            .life-skills-section { padding: 40px; }
        }
    </style>
</head>

<body>

    <?php include 'includes/topbar.php'; ?>
    <?php include 'includes/navbar.php'; ?>

    <section class="page-header">
        <div class="container">
            <h1 class="page-header-title">Student <span class="highlight">Support</span></h1>
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Student Support</li>
            </ul>
        </div>
    </section>

    <main class="section-padding">
        <div class="container">

            <div class="intro-grid">
                <div class="intro-text fade-in">
                    <h2>Career <span class="highlight">Counseling</span></h2>

                    <div class="definition-box">
                        "Career is an occupation or a profession that one undertakes for a long period... It is all about being in society with dignity."
                    </div>

                    <p>
                        The ultimate goal of any student is to set a career. Career counseling is a process of helping students by providing guidance, moral support, and exploring various career options based on their interests.
                    </p>
                    <p>
                        <strong>Why is it needed?</strong> Most students don't know what to do after 10th or 12th. We analyze interests, strengths, and weaknesses to guide them toward the right path, helping them plan career goals for a better future right from school.
                    </p>
                </div>
                <div class="intro-img-box fade-in" style="transition-delay: 0.2s;">
                    [Image of Career Counseling Session]
                    <img src="https://placehold.co/600x450/01334d/FEFEFE?text=Counseling+Session" alt="Career Counseling">
                </div>
            </div>

            <div class="support-grid">

                <div class="support-card fade-in">
                    <div class="card-icon"><i class="fa-solid fa-compass"></i></div>
                    <h3>Career Planning</h3>
                    <p>
                        A strategic process of exploring educational and professional opportunities that suit the student's passion.
                    </p>
                    <p>
                        It is a multi-step process of setting long-term goals that need to be thoroughly planned and executed to achieve the desired benefits.
                    </p>
                </div>

                <div class="support-card fade-in" style="transition-delay: 0.1s;">
                    <div class="card-icon"><i class="fa-solid fa-hand-holding-heart"></i></div>
                    <h3>Support System</h3>
                    <p>We provide a robust platform to help students achieve their dream goals through:</p>
                    <ul>
                        <li><strong>Knowledge Support:</strong> specialized coaching & training.</li>
                        <li><strong>Financial Support:</strong> aid for needy students to ensure education continues.</li>
                    </ul>
                </div>

                <div class="support-card highlight-card fade-in" style="transition-delay: 0.2s;">
                    <div class="card-icon"><i class="fa-solid fa-shield-alt"></i></div>
                    <h3>Career Security</h3>
                    <p>
                        We don't just hand out degrees; we build careers. We feel responsible for the time and money a student invests.
                    </p>
                    <p>
                        <strong>Our Policy:</strong> We provide career security through an <em>Employment Guarantee Policy</em> and <em>Tuition Fee Refund Policy</em> (under the Career Security scheme).
                    </p>
                </div>

                <div class="support-card fade-in" style="transition-delay: 0.3s;">
                    <div class="card-icon"><i class="fa-solid fa-users"></i></div>
                    <h3>We Are Family</h3>
                    <p>
                        We treat our students as family members. If a student faces financial problems, we stand by them to ensure their career is not spoiled.
                    </p>
                    <p>
                        We support their journey even after schooling, whether for higher studies or establishing a business.
                    </p>
                </div>

            </div>

            <div class="life-skills-section fade-in" style="margin-top: 60px;">
                <div class="bg-circle"></div>
                <div class="life-skills-content">
                    <div class="row">
                        <div style="max-width: 800px;">
                            <h2>Life Skill Education</h2>
                            <p>
                                Life skills are psychosocial capabilities that enable individuals to make well-informed decisions—knowing <em>what to do, why to do it, and how to do it.</em>
                            </p>
                            <p>
                                At Manaj School, we actively teach these skills to promote positivity and kindness. These are preventive mental health skills that allow children to live good, happy, and meaningful lives.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
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
