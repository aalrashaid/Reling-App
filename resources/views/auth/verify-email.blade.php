<x-guest-layout>
    <main class="form-signin">
        <img class="mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">verify email</h1>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button class="w-100 btn btn-lg btn-primary" type="submit">{{ __('Resend Verification Email') }}</button>
            </form>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="w-100 btn btn-lg btn-primary" type="submit">{{ __('Log Out') }}</button>
            </form>
        </div>
    </main>
</x-guest-layout>
