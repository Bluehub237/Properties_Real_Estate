@extends('template.house')

@section('title', 'Contrat de Location - KNHousa')

@section('style')
    <style>
        .contract-container {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .contract-header {
            background: linear-gradient(135deg, #ED8438 0%, #f59e0b 100%);
            padding: 40px;
            color: white;
            border-bottom: 4px solid #c2410c;
        }

        .contract-number {
            background: rgba(255, 255, 255, 0.2);
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            display: inline-block;
        }

        .contract-body {
            padding: 40px;
        }

        .party-box {
            background: #f8fafc;
            border-radius: 12px;
            padding: 24px;
            border-left: 4px solid #ED8438;
            margin-bottom: 24px;
        }

        .party-box.tenant {
            border-left-color: #3b82f6;
            background: #eff6ff;
        }

        .property-details {
            background: linear-gradient(135deg, #fff7ed 0%, #eff6ff 100%);
            border-radius: 12px;
            padding: 24px;
            margin: 24px 0;
        }

        .detail-item {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .detail-item:last-child {
            border-bottom: none;
        }

        .detail-label {
            color: #6b7280;
            font-weight: 500;
        }

        .detail-value {
            color: #1f2937;
            font-weight: 600;
        }

        .contract-terms {
            background: #f9fafb;
            border-radius: 12px;
            padding: 24px;
            margin: 24px 0;
        }

        .contract-terms p {
            margin-bottom: 16px;
            line-height: 1.8;
            color: #374151;
        }

        .signature-section {
            border-top: 3px solid #e5e7eb;
            padding-top: 32px;
            margin-top: 32px;
        }

        .signature-box {
            background: #f8fafc;
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 20px;
        }

        .signature-box.landlord {
            border: 2px solid #3b82f6;
        }

        .signature-box.tenant {
            border: 2px solid #ED8438;
        }

        .signature-canvas {
            width: 100%;
            height: 180px;
            border: 2px dashed #d1d5db;
            border-radius: 8px;
            background: white;
            cursor: crosshair;
            display: block;
        }

        .signature-canvas:hover {
            border-color: #ED8438;
        }

        .landlord-signature {
            width: 100%;
            height: 180px;
            border: 2px solid #3b82f6;
            border-radius: 8px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .signature-line {
            stroke: #1e40af;
            stroke-width: 2.5;
            fill: none;
            stroke-linecap: round;
        }

        .validated-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #10b981;
            color: white;
            padding: 4px 12px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .btn-clear {
            background: #ef4444;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
            margin-top: 12px;
            transition: all 0.3s;
        }

        .btn-clear:hover {
            background: #dc2626;
        }

        .btn-validate {
            background: #ED8438;
            color: white;
            border: none;
            padding: 16px 32px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            width: 100%;
            margin-bottom: 12px;
        }

        .btn-validate:hover {
            background: #c2410c;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(237, 132, 56, 0.3);
        }

        .btn-validate:disabled {
            background: #10b981;
            cursor: not-allowed;
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

        .icon-inline {
            display: inline-block;
            width: 20px;
            height: 20px;
            vertical-align: middle;
            margin-right: 8px;
        }

        @media print {

            .btn-clear,
            .btn-validate,
            .btn-download {
                display: none;
            }
        }
    </style>
@endsection

@section('content')
    <div class="dashboard-inner-area-section section-padding2" style="margin-top: 150px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contract-container">
                        <!-- En-tête du contrat -->
                        <div class="contract-header">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h1 class="mb-2" style="font-size: 32px; font-weight: 700;">
                                        <i class="fa-solid fa-file-contract icon-inline"></i>
                                        Contrat de Location
                                    </h1>
                                    <span class="contract-number">
                                        N° {{ $contrat->reference ?? 'KNH-2025-001234' }}
                                    </span>
                                </div>
                                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                    <p class="mb-1" style="opacity: 0.9;">Date d\'émission</p>
                                    <h5 style="font-weight: 600;">
                                        {{ $contrat->start_date->format('d F Y') ?? '01 Décembre 2025' }}
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <!-- Corps du contrat -->
                        <div class="contract-body">
                            <!-- Parties du contrat -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="party-box">
                                        <h4 style="color: #3b82f6; margin-bottom: 20px;">
                                            <i class="fa-solid fa-user-tie icon-inline"></i>
                                            Le Bailleur
                                        </h4>
                                        <p style="font-weight: 600; font-size: 18px; margin-bottom: 12px;">
                                            {{ $owner->first_name }} {{ $owner->last_name ?? 'Jean Baptiste KUATE' }}
                                        </p>
                                        <p style="margin-bottom: 8px;">
                                            <i class="fa-solid fa-location-dot"
                                                style="color: #3b82f6; margin-right: 8px;"></i>
                                            {{ $owner->address ?? 'Douala, Akwa' }}
                                        </p>
                                        <p style="margin-bottom: 8px;">
                                            <i class="fa-solid fa-phone" style="color: #3b82f6; margin-right: 8px;"></i>
                                            {{ $owner->phone ?? '+237 682 885 515' }}
                                        </p>
                                        <p style="margin-bottom: 0;">
                                            <i class="fa-solid fa-envelope" style="color: #3b82f6; margin-right: 8px;"></i>
                                            {{ $owner->email ?? 'kuatenael62@gmail.com' }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="party-box tenant">
                                        <h4 style="color: #ED8438; margin-bottom: 20px;">
                                            <i class="fa-solid fa-user icon-inline"></i>
                                            Le Locataire
                                        </h4>
                                        <p style="font-weight: 600; font-size: 18px; margin-bottom: 12px;">
                                            {{ $tenant->first_name }} {{ $tenant->last_name ?? 'Marie NGONO' }}
                                        </p>
                                        <p style="margin-bottom: 8px;">
                                            <i class="fa-solid fa-location-dot"
                                                style="color: #ED8438; margin-right: 8px;"></i>
                                            {{ $tenant->address ?? 'Douala, Bonabéri' }}
                                        </p>
                                        <p style="margin-bottom: 8px;">
                                            <i class="fa-solid fa-phone" style="color: #ED8438; margin-right: 8px;"></i>
                                            {{ $tenant->phone ?? '+237 690 123 456' }}
                                        </p>
                                        <p style="margin-bottom: 0;">
                                            <i class="fa-solid fa-envelope" style="color: #ED8438; margin-right: 8px;"></i>
                                            {{ $tenant->email ?? 'marie.ngono@email.com' }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Détails du bien -->
                            <div class="property-details">
                                <h4 style="margin-bottom: 24px; color: #1f2937;">
                                    <i class="fa-solid fa-building icon-inline"></i>
                                    Bien Immobilier Loué
                                </h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="detail-item">
                                            <span class="detail-label">Type de bien</span>
                                            <span
                                                class="detail-value">{{ $property->category ?? 'Appartement 3 pièces' }}</span>
                                        </div>
                                        <div class="detail-item">
                                            <span class="detail-label">Loyer mensuel</span>
                                            <span class="detail-value"
                                                style="color: #ED8438;">{{ number_format($property->price ?? 150000, 0, ',', ' ') }}
                                                FCFA</span>
                                        </div>
                                        <div class="detail-item">
                                            <span class="detail-label">Date de début</span>
                                            <span
                                                class="detail-value">{{ $contrat->start_date ?? '01 Janvier 2026' }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="detail-item">
                                            <span class="detail-label">Adresse</span>
                                            <span
                                                class="detail-value">{{ $property->address ?? 'Immeuble Sunrise, Logbessou, Douala' }}</span>
                                        </div>
                                        <div class="detail-item">
                                            <span class="detail-label">Caution</span>
                                            <span class="detail-value"
                                                style="color: #3b82f6;">{{ number_format($property->deposit ?? 300000, 0, ',', ' ') }}
                                                FCFA</span>
                                        </div>
                                        <div class="detail-item">
                                            <span class="detail-label">Durée</span>
                                            <span class="detail-value">{{ $property->months ?? '12 mois' }} Mois</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Termes et Conditions -->
                            <div class="contract-terms">
                                <h4 style="margin-bottom: 20px; color: #1f2937;">
                                    <i class="fa-solid fa-file-lines icon-inline"></i>
                                    Termes et Conditions
                                </h4>
                                <p><strong>Article 1 - Objet du contrat :</strong> Le présent contrat a pour objet la
                                    location du bien immobilier décrit ci-dessus.</p>
                                <p><strong>Article 2 - Durée :</strong> Le bail est conclu à compter du
                                    <strong>{{ $contrat->start_date->format('d F Y') }}</strong> jusqu'au
                                    <strong>{{ optional($contrat->end_date)->format('d F Y') ?? 'À déterminer' }}</strong>.
                                </p>
                                <p><strong>Article 3 - Loyer :</strong> Le locataire s'engage à payer un loyer mensuel de
                                    <strong>{{ number_format($contrat->amount, 0, ',', ' ') }} FCFA</strong> payable le 1er
                                    de chaque mois.
                                </p>
                                <p><strong>Article 4 - Dépôt de garantie :</strong> Un dépôt de garantie de
                                    <strong>{{ number_format($contrat->deposit ?? 0, 0, ',', ' ') }} FCFA</strong> est
                                    versé à la signature du contrat.
                                </p>
                                <p><strong>Article 5 - Statut du contrat :</strong> Statut actuel : <strong
                                        style="color: #ED8438;">{{ ucfirst(str_replace('_', ' ', $contrat->status)) }}</strong>
                                </p>
                                <p style="margin-bottom: 0;"><strong>Article 6 - Conditions supplémentaires :</strong>
                                    {{ $contrat->terms ?? 'Aucune condition supplémentaire spécifiée.' }}</p>
                            </div>

                            <form id="signatureForm" method="POST" action="{{ route('contrat.validate', $contrat->id) }}">
                                @method('PUT')
                                @csrf
                                <!-- Section Signatures -->
                                <div class="signature-section">
                                    <h4 style="margin-bottom: 30px; color: #1f2937;">
                                        <i class="fa-solid fa-signature icon-inline"></i>
                                        Signatures
                                    </h4>
                                    <div class="row">
                                        <!-- Signature du Bailleur -->
                                        <div class="col-md-6">
                                            <div class="signature-box landlord">
                                                <h5 style="color: #3b82f6; margin-bottom: 16px;">Signature du Bailleur</h5>
                                                <div class="landlord-signature">
                                                    <svg width="100%" height="100%"
                                                        style="position: absolute; top: 0; left: 0;">
                                                        <path class="signature-line"
                                                            d="M 20 100 Q 50 40, 80 100 T 140 100 Q 170 70, 200 100 Q 230 50, 260 100" />
                                                    </svg>
                                                    <div class="validated-badge">
                                                        <i class="fa-solid fa-check"></i>
                                                        Validé
                                                    </div>
                                                </div>
                                                <p style="margin-top: 12px; margin-bottom: 4px; font-weight: 600;">
                                                    {{ $owner->first_name }}
                                                    {{ $owner->last_name ?? 'Jean Baptiste KUATE' }}
                                                </p>
                                                <p style="font-size: 14px; color: #6b7280; margin-bottom: 0;">
                                                    Signé le {{ $contrat->created_at ?? '02 Décembre 2025' }}
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Signature du Locataire -->
                                        <div class="col-md-6">
                                            <div class="signature-box tenant">
                                                <h5 style="color: #ED8438; margin-bottom: 16px;">Signature du Locataire</h5>
                                                <canvas id="signatureCanvas" class="signature-canvas"></canvas>
                                                <input type="hidden" id="signatureData" name="signature">
                                                <button type="button" class="btn-clear" onclick="clearSignature()">
                                                    <i class="fa-solid fa-eraser"></i> Effacer la signature
                                                </button>
                                                <p style="margin-top: 12px; margin-bottom: 4px; font-weight: 600;">
                                                    {{ $tenant->first_name }} {{ $tenant->last_name ?? 'Marie NGONO' }}
                                                </p>
                                                <p id="validatedText"
                                                    style="font-size: 14px; color: #10b981; margin-bottom: 0; display: none;">
                                                    <i class="fa-solid fa-check"></i> Validé
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Boutons d'action -->
                                    <div class="row mt-4">
                                        <div class="col-md-12 mb-6 mb-md-0">
                                            <button type="submit" id="btnValidate" class="btn-validate"
                                                onclick="validateContract()">
                                                <i class="fa-solid fa-check"></i> Valider le Contrat
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space32"></div>
@endsection

@section('script')
    <script>
        const canvas = document.getElementById('signatureCanvas');
        const ctx = canvas.getContext('2d');
        let isDrawing = false;
        let lastX = 0;
        let lastY = 0;
        let isSigned = false;

        // Ajuster la taille du canvas
        function resizeCanvas() {
            const rect = canvas.getBoundingClientRect();
            canvas.width = rect.width;
            canvas.height = rect.height;
        }

        resizeCanvas();
        window.addEventListener('resize', resizeCanvas);

        // Obtenir la position de la souris
        function getMousePos(e) {
            const rect = canvas.getBoundingClientRect();
            return {
                x: e.clientX - rect.left,
                y: e.clientY - rect.top
            };
        }

        // Commencer à dessiner
        canvas.addEventListener('mousedown', (e) => {
            isDrawing = true;
            const pos = getMousePos(e);
            lastX = pos.x;
            lastY = pos.y;
        });

        // Dessiner
        canvas.addEventListener('mousemove', (e) => {
            if (!isDrawing) return;

            const pos = getMousePos(e);

            ctx.beginPath();
            ctx.moveTo(lastX, lastY);
            ctx.lineTo(pos.x, pos.y);
            ctx.strokeStyle = '#ED8438';
            ctx.lineWidth = 2.5;
            ctx.lineCap = 'round';
            ctx.stroke();

            lastX = pos.x;
            lastY = pos.y;
        });

        // Arrêter de dessiner
        canvas.addEventListener('mouseup', () => {
            isDrawing = false;
        });

        canvas.addEventListener('mouseleave', () => {
            isDrawing = false;
        });

        // Support tactile pour mobile
        canvas.addEventListener('touchstart', (e) => {
            e.preventDefault();
            const touch = e.touches[0];
            const mouseEvent = new MouseEvent('mousedown', {
                clientX: touch.clientX,
                clientY: touch.clientY
            });
            canvas.dispatchEvent(mouseEvent);
        });

        canvas.addEventListener('touchmove', (e) => {
            e.preventDefault();
            const touch = e.touches[0];
            const mouseEvent = new MouseEvent('mousemove', {
                clientX: touch.clientX,
                clientY: touch.clientY
            });
            canvas.dispatchEvent(mouseEvent);
        });

        canvas.addEventListener('touchend', (e) => {
            e.preventDefault();
            const mouseEvent = new MouseEvent('mouseup', {});
            canvas.dispatchEvent(mouseEvent);
        });

        // Effacer la signature
        function clearSignature() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            isSigned = false;
            document.getElementById('btnValidate').disabled = false;
            document.getElementById('btnValidate').innerHTML = '<i class="fa-solid fa-check"></i> Valider le Contrat';
            document.getElementById('validatedText').style.display = 'none';
        }

        // Vérifier si le canvas est vide
        function isCanvasEmpty() {
            const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
            return !imageData.data.some(channel => channel !== 0);
        }

        function validateContract() {
            // backward-compatible call from the inline onclick
            if (isCanvasEmpty()) {
            alert('Veuillez fournir une signature avant de valider le contrat.');
            return false;
            }
            document.getElementById('signatureData').value = canvas.toDataURL('image/png');
            document.getElementById('validatedText').style.display = 'block';
            // allow submission when called directly
            return true;
        }

        // Ensure the signature is captured on form submit and block submit if empty
        document.getElementById('signatureForm').addEventListener('submit', function (e) {
            if (isCanvasEmpty()) {
            e.preventDefault();
            alert('Veuillez fournir une signature avant de valider le contrat.');
            return;
            }

            // store the PNG data URL in the hidden input so the server receives it
            document.getElementById('signatureData').value = canvas.toDataURL('image/png');

            // update UI to show the signature was validated
            document.getElementById('validatedText').style.display = 'block';
            document.getElementById('btnValidate').disabled = true;
        });

        // Keep isSigned in sync (optional visual flag)
        canvas.addEventListener('mouseup', () => {
            isSigned = !isCanvasEmpty();
        });
        canvas.addEventListener('touchend', () => {
            isSigned = !isCanvasEmpty();
        });
    </script>
@endsection
