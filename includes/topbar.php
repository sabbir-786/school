<?php
// TOPBAR FILE – Framer UI Style with Manaj School Brand Colors
?>
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

        /* --- FONTS --- */
        --font-heading: 'Merriweather', serif;
        --font-body: 'Poppins', sans-serif;

        --max-width: 1200px;
        --transition: all 0.3s ease;

        /* --- Topbar Specific Mappings --- */
        --topbar-bg: var(--secondary);       /* Dark Blue Background */
        --topbar-text: var(--light);         /* White Text */
        --topbar-highlight: var(--primary);  /* Red Accent */
        --topbar-icon-color: rgba(254, 254, 254, 0.9);
        --topbar-hover-bg: rgba(255, 255, 255, 0.1);
    }

    /* Container Styling */
    .topbar-framer {
        background-color: var(--topbar-bg);
        color: var(--topbar-text);
        border-bottom: 3px solid var(--topbar-highlight);
        font-size: 14px;
        padding: 10px 0;
        font-weight: 500;
        font-family: var(--font-body);
        position: relative;
        z-index: 1000;
        width: 100%;
        box-sizing: border-box;
    }

    /* Layout Logic */
    .topbar-framer .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        max-width: var(--max-width);
        margin: 0 auto;
        padding: 0 20px;
    }

    .contact-group {
        display: flex;
        gap: 20px;
        align-items: center;
    }

    .social-group {
        display: flex;
        align-items: center;
        margin-left: auto;
    }

    /* Link and Text Styling */
    .contact-info a,
    .social-link-framer,
    .topbar-icon {
        color: var(--topbar-text);
        transition: var(--transition);
        text-decoration: none;
    }

    /* Icons styling */
    .topbar-icon {
        color: var(--topbar-icon-color);
        margin-right: 7px;
        font-size: 14px;
        position: relative;
        top: 1px;
    }

    /* Contact Info Container */
    .contact-info a {
        display: inline-flex;
        align-items: center;
        padding: 4px 8px;
        border-radius: 6px;
    }

    /* Hover Effects for Contact Info */
    .contact-info a:hover {
        background-color: var(--topbar-hover-bg);
        color: var(--light) !important;
        transform: translateY(-2px);
    }

    .contact-info a:hover .topbar-icon {
        color: var(--topbar-highlight); /* Icons turn Red on hover */
    }

    /* Framer-style Social Icons */
    .social-link-framer {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 34px;
        height: 34px;
        border-radius: 8px;
        background: rgba(255, 255, 255, 0.08);
        font-size: 15px;
        margin-left: 8px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
        color: var(--light) !important;
    }

    /* Social Icon Hover Effect */
    .social-link-framer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: var(--topbar-highlight); /* Red Fill */
        opacity: 0;
        transition: opacity 0.35s ease;
        z-index: -1;
    }

    .social-link-framer:hover {
        background-color: var(--topbar-highlight);
        border-color: var(--topbar-highlight);
        transform: scale(1.15) translateY(-2px);
        box-shadow: 0 6px 16px rgba(236, 50, 55, 0.3); /* Red Glow */
    }

    .social-link-framer:hover::before {
        opacity: 1;
    }

    /* Active state */
    .social-link-framer:active {
        transform: scale(1.05) translateY(0);
    }

    /* --- MOBILE VIEW HIDDEN --- */
    @media (max-width: 900px) {
        .topbar-framer {
            display: none !important;
        }
    }

    /* Smooth entrance animation */
    @keyframes slideDown {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .topbar-framer { animation: slideDown 0.4s ease-out; }
</style>

<div class="topbar-framer" role="contentinfo">
    <div class="container">

        <div class="contact-group">
            <div class="contact-info">
                <a href="tel:+917870214296">
                    <i class="fa-solid fa-phone topbar-icon"></i>
                    <span>+91 7870214296</span>
                </a>
            </div>

            <div class="contact-info">
                <a href="mailto:manajschool@gmail.com">
                    <i class="fa-solid fa-envelope topbar-icon"></i>
                    <span>manajschool@gmail.com</span>
                </a>
            </div>
        </div>

        <div class="social-group">
            <a href="#" class="social-link-framer" title="Facebook" target="_blank" rel="noopener" aria-label="Facebook">
                <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="#" class="social-link-framer" title="Twitter" target="_blank" rel="noopener" aria-label="Twitter">
                <i class="fa-brands fa-x-twitter"></i>
            </a>
            <a href="#" class="social-link-framer" title="Instagram" target="_blank" rel="noopener" aria-label="Instagram">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="#" class="social-link-framer" title="LinkedIn" target="_blank" rel="noopener" aria-label="LinkedIn">
                <i class="fa-brands fa-linkedin-in"></i>
            </a>
        </div>

    </div>
</div>
