@extends('template.house2_new')

@section('title')
    Housa - > Admin Dashboard Property
@endsection
@section('style')
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugins/admin.css">

    <style>
        .actions {
            display: flex;
            gap: 8px;
            align-items: center;
            flex-wrap: wrap;
        }

        .actions a,
        .actions button {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 14px;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            font-size: 13px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .actions .show {
            background-color: #e3f2fd;
            color: #1976d2;
            border: 1px solid #90caf9;
        }

        .actions .show:hover {
            background-color: #1976d2;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(25, 118, 210, 0.3);
        }

        .actions .modify {
            background-color: #fff3e0;
            color: #f57c00;
            border: 1px solid #ffb74d;
        }

        .actions .modify:hover {
            background-color: #f57c00;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(245, 124, 0, 0.3);
        }

        .actions .delete {
            background-color: #ffebee;
            color: #d32f2f;
            border: 1px solid #ef5350;
        }

        .actions .delete:hover {
            background-color: #d32f2f;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(211, 47, 47, 0.3);
        }

        .actions svg {
            width: 16px;
            height: 16px;
        }

        .property-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
            gap: 36px;
            margin-bottom: 36px;
        }

        .property-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(237, 132, 56, 0.10);
            overflow: hidden;
            transition: box-shadow 0.3s, transform 0.3s;
            display: flex;
            flex-direction: column;
            position: relative;
            border: 1.5px solid #f5f5f5;
        }

        .property-card:hover {
            box-shadow: 0 12px 40px rgba(237, 132, 56, 0.22);
            transform: translateY(-4px) scale(1.02);
            border-color: #ED8438;
        }

        .property-image {
            position: relative;
            width: 100%;
            height: 220px;
            overflow: hidden;
            background: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .property-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-bottom: 3px solid #ED8438;
            transition: filter 0.3s;
        }

        .property-card:hover .property-image img {
            filter: brightness(0.95) saturate(1.1);
        }

        .status-badge {
            top: 18px;
            left: 18px;
            background: linear-gradient(90deg, #ED8438 60%, #d97633 100%);
            color: #fff;
            padding: 8px 22px;
            border-radius: 24px;
            font-size: 13px;
            font-weight: 800;
            text-transform: uppercase;
            box-shadow: 0 2px 12px rgba(237, 132, 56, 0.18);
            letter-spacing: 1px;
            border: 2px solid #fff;
        }

        .status-badge.rent {
            background: linear-gradient(90deg, #10b981 60%, #34d399 100%);
        }

        .status-badge.pending {
            background: linear-gradient(90deg, #f57c00 60%, #ffb74d 100%);
        }

        .property-details {
            padding: 28px 24px 22px 24px;
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .property-title {
            font-size: 20px;
            font-weight: 800;
            color: #ED8438;
            margin-bottom: 6px;
            letter-spacing: 0.5px;
        }

        .property-address {
            font-size: 14px;
            color: #888;
            margin-bottom: 10px;
        }

        .property-price {
            font-size: 22px;
            font-weight: 800;
            color: #10b981;
            margin-bottom: 12px;

        }

        .property-info {
            display: flex;
            gap: 28px;
            list-style: none;
            padding: 0;
            margin: 0 0 12px 0;
        }

        .property-info li {
            font-size: 14px;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .property-info strong {
            font-size: 16px;
            color: #ED8438;
            font-weight: 800;
        }

        .actions {
            display: flex;
            gap: 16px;
            margin-top: 14px;
        }

        .actions a,
        .actions button {
            padding: 10px 22px;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 700;
            border: none;
            cursor: pointer;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            box-shadow: 0 2px 8px rgba(237, 132, 56, 0.08);
        }

        .actions .show {
            background: #e3f2fd;
            color: #1976d2;
            border: 1.5px solid #90caf9;
        }

        .actions .show:hover {
            background: #1976d2;
            color: #fff;
        }

        .actions .modify {
            background: #fff3e0;
            color: #f57c00;
            border: 1.5px solid #ffb74d;
        }

        .actions .modify:hover {
            background: #f57c00;
            color: #fff;
        }

        .actions .delete {
            background: #ffebee;
            color: #d32f2f;
            border: 1.5px solid #ef5350;
        }

        .actions .delete:hover {
            background: #d32f2f;
            color: #fff;
        }

        @media (max-width: 900px) {
            .property-grid {
                grid-template-columns: 1fr;
            }

            .property-image {
                height: 180px;
            }

            .property-details {
                padding: 18px 12px 14px 12px;
            }
        }
    </style>
@endsection
@section('content')
    <div class="main-content-wrapper" style="margin-top: 0;">
        <!--===== STAT CARDS START =======-->
        <div class="container-fluid">
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon blue">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z" />
                        </svg>
                    </div>
                    <div class="stat-info">
                        <h3>Total properties</h3>
                        <p>{{ $total ?? 0 }}</p>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon orange">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                        </svg>
                    </div>
                    <div class="stat-info">
                        <h3>Pending</h3>
                        <p>{{ $pending ?? 0 }}</p>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon green">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                        </svg>
                    </div>
                    <div class="stat-info">
                        <h3>Rented</h3>
                        <p>{{ $rent ?? 0 }}</p>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
        </div>
        <!--===== STAT CARDS ENDS =======-->
        <!--===== DASHBOARD AREA STARTS =======-->
        <div class="dashboard-section-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="space30"></div>
                        <div class="dashboad-all-details-section">
                            <h3>Properties list</h3>
                            <div class="row">
                                <div class="space20"></div>
                                <div class="table-container">
                                    <!-- Header -->
                                    <div class="table-header">
                                        <div>Listing</div>
                                        <div>Status</div>
                                        <div>Action</div>
                                    </div>
                                    <!-- Row 1 -->
                                    @foreach ($properties as $property)
                                        <div class="table-row">
                                            <div class="property-tab-boxarea">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-6">
                                                        <div class="img1 image-anime">
                                                            <img src="{{ asset('storage/' . json_decode($property->photos)[0]) }}"
                                                                alt="housa">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="content-tab-area">
                                                            <div class="property-price">
                                                                <div class="text">
                                                                    <a href="#"
                                                                        class="title">{{ $property->title }}</a>
                                                                    <div class="space16"></div>
                                                                    <p>{{ $property->address }}, {{ $property->city }}</p>
                                                                </div>
                                                                <a href="#"
                                                                    class="price">{{ number_format($property->price, 0, ',', ' ') }}
                                                                    FCFA</a>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="property-other-widget">
                                                                <ul>
                                                                    <li><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path d="M8 9H16M8 15H16" stroke="#1B1B1B"
                                                                                    stroke-width="1.5"
                                                                                    stroke-linejoin="round" />
                                                                                <path d="M3 21H21V3.00046L3 3V21Z"
                                                                                    stroke="#1B1B1B" stroke-width="1.5"
                                                                                    stroke-linejoin="round" />
                                                                            </svg></span>{{ $property->lot_size }} m²</li>
                                                                    <li><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path d="M22 17.5H2" stroke="#1B1B1B"
                                                                                    stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M22 21V16C22 14.1144 22 13.1716 21.4142 12.5858C20.8284 12 19.8856 12 18 12H6C4.11438 12 3.17157 12 2.58579 12.5858C2 13.1716 2 14.1144 2 16V21"
                                                                                    stroke="#1B1B1B" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M16 12V10.6178C16 10.1103 15.9085 9.94054 15.4396 9.7405C14.4631 9.32389 13.2778 9 12 9C10.7222 9 9.53688 9.32389 8.5604 9.7405C8.09154 9.94054 8 10.1103 8 10.6178V12"
                                                                                    stroke="#1B1B1B" stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                                <path
                                                                                    d="M20 12V7.36057C20 6.66893 20 6.32311 19.8292 5.99653C19.6584 5.66995 19.4151 5.50091 18.9284 5.16283C16.9661 3.79978 14.5772 3 12 3C9.42282 3 7.03391 3.79978 5.07163 5.16283C4.58492 5.50091 4.34157 5.66995 4.17079 5.99653C4 6.32311 4 6.66893 4 7.36057V12"
                                                                                    stroke="#1B1B1B" stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                            </svg></span>{{ $property->bedrooms }} Beds
                                                                    </li>
                                                                    <li><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path d="M6 20L5 21M18 20L19 21"
                                                                                    stroke="#1B1B1B" stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                                <path
                                                                                    d="M3 12V13C3 16.2998 3 17.9497 4.02513 18.9749C5.05025 20 6.70017 20 10 20H14C17.2998 20 18.9497 20 19.9749 18.9749C21 17.9497 21 16.2998 21 13V12"
                                                                                    stroke="#1B1B1B" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path d="M2 12H22" stroke="#1B1B1B"
                                                                                    stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                                <path
                                                                                    d="M4 12V5.5234C4 4.12977 5.12977 3 6.5234 3C7.64166 3 8.62654 3.73598 8.94339 4.80841L9 5"
                                                                                    stroke="#1B1B1B" stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                                <path d="M8 6L10.5 4" stroke="#1B1B1B"
                                                                                    stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                            </svg></span>{{ $property->bathrooms }} Baths
                                                                    </li>
                                                                </ul>
                                                                <div class="space24"></div>
                                                                <div class="btn-area">
                                                                    <div class="name-area">
                                                                        <div class="img">
                                                                            <img src="/assets/img/all-images/others/others-img1.png"
                                                                                alt="housa">
                                                                        </div>
                                                                        <div class="text">
                                                                            <a href="#">{{ $property->user->first_name }} {{ $property->user->last_name }}</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="status">
                                                <a href="#"
                                                    class="status-badge {{ $property->status }}">{{ $property->status }}</a>
                                            </div>
                                            <div class="actions">
                                                <a href="{{ route('property.show', $property) }}" class="show"
                                                    title="Afficher détails">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor">
                                                        <path
                                                            d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5C21.27 7.61 17 4.5 12 4.5zm0 11.5c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z">
                                                        </path>
                                                    </svg>
                                                    Voir
                                                </a>

                                                <a href="{{ route('property.edit', $property) }}" class="modify"
                                                    title="Modifier propriété">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor">
                                                        <path
                                                            d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04a1 1 0 0 0 0-1.41l-2.34-2.34a1 1 0 0 0-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z">
                                                        </path>
                                                    </svg>
                                                    Éditer
                                                </a>

                                                <form action="{{ route('property.destroy', $property) }}" method="POST"
                                                    style="display:inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" style="justify-content: center;"
                                                        class="delete"
                                                        onclick="return confirm('Êtes-vous certain de vouloir supprimer cette propriété ?')"
                                                        title="Supprimer propriété">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor">
                                                            <path
                                                                d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z">
                                                            </path>
                                                        </svg>
                                                        Supprimer
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-lg-12">
                                    <div class="pagination-area" style="text-align: center;">
                                        {{ $properties->links('pagination::bootstrap-4') }}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===== DASHBOARD AREA ENDS =======-->
        <div class="space30"></div>
    @endsection
