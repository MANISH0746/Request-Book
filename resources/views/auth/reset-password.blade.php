<x-guest-layout>

    <div class="login-container">
        <div class="login-form">
            <div class="logo d-flex justify-content-center py-3">
                <a href="/">
                    <img class="logo-img" src="{{ asset('bookshare-logo.png') }}" alt="Brand logo">
                </a>
            </div>
            <div class="login-form-inner p-3 rounded d-flex justify-content-center flex-column">
                <h1 class="text-center">Password Reset</h1>
                <form method="POST" action="{{ route('password.store') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

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
                        <label for="password_confirmation">Password Confirmation<span
                                class="required-star">*</span></label>
                        <x-text-input id="password_confirmation pwd" class="block mt-1 w-full" type="password"
                            name="password_confirmation" placeholder="Password Confirmation" required
                            autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <button type="submit" class="login-submit">Reset Password</button>
                </form>
            </div>
        </div>
    </div>

    {{--  <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>  --}}
</x-guest-layout>
