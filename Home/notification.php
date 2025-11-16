<?php
// includes/notification.php
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
    }

    /* =========================================
       NOTIFICATION PILL STYLES
       ========================================= */
    .notification-wrapper {
        width: 100%;
        overflow-x: hidden; /* Prevents horizontal scrollbar */
        padding: 10px 0;
        position: relative;
        z-index: 990;
        background-color: transparent;
    }

    .notification-pill {
        /* Layout & Sizing */
        display: inline-flex;
        align-items: center;
        gap: 10px;
        width: fit-content; /* Width adjusts to content */

        /* Visuals */
        color: var(--dark);
        padding: 8px 20px;
        border-radius: 50px; /* Pill Shape */

        /* Typography */
        font-family: var(--font-body);
        font-size: 0.95rem;
        font-weight: 600;
        white-space: nowrap;

        /* Animation: Continuous Slide Right to Left */
        animation: slideRightToLeft 20s linear infinite;
    }

    /* Pause animation on hover so users can read */
    .notification-pill:hover {
        animation-play-state: paused;
        cursor: default;
    }

    .notification-icon {
        color: var(--primary);
        animation: bellRing 2s infinite ease-in-out;
    }

    /* Keyframes: Slide Across Screen (Right to Left) */
    @keyframes slideRightToLeft {
        0% {
            /* Start completely off-screen to the RIGHT */
            transform: translateX(100vw);
        }
        100% {
            /* End completely off-screen to the LEFT */
            transform: translateX(-100%);
        }
    }

    /* Keyframes: Bell Ring */
    @keyframes bellRing {
        0%, 100% { transform: rotate(0); }
        10%, 30% { transform: rotate(15deg); }
        20%, 40% { transform: rotate(-15deg); }
        50% { transform: rotate(0); }
    }

    /* Responsive Adjustment */
    @media (max-width: 600px) {
        .notification-pill {
            font-size: 0.85rem;
            padding: 6px 15px;
            /* Speed up slightly on mobile since distance is shorter */
            animation-duration: 12s;
        }
    }
</style>

<div class="notification-wrapper">
    <div class="notification-pill">
        <i class="fa-solid fa-bell notification-icon"></i>
        <span>Admission is going on for Nursery to Class 5th. Hostel facilities is also available.</span>
    </div>
</div>
