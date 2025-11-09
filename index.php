<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manaj School of Career Development</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
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
            font-family: 'Inter', sans-serif;
            color: var(--dark-color);
            overflow-x: hidden;
        }
        
        /* Top Header Styles */
        .top-header {
            background: var(--gradient-primary);
            color: white;
            padding: 10px 0;
            font-size: 14px;
        }
        
        .header-item {
            color: white;
            text-decoration: none;
            margin-right: 20px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: opacity 0.3s;
        }
        
        .header-item:hover {
            opacity: 0.8;
            color: white;
        }
        
        .social-link {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            margin: 0 5px;
            transition: all 0.3s;
        }
        
        .social-link:hover {
            background: white;
            color: var(--primary-color);
            transform: translateY(-2px);
        }
        
        .btn-admission, .btn-portal {
            padding: 8px 20px;
            border-radius: 25px;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s;
            margin-left: 10px;
        }
        
        .btn-admission {
            background: white;
            color: var(--primary-color);
        }
        
        .btn-admission:hover {
            background: var(--secondary-color);
            color: var(--dark-color);
            transform: translateY(-2px);
        }
        
        .btn-portal {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .btn-portal:hover {
            background: white;
            color: var(--primary-color);
        }
        
        /* Main Navigation */
        .main-nav {
            background: white;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: all 0.3s;
        }
        
        .main-nav.scrolled {
            box-shadow: 0 4px 30px rgba(0,0,0,0.15);
        }
        
        .navbar-brand {
            font-size: 24px;
            font-weight: 800;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .navbar-tagline {
            font-size: 12px;
            color: var(--secondary-color);
            font-weight: 500;
            display: block;
            margin-top: -5px;
        }
        
        .navbar-nav .nav-link {
            color: var(--dark-color);
            font-weight: 500;
            padding: 10px 20px;
            position: relative;
            transition: all 0.3s;
        }
        
        .navbar-nav .nav-link:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 3px;
            background: var(--gradient-primary);
            transition: all 0.3s;
            transform: translateX(-50%);
        }
        
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: var(--primary-color);
        }
        
        .navbar-nav .nav-link:hover:after,
        .navbar-nav .nav-link.active:after {
            width: 80%;
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #EC3237 0%, #C72C31 50%, #363435 100%);
            color: white;
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section:before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 40%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ffffff" fill-opacity="0.05" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,154.7C960,171,1056,181,1152,165.3C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') no-repeat;
            background-size: cover;
        }
        
        .hero-content h1 {
            font-size: 56px;
            font-weight: 800;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .hero-content p {
            font-size: 20px;
            margin-bottom: 30px;
            opacity: 0.9;
        }
        
        .btn-hero {
            padding: 15px 35px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 30px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
            margin: 10px;
        }
        
        .btn-primary-hero {
            background: white;
            color: var(--primary-color);
        }
        
        .btn-primary-hero:hover {
            background: var(--secondary-color);
            color: var(--dark-color);
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        
        .btn-outline-hero {
            background: transparent;
            color: white;
            border: 2px solid white;
        }
        
        .btn-outline-hero:hover {
            background: white;
            color: var(--primary-color);
        }
        
        /* Section Styles */
        .section {
            padding: 80px 0;
        }
        
        .section-title {
            font-size: 42px;
            font-weight: 800;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--gradient-secondary);
            border-radius: 2px;
        }
        
        .section-subtitle {
            font-size: 18px;
            color: #666;
            margin-bottom: 50px;
        }
        
        /* Quick Links */
        .quick-link-card {
            background: white;
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 5px 30px rgba(0,0,0,0.08);
            transition: all 0.3s;
            border: none;
            height: 100%;
        }
        
        .quick-link-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 50px rgba(236, 50, 55, 0.15);
        }
        
        .quick-link-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 32px;
            color: white;
        }
        
        .quick-link-card h4 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--dark-color);
        }
        
        .quick-link-card p {
            color: #666;
            font-size: 14px;
            margin-bottom: 20px;
        }
        
        /* Notice Board */
        .notice-item {
            background: white;
            border-left: 4px solid var(--primary-color);
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.05);
            transition: all 0.3s;
        }
        
        .notice-item:hover {
            box-shadow: 0 5px 25px rgba(0,0,0,0.1);
            transform: translateX(5px);
        }
        
        .notice-date {
            background: var(--gradient-secondary);
            color: var(--dark-color);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 10px;
        }
        
        /* Gallery */
        .gallery-item {
            border-radius: 15px;
            overflow: hidden;
            position: relative;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.3s;
        }
        
        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
        }
        
        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        
        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(236, 50, 55, 0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s;
        }
        
        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }
        
        /* Testimonials */
        .testimonial-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 5px 30px rgba(0,0,0,0.08);
            margin-bottom: 30px;
        }
        
        .testimonial-text {
            font-size: 16px;
            font-style: italic;
            color: #555;
            margin-bottom: 20px;
            line-height: 1.8;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .testimonial-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            font-weight: 700;
        }
        
       
  
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 36px;
            }
            
            .section-title {
                font-size: 32px;
            }
            
            .header-item {
                font-size: 12px;
                margin-right: 10px;
            }
            
            .btn-admission, .btn-portal {
                padding: 6px 15px;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/nav.php'; ?>
    
    <!-- Hero Section -->
    <?php include 'includes/sections/hero.php'; ?>
   
    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <img src="images/school.webp" alt="School Building" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="section-title">About Our School</h2>
                    <p class="section-subtitle">Building Tomorrow's Leaders Today</p>
                    <p>Manaj School of Career Development has been a beacon of educational excellence since 1990. We are committed to nurturing young minds and preparing them for the challenges of tomorrow.</p>
                    <p>Our holistic approach to education combines academic rigor with character development, ensuring that every student reaches their full potential.</p>
                    <ul class="list-unstyled mt-4">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> CBSE Affiliated School</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Experienced Faculty</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Modern Infrastructure</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Sports & Cultural Activities</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <?php include 'includes/sections/gallery.php'; ?>

    <!-- Testimonials -->
    <section class="section bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">What Parents Say</h2>
                <p class="section-subtitle">Hear from our school community</p>
            </div>
            <div class="row">
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"The teachers are incredibly dedicated and the curriculum is well-structured. My daughter has grown tremendously both academically and personally."</p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">RS</div>
                            <div>
                                <h6 class="mb-0">Rajesh Sharma</h6>
                                <small class="text-muted">Parent, Grade 8</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"Excellent facilities and a nurturing environment. The school focuses on overall development, not just academics."</p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">PK</div>
                            <div>
                                <h6 class="mb-0">Priya Kumar</h6>
                                <small class="text-muted">Parent, Grade 5</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"Best decision we made for our son's education. The extracurricular activities and sports programs are outstanding."</p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">AM</div>
                            <div>
                                <h6 class="mb-0">Amit Mishra</h6>
                                <small class="text-muted">Parent, Grade 10</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <?php include 'includes/sections/contact.php'; ?>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

   
    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Custom JS -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('.main-nav');
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offset = 80;
                    const targetPosition = target.offsetTop - offset;
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Active navigation link
        const sections = document.querySelectorAll('section[id]');
        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= (sectionTop - 100)) {
                    current = section.getAttribute('id');
                }
            });

            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').includes(current)) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>