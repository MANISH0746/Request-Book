<x-guest-layout>
    <div class="login-container">
        <div class="login-form">
            <div class="logo d-flex justify-content-center py-3">
                <a href="/">
                    <img class="logo-img" src="{{ asset('bookshare-logo.png') }}" alt="Brand logo">
                </a>
            </div>

            <div class="login-form-inner p-3 rounded d-flex justify-content-center flex-column">
                <h1 class="text-center">Confirm Password</h1>
                <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                </div>
                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf
                    <div class="login-form-group">

                        <label for="pwd">Password <span class="required-star">*</span></label>
                        <x-text-input id="password pwd" class="block mt-1 w-full" type="password" name="password" placeholder="Password"
                            required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    </div>
                    <button type="submit" class="login-submit">current-password</button>
                    <div class="register-div d-flex justify-content-center align-items-center py-3">Back to login:<a
                        href="{{ route('login') }}" class="link create-account px-1" -link>Login</a></div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
