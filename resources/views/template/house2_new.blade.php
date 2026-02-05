<!DOCTYPE html>
<html lang="fr">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo/fav-logo1.png') }}" type="image/x-icon">
    <!--===== CSS LINK =======-->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owlcarousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- mon propre style css -->
    @yield('style')
</head>

<body class="body1 b-bg1">
    <!--===== PRELOADER STARTS =======-->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="{{ asset('assets/img/logo/preloader.png') }}" alt="housa"></div>
        </div>
    </div>
    <!--===== PRELOADER ENDS =======-->
    <!--===== PROGRESS STARTS=======-->
    <div class="paginacontainer">
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </div>

    <!--===== ADMIN SIDEBAR LEFT STARTS =======-->
    <div class="admin-sidebar-wrapper" id="adminSidebar">
        <!-- Admin Sidebar Header -->
        <div class="admin-sidebar-header">
            <h2>Tableau de bord</h2>
        </div>

        <!-- Admin Sidebar Menu -->
        <d class="admin-sidebar-menu">

            <!-- Accueil Section -->
            <div class="admin-sidebar-menu-title">🏠 Accueil</div>
            <div class="admin-sidebar-item">
                <a href="{{ route('admin.dashboard') }}" class="admin-sidebar-link">
                    <span>Accueil admin</span>
                </a>
            </div>

            <!-- Gestion des propriétés Section -->
            <div class="admin-sidebar-menu-title">🏘️ Propriétés</div>
            <div class="admin-sidebar-item">
                <a href="{{ route('property.index') }}" class="admin-sidebar-link">
                    <span>Liste propriétés</span>
                    <span class="admin-sidebar-badge">0</span>
                </a>
            </div>
            <div class="admin-sidebar-item">
                <a href="{{ route('property.create') }}" class="admin-sidebar-link">
                    <span>Ajouter propriété</span>
                </a>
            </div>

            <!-- Gestion des visites Section -->
            <div class="admin-sidebar-menu-title">👁️ Visites</div>
            <div class="admin-sidebar-item">
                <a href="{{ route('visits.index') }}" class="admin-sidebar-link">
                    <span>Visites planifiées</span>
                    <span class="admin-sidebar-badge">0</span>
                </a>
            </div>

            <!-- Gestion des loyers Section -->
            <div class="admin-sidebar-menu-title">💰 Loyers</div>
            <div class="admin-sidebar-item">
                <a href="{{ route('house.rent') }}" class="admin-sidebar-link">
                    <span>Suivi des revenus</span>
                    <span class="admin-sidebar-badge">0</span>
                </a>
            </div>

            <!-- Messages de contact Section -->
            <div class="admin-sidebar-menu-title">✉️ Messages</div>
            <div class="admin-sidebar-item">
                <a href="{{ route('contact.index') }}" class="admin-sidebar-link">
                    <span>Demandes clients</span>
                    <span class="admin-sidebar-badge">0</span>
                </a>
            </div>

            <!-- Finances Section -->
            <div class="admin-sidebar-menu-title">💳 Finances</div>
            <div class="admin-sidebar-item">
                <a href="{{ route('admin.payments') }}" class="admin-sidebar-link">
                    <span>Portefeuille/Transactions</span>
                </a>
            </div>

            <!-- Compte Section -->
            <div class="admin-sidebar-menu-title">👤 Compte</div>
            <div class="admin-sidebar-item">
                <a href="{{ route('users.index') }}" class="admin-sidebar-link">
                    <span>Utilisateurs </span>
                </a>
            </div>
            <form action="{{ route('logout') }}" id="form" method="post">
                @csrf
            </form>
            <div class="admin-sidebar-item">
                <a href="#" onclick="event.preventDefault(); document.getElementById('form').submit();"
                    class="admin-sidebar-link logout-link">
                    <span>Déconnexion</span>
                </a>
            </div>
    </div>

    <!-- Admin Sidebar Styles -->
    <style>
        /* Admin Sidebar Fixed Left Layout */
        .admin-sidebar-wrapper {
            position: fixed;
            left: 0;
            top: 0;
            width: 280px;
            height: 100vh;
            background: linear-gradient(180deg, #ED8438 0%, #d97633 100%);
            box-shadow: 3px 0 25px rgba(237, 132, 56, 0.4);
            z-index: 9000;
            overflow-y: auto;
            overflow-x: hidden;
            padding-top: 0;
            scrollbar-width: thin;
            scrollbar-color: #fff #ED8438;
        }

        .admin-sidebar-wrapper::-webkit-scrollbar {
            width: 6px;
        }

        .admin-sidebar-wrapper::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
        }

        .admin-sidebar-wrapper::-webkit-scrollbar-thumb {
            background: #fff;
            border-radius: 3px;
        }

        .admin-sidebar-wrapper::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.9);
        }

        .admin-sidebar-header {
            padding: 25px 20px;
            border-bottom: 3px solid #fff;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            gap: 10px;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .admin-sidebar-header h2 {
            color: #fff;
            font-size: 18px;
            font-weight: 700;
            margin: 0;
            letter-spacing: 0.5px;
        }

        .admin-sidebar-header::before {
            content: '⚙️';
            font-size: 20px;
        }

        .admin-sidebar-menu {
            padding: 15px 0;
        }

        .admin-sidebar-menu-group.separator {
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(237, 132, 56, 0.3), transparent);
            margin: 10px 15px;
        }

        .admin-sidebar-menu-title {
            color: #fff;
            font-size: 11px;
            font-weight: 800;
            text-transform: uppercase;
            padding: 12px 20px 8px;
            letter-spacing: 1.5px;
        }

        .admin-sidebar-item {
            position: relative;
        }

        .admin-sidebar-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 16px;
            color: #fff;
            text-decoration: none;
            transition: all 0.25s ease;
            border-left: 3px solid transparent;
            font-weight: 500;
            font-size: 14px;
            margin: 0 8px;
            border-radius: 6px;
        }

        .admin-sidebar-link:hover {
            background-color: rgba(255, 255, 255, 0.15);
            color: #fff;
            border-left-color: #fff;
            padding-left: 20px;
            transform: translateX(2px);
        }

        .admin-sidebar-link.active {
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            border-left-color: #fff;
            font-weight: 600;
            box-shadow: inset -3px 0 0 #fff;
        }

        .admin-sidebar-link.logout-link {
            color: #da1d1d;
            margin-top: 10px;
        }

        .admin-sidebar-link.logout-link:hover {
            background-color: rgba(255, 107, 107, 0.15);
            border-left-color: white;
            color: white;
        }

        .admin-sidebar-badge {
            background: linear-gradient(135deg, #ED8438 0%, #ff9555 100%);
            color: white;
            border-radius: 50%;
            width: 22px;
            height: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: 800;
            margin-left: auto;
            flex-shrink: 0;
            box-shadow: 0 2px 8px rgba(237, 132, 56, 0.4);
            min-width: 22px;
        }

        .admin-sidebar-footer {
            padding: 20px;
            border-top: 2px solid #fff;
            background: rgba(255, 255, 255, 0.1);
            position: sticky;
            bottom: 0;
            text-align: center;
            margin-top: 10px;
        }

        .admin-sidebar-footer p {
            color: #fff;
            font-size: 11px;
            margin: 0;
            line-height: 1.6;
        }

        /* Top Header Navigation */
        .admin-top-header {
            position: fixed;
            top: 0;
            left: 280px;
            right: 0;
            height: 70px;
            background: linear-gradient(90deg, #fff 0%, #f9f9f9 100%);
            box-shadow: 0 2px 15px rgba(237, 132, 56, 0.15);
            z-index: 8998;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
            border-bottom: 3px solid #ED8438;
        }

        .admin-header-left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .admin-header-title {
            font-size: 24px;
            font-weight: 700;
            color: #ED8438;
            margin: 0;
            letter-spacing: 0.5px;
        }

        .admin-header-subtitle {
            font-size: 12px;
            color: #999;
            font-weight: 500;
        }

        .admin-header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .admin-header-search {
            display: flex;
            align-items: center;
            background: #f0f0f0;
            border-radius: 8px;
            padding: 8px 15px;
            gap: 10px;
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }

        .admin-header-search:hover,
        .admin-header-search:focus-within {
            border-color: #ED8438;
            background: #fff;
        }

        .admin-header-search input {
            border: none;
            background: transparent;
            outline: none;
            font-size: 13px;
            width: 150px;
            color: #333;
        }

        .admin-header-search input::placeholder {
            color: #999;
        }

        .admin-header-icons {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .admin-header-icon-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid #ED8438;
            background: rgba(237, 132, 56, 0.08);
            color: #ED8438;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }

        .admin-header-icon-btn:hover {
            background: #ED8438;
            color: #fff;
            transform: scale(1.05);
        }

        .admin-header-divider {
            width: 1px;
            height: 25px;
            background: #ddd;
        }

        .admin-header-user {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 5px 12px;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .admin-header-user:hover {
            background: rgba(237, 132, 56, 0.1);
        }

        .admin-header-user-avatar {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: linear-gradient(135deg, #ED8438 0%, #d97633 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 700;
            font-size: 14px;
        }

        .admin-header-user-info {
            display: flex;
            flex-direction: column;
        }

        .admin-header-user-name {
            font-size: 12px;
            font-weight: 600;
            color: #333;
        }

        .admin-header-user-role {
            font-size: 10px;
            color: #999;
        }

        /* Adjust body content margin */
        body .admin-top-header+* {
            margin-top: 70px;
        }

        /* Main Content Container */
        body {
            margin: 0;
            padding: 0;
        }

        .body1 .admin-top-header {
            left: 280px;
        }

        @media (max-width: 768px) {
            .body1 .admin-top-header {
                left: 0;
            }
        }

        /* Content wrapper styling */
        .container-fluid {
            padding: 0;
            margin: 0;
            width: 100%;
            max-width: 100%;
        }

        .main-content {
            background: #fff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 12px rgba(237, 132, 56, 0.08);
        }

        .page-header {
            margin-bottom: 30px;
            border-bottom: 2px solid #ED8438;
            padding-bottom: 15px;
        }

        @media (max-width: 768px) {
            body>*:not(.admin-sidebar-wrapper):not(.admin-mobile-toggle):not(.admin-overlay):not(.admin-top-header):not(style):not(script) {
                margin-left: 0;
                margin-top: 70px;
            }
        }

        @media (max-width: 768px) {
            .admin-top-header {
                left: 0;
                padding: 0 15px;
            }

            .admin-header-search {
                display: none;
            }

            .admin-header-title {
                font-size: 18px;
            }
        }

        /* Footer Copyright Style */
        .footer-copyright {
            position: relative;
            bottom: 0;
            width: 100%;
            background: linear-gradient(180deg, rgba(26, 26, 26, 0.95) 0%, rgba(37, 37, 37, 0.98) 100%);
            border-top: 2px solid #ED8438;
            padding: 15px 20px;
            text-align: center;
            z-index: 8999;
            box-shadow: 0 -3px 15px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(5px);
        }

        .footer-copyright p {
            margin: 0;
            color: #b8b8b8;
            font-size: 12px;
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        .footer-copyright strong {
            color: #ED8438;
            font-weight: 600;
        }

        .footer-copyright-text {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        .footer-copyright-text::before {
            content: '©';
            color: #ED8438;
            font-weight: 700;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .footer-copyright {
                padding: 12px 15px;
                font-size: 11px;
            }

            .footer-copyright p {
                font-size: 11px;
            }
        }

        @media (max-width: 1200px) {
            .admin-sidebar-wrapper {
                width: 250px;
            }

            .admin-sidebar-link {
                padding: 9px 14px;
                font-size: 13px;
            }

            .admin-sidebar-header h2 {
                font-size: 16px;
            }
        }

        @media (max-width: 768px) {
            .admin-sidebar-wrapper {
                width: 220px;
                left: -220px;
                z-index: 10000;
                transition: left 0.3s ease;
            }

            .admin-sidebar-wrapper.active {
                left: 0;
                box-shadow: 3px 0 30px rgba(0, 0, 0, 0.6);
            }

            .admin-sidebar-link {
                padding: 10px 14px;
                font-size: 13px;
            }

            .admin-sidebar-badge {
                width: 20px;
                height: 20px;
                font-size: 9px;
            }
        }

        @media (max-width: 480px) {
            .admin-sidebar-wrapper {
                width: 100%;
                max-width: 220px;
            }
        }

        .admin-mobile-toggle {
            position: fixed;
            top: 20px;
            left: 20px;
            width: 45px;
            height: 45px;
            background: #ED8438;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 22px;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(237, 132, 56, 0.3);
            z-index: 9999;
            transition: all 0.3s ease;
            padding: 0;
            display: none;
            align-items: center;
            justify-content: center;
        }

        .admin-mobile-toggle:hover {
            background: #d97633;
            transform: scale(1.1);
            box-shadow: 0 4px 12px rgba(237, 132, 56, 0.4);
        }

        .admin-mobile-toggle svg {
            width: 24px;
            height: 24px;
        }

        .admin-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 9998;
        }

        .admin-overlay.active {
            display: block;
        }

        @media (max-width: 768px) {
            .admin-mobile-toggle {
                display: flex;
            }
        }

        @media (max-width: 480px) {
            .admin-mobile-toggle {
                width: 40px;
                height: 40px;
                top: 15px;
                left: 15px;
                font-size: 18px;
            }
        }
    </style>

    <!-- Mobile Toggle Button -->
    <button class="admin-mobile-toggle" id="adminToggleBtn" onclick="toggleAdminSidebar()" title="Ouvrir le menu admin">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
        </svg>
    </button>

    <!-- Admin Overlay (Mobile) -->
    <div class="admin-overlay" id="adminOverlay" onclick="closeAdminSidebar()"></div>

    <script>
        function toggleAdminSidebar() {
            const sidebar = document.querySelector('.admin-sidebar-wrapper');
            const overlay = document.getElementById('adminOverlay');
            sidebar.classList.toggle('active');
            overlay.classList.toggle('active');
            document.body.style.overflow = sidebar.classList.contains('active') ? 'hidden' : 'auto';
        }

        function closeAdminSidebar() {
            const sidebar = document.querySelector('.admin-sidebar-wrapper');
            const overlay = document.getElementById('adminOverlay');
            sidebar.classList.remove('active');
            overlay.classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        // Close sidebar when clicking on a link (mobile)
        document.querySelectorAll('.admin-sidebar-link').forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 768) {
                    closeAdminSidebar();
                }
            });
        });

        // Highlight active link based on current URL
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            document.querySelectorAll('.admin-sidebar-link').forEach(link => {
                const href = link.getAttribute('href');
                if (currentPath.includes(href.replace(/^.*\//, ''))) {
                    link.classList.add('active');
                }
            });
        });

        // Close sidebar on resize to desktop
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                closeAdminSidebar();
            }
        });
    </script>

    <!-- Top Header Navigation -->
    <div class="admin-top-header">
        <div class="admin-header-left">
            <div>
                <h1 class="admin-header-title">Gestion Immobilière</h1>
                <p class="admin-header-subtitle">Tableau de bord admin</p>
            </div>
        </div>

        <div class="admin-header-right">
            <div class="admin-header-search">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Rechercher...">
            </div>

            <div class="admin-header-icons">
                <button class="admin-header-icon-btn" title="Notifications">
                    <i class="fas fa-bell"></i>
                </button>
                <button class="admin-header-icon-btn" title="Messages">
                    <i class="fas fa-envelope"></i>
                </button>
                <div class="admin-header-divider"></div>
                <div class="admin-header-user">
                    <div class="admin-header-user-avatar">A</div>
                    <div class="admin-header-user-info">
                        <span class="admin-header-user-name">{{ Auth::user()->first_name ?? 'Username' }}
                            {{ Auth::user()->last_name }}</span>
                        <span class="admin-header-user-role">{{ Auth::user()->rule }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== MAIN CONTENT STARTS =======-->
    <div class="bbo">
        @yield('content')
    </div>

    <style>
        .dashboard-content {
            margin-left: 280px;
            /* Largeur de la sidebar (280px) */
            padding: 30px;
            background: #f8f9fa;
            min-height: calc(100vh - 100px);
            transition: margin-left 0.3s ease;
        }

        @media (max-width: 1200px) {
            .dashboard-content {
                margin-left: 280px;
            }

            .bbo {
                margin-left: 250px !important;
            }
        }
    </style>
    <style>
        @media (max-width: 768px) {
            .dashboard-content {
                margin-left: 0;
            }

            .bbo {
                margin-left: 0 !important;
            }
        }
    </style>

    @include('partials.toast')
    <!--===== JS SCRIPT LINK =======-->
    <script src="{{ asset('assets/js/plugins/jquery-3-7-1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/fontawesome.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/aos.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chart.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/textSplite-custom.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper-slider.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/mobilemenu.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/owlcarousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/slick-slider.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/circle-progress.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- mon fichier script -->
    @yield('script')

    <!-- Footer Copyright -->
    <div class="space32"></div>
    <div class="footer-copyright" style="bottom:0;">
        <p class="footer-copyright-text">
            <span>2025 <strong>Gestion Immobilière</strong></span>
            <span>|</span>
            <span>All rights reserved</span>
        </p>
    </div>
</body>

</html>
