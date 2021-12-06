<x-guest-layout>

    <main class="form-signin">
        <img class="mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
              <div class="form-floating">
                <input type="email" name="email" :value="old('email')" class="form-control" id="floatingInputEmail" placeholder="name@example.com"  required autofocus >
                <label for="floatingInputEmail">Email address</label>
              </div>
                
              <div class="form-floating">
                <input type="password" type="password"
                name="password"
                 class="form-control" id="floatingPassword" placeholder="Password" required autocomplete="current-password">
                <label for="floatingPassword">Password</label>
              </div>
          
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me">{{ __('Remember me') }}
                </label>
              </div>

               <div class="checkbox mb-3">
                @if (Route::has('password.request'))
                  <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                      {{ __('Forgot your password?') }}
                  </a>
                @endif
               </div>

               <div>
                New to Reling <a href="{{ route('register') }}">Create an account.</a>
               </div>

              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
              <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
            
        </form>

    </main>
   
</x-guest-layout>
