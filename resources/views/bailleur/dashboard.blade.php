@extends('template.house')

@section('title', 'Dashboard Bailleur')

@section('style')
<style>
    .dashboard-card {
        background: #fff;
        border-radius: 12px;
        padding: 24px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        transition: transform 0.3s ease;
    }
    .dashboard-card:hover {
        transform: translateY(-5px);
    }
    .stat-icon {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
    }
    .stat-value {
        font-size: 32px;
        font-weight: bold;
        color: #1B1B1B;
        margin: 12px 0 4px;
    }
    .stat-label {
        color: #6B7280;
        font-size: 14px;
    }
    .stat-trend {
        font-size: 12px;
        font-weight: 600;
    }
    .trend-up { color: #059669; }
    .trend-down { color: #DC2626; }
    .property-card {
        background: #F9FAFB;
        padding: 16px;
        border-radius: 8px;
        margin-bottom: 12px;
    }
    .status-badge {
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
    }
    .status-available { background: #D1FAE5; color: #065F46; }
    .status-rented { background: #DBEAFE; color: #1E40AF; }
    .status-maintenance { background: #FEE2E2; color: #991B1B; }
    .chart-container {
        position: relative;
        height: 300px;
    }
</style>
@endsection

@section('content')
<div class="dashboard-section-area section-padding5" style="margin-top: 140px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading1">
                    <h2>Tableau de Bord Bailleur</h2>
                    <p>Gérez vos propriétés et revenus</p>
                </div>
                <div class="space32"></div>
            </div>
        </div>

        <!-- Statistiques principales -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="dashboard-card">
                    <div class="d-flex align-items-center">
                        <div class="stat-icon" style="background: #DBEAFE;">
                            <i class="fa-solid fa-building" style="color: #1E40AF;"></i>
                        </div>
                        <div class="ms-3 flex-grow-1">
                            <div class="stat-value">{{ $propertiesCount ?? 0 }}</div>
                            <div class="stat-label">Propriétés Totales</div>
                            <div class="stat-trend trend-up">
                                <i class="fa-solid fa-arrow-up"></i> {{ $availableProperties ?? 0 }} disponibles
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="dashboard-card">
                    <div class="d-flex align-items-center">
                        <div class="stat-icon" style="background: #D1FAE5;">
                            <i class="fa-solid fa-users" style="color: #059669;"></i>
                        </div>
                        <div class="ms-3 flex-grow-1">
                            <div class="stat-value">{{ $locatairesCount ?? 0 }}</div>
                            <div class="stat-label">Locataires Actifs</div>
                            <div class="stat-trend trend-up">
                                <i class="fa-solid fa-arrow-up"></i> +{{ $newTenants ?? 0 }} ce mois
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="dashboard-card">
                    <div class="d-flex align-items-center">
                        <div class="stat-icon" style="background: #FEF3C7;">
                            <i class="fa-solid fa-money-bill-trend-up" style="color: #D97706;"></i>
                        </div>
                        <div class="ms-3 flex-grow-1">
                            <div class="stat-value">{{ number_format($propertiesPrice ?? 0) }}</div>
                            <div class="stat-label">Revenus Mensuels (FCFA)</div>
                            <div class="stat-trend trend-up">
                                <i class="fa-solid fa-arrow-up"></i> +{{ $revenueGrowth ?? 0 }}%
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="dashboard-card">
                    <div class="d-flex align-items-center">
                        <div class="stat-icon" style="background: #FEE2E2;">
                            <i class="fa-solid fa-calendar-days" style="color: #DC2626;"></i>
                        </div>
                        <div class="ms-3 flex-grow-1">
                            <div class="stat-value">{{ $visitsCount ?? 0 }}</div>
                            <div class="stat-label">Demandes de Visite</div>
                            <div class="stat-trend trend-down">
                                <i class="fa-solid fa-clock"></i> À traiter
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="space32"></div>

        <div class="row">
            <!-- Graphique des revenus -->
            <div class="col-lg-8">
                <div class="dashboard-card">
                    <h4 class="mb-4">Évolution des Revenus</h4>
                    <div class="chart-container">
                        <canvas id="revenueChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Taux d'occupation -->
            <div class="col-lg-4">
                <div class="dashboard-card">
                    <h4 class="mb-4">Taux d'Occupation</h4>
                    <div class="text-center">
                        <div class="chart-container" style="height: 200px;">
                            <canvas id="occupancyChart"></canvas>
                        </div>
                        <h3 class="mt-3">{{ $occupancyRate ?? 0 }}%</h3>
                        <p class="text-muted">{{ $rentedProperties ?? 0 }}/{{ $totalProperties ?? 0 }} propriétés louées</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="space32"></div>

        <div class="row">
            <!-- Mes Propriétés -->
            <div class="col-lg-6">
                <div class="dashboard-card">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4>Mes Propriétés</h4>
                        <a href="{{ route('property.create') }}" class="btn btn-sm btn-primary">
                            <i class="fa-solid fa-plus"></i> Ajouter
                        </a>
                    </div>
                    @forelse($properties ?? [] as $property)
                    <div class="property-card">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                    <img src="{{ asset('storage/' . json_decode($property->photos)[1]) }}"
                                     alt="Property" class="img-fluid rounded">
                            </div>
                            <div class="col-md-6">
                                <h6>{{ $property->title ?? 'N/A' }}</h6>
                                <p class="mb-1"><i class="fa-solid fa-location-dot"></i> {{ $property->address ?? 'N/A' }}, {{ $property->neighborhood }}</p>
                                <p class="mb-0"><strong>{{ number_format($property->price ?? 0) }} FCFA/mois</strong></p>
                            </div>
                            <div class="col-md-3 text-end">
                                @if($property->status == 'available')
                                    <span class="status-badge status-available">Disponible</span>
                                @elseif($property->status == 'rented')
                                    <span class="status-badge status-rented">Loué</span>
                                @else
                                    <span class="status-badge status-maintenance">{{ $property->status }}</span>
                                @endif
                                <div class="mt-2">
                                    <a href="#" class="btn btn-sm btn-outline-primary">Modifier</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="text-center text-muted">Aucune propriété enregistrée</p>
                    @endforelse
                </div>
            </div>

            <!-- Demandes de Visite -->
            <div class="col-lg-6">
                <div class="dashboard-card">
                    <h4 class="mb-4">Demandes de Visite Récentes</h4>
                    @forelse($visits ?? [] as $visit)
                    <div class="property-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h6>{{ $visit->user->first_name ?? 'N/A' }} {{ $visit->user->last_name ?? '' }}</h6>
                                <p class="mb-1"><strong>{{ $visit->property->title ?? 'N/A' }}</strong></p>
                                <p class="mb-0"><i class="fa-solid fa-calendar"></i> {{ $visit->visit_datetime ?? 'N/A' }} </p>
                            </div>
                            <div class="text-end">
                                <button class="btn btn-sm btn-success mb-1" title="Accepter">
                                    <i class="fa-solid fa-check"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" title="Refuser">
                                    <i class="fa-solid fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="text-center text-muted">Aucune demande de visite en attente</p>
                    @endforelse

                    <div class="text-center mt-3">
                        <a href="{{ route('house.visit') }}" class="vl-btn1">Voir Toutes les Demandes</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="space32"></div>

        <!-- Paiements Récents -->
        <div class="row">
            <div class="col-lg-12">
                <div class="dashboard-card">
                    <h4 class="mb-4">Paiements Récents</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Locataire</th>
                                    <th>Propriété</th>
                                    <th>Montant</th>
                                    <th>Méthode</th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($payments ?? [] as $payment)
                                <tr>
                                    <td>{{ $payment->payment_date->format('d/m/Y') ?? 'N/A' }}</td>
                                    <td>{{ $payment->user->first_name ?? 'N/A' }} {{ $payment->user->last_name ?? '' }}</td>
                                    <td>{{ $payment->contrat->property->title ?? 'N/A' }}</td>
                                    <td><strong>{{ number_format($payment->amount, 0, ',', '') }} FCFA</strong></td>
                                    <td>{{ $payment->payment_method ?? 'N/A' }}</td>
                                    <td><span class="status-badge status-available">{{ $payment->status }}</span></td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted">Aucun paiement récent</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="space32"></div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Graphique des revenus
    const revenueCtx = document.getElementById('revenueChart').getContext('2d');
    new Chart(revenueCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc'],
            datasets: [{
                label: 'Revenus (FCFA)',
                data: [150000, 180000, 165000, 195000, 210000, 225000, 240000, 255000, 270000, 285000, 300000, 315000],
                borderColor: '#1E40AF',
                backgroundColor: 'rgba(30, 64, 175, 0.1)',
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            }
        }
    });

    // Graphique d'occupation
    const occupancyCtx = document.getElementById('occupancyChart').getContext('2d');
    new Chart(occupancyCtx, {
        type: 'doughnut',
        data: {
            labels: ['Louées', 'Disponibles'],
            datasets: [{
                data: [{{ $rentedProperties ?? 0 }}, {{ $availableProperties ?? 0 }}],
                backgroundColor: ['#1E40AF', '#E5E7EB'],
                borderWidth: 0
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { position: 'bottom' }
            }
        }
    });
</script>
@endsection
