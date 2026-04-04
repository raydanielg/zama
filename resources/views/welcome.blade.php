<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zama Contractors (T) Limited | Professional Construction & Engineering</title>
    <link rel="icon" type="image/png" href="{{ asset('crane_9689068.png') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:400,600,700,800,900&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        :root {
            --primary-blue: #003366; /* Deep Professional Blue */
            --accent-green: #2e8b57; /* Professional Sea Green */
            --light-bg: #f4f7f6;
            --dark-text: #1a1a1a;
            --header-bg: #ffffff;
            --cta-blue: #0056b3;
            --cta-green: #1e7e34;
        }
        body {
            font-family: 'Nunito', sans-serif;
            scroll-behavior: smooth;
            overflow-x: hidden;
            background-color: var(--light-bg);
        }
        
        /* Header Styling */
        .top-bar {
            background-color: var(--primary-blue);
            color: #fff;
            padding: 10px 0;
            font-size: 0.85rem;
            font-weight: 600;
        }
        .top-bar a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }
        .top-bar a:hover {
            color: var(--accent-green);
        }

        .header-container {
            background-color: #fff;
            padding: 15px 0;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
        }
        .navbar-wrapper {
            background-color: transparent;
            padding: 0 50px;
            margin: 0;
            width: 100%;
            max-width: 100%;
        }
        .navbar {
            background-color: transparent !important;
            padding: 0 !important;
        }
        .nav-link {
            font-weight: 800;
            color: var(--primary-blue) !important;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            padding: 15px 20px !important;
            transition: all 0.3s ease;
        }
        .nav-link.active {
            color: var(--accent-green) !important;
            border-bottom: 3px solid var(--accent-green);
        }
        .nav-link:hover:not(.active) {
            color: var(--accent-green) !important;
        }

        .inquiry-btn {
            background-color: var(--primary-blue);
            color: #fff !important;
            border-radius: 5px;
            padding: 12px 30px !important;
            font-weight: 800;
            text-transform: uppercase;
            font-size: 0.85rem;
            margin-left: 20px;
            transition: all 0.3s ease;
        }
        .inquiry-btn:hover {
            background-color: var(--accent-green);
            transform: translateY(-2px);
        }

        /* Hero Section Enhancements */
        .hero-section {
            position: relative;
            height: 90vh;
            overflow: hidden;
        }
        .carousel-item {
            height: 90vh;
            background-size: cover;
            background-position: center;
        }
        .carousel-item::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.9) 0%, rgba(0, 51, 102, 0.4) 50%, rgba(0, 0, 0, 0.2) 100%);
        }
        .hero-overlay {
            position: absolute;
            inset: 0;
            z-index: 10;
            color: white;
            display: flex;
            align-items: flex-end; /* Move content towards bottom */
            padding-bottom: 80px;
        }
        .hero-content {
            width: 100%;
        }
        .hero-content h1 {
            font-size: clamp(3rem, 8vw, 5.5rem);
            font-weight: 900;
            line-height: 1;
            margin-bottom: 1.5rem;
            text-shadow: 2px 4px 10px rgba(0,0,0,0.5);
        }
        .hero-content p {
            font-size: 1.4rem;
            max-width: 850px;
            margin-bottom: 2.5rem;
            font-weight: 600;
            line-height: 1.5;
            text-shadow: 1px 2px 5px rgba(0,0,0,0.3);
        }

        /* Hero Features Single Line */
        .hero-features-row {
            display: flex;
            align-items: center;
            gap: 40px;
            margin-top: 50px;
            border-top: 1px solid rgba(255,255,255,0.2);
            padding-top: 30px;
        }
        .feature-single {
            display: flex;
            align-items: center;
            position: relative;
        }
        .feature-single:not(:last-child)::after {
            content: '';
            position: absolute;
            right: -20px;
            height: 40px;
            width: 1px;
            background: rgba(255,255,255,0.3);
        }
        .feature-single i {
            font-size: 1.8rem;
            margin-right: 15px;
            color: var(--accent-green);
        }
        .feature-single h6 {
            font-weight: 800;
            margin-bottom: 2px;
            font-size: 1rem;
        }
        .feature-single p {
            font-size: 0.85rem !important;
            margin-bottom: 0 !important;
            opacity: 0.8;
            font-weight: 400 !important;
        }

        /* Animation Classes */
        .animate-text-in {
            opacity: 0;
            transform: translateY(50px);
            animation: slideUpFade 1.2s cubic-bezier(0.23, 1, 0.32, 1) forwards;
        }
        .delay-1 { animation-delay: 0.4s; }
        .delay-2 { animation-delay: 0.8s; }
        .delay-3 { animation-delay: 1.2s; }

        @keyframes slideUpFade {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Updated Hero CTAs */
        .cta-btn {
            padding: 18px 40px;
            font-weight: 800;
            border-radius: 8px;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 1rem;
            transition: all 0.4s ease;
            display: inline-block;
        }
        .cta-primary {
            background-color: var(--accent-green);
            color: white;
            border: 2px solid var(--accent-green);
        }
        .cta-secondary {
            background-color: transparent;
            color: white;
            border: 2px solid white;
        }
        .cta-btn:hover {
            transform: translateY(-5px);
            color: white;
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        .cta-primary:hover {
            background-color: var(--primary-blue);
            border-color: var(--primary-blue);
        }
        .cta-secondary:hover {
            background-color: white;
            color: var(--primary-blue);
        }

        /* WhatsApp Button */
        .whatsapp-float {
            position: fixed;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: white;
            width: 65px;
            height: 65px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 35px;
            z-index: 1000;
            box-shadow: 0 10px 25px rgba(37, 211, 102, 0.4);
            transition: all 0.3s ease;
        }
        .whatsapp-float:hover {
            transform: scale(1.15) rotate(15deg);
            color: white;
        }

        /* Welcome / About Section */
        .section-padding { padding: 120px 0; }
        /* Who We Are - Advanced Styles */
        .welcome-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 10px 25px;
            background: linear-gradient(135deg, rgba(0, 51, 102, 0.1), rgba(46, 139, 87, 0.1));
            color: var(--primary-blue);
            border-radius: 50px;
            font-weight: 900;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 25px;
            border: 1px solid rgba(46, 139, 87, 0.2);
            position: relative;
            overflow: hidden;
        }
        .welcome-badge::before {
            content: '';
            position: absolute;
            width: 6px;
            height: 6px;
            background: var(--accent-green);
            border-radius: 50%;
            left: 12px;
            animation: pulse-green 2s infinite;
        }
        @keyframes pulse-green {
            0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(46, 139, 87, 0.7); }
            70% { transform: scale(1.2); box-shadow: 0 0 0 10px rgba(46, 139, 87, 0); }
            100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(46, 139, 87, 0); }
        }

        .text-reveal-wrapper {
            position: relative;
            overflow: hidden;
            display: block;
        }
        .text-reveal-content {
            display: block;
            transform: translateY(100%);
            animation: reveal-text 1s cubic-bezier(0.77, 0, 0.175, 1) forwards;
        }
        @keyframes reveal-text {
            to { transform: translateY(0); }
        }

        .floating-element {
            animation: float-y 4s ease-in-out infinite;
        }
        @keyframes float-y {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }

        .stat-card-modern {
            background: #fff;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.05);
            border-top: 4px solid var(--primary-blue);
            transition: all 0.4s ease;
        }
        .stat-card-modern:hover {
            transform: translateY(-10px) scale(1.05);
            border-top-color: var(--accent-green);
            box-shadow: 0 20px 45px rgba(0,0,0,0.1);
        }
        .text-primary-blue { color: var(--primary-blue) !important; }
        .fw-900 { font-weight: 900; }
        .section-title {
            font-weight: 900;
            color: var(--primary-blue);
            text-transform: uppercase;
            font-size: clamp(2rem, 4vw, 3rem);
            line-height: 1.1;
            margin-bottom: 30px;
        }
        .about-text {
            font-size: 1.15rem;
            line-height: 1.8;
            color: #555;
        }
        .vision-mission-card {
            background: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.05);
            transition: all 0.4s ease;
            height: 100%;
            border-bottom: 5px solid transparent;
        }
        .vision-mission-card:hover {
            transform: translateY(-10px);
            border-bottom-color: var(--accent-green);
        }
        .icon-box {
            width: 70px;
            height: 70px;
            background: var(--primary-blue);
            color: #fff;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin-bottom: 25px;
            transition: 0.3s;
        }
        .vision-mission-card:hover .icon-box {
            background: var(--accent-green);
            transform: rotate(-10deg) scale(1.1);
        }

        .info-card {
            background: #fff;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.05);
            transition: all 0.4s ease;
            height: 100%;
            border-top: 4px solid rgba(0, 51, 102, 0.15);
        }
        .info-card:hover {
            transform: translateY(-8px);
            border-top-color: var(--accent-green);
            box-shadow: 0 25px 60px rgba(0,0,0,0.08);
        }
        .info-card-title {
            font-weight: 900;
            text-transform: uppercase;
            color: var(--primary-blue);
            margin-bottom: 15px;
            letter-spacing: 1px;
        }
        .pill-item {
            display: flex;
            gap: 12px;
            align-items: flex-start;
            padding: 12px 14px;
            border-radius: 14px;
            background: linear-gradient(135deg, rgba(0, 51, 102, 0.06), rgba(46, 139, 87, 0.06));
            border: 1px solid rgba(46, 139, 87, 0.15);
        }
        .pill-item i {
            color: var(--accent-green);
            font-size: 1.1rem;
            margin-top: 2px;
        }
        .org-chart {
            display: grid;
            grid-template-columns: 1fr;
            gap: 14px;
        }
        .org-node {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 14px;
            background: linear-gradient(135deg, rgba(0, 51, 102, 0.08), rgba(46, 139, 87, 0.04));
            border: 1px solid rgba(0, 51, 102, 0.12);
            border-radius: 16px;
            padding: 14px 16px;
        }
        .org-node .label {
            font-weight: 900;
            color: var(--primary-blue);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
        }
        .org-node .meta {
            color: #555;
            font-weight: 700;
            font-size: 0.9rem;
        }
        .org-level {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
        }
        @media (min-width: 992px) {
            .org-level {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        .stat-item h2 {
            font-weight: 900;
            color: var(--primary-blue);
            font-size: 3rem;
            margin-bottom: 0;
        }
        .stat-item p {
            font-weight: 700;
            color: var(--accent-green);
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 1px;
        }

        /* Image Mask Animation */
        .img-reveal {
            position: relative;
            border-radius: 30px;
            overflow: hidden;
        }
        .img-reveal::after {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: var(--primary-blue);
            transform: translateX(-101%);
            transition: transform 0.8s cubic-bezier(0.77, 0, 0.175, 1);
        }
        .img-reveal.active::after {
            transform: translateX(101%);
        }
        .service-card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            height: 100%;
        }
        .service-card:hover { transform: translateY(-10px); }
        /* Booking Section */
        .booking-section {
            position: relative;
            background: linear-gradient(rgba(0, 20, 40, 0.9), rgba(0, 40, 20, 0.9)), url('{{ asset("images/warehouse-smiling-colleagues-scanning-cardboard-box-barcode-chatting_482257-77667.jpg") }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 120px 0;
            color: white;
        }
        .booking-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 30px;
            padding: 50px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.3);
        }
        .form-control-custom {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 12px;
            padding: 15px 20px;
            color: #ffffff !important;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .form-control-custom::placeholder {
            color: rgba(255, 255, 255, 0.8);
        }
        .form-control-custom:focus {
            background: rgba(255, 255, 255, 0.2);
            border-color: var(--accent-green);
            box-shadow: 0 0 15px rgba(46, 139, 87, 0.3);
            color: #ffffff !important;
        }
        .form-select.form-control-custom option {
            background-color: var(--primary-blue);
            color: white;
        }
        .booking-info-item {
            display: flex;
            align-items: center;
            margin-bottom: 35px;
            transition: transform 0.3s ease;
        }
        .booking-info-item:hover {
            transform: translateX(10px);
        }
        .booking-info-icon {
            width: 65px;
            height: 65px;
            background: var(--accent-green);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin-right: 25px;
            box-shadow: 0 10px 25px rgba(46, 139, 87, 0.4);
            color: white;
        }
        .inquiry-submit-btn {
            background-color: var(--accent-green) !important;
            color: white !important;
            border: none;
            padding: 18px;
            font-weight: 900;
            letter-spacing: 1px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .inquiry-submit-btn:hover {
            background-color: #ffffff !important;
            color: var(--primary-blue) !important;
            transform: scale(1.02);
            box-shadow: 0 15px 30px rgba(0,0,0,0.3);
        }

        .footer { background-color: #1a140f; color: #fff; padding: 80px 0 30px; }
        .footer-link { color: rgba(255,255,255,0.6); transition: 0.3s; }
        .footer-link:hover { color: var(--accent-gold); padding-left: 5px; }
    </style>
</head>
<body>
    @include('partials.header')
    @include('partials.hero')

    <!-- Welcome / About Section -->
    <section id="about" class="section-padding bg-white overflow-hidden">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="img-reveal shadow-lg floating-element">
                        <img src="{{ asset('images/african-american-carpenter-hitting-walls-with-hammer-using-manual-instrument-renovation-reconstruction-work-male-constructor-overalls-holding-jackhammer-mullet-tool_482257-60095.jpg') }}" class="img-fluid" alt="Zama Construction">
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="welcome-badge">
                        <span>Who We Are</span>
                    </div>
                    <div class="text-reveal-wrapper">
                        <h2 class="section-title text-reveal-content">A Legacy of <span style="color: var(--accent-green);">Excellence</span> & Integrity</h2>
                    </div>
                    <p class="about-text mb-4 animate-text-in">
                        Established in 2022, <strong>ZAMA CONTRACTORS (T) LIMITED</strong> has rapidly emerged as a powerhouse in Tanzania's construction and engineering landscape. We don't just build structures; we forge partnerships based on trust, quality, and professional rigor.
                    </p>
                    <p class="about-text mb-5 animate-text-in delay-1">
                        From high-stakes government infrastructure projects for <strong>TEMESA and TANESCO</strong> to specialized industrial maintenance, our team brings world-class precision to every square meter.
                    </p>
                    
                    <div class="row g-4">
                        <div class="col-sm-4">
                            <div class="stat-card-modern text-center">
                                <h2 class="fw-900 color-primary mb-0">2022</h2>
                                <p class="small fw-bold text-uppercase text-success mb-0">Founded</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="stat-card-modern text-center">
                                <h2 class="fw-900 color-primary mb-0">50+</h2>
                                <p class="small fw-bold text-uppercase text-success mb-0">Projects</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="stat-card-modern text-center">
                                <h2 class="fw-900 color-primary mb-0">100%</h2>
                                <p class="small fw-bold text-uppercase text-success mb-0">Reliability</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-5">
                <div class="col-lg-4">
                    <div class="vision-mission-card">
                        <div class="icon-box"><i class="bi bi-eye"></i></div>
                        <h4 class="fw-bold mb-3 text-uppercase">Our Vision</h4>
                        <p class="text-muted">To be a leading and trusted construction and engineering company in Tanzania, recognized for excellence, innovation, and reliability.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="vision-mission-card">
                        <div class="icon-box"><i class="bi bi-bullseye"></i></div>
                        <h4 class="fw-bold mb-3 text-uppercase">Our Mission</h4>
                        <p class="text-muted">To deliver high-quality construction and technical services that meet client expectations through professionalism, integrity, and timely project execution.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="vision-mission-card">
                        <div class="icon-box"><i class="bi bi-shield-check"></i></div>
                        <h4 class="fw-bold mb-3 text-uppercase">Core Values</h4>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Integrity – We uphold honesty and transparency in all our operations</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Quality – We are committed to delivering high-standard services</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Safety – We prioritize safety in all our projects</li>
                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Professionalism – We maintain excellence in execution and conduct</li>
                            <li><i class="bi bi-check-circle-fill text-success me-2"></i> Customer Satisfaction – We focus on meeting and exceeding client expectations</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <div class="welcome-badge">Company Profile</div>
                    <h3 class="section-title mb-0">Our Strength, <span style="color: var(--accent-green);">Capability</span> & Team</h3>
                </div>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-12">
                    
                    <div class="info-card">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="icon-box" style="width:60px;height:60px;border-radius:16px;font-size:1.6rem;"><i class="bi bi-award"></i></div>
                            <div>
                                <div class="info-card-title mb-0">Compliance &amp; Registration</div>
                                <div class="text-muted">ZAMA Contractors (T) Limited operates in full compliance with Tanzanian regulations and is duly registered with relevant authorities.</div>
                            </div>
                        </div>

                        @php
                            $certificates = [
                                ['title' => 'BUILDING CONTRACTOR CLASS V 26', 'file' => 'BUILDING CONTRACTOR CLASS V 26.pdf'],
                                ['title' => 'CERTFICATE OF CHANGE', 'file' => 'CERTFICATE OF CHANGE.pdf'],
                                ['title' => 'CERTIFICATE OF REGISTRATION CIVIL CONTRACTORS', 'file' => 'CERTIFICATE OF REGISTRATION CIVIL CONTRACTORS.pdf'],
                                ['title' => 'CERTIFICATE REGISTRATION BUILDING CONTRACTORS', 'file' => 'CERTIFICATE REGISTRATION BUILDING CONTRACTORS.pdf'],
                                ['title' => 'CIVIL CONTRACTOR CLASS V 26', 'file' => 'CIVIL CONTRACTOR CLASS V 26.pdf'],
                                ['title' => 'ZAMA VAT Certificate', 'file' => 'ZAMA VAT Certificate.pdf'],
                            ];
                        @endphp

                        <div class="row g-3 mt-2">
                            @foreach($certificates as $cert)
                                <div class="col-md-4">
                                    <div class="pill-item h-100" style="align-items:center; justify-content: space-between;">
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="bi bi-file-earmark-pdf"></i>
                                            <div>
                                                <div class="fw-bold" style="color: var(--primary-blue);">{{ $cert['title'] }}</div>
                                                <div class="text-muted small">PDF Certificate</div>
                                            </div>
                                        </div>
                                        <a href="{{ asset(rawurlencode($cert['file'])) }}" target="_blank" class="btn btn-sm" style="background: var(--primary-blue); color: #fff; font-weight: 800; border-radius: 12px; padding: 8px 12px;">View</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-lg-6">
                    <div class="info-card">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="icon-box" style="width:60px;height:60px;border-radius:16px;font-size:1.6rem;"><i class="bi bi-people"></i></div>
                            <div>
                                <div class="info-card-title mb-0">Clients</div>
                                <div class="text-muted">We have worked with reputable organizations, including:</div>
                            </div>
                        </div>
                        <div class="d-grid gap-3">
                            <div class="pill-item"><i class="bi bi-check2-circle"></i><div><strong>Tanzania Ports Authority (TPA)</strong></div></div>
                            <div class="pill-item"><i class="bi bi-check2-circle"></i><div><strong>Tanzania Electric Supply Company Limited (TANESCO)</strong></div></div>
                            <div class="pill-item"><i class="bi bi-check2-circle"></i><div><strong>Tanzania Electrical, Mechanical and Electronics Services Agency (TEMESA)</strong></div></div>
                            <div class="pill-item"><i class="bi bi-check2-circle"></i><div><strong>Private sector clients</strong></div></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="info-card">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="icon-box" style="width:60px;height:60px;border-radius:16px;font-size:1.6rem;"><i class="bi bi-patch-check"></i></div>
                            <div>
                                <div class="info-card-title mb-0">Why Choose Us</div>
                                <div class="text-muted">What sets ZAMA Contractors apart:</div>
                            </div>
                        </div>
                        <div class="d-grid gap-3">
                            <div class="pill-item"><i class="bi bi-star-fill"></i><div>Proven experience with government and private clients</div></div>
                            <div class="pill-item"><i class="bi bi-star-fill"></i><div>Commitment to quality and timely delivery</div></div>
                            <div class="pill-item"><i class="bi bi-star-fill"></i><div>Skilled and dedicated workforce</div></div>
                            <div class="pill-item"><i class="bi bi-star-fill"></i><div>Competitive pricing</div></div>
                            <div class="pill-item"><i class="bi bi-star-fill"></i><div>Strong technical capability</div></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-lg-6">
                    <div class="info-card">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="icon-box" style="width:60px;height:60px;border-radius:16px;font-size:1.6rem;"><i class="bi bi-diagram-3"></i></div>
                            <div>
                                <div class="info-card-title mb-0">Organizational Structure</div>
                                <div class="text-muted">Our team is composed of qualified and experienced personnel:</div>
                            </div>
                        </div>

                        <div class="org-chart">
                            <div class="org-node"><span class="label">Company Director</span><span class="meta">Leadership & Strategy</span></div>
                            <div class="org-level">
                                <div class="org-node"><span class="label">Technical Engineers</span><span class="meta">Engineering & Design</span></div>
                                <div class="org-node"><span class="label">Project Supervisors</span><span class="meta">Site Oversight</span></div>
                            </div>
                            <div class="org-level">
                                <div class="org-node"><span class="label">Skilled Technicians</span><span class="meta">Execution & Maintenance</span></div>
                                <div class="org-node"><span class="label">Administrative Staff</span><span class="meta">Operations & Support</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="info-card">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="icon-box" style="width:60px;height:60px;border-radius:16px;font-size:1.6rem;"><i class="bi bi-tools"></i></div>
                            <div>
                                <div class="info-card-title mb-0">Equipment & Capacity</div>
                                <div class="text-muted">Tools, machinery, logistics and technical expertise to execute projects efficiently.</div>
                            </div>
                        </div>

                        <p class="about-text mb-3" style="font-size: 1.05rem;">ZAMA Contractors (T) Limited is equipped with the necessary tools, machinery, and technical expertise to execute projects of various sizes efficiently and professionally. Our equipment supports construction, civil works, electrical installations, and maintenance services.</p>
                        <p class="about-text mb-3" style="font-size: 1.05rem;">Our capacity includes the use of modern and well-maintained equipment such as concrete mixers, welding machines, power tools, and compaction equipment for civil and building works. We also utilize electrical testing devices, cable installation tools, and diagnostic equipment for power systems and technical services.</p>
                        <p class="about-text mb-0" style="font-size: 1.05rem;">In addition, the company is supported by transportation and logistics resources, enabling timely delivery of materials and equipment to project sites. Our team of skilled technicians and operators ensures that all equipment is used effectively, safely, and in accordance with industry standards.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section id="services" class="section-padding bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <div class="welcome-badge">Our Expertise</div>
                <h2 class="section-title">Specialized Construction & <span style="color: var(--accent-green);">Engineering Services</span></h2>
                <p class="about-text mx-auto" style="max-width: 800px;">ZAMA Contractors (T) Limited delivers reliable, high-quality solutions across construction, engineering, and technical services. Our capabilities are designed to meet the demands of both public and private sector clients, ensuring efficiency, durability, and value for money.</p>
            </div>
            <div class="row g-4 mb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card bg-white">
                        <img src="{{ asset('images/african-american-carpenter-hitting-walls-with-hammer-using-manual-instrument-renovation-reconstruction-work-male-constructor-overalls-holding-jackhammer-mullet-tool_482257-60095.jpg') }}" class="card-img-top" style="height: 250px; object-fit: cover;" alt="Civil">
                        <div class="p-4 text-center">
                            <h5 class="fw-bold mb-3 text-uppercase">Building Construction</h5>
                            <p class="small text-muted mb-0">Residential, commercial, and industrial buildings from foundation to finishing, including renovations and finishing works.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card bg-white">
                        <img src="{{ asset('images/young-girl-form-construction-worker-with-hard-hat_185193-161752.jpg') }}" class="card-img-top" style="height: 250px; object-fit: cover;" alt="Building">
                        <div class="p-4 text-center">
                            <h5 class="fw-bold mb-3 text-uppercase">Building Insulation Materials</h5>
                            <p class="small text-muted mb-0">High-quality insulation materials for energy efficiency, temperature control, and moisture resistance in buildings.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mx-auto">
                    <div class="service-card bg-white">
                        <img src="{{ asset('images/smiling-raised-hand-young-african-american-builder-uniform-isolated-blue-background_141793-138852.jpg') }}" class="card-img-top" style="height: 250px; object-fit: cover;" alt="Maintenance">
                        <div class="p-4 text-center">
                            <h5 class="fw-bold mb-3 text-uppercase">Security & Surveillance Systems</h5>
                            <p class="small text-muted mb-0">Installation, repair, and maintenance of CCTV and security systems, including upgrades, troubleshooting, and routine servicing.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="{{ route('services') }}" class="cta-btn cta-primary shadow-lg">VIEW ALL 7+ SERVICES <i class="bi bi-arrow-right-circle ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- Projects Portfolio -->
    <section id="projects" class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <div class="welcome-badge">Our Impact</div>
                <h2 class="section-title">Notable <span style="color: var(--accent-green);">Projects Portfolio</span></h2>
                <p class="about-text mx-auto" style="max-width: 800px;">Explore our track record of delivering high-quality engineering and construction solutions across Tanzania.</p>
            </div>

            <div class="row mt-5 g-4 mb-5">
                <div class="col-md-4">
                    <div class="service-card bg-white h-100 shadow-sm border-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img src="{{ asset('images/african-american-carpenter-hitting-walls-with-hammer-using-manual-instrument-renovation-reconstruction-work-male-constructor-overalls-holding-jackhammer-mullet-tool_482257-60095.jpg') }}" class="card-img-top h-100 w-100 object-fit-cover transition" alt="Kinyerezi II">
                            <div class="position-absolute top-0 start-0 m-3">
                                <span class="badge bg-success text-uppercase py-2 px-3">Jan–Jun 2026</span>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold text-uppercase mb-2" style="color: var(--primary-blue);">Kinyerezi II Fence Repair</h5>
                            <p class="small text-muted mb-0">Repair and reinforcement of chain link fence to enhance site security for TANESCO Kinyerezi II Gas Plant.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card bg-white h-100 shadow-sm border-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img src="{{ asset('images/african-american-logistics-managers-team-dicussing-goods-distribution-warehouse-reception-post-office-men-woman-workers-planning-stock-supply-while-chatting-counter-desk_482257-59698.jpg') }}" class="card-img-top h-100 w-100 object-fit-cover transition" alt="Mtwara Port">
                            <div class="position-absolute top-0 start-0 m-3">
                                <span class="badge bg-primary text-uppercase py-2 px-3">Oct 2025</span>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold text-uppercase mb-2" style="color: var(--primary-blue);">Mtwara Port External Road</h5>
                            <p class="small text-muted mb-0">Rehabilitation of the external road at Gate No. 3, Mtwara Port for Tanzania Ports Authority (TPA).</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card bg-white h-100 shadow-sm border-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img src="{{ asset('images/young-girl-form-construction-worker-with-hard-hat_185193-161752.jpg') }}" class="card-img-top h-100 w-100 object-fit-cover transition" alt="Industrial Supply">
                            <div class="position-absolute top-0 start-0 m-3">
                                <span class="badge bg-warning text-dark text-uppercase py-2 px-3">Sep 2025</span>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5 class="fw-bold text-uppercase mb-2" style="color: var(--primary-blue);">Mtwara II Materials Supply</h5>
                            <p class="small text-muted mb-0">Supply and delivery of assorted mechanical and civil materials for TANESCO Mtwara II Gas Plant.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="{{ route('projects') }}" class="cta-btn cta-primary shadow-lg">EXPLORE ALL PROJECTS <i class="bi bi-journal-check ms-2"></i></a>
            </div>
        </div>
    </section>

    <!-- Booking / Inquiry Section -->
    <section id="contact" class="booking-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="welcome-badge" style="background: rgba(255,255,255,0.1); color: #fff;">Get in Touch</div>
                    <h2 class="display-4 fw-900 mb-4">Ready to Start Your <span style="color: var(--accent-green);">Next Project?</span></h2>
                    <p class="fs-5 mb-5 opacity-75">Connect with Tanzania's leading engineering team today. We are ready to provide expert consultations and precise costing for your industrial or construction needs.</p>
                    
                    <div class="booking-info-item animate-text-in">
                        <div class="booking-info-icon"><i class="bi bi-geo-alt"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">Our Office</h6>
                            <p class="mb-0 opacity-75">Kinondoni, Dar es Salaam, Tanzania</p>
                        </div>
                    </div>
                    <div class="booking-info-item animate-text-in delay-1">
                        <div class="booking-info-icon"><i class="bi bi-telephone"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">Call Us Directly</h6>
                            <p class="mb-0 opacity-75">+255 657 099 992</p>
                        </div>
                    </div>
                    <div class="booking-info-item animate-text-in delay-2">
                        <div class="booking-info-icon"><i class="bi bi-envelope"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">Official Email</h6>
                            <p class="mb-0 opacity-75">info@zamacontractors.co.tz</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="booking-card">
                        <h3 class="fw-bold mb-4">Send an Inquiry</h3>
                        <form action="#" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-custom" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control form-control-custom" placeholder="Email Address" required>
                                </div>
                                <div class="col-12">
                                    <select class="form-select form-control-custom">
                                        <option selected disabled>Select Service Interest</option>
                                        <option>Civil Construction</option>
                                        <option>Building Construction</option>
                                        <option>Plant Maintenance</option>
                                        <option>Equipment Supply</option>
                                        <option>Other Inquiry</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control form-control-custom" rows="4" placeholder="Briefly describe your project requirements..." required></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="inquiry-submit-btn w-100 rounded-3 shadow-lg">SUBMIT INQUIRY NOW <i class="bi bi-send-fill ms-2"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <!-- Bootstrap Icons & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
