<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Projects | Zama Contractors (T) Limited</title>
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
            background: linear-gradient(rgba(0, 51, 102, 0.8), rgba(0, 51, 102, 0.8)), url('{{ asset("images/smiling-young-builder-man-uniform-with-safety-helmet-gesturing-victory-sign-isolated-white-wall-with-copy-space_141793-120089.jpg") }}');
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            color: white;
            text-align: center;
        }
        
        /* Timeline Styling */
        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 0;
        }
        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: var(--primary-blue);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
            border-radius: 10px;
        }
        .timeline-item {
            padding: 10px 40px;
            position: relative;
            background-color: inherit;
            width: 50%;
        }
        .timeline-item::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            right: -12px;
            background-color: white;
            border: 4px solid var(--accent-green);
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }
        .left {
            left: 0;
        }
        .right {
            left: 50%;
        }
        .right::after {
            left: -13px;
        }
        .timeline-content {
            padding: 30px;
            background-color: white;
            position: relative;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: 0.3s;
        }
        .timeline-content:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }
        .year-label {
            display: inline-block;
            padding: 5px 20px;
            background: var(--primary-blue);
            color: white;
            border-radius: 50px;
            font-weight: 800;
            margin-bottom: 15px;
        }
        .project-title {
            color: var(--primary-blue);
            font-weight: 800;
            margin-bottom: 10px;
            text-transform: uppercase;
        }
        .client-name {
            color: var(--accent-green);
            font-weight: 700;
            font-size: 0.9rem;
            margin-bottom: 15px;
            display: block;
        }
        .project-desc {
            color: #555;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 0;
        }

        /* Responsive Timeline */
        @media screen and (max-width: 768px) {
            .timeline::after {
                left: 31px;
            }
            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }
            .timeline-item::after {
                left: 18px;
            }
            .right {
                left: 0%;
            }
        }

        /* Header/Footer compatibility */
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
            <h1 class="display-3 fw-900 mb-3 text-uppercase">Project Portfolio</h1>
            <p class="lead fs-4">A record of our commitment to excellence across Tanzania.</p>
        </div>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="timeline">
                <!-- 2026 -->
                <div class="timeline-item left">
                    <div class="timeline-content">
                        <span class="year-label">January 2026</span>
                        <h4 class="project-title">Chain Link Fence Repair</h4>
                        <span class="client-name">Client: TANESCO – Kinyerezi II Gas Plant</span>
                        <p class="project-desc">Tulitekeleza ukarabati wa uzio wa usalama (chain link fence) kwa lengo la kuimarisha ulinzi wa miundombinu muhimu ya uzalishaji umeme.</p>
                    </div>
                </div>

                <!-- 2025 -->
                <div class="timeline-item right">
                    <div class="timeline-content">
                        <span class="year-label">October 2025</span>
                        <h4 class="project-title">External Road Rehabilitation</h4>
                        <span class="client-name">Client: Tanzania Ports Authority (TPA) – Mtwara Port</span>
                        <p class="project-desc">Tuliboresha barabara ya nje ya Gate No. 3 kwa kuongeza ubora wa miundombinu na kurahisisha usafirishaji wa mizigo bandarini.</p>
                    </div>
                </div>

                <div class="timeline-item left">
                    <div class="timeline-content">
                        <span class="year-label">August 2025</span>
                        <h4 class="project-title">Supply of Mechanical & Civil Materials</h4>
                        <span class="client-name">Client: TANESCO – Mtwara II Gas Plant</span>
                        <p class="project-desc">Tulitoa vifaa mbalimbali vya mitambo na ujenzi kwa ajili ya kusaidia shughuli za uzalishaji na matengenezo ya miundombinu ya nishati.</p>
                    </div>
                </div>

                <div class="timeline-item right">
                    <div class="timeline-content">
                        <span class="year-label">June 2025</span>
                        <h4 class="project-title">Gas Turbine Workshop Renovation</h4>
                        <span class="client-name">Client: TANESCO – Kinyerezi I Gas Power Plant</span>
                        <p class="project-desc">Tulitoa vifaa vya ujenzi kwa ajili ya ukarabati wa workshop ya matengenezo ya gas turbine, kuhakikisha mazingira bora ya kazi na usalama.</p>
                    </div>
                </div>

                <div class="timeline-item left">
                    <div class="timeline-content">
                        <span class="year-label">May 2025</span>
                        <h4 class="project-title">Road Potholes Repair</h4>
                        <span class="client-name">Client: Tanzania Ports Authority (TPA) – Mtwara Port</span>
                        <p class="project-desc">Tulifanya ukarabati wa mashimo ya barabara (potholes) katika eneo la Shed No. 3 ili kuboresha usalama na ufanisi wa usafiri.</p>
                    </div>
                </div>

                <!-- 2024 -->
                <div class="timeline-item right">
                    <div class="timeline-content">
                        <span class="year-label">June 2024</span>
                        <h4 class="project-title">Road Maintenance Works</h4>
                        <span class="client-name">Client: Tanzania Ports Authority (TPA) – Mtwara Port</span>
                        <p class="project-desc">Tulitekeleza matengenezo ya barabara ikiwa ni pamoja na kuziba mashimo na kuboresha hali ya barabara kwa matumizi ya kila siku.</p>
                    </div>
                </div>

                <!-- 2023 -->
                <div class="timeline-item left">
                    <div class="timeline-content">
                        <span class="year-label">October 2023</span>
                        <h4 class="project-title">Major Bridge Repair (Subcontract)</h4>
                        <span class="client-name">Project: Senga Bridge – Senga–Sungusila–Ikoni Road</span>
                        <p class="project-desc">Tulishiriki kama mkandarasi mdogo katika ukarabati mkubwa wa daraja, tukichangia kuboresha miundombinu ya usafiri katika eneo husika.</p>
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
