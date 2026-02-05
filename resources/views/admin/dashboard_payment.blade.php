@extends('template.house2_new')
@section('title','Housa - Dashboard Paiements')
@section('content')
<style>
.payment-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Statistics Cards */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 16px;
            padding: 25px;
            color: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            pointer-events: none;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .stat-card.success {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
        }

        .stat-card.warning {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }

        .stat-card.info {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }

        .stat-card.primary {
            background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
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
            background: rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .stat-value {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 14px;
            opacity: 0.9;
            font-weight: 500;
        }

        .stat-change {
            font-size: 12px;
            margin-top: 10px;
            padding: 5px 10px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            display: inline-block;
        }

        /* Payment List Section */
        .payment-section {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .section-header {
            padding: 30px;
            background: linear-gradient(135deg, #ED8438 0%, #d97633 100%);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .section-title {
            font-size: 28px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .section-actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background: white;
            color: #ED8438;
        }

        .btn-primary:hover {
            background: #f8f9fa;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 2px solid white;
        }

        .btn-secondary:hover {
            background: white;
            color: #ED8438;
        }

        /* Filters */
        .filters {
            padding: 25px 30px;
            background: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            align-items: center;
        }

        .filter-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .filter-label {
            font-size: 14px;
            font-weight: 600;
            color: #495057;
        }

        .filter-select, .filter-input {
            padding: 10px 15px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-size: 14px;
            background: white;
            transition: all 0.3s ease;
        }

        .filter-select:focus, .filter-input:focus {
            outline: none;
            border-color: #ED8438;
        }

        /* Payment Table */
        .payment-table {
            width: 100%;
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
            padding: 20px 25px;
            text-align: left;
            font-size: 13px;
            font-weight: 700;
            color: #495057;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 2px solid #e9ecef;
        }

        tbody tr {
            border-bottom: 1px solid #f1f3f5;
            transition: all 0.3s ease;
        }

        tbody tr:hover {
            background: #f8f9fa;
            transform: scale(1.01);
        }

        td {
            padding: 20px 25px;
            font-size: 14px;
            color: #495057;
        }

        /* Status Badge */
        .status-badge {
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-paid {
            background: #d4edda;
            color: #155724;
        }

        .status-pending {
            background: #fff3cd;
            color: #856404;
        }

        .status-overdue {
            background: #f8d7da;
            color: #721c24;
        }

        .status-cancelled {
            background: #e2e3e5;
            color: #383d41;
        }

        /* Dynamic Status Styles */
        .status-badge.status-paid {
            background: #d4edda;
            color: #155724;
        }

        .status-badge.status-pending {
            background: #fff3cd;
            color: #856404;
        }

        .status-badge.status-overdue {
            background: #f8d7da;
            color: #721c24;
        }

        .status-badge.status-cancelled {
            background: #e2e3e5;
            color: #383d41;
        }

        .text-center {
            text-align: center;
        }

        /* Property Info */
        .property-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .property-icon {
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg, #ED8438 0%, #d97633 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
        }

        .property-details {
            display: flex;
            flex-direction: column;
        }

        .property-name {
            font-weight: 600;
            color: #212529;
            margin-bottom: 2px;
        }

        .property-address {
            font-size: 12px;
            color: #6c757d;
        }

        /* Amount */
        .amount {
            font-weight: 700;
            font-size: 16px;
            color: #ED8438;
        }

        /* Actions */
        .actions {
            display: flex;
            gap: 8px;
        }

        .action-btn {
            width: 35px;
            height: 35px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            font-size: 14px;
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

        .action-btn.download {
            background: #e8f5e9;
            color: #2e7d32;
        }

        .action-btn.download:hover {
            background: #2e7d32;
            color: white;
        }

        /* Pagination */
        .pagination {
            padding: 25px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
            background: #f8f9fa;
        }

        .pagination-info {
            font-size: 14px;
            color: #6c757d;
        }

        .pagination-controls {
            display: flex;
            gap: 8px;
        }

        .page-btn {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            border: 2px solid #e9ecef;
            background: white;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .page-btn:hover, .page-btn.active {
            background: #ED8438;
            color: white;
            border-color: #ED8438;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

         @media screen and (min-width: 1200px) {
            .payment-container {
                margin-left: 280px;
            }
        }

        @media (max-width: 768px) {
            .payment-container {
                padding: 10px;
            }

            .stats-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }

            .section-header {
                padding: 20px;
                flex-direction: column;
                align-items: flex-start;
            }

            .section-title {
                font-size: 22px;
            }

            .filters {
                padding: 15px;
                flex-direction: column;
                align-items: stretch;
            }

            .filter-group {
                flex-direction: column;
                align-items: stretch;
            }

            .filter-select, .filter-input {
                width: 100%;
            }

            .payment-table {
                overflow-x: scroll;
            }

            table {
                min-width: 800px;
            }

            .pagination {
                flex-direction: column;
                align-items: stretch;
            }

            .pagination-controls {
                justify-content: center;
            }
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

        .empty-state p {
            font-size: 14px;
        }
    </style>
    <div class="payment-container">
        <!-- Statistics Cards -->
        <div class="stats-grid">
            <div class="stat-card success">
                <div class="stat-header">
                    <div class="stat-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
                <div class="stat-value">{{ number_format($Montant_month, 0, ',', ' ') }} FCFA</div>
                <div class="stat-label">Paiements reçus ce mois</div>
            </div>

            <div class="stat-card warning">
                <div class="stat-header">
                    <div class="stat-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                </div>
                <div class="stat-value">{{ number_format($pending, 0, ',', ' ') }} FCFA</div>
                <div class="stat-label">Paiements en attente</div>
            </div>

            <div class="stat-card info">
                <div class="stat-header">
                    <div class="stat-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                </div>
                <div class="stat-value">{{ number_format($retard, 0, ',', ' ') }} FCFA</div>
                <div class="stat-label">Paiements en retard</div>
            </div>

            <div class="stat-card primary">
                <div class="stat-header">
                    <div class="stat-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                </div>
                <div class="stat-value">{{ number_format($totalAnnual, 0, ',', ' ') }} FCFA</div>
                <div class="stat-label">Total revenus annuels</div>
            </div>
        </div>

        <!-- Payment List Section -->
        <div class="payment-section">
            <div class="section-header">
                <h2 class="section-title">
                    <i class="fas fa-money-bill-wave"></i>
                    Liste des Paiements
                </h2>
                <div class="section-actions">
                    <button class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        Nouveau paiement
                    </button>
                    <button class="btn btn-secondary">
                        <i class="fas fa-file-export"></i>
                        Exporter
                    </button>
                </div>
            </div>

            <!-- Filters -->
           <!-- <div class="filters">
                <div class="filter-group">
                    <label class="filter-label">Statut:</label>
                    <select class="filter-select">
                        <option value="">Tous les statuts</option>
                        <option value="paid">Payé</option>
                        <option value="pending">En attente</option>
                        <option value="overdue">En retard</option>
                        <option value="cancelled">Annulé</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label class="filter-label">Période:</label>
                    <select class="filter-select">
                        <option value="">Tous</option>
                        <option value="today">Aujourd'hui</option>
                        <option value="week">Cette semaine</option>
                        <option value="month">Ce mois</option>
                        <option value="year">Cette année</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label class="filter-label">Rechercher:</label>
                    <input type="text" class="filter-input" placeholder="Nom, référence...">
                </div>
            </div>  -->

            <!-- Payment Table -->
            <div class="payment-table">
                <table>
                    <thead>
                        <tr>
                            <th>Référence</th>
                            <th>Propriété</th>
                            <th>Locataire</th>
                            <th>Montant</th>
                            <th>Date</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($payments as $payment)
                        <tr>
                            <td><strong>{{ $payment->contrat->reference }}</strong></td>
                            <td>
                                <div class="property-info">
                                    <div class="property-icon">
                                        <i class="fas fa-{{ $payment->contrat->property->type === 'apartment' ? 'building' : 'home' }}"></i>
                                    </div>
                                    <div class="property-details">
                                        <span class="property-name">{{ $payment->contrat->property->title }}</span>
                                        <span class="property-address">{{ $payment->contrat->property->address }}</span>
                                    </div>
                                </div>
                            </td>
                            <td> <strong>{{ $payment->user->first_name }} {{ $payment->user->last_name }}</strong></td>
                            <td class="amount">{{ number_format($payment->amount, 0, ',', ' ') }} FCFA</td>
                            <td>{{ $payment->payment_date->format('d M Y') }}</td>
                            <td><span class="status-badge status-{{ $payment->status }}">{{ ucfirst(str_replace('_', ' ', $payment->status)) }}</span></td>
                            <td>
                                <div class="actions">
                                    <button class="action-btn view" title="Voir détails">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn download" title="Télécharger reçu">
                                        <i class="fas fa-download"></i>
                                    </button>
                                    <form action="{{ route('payments.destroy', $payment->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce paiement ?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="action-btn delete" title="Supprimer">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">Aucun paiement enregistré</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <div class="pagination-controls">
                    {{ $payments->links() }}
                </div>
            </div>
        </div>
    </div>

    <script>
        // Interactive features
        document.addEventListener('DOMContentLoaded', function() {
            // Filter functionality
            const filters = document.querySelectorAll('.filter-select, .filter-input');
            filters.forEach(filter => {
                filter.addEventListener('change', function() {
                    console.log('Filter applied:', this.value);
                    // Add your filter logic here
                });
            });

            // Action buttons
            const actionButtons = document.querySelectorAll('.action-btn');
            actionButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const action = this.classList[1];
                    console.log('Action clicked:', action);
                    // Add your action logic here
                });
            });

            // Pagination
            const pageButtons = document.querySelectorAll('.page-btn');
            pageButtons.forEach(button => {
                button.addEventListener('click', function() {
                    pageButtons.forEach(btn => btn.classList.remove('active'));
                    if (!this.textContent.includes('chevron') && this.textContent !== '...') {
                        this.classList.add('active');
                    }
                    console.log('Page:', this.textContent);
                    // Add your pagination logic here
                });
            });

            // Row click
            const tableRows = document.querySelectorAll('tbody tr');
            tableRows.forEach(row => {
                row.addEventListener('click', function() {
                    console.log('Row clicked:', this.querySelector('strong').textContent);
                    // Add your row click logic here
                });
            });
        });
    </script>
@endsection
