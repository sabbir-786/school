<?php
// PHP variables for header customization
$page_title = "Gallery - Manaj School";
$page_description = "Explore the campus, events, and student life at Manaj School of Career Development.";
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

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- Google Fonts -->
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
            --transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: var(--font-body);
            background-color: var(--light);
            color: var(--text-grey);
            font-size: 16px;
            line-height: 1.8;
        }

        .container {
            max-width: var(--max-width);
            margin: 0 auto;
            padding: 0 20px;
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
            font-family: var(--font-heading);
            font-size: 3.5rem;
            font-weight: 900;
            color: var(--light);
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
        .breadcrumb a { text-decoration: none; color: inherit; transition: 0.3s; }
        .breadcrumb a:hover { color: var(--accent); }
        .breadcrumb .active { color: var(--accent); }

        /* =========================================
           3. GALLERY (Framer-style)
           ========================================= */
        .gallery-section {
            padding: 100px 0;
        }

        /* Masonry Grid Layout */
        .gallery-grid {
            column-count: 3;
            column-gap: 24px;
        }

        .gallery-item {
            display: inline-block; /* Required for column break */
            width: 100%;
            margin-bottom: 24px;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: var(--transition);
            break-inside: avoid; /* Prevents item from splitting across columns */
            position: relative;

            /* Scroll Animation */
            opacity: 0;
            transform: translateY(30px);
        }

        /* Animation reveal */
        .gallery-item.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.4s ease;
        }

        /* Hover overlay icon */
        .gallery-item::after {
            content: '\f002'; /* FontAwesome search icon */
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.5);
            font-size: 2rem;
            color: white;
            background: rgba(236, 50, 55, 0.7); /* Primary red bg */
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: var(--transition);
            z-index: 2;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        .gallery-item:hover img {
            transform: scale(1.05);
        }
        .gallery-item:hover::after {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }

        /* Responsive Grid */
        @media (max-width: 992px) {
            .gallery-grid { column-count: 2; }
        }
        @media (max-width: 576px) {
            .gallery-grid { column-count: 1; }
        }

        /* =========================================
           4. LIGHTBOX
           ========================================= */
        .lightbox {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(10, 10, 10, 0.85);
            backdrop-filter: blur(10px);
            display: none; /* Toggled by JS */
            align-items: center;
            justify-content: center;
            z-index: 2000;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .lightbox.show {
            display: flex;
            opacity: 1;
        }

        .lightbox-content {
            position: relative;
            max-width: 90vw;
            max-height: 85vh;
        }

        .lightbox-content img {
            width: 100%;
            height: 100%;
            max-width: 85vw;
            max-height: 85vh;
            object-fit: contain;
            border-radius: 8px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.5);
        }

        .lightbox-caption {
            text-align: center;
            color: var(--light);
            font-family: var(--font-body);
            font-weight: 500;
            margin-top: 15px;
            font-size: 1.1rem;
        }

        /* Lightbox Controls */
        .lightbox-close, .lightbox-prev, .lightbox-next {
            position: fixed;
            background: rgba(255,255,255,0.1);
            color: white;
            border: none;
            font-size: 2rem;
            cursor: pointer;
            transition: 0.3s ease;
            z-index: 2001;
        }
        .lightbox-close:hover, .lightbox-prev:hover, .lightbox-next:hover {
            background: var(--primary);
        }

        .lightbox-close {
            top: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .lightbox-prev, .lightbox-next {
            top: 50%;
            transform: translateY(-50%);
            padding: 10px 15px;
            border-radius: 8px;
        }
        .lightbox-prev { left: 30px; }
        .lightbox-next { right: 30px; }
    </style>
</head>

<body>

    <?php include 'includes/topbar.php'; ?>
    <?php include 'includes/navbar.php'; ?>

    <!-- Header -->
    <section class="page-header">
        <div class="container">
            <h1 class="page-header-title">Our <span class="highlight">Gallery</span></h1>
            <div class="breadcrumb">
                <a href="index.php">Home</a> &nbsp;/&nbsp; <span class="active">Gallery</span>
            </div>
        </div>
    </section>

    <!-- Main Gallery Section -->
    <section class="gallery-section">
        <div class="container">
            <div class="gallery-grid">

                <!-- Use different placeholder sizes to show the masonry effect -->
                <a href="https://placehold.co/800x600/EC3237/FEFEFE?text=Campus+Event" class="gallery-item" data-title="Campus Event 2024">
                    <img src="https://placehold.co/800x600/EC3237/FEFEFE?text=Campus+Event" alt="Campus Event 2024">
                </a>

                <a href="https://placehold.co/800x1000/01334d/FEFEFE?text=Science+Lab" class="gallery-item" data-title="Modern Science Lab">
                    <img src="https://placehold.co/800x1000/01334d/FEFEFE?text=Science+Lab" alt="Modern Science Lab">
                </a>

                <a href="https://placehold.co/800x800/FBBB71/363435?text=Art+Workshop" class="gallery-item" data-title="Art & Craft Workshop">
                    <img src="https://placehold.co/800x800/FBBB71/363435?text=Art+Workshop" alt="Art & Craft Workshop">
                </a>

                <a href="https://placehold.co/800x700/363435/FEFEFE?text=Library" class="gallery-item" data-title="School Library">
                    <img src="https://placehold.co/800x700/363435/FEFEFE?text=Library" alt="School Library">
                </a>

                <a href="https://placehold.co/800x1200/EC3237/FEFEFE?text=Sports+Day" class="gallery-item" data-title="Annual Sports Day">
                    <img src="https://placehold.co/800x1200/EC3237/FEFEFE?text=Sports+Day" alt="Annual Sports Day">
                </a>

                <a href="https://placehold.co/800x600/01334d/FEFEFE?text=Our+Students" class="gallery-item" data-title="Happy Students">
                    <img src="https://placehold.co/800x600/01334d/FEFEFE?text=Our+Students" alt="Happy Students">
                </a>

                <a href="https://placehold.co/800x800/FBBB71/363435?text=Computer+Lab" class="gallery-item" data-title="Computer Lab">
                    <img src="https://placehold.co/800x800/FBBB71/363435?text=Computer+Lab" alt="Computer Lab">
                </a>

                <a href="https://placehold.co/800x1000/363435/FEFEFE?text=Graduation" class="gallery-item" data-title="Graduation Ceremony">
                    <img src="https://placehold.co/800x1000/363435/FEFEFE?text=Graduation" alt="Graduation Ceremony">
                </a>

            </div>
        </div>
    </section>

    <!-- Lightbox HTML Structure (Hidden by default) -->
    <div class="lightbox" id="galleryLightbox">
        <button class="lightbox-close" aria-label="Close image gallery">&times;</button>
        <button class="lightbox-prev" aria-label="Previous image">&#10094;</button>
        <button class="lightbox-next" aria-label="Next image">&#10095;</button>
        <div class="lightbox-content">
            <img src="" alt="Gallery Image" id="lightboxImg">
            <div class="lightbox-caption" id="lightboxCaption"></div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <script>
    document.addEventListener('DOMContentLoaded', function () {

        // --- 1. LIGHTBOX SCRIPT ---
        const galleryItems = document.querySelectorAll('.gallery-item');
        const lightbox = document.getElementById('galleryLightbox');
        const lightboxImg = document.getElementById('lightboxImg');
        const lightboxCaption = document.getElementById('lightboxCaption');
        const closeBtn = lightbox.querySelector('.lightbox-close');
        const prevBtn = lightbox.querySelector('.lightbox-prev');
        const nextBtn = lightbox.querySelector('.lightbox-next');

        let currentIndex = 0;
        let galleryImages = [];

        // Populate galleryImages array
        galleryItems.forEach((item, index) => {
            galleryImages.push({
                src: item.href,
                title: item.dataset.title || 'Manaj School Gallery'
            });

            // Add click listener
            item.addEventListener('click', function(e) {
                e.preventDefault();
                currentIndex = index;
                showImage(currentIndex);
            });
        });

        function showImage(index) {
            const imgData = galleryImages[index];
            lightboxImg.src = imgData.src;
            lightboxImg.alt = imgData.title;
            lightboxCaption.textContent = imgData.title;
            lightbox.classList.add('show');

            // Toggle controls
            prevBtn.style.display = (index === 0) ? 'none' : 'block';
            nextBtn.style.display = (index === galleryImages.length - 1) ? 'none' : 'block';
        }

        function closeLightbox() {
            lightbox.classList.remove('show');
        }

        function showNext() {
            if (currentIndex < galleryImages.length - 1) {
                currentIndex++;
                showImage(currentIndex);
            }
        }

        function showPrev() {
            if (currentIndex > 0) {
                currentIndex--;
                showImage(currentIndex);
            }
        }

        // Event Listeners for controls
        closeBtn.addEventListener('click', closeLightbox);
        nextBtn.addEventListener('click', showNext);
        prevBtn.addEventListener('click', showPrev);

        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (lightbox.classList.contains('show')) {
                if (e.key === 'Escape') closeLightbox();
                if (e.key === 'ArrowRight') showNext();
                if (e.key === 'ArrowLeft') showPrev();
            }
        });

        // --- 2. SCROLL ANIMATION SCRIPT ---
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, i) => {
                if (entry.isIntersecting) {
                    // Stagger the animation
                    entry.target.style.transitionDelay = `${i * 50}ms`;
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 }); // 10% visible

        // Observe all gallery items
        document.querySelectorAll('.gallery-item').forEach(item => {
            observer.observe(item);
        });

    });
    </script>

</body>
</html>
