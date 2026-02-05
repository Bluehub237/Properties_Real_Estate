<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Contrat de location - {{ $contrat->reference ?? 'N/A' }}</title>
    <style>
        /* Reset */
        * { box-sizing: border-box; font-family: DejaVu Sans, Arial, Helvetica, sans-serif; }
        body { margin: 0; padding: 0 28px; color: #222; font-size: 12px; line-height: 1.45; }
        header { padding: 18px 0; border-bottom: 2px solid #0b4a6f; display:flex; justify-content:space-between; align-items:center; }
        .brand { display:flex; gap:12px; align-items:center; }
        .brand img { height:48px; object-fit:contain; }
        .brand h1 { margin:0; font-size:18px; color:#0b4a6f; }
        .meta { text-align:right; font-size:11px; color:#555; }
        .meta .ref { font-weight:700; color:#0b4a6f; font-size:13px; }

        main { padding: 18px 0; }
        .section { margin-bottom:14px; }
        .title { background:#0b4a6f; color:#fff; padding:8px 10px; font-weight:700; font-size:13px; border-radius:4px; display:inline-block; margin-bottom:10px; }
        .two-col { display:flex; gap:18px; }
        .col { flex:1; }
        table.info { width:100%; border-collapse:collapse; margin-top:8px; }
        table.info td, table.info th { padding:6px 8px; vertical-align:top; border:1px solid #e6e6e6; }
        table.info th { background:#f5f7f8; text-align:left; width:30%; }

        .clauses { font-size:12px; margin-top:6px; }
        .clauses ol { padding-left:18px; margin:6px 0; }
        .money { color:#0b4a6f; font-weight:700; }

        footer { position:fixed; bottom:18px; left:28px; right:28px; font-size:10px; color:#777; border-top:1px dashed #ddd; padding-top:8px; display:flex; justify-content:space-between; }
        .signatures { display:flex; gap:24px; margin-top:22px; }
        .sig-box { width:48%; border:1px solid #e1e1e1; padding:10px; text-align:center; border-radius:6px; }
        .sig-img { max-height:80px; display:block; margin:6px auto; object-fit:contain; }
        .sig-line { margin-top:18px; border-top:1px solid #bbb; width:80%; margin-left:auto; margin-right:auto; padding-top:6px; color:#333; font-weight:600; }
        .note { font-size:11px; color:#555; margin-top:6px; }

        @page { margin: 20mm 10mm; }
    </style>
</head>
<body>
    <header>
        <div class="brand">
            @if(config('app.logo'))
                <img src="{{ asset(config('app.logo')) }}" alt="Logo">
            @endif
            <div>
                <h1>{{ config('app.name', 'Gestion Immobilière') }}</h1>
                <div style="font-size:11px;color:#555;">Contrat de location</div>
            </div>
        </div>

        <div class="meta">
            <div class="ref">Réf : {{ $contrat->reference ?? '—' }}</div>
            <div>Lieu : {{ $property->city ?? ($property->neighborhood ?? ' ') }}</div>
            <div>Date : {{ now()->format('d/m/Y') }}</div>
        </div>
    </header>

    <main>
        <div class="section">
            <div class="title">Résumé du contrat</div>
            <table class="info">
                <tr>
                    <th>Propriétaire</th>
                    <td>
                        {{ $owner->first_name }} {{ $owner->last_name ?? ' ' }}<br>
                        Téléphone: {{ $owner->phone ?? '—' }}<br>
                        Email: {{ $owner->email ?? '—' }}
                    </td>
                    <th>Locataire</th>
                    <td>
                        {{ $tenant->first_name }} {{ $tenant->last_name ?? ' ' }}<br>
                        Téléphone: {{ $tenant->phone ?? '—' }}<br>
                        Email: {{ $tenant->email ?? '—' }}
                    </td>
                </tr>
                <tr>
                    <th>Bien loué</th>
                    <td colspan="3">
                        {{ $property->category ?? '—' }} — {{ $property->address ?? ' ' }}<br>
                        Surface: {{ $property->lot_size ?? '—' }} m²
                    </td>
                </tr>
                <tr>
                    <th>Durée</th>
                    <td>{{ $property->months ?? '—' }} mois</td>
                    <th>Montant</th>
                    <td class="money">{{ number_format($property->price ?? 0, 0, ',', ' ') }} FCFA / mois</td>
                </tr>
                <tr>
                    <th>Dépôt de garantie</th>
                    <td>{{ number_format($property->deposit ?? 0, 0, ',', ' ') }} FCFA</td>
                    <th>Échéance</th>
                    <td>{{ $contrat->end_date->format('d/m/Y') ?? ' ' }}</td>
                </tr>
            </table>
        </div>

        <div class="section">
            <div class="title">Clauses principales</div>
            <div class="clauses">
                <ol>
                    <li>Le locataire s'engage à payer le loyer mensuel en temps et en heure.</li>
                    <li>Le dépôt de garantie sera restitué selon l'état des lieux de sortie.</li>
                    <li>L'entretien courant du bien est à la charge du locataire.</li>
                    <li>Les travaux de réparation structurelle sont à la charge du propriétaire.</li>
                    <li>Résiliation anticipée : préavis de 1 mois par écrit.</li>
                </ol>
                @if(!empty($contrat->terms))
                    <div class="note">Clauses additionnelles : {{ $contrat->terms }}</div>
                @endif
            </div>
        </div>

        <div class="section">
            <div class="title">État des lieux & Observations</div>
            <div class="note">
                {{ 'Aucune observation déclarée.' }}
            </div>
        </div>

        <div class="section">
            <div class="title">Signatures</div>

            <div class="signatures">
                <div class="sig-box">
                    <strong>Le Propriétaire</strong>
                    @if(!empty($contrat->owner_signature))
                        <img class="sig-img" src="{{ \Illuminate\Support\Facades\Storage::url($contrat->owner_signature) }}" alt="Signature propriétaire">
                    @else
                        <div style="height:86px;"></div>
                    @endif
                    <div class="sig-line">{{ $owner->first_name }} {{ $owner->last_name ?? '—' }}</div>
                    <div style="font-size:11px;color:#666;margin-top:6px;">Date : {{ $contrat->start_date->format('d/m/Y') ?? '____/__/__' }}</div>
                </div>

                <div class="sig-box">
                    <strong>Le Locataire</strong>
                    @if(!empty($contrat->tenant_signature))
                        <img class="sig-img" src="{{ \Illuminate\Support\Facades\Storage::url($contrat->tenant_signature) }}" alt="Signature locataire">
                    @else
                        <div style="height:86px;"></div>
                    @endif
                    <div class="sig-line">{{ $tenant->first_name }} {{ $tenant->last_name ?? '—' }}</div>
                    <div style="font-size:11px;color:#666;margin-top:6px;">Date : {{ $contrat->signed_at->format('d/m/Y') ?? '____/__/__' }}</div>
                </div>
            </div>
        </div>

    </main>

    <footer>
        <div>Contrat généré par {{ config('app.name', 'Gestion Immobilière') }}</div>
        <div>Réf: {{ $contrat->reference ?? ' ' }} • Page <span class="page">1</span></div>
    </footer>
</body>
</html>
