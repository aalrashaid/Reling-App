<x-guest-layout>
    <main class="form-signin">
        <img class="mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">register</h1>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name -->
            <div class="form-floating"> 
                <input type="text" name="name" :value="old('name')" class="form-control" id="floatingInput" placeholder="name"  required autofocus >
                <label for="floatingInput">name</label>
            </div>
            <!-- username -->
            <div class="form-floating"> 
                <input type="text" name="username" :value="old('username')" class="form-control" id="floatingInput" placeholder="username"  required autofocus >
                <label for="floatingInput">username</label>
            </div>
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

            
            <button class="w-100 btn btn-lg btn-primary" type="submit">register</button>
            <!-- Already registered? -->
            <div class="form-floating"> 
                <a class="" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>
            <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
        </form>
    </main>
</x-guest-layout>
