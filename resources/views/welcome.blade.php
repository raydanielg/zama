<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zama Contractors (T) Limited | Professional Construction & Engineering</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        :root {
            --primary-brown: #4a3018;
            --accent-gold: #d4a373;
            --light-bg: #fdfbfc;
            --dark-text: #1a140f;
            --header-bg: #e2e2e2;
        }
        body {
            font-family: 'Nunito', sans-serif;
            scroll-behavior: smooth;
            overflow-x: hidden;
        }
        
        /* Top Bar Styling */
        .top-bar {
            background-color: var(--primary-brown);
            color: #fff;
            padding: 8px 0;
            font-size: 0.85rem;
        }
        .top-bar a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }
        .top-bar a:hover {
            color: var(--accent-gold);
        }

        /* Navbar Enhancement */
        .header-container {
            background-color: #f0f0f0;
            padding: 20px 0;
        }
        .navbar-wrapper {
            background-color: var(--header-bg);
            border-radius: 50px;
            padding: 5px 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            margin: 0 auto;
            max-width: 1200px;
        }
        .navbar {
            background-color: transparent !important;
            box-shadow: none !important;
            padding: 0 !important;
        }
        .nav-link {
            font-weight: 700;
            color: var(--primary-brown) !important;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
            padding: 15px 20px !important;
            transition: all 0.3s ease;
        }
        .nav-link.active {
            background-color: var(--primary-brown);
            color: var(--accent-gold) !important;
            border-radius: 5px;
        }
        .nav-link:hover:not(.active) {
            color: var(--accent-gold) !important;
        }

        .inquiry-btn {
            background-color: var(--primary-brown);
            color: #fff !important;
            border-radius: 50px;
            padding: 10px 25px !important;
            font-weight: 800;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
        }
        .inquiry-btn:hover {
            background-color: #362211;
            transform: scale(1.05);
        }

        /* Hero Carousel Styling */
        .hero-section {
            position: relative;
            height: 95vh;
            overflow: hidden;
        }
        .carousel-item {
            height: 95vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .carousel-item::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.7));
        }
        .hero-overlay {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
            color: white;
            text-align: center;
        }
        .hero-content h1 {
            font-size: clamp(2.5rem, 6vw, 4.5rem);
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: -1px;
            margin-bottom: 1.5rem;
            animation: fadeInUp 1s ease both;
        }
        .hero-content p {
            font-size: clamp(1.1rem, 2vw, 1.5rem);
            max-width: 900px;
            margin: 0 auto 2.5rem;
            opacity: 0.9;
            animation: fadeInUp 1s ease 0.2s both;
        }

        /* Custom CTA Buttons */
        .cta-btn {
            padding: 16px 45px;
            font-weight: 800;
            border-radius: 50px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: inline-block;
            text-decoration: none;
            font-size: 0.9rem;
        }
        .cta-primary {
            background: var(--accent-gold);
            color: var(--primary-brown);
            box-shadow: 0 10px 25px rgba(212, 163, 115, 0.3);
        }
        .cta-primary:hover {
            background: #fff;
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            color: var(--primary-brown);
        }
        .cta-outline {
            background: transparent;
            border: 2px solid #fff;
            color: #fff;
            margin-left: 15px;
        }
        .cta-outline:hover {
            background: #fff;
            color: var(--primary-brown);
            transform: translateY(-5px);
        }

        /* Section Enhancements */
        .section-padding { padding: 120px 0; }
        .section-header { margin-bottom: 70px; }
        .section-title {
            font-weight: 900;
            color: var(--primary-brown);
            text-transform: uppercase;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .title-divider {
            width: 80px;
            height: 5px;
            background: var(--accent-gold);
            border-radius: 10px;
        }

        /* Card Enhancements */
        .service-card {
            border: none;
            border-radius: 25px;
            overflow: hidden;
            transition: all 0.5s ease;
            background: #fff;
            height: 100%;
            box-shadow: 0 15px 45px rgba(0,0,0,0.05);
        }
        .service-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 60px rgba(0,0,0,0.12);
        }
        .card-img-top {
            height: 250px;
            object-fit: cover;
            transition: transform 0.8s ease;
        }
        .service-card:hover .card-img-top {
            transform: scale(1.1);
        }
        
        .icon-badge {
            width: 60px;
            height: 60px;
            background: var(--accent-gold);
            color: var(--primary-brown);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 18px;
            font-size: 1.5rem;
            margin-bottom: 25px;
        }

        /* Animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Fixes */
        @media (max-width: 768px) {
            .cta-outline { margin-left: 0; margin-top: 15px; width: 100%; text-align: center; }
            .cta-primary { width: 100%; text-align: center; }
            .hero-section { height: 85vh; }
            .carousel-item { height: 85vh; }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('logo.png') }}" alt="Zama Logo" height="55" class="me-3">
                <div class="d-flex flex-column">
                    <span class="fw-bold text-uppercase lh-1" style="color: var(--primary-brown); font-size: 1.4rem;">Zama Contractors</span>
                    <span class="small text-muted fw-extrabold" style="font-size: 0.65rem; letter-spacing: 2px;">QUALITY & RELIABILITY</span>
                </div>
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="bi bi-list fs-1 text-dark"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link px-3" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#contact">Contact</a></li>
                    @guest
                        <li class="nav-item ms-lg-4 mt-3 mt-lg-0">
                            <a class="cta-btn cta-primary py-2 px-4" style="font-size: 0.8rem;" href="{{ route('login') }}">Staff Login</a>
                        </li>
                    @else
                        <li class="nav-item ms-lg-4 mt-3 mt-lg-0">
                            <a class="cta-btn cta-primary py-2 px-4" style="font-size: 0.8rem;" href="{{ url('/home') }}">Dashboard</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Enhanced Hero Slider -->
    <div id="heroCarousel" class="carousel slide carousel-fade hero-section" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-indicators z-3">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active rounded-circle" style="width: 12px; height: 12px;"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" class="rounded-circle" style="width: 12px; height: 12px;"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" class="rounded-circle" style="width: 12px; height: 12px;"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3" class="rounded-circle" style="width: 12px; height: 12px;"></button>
        </div>
        
        <div class="carousel-inner h-100">
            <div class="carousel-item active h-100" style="background-image: url('{{ asset('images/african-american-carpenter-hitting-walls-with-hammer-using-manual-instrument-renovation-reconstruction-work-male-constructor-overalls-holding-jackhammer-mullet-tool_482257-60095.jpg') }}')"></div>
            <div class="carousel-item h-100" style="background-image: url('{{ asset('images/african-american-logistics-managers-team-dicussing-goods-distribution-warehouse-reception-post-office-men-woman-workers-planning-stock-supply-while-chatting-counter-desk_482257-59698.jpg') }}')"></div>
            <div class="carousel-item h-100" style="background-image: url('{{ asset('images/smiling-young-builder-man-uniform-with-safety-helmet-gesturing-victory-sign-isolated-white-wall-with-copy-space_141793-120089.jpg') }}')"></div>
            <div class="carousel-item h-100" style="background-image: url('{{ asset('images/young-girl-form-construction-worker-with-hard-hat_185193-161752.jpg') }}')"></div>
        </div>

        <div class="hero-overlay">
            <div class="container">
                <div class="hero-content">
                    <h1 class="mb-3">ZAMA CONTRACTORS (T) LIMITED</h1>
                    <p>Pioneering Excellence in Construction, Engineering & Plant Maintenance across Tanzania since 2022.</p>
                    <div class="mt-5">
                        <a href="#about" class="cta-btn cta-primary">Company Profile</a>
                        <a href="#contact" class="cta-btn cta-outline">Work With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Overview Section -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="section-header mb-4">
                        <h2 class="section-title">Built on Trust & Integrity</h2>
                        <div class="title-divider"></div>
                    </div>
                    <p class="lead fw-bold mb-4" style="color: var(--primary-brown);">ZAMA CONTRACTORS (T) LIMITED is more than just a construction firm—we are partners in Tanzania's infrastructure development.</p>
                    <p class="text-muted mb-4">Established in 2022, we have quickly become a trusted name for major institutions including <strong>TEMESA, TANESCO, and TPA</strong>. From the snow-capped peak of Mount Kilimanjaro to the industrial hubs of Mtwara Port, we deliver excellence where it matters most.</p>
                    
                    <div class="row g-4 mt-2">
                        <div class="col-md-6">
                            <div class="p-4 bg-light rounded-4 shadow-sm border-start border-4 border-gold" style="border-color: var(--accent-gold) !important;">
                                <h6 class="fw-extrabold text-uppercase mb-2"><i class="bi bi-eye-fill me-2"></i>Our Vision</h6>
                                <p class="small mb-0 text-muted">To be the most prominent and respected construction brand in East Africa.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 bg-light rounded-4 shadow-sm border-start border-4 border-brown" style="border-color: var(--primary-brown) !important;">
                                <h6 class="fw-extrabold text-uppercase mb-2"><i class="bi bi-compass-fill me-2"></i>Our Mission</h6>
                                <p class="small mb-0 text-muted">Providing high-quality engineering solutions at reasonable costs with timely delivery.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="row g-3">
                        <div class="col-6 mt-5">
                            <img src="{{ asset('images/smiling-young-builder-man-uniform-with-safety-helmet-gesturing-victory-sign-isolated-white-wall-with-copy-space_141793-120089.jpg') }}" class="img-fluid rounded-4 shadow" alt="Expert Builder">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('images/smiling-raised-hand-young-african-american-builder-uniform-isolated-blue-background_141793-138852.jpg') }}" class="img-fluid rounded-4 shadow mb-3" alt="Quality Work">
                            <img src="{{ asset('images/warehouse-smiling-colleagues-scanning-cardboard-box-barcode-chatting_482257-77667.jpg') }}" class="img-fluid rounded-4 shadow" alt="Teamwork">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid Section -->
    <section id="services" class="section-padding bg-light">
        <div class="container">
            <div class="text-center section-header">
                <h2 class="section-title">Our Specialized Expertise</h2>
                <div class="title-divider mx-auto"></div>
                <p class="mt-4 text-muted mx-auto" style="max-width: 700px;">Harnessing modern technology and decades of expertise to provide world-class engineering solutions.</p>
            </div>

            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="overflow-hidden">
                            <img src="{{ asset('images/african-american-carpenter-hitting-walls-with-hammer-using-manual-instrument-renovation-reconstruction-work-male-constructor-overalls-holding-jackhammer-mullet-tool_482257-60095.jpg') }}" class="card-img-top" alt="Construction">
                        </div>
                        <div class="card-body p-4">
                            <div class="icon-badge"><i class="bi bi-house-gear-fill"></i></div>
                            <h5 class="fw-bold">Civil & Building Contractors</h5>
                            <p class="small text-muted mb-4">From industrial workshops to residential renovations, we build with precision and durability in mind.</p>
                            <a href="#contact" class="text-decoration-none fw-bold" style="color: var(--accent-gold);">Request Quote <i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="overflow-hidden">
                            <img src="{{ asset('images/african-american-logistics-managers-team-dicussing-goods-distribution-warehouse-reception-post-office-men-woman-workers-planning-stock-supply-while-chatting-counter-desk_482257-59698.jpg') }}" class="card-img-top" alt="Logistics">
                        </div>
                        <div class="card-body p-4">
                            <div class="icon-badge"><i class="bi bi-truck-flatbed"></i></div>
                            <h5 class="fw-bold">Equipment & Spare Supplies</h5>
                            <p class="small text-muted mb-4">Leading importers of high-grade construction materials, machinery spare parts, and safety equipment.</p>
                            <a href="#contact" class="text-decoration-none fw-bold" style="color: var(--accent-gold);">View Catalog <i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-lg-4 col-md-6 mx-auto">
                    <div class="service-card">
                        <div class="overflow-hidden">
                            <img src="{{ asset('images/smiling-raised-hand-young-african-american-builder-uniform-isolated-blue-background_141793-138852.jpg') }}" class="card-img-top" alt="Maintenance">
                        </div>
                        <div class="card-body p-4">
                            <div class="icon-badge"><i class="bi bi-tools"></i></div>
                            <h5 class="fw-bold">Plant & Machinery Repairs</h5>
                            <p class="small text-muted mb-4">Expert maintenance for power generation plants, security systems, and complex industrial machinery.</p>
                            <a href="#contact" class="text-decoration-none fw-bold" style="color: var(--accent-gold);">Book Service <i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Banner -->
    <section class="section-padding py-5" style="background: var(--primary-brown);">
        <div class="container">
            <div class="row align-items-center text-white">
                <div class="col-lg-8 mb-4 mb-lg-0 text-center text-lg-start">
                    <h2 class="fw-900 text-uppercase mb-2">Ready to Start Your Next Project?</h2>
                    <p class="mb-0 opacity-75">Join dozens of satisfied institutional and private clients who trust Zama Contractors.</p>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <a href="#contact" class="cta-btn cta-primary">Contact Us Today</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Portfolio -->
    <section id="projects" class="section-padding">
        <div class="container">
            <div class="section-header d-flex justify-content-between align-items-end">
                <div>
                    <h2 class="section-title">Impactful Deliveries</h2>
                    <div class="title-divider"></div>
                </div>
                <p class="text-muted d-none d-lg-block mb-0">Discover our work across Tanzania's most critical sites.</p>
            </div>

            <div class="row mt-5 g-4">
                <div class="col-lg-4">
                    <div class="p-4 bg-white rounded-4 shadow-sm border-start border-5 border-success">
                        <span class="badge mb-3 py-2 px-3 bg-success rounded-pill">Complete 2026</span>
                        <h5 class="fw-800">Kinyerezi II Security</h5>
                        <p class="small text-muted">Chain link fence repair and security systems upgrade for TANESCO Kinyerezi II Gas Plant.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 bg-white rounded-4 shadow-sm border-start border-5 border-primary">
                        <span class="badge mb-3 py-2 px-3 bg-primary rounded-pill">Mtwara Port</span>
                        <h5 class="fw-800">Road Rehabilitation</h5>
                        <p class="small text-muted">External road reconstruction at Gate No. 3 for Tanzania Ports Authority (TPA) Mtwara.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 bg-white rounded-4 shadow-sm border-start border-5 border-warning">
                        <span class="badge mb-3 py-2 px-3 bg-warning text-dark rounded-pill">Industrial Supply</span>
                        <h5 class="fw-800">Mechanical Spares</h5>
                        <p class="small text-muted">Procurement and supply of assorted civil and mechanical materials at Mtwara II Gas Plant.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="footer">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center mb-4">
                        <img src="{{ asset('logo.png') }}" alt="Logo" height="50" class="me-3 bg-white rounded p-1">
                        <h5 class="mb-0 text-white fw-900">ZAMA CONTRACTORS</h5>
                    </div>
                    <p class="small pe-lg-5 mb-4 text-white-50">Providing world-class construction and engineering services with a commitment to integrity and quality delivery since 2022.</p>
                    <div class="mt-4">
                        <div class="d-flex mb-2"><span class="fw-bold text-white me-2">TIN:</span> <span class="text-white-50">162-249-894</span></div>
                        <div class="d-flex"><span class="fw-bold text-white me-2">Founded:</span> <span class="text-white-50">2022</span></div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h5 class="small-title">Navigation</h5>
                    <a href="#about" class="footer-link">The Company</a>
                    <a href="#services" class="footer-link">Our Services</a>
                    <a href="#projects" class="footer-link">Key Projects</a>
                    <a href="{{ route('login') }}" class="footer-link">Staff Access</a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h5 class="small-title text-white">Connect</h5>
                    <p class="small mb-3"><i class="bi bi-geo-alt-fill text-warning me-2"></i> Kinondoni, Dar es Salaam</p>
                    <p class="small mb-3"><i class="bi bi-telephone-fill text-warning me-2"></i> +255 657 099 992</p>
                    <p class="small mb-3"><i class="bi bi-envelope-fill text-warning me-2"></i> zamacontractorslimited25@gmail.com</p>
                    <p class="small mb-3"><i class="bi bi-mailbox-fill text-warning me-2"></i> P.O. Box: 11107</p>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h5 class="small-title text-white">Stay Social</h5>
                    <div class="d-flex gap-3 mb-4">
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle" style="width: 35px; height: 32px;"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle" style="width: 35px; height: 32px;"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle" style="width: 35px; height: 32px;"><i class="bi bi-linkedin"></i></a>
                    </div>
                    <div class="p-3 bg-dark rounded-3 bor