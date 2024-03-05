<x-guest-layout>
    <div class="login-container">
        <div class="login-form">
            <div class="logo d-flex justify-content-center py-3">
                <a href="/">
                    <img class="logo-img" src="{{ asset('bookshare-logo.png') }}" alt="Brand logo">
                </a>
            </div>
            <div class="login-form-inner p-3 rounded d-flex justify-content-center flex-column">
                <h1 class="text-center">Login</h1>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="login-form-group">

                        <label for="email">Email <span class="required-star">*</span></label>
                        <input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" placeholder="Email" required autofocus
                            autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    </div>
                    <div class="login-form-group">
                        <label for="pwd">Password <span class="required-star">*</span></label>
                        <x-text-input id="password pwd" class="block mt-1 w-full" type="password" name="password" placeholder="Password"
                            required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="login-form-group single-row">
                        <div class="custom-check">
                            <input autocomplete="off" name="remember" type="checkbox"
                                id="remember remember_me"><label for="remember">Remember
                                me</label>
                        </div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="link forgot-link">Forgot Password ?</a>
                        @endif
                    </div>
                    <button type="submit" class="login-submit">login</button>
                    <div class="register-div d-flex justify-content-center align-items-center py-3">Not Registered? <a href="{{ route('register') }}" class="link create-account px-1"
                            -link>Create
                            an account ?</a></div>

                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
