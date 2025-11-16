<?php
// PHP variables for header customization
$page_title = "Hostel Facilities - Manaj School";
$page_description = "A safe, secure, and nurturing home away from home for our students.";
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
           3. INTRO SECTION
           ========================================= */
        .intro-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            margin-bottom: 80px;
        }

        .intro-text h2 { font-size: 2.5rem; margin-bottom: 20px; }
        .intro-text .lead { font-size: 1.1rem; color: var(--dark); font-weight: 500; }

        .intro-img-box {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        .intro-img-box img { width: 100%; height: 100%; object-fit: cover; }

        /* =========================================
           4. AMENITIES GRID
           ========================================= */
        .amenities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .amenity-card {
            background: var(--light);
            padding: 40px 30px;
            border-radius: 16px;
            border: 1px solid rgba(0,0,0,0.05);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            position: relative;
            overflow: hidden;
        }

        .amenity-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.08);
            border-color: var(--accent);
        }

        .amenity-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 4px;
            background: var(--secondary);
            transition: var(--transition);
        }
        .amenity-card:hover::before { background: var(--primary); }

        .amenity-icon {
            width: 60px; height: 60px;
            background: rgba(1, 51, 77, 0.05);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--secondary);
            margin-bottom: 20px;
            transition: var(--transition);
        }
        .amenity-card:hover .amenity-icon {
            background: var(--primary);
            color: var(--light);
        }

        .amenity-card h4 { font-size: 1.3rem; color: var(--dark); }
        .amenity-card p { font-size: 0.95rem; color: var(--text-grey); line-height: 1.6; margin-bottom: 0; }

        /* =========================================
           5. SCHEDULE / LIFE AT HOSTEL
           ========================================= */
        .schedule-section {
            background-color: var(--secondary);
            color: var(--light);
            padding: 80px 0;
            margin-top: 100px;
            border-radius: 20px;
            position: relative;
            overflow: hidden;
        }

        /* Background Pattern */
        .schedule-section::after {
            content: '';
            position: absolute;
            top: 0; right: 0; bottom: 0; left: 0;
            background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.1) 1px, transparent 0);
            background-size: 30px 30px;
            z-index: 0;
        }

        .schedule-content { position: relative; z-index: 1; }

        .schedule-header { text-align: center; margin-bottom: 50px; }
        .schedule-header h2 { color: var(--light); font-size: 2.5rem; }
        .schedule-header p { color: rgba(255,255,255,0.8); }

        .timeline {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .time-slot {
            background: rgba(255,255,255,0.1);
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            border: 1px solid rgba(255,255,255,0.1);
            transition: var(--transition);
        }
        .time-slot:hover { background: rgba(255,255,255,0.2); transform: translateY(-5px); }

        .time-label {
            display: block;
            font-family: var(--font-heading);
            font-weight: 700;
            color: var(--accent);
            font-size: 1.1rem;
            margin-bottom: 5px;
        }
        .activity-label { font-size: 1rem; font-weight: 500; }

        /* =========================================
           RESPONSIVE
           ========================================= */
        @media (max-width: 900px) {
            .intro-grid { grid-template-columns: 1fr; }
            .page-header-title { font-size: 2.5rem; }
        }
    </style>
</head>

<body>

    <?php include 'includes/topbar.php'; ?>
    <?php include 'includes/navbar.php'; ?>

    <section class="page-header">
        <div class="container">
            <h1 class="page-header-title">Hostel <span class="highlight">Facilities</span></h1>
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Hostel</li>
            </ul>
        </div>
    </section>

    <main class="section-padding">
        <div class="container">

            <div class="intro-grid">
                <div class="intro-text fade-in">
                    <h2>Home Away From <span class="highlight">Home</span></h2>
                    <p class="lead">A safe, disciplined, and nurturing environment designed to make students feel comfortable while they focus on their academics.</p>
                    <p>
                        At Manaj School, we understand that sending a child to a hostel is a big decision for parents. That is why we have created a residential facility that prioritizes safety, hygiene, and holistic development.
                    </p>
                    <p>
                        Our hostel is located just 2 km from Harnaut Railway Station, making it easily accessible while being far enough from the city noise to ensure a peaceful study environment.
                    </p>
                    <a href="admission.php" class="btn btn-primary">Apply for Hostel</a>
                </div>
                <div class="intro-img-box fade-in" style="transition-delay: 0.2s;">
                    <img src="https://placehold.co/600x400/01334d/FEFEFE?text=Hostel+Building" alt="Manaj School Hostel">
                </div>
            </div>

            <div class="amenities-wrapper">
                <div class="text-center mb-5 fade-in">
                    <h2>World-Class Amenities</h2>
                    <p>Everything your child needs for a comfortable stay.</p>
                </div>

                <div class="amenities-grid">
                    <div class="amenity-card fade-in">
                        <div class="amenity-icon"><i class="fa-solid fa-shield-halved"></i></div>
                        <h4>24/7 Security</h4>
                        <p>CCTV surveillance and trained security guards ensure total safety for all students around the clock.</p>
                    </div>

                    <div class="amenity-card fade-in" style="transition-delay: 0.1s;">
                        <div class="amenity-icon"><i class="fa-solid fa-utensils"></i></div>
                        <h4>Hygienic Mess</h4>
                        <p>We provide nutritious, balanced, and delicious vegetarian meals prepared in a clean, modern kitchen.</p>
                    </div>

                    <div class="amenity-card fade-in" style="transition-delay: 0.2s;">
                        <div class="amenity-icon"><i class="fa-solid fa-book-reader"></i></div>
                        <h4>Study Hours</h4>
                        <p>Dedicated supervised study hours in the evening to ensure students complete homework and prepare for exams.</p>
                    </div>

                    <div class="amenity-card fade-in" style="transition-delay: 0.3s;">
                        <div class="amenity-icon"><i class="fa-solid fa-user-nurse"></i></div>
                        <h4>Medical Care</h4>
                        <p>First-aid facilities are available on campus, with a doctor on call for any emergencies.</p>
                    </div>

                    <div class="amenity-card fade-in" style="transition-delay: 0.4s;">
                        <div class="amenity-icon"><i class="fa-solid fa-bolt"></i></div>
                        <h4>Power Backup</h4>
                        <p>24-hour electricity supply with heavy-duty generator backup so studies are never interrupted.</p>
                    </div>

                    <div class="amenity-card fade-in" style="transition-delay: 0.5s;">
                        <div class="amenity-icon"><i class="fa-solid fa-volleyball"></i></div>
                        <h4>Recreation</h4>
                        <p>Indoor and outdoor sports facilities are available for students to relax and stay physically fit.</p>
                    </div>
                </div>
            </div>

            <div class="schedule-section fade-in">
                <div class="schedule-content container">
                    <div class="schedule-header">
                        <h2>Daily Routine</h2>
                        <p>A disciplined schedule to balance academics, rest, and play.</p>
                    </div>

                    <div class="timeline">
                        <div class="time-slot">
                            <span class="time-label">05:30 AM</span>
                            <span class="activity-label">Wake Up & Exercise</span>
                        </div>
                        <div class="time-slot">
                            <span class="time-label">07:30 AM</span>
                            <span class="activity-label">Breakfast</span>
                        </div>
                        <div class="time-slot">
                            <span class="time-label">08:00 AM</span>
                            <span class="activity-label">School Classes</span>
                        </div>
                        <div class="time-slot">
                            <span class="time-label">02:00 PM</span>
                            <span class="activity-label">Lunch & Rest</span>
                        </div>
                        <div class="time-slot">
                            <span class="time-label">05:00 PM</span>
                            <span class="activity-label">Sports / Games</span>
                        </div>
                        <div class="time-slot">
                            <span class="time-label">06:30 PM</span>
                            <span class="activity-label">Evening Study</span>
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
