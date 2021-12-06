<x-guest-layout>
    <main class="form-signin">
         <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
          <img class="mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
          <h1 class="h3 mb-3 fw-normal">password confirm</h1>
      
          <div class="form-floating">
            <input type="password" id="password" name="password" class="form-control"  placeholder="password" required autocomplete="current-password">
            <label for="password" >Password</label>
          </div>
          
          
          <button class="w-100 btn btn-lg btn-primary" type="submit">{{ __('Confirm') }}</button>
          
        </form>
    </main>
</x-guest-layout>
