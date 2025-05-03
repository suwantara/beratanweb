<x-guest-layout>
    <div class="d-flex justify-content-center align-items-center">
        <div class="card shadow-sm border-0" style="max-width: 400px; width: 100%;">
            <div class="card-body p-4">
                <h4 class="card-title text-center mb-4">Daftar</h4>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div class="mb-3">
                        <x-input-label for="name" :value="__('Name')" class="form-label" />
                        <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="text-danger small mt-1" />
                    </div>

                    <!-- Email Address -->
                    <div class="mb-3">
                        <x-input-label for="email" :value="__('Email')" class="form-label" />
                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="text-danger small mt-1" />
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <x-input-label for="password" :value="__('Password')" class="form-label" />
                        <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="text-danger small mt-1" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="form-label" />
                        <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger small mt-1" />
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <a class="text-decoration-none small text-muted" href="{{ route('login') }}">
                            Sudah punya akun? Masuk
                        </a>

                        <x-primary-button class="btn btn-primary">
                            Daftar
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
