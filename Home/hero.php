<?php
// Home/hero.php
?>
<style>
    /* =========================================
       HERO SLIDER STYLES
       ========================================= */
    .hero-slider {
        position: relative;
        height: 90vh;
        min-height: 600px;
        overflow: hidden;
        background: var(--dark); /* Relies on Global Variable */
    }

    .slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        opacity: 0;
        transition: opacity 1s ease-in-out;
        display: flex;
        align-items: center;
        z-index: 1;
    }

    .slide.active {
        opacity: 1;
        z-index: 2;
    }

    .slide-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, rgba(54, 52, 53, 0.9) 0%, rgba(54, 52, 53, 0.4) 100%);
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 3;
        color: var(--light);
        max-width: 700px;
        padding-left: 20px;
    }

    .hero-title {
        margin-bottom: 20px;
        transform: translateY(30px);
        opacity: 0;
        transition: all 0.8s ease 0.3s;
        color: var(--light);
        /* Typography inherited from Global h1 */
    }

    .hero-description {
        font-size: 1.2rem;
        color: rgba(255,255,255,0.9);
        margin-bottom: 30px;
        transform: translateY(30px);
        opacity: 0;
        transition: all 0.8s ease 0.5s;
    }

    .hero-btns {
        display: flex;
        gap: 15px;
        transform: translateY(30px);
        opacity: 0;
        transition: all 0.8s ease 0.7s;
    }

    /* Animation Trigger */
    .slide.active .hero-title,
    .slide.active .hero-description,
    .slide.active .hero-btns {
        transform: translateY(0);
        opacity: 1;
    }

    /* =========================================
       SLIDE IMAGES (Local Assets)
       ========================================= */
    .slide-1 {
        background-image: url('assets/images/slide01.webp');
    }
    .slide-2 {
        background-image: url('assets/images/slide02.webp');
    }
    .slide-3 {
        background-image: url('assets/images/slide03.webp');
    }

    /* Slider Dots */
    .slider-dots {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 10px;
        z-index: 10;
    }
    .dot {
        width: 12px;
        height: 12px;
        background: rgba(255,255,255,0.5);
        border-radius: 50%;
        cursor: pointer;
        transition: 0.3s;
    }
    .dot.active {
        background: var(--accent);
        width: 30px;
        border-radius: 10px;
    }

    @media (max-width: 768px) {
        .hero-title { font-size: 2.5rem; }
    }
</style>

<section class="hero-slider">
    <div class="slide slide-1 active">
        <div class="slide-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Welcome to <span class="highlight">Manaj School</span></h1>
                <p class="hero-description">Empowering students with quality education, modern facilities, and a path to a successful future.</p>
                <div class="hero-btns">
                    <a href="admission.php" class="btn btn-primary">Apply Now</a>
                    <a href="about.php" class="btn btn-secondary">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="slide slide-2">
        <div class="slide-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Modern <span class="highlight">Curriculum</span></h1>
                <p class="hero-description">Our courses are designed to meet contemporary standards, ensuring your child is ready for tomorrow's challenges.</p>
                <div class="hero-btns">
                    <a href="courses.php" class="btn btn-primary">View Courses</a>
                </div>
            </div>
        </div>
    </div>

    <div class="slide slide-3">
        <div class="slide-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Expert & <span class="highlight">Caring Faculty</span></h1>
                <p class="hero-description">Learn from dedicated and experienced teachers who are masters in their fields and mentors at heart.</p>
                <div class="hero-btns">
                    <a href="about.php#faculty" class="btn btn-primary">Meet Our Team</a>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-dots">
        <div class="dot active" onclick="setSlide(0)"></div>
        <div class="dot" onclick="setSlide(1)"></div>
        <div class="dot" onclick="setSlide(2)"></div>
    </div>
</section>

<script>
// Hero Slider Logic
document.addEventListener("DOMContentLoaded", function() {
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const totalSlides = slides.length;
    let slideInterval;

    // Expose function to window so onclick works
    window.setSlide = function(index) {
        showSlide(index);
        resetTimer();
    }

    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));

        if (index >= totalSlides) currentSlide = 0;
        else if (index < 0) currentSlide = totalSlides - 1;
        else currentSlide = index;

        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function startTimer() {
        slideInterval = setInterval(nextSlide, 5000);
    }

    function resetTimer() {
        clearInterval(slideInterval);
        startTimer();
    }

    // Start
    startTimer();
});
</script>
