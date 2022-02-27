<<<<<<< HEAD


<!DOCTYPE html>
      <html lang="en">
      <head>
          <title> Login!</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    
        </head>
        <body>
    
        
    <section class="ftco-section">
        @if (session('status'))
        <div class="col-md-3 green">
            {{ session('status') }}
        </div>
    @endif
        <div class="row justify-content-center">
          <div class="col-md-7 col-lg-6 col-xl-5">
            <div class="login-wrap p-4 p-md-5">
              <h3 class="mb-4 text-center">Login! <span>Please login to continue</span></h3>
              
              <form method="POST" action="{{ route('login') }}">
                @csrf
                
             
                <div class="form-group mb-4">
                
                  <input  class="form-control" type="email"  name="email" placeholder="Email" required>
                </div>
               
                <div class="form-group mb-4">
                  
                  <input  class="form-control"type="password"  name="password" placeholder="Password" required>
                </div>
               
                <div class="form-group">
                  <button type="submit" class="btn btn-primary rounded submit p-3">Login</button>
                </div>
                <div class="text-center small"> <a href="{{ route('password.request') }}">Forgot Your Password?</a></div>
 
                <div class="text-center small">Dont have an acoount? <a href="http://localhost:8000/register">Register</a></div>
            </form>
              
              <div class="w-100 social-wrap">
                <p>
                  <span>or</span>
                  <span>Login with</span>
                </p>
                <p class="social-media d-flex justify-content-center">
                  <a href="#" class="social-icon facebook d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                  <a href="#" class="social-icon twitter d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                </p>
              
              </div>
            </div>
        
          </div>
        </div>
      </div>
    </section>
    
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
    </html>
=======
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
>>>>>>> 7944cc807be33acfc79da641d4a5e14aa307f9fe
