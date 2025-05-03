<x-guest-layout>
    <div class="d-flex justify-content-center align-items-center">
        <div class="card shadow-sm border-0" style="max-width: 400px; width: 100%;">
            <div class="card-body p-4">
                <h4 class="card-title text-center mb-4">Masuk</h4>

                <!-- Session Status -->
                <x-auth-session-status class="alert alert-success mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-3">
                        <x-input-label for="email" :value="__('Email')" class="form-label" />
                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="text-danger small mt-1" />
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <x-input-label for="password" :value="__('Password')" class="form-label" />
                        <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="text-danger small mt-1" />
                    </div>

                    <!-- Remember Me -->
                    <div class="mb-3 form-check">
                        <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                        <label for="remember_me" class="form-check-label">
                            Ingatkan saya
                        </label>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        @if (Route::has('password.request'))
                            <a class="text-decoration-none small text-muted" href="{{ route('password.request') }}">
                                Reset Password
                            </a>
                        @endif

                        <x-primary-button class="btn btn-primary">
                            Masuk
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
