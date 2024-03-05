<x-guest-layout>

    <div class="login-container">
        <div class="login-form">
            <div class="logo d-flex justify-content-center py-3">
                <a href="/">
                    <img class="logo-img" src="{{ asset('bookshare-logo.png') }}" alt="Brand logo">
                </a>
            </div>

            <div class="login-form-inner p-3 rounded d-flex justify-content-center flex-column">
                <h1 class="text-center">Verify Email</h1>
                <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </div>
                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm alert alert-success">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif
                <div class="mt-4 d-flex justify-content-center gap-2">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                            <button type="submit" class="login-submit">Resend Link</button>
                    </form>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="login-submit">Log Out</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
