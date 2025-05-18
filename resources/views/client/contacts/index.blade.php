<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact - Élégance Vibe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #8B5A2B; /* Rich Saddle Brown */
            --secondary-color: #D2B48C; /* Light Tan */
            --dark-color: #2C1A05; /* Darker Espresso */
            --light-color: #FFFFFF; /* Pure White */
            --accent-color: #B89778; /* Warm Mocha */
            --grid-item-radius: 15px;
            --grid-max-width: 1400px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--light-color);
            color: #333;
            line-height: 1.6;
            overflow-x: hidden;
        }

        .navbar {
            background: transparent;
            height: 90px;
            padding: 0 2rem;
            position: fixed;
            width: 100%;
            z-index: 1000;
            transition: all 0.4s ease;
            display: flex;
            align-items: center;
        }

        .navbar.scrolled {
            height: 70px;
            background: var(--secondary-color);
            box-shadow: 0 2px 15px rgba(0,0,0,0.2);
        }

        .navbar-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            color: var(--light-color);
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 40px;
            margin-right: 10px;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            color: var(--light-color);
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            position: relative;
            padding: 0.5rem 0;
            transition: all 0.3s ease;
        }

        .nav-links a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--secondary-color);
            bottom: 0;
            left: 0;
            transition: width 0.3s ease;
        }

        .nav-links a:hover:after,
        .nav-links a.active:after {
            width: 100%;
        }

        .hero-container {
            position: relative;
            height: 100vh;
            background-image: url('/images/background.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 100%;
            padding: 0 2rem;
            z-index: 2;
        }

        .hero-content h1 {
            color: var(--light-color);
            font-size: 4.5rem;
            font-family: 'Playfair Display', serif;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.6);
            animation: fadeInUp 1s ease;
        }

        .hero-content p {
            color: var(--light-color);
            font-size: 1.5rem;
            max-width: 800px;
            margin: 0 auto 2rem;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.5);
            animation: fadeInUp 1s ease 0.3s forwards;
            opacity: 0;
        }

        .hero-btn {
            display: inline-block;
            padding: 1rem 2.5rem;
            background: linear-gradient(to right, var(--secondary-color), var(--accent-color));
            border: 2px solid var(--primary-color);
            border-radius: 40px;
            text-decoration: none;
            color: var(--dark-color);
            font-weight: 600;
            font-size: 1.2rem;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            animation: pulseButton 1.5s ease infinite;
            z-index: 3;
        }

        .hero-btn:hover {
            background: var(--primary-color);
            color: var(--light-color);
            border-radius: 50px;
            transform: scale(1.05) translateY(-2px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
            animation: none;
        }

        .hero-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(
                to right,
                transparent 0%,
                rgba(255, 255, 255, 0.3) 50%,
                transparent 100%
            );
            transform: skewX(-25deg);
            transition: left 0.5s ease;
        }

        .hero-btn:hover::before {
            left: 100%;
        }

        .hero-btn .ripple {
            position: absolute;
            background: var(--accent-color);
            border-radius: 50%;
            transform: scale(0);
            animation: ripple 0.6s linear;
            pointer-events: none;
        }

        .hero-btn:active {
            transform: scale(0.95) translateY(2px);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.3);
            z-index: 1;
        }

        .contact-section {
            padding: 5rem 2rem;
            max-width: var(--grid-max-width);
            margin: 0 auto;
            background: var(--light-color);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            color: var(--dark-color);
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        .section-header h2:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            background: var(--primary-color);
            bottom: -10px;
            left: 25%;
        }

        .section-header p {
            color: #666;
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
        }

        .contact-content {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            justify-content: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .map-container {
            flex: 1;
            min-width: 300px;
            max-width: 800px;
            height: 450px;
            border-radius: var(--grid-item-radius);
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            animation: fadeIn 0.6s ease forwards;
            opacity: 0;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        .contact-details {
            flex: 1;
            min-width: 300px;
            max-width: 400px;
            padding: 2rem;
            background: var(--light-color);
            border-radius: var(--grid-item-radius);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            animation: fadeIn 0.6s ease 0.2s forwards;
            opacity: 0;
        }

        .contact-details p {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
            color: var(--dark-color);
        }

        .contact-details i {
            margin-right: 1rem;
            color: var(--primary-color);
            width: 20px;
            text-align: center;
        }

        .action-btn {
            display: block;
            padding: 0.9rem 2.2rem;
            background: linear-gradient(to right, var(--secondary-color), var(--accent-color));
            border: 2px solid var(--primary-color);
            border-radius: 40px;
            text-decoration: none;
            color: var(--dark-color);
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            text-align: center;
            margin: 2rem auto;
            width: fit-content;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            animation: pulseButton 1.5s ease infinite;
        }

        .action-btn:hover {
            background: var(--primary-color);
            color: var(--light-color);
            border-radius: 50px;
            transform: scale(1.05) translateY(-2px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
            animation: none;
        }

        .action-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(
                to right,
                transparent 0%,
                rgba(255, 255, 255, 0.3) 50%,
                transparent 100%
            );
            transform: skewX(-25deg);
            transition: left 0.5s ease;
        }

        .action-btn:hover::before {
            left: 100%;
        }

        .action-btn .ripple {
            position: absolute;
            background: var(--accent-color);
            border-radius: 50%;
            transform: scale(0);
            animation: ripple 0.6s linear;
            pointer-events: none;
        }

        .action-btn:active {
            transform: scale(0.95) translateY(2px);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .footer {
            background: var(--secondary-color);
            color: var(--dark-color);
            padding: 5rem 2rem 2rem;
            margin-top: 5rem;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            display: inline-block;
            color: var(--dark-color);
            position: relative;
            padding-bottom: 0.5rem;
        }

        .footer-logo:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 2px;
            background: var(--primary-color);
            bottom: 0;
            left: 0;
        }

        .footer-about p {
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: var(--accent-color);
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .social-link i {
            color: var(--primary-color);
        }

        .social-link:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
        }

        .footer-heading {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
            color: var(--dark-color);
        }

        .footer-heading:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 2px;
            background: var(--primary-color);
            bottom: 0;
            left: 0;
        }

        .footer-links li {
            margin-bottom: 1rem;
            list-style: none;
        }

        .footer-links a {
            color: var(--dark-color);
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .footer-links a:hover {
            color: var(--primary-color);
            transform: translateX(5px);
        }

        .footer-contact p {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .footer-contact i {
            margin-right: 1rem;
            color: var(--primary-color);
            width: 20px;
            text-align: center;
        }

        .copyright {
            text-align: center;
            padding-top: 3rem;
            margin-top: 3rem;
            border-top: 1px solid rgba(0,0,0,0.1);
        }

        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }

        @keyframes pulseButton {
            0% {
                transform: scale(1);
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            }
            50% {
                transform: scale(1.02);
                box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
            }
            100% {
                transform: scale(1);
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

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

        @media (max-width: 992px) {
            .hero-content h1 {
                font-size: 3.5rem;
            }

            .nav-links {
                gap: 1.5rem;
            }

            .contact-content {
                flex-direction: column;
                align-items: center;
            }

            .map-container,
            .contact-details {
                max-width: 100%;
            }
        }

        @media (max-width: 768px) {
            .navbar {
                height: 80px;
                padding: 0 1.5rem;
            }

            .hero-content h1 {
                font-size: 2.8rem;
            }

            .hero-content p {
                font-size: 1.2rem;
            }

            .nav-links {
                gap: 1rem;
            }

            .logo {
                font-size: 1.5rem;
            }

            .logo img {
                height: 35px;
            }

            .hero-btn {
                padding: 0.8rem 2rem;
                font-size: 1rem;
            }

            .map-container {
                height: 400px;
            }

            .contact-details {
                padding: 1.5rem;
            }
        }

        @media (max-width: 576px) {
            .navbar {
                height: 70px;
            }

            .hero-content h1 {
                font-size: 2.2rem;
            }

            .section-header h2 {
                font-size: 2rem;
            }

            .action-btn {
                width: 100%;
                text-align: center;
            }

            .hero-btn {
                width: 90%;
                padding: 0.7rem 1.5rem;
                font-size: 0.9rem;
            }

            .map-container {
                height: 350px;
            }

            .contact-details p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="hero-container">
        <nav class="navbar">
            <div class="navbar-container">
                <a href="{{ route('welcome') }}" class="logo">
                    <img src="/images/logo.png" alt="Élégance Vibe Logo">
                    Élégance Vibe
                </a>
                <div class="nav-links">
                    <a href="{{ route('welcome') }}">Accueil</a>
                    <a href="{{ route('serviceClient') }}">Services</a>
                    <a href="{{ route('productClient') }}">Produits</a>
                    <a href="{{ route('galleryClient') }}">Galerie</a>
                    <a href="{{ route('contactClient') }}" class="active">Contact</a>
                </div>
            </div>
        </nav>

        <div class="hero-content">
            <h1>Nous Contacter</h1>
            <p>Contactez-nous pour toute question ou pour réserver votre expérience de bien-être</p>
            <a href="#contact-section" class="hero-btn">Prendre Contact</a>
        </div>
    </div>

    <section class="contact-section" id="contact-section">
        <div class="section-header">
            <h2>Nous Contacter</h2>
            <p>Visitez notre salon ou contactez-nous pour planifier votre prochaine visite</p>
        </div>

        <div class="contact-content">
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9916258036047!2d2.333159315674104!3d48.86061407928762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2s123%20Rue%20de%20la%20Beaut%C3%A9%2C%2075000%20Paris%2C%20France!5e0!3m2!1sen!2sus!4v1667581234567!5m2!1sen!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contact-details">
                <p><i class="fas fa-map-marker-alt"></i> 123 Rue de la Beauté, Paris 75000</p>
                <p><i class="fas fa-phone"></i> +33 1 23 45 67 89</p>
                <p><i class="fas fa-envelope"></i> contact@elegancevibe.com</p>
                <p><i class="fas fa-clock"></i> Lun-Sam: 9h-20h | Dim: 10h-18h</p>
            </div>
        </div>

        <a href="{{ route('contactClient') }}" class="action-btn">Prendre Rendez-vous</a>
    </section>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-about">
                <a href="#" class="footer-logo">Élégance Vibe</a>
                <p>Votre destination premium pour des soins de beauté et de bien-être exceptionnels. Nous combinons expertise et innovation pour vous offrir une expérience unique.</p>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>

            <div class="footer-links">
                <h3 class="footer-heading">Liens Rapides</h3>
                <ul>
                    <li><a href="{{ route('welcome') }}">Accueil</a></li>
                    <li><a href="{{ route('serviceClient') }}">Nos Services</a></li>
                    <li><a href="{{ route('productClient') }}">Nos Produits</a></li>
                    <li><a href="{{ route('galleryClient') }}">Galerie</a></li>
                    <li><a href="{{ route('contactClient') }}">Prendre Rendez-vous</a></li>
                </ul>
            </div>

            <div class="footer-contact">
                <h3 class="footer-heading">Contactez-nous</h3>
                <p><i class="fas fa-map-marker-alt"></i> 123 Rue de la Beauté, Paris 75000</p>
                <p><i class="fas fa-phone"></i> +33 1 23 45 67 89</p>
                <p><i class="fas fa-envelope"></i> contact@elegancevibe.com</p>
                <p><i class="fas fa-clock"></i> Lun-Sam: 9h-20h | Dim: 10h-18h</p>
            </div>
        </div>

        <div class="copyright">
            <p>© {{ date('Y') }} Élégance Vibe. Tous droits réservés.</p>
        </div>
    </footer>

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            navbar.classList.toggle('scrolled', window.scrollY > 50);
        });

        // Dynamic ripple effect for buttons
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.hero-btn, .action-btn');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    const rect = button.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;

                    const ripple = document.createElement('span');
                    ripple.classList.add('ripple');
                    ripple.style.left = `${x}px`;
                    ripple.style.top = `${y}px`;
                    button.appendChild(ripple);

                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });
        });
    </script>
</body>
</html>