@extends('template.house2_new')

@section('title', ' Housa - Users Dashboard')

@section('style')
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugins/admin.css">
@endsection

@section('content')
    <div class="bbo" style=" margin-left: 200px; transition: margin-left 0.3s;">
        <div class="main-content-wrapper" style="margin-top: 0; display: flex; justify-content: center;">
            <div class="row" style="width: 100%; max-width: 1100px; font-family: 'Inter', 'Segoe UI', Arial, sans-serif;">
                <div class="col-lg-12">
                    <main class="main-content" style="font-family: inherit;">
                        <div class="page-header"
                            style="margin-bottom: 32px; padding: 24px 0; border-bottom: 1px solid #f3f4f6; font-family: inherit;">
                            <h1
                                style="font-size: 2.2rem; font-weight: 700; color: #1e293b; margin-bottom: 8px; font-family: inherit;">
                                Gestion des Utilisateurs <span style="font-size:1.5rem;">👋</span>
                            </h1>
                            <p style="font-size: 1.1rem; color: #64748b; margin-bottom: 0; font-family: inherit;">
                                Gérez tous vos utilisateurs de la plateforme immobilière
                            </p>
                        </div>

                        <!-- Stat Cards -->
                        <div class="stats-grid"
                            style="display: flex; gap: 24px; margin-bottom: 32px; font-family: inherit; flex-wrap: wrap;">
                            <div class="stat-card"
                                style="flex:1 1 220px; min-width:220px; background:#fff; border-radius:12px; box-shadow:0 2px 8px rgba(0,0,0,0.05); padding:24px; display:flex; align-items:center; margin-bottom:16px;">
                                <div style="flex:1;">
                                    <div style="font-size:1.1rem; color:#64748b; margin-bottom:6px;">Total Utilisateurs
                                    </div>
                                    <div style="font-size:2rem; font-weight:700; color:#2563eb;">{{ $totalUsers }}</div>
                                </div>
                                <div style="margin-left:16px;">
                                    <svg width="36" height="36" fill="none" stroke="#2563eb" stroke-width="2">
                                        <circle cx="18" cy="18" r="16" stroke="#e0e7ff" stroke-width="2" />
                                        <path
                                            d="M18 22c-4 0-6 2-6 4v2h12v-2c0-2-2-4-6-4zm0-2a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="stat-card"
                                style="flex:1 1 220px; min-width:220px; background:#fff; border-radius:12px; box-shadow:0 2px 8px rgba(0,0,0,0.05); padding:24px; display:flex; align-items:center; margin-bottom:16px;">
                                <div style="flex:1;">
                                    <div style="font-size:1.1rem; color:#64748b; margin-bottom:6px;">bailleurs</div>
                                    <div style="font-size:2rem; font-weight:700; color:#16a34a;">{{ $bailleurs }}</div>
                                </div>
                                <div style="margin-left:16px;">
                                    <svg width="36" height="36" fill="none" stroke="#16a34a" stroke-width="2">
                                        <circle cx="18" cy="18" r="16" stroke="#bbf7d0" stroke-width="2" />
                                        <path
                                            d="M18 22c-4 0-6 2-6 4v2h12v-2c0-2-2-4-6-4zm0-2a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="stat-card"
                                style="flex:1 1 220px; min-width:220px; background:#fff; border-radius:12px; box-shadow:0 2px 8px rgba(0,0,0,0.05); padding:24px; display:flex; align-items:center; margin-bottom:16px;">
                                <div style="flex:1;">
                                    <div style="font-size:1.1rem; color:#64748b; margin-bottom:6px;">locataires</div>
                                    <div style="font-size:2rem; font-weight:700; color:#f59e42;">{{ $locataires }}</div>
                                </div>
                                <div style="margin-left:16px;">
                                    <svg width="36" height="36" fill="none" stroke="#f59e42" stroke-width="2">
                                        <circle cx="18" cy="18" r="16" stroke="#fde68a" stroke-width="2" />
                                        <path
                                            d="M18 22c-4 0-6 2-6 4v2h12v-2c0-2-2-4-6-4zm0-2a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="stat-card"
                                style="flex:1 1 220px; min-width:220px; background:#fff; border-radius:12px; box-shadow:0 2px 8px rgba(0,0,0,0.05); padding:24px; display:flex; align-items:center; margin-bottom:16px;">
                                <div style="flex:1;">
                                    <div style="font-size:1.1rem; color:#64748b; margin-bottom:6px;">Administrateurs</div>
                                    <div style="font-size:2rem; font-weight:700; color:#0ea5e9;">{{ $administrateurs }}
                                    </div>
                                </div>
                                <div style="margin-left:16px;">
                                    <svg width="36" height="36" fill="none" stroke="#0ea5e9" stroke-width="2">
                                        <circle cx="18" cy="18" r="16" stroke="#bae6fd" stroke-width="2" />
                                        <path
                                            d="M18 22c-4 0-6 2-6 4v2h12v-2c0-2-2-4-6-4zm0-2a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
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
                                <h2 style="font-family: inherit; margin-bottom:8px;">Liste des Utilisateurs</h2>
                                <button class="btn-primary"
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
                                       margin-top:8px;">
                                    <svg width="18" height="18" fill="none" stroke="currentColor"
                                        style="vertical-align:middle;margin-right:8px;">
                                        <path d="M9 4v10M4 9h10" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <a href="#" style="color:inherit;text-decoration:none;">
                                        Nouvel Utilisateur
                                    </a>
                                </button>
                            </div>

                            <div class="table-responsive table-container"
                                style="background: #fff; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); padding: 0; font-family: inherit; overflow-x:auto;">
                                <table class="table table-hover align-middle"
                                    style="width: 100%; border-collapse: separate; border-spacing: 0; font-family: inherit; min-width:600px;">
                                    <thead style="background: #f8f9fa; font-family: inherit;">
                                        <tr>
                                            <th style="padding: 16px;">Noms</th>
                                            <th style="padding: 16px;">Email</th>
                                            <th style="padding: 16px;">Rôle</th>
                                            <th style="padding: 16px;">Téléphone</th>
                                            <th style="padding: 16px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="userTable">
                                        @forelse ($users as $user)
                                            <tr style="border-bottom: 1px solid #eee;">
                                                <td style="padding: 14px 16px;">
                                                    <div style="display: flex; align-items: center;">
                                                        <div>
                                                            <span
                                                                style="font-weight:600;color:#495057;">{{ $user->first_name }}
                                                                {{ $user->last_name }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="padding: 14px 16px;">
                                                    <span style="color:#6c757d;">{{ $user->email }}</span>
                                                </td>
                                                <td style="padding: 14px 16px;">
                                                    <span class="badge"
                                                        style="background: #e0e7ff; color: #4338ca; padding: 6px 12px; border-radius: 8px; font-size: 0.95em;">
                                                        {{ ucfirst($user->rule) }}
                                                    </span>
                                                </td>
                                                <td style="padding: 14px 16px;">
                                                    <span>{{ $user->phone }}</span>
                                                </td>

                                                <td style="padding: 14px 16px; display: flex; gap: 8px;">
                                                    <button type="button" class="btn-edit"
                                                        onclick="openEditModal({{ $user->id }})"
                                                        style="background:#f3f4f6;color:#2563eb;border:none;padding:6px 14px;border-radius:6px;margin-right:6px;cursor:pointer;">
                                                        <svg width="16" height="16" fill="none"
                                                            stroke="currentColor"
                                                            style="vertical-align:middle;margin-right:4px;">
                                                            <path
                                                                d="M12.3 2.3a1 1 0 0 1 1.4 1.4l-8.6 8.6a1 1 0 0 1-.3.2l-2 1a1 1 0 0 1-1.3-1.3l1-2a1 1 0 0 1 .2-.3l8.6-8.6z" />
                                                        </svg>
                                                        Éditer
                                                    </button>

                                                    <!-- Edit Modal (AJAX form to avoid nested <form> inside delete form) -->
                                                    <div id="editModal-{{ $user->id }}" class="edit-modal"
                                                        style="display:none;position:fixed;inset:0;background:rgba(0,0,0,0.5);align-items:center;justify-content:center;z-index:9999;">
                                                         <form action="{{ route('users.update', $user->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div
                                                            style="background:#fff;border-radius:10px;padding:18px;max-width:520px;width:94%;box-shadow:0 8px 24px rgba(0,0,0,0.12);">
                                                            <div
                                                                style="display:flex;align-items:center;justify-content:space-between;margin-bottom:12px;">
                                                                <h3 style="margin:0;font-size:1.05rem;">Modifier
                                                                    l'utilisateur</h3>
                                                                <button type="button"
                                                                    onclick="closeEditModal({{ $user->id }})"
                                                                    style="background:transparent;border:none;font-size:1.2rem;cursor:pointer;">&times;</button>
                                                            </div>

                                                            <div
                                                                style="display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-bottom:10px;">
                                                                <input type="text" id="first_name_{{ $user->id }}"
                                                                    name="first_name" placeholder="Prénom"
                                                                    value="{{ $user->first_name }}"
                                                                    style="padding:8px;border:1px solid #e5e7eb;border-radius:6px;">
                                                                <input type="text" id="last_name_{{ $user->id }}"
                                                                    name="last_name" placeholder="Nom"
                                                                    value="{{ $user->last_name }}"
                                                                    style="padding:8px;border:1px solid #e5e7eb;border-radius:6px;">
                                                            </div>

                                                            <div
                                                                style="display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-bottom:10px;">
                                                                <input type="email" id="email_{{ $user->id }}"
                                                                    name="email" placeholder="Email"
                                                                    value="{{ $user->email }}"
                                                                    style="padding:8px;border:1px solid #e5e7eb;border-radius:6px;">
                                                                <input type="text" id="phone_{{ $user->id }}"
                                                                    name="phone" placeholder="Téléphone"
                                                                    value="{{ $user->phone }}"
                                                                    style="padding:8px;border:1px solid #e5e7eb;border-radius:6px;">
                                                            </div>

                                                            <div style="margin-bottom:12px;">
                                                                <label for="rule_{{ $user->id }}"
                                                                    style="display:block;margin-bottom:6px;color:#374151;font-weight:600;font-size:0.9rem;">Rôle</label>
                                                                <select id="rule_{{ $user->id }}" name="rule"
                                                                    style="width:100%;padding:8px;border:1px solid #e5e7eb;border-radius:6px;">
                                                                    <option value="admin"
                                                                        {{ $user->rule === 'admin' ? 'selected' : '' }}>
                                                                        Administrateur</option>
                                                                    <option value="bailleur"
                                                                        {{ $user->rule === 'bailleur' ? 'selected' : '' }}>
                                                                        Bailleur</option>
                                                                    <option value="locataire"
                                                                        {{ $user->rule === 'locataire' ? 'selected' : '' }}>
                                                                        Locataire</option>
                                                                </select>
                                                            </div>

                                                            <div style="display:flex;gap:8px;justify-content:flex-end;">
                                                                <button type="button"
                                                                    onclick="closeEditModal({{ $user->id }})"
                                                                    style="background:#f3f4f6;border:none;padding:8px 12px;border-radius:6px;cursor:pointer;">Annuler</button>
                                                                <button type="submit"
                                                                    style="background:#2563eb;color:#fff;border:none;padding:8px 12px;border-radius:6px;cursor:pointer;">Enregistrer</button>
                                                            </div>
                                                        </div>
                                                        </form>
                                                    </div>

                                                    <script>
                                                        function openEditModal(id) {
                                                            var modal = document.getElementById('editModal-' + id);
                                                            if (modal) modal.style.display = 'flex';
                                                        }

                                                        function closeEditModal(id) {
                                                            var modal = document.getElementById('editModal-' + id);
                                                            if (modal) modal.style.display = 'none';
                                                        }
                                                    </script>
                                                    <form action="{{ route('users.destroy', $user->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn-delete" type="submit"
                                                            onclick="return confirm('Êtes-vous certain de vouloir supprimer cet utilisateur ?')"
                                                            title="Supprimer utilisateur"
                                                            style="background:#fee2e2;color:#b91c1c;border:none;padding:6px 14px;border-radius:6px;cursor:pointer;">
                                                            <svg width="16" height="16" fill="none"
                                                                stroke="currentColor"
                                                                style="vertical-align:middle;margin-right:4px;">
                                                                <path
                                                                    d="M6 2h4m-7 4h10m-1 10a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6h8v10z" />
                                                            </svg>
                                                            Supprimer
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" style="text-align:center;padding:24px;color:#888;">
                                                    Aucun
                                                    utilisateur trouvé.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="pagination-area" style="text-align: center;">
                                {{ $users->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                        @if (session('success'))
                            <div id="success-toast"
                                style="position:fixed;top:32px;right:32px;z-index:9999;min-width:260px;max-width:350px;background:#d1fae5;color:#065f46;padding:16px 24px;border-radius:10px;box-shadow:0 2px 12px rgba(0,0,0,0.08);font-weight:600;font-size:1.05rem;display:flex;align-items:center;gap:12px;">
                                <svg width="22" height="22" fill="none" stroke="#10b981" stroke-width="2"
                                    style="flex-shrink:0;">
                                    <circle cx="11" cy="11" r="10" stroke="#10b981" stroke-width="2" />
                                    <path d="M7 11l2 2 4-4" stroke="#10b981" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <span>{{ session('success') }}</span>
                            </div>
                            <script>
                                setTimeout(function() {
                                    var toast = document.getElementById('success-toast');
                                    if (toast) toast.style.display = 'none';
                                }, 3500);
                            </script>
                        @endif
                    </main>
                </div>
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
