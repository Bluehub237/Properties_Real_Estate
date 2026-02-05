@extends('template.house')

@section('title')
    Housa - Real Esate Template
@endsection
@section('style')
    <style>
        .dashboard-card {
            background: #fff;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
        }

        .property-card {
            background: #F9FAFB;
            padding: 16px;
            border-radius: 8px;
            margin-bottom: 12px;
        }
    </style>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection
@section('content')
    <div class="visites-container">
        <!-- Page Header -->
        <div class="page-header">
            <h1>Mes visites</h1>
            <p>Consultez l'historique de toutes vos visites de logements</p>
        </div>

        <!-- Demandes de Visite -->
        <div class="col-lg">
            <div class="dashboard-card">
                <h4 class="mb-4">Demandes de Visite Récentes</h4>
                @forelse($visits ?? [] as $visit)
                    <div class="property-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h6>{{ $visit->user->first_name ?? 'N/A' }} {{ $visit->user->last_name ?? '' }}</h6>
                                <p class="mb-1"><strong>{{ $visit->property->title ?? 'N/A' }}</strong></p>
                                <p class="mb-0"><i class="fa-solid fa-calendar"></i> {{ $visit->visit_datetime ?? 'N/A' }}
                                </p>
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
                    <div class="space10"></div>
                @empty
                    <!-- Empty State -->
                    <div class="empty-state">
                        <div class="empty-state-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <h3>Aucune visite programmée</h3>
                        <p>Commencez à explorer des logements et programmez vos premières visites !</p>
                        <button class="btn btn-discover">Découvrir des logements</button>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
 @endsection
