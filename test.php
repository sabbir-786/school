<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Responsive Navbar</title>
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
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: #fafafa;
        }

      .navbar {
            background-color: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }


  /* Hidden Navbar (scroll down) */
  .navbar.hide {
    top: -100px;
  }

  /* Visible Navbar (scroll up) */
  .navbar.show {
    top: 0;
  }


        .nav-container {
            width: 100%;
            padding: 0 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 72px;
            gap: 60px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 14px;
            text-decoration: none;
            flex-shrink: 0;
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .logo:hover {
            transform: scale(1.02);
        }

        .logo-img {
            width: 48px;
            height: 48px;
            background: var(--gradient-primary);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 22px;
            box-shadow: 0 4px 12px rgba(236, 50, 55, 0.25);
            transition: all 0.3s ease;
        }

        .logo:hover .logo-img {
            box-shadow: 0 6px 20px rgba(236, 50, 55, 0.35);
            transform: translateY(-2px);
        }

        .logo-text h1 {
            color: var(--dark-color);
            font-size: 22px;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .logo-text p {
            color: #6b7280;
            font-size: 12px;
            font-weight: 500;
            letter-spacing: 0.3px;
        }

        .nav-center {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark-color);
            font-size: 15px;
            font-weight: 500;
            padding: 10px 18px;
            border-radius: 8px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            letter-spacing: 0.2px;
        }

        .nav-links a:hover {
            color: var(--primary-color);
            background-color: rgba(236, 50, 55, 0.08);
            transform: translateY(-1px);
        }

        .nav-links a.active {
            color: var(--primary-color);
            background-color: rgba(236, 50, 55, 0.1);
        }

        .nav-buttons {
            display: flex;
            gap: 12px;
            flex-shrink: 0;
        }

        .btn {
            padding: 11px 26px;
            border: none;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            letter-spacing: 0.2px;
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .btn:hover::before {
            width: 300px;
            height: 300px;
        }

        .btn span {
            position: relative;
            z-index: 1;
        }

        .btn-apply {
            background: var(--gradient-secondary);
            color: var(--light-color);
            box-shadow: 0 2px 8px rgba(251, 187, 113, 0.3);
        }

        .btn-apply:hover {
            background: linear-gradient(135deg, #F9A952 0%, #FBBB71 100%);
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 8px 20px rgba(251, 187, 113, 0.45);
        }

        .btn-contact {
            background: var(--gradient-primary);
            color: white;
            box-shadow: 0 2px 8px rgba(236, 50, 55, 0.3);
        }

        .btn-contact:hover {
            background: linear-gradient(135deg, #C72C31 0%, #EC3237 100%);
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 8px 20px rgba(236, 50, 55, 0.5);
        }

        .hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
            background: none;
            border: none;
            padding: 8px;
            border-radius: 6px;
            transition: background-color 0.3s;
        }

        .hamburger span {
            width: 26px;
            height: 2.5px;
            background-color: var(--dark-color);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 2px;
        }

        .hamburger.active span:nth-child(1) {
            transform: rotate(45deg) translate(7px, 7px);
        }

        .hamburger.active span:nth-child(2) {
            opacity: 0;
            transform: translateX(-10px);
        }

        .hamburger.active span:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -7px);
        }

        /* Mobile Menu */
        .mobile-menu {
            display: none;
            position: absolute;
            top: 72px;
            left: 0;
            right: 0;
            background-color: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 24px 20px;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            animation: slideDown 0.3s ease;
        }

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

        .mobile-menu.active {
            display: block;
        }

        .mobile-nav-links {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-bottom: 20px;
        }

        .mobile-nav-links a {
            text-decoration: none;
            color: var(--dark-color);
            font-size: 16px;
            font-weight: 500;
            padding: 14px 16px;
            border-radius: 8px;
            transition: all 0.3s;
            display: block;
        }

        .mobile-nav-links a:hover,
        .mobile-nav-links a.active {
            background-color: rgba(236, 50, 55, 0.1);
            color: var(--primary-color);
            transform: translateX(4px);
        }

        .mobile-buttons {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .mobile-buttons .btn {
            width: 100%;
            justify-content: center;
        }

        @media (max-width: 968px) {
            .nav-center,
            .nav-buttons {
                display: none;
            }

            .hamburger {
                display: flex;
            }

            .nav-container {
                padding: 0 20px;
            }
        }

        .demo-content {
            padding: 60px 20px;
            text-align: center;
            color: #6b7280;
        }

        .demo-content h2 {
            font-size: 32px;
            color: var(--dark-color);
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="#" class="logo">
                <div class="logo-img">M</div>
                <div class="logo-text">
                    <h1>Manaj School</h1>
                    <p>Excellence in Education</p>
                </div>
            </a>

            <div class="nav-center">
                <ul class="nav-links">
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#facilities">Facilities</a></li>
                    <li><a href="#academics">Academics</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                </ul>
            </div>

            <div class="nav-buttons">
                <a href="#apply" class="btn btn-apply"><span>Apply Now</span></a>
                <a href="#contact" class="btn btn-contact"><span class="icon"></span><span>Contact Us</span></a>
            </div>

            <button class="hamburger" id="hamburger" aria-label="Toggle menu">
                <span></span><span></span><span></span>
            </button>
        </div>

        <div class="mobile-menu" id="mobileMenu">
            <ul class="mobile-nav-links">
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#facilities">Facilities</a></li>
                <li><a href="#academics">Academics</a></li>
                <li><a href="#gallery">Gallery</a></li>
            </ul>
            <div class="mobile-buttons">
                <a href="#apply" class="btn btn-apply"><span>Apply Now</span></a>
                <a href="#contact" class="btn btn-contact"><span class="icon"></span><span>Contact Us</span></a>
            </div>
        </div>
    </nav>



    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const hamburger = document.getElementById('hamburger');
            const mobileMenu = document.getElementById('mobileMenu');
            const navLinks = document.querySelectorAll('.nav-links a, .mobile-nav-links a');
            const mobileLinks = document.querySelectorAll('.mobile-nav-links a, .mobile-buttons a');

            // Toggle mobile menu
            hamburger.addEventListener('click', function() {
                this.classList.toggle('active');
                mobileMenu.classList.toggle('active');
            });

            // Close menu when clicking on a link
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    hamburger.classList.remove('active');
                    mobileMenu.classList.remove('active');
                });
            });

            // Active link highlight
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    document.querySelectorAll('.nav-links a, .mobile-nav-links a').forEach(l => l.classList.remove('active'));
                    const href = this.getAttribute('href');
                    document.querySelectorAll(`a[href="${href}"]`).forEach(l => l.classList.add('active'));
                });
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.navbar')) {
                    hamburger.classList.remove('active');
                    mobileMenu.classList.remove('active');
                }
            });
        });
    </script>
</body>
</html>
