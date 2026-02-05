@extends('template.house')

@section('title')
    Housa - Real Esate Template
@endsection
@section('style')
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection
@section('content')

    <div class="dashboard-container">
        <!-- Greeting Section -->
        <div class="greeting-section mb-4">
            <h1>Bonjour, Naël ! 👋</h1>
            <p>Voici un aperçu de vos activités récentes</p>
        </div>

        <!-- Stats Cards -->
        <div class="row g-3 mb-5">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="stats-card">
                    <i class="fas fa-home icon"></i>
                    <h6>Mes Publications</h6>
                    <div class="number">0</div>
                    <p class="description">Propriétés publiées</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="stats-card">
                    <i class="fas fa-heart icon"></i>
                    <h6>Favoris</h6>
                    <div class="number">0</div>
                    <p class="description">Biens sauvegardés</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="stats-card">
                    <i class="fas fa-heart icon"></i>
                    <h6>Favoris</h6>
                    <div class="number">0</div>
                    <p class="description">Biens sauvegardés</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="stats-card">
                    <i class="fas fa-calendar-alt icon"></i>
                    <h6>Visites</h6>
                    <div class="number">0</div>
                    <p class="description">Visites planifiées</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="stats-card">
                    <i class="fas fa-copy icon"></i>
                    <h6>Solde</h6>
                    <div class="number">0</div>
                    <p class="description">FCFA disponibles</p>
                </div>
            </div>
        </div>

        <!-- Actions Rapides Section -->
        <div class="actions-section">
            <h3>Actions rapides</h3>
            <p class="subtitle">Accédez rapidement aux fonctionnalités principales</p>

            <div class="action-item">
                <div class="action-icon green">
                    <i class="fas fa-calendar-plus"></i>
                </div>
                <div class="action-content">
                    <h5>Planifier une visite</h5>
                    <p>Réserver une visite de bien</p>
                </div>
            </div>

            <div class="action-item">
                <div class="action-icon purple">
                    <i class="fas fa-user-circle"></i>
                </div>
                <div class="action-content">
                    <h5>Gérer mon profil</h5>
                    <p>Modifier mes informations</p>
                </div>
            </div>

            <div class="action-item">
                <div class="action-icon pink">
                    <i class="fas fa-heart"></i>
                </div>
                <div class="action-content">
                    <h5>Voir mes favoris</h5>
                    <p>Consulter mes biens sauvegardés</p>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
