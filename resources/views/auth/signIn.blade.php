<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Housa - Connexion</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
        }

        .auth-card {
            background: white;
            border-radius: 18px;
            box-shadow: 0 18px 45px rgba(0, 0, 0, 0.25);
            overflow: hidden;
            max-width: 380px;
            /* Reduced width */
            width: 100%;
        }

        .auth-header {
            background: linear-gradient(135deg, #ED8438 0%, #FF6B35 100%);
            padding: 32px 24px;
            /* Reduced vertical and horizontal padding to shorten height */
            text-align: center;
            color: white;
        }

        .logo {
            width: 70px;
            /* Reduced */
            height: 70px;
            /* Reduced */
            background: white;
            border-radius: 16px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 14px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        }

        .logo i {
            font-size: 36px;
            /* Reduced */
            color: #FF6B35;
        }

        .auth-header h2 {
            font-size: 1.6rem;
            /* Reduced */
            font-weight: 700;
            margin-bottom: 6px;
        }

        .auth-body {
            padding: 28px 24px;
            /* Reduced to shorten overall form height */
        }

        .form-label {
            font-weight: 500;
            color: #333;
            margin-bottom: 6px;
        }

        .form-control {
            border-radius: 10px;
            padding: 12px 16px;
            /* Slightly reduced */
            border: 2px solid #e0e0e0;
            transition: all 0.3s;
            font-size: 14px;
        }

        .form-control:focus {
            border-color: #FF6B35;
            box-shadow: 0 0 0 0.18rem rgba(255, 107, 53, 0.18);
        }

        .btn-primary {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-weight: 600;
            font-size: 15px;
            transition: transform 0.15s;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(255, 107, 53, 0.24);
            background: linear-gradient(135deg, #F7931E 0%, #FF6B35 100%);
        }

        .social-btn {
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            padding: 10px;
            width: 56px;
            /* Reduced */
            height: 56px;
            /* Reduced */
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all 0.25s;
            background: white;
            color: #666;
            text-decoration: none;
            margin: 0 6px;
            font-size: 18px;
            /* Reduced */
        }

        .social-btn:hover {
            border-color: #FF6B35;
            color: #FF6B35;
            transform: translateY(-2px);
            box-shadow: 0 5px 12px rgba(0, 0, 0, 0.08);
        }

        .divider {
            text-align: center;
            margin: 22px 0;
            /* Reduced vertical spacing */
            position: relative;
        }

        .divider::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            height: 1px;
            background: #e0e0e0;
        }

        .divider span {
            background: white;
            padding: 0 14px;
            /* Reduced padding */
            position: relative;
            color: #999;
            font-size: 13px;
            /* Slightly smaller */
        }

        .form-check-input:checked {
            background-color: #FF6B35;
            border-color: #FF6B35;
        }

        .link-primary {
            color: #FF6B35;
            text-decoration: none;
            font-weight: 500;
        }

        .link-primary:hover {
            color: #F7931E;
        }

        .page-switch {
            text-align: center;
            margin-top: 18px;
            /* Reduced */
            padding-top: 18px;
            /* Reduced */
            border-top: 1px solid #e0e0e0;
        }

        /* Responsive Design */
        @media (max-width: 576px) {
            .auth-card {
                max-width: 340px;
                /* Reduced on small screens */
            }

            .auth-header {
                padding: 26px 18px;
            }

            .auth-header h2 {
                font-size: 1.4rem;
            }

            .auth-body {
                padding: 20px 18px;
            }

            .logo {
                width: 60px;
                height: 60px;
            }

            .logo i {
                font-size: 30px;
            }

            .social-btn {
                width: 48px;
                height: 48px;
                margin: 0 4px;
                font-size: 16px;
            }
        }

        @media (min-width: 992px) {
            .auth-card {
                max-width: 420px;
                /* Slightly larger on wide screens but still reduced overall */
            }
        }
    </style>
</head>

<body>
    <div class="auth-card">
        <div class="auth-header">
            <div class="logo">
                <i class="fas fa-home"></i>
            </div>
            <h2 class="mb-2">Housa</h2>
            <p class="mb-0">Trouvez votre maison idéale</p>
        </div>

        <div class="auth-body">
            <h4 class="text-center mb-3" style="color: #333; font-weight: 600;">Connexion</h4>
            <p class="text-center text-muted mb-4">Entrez vos identifiants pour accéder à votre espace</p>

            <form id="loginForm" method="POST" action="{{ route('login.store') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" placeholder="votre@email.com" required autofocus autocomplete="username">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                        id="password" placeholder="Entrez votre mot de passe" required autocomplete="current-password">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember" name="remember">
                        <label class="form-check-label" for="remember">
                            Se souvenir de moi
                        </label>
                    </div>
                    <a href="{{ route('password.request') }}" class="link-primary">Mot de passe oublié?</a>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    <i class="fas fa-sign-in-alt me-2"></i>Se connecter
                </button>
            </form>

            <div class="divider">
                <span>OU continuer avec</span>
            </div>

            <div class="text-center">
                <a href="#" class="social-btn">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-btn">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-btn">
                    <i class="fab fa-github"></i>
                </a>
            </div>

            <div class="page-switch">
                <span class="text-muted">Vous n'avez pas de compte? </span>
                <a href="{{ route('register') }}" class="link-primary">Créer un compte</a>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
