<?php
// FOOTER FILE – Include at bottom of all pages
?>
<style>
    /* =========================================
       1. VARIABLES & RESET (Matches Index.php)
       ========================================= */
    :root {
        /* --- COLORS --- */
        --primary: #EC3237;   /* Red */
        --primary-dark: #c82a2f;
        --secondary: #01334d; /* Dark Blue */
        --accent: #FBBB71;    /* Yellow/Gold */
        --dark: #363435;      /* Black/Dark Grey */
        --light: #FEFEFE;     /* White */
        --text-muted: rgba(255, 255, 255, 0.7);

        /* --- FONTS --- */
        --font-heading: 'Merriweather', serif;
        --font-body: 'Poppins', sans-serif;

        --max-width: 1200px;
        --transition: all 0.3s ease;
    }

    /* =========================================
       2. FOOTER LAYOUT & STYLING
       ========================================= */
    .modern-footer {
        position: relative;
        background-color: var(--dark);
        color: var(--light);
        padding: 80px 0 30px;
        overflow: hidden;
        border-top: 4px solid var(--primary);
        font-family: var(--font-body);
    }

    /* Container Replacement */
    .footer-container {
        max-width: var(--max-width);
        margin: 0 auto;
        padding: 0 20px;
        position: relative;
        z-index: 2;
    }

    /* CSS Grid for Footer Columns */
    .footer-grid {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr 1fr 1.2fr; /* Brand gets 2x space */
        gap: 40px;
        margin-bottom: 60px;
    }

    /* =========================================
       3. BACKGROUND ANIMATION (Orbs)
       ========================================= */
    .footer-background {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        overflow: hidden;
        z-index: 0;
        pointer-events: none;
    }

    .gradient-orb {
        position: absolute;
        border-radius: 50%;
        filter: blur(80px);
        opacity: 0.1;
        animation: floatOrb 20s ease-in-out infinite;
    }

    .orb-1 { width: 400px; height: 400px; background: var(--primary); top: -200px; left: -100px; }
    .orb-2 { width: 350px; height: 350px; background: var(--accent); bottom: -150px; right: 10%; animation-delay: -5s; }
    .orb-3 { width: 300px; height: 300px; background: var(--primary); top: 50%; right: -100px; animation-delay: -10s; }

    @keyframes floatOrb {
        0%, 100% { transform: translate(0, 0) scale(1); }
        33% { transform: translate(30px, -30px) scale(1.1); }
        66% { transform: translate(-20px, 20px) scale(0.9); }
    }

    /* =========================================
       4. CONTENT STYLING
       ========================================= */

    /* Brand Section */
    .brand-title {
        font-family: var(--font-heading);
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--light);
        margin-bottom: 5px;
        line-height: 1.2;
    }

    .brand-subtitle {
        font-size: 0.9rem;
        color: var(--accent);
        margin-bottom: 15px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .brand-tagline {
        font-size: 0.95rem;
        color: var(--text-muted);
        line-height: 1.6;
        margin-bottom: 25px;
    }

    /* Social Icons */
    .social-links {
        display: flex;
        gap: 12px;
    }

    .social-icon {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 8px;
        color: var(--light);
        text-decoration: none;
        transition: var(--transition);
    }

    .social-icon:hover {
        background: var(--primary);
        border-color: var(--primary);
        transform: translateY(-3px);
        color: var(--light);
        box-shadow: 0 5px 15px rgba(236, 50, 55, 0.3);
    }

    /* Links Section */
    .footer-links h6 {
        font-family: var(--font-heading);
        font-size: 1.1rem;
        font-weight: 700;
        color: var(--light);
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 10px;
        display: inline-block;
    }

    .footer-links h6::after {
        content: '';
        position: absolute;
        left: 0; bottom: 0;
        width: 30px; height: 3px;
        background: var(--accent);
        border-radius: 2px;
    }

    .links-list { list-style: none; padding: 0; margin: 0; }
    .links-list li { margin-bottom: 12px; }

    .links-list a {
        color: var(--text-muted);
        text-decoration: none;
        font-size: 0.95rem;
        transition: var(--transition);
        display: inline-block;
    }

    .links-list a:hover {
        color: var(--accent);
        transform: translateX(5px);
    }

    /* Bottom Bar */
    .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding-top: 25px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 0.9rem;
        color: var(--text-muted);
    }

    .footer-bottom-links a {
        color: var(--text-muted);
        text-decoration: none;
        margin-left: 20px;
        transition: var(--transition);
    }

    .footer-bottom-links a:hover { color: var(--accent); }

    /* =========================================
       5. RESPONSIVE DESIGN
       ========================================= */
    @media (max-width: 1024px) {
        .footer-grid {
            grid-template-columns: 1fr 1fr 1fr; /* 3 Columns */
            gap: 30px;
        }
        .brand-col { grid-column: span 3; text-align: center; }
        .social-links { justify-content: center; }
        .brand-subtitle { margin-bottom: 20px; }
    }

    @media (max-width: 768px) {
        .footer-grid {
            grid-template-columns: 1fr 1fr; /* 2 Columns */
        }
        .brand-col { grid-column: span 2; }

        .footer-bottom {
            flex-direction: column;
            gap: 15px;
            text-align: center;
        }
        .footer-bottom-links a { margin: 0 10px; }
    }

    @media (max-width: 480px) {
        .footer-grid { grid-template-columns: 1fr; text-align: center; }
        .brand-col { grid-column: span 1; }
        .footer-links h6::after { left: 50%; transform: translateX(-50%); }
    }

    /* Animation Class */
    .fade-in {
        animation: fadeInUp 0.8s ease-out forwards;
        opacity: 0;
    }
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<footer class="modern-footer">
    <div class="footer-background">
        <div class="gradient-orb orb-1"></div>
        <div class="gradient-orb orb-2"></div>
        <div class="gradient-orb orb-3"></div>
    </div>

    <div class="footer-container">

        <div class="footer-grid">
            <div class="footer-links brand-col fade-in">
                <h3 class="brand-title">Manaj School</h3>
                <p class="brand-subtitle">of Career Development</p>
                <p class="brand-tagline">
                    Excellence in Education<br>
                    Modern Learning<br>
                    Experienced Faculty
                </p>
                <div class="social-links">
                    <a href="#" class="social-icon" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social-icon" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" class="social-icon" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#" class="social-icon" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>

            <div class="footer-links fade-in" style="animation-delay: 0.1s;">
                <h6>Quick Links</h6>
                <ul class="links-list">
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="admission.php">Admissions</a></li>
                    <li><a href="#faculty">Faculty</a></li>
                    <li><a href="#events">Events</a></li>
                </ul>
            </div>

            <div class="footer-links fade-in" style="animation-delay: 0.2s;">
                <h6>Programs</h6>
                <ul class="links-list">
                    <li><a href="#">Science</a></li>
                    <li><a href="#">Commerce</a></li>
                    <li><a href="#">Arts</a></li>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Vocational</a></li>
                </ul>
            </div>

            <div class="footer-links fade-in" style="animation-delay: 0.3s;">
                <h6>Resources</h6>
                <ul class="links-list">
                    <li><a href="#">Library</a></li>
                    <li><a href="#">Career Guide</a></li>
                    <li><a href="#">Student Portal</a></li>
                    <li><a href="#">Downloads</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <div class="footer-links fade-in" style="animation-delay: 0.4s;">
                <h6>Connect</h6>
                <ul class="links-list">
                    <li><a href="tel:+919876543210">+91 98765 43210</a></li>
                    <li><a href="mailto:info@manajschool.edu">info@manajschool.edu</a></li>
                    <li><a href="#">Campus Location</a></li>
                    <li><a href="#">Support Center</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom fade-in" style="animation-delay: 0.5s;">
            <div class="copyright">
                © <?= date('Y'); ?> Manaj School. All Rights Reserved.
            </div>
            <div class="footer-bottom-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
            </div>
        </div>

    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
    if (!window.footerObserver) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.modern-footer .fade-in').forEach(el => {
            observer.observe(el);
        });
        window.footerObserver = true;
    }
});
</script>
