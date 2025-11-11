<?php
/**
 * Hero Section with Slideshow
 * Full-width slideshow hero with controls
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manaj School - Home</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
         :root {
            --primary-color: #EC3237;
            --secondary-color: #FBBB71;
            --dark-color: #363435;
            --light-color: #FEFEFE;
            --gradient-primary: linear-gradient(135deg, #EC3237 0%, #C72C31 100%);
            --gradient-secondary: linear-gradient(135deg, #FBBB71 0%, #F9A952 100%);

        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-color);
            color: var(--dark-color);
        }

        /* Hero Slideshow Container */
        .hero-slideshow {
            position: relative;
            width: 100%;
            height: 100vh;
            min-height: 600px;
            overflow: hidden;
            background: #000;
        }

        /* Slides */
        .hero-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.8s ease-in-out;
        }

        .hero-slide.active {
            opacity: 1;
        }

        .hero-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Slide Overlay */
        .hero-slide-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.3));
            display: flex;
            align-items: center;
        }

        /* Slide Content */
        .hero-slide-content {
            color: white;
            max-width: 700px;
            padding: 0 20px;
            animation: slideInLeft 0.8s ease-out;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .hero-slide-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero-slide-content p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.95;
            line-height: 1.6;
        }

        .hero-slide-content .btn-primary {
            background: var(--primary-color);
            border: none;
            padding: 1rem 2.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s;
        }

        .hero-slide-content .btn-primary:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(245, 158, 11, 0.4);
        }

        .hero-slide-content .btn-outline-light {
            border: 2px solid white;
            padding: 1rem 2.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 8px;
            margin-left: 1rem;
            transition: all 0.3s;
        }

        .hero-slide-content .btn-outline-light:hover {
            background: white;
            color: var(--primary-color);
            transform: translateY(-2px);
        }

        /* Slideshow Controls */
        .hero-controls {
            position: absolute;
            top: 30px;
            right: 30px;
            display: flex;
            gap: 12px;
            z-index: 10;
        }

        .hero-control-btn {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.95);
            border: none;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .hero-control-btn:hover {
            background: white;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .hero-control-btn i {
            color: var(--primary-color);
            font-size: 1.2rem;
        }

        .hero-control-btn.active {
            background: var(--primary-color);
        }

        .hero-control-btn.active i {
            color: white;
        }

        /* Navigation Arrows */
        .hero-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.95);
            border: none;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
            z-index: 10;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .hero-nav:hover {
            background: white;
            transform: translateY(-50%) scale(1.1);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .hero-nav i {
            color: var(--primary-color);
            font-size: 1.5rem;
        }

        .hero-nav.prev {
            left: 30px;
        }

        .hero-nav.next {
            right: 30px;
        }

        /* Indicators */
        .hero-indicators {
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 12px;
            z-index: 10;
        }

        .hero-indicator {
            width: 14px;
            height: 14px;
            background: rgba(255, 255, 255, 0.5);
            border: 2px solid white;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.4s;
        }

        .hero-indicator.active {
            background: white;
            width: 45px;
            border-radius: 7px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-slideshow {
                height: 100vh;
                min-height: 500px;
            }

            .hero-slide-content h1 {
                font-size: 2rem;
            }

            .hero-slide-content p {
                font-size: 1rem;
            }

            .hero-slide-content .btn-primary,
            .hero-slide-content .btn-outline-light {
                padding: 0.8rem 1.5rem;
                font-size: 1rem;
                display: block;
                width: 100%;
                margin: 0.5rem 0;
            }

            .hero-controls {
                top: 15px;
                right: 15px;
                gap: 8px;
            }

            .hero-control-btn {
                width: 40px;
                height: 40px;
            }

            .hero-nav {
                width: 45px;
                height: 45px;
            }

            .hero-nav.prev {
                left: 15px;
            }

            .hero-nav.next {
                right: 15px;
            }

            .hero-indicators {
                bottom: 25px;
            }
        }
    </style>
</head>
<body>

    <!-- Hero Slideshow Section -->
    <section class="hero-slideshow">

        <!-- Controls -->
        <div class="hero-controls">
            <button class="hero-control-btn" id="playPauseBtn" title="Play/Pause">
                <i class="fas fa-pause"></i>
            </button>
            <button class="hero-control-btn" id="fullscreenBtn" title="Fullscreen">
                <i class="fas fa-expand"></i>
            </button>
        </div>

        <!-- Slide 1 -->
        <div class="hero-slide active">
            <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=1920" alt="Students Learning">
            <div class="hero-slide-overlay">
                <div class="container">
                    <div class="hero-slide-content">
                        <h1>Welcome to Manaj School</h1>
                        <p>Empowering young minds with quality education and holistic development for a brighter tomorrow.</p>
                        <div>
                            <a href="#admissions" class="btn btn-primary">Apply Now</a>
                            <a href="#about" class="btn btn-outline-light">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="hero-slide">
            <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?w=1920" alt="Science Lab">
            <div class="hero-slide-overlay">
                <div class="container">
                    <div class="hero-slide-content">
                        <h1>State-of-the-Art Facilities</h1>
                        <p>Modern laboratories, smart classrooms, and extensive resources for comprehensive learning.</p>
                        <div>
                            <a href="#facilities" class="btn btn-primary">Explore Facilities</a>
                            <a href="#contact" class="btn btn-outline-light">Visit Campus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="hero-slide">
            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=1920" alt="Sports Day">
            <div class="hero-slide-overlay">
                <div class="container">
                    <div class="hero-slide-content">
                        <h1>Beyond Academics</h1>
                        <p>Fostering excellence in sports, arts, and extracurricular activities for well-rounded development.</p>
                        <div>
                            <a href="#activities" class="btn btn-primary">View Activities</a>
                            <a href="#achievements" class="btn btn-outline-light">Our Achievements</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 4 -->
        <div class="hero-slide">
            <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=1920" alt="Library">
            <div class="hero-slide-overlay">
                <div class="container">
                    <div class="hero-slide-content">
                        <h1>Excellence in Education</h1>
                        <p>Committed to academic excellence with experienced faculty and innovative teaching methods.</p>
                        <div>
                            <a href="#programs" class="btn btn-primary">Our Programs</a>
                            <a href="#faculty" class="btn btn-outline-light">Meet Our Faculty</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 5 -->
        <div class="hero-slide">
            <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?w=1920" alt="Cultural Event">
            <div class="hero-slide-overlay">
                <div class="container">
                    <div class="hero-slide-content">
                        <h1>Celebrating Culture & Creativity</h1>
                        <p>Nurturing talents and celebrating diversity through cultural programs and creative expression.</p>
                        <div>
                            <a href="#events" class="btn btn-primary">Upcoming Events</a>
                            <a href="#gallery" class="btn btn-outline-light">View Gallery</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Indicators -->
        <div class="hero-indicators">
            <span class="hero-indicator active" onclick="goToSlide(0)"></span>
            <span class="hero-indicator" onclick="goToSlide(1)"></span>
            <span class="hero-indicator" onclick="goToSlide(2)"></span>
            <span class="hero-indicator" onclick="goToSlide(3)"></span>
            <span class="hero-indicator" onclick="goToSlide(4)"></span>
        </div>

    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Slideshow functionality
        let currentSlide = 0;
        let isPlaying = true;
        let slideInterval;

        const slides = document.querySelectorAll('.hero-slide');
        const indicators = document.querySelectorAll('.hero-indicator');
        const playPauseBtn = document.getElementById('playPauseBtn');
        const fullscreenBtn = document.getElementById('fullscreenBtn');

        function showSlide(n) {
            slides.forEach(slide => slide.classList.remove('active'));
            indicators.forEach(indicator => indicator.classList.remove('active'));

            currentSlide = (n + slides.length) % slides.length;

            slides[currentSlide].classList.add('active');
            indicators[currentSlide].classList.add('active');
        }

        function changeSlide(direction) {
            showSlide(currentSlide + direction);
            resetAutoPlay();
        }

        function goToSlide(n) {
            showSlide(n);
            resetAutoPlay();
        }

        function autoPlay() {
            if (isPlaying) {
                slideInterval = setInterval(() => {
                    showSlide(currentSlide + 1);
                }, 5000); // Change slide every 5 seconds
            }
        }

        function resetAutoPlay() {
            clearInterval(slideInterval);
            if (isPlaying) {
                autoPlay();
            }
        }

        // Play/Pause control
        playPauseBtn.addEventListener('click', () => {
            isPlaying = !isPlaying;
            const icon = playPauseBtn.querySelector('i');

            if (isPlaying) {
                icon.classList.remove('fa-play');
                icon.classList.add('fa-pause');
                playPauseBtn.classList.remove('active');
                autoPlay();
            } else {
                icon.classList.remove('fa-pause');
                icon.classList.add('fa-play');
                playPauseBtn.classList.add('active');
                clearInterval(slideInterval);
            }
        });

        // Fullscreen control
        fullscreenBtn.addEventListener('click', () => {
            const heroSection = document.querySelector('.hero-slideshow');

            if (!document.fullscreenElement) {
                heroSection.requestFullscreen().catch(err => {
                    console.log('Fullscreen error:', err);
                });
                fullscreenBtn.classList.add('active');
            } else {
                document.exitFullscreen();
                fullscreenBtn.classList.remove('active');
            }
        });

        // Exit fullscreen button state
        document.addEventListener('fullscreenchange', () => {
            if (!document.fullscreenElement) {
                fullscreenBtn.classList.remove('active');
            }
        });

        // Start autoplay
        autoPlay();

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                changeSlide(-1);
            } else if (e.key === 'ArrowRight') {
                changeSlide(1);
            } else if (e.key === ' ') {
                e.preventDefault();
                playPauseBtn.click();
            }
        });
    </script>

</body>
</html>
