<?php
/**
 * Top Header Component
 * Contact information, social links, and quick actions
 * Bootstrap 5 implementation with modern design
 */
?>

<!-- Top Header -->
<header class="top-header">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-center py-2">
            
            <!-- Left Side - Contact Info -->
            <div class="d-flex flex-wrap align-items-center gap-3">
                <a href="tel:+911123456789" class="header-item text-decoration-none">
                    <i class="fas fa-phone me-2"></i>
                    <span class="d-none d-md-inline">+91 11 2345 6789</span>
                </a>
                <a href="mailto:info@manajschool.edu.in" class="header-item text-decoration-none d-none d-sm-flex">
                    <i class="fas fa-envelope me-2"></i>
                    <span class="d-none d-lg-inline">info@manajschool.edu.in</span>
                </a>
                <div class="header-item d-none d-md-flex">
                    <i class="fas fa-map-marker-alt me-2"></i>
                    <span>Chas, Jharkhand</span>
                </div>
            </div>

            <!-- Right Side - Social Links & Actions -->
            <div class="d-flex align-items-center gap-3">
                
                <!-- Social Links -->
                <div class="d-none d-lg-flex align-items-center gap-2">
                    <a href="#" class="social-link" aria-label="Facebook" title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="Twitter" title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="Instagram" title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="YouTube" title="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" class="social-link" aria-label="LinkedIn" title="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>

                <!-- Quick Actions -->
                <div class="d-flex align-items-center gap-2">
                    <a href="includes/sections/admission.php" class="btn-admission text-decoration-none">
                        <i class="fas fa-user-graduate"></i>
                        <span class="d-none d-sm-inline ms-2">Apply Now</span>
                    </a>
                  
                </div>
            </div>
        </div>
    </div>
</header>
