@extends('template.house2_new')

@section('title', ' Housa - Visit Dashboard')

@section('style')
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugins/admin.css">
@endsection

@section('content')
        <div class="main-content-wrapper" style="margin-top: 0; display: flex; ">
            <div class="row" style="width: 100%; max-width: 1100px; font-family: 'Inter', 'Segoe UI', Arial, sans-serif;">
                <div class="col-lg-12">
                    <main class="main-content" style="font-family: inherit;">
                        <div class="page-header"
                            style="margin-bottom: 32px; padding: 24px 0; border-bottom: 1px solid #f3f4f6; font-family: inherit;">
                            <h1
                                style="font-size: 2.2rem; font-weight: 700; color: #1e293b; margin-bottom: 8px; font-family: inherit;">
                                Gestion des Visites <span style="font-size:1.5rem;">📅</span>
                            </h1>
                            <p style="font-size: 1.1rem; color: #64748b; margin-bottom: 0; font-family: inherit;">
                                Gérez les demandes et le planning des visites des propriétés
                            </p>
                        </div>

                        <!-- Stat Cards -->
                        <div class="stats-grid"
                            style="display: flex; gap: 24px; margin-bottom: 32px; font-family: inherit; flex-wrap: wrap;">
                            <div class="stat-card"
                                style="flex:1 1 220px; min-width:220px; background:#fff; border-radius:12px; box-shadow:0 2px 8px rgba(0,0,0,0.05); padding:24px; display:flex; align-items:center; margin-bottom:16px;">
                                <div style="flex:1;">
                                    <div style="font-size:1.1rem; color:#64748b; margin-bottom:6px;">Total Visites</div>
                                    <div style="font-size:2rem; font-weight:700; color:#2563eb;">{{ $totalVisits }}</div>
                                </div>
                                <div style="margin-left:16px;">
                                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="1.5">
                                        <rect x="3" y="4" width="18" height="18" rx="2" stroke="#e0e7ff"></rect>
                                        <path d="M8 2v4" stroke="#2563eb"></path>
                                        <path d="M16 2v4" stroke="#2563eb"></path>
                                        <path d="M3 10h18" stroke="#2563eb"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="stat-card"
                                style="flex:1 1 220px; min-width:220px; background:#fff; border-radius:12px; box-shadow:0 2px 8px rgba(0,0,0,0.05); padding:24px; display:flex; align-items:center; margin-bottom:16px;">
                                <div style="flex:1;">
                                    <div style="font-size:1.1rem; color:#64748b; margin-bottom:6px;">Visites à venir</div>
                                    <div style="font-size:2rem; font-weight:700; color:#16a34a;">{{ $upcomingVisits }}</div>
                                </div>
                                <div style="margin-left:16px;">
                                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="1.5">
                                        <circle cx="12" cy="12" r="9" stroke="#bbf7d0"></circle>
                                        <path d="M12 7v6l4 2" stroke="#16a34a"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="stat-card"
                                style="flex:1 1 220px; min-width:220px; background:#fff; border-radius:12px; box-shadow:0 2px 8px rgba(0,0,0,0.05); padding:24px; display:flex; align-items:center; margin-bottom:16px;">
                                <div style="flex:1;">
                                    <div style="font-size:1.1rem; color:#64748b; margin-bottom:6px;">Visites effectuées</div>
                                    <div style="font-size:2rem; font-weight:700; color:#f59e42;">{{ $completedVisits }}</div>
                                </div>
                                <div style="margin-left:16px;">
                                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#f59e42" stroke-width="1.5">
                                        <circle cx="12" cy="12" r="9" stroke="#fde68a"></circle>
                                        <path d="M9 12l2 2 4-4" stroke="#f59e42"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="stat-card"
                                style="flex:1 1 220px; min-width:220px; background:#fff; border-radius:12px; box-shadow:0 2px 8px rgba(0,0,0,0.05); padding:24px; display:flex; align-items:center; margin-bottom:16px;">
                                <div style="flex:1;">
                                    <div style="font-size:1.1rem; color:#64748b; margin-bottom:6px;">Visites annulées</div>
                                    <div style="font-size:2rem; font-weight:700; color:#ef4444;">{{ $canceledVisits }}</div>
                                </div>
                                <div style="margin-left:16px;">
                                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="1.5">
                                        <circle cx="12" cy="12" r="9" stroke="#fecaca"></circle>
                                        <path d="M9 9l6 6M15 9l-6 6" stroke="#ef4444"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- End Stat Cards -->
                        @if (session('success'))
                            <div id="right-success-toast"
                                style="position:fixed;top:24px;right:24px;z-index:99999;min-width:260px;max-width:360px;background:#d1fae5;color:#065f46;padding:14px 18px;border-radius:10px;box-shadow:0 8px 24px rgba(2,6,23,0.08);display:flex;align-items:center;gap:12px;font-weight:600;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10b981"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M9 12l2 2 4-4"></path>
                                </svg>
                                <div style="flex:1;line-height:1.1;">{{ session('success') }}</div>
                                <button type="button"
                                    onclick="document.getElementById('right-success-toast').style.display='none'"
                                    aria-label="Fermer"
                                    style="background:transparent;border:none;color:inherit;font-size:18px;cursor:pointer;padding:0 6px;">&times;</button>
                            </div>
                            <script>
                                (function() {
                                    const toast = document.getElementById('right-success-toast');
                                    if (!toast) return;
                                    // Auto hide after 3.5s
                                    setTimeout(() => {
                                        if (toast) toast.style.display = 'none';
                                    }, 3500);
                                    // Pause hide on hover
                                    toast.addEventListener('mouseenter', () => clearTimeout(toast._hideTimeout));
                                    toast.addEventListener('mouseleave', () => {
                                        toast._hideTimeout = setTimeout(() => {
                                            toast.style.display = 'none';
                                        }, 2000);
                                    });
                                })();
                            </script>
                        @endif
                        <div class="card" style="font-family: inherit;">
                            <div class="card-header"
                                style="font-family: inherit; display: flex; flex-wrap: wrap; align-items: center;">
                                <h2 style="font-family: inherit; margin-bottom:8px;">Liste des Visites</h2>
                                <a href="#" class="btn-primary"
                                    style="background: linear-gradient(90deg, #6366f1 0%, #2563eb 100%);
                                           color: #fff;
                                           font-weight: 600;
                                           font-size: 1.05rem;
                                           padding: 10px 22px;
                                           border: none;
                                           margin-left: auto;
                                           border-radius: 8px;
                                           box-shadow: 0 2px 8px rgba(99,102,241,0.08);
                                           transition: background 0.2s, box-shadow 0.2s;
                                           cursor: pointer;
                                           font-family: inherit;
                                           margin-top:8px; text-decoration:none;">
                                    <svg width="18" height="18" fill="none" stroke="currentColor"
                                        style="vertical-align:middle;margin-right:8px;">
                                        <path d="M9 4v10M4 9h10" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    Nouvelle Visite
                                </a>
                            </div>

                            <div class="table-responsive table-container"
                                style="background: #fff; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); padding: 0; font-family: inherit; overflow-x:auto;">
                                <table class="table table-hover align-middle"
                                    style="width: 100%; border-collapse: separate; border-spacing: 0; font-family: inherit; min-width:700px;">
                                    <thead style="background: #f8f9fa; font-family: inherit;">
                                        <tr>
                                            <th style="padding: 16px;">Propriété</th>
                                            <th style="padding: 16px;">Visiteur</th>
                                            <th style="padding: 16px;">Téléphone</th>
                                            <th style="padding: 16px;">Date & Heure</th>
                                            <th style="padding: 16px;">Statut</th>
                                            <th style="padding: 16px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="visitTable">
                                        @forelse ($visits as $visit)
                                            <tr style="border-bottom: 1px solid #eee;">
                                                <td style="padding: 14px 16px;">
                                                    <div style="display:flex;align-items:center;">
                                                        <div>
                                                            <span style="font-weight:600;color:#495057;">
                                                                {{ ($visit->property)->title ?? '—' }}
                                                            </span>
                                                            <div style="font-size:0.9rem;color:#6b7280;">{{ ($visit->property)->city ?? '' }}</div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td style="padding: 14px 16px;">
                                                    <span style="color:#374151;">
                                                        {{ ($visit->user->first_name ?? '') . ' ' . ($visit->user->last_name ?? '') }}
                                                    </span>
                                                </td>

                                                <td style="padding: 14px 16px;">
                                                    <span style="color:#6c757d;">{{ ($visit->user->phone ?? '—') }}</span>
                                                </td>

                                                <td style="padding: 14px 16px;">
                                                    <span style="color:#374151;">
                                                        {{ ($visit->visit_datetime) ? \Carbon\Carbon::parse($visit->visit_datetime)->format('d/m/Y H:i') : '—' }}
                                                    </span>
                                                </td>

                                                <td style="padding: 14px 16px;">
                                                    @php
                                                        $status = strtolower($visit->status ?? 'pending');
                                                        $badgeColor = match($status) {
                                                            'confirmed' => ['#ecfdf5','#16a34a'],
                                                            'pending' => ['#fff7ed','#f59e42'],
                                                            'cancelled'  => ['#fff1f2','#ef4444'],
                                                            default     => ['#eef2ff','#4338ca'],
                                                        };
                                                    @endphp
                                                    <span class="badge"
                                                        style="background: {{ $badgeColor[0] }}; color: {{ $badgeColor[1] }}; padding: 6px 12px; border-radius: 8px; font-size: 0.95em;">
                                                        {{ ucfirst($status) }}
                                                    </span>
                                                </td>

                                                <td style="padding: 14px 16px;">
                                                    <button type="button" class="btn-edit"
                                                        onclick="openEditVisitModal({{ $visit->id }})"
                                                        style="background:#eef2ff;color:#4338ca;border:none;padding:6px 12px;border-radius:6px;cursor:pointer;">
                                                        Modifier
                                                    </button>

                                                    <form action="{{ route('visits.destroy', $visit->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            onclick="return confirm('Supprimer définitivement la visite ?')"
                                                            title="Supprimer la visite "
                                                            style="background:#fee2e2;color:#b91c1c;border:none;padding:6px 10px;border-radius:6px;cursor:pointer;">
                                                            Supprimer
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>

                                            <!-- Edit / Reschedule Modal -->
                                            <div id="editVisitModal-{{ $visit->id }}" class="edit-visit-modal"
                                                style="display:none;position:fixed;inset:0;background:rgba(0,0,0,0.5);align-items:center;justify-content:center;z-index:9999;">
                                                <form action="{{ route('visits.update', $visit->id) }}" method="POST" style="width:80%;max-width:420px;">
                                                    @csrf
                                                    @method('PUT')
                                                    <div style="background:#fff;border-radius:10px;padding:18px;width:94%;box-shadow:0 8px 24px rgba(0,0,0,0.12);">
                                                        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:12px;">
                                                            <h3 style="margin:0;font-size:1.05rem;">Valider la visite</h3>
                                                            <button type="button" onclick="closeEditVisitModal({{ $visit->id }})"
                                                                style="background:transparent;border:none;font-size:1.2rem;cursor:pointer;">&times;</button>
                                                        </div>

                                                        <div style="margin-bottom:10px;">
                                                            <label style="display:block;margin-bottom:6px;color:#374151;font-weight:600;font-size:0.9rem;">Date & Heure</label>
                                                            <input type="datetime-local" name="scheduled_at"
                                                                value="{{ \Carbon\Carbon::parse($visit->scheduled_at)->format('Y-m-d\TH:i') }}"
                                                                style="width:100%;padding:8px;border:1px solid #e5e7eb;border-radius:6px;">
                                                        </div>

                                                        <div style="margin-bottom:10px;">
                                                            <label style="display:block;margin-bottom:6px;color:#374151;font-weight:600;font-size:0.9rem;">Role :</label>
                                                            <select name="status" style="width:100%;padding:8px;border:1px solid #e5e7eb;border-radius:6px;">
                                                                <option value="pending" {{ $visit->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                                <option value="confirmed" {{ $visit->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                                                <option value="cancelled" {{ $visit->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                                            </select>
                                                        </div>

                                                        <div style="display:flex;gap:8px;justify-content:flex-end;">
                                                            <button type="button" onclick="closeEditVisitModal({{ $visit->id }})"
                                                                style="background:#f3f4f6;border:none;padding:8px 12px;border-radius:6px;cursor:pointer;">Annuler</button>
                                                            <button type="submit"
                                                                style="background:#2563eb;color:#fff;border:none;padding:8px 12px;border-radius:6px;cursor:pointer;">Enregistrer</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        @empty
                                            <tr>
                                                <td colspan="6" style="text-align:center;padding:24px;color:#888;">
                                                    Aucune visite trouvée.
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <script>
                            function openEditVisitModal(id) {
                                const el = document.getElementById('editVisitModal-' + id);
                                if (el) el.style.display = 'flex';
                            }
                            function closeEditVisitModal(id) {
                                const el = document.getElementById('editVisitModal-' + id);
                                if (el) el.style.display = 'none';
                            }
                        </script>

                        <div class="col-lg-12">
                            <div class="pagination-area" style="text-align: center;">
                                {{ $visits->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    <style>
        @media (max-width: 900px) {
            .main-content-wrapper {
                margin-top: 0;
                display: block !important;
                padding: 0 8px;
            }

            .row {
                max-width: 100% !important;
                width: 100% !important;
                padding: 0 !important;
            }

            .stats-grid {
                flex-direction: column !important;
                gap: 16px !important;
            }

            .stat-card {
                min-width: 0 !important;
                width: 100% !important;
                margin-bottom: 0 !important;
            }

            .card-header {
                flex-direction: column !important;
                align-items: flex-start !important;
            }

            .btn-primary {
                margin-left: 0 !important;
                margin-top: 12px !important;
                width: 100%;
            }

            .table-container {
                overflow-x: auto !important;
            }

            table {
                min-width: 500px !important;
            }
        }

        @media (max-width: 600px) {
            .page-header h1 {
                font-size: 1.3rem !important;
            }

            .page-header p {
                font-size: 1rem !important;
            }

            .stat-card {
                padding: 16px !important;
            }

            .card-header h2 {
                font-size: 1.1rem !important;
            }

            .btn-primary {
                font-size: 0.95rem !important;
                padding: 8px 12px !important;
            }

            table th,
            table td {
                padding: 8px !important;
                font-size: 0.95em !important;
            }
        }
    </style>
@endsection

@section('script')

@endsection
