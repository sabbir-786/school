<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
        --shadow: 0 5px 15px rgba(0,0,0,0.1);

        /* --- FONTS --- */
        --font-heading: 'Merriweather', serif;
        --font-body: 'Poppins', sans-serif;

        --max-width: 1200px;
        --transition: all 0.3s ease;
    }

    /* --- Navbar Specific Styles --- */
    .vi-navbar {
        background-color: var(--light);
        padding: 10px 40px;
        font-family: var(--font-body);
        border-bottom: 1px solid #ddd;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    /* --- Logo Section --- */
    .vi-logo-container {
        display: flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
    }

    .vi-logo-icon {
        font-size: 40px;
        color: var(--primary); /* Using Global Primary */
    }

    .vi-logo-text {
        display: flex;
        flex-direction: column;
    }

    .vi-brand-name {
        font-size: 24px;
        font-weight: 700;
        color: var(--primary); /* Using Global Primary */
        letter-spacing: 1px;
        line-height: 1;
        text-transform: uppercase;
        font-family: var(--font-heading); /* Optional: Use Serif for Brand */
    }

    .vi-tagline {
        font-size: 11px;
        color: var(--dark);
        font-weight: 500;
        margin-top: 2px;
    }

    /* --- Navigation Links --- */
    .vi-nav-menu {
        display: flex;
        list-style: none;
        gap: 20px;
        margin: 0;
        padding: 0;
        align-items: center;
    }

    .vi-nav-item {
        position: relative;
        padding: 10px 0;
    }

    .vi-nav-link {
        text-decoration: none;
        color: var(--dark);
        font-size: 15px;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 5px;
        transition: color 0.3s;
    }

    .vi-nav-link:hover {
        color: var(--primary);
    }

    .vi-nav-link i {
        font-size: 10px;
        margin-left: 3px;
        transition: transform 0.3s;
    }

    .vi-nav-item:hover .vi-nav-link i {
        transform: rotate(180deg);
    }

    /* --- Dropdown Menu --- */
    .vi-dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: var(--light);
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        list-style: none;
        padding: 0;
        min-width: 220px;
        z-index: 1000;
        border-top: 3px solid var(--primary);
        margin-top: 0;
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        transition: all 0.3s ease;
    }

    .vi-dropdown-menu li {
        border-bottom: 1px solid #eee;
    }
    .vi-dropdown-menu li:last-child {
        border-bottom: none;
    }

    .vi-dropdown-menu li a {
        display: block;
        padding: 12px 20px;
        text-decoration: none;
        color: var(--dark);
        font-size: 14px;
        transition: 0.2s;
    }

    .vi-dropdown-menu li a:hover {
        background-color: var(--light-gray);
        color: var(--primary);
        padding-left: 25px;
    }

    .vi-nav-item:hover .vi-dropdown-menu {
        display: block;
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    /* --- FREE CONSULTATION BUTTON --- */
    .btn-consult-container {
        margin-left: 5px;
        padding: 0;
    }

    .btn-consult {
        position: relative;
        display: inline-block;
        padding: 12px 25px;
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
        color: var(--light);
        background-color: var(--primary);
        text-decoration: none;
        border: none;
        overflow: hidden;
        z-index: 1;
        transition: color 0.4s ease-in-out;
        border-radius: 0px;
    }

    /* Sliding Effect */
    .btn-consult::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background-color: var(--secondary); /* Dark Blue Hover */
        transition: left 0.4s ease-in-out;
        z-index: -1;
    }

    .btn-consult:hover::before {
        left: 0;
    }

    .btn-consult:hover {
        color: var(--light);
        box-shadow: 0 5px 15px rgba(237, 9, 28, 0.3);
    }

    /* --- Responsive --- */
    .vi-hamburger {
        display: none;
        font-size: 24px;
        cursor: pointer;
        color: var(--dark);
    }

    @media (max-width: 1200px) {
        .vi-nav-menu { gap: 15px; }
        .vi-nav-link { font-size: 14px; }
    }

    @media (max-width: 1024px) {
        .vi-navbar { padding: 15px 20px; }
        .vi-brand-name { font-size: 20px; }

        .vi-hamburger { display: block; }

        .vi-nav-menu {
            display: none;
            flex-direction: column;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background: var(--light);
            padding: 0;
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
            max-height: 80vh;
            overflow-y: auto;
        }

        .vi-nav-menu.active { display: flex; }

        .vi-nav-item {
            width: 100%;
            padding: 0;
            border-bottom: 1px solid #eee;
        }

        .vi-nav-link {
            padding: 15px 20px;
            width: 100%;
            justify-content: space-between;
        }

        /* Mobile Dropdown Behavior */
        .vi-dropdown-menu {
            position: static;
            box-shadow: none;
            border-top: none;
            padding-left: 0;
            display: none;
            background-color: #f8f8f8;
            opacity: 1;
            visibility: visible;
            transform: none;
        }

        .vi-nav-item:hover .vi-dropdown-menu {
            display: block;
        }

        .vi-dropdown-menu li a {
            padding-left: 40px;
        }

        .btn-consult-container {
            margin: 20px;
            width: calc(100% - 40px);
        }
        .btn-consult { width: 100%; text-align: center; }
    }
</style>

<?php
    // Check if file exists
    if(file_exists('include/topbar.php')) {
        include 'include/topbar.php';
    }
?>

<nav class="vi-navbar">
    <a href="index.php" class="vi-logo-container">
        <div class="vi-logo-icon">
            <i class="fa-brands fa-viadeo"></i>
        </div>
        <div class="vi-logo-text">
            <span class="vi-brand-name">Manaj School</span>
            <span class="vi-tagline">Staffing | Skilling | Advisory Services</span>
        </div>
    </a>

    <div class="vi-hamburger" onclick="toggleViMenu()">
        <i class="fa-solid fa-bars"></i>
    </div>

    <ul class="vi-nav-menu">
        <li class="vi-nav-item">
            <a href="index.php" class="vi-nav-link">Home</a>
        </li>

        <li class="vi-nav-item">
            <a href="about.php" class="vi-nav-link">
                About Us <i class="fa-solid fa-chevron-down"></i>
            </a>
            <ul class="vi-dropdown-menu">
                <li><a href="about.php">Who We Are</a></li>
                <li><a href="mission.php">Mission & Vision</a></li>
                <li><a href="leadership.php">Leadership Team</a></li>
                <li><a href="awards.php">Awards & Recognition</a></li>
            </ul>
        </li>

        <li class="vi-nav-item">
            <a href="#" class="vi-nav-link">
                Why we? <i class="fa-solid fa-chevron-down"></i>
            </a>
            <ul class="vi-dropdown-menu">
                <li><a href="#">Our Methodology</a></li>
                <li><a href="#">Success Stories</a></li>
                <li><a href="#">Infrastructure</a></li>
                <li><a href="#">Placement Record</a></li>
            </ul>
        </li>

        <li class="vi-nav-item">
            <a href="#" class="vi-nav-link">
                Skill <i class="fa-solid fa-chevron-down"></i>
            </a>
            <ul class="vi-dropdown-menu">
                <li><a href="#">IT Training</a></li>
                <li><a href="#">Soft Skills</a></li>
                <li><a href="#">Corporate Training</a></li>
                <li><a href="#">Vocational Courses</a></li>
            </ul>
        </li>

        <li class="vi-nav-item">
            <a href="academic.php" class="vi-nav-link">
                Academic
            </a>

        </li>

        <li class="vi-nav-item">
            <a href="studentsupport.php" class="vi-nav-link">
                Student Support
            </a>

        </li>

        <li class="vi-nav-item">
            <a href="hostel.php" class="vi-nav-link">Hostel</a>
        </li>

        <li class="vi-nav-item">
            <a href="gallery.php" class="vi-nav-link">Gallery</a>
        </li>

        <li class="vi-nav-item">
            <a href="contact.php" class="vi-nav-link">Contact</a>
        </li>

        <li class="vi-nav-item btn-consult-container">
            <a href="admission.php" class="btn-consult">Admit Now</a>
        </li>
    </ul>
</nav>

<script>
    function toggleViMenu() {
        const menu = document.querySelector('.vi-nav-menu');
        menu.classList.toggle('active');
    }
</script>
