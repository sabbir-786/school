<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <style>
        :root {
            --primary-color: #EC3237;
            --secondary-color: #FBBB71;
            --dark-color: #363435;
            --light-color: #FEFEFE;
            --gradient-primary: linear-gradient(135deg, #EC3237 0%, #C72C31 100%);
            --gradient-secondary: linear-gradient(135deg, #FBBB71 0%, #F9A952 100%);
        }

        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 80px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }

        .logo-img {
            width: 50px;
            height: 50px;
            background: var(--gradient-primary);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 24px;
        }

        .logo-text h1 {
            color: var(--primary-color);
            font-size: 24px;
            font-weight: 700;
        }

        .logo-text p {
            color: #6b7280;
            font-size: 12px;
        }

        .nav-center {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 40px;
        }

        .nav-links a {
            text-decoration: none;
            color: #374151;
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--primary-color);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary-color);
            transition: width 0.3s;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-buttons {
            display: flex;
            gap: 15px;
        }

        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-apply {
            background: var(--gradient-secondary);
            color: var(--dark-color);
            border: none;
            font-weight: 700;
        }

        .btn-apply:hover {
            background: linear-gradient(135deg, #F9A952 0%, #FBBB71 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(251, 187, 113, 0.4);
        }

        .btn-contact {
            background: var(--gradient-primary);
            color: white;
        }

        .btn-contact:hover {
            background: linear-gradient(135deg, #C72C31 0%, #EC3237 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(236, 50, 55, 0.4);
        }

        .btn-contact::before {
            content: '✉';
            font-size: 16px;
        }

        .hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
            background: none;
            border: none;
            padding: 5px;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background-color: #374151;
            transition: all 0.3s;
            border-radius: 2px;
        }

        .hamburger.active span:nth-child(1) {
            transform: rotate(45deg) translate(8px, 8px);
        }

        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active span:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -7px);
        }

        /* Mobile Menu */
        .mobile-menu {
            display: none;
            position: absolute;
            top: 80px;
            left: 0;
            right: 0;
            background-color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .mobile-menu.active {
            display: block;
        }

        .mobile-nav-links {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-bottom: 20px;
        }

        .mobile-nav-links a {
            text-decoration: none;
            color: #374151;
            font-size: 16px;
            font-weight: 500;
            padding: 10px;
            border-radius: 6px;
            transition: background-color 0.3s;
        }

        .mobile-nav-links a:hover {
            background-color: #f3f4f6;
            color: var(--primary-color);
        }

        .mobile-buttons {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        /* Responsive */
        @media (max-width: 968px) {
            .nav-center,
            .nav-buttons {
                display: none;
            }

            .hamburger {
                display: flex;
            }
        }

        @media (max-width: 480px) {
            .nav-container {
                height: 70px;
            }

            .logo-img {
                width: 40px;
                height: 40px;
                font-size: 20px;
            }

            .logo-text h1 {
                font-size: 20px;
            }

            .logo-text p {
                font-size: 11px;
            }

            .mobile-menu {
                top: 70px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <!-- Logo -->
            <a href="#" class="logo">
                <div class="logo-img">M</div>
                <div class="logo-text">
                    <h1>Manaj School</h1>
                    <p>Excellence in Education</p>
                </div>
            </a>

            <!-- Center Navigation Links -->
            <div class="nav-center">
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#facilities">Facilities</a></li>
                    <li><a href="#academics">Academics</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                </ul>
            </div>

            <!-- Right Side Buttons -->
            <div class="nav-buttons">
                <a href="#apply" class="btn btn-apply">Apply Now</a>
                <a href="#contact" class="btn btn-contact">Contact Us</a>
            </div>

            <!-- Hamburger Menu -->
            <button class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobileMenu">
            <ul class="mobile-nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#facilities">Facilities</a></li>
                <li><a href="#academics">Academics</a></li>
                <li><a href="#gallery">Gallery</a></li>
            </ul>
            <div class="mobile-buttons">
                <a href="#apply" class="btn btn-apply">Apply Now</a>
                <a href="#contact" class="btn btn-contact">Contact Us</a>
            </div>
        </div>
    </nav>

    <script>
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');

        hamburger.addEventListener('click', function() {
            this.classList.toggle('active');
            mobileMenu.classList.toggle('active');
        });

        // Close menu when clicking on a link
        const mobileLinks = document.querySelectorAll('.mobile-nav-links a, .mobile-buttons a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                mobileMenu.classList.remove('active');
            });
        });
    </script>
</body>
</html>
