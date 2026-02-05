@extends('template.house')

@section('title')
    Housa - Dashboard
@endsection
@section('content')

    <head>
        <style>
            .main-container {
                max-width: 1400px;
                margin: 0 auto;
                padding: 30px 20px;
            }

            /* Page Header */
            .page-header {
                background: linear-gradient(135deg, #ED8438 0%, #d97633 100%);
                padding: 30px;
                border-radius: 20px;
                color: white;
                margin-bottom: 30px;
                box-shadow: 0 10px 30px rgba(237, 132, 56, 0.3);
            }

            .page-header h1 {
                font-size: 32px;
                font-weight: 700;
                margin-bottom: 8px;
            }

            .page-header p {
                opacity: 0.9;
                font-size: 16px;
            }

            /* Navigation Tabs */
            .nav-tabs {
                display: flex;
                gap: 10px;
                margin-bottom: 30px;
                flex-wrap: wrap;
                background: white;
                padding: 15px;
                border-radius: 15px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            }

            .nav-tab {
                padding: 12px 24px;
                border: 2px solid #e9ecef;
                background: white;
                color: #6c757d;
                border-radius: 10px;
                cursor: pointer;
                font-weight: 600;
                transition: all 0.3s ease;
                display: flex;
                align-items: center;
                gap: 8px;
            }

            .nav-tab:hover {
                border-color: #ED8438;
                color: #ED8438;
                transform: translateY(-2px);
            }

            .nav-tab.active {
                background: linear-gradient(135deg, #ED8438 0%, #d97633 100%);
                color: white;
                border-color: #ED8438;
            }

            /* Content Sections */
            .content-section {
                display: none;
            }

            .content-section.active {
                display: block;
                animation: fadeIn 0.5s ease;
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

            /* Dashboard Stats */
            .stats-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                gap: 20px;
                margin-bottom: 30px;
            }

            .stat-card {
                background: white;
                border-radius: 16px;
                padding: 25px;
                box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
                transition: all 0.3s ease;
                border-left: 4px solid #ED8438;
            }

            .stat-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
            }

            .stat-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 15px;
            }

            .stat-icon {
                width: 50px;
                height: 50px;
                background: linear-gradient(135deg, #ED8438 0%, #d97633 100%);
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-size: 24px;
            }

            .stat-value {
                font-size: 28px;
                font-weight: 700;
                color: #ED8438;
                margin-bottom: 5px;
            }

            .stat-label {
                color: #6c757d;
                font-size: 14px;
                font-weight: 500;
            }

            .stat-trend {
                font-size: 12px;
                margin-top: 10px;
                padding: 4px 10px;
                background: #e8f5e9;
                color: #2e7d32;
                border-radius: 20px;
                display: inline-block;
            }

            .stat-trend.down {
                background: #ffebee;
                color: #c62828;
            }

            /* Cards */
            .card {
                background: white;
                border-radius: 16px;
                padding: 25px;
                box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
                margin-bottom: 20px;
            }

            .card-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 20px;
                padding-bottom: 15px;
                border-bottom: 2px solid #f1f3f5;
            }

            .card-title {
                font-size: 20px;
                font-weight: 700;
                color: #212529;
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .card-title i {
                color: #ED8438;
            }

            /* Table */
            .table-container {
                overflow-x: auto;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }

            thead {
                background: #f8f9fa;
            }

            th {
                padding: 15px;
                text-align: left;
                font-size: 13px;
                font-weight: 700;
                color: #495057;
                text-transform: uppercase;
                border-bottom: 2px solid #e9ecef;
            }

            td {
                padding: 15px;
                border-bottom: 1px solid #f1f3f5;
            }

            tbody tr {
                transition: all 0.3s ease;
            }

            tbody tr:hover {
                background: #f8f9fa;
            }

            /* Status Badge */
            .badge {
                padding: 6px 12px;
                border-radius: 20px;
                font-size: 11px;
                font-weight: 600;
                text-transform: uppercase;
                display: inline-block;
            }

            .badge.success {
                background: #d4edda;
                color: #155724;
            }

            .badge.warning {
                background: #fff3cd;
                color: #856404;
            }

            .badge.danger {
                background: #f8d7da;
                color: #721c24;
            }

            .badge.info {
                background: #d1ecf1;
                color: #0c5460;
            }

            /* Buttons */
            .btn {
                padding: 10px 20px;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                font-weight: 600;
                transition: all 0.3s ease;
                display: inline-flex;
                align-items: center;
                gap: 8px;
                font-size: 14px;
            }

            .btn-primary {
                background: linear-gradient(135deg, #ED8438 0%, #d97633 100%);
                color: white;
            }

            .btn-primary:hover {
                transform: translateY(-2px);
                box-shadow: 0 5px 15px rgba(237, 132, 56, 0.3);
            }

            .btn-secondary {
                background: #f8f9fa;
                color: #495057;
                border: 2px solid #e9ecef;
            }

            .btn-secondary:hover {
                background: #e9ecef;
            }

            .btn-sm {
                padding: 6px 12px;
                font-size: 12px;
            }

            /* Property Card */
            .property-card {
                background: white;
                border-radius: 16px;
                overflow: hidden;
                box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
                transition: all 0.3s ease;
            }

            .property-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
            }

            .property-image {
                width: 100%;
                height: 200px;
                background: linear-gradient(135deg, #ED8438 0%, #d97633 100%);
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-size: 48px;
            }

            .property-content {
                padding: 20px;
            }

            .property-title {
                font-size: 18px;
                font-weight: 700;
                margin-bottom: 10px;
                color: #212529;
            }

            .property-address {
                color: #6c757d;
                font-size: 14px;
                margin-bottom: 15px;
                display: flex;
                align-items: center;
                gap: 5px;
            }

            .property-price {
                font-size: 24px;
                font-weight: 700;
                color: #ED8438;
                margin-bottom: 15px;
            }

            .property-footer {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding-top: 15px;
                border-top: 1px solid #e9ecef;
            }

            /* Profile Section */
            .profile-section {
                display: grid;
                grid-template-columns: 300px 1fr;
                gap: 30px;
            }

            .profile-sidebar {
                background: white;
                border-radius: 16px;
                padding: 30px;
                box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
                text-align: center;
            }

            .profile-avatar {
                width: 120px;
                height: 120px;
                background: linear-gradient(135deg, #ED8438 0%, #d97633 100%);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-size: 48px;
                font-weight: 700;
                margin: 0 auto 20px;
                box-shadow: 0 5px 20px rgba(237, 132, 56, 0.3);
            }

            .profile-name {
                font-size: 22px;
                font-weight: 700;
                margin-bottom: 5px;
            }

            .profile-role {
                color: #6c757d;
                margin-bottom: 20px;
            }

            .profile-stats {
                display: flex;
                justify-content: space-around;
                margin-top: 20px;
                padding-top: 20px;
                border-top: 1px solid #e9ecef;
            }

            .profile-stat {
                text-align: center;
            }

            .profile-stat-value {
                font-size: 24px;
                font-weight: 700;
                color: #ED8438;
            }

            .profile-stat-label {
                font-size: 12px;
                color: #6c757d;
            }

            .profile-content {
                background: white;
                border-radius: 16px;
                padding: 30px;
                box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            }

            .form-group {
                margin-bottom: 20px;
            }

            .form-label {
                display: block;
                margin-bottom: 8px;
                font-weight: 600;
                color: #495057;
            }

            .form-control {
                width: 100%;
                padding: 12px 15px;
                border: 2px solid #e9ecef;
                border-radius: 8px;
                font-size: 14px;
                transition: all 0.3s ease;
            }

            .form-control:focus {
                outline: none;
                border-color: #ED8438;
            }

            .form-row {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 20px;
            }

            /* Empty State */
            .empty-state {
                text-align: center;
                padding: 60px 20px;
                color: #6c757d;
            }

            .empty-state i {
                font-size: 64px;
                margin-bottom: 20px;
                opacity: 0.3;
            }

            .empty-state h3 {
                font-size: 24px;
                margin-bottom: 10px;
            }

            /* Responsive */
            @media (max-width: 1024px) {
                .profile-section {
                    grid-template-columns: 1fr;
                }
            }

            @media (max-width: 768px) {
                .main-container {
                    padding: 20px 10px;
                }

                .page-header h1 {
                    font-size: 24px;
                }

                .stats-grid {
                    grid-template-columns: 1fr;
                }

                .nav-tabs {
                    overflow-x: auto;
                    flex-wrap: nowrap;
                }

                .nav-tab {
                    white-space: nowrap;
                }

                .table-container {
                    overflow-x: scroll;
                }

                table {
                    min-width: 600px;
                }
            }

            /* Activity Timeline */
            .timeline {
                position: relative;
                padding-left: 30px;
            }

            .timeline::before {
                content: '';
                position: absolute;
                left: 8px;
                top: 0;
                bottom: 0;
                width: 2px;
                background: #e9ecef;
            }

            .timeline-item {
                position: relative;
                padding-bottom: 30px;
            }

            .timeline-icon {
                position: absolute;
                left: -26px;
                width: 20px;
                height: 20px;
                background: #ED8438;
                border-radius: 50%;
                border: 3px solid white;
                box-shadow: 0 0 0 2px #e9ecef;
            }

            .timeline-content {
                background: #f8f9fa;
                padding: 15px;
                border-radius: 8px;
            }

            .timeline-date {
                font-size: 12px;
                color: #6c757d;
                margin-bottom: 5px;
            }

            .timeline-title {
                font-weight: 600;
                margin-bottom: 5px;
            }

            /* Grid Layouts */
            .grid-2 {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 20px;
            }

            .grid-3 {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 20px;
            }
        </style>
    </head>

    <body>
        <div class="main-container" style="margin-top: 100px; !important">
            <!-- Page Header -->

            <!-- Navigation Tabs -->
            <div class="nav-tabs">
                <button class="nav-tab active" onclick="showSection('dashboard')">
                    <i class="fas fa-home"></i> Tableau de bord
                </button>
                <button class="nav-tab" onclick="showSection('visits')">
                    <i class="fas fa-calendar-check"></i> Mes Visites
                </button>
                <button class="nav-tab" onclick="showSection('rents')">
                    <i class="fas fa-file-invoice-dollar"></i> Mes Loyers
                </button>
                <button class="nav-tab" onclick="showSection('finances')">
                    <i class="fas fa-wallet"></i> Finances
                </button>
            </div>

            <!-- Dashboard Section -->
            <div id="dashboard" class="content-section active">
                <!-- Statistics -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-header">
                            <div>
                                <div class="stat-value">{{ $propertiesCount }}</div>
                                <div class="stat-label">Propriétés Louées</div>
                            </div>
                            <div class="stat-icon">
                                <i class="fas fa-building"></i>
                            </div>
                        </div>
                        <div class="stat-trend">
                            <i class="fas fa-arrow-up"></i> Actives
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-header">
                            <div>
                                <div class="stat-value">{{ $visitsCount }}</div>
                                <div class="stat-label">Visites Planifiées</div>
                            </div>
                            <div class="stat-icon">
                                <i class="fas fa-calendar"></i>
                            </div>
                        </div>
                        <div class="stat-trend">
                            <i class="fas fa-clock"></i> Ce mois
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-header">
                            <div>
                                <div class="stat-value">{{ $propertiesPrice }} FCFA</div>
                                <div class="stat-label">Loyer Mensuel</div>
                            </div>
                            <div class="stat-icon">
                                <i class="fas fa-money-bill-wave"></i>
                            </div>
                        </div>
                        <div class="stat-trend">
                            <i class="fas fa-check-circle"></i> Payé
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-header">
                            <div>
                                <div class="stat-value">45 000 FCFA</div>
                                <div class="stat-label">Solde Portefeuille</div>
                            </div>
                            <div class="stat-icon">
                                <i class="fas fa-wallet"></i>
                            </div>
                        </div>
                        <div class="stat-trend down">
                            <i class="fas fa-arrow-down"></i> -15%
                        </div>
                    </div>
                </div>

                <!-- Main Content Grid -->
                <div class="grid-2">
                    <!-- Current Properties -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-home"></i>
                                Mes Propriétés Actuelles
                            </h3>
                            @if (Auth::user()->rule == 'bailleur')
                                <a href="{{ route('property.create') }}">
                            @endif
                            <button class="btn btn-secondary btn-sm">
                                <i class="fas fa-plus"></i> Ajouter
                            </button>
                        </div>
                        @forelse ($properties as $property)
                            <div class="property-card">
                                <div class="property-image">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="property-content">
                                    <h4 class="property-title">{{ $property->title }}</h4>
                                    <p class="property-address">
                                        <i class="fas fa-map-marker-alt"></i>
                                        {{ $property->address }}, {{ $property->city }}
                                    </p>
                                    <div class="property-price">{{ $property->price }} FCFA/mois</div>
                                    <div class="property-footer">
                                        <span class="badge success">Actif</span>
                                        <!--  Voir details de la propriete -->
                                        <a href="{{ route('property.show', $property->id) }}"
                                            class="btn btn-primary btn-sm">Voir détails</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="empty-state">
                                <i class="fas fa-home"></i>
                                <h3>Aucune propriété trouvée</h3>
                                <p>Vous n'avez pas encore ajouté de propriétés. Cliquez sur "Ajouter" pour commencer.</p>
                            </div>
                        @endforelse
                    </div>

                    <!-- Recent Activity -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-history"></i>
                                Activités Récentes
                            </h3>
                        </div>
                        <div class="timeline">
                            <div class="timeline-item">
                                <div class="timeline-icon"></div>
                                <div class="timeline-content">
                                    <div class="timeline-date">Il y a 2 heures</div>
                                    <div class="timeline-title">Paiement effectué</div>
                                    <p style="margin: 0; font-size: 13px; color: #6c757d;">Loyer de décembre - 85 000 FCFA
                                    </p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-icon"></div>
                                <div class="timeline-content">
                                    <div class="timeline-date">Hier à 14:30</div>
                                    <div class="timeline-title">Visite confirmée</div>
                                    <p style="margin: 0; font-size: 13px; color: #6c757d;">Studio moderne - Akwa</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-icon"></div>
                                <div class="timeline-content">
                                    <div class="timeline-date">3 décembre 2025</div>
                                    <div class="timeline-title">Demande de visite envoyée</div>
                                    <p style="margin: 0; font-size: 13px; color: #6c757d;">Villa 5 chambres - Bonanjo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Payments -->
                <div class="card" style="margin-top: 20px;">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-calendar-alt"></i>
                            Paiements à Venir
                        </h3>
                    </div>
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Propriété</th>
                                    <th>Montant</th>
                                    <th>Date d'échéance</th>
                                    <th>Statut</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <strong>Appartement 3 pièces</strong><br>
                                        <small style="color: #6c757d;">Bonapriso, Douala</small>
                                    </td>
                                    <td><strong>85 000 FCFA</strong></td>
                                    <td>05 Janvier 2026</td>
                                    <td><span class="badge warning">À payer</span></td>
                                    <td><button class="btn btn-primary btn-sm">Payer</button></td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Studio moderne</strong><br>
                                        <small style="color: #6c757d;">Akwa, Douala</small>
                                    </td>
                                    <td><strong>70 000 FCFA</strong></td>
                                    <td>05 Janvier 2026</td>
                                    <td><span class="badge warning">À payer</span></td>
                                    <td><button class="btn btn-primary btn-sm">Payer</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Visits Section -->
            <div id="visits" class="content-section">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-calendar-check"></i>
                            Mes Visites Planifiées
                        </h3>
                        <button class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nouvelle visite
                        </button>
                    </div>
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Propriété</th>
                                    <th>Adresse</th>
                                    <th>Date</th>
                                    <th>Heure</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Villa 5 chambres</strong></td>
                                    <td>Bonanjo, Douala</td>
                                    <td>15 Décembre 2025</td>
                                    <td>10:00 AM</td>
                                    <td><span class="badge info">Confirmée</span></td>
                                    <td>
                                        <button class="btn btn-secondary btn-sm">Modifier</button>
                                        <button class="btn btn-primary btn-sm">Détails</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Duplex standing</strong></td>
                                    <td>Bali, Douala</td>
                                    <td>18 Décembre 2025</td>
                                    <td>14:30 PM</td>
                                    <td><span class="badge warning">En attente</span></td>
                                    <td>
                                        <button class="btn btn-secondary btn-sm">Modifier</button>
                                        <button class="btn btn-primary btn-sm">Détails</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Appartement 2 pièces</strong></td>
                                    <td>Logbaba, Douala</td>
                                    <td>20 Décembre 2025</td>
                                    <td>11:00 AM</td>
                                    <td><span class="badge success">Confirmée</span></td>
                                    <td>
                                        <button class="btn btn-secondary btn-sm">Modifier</button>
                                        <button class="btn btn-primary btn-sm">Détails</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Past Visits -->
                <div class="card" style="margin-top: 20px;">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-history"></i>
                            Historique des Visites
                        </h3>
                    </div>
                    <div class="grid-3">
                        <div class="property-card">
                            <div class="property-image">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="property-content">
                                <h4 class="property-title">Studio moderne</h4>
                                <p class="property-address">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Akwa, Douala
                                </p>
                                <div style="margin: 15px 0;">
                                    <small style="color: #6c757d;">Date: 01 Décembre 2025</small>
                                </div>
                                <div class="property-footer">
                                    <span class="badge success">Effectuée</span>
                                    <button class="btn btn-secondary btn-sm">Voir détails</button>
                                </div>
                            </div>
                        </div>
                        <div class="property-card">
                            <div class="property-image">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="property-content">
                                <h4 class="property-title">Appartement 3 pièces</h4>
                                <p class="property-address">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Bonapriso, Douala
                                </p>
                                <div style="margin: 15px 0;">
                                    <small style="color: #6c757d;">Date: 28 Novembre 2025</small>
                                </div>
                                <div class="property-footer">
                                    <span class="badge success">Effectuée</span>
                                    <button class="btn btn-secondary btn-sm">Voir détails</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Payment History -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-history"></i>
                        Historique des Paiements
                    </h3>
                    <button class="btn btn-secondary">
                        <i class="fas fa-download"></i> Exporter
                    </button>
                </div>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Référence</th>
                                <th>Propriété</th>
                                <th>Montant</th>
                                <th>Date</th>
                                <th>Statut</th>
                                <th>Reçu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>#PAY-2025-045</strong></td>
                                <td>
                                    <strong>Appartement 3 pièces</strong><br>
                                    <small style="color: #6c757d;">Bonapriso, Douala</small>
                                </td>
                                <td><strong>85 000 FCFA</strong></td>
                                <td>05 Décembre 2025</td>
                                <td><span class="badge success">Payé</span></td>
                                <td>
                                    <button class="btn btn-secondary btn-sm">
                                        <i class="fas fa-download"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#PAY-2025-044</strong></td>
                                <td>
                                    <strong>Studio moderne</strong><br>
                                    <small style="color: #6c757d;">Akwa, Douala</small>
                                </td>
                                <td><strong>70 000 FCFA</strong></td>
                                <td>03 Décembre 2025</td>
                                <td><span class="badge success">Payé</span></td>
                                <td>
                                    <button class="btn btn-secondary btn-sm">
                                        <i class="fas fa-download"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#PAY-2025-043</strong></td>
                                <td>
                                    <strong>Appartement 3 pièces</strong><br>
                                    <small style="color: #6c757d;">Bonapriso, Douala</small>
                                </td>
                                <td><strong>85 000 FCFA</strong></td>
                                <td>05 Novembre 2025</td>
                                <td><span class="badge success">Payé</span></td>
                                <td>
                                    <button class="btn btn-secondary btn-sm">
                                        <i class="fas fa-download"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#PAY-2025-042</strong></td>
                                <td>
                                    <strong>Studio moderne</strong><br>
                                    <small style="color: #6c757d;">Akwa, Douala</small>
                                </td>
                                <td><strong>70 000 FCFA</strong></td>
                                <td>01 Novembre 2025</td>
                                <td><span class="badge success">Payé</span></td>
                                <td>
                                    <button class="btn btn-secondary btn-sm">
                                        <i class="fas fa-download"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Finances Section -->
            <div id="finances" class="content-section">
                <!-- Wallet Summary -->
                <div class="grid-2">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-wallet"></i>
                                Mon Portefeuille
                            </h3>
                        </div>
                        <div style="text-align: center; padding: 40px 20px;">
                            <div style="font-size: 48px; font-weight: 700; color: #ED8438; margin-bottom: 10px;">
                                45 000 FCFA
                            </div>
                            <p style="color: #6c757d; margin-bottom: 30px;">Solde disponible</p>
                            <div style="display: flex; gap: 10px; justify-content: center;">
                                <button class="btn btn-primary">
                                    <i class="fas fa-plus"></i> Recharger
                                </button>
                                <button class="btn btn-secondary">
                                    <i class="fas fa-arrow-right"></i> Transférer
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-bolt"></i>
                                Actions Rapides
                            </h3>
                        </div>
                        <div style="display: grid; gap: 15px; padding: 10px 0;">
                            <button class="btn btn-secondary" style="justify-content: flex-start; width: 100%;">
                                <i class="fas fa-money-bill-wave"></i>
                                Payer un loyer
                            </button>
                            <button class="btn btn-secondary" style="justify-content: flex-start; width: 100%;">
                                <i class="fas fa-receipt"></i>
                                Voir mes reçus
                            </button>
                            <button class="btn btn-secondary" style="justify-content: flex-start; width: 100%;">
                                <i class="fas fa-credit-card"></i>
                                Gérer mes cartes
                            </button>
                            <button class="btn btn-secondary" style="justify-content: flex-start; width: 100%;">
                                <i class="fas fa-file-invoice"></i>
                                Télécharger relevé
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Transaction History -->
                <div class="card" style="margin-top: 20px;">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-exchange-alt"></i>
                            Historique des Transactions
                        </h3>
                        <div style="display: flex; gap: 10px;">
                            <select class="form-control" style="width: auto;">
                                <option>Tous les types</option>
                                <option>Paiements</option>
                                <option>Recharges</option>
                                <option>Transferts</option>
                            </select>
                            <button class="btn btn-secondary">
                                <i class="fas fa-filter"></i>
                            </button>
                        </div>
                    </div>
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>Type</th>
                                    <th>Montant</th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10 Déc 2025</td>
                                    <td>
                                        <strong>Paiement loyer</strong><br>
                                        <small style="color: #6c757d;">Appartement 3 pièces</small>
                                    </td>
                                    <td><span class="badge danger">Débit</span></td>
                                    <td><strong style="color: #c62828;">- 85 000 FCFA</strong></td>
                                    <td><span class="badge success">Complété</span></td>
                                </tr>
                                <tr>
                                    <td>08 Déc 2025</td>
                                    <td>
                                        <strong>Recharge portefeuille</strong><br>
                                        <small style="color: #6c757d;">Mobile Money</small>
                                    </td>
                                    <td><span class="badge success">Crédit</span></td>
                                    <td><strong style="color: #2e7d32;">+ 100 000 FCFA</strong></td>
                                    <td><span class="badge success">Complété</span></td>
                                </tr>
                                <tr>
                                    <td>05 Déc 2025</td>
                                    <td>
                                        <strong>Paiement loyer</strong><br>
                                        <small style="color: #6c757d;">Studio moderne</small>
                                    </td>
                                    <td><span class="badge danger">Débit</span></td>
                                    <td><strong style="color: #c62828;">- 70 000 FCFA</strong></td>
                                    <td><span class="badge success">Complété</span></td>
                                </tr>
                                <tr>
                                    <td>01 Déc 2025</td>
                                    <td>
                                        <strong>Recharge portefeuille</strong><br>
                                        <small style="color: #6c757d;">Carte bancaire</small>
                                    </td>
                                    <td><span class="badge success">Crédit</span></td>
                                    <td><strong style="color: #2e7d32;">+ 150 000 FCFA</strong></td>
                                    <td><span class="badge success">Complété</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Profile Section -->
            <div id="profile" class="content-section">
                <div class="profile-section">
                    <!-- Profile Sidebar -->
                    <div class="profile-sidebar">
                        <div class="profile-avatar">JD</div>
                        <h3 class="profile-name">Jean Dupont</h3>
                        <p class="profile-role">Locataire</p>
                        <button class="btn btn-secondary" style="width: 100%; margin-top: 15px;">
                            <i class="fas fa-camera"></i> Changer photo
                        </button>
                        <div class="profile-stats">
                            <div class="profile-stat">
                                <div class="profile-stat-value">2</div>
                                <div class="profile-stat-label">Propriétés</div>
                            </div>
                            <div class="profile-stat">
                                <div class="profile-stat-value">12</div>
                                <div class="profile-stat-label">Paiements</div>
                            </div>
                        </div>
                    </div>

                    <!-- Profile Content -->
                    <div class="profile-content">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-user-edit"></i>
                                Informations Personnelles
                            </h3>
                            <button class="btn btn-primary">
                                <i class="fas fa-save"></i> Enregistrer
                            </button>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Prénom</label>
                                <input type="text" class="form-control" value="Jean">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Nom</label>
                                <input type="text" class="form-control" value="Dupont">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" value="jean.dupont@email.com">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Téléphone</label>
                                <input type="tel" class="form-control" value="+237 690 123 456">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Adresse</label>
                            <input type="text" class="form-control" value="Bonapriso, Douala">
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Date de naissance</label>
                                <input type="date" class="form-control" value="1990-05-15">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Nationalité</label>
                                <input type="text" class="form-control" value="Camerounaise">
                            </div>
                        </div>

                        <hr style="margin: 30px 0; border: none; border-top: 1px solid #e9ecef;">

                        <h4 style="margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-lock" style="color: #ED8438;"></i>
                            Sécurité
                        </h4>

                        <div class="form-group">
                            <label class="form-label">Mot de passe actuel</label>
                            <input type="password" class="form-control" placeholder="••••••••">
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Nouveau mot de passe</label>
                                <input type="password" class="form-control" placeholder="••••••••">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Confirmer mot de passe</label>
                                <input type="password" class="form-control" placeholder="••••••••">
                            </div>
                        </div>

                        <hr style="margin: 30px 0; border: none; border-top: 1px solid #e9ecef;">

                        <h4 style="margin-bottom: 20px; display: flex; align-items: center; gap: 10px;">
                            <i class="fas fa-bell" style="color: #ED8438;"></i>
                            Notifications
                        </h4>

                        <div style="display: flex; flex-direction: column; gap: 15px;">
                            <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                                <input type="checkbox" checked style="width: 20px; height: 20px;">
                                <span>Recevoir des notifications par email</span>
                            </label>
                            <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                                <input type="checkbox" checked style="width: 20px; height: 20px;">
                                <span>Rappels de paiement</span>
                            </label>
                            <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                                <input type="checkbox" style="width: 20px; height: 20px;">
                                <span>Nouvelles propriétés disponibles</span>
                            </label>
                            <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                                <input type="checkbox" checked style="width: 20px; height: 20px;">
                                <span>Notifications SMS</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

    <script>
        function showSection(sectionId) {
            // Hide all sections
            document.querySelectorAll('.content-section').forEach(section => {
                section.classList.remove('active');
            });

            // Remove active class from all tabs
            document.querySelectorAll('.nav-tab').forEach(tab => {
                tab.classList.remove('active');
            });

            // Show selected section
            document.getElementById(sectionId).classList.add('active');

            // Add active class to clicked tab
            event.target.closest('.nav-tab').classList.add('active');
        }

        // Initialize tooltips or other interactions
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Dashboard Locataire initialized');

            // Add click handlers for buttons
            document.querySelectorAll('.btn').forEach(button => {
                button.addEventListener('click', function(e) {
                    if (!this.getAttribute('onclick')) {
                        console.log('Button clicked:', this.textContent.trim());
                    }
                });
            });

            // Smooth scroll behavior
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>

@endsection
