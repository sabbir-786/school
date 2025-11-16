<?php
// Home/about.php
// Merged "About Us" (Specific Content) and "Director's Message" Section
?>

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
        --light: #ffffffff;     /* White */
        --light-gray: #f8f9fa;
        --text-grey: #555555;
        --text-light: #f0f0f0;

        /* --- FONTS --- */
        --font-heading: 'Merriweather', serif;
        --font-body: 'Poppins', sans-serif;

        --max-width: 1200px;
        --transition: all 0.3s ease;
    }

    /* =========================================
       2. LAYOUT & GRID
       ========================================= */
    .about-director-section {
        padding: 100px 0;
        background-color: var(--light);
        font-family: var(--font-body);
        overflow: hidden;
    }

    .ad-grid {
        display: grid;
        grid-template-columns: 1.1fr 0.9fr; /* Text slightly wider */
        gap: 60px;
        align-items: start;
    }

    /* =========================================
       3. LEFT COLUMN: ABOUT US
       ========================================= */
    .about-label {
        display: inline-block;
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--primary);
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px;
        background: rgba(236, 50, 55, 0.1);
        padding: 6px 12px;
        border-radius: 30px;
    }

    .about-heading {
        font-family: var(--font-heading);
        font-size: 2.8rem;
        line-height: 1.2;
        color: var(--secondary);
        margin-bottom: 25px;
        font-weight: 800;
    }

    .about-heading span {
        color: var(--primary);
        font-style: italic;
    }

    .about-description {
        font-size: 1.05rem;
        color: var(--text-grey);
        line-height: 1.8;
        margin-bottom: 20px;
    }

    .location-box {
        background: var(--light-gray);
        border-left: 4px solid var(--accent);
        padding: 15px 20px;
        margin-bottom: 30px;
        border-radius: 0 8px 8px 0;
    }

    .location-text {
        font-size: 0.95rem;
        color: var(--dark);
        font-weight: 500;
        margin: 0;
    }

    /* Features List */
    .about-features {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 40px;
    }

    .feature-item {
        display: flex;
        align-items: center;
        gap: 10px;
        font-weight: 500;
        color: var(--dark);
    }

    .feature-icon {
        width: 24px;
        height: 24px;
        background: var(--accent);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        color: var(--dark);
    }

    .btn-framer {
        display: inline-block;
        padding: 14px 28px;
        background: var(--secondary);
        color: var(--light);
        text-decoration: none;
        font-weight: 600;
        border-radius: 8px;
        transition: var(--transition);
    }
    .btn-framer:hover {
        background: var(--primary);
        transform: translateY(-3px);
        color: var(--light);
        box-shadow: 0 10px 20px rgba(236, 50, 55, 0.2);
    }

    /* =========================================
       4. RIGHT COLUMN: DIRECTOR'S CARD
       ========================================= */
    .director-card {
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.05);
        position: relative;
    }

    .director-card::before {
        content: '\f10d'; /* FontAwesome Quote Left */
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        position: absolute;
        top: 30px;
        right: 30px;
        font-size: 4rem;
        color: rgba(0,0,0,0.05);
        z-index: 0;
    }

    .director-header {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 25px;
        position: relative;
        z-index: 1;
    }

    .director-img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid var(--accent);
    }

    .director-info h4 {
        margin: 0;
        font-family: var(--font-heading);
        font-size: 1.3rem;
        color: var(--secondary);
    }

    .director-info span {
        font-size: 0.9rem;
        color: var(--primary);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .message-content {
        position: relative;
        z-index: 1;
    }

    .quote-text {
        font-family: var(--font-heading);
        font-style: italic;
        font-size: 1rem;
        color: var(--dark);
        line-height: 1.6;
        margin-bottom: 20px;
        padding-left: 15px;
        border-left: 3px solid var(--accent);
    }

    .hindi-text {
        font-size: 0.95rem;
        color: var(--text-grey);
        line-height: 1.7;
        margin-bottom: 15px;
    }

    /* Responsive */
    @media (max-width: 992px) {
        .ad-grid {
            grid-template-columns: 1fr;
            gap: 50px;
        }
        .about-heading { font-size: 2.2rem; }
    }
</style>

<section class="about-director-section">
    <div class="container">
        <div class="ad-grid">

            <div class="about-content-wrapper">
                <span class="about-label">About Manaj School</span>
                <h2 class="about-heading">
                    Innovating Education,<br>
                    Securing <span class="highlight">Careers.</span>
                </h2>

                <p class="about-description">
                    Our school is located in Harnaut town of Nalanda Bihar on NH-30A, just 1 km away from the Railway Coach Repairing Factory and 2 km away from Harnaut Railway Station. Manaj School is one of the best and renowned schools in Nalanda Bihar. We provide innovative quality of education by framing new patterns of education for the benefit of students' focusing on future career.
                </p>


                <a href="about.php" class="btn-framer">Read More</a>
            </div>

            <div class="director-card">
                <div class="director-header">
                    <img src="https://placehold.co/150x150/01334d/FEFEFE?text=AKU" alt="Manaj School" class="director-img">
                    <div class="director-info">
                        <h4>Mr. Manaj School</h4>
                        <span>Director, Manaj School</span>
                    </div>
                </div>

                <div class="message-content">
                    <p class="quote-text">
                        "Education is a continuous learning process of life to acquire knowledge, employable skills, moral values, spirituality, and social behaviour which enables people to develop their full potential."
                    </p>

                    <p class="hindi-text">
                        वर्तमान परिदृश्य में, अधिकांश छात्र अपना 12वीं बोर्ड लगभग 18 वर्ष की आयु में पूरा करते हैं, जो नौकरी करने के लिए न्यूनतम आयु है।
                    </p>
                    <p class="hindi-text mb-0">
                        इसलिए यहाँ पर पढ़नेवाले सभी छात्रों को रोजगार योग्य बनाकर यह सुनिश्चित करते हैं कि उन्हें भविष्य में अच्छी नौकरी मिले।
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
