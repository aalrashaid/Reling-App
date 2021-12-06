<x-guest-layout>
    <main class="form-signin">
        <img class="mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Forget Password</h1>

        <div class="">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>
    
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
    
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <!-- Email Address -->
            <div class="form-floating"> 
                <input type="email" name="email" :value="old('email')" class="form-control" id="floatingInputEmail" placeholder="name@example.com"  required autofocus >
                <label for="floatingInputEmail">Email address</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">{{ __('Email Password Reset Link') }}</button>
        </form>
    </main>
</x-guest-layout>
