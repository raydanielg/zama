<!-- Top Bar -->
<div class="top-bar">
    <div class="container-fluid px-5 d-flex justify-content-between align-items-center">
        <div class="d-flex gap-4 top-bar-contact">
            <a href="tel:+255657099992" class="d-none d-md-inline"><i class="bi bi-telephone-fill text-warning me-2"></i> +255 657 099 992</a>
            <a href="mailto:info@zamacontractors.co.tz" class="me-4"><i class="bi bi-envelope-fill me-2 text-white"></i>info@zamacontractors.co.tz</a>
        </div>
        <div class="d-none d-md-flex gap-3">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-tiktok"></i></a>
        </div>
    </div>
</div>

<!-- Navigation -->
<header class="header-container sticky-top">
    <div class="container-fluid px-0">
        <div class="navbar-wrapper shadow-sm">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <img src="{{ asset('logo.png') }}" alt="Zama Logo" height="45" class="me-2">
                    <span class="fw-900 fs-4 text-primary-blue d-none d-sm-inline">ZAMA CONSTRUCTORS</span>
                </a>
                <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="bi bi-list fs-2 text-dark"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto align-items-center">
                        <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="{{ url('/') }}#about">About Us</a></li>
                        <li class="nav-item"><a class="nav-link px-3 {{ Request::is('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a></li>
                        <li class="nav-item"><a class="nav-link px-3 {{ Request::is('projects') ? 'active' : '' }}" href="{{ route('projects') }}">Projects</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="{{ url('/') }}#contact">Contact Us</a></li>
                        @auth
                            <li class="nav-item"><a class="nav-link px-3" href="{{ url('/home') }}">Dashboard</a></li>
                        @endauth
                    </ul>
                    <div class="ms-lg-auto">
                        <a href="#contact" class="nav-link inquiry-btn">
                            INQUIRY NOW <i class="bi bi-send-fill ms-1"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
