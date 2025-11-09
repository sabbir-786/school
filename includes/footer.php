<?php
// includes/footer.php
?>
<footer class="main-footer bg-dark text-light pt-5 pb-3 mt-5">
    <div class="container">
        <div class="row gy-4">
            <!-- About Section -->
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold text-uppercase mb-3">Manaj School of Career Development</h5>
                <p class="text-white-50">
                    Committed to providing quality education and nurturing young minds for a brighter future.
                </p>
                <div class="d-flex gap-3 mt-3">
                    <a href="#" class="footer-social" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="footer-social" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="footer-social" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="footer-social" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold text-uppercase mb-3">Quick Links</h5>
                <ul class="list-unstyled footer-links">
                    <li><a href="#about"><i class="fa-solid fa-angle-right me-2"></i>About Us</a></li>
                    <li><a href="#admission"><i class="fa-solid fa-angle-right me-2"></i>Admission</a></li>
                    <li><a href="#facilities"><i class="fa-solid fa-angle-right me-2"></i>Facilities</a></li>
                    <li><a href="#academics"><i class="fa-solid fa-angle-right me-2"></i>Academics</a></li>
                </ul>
            </div>

            <!-- Important Links -->
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold text-uppercase mb-3">Important Links</h5>
                <ul class="list-unstyled footer-links">
                    <li><a href="#"><i class="fa-solid fa-angle-right me-2"></i>Gallery</a></li>
                    <li><a href="#"><i class="fa-solid fa-angle-right me-2"></i>Events</a></li>
                    <li><a href="#"><i class="fa-solid fa-angle-right me-2"></i>News</a></li>
                    <li><a href="#"><i class="fa-solid fa-angle-right me-2"></i>Career</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6">
                <h5 class="fw-bold text-uppercase mb-3">Contact Info</h5>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><i class="fas fa-map-marker-alt me-2 text-primary"></i>Chas, Bokaro, Jharkhand</li>
                    <li class="mb-2"><i class="fas fa-phone me-2 text-success"></i>+91 11 2345 6789</li>
                    <li><i class="fas fa-envelope me-2 text-warning"></i>info@manajschool.edu.in</li>
                </ul>
            </div>
        </div>

        <hr class="border-secondary mt-5 mb-3">

        <div class="text-center text-white-50 small">
            &copy; <?php echo date('Y'); ?> Manaj School of Career Development. All Rights Reserved.
        </div>
    </div>
</footer>

<!-- Bootstrap + Font Awesome -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>

<!-- Custom Footer Styles -->
<style>
    .footer-links a {
        color: #cfd2d6;
        text-decoration: none;
        transition: color 0.3s;
        display: inline-block;
        margin-bottom: 6px;
    }
    .footer-links a:hover {
        color: #0d6efd;
    }
    .footer-social {
        color: #cfd2d6;
        font-size: 1.1rem;
        transition: all 0.3s;
    }
    .footer-social:hover {
        color: #0d6efd;
        transform: translateY(-3px);
    }
    .main-footer {
        background-color: #111827;
    }
    .main-footer h5 {
        color: #fff;
    }
    .main-footer p, .main-footer li {
        color: #d1d5db;
        font-size: 15px;
    }
</style>
