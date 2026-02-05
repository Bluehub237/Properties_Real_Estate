@extends('template.house2_new')

@section('title', 'Dashboard Agent Immobilier')

@section('style')
<style>
    /* Dashboard Main Content Styles */
    .dashboard-content {
        padding: 30px;
        background: #f8f9fa;
        min-height: calc(100vh - 100px);
    }

    /* Welcome Banner */
    .welcome-banner {
        background: linear-gradient(135deg, #ED8438 0%, #d97633 100%);
        border-radius: 16px;
        padding: 35px 40px;
        color: white;
        margin-bottom: 30px;
        box-shadow: 0 8px 25px rgba(237, 132, 56, 0.25);
        position: relative;
        overflow: hidden;
    }

    .welcome-banner::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 400px;
        height: 400px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
    }

    .welcome-banner h2 {
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 8px;
        position: relative;
        z-index: 1;
    }

    .welcome-banner p {
        font-size: 16px;
        opacity: 0.95;
        margin: 0;
        position: relative;
        z-index: 1;
    }

    /* Stats Cards Grid */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
        margin-bottom: 30px;
    }

    .stat-card {
        background: white;
        border-radius: 16px;
        padding: 25px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        border: 2px solid transparent;
        position: relative;
        overflow: hidden;
    }

    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #ED8438, #d97633);
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(237, 132, 56, 0.2);
        border-color: #ED8438;
    }

    .stat-card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    .stat-card-icon {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        background: linear-gradient(135deg, #ED8438 0%, #d97633 100%);
        color: white;
        box-shadow: 0 4px 12px rgba(237, 132, 56, 0.3);
    }

    .stat-card-value {
        font-size: 32px;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 5px;
    }

    .stat-card-label {
        font-size: 14px;
        color: #7f8c8d;
        font-weight: 500;
    }

    .stat-card-trend {
        display: flex;
        align-items: center;
        gap: 5px;
        font-size: 13px;
        margin-top: 10px;
        padding-top: 10px;
        border-top: 1px solid #f0f0f0;
    }

    .stat-card-trend.positive {
        color: #27ae60;
    }

    .stat-card-trend.negative {
        color: #e74c3c;
    }

    .stat-card-trend i {
        font-size: 12px;
    }

    /* Dashboard Grid Layout */
    .dashboard-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 25px;
        margin-bottom: 30px;
    }

    @media (max-width: 992px) {
        .dashboard-grid {
            grid-template-columns: 1fr;
        }
    }

    /* Recent Activity Card */
    .activity-card {
        background: white;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }

    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 2px solid #f0f0f0;
    }

    .card-title {
        font-size: 20px;
        font-weight: 700;
        color: #2c3e50;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .card-title i {
        color: #ED8438;
        font-size: 22px;
    }

    .view-all-link {
        color: #ED8438;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .view-all-link:hover {
        color: #d97633;
        text-decoration: underline;
    }

    /* Activity Timeline */
    .activity-timeline {
        position: relative;
    }

    .activity-item {
        display: flex;
        gap: 15px;
        margin-bottom: 20px;
        position: relative;
        padding-left: 35px;
    }

    .activity-item::before {
        content: '';
        position: absolute;
        left: 11px;
        top: 30px;
        bottom: -20px;
        width: 2px;
        background: #f0f0f0;
    }

    .activity-item:last-child::before {
        display: none;
    }

    .activity-icon {
        position: absolute;
        left: 0;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: white;
        border: 3px solid #ED8438;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 10px;
        color: #ED8438;
        flex-shrink: 0;
    }

    .activity-content {
        flex: 1;
    }

    .activity-title {
        font-size: 15px;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 5px;
    }

    .activity-description {
        font-size: 13px;
        color: #7f8c8d;
        margin-bottom: 5px;
    }

    .activity-time {
        font-size: 12px;
        color: #95a5a6;
    }

    /* Quick Actions Card */
    .quick-actions-card {
        background: white;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }

    .action-button {
        display: flex;
        align-items: center;
        gap: 15px;
        width: 100%;
        padding: 15px 20px;
        margin-bottom: 12px;
        background: linear-gradient(135deg, #ED8438 0%, #d97633 100%);
        color: white;
        border: none;
        border-radius: 12px;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        box-shadow: 0 4px 12px rgba(237, 132, 56, 0.2);
    }

    .action-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(237, 132, 56, 0.3);
        background: linear-gradient(135deg, #d97633 0%, #ED8438 100%);
    }

    .action-button i {
        font-size: 20px;
        width: 24px;
        text-align: center;
    }

    .action-button.secondary {
        background: white;
        color: #ED8438;
        border: 2px solid #ED8438;
        box-shadow: 0 4px 12px rgba(237, 132, 56, 0.1);
    }

    .action-button.secondary:hover {
        background: #ED8438;
        color: white;
    }

    /* Properties Table */
    .properties-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
    }

    .properties-table thead {
        background: linear-gradient(135deg, #ED8438 0%, #d97633 100%);
    }

    .properties-table thead th {
        padding: 15px;
        text-align: left;
        color: white;
        font-weight: 600;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .properties-table thead th:first-child {
        border-top-left-radius: 12px;
    }

    .properties-table thead th:last-child {
        border-top-right-radius: 12px;
    }

    .properties-table tbody tr {
        background: white;
        transition: all 0.3s ease;
    }

    .properties-table tbody tr:hover {
        background: #fff8f4;
        transform: scale(1.01);
    }

    .properties-table tbody td {
        padding: 15px;
        border-bottom: 1px solid #f0f0f0;
        color: #2c3e50;
        font-size: 14px;
    }

    .properties-table tbody tr:last-child td:first-child {
        border-bottom-left-radius: 12px;
    }

    .properties-table tbody tr:last-child td:last-child {
        border-bottom-right-radius: 12px;
    }

    .property-badge {
        display: inline-block;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
    }

    .property-badge.available {
        background: #d4edda;
        color: #155724;
    }

    .property-badge.rented {
        background: #fff3cd;
        color: #856404;
    }

    .property-badge.pending {
        background: #cce5ff;
        color: #004085;
    }

    /* Chart Container */
    .chart-container {
        position: relative;
        height: 300px;
        padding: 20px 0;
    }

    /* Revenue Card */
    .revenue-card {
        background: white;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        margin-bottom: 25px;
    }

    .revenue-summary {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        margin-top: 20px;
    }

    .revenue-item {
        flex: 1;
        text-align: center;
        padding: 15px;
        background: #f8f9fa;
        border-radius: 12px;
    }

    .revenue-item-value {
        font-size: 24px;
        font-weight: 700;
        color: #ED8438;
        margin-bottom: 5px;
    }

    .revenue-item-label {
        font-size: 13px;
        color: #7f8c8d;
        font-weight: 500;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .dashboard-content {
            padding: 20px 15px;
        }

        .welcome-banner {
            padding: 25px 20px;
        }

        .welcome-banner h2 {
            font-size: 22px;
        }

        .stats-grid {
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .stat-card {
            padding: 20px;
        }

        .activity-card,
        .quick-actions-card,
        .revenue-card {
            padding: 20px;
        }

        .revenue-summary {
            flex-direction: column;
            gap: 15px;
        }

        .properties-table {
            font-size: 12px;
        }

        .properties-table thead th,
        .properties-table tbody td {
            padding: 10px 8px;
        }
    }

    @media (max-width: 480px) {
        .card-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        .stat-card-value {
            font-size: 26px;
        }

        .action-button {
            font-size: 14px;
            padding: 12px 15px;
        }
    }
</style>
@endsection

@section('content')
<div class="dashboard-content">
    <!-- Welcome Banner -->
    <div class="welcome-banner">
        <h2>👋 Bienvenue, {{ Auth::user()->first_name ?? 'Agent' }} !</h2>
        <p>Voici un aperçu de vos activités immobilières du jour</p>
    </div>

    <!-- Statistics Cards -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-card-header">
                <div class="stat-card-icon">
                    <i class="fas fa-building"></i>
                </div>
            </div>
            <div class="stat-card-value">{{ $totalProperties ?? 24 }}</div>
            <div class="stat-card-label">Propriétés Totales</div>
            <div class="stat-card-trend positive">
                <i class="fas fa-arrow-up"></i>
                <span>+3 ce mois</span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-card-header">
                <div class="stat-card-icon">
                    <i class="fas fa-key"></i>
                </div>
            </div>
            <div class="stat-card-value">{{ $availableProperties ?? 8 }}</div>
            <div class="stat-card-label">Disponibles</div>
            <div class="stat-card-trend positive">
                <i class="fas fa-arrow-up"></i>
                <span>+2 disponibles</span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-card-header">
                <div class="stat-card-icon">
                    <i class="fas fa-calendar-check"></i>
                </div>
            </div>
            <div class="stat-card-value">{{ $scheduledVisits ?? 12 }}</div>
            <div class="stat-card-label">Visites Planifiées</div>
            <div class="stat-card-trend positive">
                <i class="fas fa-arrow-up"></i>
                <span>+5 cette semaine</span>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-card-header">
                <div class="stat-card-icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
            </div>
            <div class="stat-card-value">{{ $monthlyRevenue ?? '12.5K' }}€</div>
            <div class="stat-card-label">Revenus Mensuels</div>
            <div class="stat-card-trend positive">
                <i class="fas fa-arrow-up"></i>
                <span>+8.2% ce mois</span>
            </div>
        </div>
    </div>

    <!-- Revenue Overview -->
    <div class="revenue-card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-chart-line"></i>
                Aperçu des Revenus
            </h3>
            <a href="{{ route('admin.payments') }}" class="view-all-link">Voir détails →</a>
        </div>
        <div class="chart-container">
            <canvas id="revenueChart"></canvas>
        </div>
        <div class="revenue-summary">
            <div class="revenue-item">
                <div class="revenue-item-value">18.5K€</div>
                <div class="revenue-item-label">Ce mois</div>
            </div>
            <div class="revenue-item">
                <div class="revenue-item-value">65.2K€</div>
                <div class="revenue-item-label">Ce trimestre</div>
            </div>
            <div class="revenue-item">
                <div class="revenue-item-value">198K€</div>
                <div class="revenue-item-label">Cette année</div>
            </div>
        </div>
    </div>

    <!-- Main Dashboard Grid -->
    <div class="dashboard-grid">
        <!-- Recent Activity -->
        <div class="activity-card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-clock"></i>
                    Activités Récentes
                </h3>
                <a href="#" class="view-all-link">Tout voir →</a>
            </div>
            <div class="activity-timeline">
                <div class="activity-item">
                    <div class="activity-icon">
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="activity-content">
                        <div class="activity-title">Nouvelle propriété ajoutée</div>
                        <div class="activity-description">Appartement 3 pièces, Centre-ville - 850€/mois</div>
                        <div class="activity-time">Il y a 2 heures</div>
                    </div>
                </div>

                <div class="activity-item">
                    <div class="activity-icon">
                        <i class="fas fa-calendar"></i>
                    </div>
                    <div class="activity-content">
                        <div class="activity-title">Visite planifiée</div>
                        <div class="activity-description">Maison Bonabéri - Demain à 14h30</div>
                        <div class="activity-time">Il y a 5 heures</div>
                    </div>
                </div>

                <div class="activity-item">
                    <div class="activity-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="activity-content">
                        <div class="activity-title">Loyer reçu</div>
                        <div class="activity-description">Villa Akwa - 1,200€ (Janvier 2026)</div>
                        <div class="activity-time">Hier à 10:15</div>
                    </div>
                </div>

                <div class="activity-item">
                    <div class="activity-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="activity-content">
                        <div class="activity-title">Nouveau message client</div>
                        <div class="activity-description">Demande d'information sur Appartement Bonanjo</div>
                        <div class="activity-time">Hier à 16:45</div>
                    </div>
                </div>

                <div class="activity-item">
                    <div class="activity-icon">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <div class="activity-content">
                        <div class="activity-title">Contrat signé</div>
                        <div class="activity-description">Studio Makepe - Bail de 12 mois</div>
                        <div class="activity-time">Il y a 2 jours</div>
                    </div>
                </div>

                <div class="activity-item">
                    <div class="activity-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="activity-content">
                        <div class="activity-title">Nouvel avis client</div>
                        <div class="activity-description">5 étoiles - "Excellent service !"</div>
                        <div class="activity-time">Il y a 3 jours</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="quick-actions-card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-bolt"></i>
                    Actions Rapides
                </h3>
            </div>
            <a href="{{ route('property.create') }}" class="action-button">
                <i class="fas fa-plus-circle"></i>
                <span>Ajouter Propriété</span>
            </a>
            <a href="{{ route('visits.index') }}" class="action-button">
                <i class="fas fa-calendar-plus"></i>
                <span>Planifier Visite</span>
            </a>
            <a href="{{ route('contact.index') }}" class="action-button secondary">
                <i class="fas fa-envelope"></i>
                <span>Messages ({{ $unreadMessages ?? 5 }})</span>
            </a>
            <a href="{{ route('house.rent') }}" class="action-button secondary">
                <i class="fas fa-dollar-sign"></i>
                <span>Gérer Loyers</span>
            </a>
            <a href="{{ route('property.index') }}" class="action-button secondary">
                <i class="fas fa-list"></i>
                <span>Voir Propriétés</span>
            </a>
        </div>
    </div>

    <!-- Recent Properties Table -->
    <div class="activity-card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-home"></i>
                Propriétés Récentes
            </h3>
            <a href="{{ route('property.index') }}" class="view-all-link">Voir toutes →</a>
        </div>
        <div style="overflow-x: auto;">
            <table class="properties-table">
                <thead>
                    <tr>
                        <th>Référence</th>
                        <th>Adresse</th>
                        <th>Type</th>
                        <th>Loyer</th>
                        <th>Statut</th>
                        <th>Date Ajout</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#PROP-2025-001</td>
                        <td>Akwa, Douala</td>
                        <td>Appartement 3P</td>
                        <td>850€</td>
                        <td><span class="property-badge available">Disponible</span></td>
                        <td>02/02/2026</td>
                    </tr>
                    <tr>
                        <td>#PROP-2025-002</td>
                        <td>Bonanjo, Douala</td>
                        <td>Villa 5P</td>
                        <td>1,500€</td>
                        <td><span class="property-badge rented">Loué</span></td>
                        <td>01/02/2026</td>
                    </tr>
                    <tr>
                        <td>#PROP-2025-003</td>
                        <td>Makepe, Douala</td>
                        <td>Studio</td>
                        <td>450€</td>
                        <td><span class="property-badge pending">En attente</span></td>
                        <td>31/01/2026</td>
                    </tr>
                    <tr>
                        <td>#PROP-2025-004</td>
                        <td>Bonabéri, Douala</td>
                        <td>Maison 4P</td>
                        <td>1,200€</td>
                        <td><span class="property-badge available">Disponible</span></td>
                        <td>30/01/2026</td>
                    </tr>
                    <tr>
                        <td>#PROP-2025-005</td>
                        <td>Bonapriso, Douala</td>
                        <td>Appartement 2P</td>
                        <td>650€</td>
                        <td><span class="property-badge rented">Loué</span></td>
                        <td>28/01/2026</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    // Revenue Chart Configuration
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('revenueChart');
        if (ctx) {
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun', 'Jul', 'Aoû', 'Sep', 'Oct', 'Nov', 'Déc'],
                    datasets: [{
                        label: 'Revenus (€)',
                        data: [12000, 15000, 13500, 17000, 16500, 19000, 18500, 20000, 19500, 21000, 18000, 18500],
                        borderColor: '#ED8438',
                        backgroundColor: 'rgba(237, 132, 56, 0.1)',
                        borderWidth: 3,
                        fill: true,
                        tension: 0.4,
                        pointBackgroundColor: '#ED8438',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        pointRadius: 5,
                        pointHoverRadius: 7,
                        pointHoverBackgroundColor: '#d97633',
                        pointHoverBorderColor: '#fff',
                        pointHoverBorderWidth: 3
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: 'rgba(44, 62, 80, 0.9)',
                            padding: 12,
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            borderColor: '#ED8438',
                            borderWidth: 2,
                            displayColors: false,
                            callbacks: {
                                label: function(context) {
                                    return context.parsed.y.toLocaleString('fr-FR') + ' €';
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)',
                                drawBorder: false
                            },
                            ticks: {
                                color: '#7f8c8d',
                                font: {
                                    size: 12
                                },
                                callback: function(value) {
                                    return (value / 1000) + 'K€';
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                color: '#7f8c8d',
                                font: {
                                    size: 12
                                }
                            }
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index'
                    }
                }
            });
        }
    });
</script>
@endsection
