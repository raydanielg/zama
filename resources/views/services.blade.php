<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Services | Zama Contractors (T) Limited | Engineering & Construction Tanzania</title>
    <meta name="description" content="Explore the wide range of construction and engineering services offered by ZAMA Contractors (T) Limited, from building and civil works to power plant maintenance.">
    <meta property="og:title" content="Our Services | Zama Contractors (T) Limited">
    <meta property="og:description" content="Professional construction, engineering, and technical services in Tanzania.">
    <meta property="og:image" content="{{ asset('medium-shot-plus-size-woman-working-construction.jpg') }}">
    <link rel="icon" type="image/png" href="{{ asset('crane_9689068.png') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:400,600,700,800,900&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        :root {
            --primary-blue: #003366;
            --accent-green: #2e8b57;
            --light-bg: #f4f7f6;
            --dark-text: #1a1a1a;
        }
        body {
            font-family: 'Nunito', sans-serif;
            background-color: var(--light-bg);
            color: var(--dark-text);
        }
        .page-header {
            background: linear-gradient(rgba(0, 51, 102, 0.8), rgba(0, 51, 102, 0.8)), url('{{ asset("images/african-american-logistics-managers-team-dicussing-goods-distribution-warehouse-reception-post-office-men-woman-workers-planning-stock-supply-while-chatting-counter-desk_482257-59698.jpg") }}');
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            color: white;
            text-align: center;
        }
        .service-card-full {
            background: white;
            border-radius: 20px;
            padding: 40px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            border-left: 5px solid var(--primary-blue);
        }
        .service-card-full:hover {
            transform: translateY(-5px);
            border-left-color: var(--accent-green);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }
        .service-number {
            font-size: 3rem;
            font-weight: 900;
            color: rgba(0, 51, 102, 0.1);
            line-height: 1;
            margin-bottom: 10px;
        }
        .service-title {
            color: var(--primary-blue);
            font-weight: 800;
            margin-bottom: 15px;
            text-transform: uppercase;
        }
        .service-description {
            color: #555;
            line-height: 1.8;
            font-size: 1.1rem;
        }
        .icon-wrapper {
            width: 60px;
            height: 60px;
            background: rgba(46, 139, 87, 0.1);
            color: var(--accent-green);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        /* Style for Header partial compatibility */
        .top-bar { background-color: var(--primary-blue); color: #fff; padding: 10px 0; font-size: 0.85rem; font-weight: 600; }
        .top-bar a { color: #fff; text-decoration: none; }
        .header-container { background-color: #fff; padding: 15px 0; box-shadow: 0 2px 15px rgba(0,0,0,0.05); }
        .nav-link { font-weight: 800; color: var(--primary-blue) !important; text-transform: uppercase; font-size: 0.9rem; }
        .inquiry-btn { background-color: var(--primary-blue); color: #fff !important; border-radius: 5px; padding: 12px 30px !important; font-weight: 800; }
        .footer { background-color: #1a140f; color: #fff; padding: 80px 0 30px; }
    </style>
</head>
<body>
    @include('partials.header')

    <div class="page-header">
        <div class="container">
            <h1 class="display-3 fw-900 mb-3">Our Services</h1>
            <p class="lead fs-4">Reliable Construction, Engineering & Technical Services</p>
        </div>
    </div>

    <section class="py-5 mt-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-10 mx-auto text-center">
                    <p class="service-description mb-0">ZAMA Contractors (T) Limited delivers reliable, high-quality solutions across construction, engineering, and technical services. Our capabilities are designed to meet the demands of both public and private sector clients, ensuring efficiency, durability, and value for money.</p>
                </div>
            </div>
            <div class="row">
                @php
                    $services = [
                        ['title' => 'Building Construction Services', 'desc' => 'We specialize in the construction of residential, commercial, and industrial buildings, delivering structurally sound and high-quality projects from foundation to finishing. Our scope includes office buildings, residential houses, renovations, and finishing works such as roofing, plastering, tiling, and painting.', 'icon' => 'bi-building'],
                        ['title' => 'Supply of Building Insulation Materials', 'desc' => 'We provide high-quality insulation materials that improve energy efficiency, temperature control, and moisture resistance in buildings, including thermal insulation boards, roofing insulation solutions, and moisture-resistant wall systems.', 'icon' => 'bi-layers'],
                        ['title' => 'Security & Surveillance Systems (Installation, Repair & Maintenance)', 'desc' => 'We offer installation, repair, and maintenance of CCTV and security systems to ensure safety and continuous monitoring of facilities, including system upgrades, fault troubleshooting, and routine servicing of surveillance equipment.', 'icon' => 'bi-camera-video'],
                        ['title' => 'Power Generation Plants & Equipment Maintenance', 'desc' => 'We provide professional maintenance and repair services for power generation equipment, including routine servicing of generators, fault diagnosis and repair of mechanical and electrical systems, as well as supply and replacement of critical components.', 'icon' => 'bi-lightning-charge'],
                        ['title' => 'Civil Engineering Works', 'desc' => 'Our civil works include road construction and rehabilitation, site clearing, grading, leveling, and drainage system installation, ensuring durable and reliable infrastructure solutions.', 'icon' => 'bi-cone-striped'],
                        ['title' => 'Supply of Motor Vehicle Spare Parts', 'desc' => 'We supply high-quality motor vehicle spare parts, including engine components, brake systems, filters, and suspension parts, ensuring reliability and optimal performance of vehicles.', 'icon' => 'bi-car-front'],
                        ['title' => 'Supply of Hardware and Building Materials', 'desc' => 'We provide a wide range of construction and hardware materials, including cement, steel, aggregates, electrical fittings, plumbing materials, and general tools to support efficient project execution.', 'icon' => 'bi-box-seam'],
                    ];
                @endphp

                @foreach($services as $index => $service)
                    <div class="col-lg-6">
                        <div class="service-card-full">
                            <div class="service-number">{{ sprintf('%02d', $index + 1) }}</div>
                            <div class="icon-wrapper">
                                <i class="bi {{ $service['icon'] }}"></i>
                            </div>
                            <h3 class="service-title">{{ $service['title'] }}</h3>
                            <p class="service-description">{{ $service['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.footer')

    <!-- Bootstrap Icons & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
