@extends('template.house')

@section('title')
    Housa - Wallet Client
@endsection
@section('style')
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection
@section('content')
    <div class="wallet-container">
        <!-- Page Header -->
        <div class="page-header">
            <h1>Mon Wallet</h1>
            <p>Gérez votre portefeuille et consultez vos transactions</p>
        </div>

        <!-- Balance Card -->
        <div class="balance-card">
            <div class="balance-header">
                <h3>Solde Total</h3>
                <div class="balance-icons">
                    <i class="fas fa-wallet"></i>
                    <i class="fas fa-eye"></i>
                </div>
            </div>

            <div class="balance-amount">
                <div class="balance-dots">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div class="balance-update">
                Dernière mise à jour: aujourd'hui
            </div>
        </div>

        <!-- Deposit Button -->
        <button class="deposit-btn">
            <i class="fas fa-plus"></i>
            Effectuer un dépôt
        </button>
        <!-- Transactions Section -->
        <div class="transactions-section">
            <h2>Historique des transactions</h2>
        </div>
    </div>
@endsection
@section('script')
  <script src="assets/js/plugins/house-js.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
