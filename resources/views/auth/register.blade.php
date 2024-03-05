<x-guest-layout>
    <div class="login-container">
        <div class="login-form">
            <div class="logo d-flex justify-content-center py-3">
                <a href="/">
                    <img class="logo-img" src="{{ asset('bookshare-logo.png') }}" alt="Brand logo">
                </a>
            </div>
            <div class="login-form-inner p-3 rounded d-flex justify-content-center flex-column">
                <h1 class="text-center">Register</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="login-form-group">
                        <label for="name">Name <span class="required-star">*</span></label>
                        <input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" placeholder="Name" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="login-form-group">
                        <label for="email">Email <span class="required-star">*</span></label>
                        <input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" placeholder="Email" required autofocus autocomplete="email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    </div>
                    <div class="login-form-group">
                        <label for="password pwd">Password <span class="required-star">*</span></label>
                        <x-text-input id="password pwd" class="block mt-1 w-full" type="password" name="password"
                            placeholder="Password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="login-form-group">
                        <label for="password_confirmation">Password Confirmation<span class="required-star">*</span></label>
                        <x-text-input id="password_confirmation pwd" class="block mt-1 w-full" type="password"
                            name="password_confirmation" placeholder="Password Confirmation" required
                            autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <button type="submit" class="login-submit">Register</button>
                    <div class="register-div d-flex justify-content-center align-items-center py-3">Already
                        registered?<a href="{{ route('login') }}" class="link create-account px-1" -link>Login</a></div>
                </form>
            </div>
        </div>
    </div>

</x-guest-layout>
