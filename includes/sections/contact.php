<?php
// contact.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Us - Manaj School of Career Development</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

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

        body {
            font-family: 'Inter', sans-serif;
            color: var(--dark-color);
            background-color: var(--light-color);
        }

        .contact-section {
            padding: 80px 0;
        }

        .section-title {
            font-size: 42px;
            font-weight: 800;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
            color: var(--dark-color);
        }

        .section-title::after {
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

        /* Left side address + map */
        .address-container {
            background: #fff;
            border-radius: 20px;
            padding: 40px 30px;
            box-shadow: 0 5px 30px rgba(0,0,0,0.08);
            height: 100%;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .address-icon {
            font-size: 40px;
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        .address-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--dark-color);
        }

        .address-text {
            font-size: 16px;
            line-height: 1.5;
            color: #555;
        }

        /* Google map embed */
        .map-container iframe {
            border-radius: 15px;
            width: 100%;
            height: 320px;
            border: none;
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
            transition: box-shadow 0.3s ease;
        }

        .map-container iframe:hover {
            box-shadow: 0 12px 60px rgba(0,0,0,0.15);
        }

        /* Right side contact form styling */
        .contact-form-container {
            background: #fff;
            border-radius: 20px;
            padding: 40px 30px;
            box-shadow: 0 5px 30px rgba(0,0,0,0.08);
        }

        .contact-form label {
            font-weight: 600;
            color: var(--dark-color);
        }

        .contact-form input,
        .contact-form textarea {
            border-radius: 12px;
            border: 1.5px solid #ccc;
            padding: 12px 18px;
            transition: border-color 0.3s ease;
            font-size: 16px;
            font-family: 'Inter', sans-serif;
            resize: vertical;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 8px rgb(236 50 55 / 0.35);
        }

        .btn-submit {
            background: var(--primary-color);
            color: white;
            font-weight: 700;
            border-radius: 40px;
            padding: 14px 42px;
            font-size: 18px;
            transition: background 0.3s ease, box-shadow 0.3s ease;
            border: none;
        }

        .btn-submit:hover {
            background: var(--secondary-color);
            color: var(--dark-color);
            box-shadow: 0 10px 30px rgba(247, 187, 113, 0.6);
            transform: translateY(-3px);
        }

        /* Responsive */
        @media (max-width: 991px) {
            .contact-section {
                padding: 40px 0;
            }

            .map-container iframe {
                height: 280px;
            }
        }
    </style>
</head>
<body>

<!-- Main container -->
<section id="contact" class="contact-section container">
    <div class="text-center mb-5">
        <h2 class="section-title" data-aos="fade-up">Get In Touch</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">We'd love to hear from you</p>
    </div>
    <div class="row gy-4">
        <!-- Left: Address & Map -->
        <div class="col-lg-6" data-aos="fade-right">
            <div class="address-container">
                <div>
                    <i class="fas fa-map-marker-alt address-icon"></i>
                    <h3 class="address-title">Visit Us</h3>
                    <p class="address-text">
                        Manaj School of Career Development<br/>
                        Main Road, Chas<br/>
                        Jharkhand - 827013, India
                    </p>
                </div>
                <div class="map-container mt-auto">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.5336343341305!2d85.36779771543962!3d23.66992098467079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4eecba7f365ab%3A0xdee1283c8de17a85!2sChas%20Jharia!5e0!3m2!1sen!2sin!4v1699433979979!5m2!1sen!2sin"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Manaj School location"
                    ></iframe>
                </div>
            </div>
        </div>
        <!-- Right: Contact Form -->
        <div class="col-lg-6" data-aos="fade-left">
            <div class="contact-form-container">
                <form class="contact-form" action="send_contact.php" method="POST" novalidate>
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name<span class="text-danger">*</span></label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Your full name" required />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address<span class="text-danger">*</span></label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="you@example.com" required />
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="+91 1234 567890" />
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message<span class="text-danger">*</span></label>
                        <textarea id="message" name="message" rows="5" class="form-control" placeholder="Write your message here..." required></textarea>
                    </div>
                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS Animation JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // Initialize AOS animations
    AOS.init({
        duration: 800,
        once: true,
        offset: 100
    });
</script>

</body>
</html>
