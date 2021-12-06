<x-guest-layout>
    <main class="form-signin">
        <img class="mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Forget Password</h1>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
        
            <!-- Email Address -->
            <div class="form-floating"> 
                <input type="email" name="email" :value="old('email')" class="form-control" id="floatingInputEmail" placeholder="name@example.com"  required autofocus >
                <label for="floatingInputEmail">Email address</label>
            </div>
            <!-- Password -->
            <div class="form-floating"> 
                <input type="password" 
                 name="password"
                 class="form-control" id="floatingPassword" placeholder="Password" required autocomplete="current-password">
                <label for="floatingPassword">Password</label>
            </div>
            <!-- Confirm Password -->
            <div class="form-floating"> 
                <input type="password" 
                name="password_confirmation"
                 class="form-control" id="floatingPassword" placeholder="password confirmation" required autocomplete="current-password">
                <label for="floatingPassword">Confirm Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">{{ __('{{ __('Reset Password') }}') }}</button>
        </form>
    </main>
</x-guest-layout>
