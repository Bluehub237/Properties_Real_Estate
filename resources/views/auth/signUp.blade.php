<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Housa - Créer un compte</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 40px 20px;
        }

        .auth-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            max-width: 600px;
            width: 100%;
        }

        .auth-header {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            padding: 50px 40px;
            text-align: center;
            color: white;
        }

        .logo {
            width: 90px;
            height: 90px;
            background: white;
            border-radius: 20px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .logo i {
            font-size: 45px;
            color: #FF6B35;
        }

        .auth-header h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .auth-body {
            padding: 50px 40px;
        }

        .form-label {
            font-weight: 500;
            color: #333;
            margin-bottom: 8px;
        }

        .form-control {
            border-radius: 10px;
            padding: 14px 20px;
            border: 2px solid #e0e0e0;
            transition: all 0.3s;
            font-size: 15px;
        }

        .form-control:focus {
            border-color: #FF6B35;
            box-shadow: 0 0 0 0.2rem rgba(255, 107, 53, 0.25);
        }

        .input-group-text {
            border-radius: 10px 0 0 10px;
            border: 2px solid #e0e0e0;
            border-right: none;
            background: #f8f9fa;
        }

        .input-group .form-control {
            border-left: none;
            border-radius: 0 10px 10px 0;
        }

        .input-group:focus-within .input-group-text {
            border-color: #FF6B35;
        }

        .btn-primary {
            background: linear-gradient(135deg, #FF6B35 0%, #F7931E 100%);
            border: none;
            border-radius: 10px;
            padding: 14px;
            font-weight: 600;
            font-size: 16px;
            transition: transform 0.2s;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(255, 107, 53, 0.3);
            background: linear-gradient(135deg, #ED8438 0%, #FF6B35 100%);
        }

        .social-btn {
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            padding: 12px;
            width: 65px;
            height: 65px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
            background: white;
            color: #666;
            text-decoration: none;
            margin: 0 8px;
            font-size: 20px;
        }

        .social-btn:hover {
            border-color: #FF6B35;
            color: #FF6B35;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .divider {
            text-align: center;
            margin: 35px 0;
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
            padding: 0 20px;
            position: relative;
            color: #999;
            font-size: 14px;
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
            margin-top: 25px;
            padding-top: 25px;
            border-top: 1px solid #e0e0e0;
        }

        .password-strength {
            height: 5px;
            margin-top: 8px;
            border-radius: 3px;
            background: #e0e0e0;
        }

        .password-strength-bar {
            height: 100%;
            border-radius: 3px;
            transition: all 0.3s;
            width: 0%;
        }

        .strength-weak {
            background: #dc3545;
            width: 33%;
        }

        .strength-medium {
            background: #ffc107;
            width: 66%;
        }

        .strength-strong {
            background: #28a745;
            width: 100%;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .auth-header {
                padding: 40px 30px;
            }

            .auth-header h2 {
                font-size: 1.6rem;
            }

            .auth-body {
                padding: 40px 30px;
            }

            .logo {
                width: 75px;
                height: 75px;
            }

            .logo i {
                font-size: 35px;
            }

            .social-btn {
                width: 55px;
                height: 55px;
                margin: 0 5px;
                font-size: 18px;
            }
        }

        @media (max-width: 576px) {
            .auth-header {
                padding: 35px 25px;
            }

            .auth-body {
                padding: 35px 25px;
            }

            body {
                padding: 20px 15px;
            }
        }

        @media (min-width: 992px) {
            .auth-card {
                max-width: 650px;
            }

            .auth-body {
                padding: 60px 50px;
            }
        }
    </style>
</head>

<body>
    <div style="transform: scale(0.85); transform-origin: top center; display: inline-block;">
        <div class="auth-card">
            <div class="auth-header">
                <div class="logo">
                    <i class="fas fa-home"></i>
                </div>
                <h2 class="mb-2">Housa</h2>
                <p class="mb-0">Rejoignez notre communauté</p>
            </div>

            <div class="auth-body">
                <h4 class="text-center mb-3" style="color: #333; font-weight: 600;">Créer un compte</h4>
                <p class="text-center text-muted mb-4">Commencez votre aventure avec nous</p>

                <form id="registerForm" method="POST" action="{{ route('register.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <label for="firstName" class="form-label">Prénom</label>
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                name="first_name" id="firstName" value="{{ old('first_name') }}" placeholder="Jean"
                                required autofocus autocomplete="given-name">
                            @error('first_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="lastName" class="form-label">Nom</label>
                            <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                name="last_name" id="lastName" value="{{ old('last_name') }}" placeholder="Dupont"
                                required autocomplete="family-name">
                            @error('last_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" id="email" value="{{ old('email') }}" placeholder="votre@email.com"
                                required autofocus autocomplete="username">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="phone" class="form-label">Téléphone</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                name="phone" id="phone" value="{{ old('phone') }}"
                                placeholder="+237 6XX XX XX XX" required autocomplete="tel">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Mot de passe</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" id="password" value="{{ old('password') }}"
                                placeholder="Créez un mot de passe sécurisé" required autocomplete="new-password">
                            <button type="button" id="togglePassword" class="input-group-text"
                                title="Afficher / Masquer le mot de passe"
                                onclick="(function(){ const p=document.getElementById('password'); const i=this.querySelector('i'); if(p.type==='password'){ p.type='text'; i.classList.remove('fa-eye'); i.classList.add('fa-eye-slash'); } else { p.type='password'; i.classList.remove('fa-eye-slash'); i.classList.add('fa-eye'); } }).call(this)">
                                <i class="fas fa-eye" aria-hidden="true"></i>
                            </button>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="password-strength">
                            <div class="password-strength-bar" id="strengthBar"></div>
                        </div>
                        <small class="text-muted">Au moins 8 caractères avec lettres et chiffres</small>
                    </div>

                    <div class="mb-4">
                        <label for="confirmPassword" class="form-label">Confirmer le mot de passe</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation" value="{{ old('password_confirmation') }}" id="confirmPassword"
                                placeholder="Confirmez votre mot de passe" required autocomplete="new-password">
                            @error('password_confirmation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="terms" required>
                        <label class="form-check-label" for="terms">
                            J'accepte les <a href="#" class="link-primary">conditions d'utilisation</a> et la <a
                                href="#" class="link-primary">politique de confidentialité</a>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        <i class="fas fa-user-plus me-2"></i>Créer mon compte
                    </button>
                </form>

                <div class="divider">
                    <span>OU s'inscrire avec</span>
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
                    <span class="text-muted">Vous avez déjà un compte? </span>
                    <a href="{{ route('login') }}" class="link-primary">Se connecter</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        // Indicateur de force du mot de passe
        document.getElementById('password').addEventListener('input', function(e) {
            const password = e.target.value;
            const strengthBar = document.getElementById('strengthBar');

            let strength = 0;
            if (password.length >= 8) strength++;
            if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength++;
            if (/\d/.test(password)) strength++;
            if (/[^a-zA-Z0-9]/.test(password)) strength++;

            strengthBar.className = 'password-strength-bar';
            if (strength >= 1 && strength <= 2) {
                strengthBar.classList.add('strength-weak');
            } else if (strength === 3) {
                strengthBar.classList.add('strength-medium');
            } else if (strength >= 4) {
                strengthBar.classList.add('strength-strong');
            }
        });

        // Validation du formulaire
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            function showToast(message, type = 'info') {
                let container = document.getElementById('toastContainer');
                if (!container) {
                    container = document.createElement('div');
                    container.id = 'toastContainer';
                    container.style.position = 'fixed';
                    container.style.top = '20px';
                    container.style.right = '20px';
                    container.style.zIndex = '1080';
                    document.body.appendChild(container);
                }

                const wrapper = document.createElement('div');
                wrapper.innerHTML = `
                    <div class="toast align-items-center text-bg-${type} border-0" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="d-flex">
                            <div class="toast-body">${message}</div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                    </div>
                `;
                const toastEl = wrapper.firstElementChild;
                container.appendChild(toastEl);

                const bsToast = new bootstrap.Toast(toastEl, { delay: 3000 });
                toastEl.addEventListener('hidden.bs.toast', function() {
                    toastEl.remove();
                    if (!container.querySelector('.toast')) container.remove();
                });
                bsToast.show();
            }

            if (password !== confirmPassword) {
                showToast('Les mots de passe ne correspondent pas!', 'danger');
                return;
            }

            if (password.length < 8) {
                showToast('Le mot de passe doit contenir au moins 8 caractères!', 'warning');
                return;
            }

            showToast('Inscription réussie! Bienvenue sur Housa.', 'success');

            // Soumettre réellement le formulaire après une courte pause pour laisser l'alerte s'afficher
            setTimeout(() => this.submit(), 2000);
        });
    </script>
</body>

</html>
