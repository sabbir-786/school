<?php
// TOPBAR FILE – Framer UI Style with Your Brand Colors
?>
<style>

:root {
    --topbar-bg: #363435;           /* Dark gray for professional base */
    --topbar-text: #FEFEFE;         /* Clean white text */
    --topbar-accent-gold: #FBBB71;  /* Warm gold for icons */
    --topbar-accent-red: #EC3237;   /* Vibrant red for highlights */
    --topbar-hover-bg: rgba(251, 187, 113, 0.12); /* Subtle gold tint */
}

/* Container Styling */
.topbar-framer {
    background-color: var(--topbar-bg);
    color: var(--topbar-text);
    border-bottom: 3px solid var(--topbar-accent-red);
    font-size: 14px;
    padding: 10px 0;
    font-weight: 500;
    font-family: 'Poppins', sans-serif;
    position: relative;
    z-index: 1000;
}

/* Link and Text Styling */
.contact-info a,
.social-link-framer,
.topbar-icon {
    color: var(--topbar-text);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    text-decoration: none;
}

/* Icons styling */
.topbar-icon {
    color: var(--topbar-accent-gold);
    opacity: 0.95;
    margin-right: 7px;
    font-size: 14px;
    position: relative;
    top: -1px;
    transition: all 0.3s ease;
}

/* Contact Info Container */
.contact-info a {
    display: inline-flex;
    align-items: center;
    padding: 4px 8px;
    border-radius: 6px;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Hover Effects for Contact Info */
.contact-info a:hover {
    background-color: var(--topbar-hover-bg);
    color: var(--topbar-accent-gold) !important;
    transform: translateY(-2px);
}

.contact-info a:hover .topbar-icon {
    color: var(--topbar-accent-red);
    transform: scale(1.1);
}

/* Framer-style Social Icons */
.social-link-framer {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 34px;
    height: 34px;
    border-radius: 8px;
    background: rgba(254, 254, 254, 0.08);
    font-size: 15px;
    margin-left: 8px;
    border: 1px solid rgba(254, 254, 254, 0.12);
    transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

/* Social Icon Hover Effect */
.social-link-framer::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, var(--topbar-accent-red) 0%, var(--topbar-accent-gold) 100%);
    opacity: 0;
    transition: opacity 0.35s ease;
    z-index: -1;
}

.social-link-framer:hover {
    background-color: var(--topbar-accent-red);
    border-color: var(--topbar-accent-red);
    color: var(--topbar-text) !important;
    transform: scale(1.15) translateY(-2px);
    box-shadow: 0 6px 16px rgba(236, 50, 55, 0.3);
}

.social-link-framer:hover::before {
    opacity: 1;
}

/* Active state */
.social-link-framer:active {
    transform: scale(1.05) translateY(0);
}

/* Container Layout */
.topbar-framer .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.contact-group {
    display: flex;
    gap: 20px;
    align-items: center;
}

.social-group {
    display: flex;
    align-items: center;
}

/* Responsive adjustments */
@media (max-width: 767.98px) {
    .topbar-framer {
        padding: 12px 0;
    }

    .topbar-framer .container {
        flex-direction: column;
        gap: 14px;
        text-align: center;
    }

    .contact-group {
        flex-direction: column;
        gap: 10px !important;
    }

    .social-group {
        margin-top: 4px;
    }

    .social-link-framer {
        margin-left: 4px;
        margin-right: 4px;
    }
}

/* Smooth entrance animation */
@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.topbar-framer {
    animation: slideDown 0.4s ease-out;
}
</style>

<div class="topbar-framer" role="contentinfo">
    <div class="container">

        <!-- Left Side: Contact Info -->
        <div class="contact-group">

            <div class="contact-info">
                <a href="tel:+919876543210">
                    <i class="fa-solid fa-phone topbar-icon"></i>
                    <span>+91 98765 43210</span>
                </a>
            </div>

            <div class="contact-info">
                <a href="mailto:info@manajschool.edu.in">
                    <i class="fa-solid fa-envelope topbar-icon"></i>
                    <span>info@manajschool.edu.in</span>
                </a>
            </div>

        </div>

        <!-- Right Side: Social Media -->
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
