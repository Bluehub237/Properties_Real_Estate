<x-guest-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-white">
                        <h5 class="mb-0">{{ __('Reset Password') }}</h5>
                    </div>

                    <div class="card-body">
                        <p class="text-muted mb-4">
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </p>

                        <!-- Session Status -->
                        <x-auth-session-status class="alert alert-success" :status="session('status')" />

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="mb-3">
                                <x-input-label for="email" :value="__('Email')" class="form-label" />
                                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                <x-input-error :messages="$errors->get('email')" class="text-danger small mt-1" />
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Email Password Reset Link') }}
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="card-footer text-muted">
                        <a href="{{ route('login') }}" class="link-secondary">{{ __('Back to login') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
