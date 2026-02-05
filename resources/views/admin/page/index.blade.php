@extends('template.house2_new')

@section('title', 'Dashboard Admin ')

@section('style')
<style>
    .admin-dashboard-container {
        margin-left: 280px;
        padding: 30px 30px 30px;
        min-height: 100vh;
        background: #f5f7fa;
    }

    /* Welcome Section */
    .welcome-section {
        background: linear-gradient(135deg, #ED8438 0%, #d97633 100%);
        border-radius: 20px;
        padding: 40px;
        color: white;
        margin-bottom: 30px;
        box-shadow: 0 10px 30px rgba(237, 132, 56, 0.3);
        position: relative;
        overflow: hidden;
    }

    .welcome-section::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        border-radius: 50%;
    }

    .welcome-content {
        position: relative;
        z-index: 1;
    }

    .welcome-title {
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .welcome-subtitle {
        font-size: 16px;
        opacity: 0.9;
    }

    .welcome-date {
        margin-top: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 14px;
    }

    /* Stats Grid */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
        margin-bottom: 30px;
    }

    .stat-card {
        background: white;
        border-radius: 16px;
        padding: 25px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        border-left: 4px solid #ED8438;
        position: relative;
        overflow: hidden;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
    }

    .stat-card::after {
        content: '';
        position: absolute;
        top: -50%;
        right: -30%;
        width: 200px;
        height: 200px;
        background: radial-gradient(circle, rgba(237, 132, 56, 0.05) 0%, transparent 70%);
        border-radius: 50%;
    }

    .stat-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 20px;
    }

    .stat-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #ED8438 0%, #d97633 100%);
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 28px;
        box-shadow: 0 5px 15px rgba(237, 132, 56, 0.3);
    }

    .stat-content {
        position: relative;
        z-index: 1;
    }

    .stat-value {
        font-size: 32px;
        font-weight: 700;
        color: #212529;
        margin-bottom: 5px;
    }

    .stat-label {
        color: #6c757d;
        font-size: 14px;
        font-weight: 500;
        margin-bottom: 12px;
    }

    .stat-trend {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        font-size: 13px;
        padding: 5px 12px;
        border-radius: 20px;
        font-weight: 600;
    }

    .stat-trend.up {
        background: #e8f5e9;
        color: #2e7d32;
    }

    .stat-trend.down {
        background: #ffebee;
        color: #c62828;
    }

    /* Chart Cards */
    .chart-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 25px;
        margin-bottom: 30px;
    }

    .chart-card {
        background: white;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    }

    .chart-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        padding-bottom: 20px;
        border-bottom: 2px solid #f1f3f5;
    }

    .chart-title {
        font-size: 20px;
        font-weight: 700;
        color: #212529;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .chart-title i {
        color: #ED8438;
    }

    .chart-filter {
        display: flex;
        gap: 8px;
    }

    .filter-btn {
        padding: 8px 16px;
        border: 2px solid #e9ecef;
        background: white;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 600;
        color: #6c757d;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .filter-btn:hover,
    .filter-btn.active {
        background: #ED8438;
        color: white;
        border-color: #ED8438;
    }

    .chart-placeholder {
        height: 300px;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #6c757d;
        font-size: 14px;
    }

    /* Recent Activity */
    .activity-list {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .activity-item {
        display: flex;
        gap: 15px;
        padding: 15px;
        background: #f8f9fa;
        border-radius: 12px;
        transition: all 0.3s ease;
    }

    .activity-item:hover {
        background: #e9ecef;
        transform: translateX(5px);
    }

    .activity-icon {
        width: 45px;
        height: 45px;
        background: linear-gradient(135deg, #ED8438 0%, #d97633 100%);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 18px;
        flex-shrink: 0;
    }

    .activity-content {
        flex: 1;
    }

    .activity-title {
        font-weight: 600;
        color: #212529;
        margin-bottom: 3px;
    }

    .activity-text {
        font-size: 13px;
        color: #6c757d;
        margin-bottom: 5px;
    }

    .activity-time {
        font-size: 12px;
        color: #adb5bd;
    }

    /* Table Section */
    .table-section {
        background: white;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        margin-bottom: 30px;
    }

    .table-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        padding-bottom: 20px;
        border-bottom: 2px solid #f1f3f5;
    }

    .table-title {
        font-size: 20px;
        font-weight: 700;
        color: #212529;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .table-title i {
        color: #ED8438;
    }

    .table-actions {
        display: flex;
        gap: 10px;
    }

    .btn {
        padding: 10px 20px;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
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

    /* Table */
    .table-responsive {
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
        font-size: 14px;
    }

    tbody tr {
        transition: all 0.3s ease;
    }

    tbody tr:hover {
        background: #f8f9fa;
    }

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

    /* Action Buttons */
    .action-btns {
        display: flex;
        gap: 8px;
    }

    .action-btn {
        width: 32px;
        height: 32px;
        border-radius: 6px;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        font-size: 13px;
    }

    .action-btn.view {
        background: #e7f3ff;
        color: #0066cc;
    }

    .action-btn.view:hover {
        background: #0066cc;
        color: white;
    }

    .action-btn.edit {
        background: #fff3e0;
        color: #ff8f00;
    }

    .action-btn.edit:hover {
        background: #ff8f00;
        color: white;
    }

    .action-btn.delete {
        background: #ffebee;
        color: #c62828;
    }

    .action-btn.delete:hover {
        background: #c62828;
        color: white;
    }

    /* Quick Actions */
    .quick-actions {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
    }

    .quick-action-card {
        background: white;
        border-radius: 12px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        cursor: pointer;
        border: 2px solid transparent;
    }

    .quick-action-card:hover {
        transform: translateY(-5px);
        border-color: #ED8438;
        box-shadow: 0 5px 20px rgba(237, 132, 56, 0.2);
    }

    .quick-action-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #ED8438 0%, #d97633 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 24px;
        margin: 0 auto 15px;
    }

    .quick-action-title {
        font-weight: 600;
        color: #212529;
        margin-bottom: 5px;
    }

    .quick-action-desc {
        font-size: 12px;
        color: #6c757d;
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .admin-dashboard-container {
            margin-left: 250px;
        }

        .chart-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .admin-dashboard-container {
            margin-left: 0;
            padding: 90px 15px 15px;
        }

        .welcome-section {
            padding: 25px;
        }

        .welcome-title {
            font-size: 24px;
        }

        .stats-grid {
            grid-template-columns: 1fr;
        }

        .chart-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }

        .table-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }

        .table-responsive {
            overflow-x: scroll;
        }

        table {
            min-width: 800px;
        }
    }
</style>
@endsection

@section('content')
<div class="admin-dashboard-container">
    <!-- Welcome Section -->
    <div class="welcome-section">
        <div class="welcome-content">
            <h1 class="welcome-title">👋 Bienvenue, {{ Auth::user()->first_name }} !</h1>
            <p class="welcome-subtitle">Voici un aperçu de votre activité immobilière aujourd'hui</p>
            <div class="welcome-date">
                <i class="fas fa-calendar-alt"></i>
                <span>{{ date('l, d F Y') }}</span>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-content">
                    <div class="stat-value">{{ $totalproperty ?? 0 }}</div>
                    <div class="stat-label">Total Propriétés</div>
                    <span class="stat-trend up">
                        <i class="fas fa-arrow-up"></i> +12% ce mois
                    </span>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-building"></i>
                </div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-content">
                    <div class="stat-value">{{ $totallocationactive ?? 18 }}</div>
                    <div class="stat-label">Locations Actives</div>
                    <span class="stat-trend up">
                        <i class="fas fa-arrow-up"></i> +8% ce mois
                    </span>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-home"></i>
                </div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-content">
                    <div class="stat-value">{{ $totalvisites ?? 15 }}</div>
                    <div class="stat-label">Visites Planifiées</div>
                    <span class="stat-trend up">
                        <i class="fas fa-arrow-up"></i> +5 cette semaine
                    </span>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-calendar-check"></i>
                </div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-content">
                    <div class="stat-value">3 450 000 FCFA</div>
                    <div class="stat-label">Revenus Mensuels</div>
                    <span class="stat-trend up">
                        <i class="fas fa-arrow-up"></i> +18% ce mois
                    </span>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-content">
                    <div class="stat-value">{{ $totallocataires ?? 32 }}</div>
                    <div class="stat-label">Total Locataires</div>
                    <span class="stat-trend up">
                        <i class="fas fa-arrow-up"></i> +4 ce mois
                    </span>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <div class="stat-content">
                    <div class="stat-value">{{ $pendingPayments ?? 8 }}</div>
                    <div class="stat-label">Paiements en Attente</div>
                    <span class="stat-trend down">
                        <i class="fas fa-arrow-down"></i> -3 vs mois dernier
                    </span>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-clock"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="chart-grid">
        <!-- Revenue Chart -->
        <div class="chart-card">
            <div class="chart-header">
                <h3 class="chart-title">
                    <i class="fas fa-chart-line"></i>
                    Évolution des Revenus
                </h3>
                <div class="chart-filter">
                    <button class="filter-btn active">7 Jours</button>
                    <button class="filter-btn">30 Jours</button>
                    <button class="filter-btn">12 Mois</button>
                </div>
            </div>
            <div class="chart-placeholder">
                <canvas id="revenueChart"></canvas>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="chart-card">
            <div class="chart-header">
                <h3 class="chart-title">
                    <i class="fas fa-history"></i>
                    Activités Récentes
                </h3>
            </div>
            <div class="activity-list">
                <div class="activity-item">
                    <div class="activity-icon">
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="activity-content">
                        <div class="activity-title">Nouvelle propriété ajoutée</div>
                        <div class="activity-text">Villa 5 chambres - Bonanjo</div>
                        <div class="activity-time">Il y a 2 heures</div>
                    </div>
                </div>

                <div class="activity-item">
                    <div class="activity-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="activity-content">
                        <div class="activity-title">Paiement reçu</div>
                        <div class="activity-text">Jean Dupont - 85 000 FCFA</div>
                        <div class="activity-time">Il y a 3 heures</div>
                    </div>
                </div>

                <div class="activity-item">
                    <div class="activity-icon">
                        <i class="fas fa-calendar"></i>
                    </div>
                    <div class="activity-content">
                        <div class="activity-title">Visite planifiée</div>
                        <div class="activity-text">Studio Akwa - 15 Déc 10:00</div>
                        <div class="activity-time">Il y a 5 heures</div>
                    </div>
                </div>

                <div class="activity-item">
                    <div class="activity-icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <div class="activity-content">
                        <div class="activity-title">Nouveau locataire</div>
                        <div class="activity-text">Marie Martin - Appartement 3P</div>
                        <div class="activity-time">Hier à 14:30</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="table-section">
        <div class="table-header">
            <h3 class="table-title">
                <i class="fas fa-bolt"></i>
                Actions Rapides
            </h3>
        </div>
        <div class="quick-actions">
            <div class="quick-action-card" onclick="window.location.href='{{ route('property.create') }}'">
                <div class="quick-action-icon">
                    <i class="fas fa-plus"></i>
                </div>
                <div class="quick-action-title">Ajouter Propriété</div>
                <div class="quick-action-desc">Enregistrer une nouvelle propriété</div>
            </div>

            <div class="quick-action-card" onclick="window.location.href='{{ route('visits.index') }}'">
                <div class="quick-action-icon">
                    <i class="fas fa-calendar-plus"></i>
                </div>
                <div class="quick-action-title">Planifier Visite</div>
                <div class="quick-action-desc">Organiser une visite client</div>
            </div>

            <div class="quick-action-card" onclick="window.location.href='{{ route('admin.payments') }}'">
                <div class="quick-action-icon">
                    <i class="fas fa-file-invoice-dollar"></i>
                </div>
                <div class="quick-action-title">Gérer Paiements</div>
                <div class="quick-action-desc">Voir les transactions</div>
            </div>

            <div class="quick-action-card" onclick="window.location.href='{{ route('contact.index') }}'">
                <div class="quick-action-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="quick-action-title">Messages</div>
                <div class="quick-action-desc">Consulter les demandes</div>
            </div>
        </div>
    </div>

    <!-- Latest Properties -->
    <div class="table-section">
        <div class="table-header">
            <h3 class="table-title">
                <i class="fas fa-building"></i>
                Dernières Propriétés Ajoutées
            </h3>
            <div class="table-actions">
                <button class="btn btn-secondary">
                    <i class="fas fa-filter"></i> Filtrer
                </button>
                <button class="btn btn-primary" onclick="window.location.href='{{ route('property.index') }}'">
                    <i class="fas fa-eye"></i> Voir Tout
                </button>
            </div>
        </div>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Propriété</th>
                        <th>Type</th>
                        <th>Localisation</th>
                        <th>Prix</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Villa 5 chambres</strong></td>
                        <td>Maison</td>
                        <td>Bonanjo, Douala</td>
                        <td><strong>150 000 FCFA/mois</strong></td>
                        <td><span class="badge success">Disponible</span></td>
                        <td>
                            <div class="action-btns">
                                <button class="action-btn view"><i class="fas fa-eye"></i></button>
                                <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Appartement 3 pièces</strong></td>
                        <td>Appartement</td>
                        <td>Bonapriso, Douala</td>
                        <td><strong>85 000 FCFA/mois</strong></td>
                        <td><span class="badge warning">Louée</span></td>
                        <td>
                            <div class="action-btns">
                                <button class="action-btn view"><i class="fas fa-eye"></i></button>
                                <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Studio moderne</strong></td>
                        <td>Studio</td>
                        <td>Akwa, Douala</td>
                        <td><strong>65 000 FCFA/mois</strong></td>
                        <td><span class="badge success">Disponible</span></td>
                        <td>
                            <div class="action-btns">
                                <button class="action-btn view"><i class="fas fa-eye"></i></button>
                                <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Duplex standing</strong></td>
                        <td>Duplex</td>
                        <td>Bali, Douala</td>
                        <td><strong>120 000 FCFA/mois</strong></td>
                        <td><span class="badge info">En visite</span></td>
                        <td>
                            <div class="action-btns">
                                <button class="action-btn view"><i class="fas fa-eye"></i></button>
                                <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Appartement 2 pièces</strong></td>
                        <td>Appartement</td>
                        <td>Logbaba, Douala</td>
                        <td><strong>70 000 FCFA/mois</strong></td>
                        <td><span class="badge warning">Louée</span></td>
                        <td>
                            <div class="action-btns">
                                <button class="action-btn view"><i class="fas fa-eye"></i></button>
                                <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Upcoming Visits -->
    <div class="table-section">
        <div class="table-header">
            <h3 class="table-title">
                <i class="fas fa-calendar-check"></i>
                Visites à Venir
            </h3>
            <button class="btn btn-primary" onclick="window.location.href='{{ route('visits.index') }}'">
                <i class="fas fa-eye"></i> Voir Tout
            </button>
        </div>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Client</th>
                        <th>Propriété</th>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Paul Bernard</strong></td>
                        <td>Villa 5 chambres</td>
                        <td>20 Déc 2024</td>
                        <td>10:00 AM</td>
                        <td><span class="badge info">Planifiée</span></td>
                        <td>
                            <div class="action-btns">
                                <button class="action-btn view"><i class="fas fa-eye"></i></button>
                                <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr></tr>
                        <td><strong>Sophie Durant</strong></td>
                        <td>Appartement 2 pièces</td>
                        <td>22 Déc 2024</td>
                        <td>14:00 PM</td>
                        <td><span class="badge info">Planifiée</span></td>
                        <td>
                            <div class="action-btns">
                                <button class="action-btn view"><i class="fas fa-eye"></i></button>
                                <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr></tr>
                        <td><strong>Marc Lefevre</strong></td>
                        <td>Villa 5 chambres</td>
                        <td>25 Déc 2024</td>
                        <td>16:00 PM</td>
                        <td><span class="badge info">Planifiée</span></td>
                        <td>
                            <div class="action-btns">
                                <button class="action-btn view"><i class="fas fa-eye"></i></button>
                                <button class="action-btn edit"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
