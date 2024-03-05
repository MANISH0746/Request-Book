<x-guest-layout>
    <div class="login-container">
        <div class="login-form">
            <div class="logo d-flex justify-content-center py-3">
                <a href="/">
                    <img class="logo-img" src="{{ asset('bookshare-logo.png') }}" alt="Brand logo">
                </a>
            </div>

            <div class="login-form-inner p-3 rounded d-flex justify-content-center flex-column">
                <h1 class="text-center">Forgot Password?</h1>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('No worries, we will send you reset instructions.') }}
                </div>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="login-form-group">

                        <label for="email">Email <span class="required-star">*</span></label>
                        <input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" placeholder="email@website.com" required autofocus
                            autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    </div>
                    <button type="submit" class="login-submit">Email Password Reset Link</button>
                    <div class="register-div d-flex justify-content-center align-items-center py-3">Back to login:<a
                        href="{{ route('login') }}" class="link create-account px-1" -link>Login</a></div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
