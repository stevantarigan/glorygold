<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glory Gold - Investasi Emas Batangan Terpercaya</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #FFD700;
            --secondary: #D4AF37;
            --accent: #FF6B6B;
            --light: #F9F7F0;
            --dark: #2C3E50;
            --gray: #ECF0F1;
            --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--light);
            color: var(--dark);
            overflow-x: hidden;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: var(--gray);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--secondary);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary);
        }

        /* Header */
        header {
            background: rgba(249, 247, 240, 0.95);
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
        }

        header.scrolled {
            padding: 10px 40px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo h1 {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 800;
        }

        .logo span {
            color: var(--primary);
        }

        nav {
            display: flex;
            align-items: center;
        }

        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: var(--transition);
            position: relative;
        }

        nav a:after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: var(--transition);
        }

        nav a:hover {
            color: var(--secondary);
        }

        nav a:hover:after {
            width: 100%;
        }

        .nav-btn {
            display: none;
            background: none;
            border: none;
            color: var(--dark);
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Hero */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, rgba(255, 215, 0, 0.1) 0%, rgba(212, 175, 55, 0.2) 100%);
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1616401785033-41aa3f2ad53e?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
            opacity: 0.15;
            z-index: -1;
            transform: translateZ(-10px) scale(2);
            /* Parallax effect */
        }

        .hero-content {
            text-align: center;
            max-width: 800px;
            padding: 0 20px;
            z-index: 1;
        }

        .hero h2 {
            font-size: 3.5rem;
            font-family: 'Playfair Display', serif;
            margin-bottom: 20px;
            color: var(--dark);
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: var(--dark);
        }

        .btn {
            display: inline-block;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            padding: 15px 35px;
            border-radius: 50px;
            font-weight: 600;
            color: var(--dark);
            text-decoration: none;
            transition: var(--transition);
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0%;
            height: 100%;
            background: linear-gradient(90deg, var(--secondary), var(--primary));
            transition: var(--transition);
            z-index: -1;
        }

        .btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.4);
        }

        .btn:hover:before {
            width: 100%;
        }

        /* Floating Elements */
        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            overflow: hidden;
        }

        .floating-element {
            position: absolute;
            width: 30px;
            height: 30px;
            background: rgba(212, 175, 55, 0.2);
            border: 2px solid rgba(212, 175, 55, 0.3);
            border-radius: 50%;
        }

        .fe-1 {
            top: 20%;
            left: 10%;
            animation: float 8s ease-in-out infinite;
        }

        .fe-2 {
            top: 60%;
            left: 80%;
            animation: float 10s ease-in-out infinite 1s;
        }

        .fe-3 {
            top: 40%;
            left: 75%;
            animation: float 12s ease-in-out infinite 2s;
        }

        .fe-4 {
            top: 70%;
            left: 15%;
            animation: float 9s ease-in-out infinite 3s;
        }

        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(10deg);
            }

            100% {
                transform: translateY(0) rotate(0deg);
            }
        }

        /* Section Title */
        .section-title {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-family: 'Playfair Display', serif;
            color: var(--dark);
            display: inline-block;
            position: relative;
        }

        .section-title h2:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
        }

        /* Parallax Sections */
        .parallax-section {
            position: relative;
            min-height: 500px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .parallax-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
        }

        .parallax-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
            max-width: 800px;
            padding: 0 20px;
        }

        .parallax-content h2 {
            font-size: 2.5rem;
            font-family: 'Playfair Display', serif;
            margin-bottom: 20px;
        }

        .parallax-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        /* Produk */
        .products {
            padding: 100px 40px;
            background: var(--light);
        }

        .products-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
            position: relative;
        }

        .card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, transparent 0%, rgba(212, 175, 55, 0.1) 100%);
            opacity: 0;
            transition: var(--transition);
            z-index: 1;
        }

        .card:hover {
            transform: translateY(-15px);
            box-shadow: 0 15px 35px rgba(212, 175, 55, 0.2);
        }

        .card:hover:before {
            opacity: 1;
        }

        .card-img {
            width: 100%;
            height: 250px;
            overflow: hidden;
            position: relative;
        }

        .card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .card:hover .card-img img {
            transform: scale(1.1);
        }

        .card-content {
            padding: 25px;
            position: relative;
            z-index: 2;
        }

        .card h3 {
            font-size: 1.5rem;
            color: var(--secondary);
            margin-bottom: 10px;
        }

        .card p {
            color: var(--dark);
            margin-bottom: 15px;
        }

        .card .price {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--secondary);
            display: block;
            margin-bottom: 20px;
        }

        .card-btn {
            display: inline-block;
            padding: 10px 25px;
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--dark);
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
        }

        .card-btn:hover {
            background: var(--primary);
            color: var(--dark);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
        }

        /* Tentang */
        .about {
            padding: 100px 40px;
            background: linear-gradient(135deg, rgba(255, 215, 0, 0.1) 0%, rgba(212, 175, 55, 0.2) 100%);
            position: relative;
        }

        .about-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .about-content h2 {
            font-size: 2.5rem;
            font-family: 'Playfair Display', serif;
            color: var(--dark);
            margin-bottom: 20px;
        }

        .about-content p {
            line-height: 1.8;
            margin-bottom: 30px;
            color: var(--dark);
        }

        .about-image {
            position: relative;
        }

        .about-image img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .about-image:after {
            content: '';
            position: absolute;
            top: -20px;
            left: -20px;
            right: 20px;
            bottom: 20px;
            border: 3px solid var(--primary);
            border-radius: 20px;
            z-index: -1;
            transition: var(--transition);
        }

        .about-image:hover:after {
            top: -25px;
            left: -25px;
            right: 25px;
            bottom: 25px;
        }

        /* Keunggulan */
        .features {
            padding: 100px 40px;
            background: var(--light);
        }

        .features-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .feature-box {
            text-align: center;
            padding: 40px 30px;
            background: white;
            border-radius: 15px;
            transition: var(--transition);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }

        .feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(212, 175, 55, 0.15);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 20px;
            background: rgba(212, 175, 55, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: var(--secondary);
        }

        .feature-box h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: var(--dark);
        }

        .feature-box p {
            color: var(--dark);
        }

        /* Kontak */
        .contact {
            padding: 100px 40px;
            background: linear-gradient(135deg, rgba(255, 215, 0, 0.1) 0%, rgba(212, 175, 55, 0.2) 100%);
        }

        .contact-container {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .contact-info {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 40px;
            margin-top: 50px;
        }

        .contact-item {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contact-icon {
            width: 60px;
            height: 60px;
            background: rgba(212, 175, 55, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--secondary);
            margin-bottom: 15px;
            transition: var(--transition);
        }

        .contact-item:hover .contact-icon {
            background: var(--primary);
            color: var(--dark);
            transform: translateY(-5px);
        }

        .contact-item h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: var(--dark);
        }

        .contact-item p {
            color: var(--dark);
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: var(--light);
            padding: 60px 40px 30px;
            position: relative;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
        }

        .footer-col h3 {
            font-size: 1.3rem;
            color: var(--primary);
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-col h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background: var(--primary);
        }

        .footer-col p {
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: var(--light);
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--primary);
            padding-left: 5px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--light);
            transition: var(--transition);
        }

        .social-links a:hover {
            background: var(--primary);
            color: var(--dark);
            transform: translateY(-5px);
        }

        .copyright {
            text-align: center;
            margin-top: 50px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .copyright span {
            color: var(--primary);
        }

        /* Back to Top */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--primary);
            color: var(--dark);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 1.2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transition: var(--transition);
            opacity: 0;
            visibility: hidden;
            z-index: 999;
        }

        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            background: var(--secondary);
            transform: translateY(-5px);
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .about-container {
                grid-template-columns: 1fr;
            }

            .about-image {
                order: -1;
            }

            header {
                padding: 15px 20px;
            }

            nav {
                position: fixed;
                top: 70px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 70px);
                background: var(--light);
                flex-direction: column;
                align-items: center;
                justify-content: center;
                transition: var(--transition);
            }

            nav.active {
                left: 0;
            }

            nav a {
                margin: 15px 0;
                font-size: 1.2rem;
            }

            .nav-btn {
                display: block;
            }

            .hero h2 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .hero h2 {
                font-size: 2rem;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .products,
            .about,
            .features,
            .contact {
                padding: 70px 20px;
            }

            .footer-container {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }

        @media (max-width: 576px) {
            .hero h2 {
                font-size: 1.8rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .btn {
                padding: 12px 25px;
            }
        }
    </style>
</head>

<body>

    <header id="header">
        <div class="logo" data-aos="fade-right">
            <h1>Glory <span>Gold</span></h1>
        </div>
        <button class="nav-btn" id="navToggle">
            <i class="fas fa-bars"></i>
        </button>
        <nav id="nav">
            <a href="#">Beranda</a>
            <a href="#produk">Produk</a>
            <a href="#tentang">Tentang</a>
            <a href="#keunggulan">Keunggulan</a>
            <a href="#kontak">Kontak</a>
        </nav>
    </header>

    <section class="hero">
        <div class="floating-elements">
            <div class="floating-element fe-1"></div>
            <div class="floating-element fe-2"></div>
            <div class="floating-element fe-3"></div>
            <div class="floating-element fe-4"></div>
        </div>
        <div class="hero-content">
            <h2 data-aos="fade-up" data-aos-duration="1000">Investasi Emas Murni untuk Masa Depan</h2>
            <p data-aos="fade-up" data-aos-delay="400">Glory Gold menghadirkan emas batangan asli dengan kualitas
                terbaik dan harga kompetitif untuk mendukung perjalanan investasi Anda.</p>
            <a href="#produk" class="btn" data-aos="zoom-in" data-aos-delay="800">Jelajahi Produk</a>
        </div>
    </section>

    <!-- Parallax Section 1 -->
    <section class="parallax-section"
        style="background-image: url('https://images.unsplash.com/photo-1625472603517-1b0dc72846ab?auto=format&fit=crop&w=1600&q=80');">
        <div class="parallax-overlay"></div>
        <div class="parallax-content">
            <h2 data-aos="fade-up">Investasi yang Tahan Lama</h2>
            <p data-aos="fade-up" data-aos-delay="300">Emas telah menjadi pilihan investasi yang terpercaya selama
                berabad-abad, memberikan stabilitas dan keamanan finansial.</p>
        </div>
    </section>

    <section id="produk" class="products">
        <div class="section-title" data-aos="fade-up">
            <h2>Produk Kami</h2>
        </div>
        <div class="products-container">
            <div class="card" data-aos="flip-left" data-aos-delay="200">
                <div class="card-img">
                    <img src="images/1g.jpeg" alt="Emas 1 Gram">
                </div>
                <div class="card-content">
                    <h3>Emas Batangan 1 Gram</h3>
                    <p>Investasi mudah dengan emas 1 gram, cocok untuk pemula.</p>
                    <span class="price">Rp 1.200.000</span>
                    <a href="#" class="card-btn">Beli Sekarang</a>
                </div>
            </div>
            <div class="card" data-aos="flip-left" data-aos-delay="400">
                <div class="card-img">
                    <img src="https://images.unsplash.com/photo-1596944946756-89483acb4707?auto=format&fit=crop&w=600&q=80"
                        alt="Emas 5 Gram">
                </div>
                <div class="card-content">
                    <h3>Emas Batangan 5 Gram</h3>
                    <p>Pilihan tepat untuk investasi menengah dengan nilai yang stabil.</p>
                    <span class="price">Rp 5.800.000</span>
                    <a href="#" class="card-btn">Beli Sekarang</a>
                </div>
            </div>
            <div class="card" data-aos="flip-left" data-aos-delay="600">
                <div class="card-img">
                    <img src="https://images.unsplash.com/photo-1596944946756-89483acb4707?auto=format&fit=crop&w=600&q=80"
                        alt="Emas 10 Gram">
                </div>
                <div class="card-content">
                    <h3>Emas Batangan 10 Gram</h3>
                    <p>Investasi jangka panjang dengan emas 10 gram berkualitas tinggi.</p>
                    <span class="price">Rp 11.500.000</span>
                    <a href="#" class="card-btn">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Parallax Section 2 -->
    <section class="parallax-section"
        style="background-image: url('https://images.unsplash.com/photo-1625472603517-1b0dc72846ab?auto=format&fit=crop&w=1600&q=80');">
        <div class="parallax-overlay"></div>
        <div class="parallax-content">
            <h2 data-aos="fade-up">Kualitas Terjamin</h2>
            <p data-aos="fade-up" data-aos-delay="300">Setiap produk emas kami memiliki sertifikat keaslian dan kualitas
                terjamin dari produsen terpercaya.</p>
        </div>
    </section>

    <section id="tentang" class="about">
        <div class="about-container">
            <div class="about-content" data-aos="fade-right">
                <h2>Tentang Glory Gold</h2>
                <p>Glory Gold adalah perusahaan terpercaya dalam penyediaan emas batangan murni dengan kualitas terbaik.
                    Sejak didirikan, kami berkomitmen untuk memberikan pelayanan terbaik dan harga kompetitif kepada
                    setiap pelanggan.</p>
                <p>Kami memahami bahwa emas bukan hanya sekadar investasi, tetapi juga jaminan masa depan yang aman dan
                    menguntungkan. Dengan pengalaman bertahun-tahun di industri ini, Glory Gold hadir sebagai partner
                    terpercaya dalam perjalanan investasi Anda.</p>
                <a href="#kontak" class="btn">Hubungi Kami</a>
            </div>
            <div class="about-image" data-aos="fade-left" data-aos-delay="300">
                <img src="https://images.unsplash.com/photo-1625472603517-1b0dc72846ab?auto=format&fit=crop&w=600&q=80"
                    alt="Tentang Glory Gold">
            </div>
        </div>
    </section>

    <section id="keunggulan" class="features">
        <div class="section-title" data-aos="fade-up">
            <h2>Keunggulan Kami</h2>
        </div>
        <div class="features-container">
            <div class="feature-box" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-icon">
                    <i class="fas fa-award"></i>
                </div>
                <h3>Kualitas Terjamin</h3>
                <p>Setiap emas batangan kami memiliki sertifikat keaslian dan kualitas terjamin.</p>
            </div>
            <div class="feature-box" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-icon">
                    <i class="fas fa-lock"></i>
                </div>
                <h3>Keamanan Transaksi</h3>
                <p>Transaksi aman dan terjamin dengan sistem keamanan berlapis.</p>
            </div>
            <div class="feature-box" data-aos="fade-up" data-aos-delay="600">
                <div class="feature-icon">
                    <i class="fas fa-shipping-fast"></i>
                </div>
                <h3>Pengiriman Cepat</h3>
                <p>Pengiriman cepat dan aman ke seluruh Indonesia dengan packaging khusus.</p>
            </div>
            <div class="feature-box" data-aos="fade-up" data-aos-delay="800">
                <div class="feature-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3>Layanan 24/7</h3>
                <p>Customer service siap membantu Anda 24 jam sehari, 7 hari dalam seminggu.</p>
            </div>
        </div>
    </section>

    <section class="parallax-section" style="background-image: url('images/emas.jpeg');">
        <div class="parallax-overlay"></div>
        <div class="parallax-content">
            <h2 data-aos="fade-up">Masa Depan yang Cerah</h2>
            <p data-aos="fade-up" data-aos-delay="300">
                Mulailah perjalanan investasi Anda hari ini dan raih masa depan finansial yang lebih cerah dengan Glory
                Gold.
            </p>
            <a href="#produk" class="btn" data-aos="zoom-in" data-aos-delay="600">Mulai Investasi</a>
        </div>
    </section>



    <section id="kontak" class="contact">
        <div class="section-title" data-aos="fade-up">
            <h2>Kontak Kami</h2>
        </div>
        <div class="contact-container">
            <p data-aos="fade-up">Hubungi kami untuk informasi lebih lanjut atau konsultasi investasi emas.</p>
            <div class="contact-info">
                <div class="contact-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email</h3>
                    <p>info@glorygold.com</p>
                </div>
                <div class="contact-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Telepon</h3>
                    <p>021-1234-5678</p>
                </div>
                <div class="contact-item" data-aos="fade-up" data-aos-delay="600">
                    <div class="contact-icon">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h3>WhatsApp</h3>
                    <p>0812-3456-7890</p>
                </div>
                <div class="contact-item" data-aos="fade-up" data-aos-delay="800">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Alamat</h3>
                    <p>Jl. Kemakmuran No. 123, Jakarta</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-container">
            <div class="footer-col">
                <h3>Glory Gold</h3>
                <p>Platform terpercaya untuk investasi emas batangan dengan kualitas terbaik dan layanan profesional.
                </p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h3>Tautan Cepat</h3>
                <ul class="footer-links">
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#produk">Produk</a></li>
                    <li><a href="#tentang">Tentang Kami</a></li>
                    <li><a href="#keunggulan">Keunggulan</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Produk Kami</h3>
                <ul class="footer-links">
                    <li><a href="#">Emas 1 Gram</a></li>
                    <li><a href="#">Emas 5 Gram</a></li>
                    <li><a href="#">Emas 10 Gram</a></li>
                    <li><a href="#">Emas 25 Gram</a></li>
                    <li><a href="#">Emas 50 Gram</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Jam Operasional</h3>
                <p>Senin - Jumat: 08:00 - 17:00</p>
                <p>Sabtu: 09:00 - 15:00</p>
                <p>Minggu: Tutup</p>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2025 <span>Glory Gold</span>. All Rights Reserved.</p>
        </div>
    </footer>

    <a href="#" class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Script AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });

        // Header scroll effect
        const header = document.getElementById('header');
        const backToTop = document.getElementById('backToTop');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
                backToTop.classList.add('active');
            } else {
                header.classList.remove('scrolled');
                backToTop.classList.remove('active');
            }
        });

        // Mobile navigation toggle
        const navToggle = document.getElementById('navToggle');
        const nav = document.getElementById('nav');

        navToggle.addEventListener('click', () => {
            nav.classList.toggle('active');
            navToggle.innerHTML = nav.classList.contains('active') ?
                '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        });

        // Close mobile nav when clicking on a link
        const navLinks = document.querySelectorAll('nav a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                nav.classList.remove('active');
                navToggle.innerHTML = '<i class="fas fa-bars"></i>';
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>

</html>
