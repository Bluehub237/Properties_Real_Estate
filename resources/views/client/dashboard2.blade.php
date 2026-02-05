@extends('layouts.house')

@section('title', 'Dashboard Locataire')

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
    .recent-activity {
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
    .status-active { background: #D1FAE5; color: #065F46; }
    .status-pending { background: #FEF3C7; color: #92400E; }
    .status-expired { background: #FEE2E2; color: #991B1B; }
</style>
@endsection

@section('content')
<div class="dashboard-section-area section-padding5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading1">
                    <h2>Tableau de Bord Locataire</h2>
                    <p>Bienvenue, {{ Auth::user()->first_name }} !</p>
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
                            <i class="fa-solid fa-home" style="color: #1E40AF;"></i>
                        </div>
                        <div class="ms-3 flex-grow-1">
                            <div class="stat-value">{{ $activeRents ?? 0 }}</div>
                            <div class="stat-label">Locations Actives</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="dashboard-card">
                    <div class="d-flex align-items-center">
                        <div class="stat-icon" style="background: #FEE2E2;">
                            <i class="fa-solid fa-calendar-check" style="color: #DC2626;"></i>
                        </div>
                        <div class="ms-3 flex-grow-1">
                            <div class="stat-value">{{ $upcomingVisits ?? 0 }}</div>
                            <div class="stat-label">Visites Prévues</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="dashboard-card">
                    <div class="d-flex align-items-center">
                        <div class="stat-icon" style="background: #D1FAE5;">
                            <i class="fa-solid fa-wallet" style="color: #059669;"></i>
                        </div>
                        <div class="ms-3 flex-grow-1">
                            <div class="stat-value">{{ number_format($totalPaid ?? 0) }} FCFA</div>
                            <div class="stat-label">Total Payé</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="dashboard-card">
                    <div class="d-flex align-items-center">
                        <div class="stat-icon" style="background: #FEF3C7;">
                            <i class="fa-solid fa-clock" style="color: #D97706;"></i>
                        </div>
                        <div class="ms-3 flex-grow-1">
                            <div class="stat-value">{{ number_format($nextPayment ?? 0) }} FCFA</div>
                            <div class="stat-label">Prochain Paiement</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="space32"></div>

        <div class="row">
            <!-- Mes Locations Actuelles -->
            <div class="col-lg-8">
                <div class="dashboard-card">
                    <h4 class="mb-4">Mes Locations Actuelles</h4>
                    @forelse($currentRents ?? [] as $rent)
                    <div class="recent-activity">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <img src="{{ asset($rent->property->image ?? 'assets/img/default.jpg') }}"
                                     alt="Property" class="img-fluid rounded">
                            </div>
                            <div class="col-md-6">
                                <h5>{{ $rent->property->title ?? 'N/A' }}</h5>
                                <p class="mb-1"><i class="fa-solid fa-location-dot"></i> {{ $rent->property->location ?? 'N/A' }}</p>
                                <p class="mb-0"><strong>{{ number_format($rent->monthly_rent ?? 0) }} FCFA/mois</strong></p>
                            </div>
                            <div class="col-md-3 text-end">
                                <span class="status-badge status-active">Active</span>
                                <p class="mt-2 mb-0"><small>Expire le: {{ $rent->end_date ?? 'N/A' }}</small></p>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="text-center text-muted">Aucune location active</p>
                    @endforelse

                    <div class="text-center mt-3">
                        <a href="{{ route('house.rent') }}" class="vl-btn1">Voir Toutes Mes Locations</a>
                    </div>
                </div>
            </div>

            <!-- Visites Programmées -->
            <div class="col-lg-4">
                <div class="dashboard-card">
                    <h4 class="mb-4">Visites Programmées</h4>
                    @forelse($upcomingVisitsList ?? [] as $visit)
                    <div class="recent-activity">
                        <h6>{{ $visit->property->title ?? 'N/A' }}</h6>
                        <p class="mb-1"><i class="fa-solid fa-calendar"></i> {{ $visit->visit_date ?? 'N/A' }}</p>
                        <p class="mb-0"><i class="fa-solid fa-clock"></i> {{ $visit->visit_time ?? 'N/A' }}</p>
                        <span class="status-badge status-pending mt-2">En Attente</span>
                    </div>
                    @empty
                    <p class="text-center text-muted">Aucune visite programmée</p>
                    @endforelse

                    <div class="text-center mt-3">
                        <a href="{{ route('house.visit') }}" class="vl-btn1">Programmer une Visite</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="space32"></div>

        <!-- Paiements Récents -->
        <div class="row">
            <div class="col-lg-12">
                <div class="dashboard-card">
                    <h4 class="mb-4">Historique des Paiements</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Propriété</th>
                                    <th>Montant</th>
                                    <th>Période</th>
                                    <th>Statut</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($recentPayments ?? [] as $payment)
                                <tr>
                                    <td>{{ $payment->payment_date ?? 'N/A' }}</td>
                                    <td>{{ $payment->property->title ?? 'N/A' }}</td>
                                    <td><strong>{{ number_format($payment->amount ?? 0) }} FCFA</strong></td>
                                    <td>{{ $payment->period ?? 'N/A' }}</td>
                                    <td><span class="status-badge status-active">Payé</span></td>
                                    <td><a href="#" class="btn btn-sm btn-outline-primary">Reçu</a></td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted">Aucun paiement enregistré</td>
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
@endsection

@section('script')
<script>
    // Animation des statistiques au chargement
    document.addEventListener('DOMContentLoaded', function() {
        const statValues = document.querySelectorAll('.stat-value');
        statValues.forEach(stat => {
            stat.style.opacity = '0';
            setTimeout(() => {
                stat.style.transition = 'opacity 0.5s ease';
                stat.style.opacity = '1';
            }, 100);
        });
    });
</script>
@endsection
