@extends('template.house')

@section('title', 'Choisir le moyen de paiement')

@section('style')
    <style>
        .payment-section {
            min-height: 80vh;
            padding: 60px 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        .payment-container {
            max-width: 900px;
            margin: 0 auto;
        }

        .payment-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            padding: 40px;
            margin-bottom: 30px;
        }

        .payment-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .payment-header h2 {
            font-size: 32px;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 10px;
        }

        .payment-header p {
            color: #666;
            font-size: 16px;
        }

        .property-info {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 35px;
            border-left: 4px solid #ED8438;
        }

        .property-info h4 {
            font-size: 20px;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 15px;
        }

        .property-details {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 15px;
        }

        .detail-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #555;
        }

        .detail-item i {
            color: #ED8438;
            font-size: 18px;
        }

        .amount-display {
            text-align: center;
            background: linear-gradient(135deg, #ED8438 0%, #ff9d5c 100%);
            color: white;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 35px;
        }

        .amount-display .label {
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0.9;
            margin-bottom: 10px;
        }

        .amount-display .amount {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .amount-display .period {
            font-size: 14px;
            opacity: 0.9;
        }

        .payment-methods {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .payment-method-card {
            position: relative;
            border: 3px solid #e0e0e0;
            border-radius: 15px;
            padding: 30px 20px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            background: white;
        }

        .payment-method-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .payment-method-card input[type="radio"] {
            position: absolute;
            opacity: 0;
            pointer-events: none;
        }

        .payment-method-card input[type="radio"]:checked+.method-content {
            border-color: #ED8438;
        }

        .payment-method-card input[type="radio"]:checked~.checkmark {
            opacity: 1;
            transform: scale(1);
        }

        .payment-method-card.active {
            border-color: #ED8438;
            background: #fff8f3;
        }

        .method-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .method-logo {
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8f9fa;
            border-radius: 50%;
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }

        .payment-method-card.active .method-logo {
            background: #ED8438;
            transform: scale(1.1);
        }

        .method-logo img {
            max-width: 50px;
            max-height: 50px;
            object-fit: contain;
        }

        .method-name {
            font-size: 20px;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 5px;
        }

        .method-description {
            font-size: 13px;
            color: #666;
        }

        .checkmark {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 30px;
            height: 30px;
            background: #ED8438;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transform: scale(0);
            transition: all 0.3s ease;
        }

        .checkmark i {
            color: white;
            font-size: 16px;
        }

        .phone-input-group {
            display: none;
            margin-top: 20px;
            animation: slideDown 0.3s ease;
        }

        .phone-input-group.show {
            display: block;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-control-lg {
            border-radius: 10px;
            border: 2px solid #e0e0e0;
            padding: 15px 20px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .form-control-lg:focus {
            border-color: #ED8438;
            box-shadow: 0 0 0 0.2rem rgba(237, 132, 56, 0.15);
        }

        .input-group-text {
            background: #f8f9fa;
            border: 2px solid #e0e0e0;
            border-right: none;
            border-radius: 10px 0 0 10px;
            padding: 0 15px;
        }

        .btn-payment {
            width: 100%;
            padding: 18px;
            font-size: 18px;
            font-weight: 600;
            border-radius: 12px;
            border: none;
            background: linear-gradient(135deg, #ED8438 0%, #ff9d5c 100%);
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-payment:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(237, 132, 56, 0.4);
        }

        .btn-payment:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
        }

        .btn-back {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 12px;
            border: 2px solid #e0e0e0;
            background: white;
            color: #666;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 15px;
        }

        .btn-back:hover {
            border-color: #ED8438;
            color: #ED8438;
        }

        .security-info {
            text-align: center;
            margin-top: 25px;
            padding: 15px;
            background: #f0f8ff;
            border-radius: 10px;
            color: #0066cc;
            font-size: 14px;
        }

        .security-info i {
            margin-right: 8px;
        }

        .payment-badge {
            display: inline-block;
            background: #ED8438;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-download {
            background: #3b82f6;
            color: white;
            border: none;
            padding: 16px 32px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            width: 100%;
        }

        .btn-download:hover {
            background: #2563eb;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }

        @media (max-width: 768px) {
            .payment-card {
                padding: 25px;
            }

            .amount-display .amount {
                font-size: 36px;
            }

            .payment-methods {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endsection

@section('content')
    <section class="payment-section">
        <div class="container payment-container">
            <div class="payment-card" style="margin-top: 100px; !important">
                <!-- En-tête -->
                <div class="payment-header">
                    <span class="payment-badge">Étape 3/3</span>
                    <h2>Choisissez votre moyen de paiement</h2>
                    <p>Sélectionnez votre opérateur mobile pour finaliser la transaction</p>
                    <div class="space10"></div>
                    @if($contrat->pdf_path)
                    <div class="col-md-12 ">
                        <button type="button" class="btn-download" onclick="window.location.href='{{ asset('storage/'.$contrat->pdf_path) }}'">
                            <i class="fa-solid fa-download"></i> Télécharger le contrat PDF
                        </button>
                    </div>
                    @endif
                </div>

                <!-- Informations de la propriété -->
                <div class="property-info">
                    <h4><i class="fa-solid fa-house"></i> {{ $contrat->property->title }}</h4>
                    <div class="property-details">
                        <div class="detail-item">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>{{ $contrat->property->address }},{{ $contrat->property->neighborhood ?? '' }},{{ $contrat->property->city ?? ''  }}</span>
                        </div>
                        <div class="detail-item">
                            <i class="fa-solid fa-bed"></i>
                            <span>{{ $contrat->property->bedrooms  }} chambres</span>
                        </div>
                        <div class="detail-item">
                            <i class="fa-solid fa-bath"></i>
                            <span>{{ $contrat->property->bathrooms  }} salles de bain</span>
                        </div>
                    </div>
                </div>

                <!-- Affichage du montant -->
                <div class="amount-display">
                    <div class="label">Montant à payer</div>
                    <div class="amount">{{ number_format($contrat->property->price, 0, ',', ' ') }} FCFA</div>
                    <div class="period">{{ 'Paiement mensuel' }}</div>
                </div>
                <!-- Formulaire de paiement -->
                <form action="{{ route('payments.store', ['contrat' => $contrat->id]) }}" method="POST" id="paymentForm">
                    @csrf
                    <input type="hidden" name="amount" value="{{ number_format($contrat->property->price, 0, ',', ' ') }}">
                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                    <!-- Méthodes de paiement -->
                    <div class="payment-methods">
                        <!-- MTN Mobile Money -->
                        <label class="payment-method-card" data-method="mtn">
                            <input type="radio" name="payment_method" value="MTN Money" required>
                            <div class="method-content">
                                <div class="method-logo">
                                    <img src="{{ asset('assets/img/payment/mtn-logo.png') }}" alt="MTN Mobile Money"
                                        onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTAiIGhlaWdodD0iNTAiIHZpZXdCb3g9IjAgMCA1MCA1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iNTAiIGhlaWdodD0iNTAiIGZpbGw9IiNGRkNDMDAiIHJ4PSI1Ii8+PHRleHQgeD0iNTAlIiB5PSI1MCUiIGZvbnQtc2l6ZT0iMjAiIGZvbnQtd2VpZ2h0PSJib2xkIiBmaWxsPSIjMDAwIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBkeT0iLjNlbSI+TVROPC90ZXh0Pjwvc3ZnPg=='">
                                </div>
                                <div>
                                    <div class="method-name">MTN Mobile Money</div>
                                    <div class="method-description">Paiement sécurisé via MTN MoMo</div>
                                </div>
                            </div>
                            <div class="checkmark">
                                <i class="fa-solid fa-check"></i>
                            </div>
                        </label>

                        <!-- Orange Money -->
                        <label class="payment-method-card" data-method="orange">
                            <input type="radio" name="payment_method" value="Orange Money" required>
                            <div class="method-content">
                                <div class="method-logo">
                                    <img src="{{ asset('assets/img/payment/orange-logo.png') }}" alt="Orange Money"
                                        onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTAiIGhlaWdodD0iNTAiIHZpZXdCb3g9IjAgMCA1MCA1MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48Y2lyY2xlIGN4PSIyNSIgY3k9IjI1IiByPSIyNSIgZmlsbD0iI0ZGNjYwMCIvPjx0ZXh0IHg9IjUwJSIgeT0iNTAlIiBmb250LXNpemU9IjE4IiBmb250LXdlaWdodD0iYm9sZCIgZmlsbD0iI0ZGRiIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZHk9Ii4zZW0iPk9NPC90ZXh0Pjwvc3ZnPg=='">
                                </div>
                                <div>
                                    <div class="method-name">Orange Money</div>
                                    <div class="method-description">Paiement sécurisé via Orange Money</div>
                                </div>
                            </div>
                            <div class="checkmark">
                                <i class="fa-solid fa-check"></i>
                            </div>
                        </label>
                    </div>

                    <!-- Champ de saisie du numéro de téléphone -->
                    <div id="phoneInputGroup" class="phone-input-group">
                        <label for="phone" class="form-label">
                            <strong>Numéro de téléphone</strong>
                        </label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fa-solid fa-phone"></i> +237
                            </span>
                            <input type="text" class="form-control form-control-lg @error('phone') is-invalid @enderror" id="phone" name="phone"
                                placeholder="6XX XXX XXX" maxlength="9" required>
                            @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <small class="text-muted">
                            <i class="fa-solid fa-info-circle"></i>
                            Entrez votre numéro sans l'indicatif pays (+237)
                        </small>
                    </div>

                    <div class="space20"></div>

                    <!-- Bouton de validation -->
                    <button type="submit" class="btn-payment" id="submitBtn">
                        <i class="fa-solid fa-lock me-2"></i>
                        Procéder au paiement sécurisé
                    </button>

                    <!-- Bouton retour -->
                    <button type="button" class="btn-back" onclick="window.history.back()">
                        <i class="fa-solid fa-arrow-left me-2"></i>
                        Retour
                    </button>
                </form>

                <!-- Information de sécurité -->
                <div class="security-info">
                    <i class="fa-solid fa-shield-halved"></i>
                    <strong>Paiement 100% sécurisé</strong> - Vos informations sont protégées par un cryptage SSL
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const paymentCards = document.querySelectorAll('.payment-method-card');
            const phoneInputGroup = document.getElementById('phoneInputGroup');
            const phoneInput = document.getElementById('phone');
            const submitBtn = document.getElementById('submitBtn');
            const form = document.getElementById('paymentForm');

            // Gestion de la sélection du moyen de paiement
            paymentCards.forEach(card => {
                card.addEventListener('click', function() {
                    // Retirer la classe active de toutes les cartes
                    paymentCards.forEach(c => c.classList.remove('active'));

                    // Ajouter la classe active à la carte sélectionnée
                    this.classList.add('active');

                    // Cocher le radio button
                    const radio = this.querySelector('input[type="radio"]');
                    radio.checked = true;

                    // Afficher le champ de téléphone
                    phoneInputGroup.classList.add('show');

                    // Mettre le focus sur le champ de téléphone
                    setTimeout(() => phoneInput.focus(), 300);

                    // Vérifier si le bouton doit être activé
                    checkFormValidity();
                });
            });

            // Vérifier la validité du formulaire
            function checkFormValidity() {
                const paymentMethodSelected = document.querySelector('input[name="payment_method"]:checked')
            }

            // Animation au chargement
            paymentCards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    card.style.transition = 'all 0.5s ease';

                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, 50);
                }, index * 100);
            });
        });
    </script>
@endsection
