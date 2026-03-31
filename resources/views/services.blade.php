<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Services | Zama Contractors (T) Limited</title>
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
            <p class="lead fs-4">Comprehensive Engineering & Construction Solutions</p>
        </div>
    </div>

    <section class="py-5 mt-5">
        <div class="container">
            <div class="row">
                @php
                    $services = [
                        ['title' => 'Civil Construction Services', 'desc' => 'Tunatoa huduma za ujenzi wa miundombinu kama barabara, madaraja, mifereji ya maji, na miradi mingine ya kiraia kwa kutumia teknolojia za kisasa na viwango vya hali ya juu.', 'icon' => 'bi-cone-striped'],
                        ['title' => 'Building Construction', 'desc' => 'Tunajihusisha na ujenzi wa majengo ya makazi, biashara, na viwanda kuanzia hatua ya msingi hadi kukamilika (turnkey projects).', 'icon' => 'bi-building'],
                        ['title' => 'Renovation & Rehabilitation', 'desc' => 'Tunafanya ukarabati na uboreshaji wa majengo na miundombinu ili kurejesha ubora, kuongeza maisha ya matumizi, na kuboresha muonekano.', 'icon' => 'bi-tools'],
                        ['title' => 'Mechanical & Plant Maintenance', 'desc' => 'Tunatoa huduma za matengenezo na ukarabati wa mitambo ya viwandani, power plants, na mashine mbalimbali ili kuhakikisha zinafanya kazi kwa ufanisi mkubwa.', 'icon' => 'bi-gear-wide-connected'],
                        ['title' => 'Power Generation Equipment Services', 'desc' => 'Huduma za ukarabati, matengenezo, na usimamizi wa vifaa vya kuzalisha umeme kama turbines, generators, na mifumo mingine ya nishati.', 'icon' => 'bi-lightning-charge'],
                        ['title' => 'Security & Surveillance Systems Maintenance', 'desc' => 'Ufungaji, ukarabati, na matengenezo ya mifumo ya usalama kama CCTV, access control systems, na vifaa vingine vya ulinzi.', 'icon' => 'bi-shield-lock'],
                        ['title' => 'Office Equipment Maintenance', 'desc' => 'Matengenezo ya vifaa vya ofisini kama printers, computers, na vifaa vingine vya IT ili kuhakikisha vinafanya kazi bila hitilafu.', 'icon' => 'bi-laptop'],
                        ['title' => 'Supply of Construction Materials', 'desc' => 'Usambazaji wa vifaa vya ujenzi kama cement, steel, aggregates, pamoja na vifaa vingine vinavyohitajika kwenye miradi.', 'icon' => 'bi-truck'],
                        ['title' => 'Construction Chemicals & Insulation Materials', 'desc' => 'Tunatoa kemikali za ujenzi (kama waterproofing, adhesives) na vifaa vya insulation kwa ajili ya kulinda majengo dhidi ya joto, unyevu, na uharibifu.', 'icon' => 'bi-droplet-half'],
                        ['title' => 'Equipment Rental Services', 'desc' => 'Upangishaji wa mashine na vifaa vya ujenzi kama excavators, generators, na tools mbalimbali kwa gharama nafuu.', 'icon' => 'bi-key'],
                        ['title' => 'Safety Equipment Supply', 'desc' => 'Tunatoa vifaa vya usalama kazini (PPE) kama helmets, gloves, boots, na vifaa vingine vinavyolinda wafanyakazi.', 'icon' => 'bi-safe'],
                        ['title' => 'Importation of Equipment & Spare Parts', 'desc' => 'Tunasaidira kuagiza vifaa na vipuri kutoka nje ya nchi kwa ubora wa hali ya juu na kwa gharama nafuu.', 'icon' => 'bi-globe'],
                        ['title' => 'Project Management Services', 'desc' => 'Usimamizi wa miradi kuanzia kupanga, kutekeleza, kufuatilia hadi kukamilisha kwa wakati na ndani ya bajeti.', 'icon' => 'bi-kanban'],
                        ['title' => 'Estimating & Costing Solutions', 'desc' => 'Tunatoa huduma za makadirio ya gharama za miradi ili kusaidia kupanga bajeti sahihi na kudhibiti matumizi.', 'icon' => 'bi-calculator'],
                        ['title' => 'Software Solutions for Construction', 'desc' => 'Tunatoa na kushauri matumizi ya software za usimamizi wa miradi na makadirio ili kuongeza ufanisi na uwazi katika kazi.', 'icon' => 'bi-code-square'],
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
