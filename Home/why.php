<?php
// Home/whywe.php
// "Why Choose Us" with Big Outline Watermark Text
?>

<style>
    /* =========================================
       1. RESET & VARIABLES (Matches Index.php)
       ========================================= */
    :root {
        --primary: #EC3237;
        --secondary: #01334d;
        --accent: #FBBB71;
        --dark: #363435;
        --light: #FEFEFE;
        --light-gray: #f8f9fa;
        --text-grey: #555555;

        --font-heading: 'Merriweather', serif;
        --font-body: 'Poppins', sans-serif;

        --max-width: 1200px;
        --transition: all 0.3s ease;
    }

    /* =========================================
       2. SECTION STYLING
       ========================================= */
    .why-we-section {
        padding: 100px 0;
        background-color: var(--light);
        font-family: var(--font-body);
        position: relative; /* Needed for watermark positioning */
        overflow: hidden;   /* Clips the massive text */
    }

    /* --- THE "BIG LETTER WITH BORDER" EFFECT --- */
    .watermark-text {
        position: absolute;
        top: 10%; /* Position near top behind header */
        left: 50%;
        transform: translateX(-50%);
        font-size: clamp(4rem, 12vw, 9rem); /* Responsive Massive Size */
        font-weight: 900;
        font-family: var(--font-body);
        text-transform: uppercase;
        z-index: 0; /* Behind content */
        white-space: nowrap;
        line-height: 1;

        /* The "Border of Alphabet" Logic */
        color: transparent; /* No fill color */
        -webkit-text-stroke: 2px rgba(236, 50, 55, 0.08); /* Red border, very faint */
        user-select: none;
        pointer-events: none;
    }

    /* Content Wrapper to sit on top of watermark */
    .why-content-wrapper {
        position: relative;
        z-index: 1;
    }

    .why-header {
        text-align: center;
        max-width: 800px;
        margin: 0 auto 60px auto;
    }

    .why-label {
        font-size: 0.9rem;
        font-weight: 700;
        color: var(--primary);
        text-transform: uppercase;
        letter-spacing: 2px;
        display: block;
        margin-bottom: 15px;
        background: rgba(236, 50, 55, 0.1);
        display: inline-block;
        padding: 5px 15px;
        border-radius: 20px;
    }

    .why-title {
        font-family: var(--font-heading);
        font-size: 2.5rem;
        color: var(--secondary);
        margin-bottom: 25px;
        font-weight: 800;
    }

    .why-description {
        font-size: 1.1rem;
        color: var(--text-grey);
        line-height: 1.8;
    }

    /* =========================================
       3. CARDS GRID
       ========================================= */
    .why-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .why-card {
        background: rgba(255, 255, 255, 0.8); /* Slight transparency */
        backdrop-filter: blur(10px);         /* Modern glass effect */
        padding: 40px 30px;
        border-radius: 16px;
        border: 1px solid rgba(0,0,0,0.05);
        box-shadow: 0 10px 30px rgba(0,0,0,0.03);
        transition: var(--transition);
        position: relative;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .why-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        border-color: var(--accent);
        background: #fff;
    }

    .why-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; width: 100%; height: 4px;
        background: var(--secondary);
        transition: var(--transition);
    }

    .why-card:hover::before {
        background: var(--primary);
    }

    .card-icon-box {
        width: 60px;
        height: 60px;
        background: rgba(1, 51, 77, 0.05);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 25px;
        font-size: 1.5rem;
        color: var(--secondary);
        transition: var(--transition);
    }

    .why-card:hover .card-icon-box {
        background: var(--primary);
        color: var(--light);
    }

    .card-title {
        font-family: var(--font-heading);
        font-size: 1.3rem;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 15px;
    }

    .card-text {
        font-size: 0.95rem;
        color: var(--text-grey);
        line-height: 1.6;
    }

    @media (max-width: 768px) {
        .why-title { font-size: 2rem; }
    }
</style>

<section class="why-we-section">

    <div class="watermark-text">WHY MANAJ</div>

    <div class="container why-content-wrapper">

        <div class="why-header">
            <span class="why-label">Why Manaj School?</span>
            <h2 class="why-title">Education Beyond Textbooks</h2>
            <p class="why-description">
                "Following the CBSE curriculum, we have added other additional courses to enhance the employability skills of our students, which will help them greatly in getting employment (Government sector and Private sector) in future."
            </p>
        </div>

        <div class="why-grid">

            <div class="why-card">
                <div class="card-icon-box">
                    <i class="fa-solid fa-book-open"></i>
                </div>
                <h3 class="card-title">CBSE Curriculum</h3>
                <p class="card-text">
                    We follow the robust academic framework of CBSE to ensure our students receive standardized, high-quality education that builds a strong intellectual foundation.
                </p>
            </div>

            <div class="why-card">
                <div class="card-icon-box">
                    <i class="fa-solid fa-rocket"></i>
                </div>
                <h3 class="card-title">Employability Skills</h3>
                <p class="card-text">
                    Beyond the syllabus, we integrate practical courses designed to sharpen soft skills, technical abilities, and leadership qualities required in the modern workforce.
                </p>
            </div>

            <div class="why-card">
                <div class="card-icon-box">
                    <i class="fa-solid fa-briefcase"></i>
                </div>
                <h3 class="card-title">Career Success</h3>
                <p class="card-text">
                    Our unique approach aims to secure our students' futures, preparing them specifically for competitive roles in both the Government and Private sectors.
                </p>
            </div>

        </div>

    </div>
</section>
