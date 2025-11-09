<?php
/**
 * Main Navigation Component
 * Bootstrap 5 responsive navigation with modern Framer/WordPress design
 * 
 * Features:
 * - Fully responsive with mobile hamburger menu
 * - Gradient logo with tagline
 * - Active link detection
 * - Smooth scroll navigation
 * - Sticky header with scroll effects
 */

// Navigation menu items configuration
$navItems = [
    [
        'label' => 'Home',
        'href' => '#',
        'icon' => 'fas fa-home',
        'active' => true
    ],
    [
        'label' => 'About',
        'href' => '#about',
        'icon' => 'fas fa-info-circle',
        'active' => false
    ],
    [
        'label' => 'Facilities',
        'href' => '#facilities',
        'icon' => 'fas fa-building',
        'active' => false
    ],
    [
        'label' => 'Academics',
        'href' => '#academics',
        'icon' => 'fas fa-book-open',
        'active' => false
    ],
    [
        'label' => 'Gallery',
        'href' => '#gallery',
        'icon' => 'fas fa-images',
        'active' => false
    ],
    [
        'label' => 'Contact',
        'href' => '#contact',
        'icon' => 'fas fa-envelope',
        'active' => false
    ]
];

// School information
$schoolName = 'Manaj School';
$schoolTagline = 'Excellence in Education';

// Get current page for active state detection
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!-- Main Navigation -->
<nav class="navbar navbar-expand-lg main-nav sticky-top">
    <div class="container">
        
      <!-- Logo/Brand -->
<a class="navbar-brand d-flex align-items-center" href="index.php">
    <img src="images/Logo.png" alt="<?php echo htmlspecialchars($schoolName); ?> Logo" style="height: 48px; width: auto; margin-right: 10px;">
    <div>
        <div class="navbar-brand-text"><?php echo htmlspecialchars($schoolName); ?></div>
        <small class="navbar-tagline"><?php echo htmlspecialchars($schoolTagline); ?></small>
    </div>
</a>

        
        <!-- Mobile Toggle Button -->
        <button 
            class="navbar-toggler border-0 shadow-none" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#mainNavbar" 
            aria-controls="mainNavbar" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Navigation Menu -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php foreach ($navItems as $index => $item): ?>
                    <li class="nav-item">
                        <a 
                            class="nav-link <?php echo $item['active'] ? 'active' : ''; ?>" 
                            href="<?php echo htmlspecialchars($item['href']); ?>"
                            <?php if ($index === 0): ?>aria-current="page"<?php endif; ?>>
                            <i class="<?php echo htmlspecialchars($item['icon']); ?> d-lg-none me-2"></i>
                            <?php echo htmlspecialchars($item['label']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            
            <!-- Mobile CTA Button -->
            <div class="d-lg-none mt-3">
                <a href="#admission" class="btn btn-primary w-100 py-2">
                    <i class="fas fa-user-graduate me-2"></i>Apply for Admission
                </a>
            </div>
        </div>
    </div>
</nav>

<style>
    /* Additional Navigation Styles */
    .navbar-toggler {
        padding: 0.5rem 0.75rem;
        font-size: 1.25rem;
        background: var(--primary-color);
        color: white !important;
        border-radius: 8px;
    }
    
    .navbar-toggler:focus {
        box-shadow: 0 0 0 0.25rem rgba(236, 50, 55, 0.25);
    }
    
    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }
    
    .navbar-brand-text {
        font-size: 24px;
        font-weight: 800;
        background: var(--gradient-primary);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        line-height: 1.2;
    }
    
    /* Mobile Menu Styles */
    @media (max-width: 991px) {
        .navbar-collapse {
            background: white;
            padding: 20px;
            margin-top: 15px;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }
        
        .navbar-nav .nav-item {
            margin: 5px 0;
        }
        
        .navbar-nav .nav-link {
            padding: 12px 15px;
            border-radius: 8px;
            transition: all 0.3s;
        }
        
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            background: linear-gradient(135deg, rgba(236, 50, 55, 0.1) 0%, rgba(251, 187, 113, 0.1) 100%);
            color: var(--primary-color);
            transform: translateX(5px);
        }
        
        .navbar-nav .nav-link:after {
            display: none;
        }
    }
    
    /* Desktop Menu Enhancements */
    @media (min-width: 992px) {
        .navbar-nav .nav-item {
            margin: 0 5px;
        }
        
        .navbar-nav .nav-link {
            border-radius: 8px;
            transition: all 0.3s;
        }
        
        .navbar-nav .nav-link:hover {
            background: rgba(236, 50, 55, 0.05);
        }
    }
    
    /* Scroll Animation */
    .main-nav {
        transition: all 0.3s ease;
    }
    
    .main-nav.scrolled {
        padding: 5px 0;
    }
</style>

<script>
    // Active link highlighting based on scroll position
    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('.nav-link[href^="#"]');
        const sections = document.querySelectorAll('section[id]');
        
        // Close mobile menu when clicking on a link
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (navbarCollapse.classList.contains('show')) {
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                        toggle: false
                    });
                    bsCollapse.hide();
                }
            });
        });
        
        // Highlight active section on scroll
        window.addEventListener('scroll', () => {
            let current = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= (sectionTop - 150)) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').includes(current) && current !== '') {
                    link.classList.add('active');
                }
            });
            
            // If at top of page, activate home link
            if (scrollY < 100) {
                navLinks[0].classList.add('active');
            }
        });
    });
</script>