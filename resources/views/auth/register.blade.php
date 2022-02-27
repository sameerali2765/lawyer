<<<<<<< HEAD
<html>
    <head>
        <title>REGISTER Lawyer</title>

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
        <x-jet-validation-errors class="mb-4" />
<section class="ftco-section">
  
    <div class="row justify-content-center">
      <div class="col-md-7 col-lg-6 col-xl-5">
        <div class="login-wrap p-4 p-md-5">
          <h3 class="mb-4 text-center">Register Lawyer! <span>Please register to continue</span></h3>
          
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group mb-4">
                <x-jet-input id="name" placeholder="Name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
          
            <div class="form-group mb-4">
            
                <x-jet-input id="email" placeholder="Email" class="form-control" type="email" name="email" :value="old('email')" required />
            </div>
         
            <div class="form-group mb-4">
                <x-jet-input id="password" placeholder="Password" class="form-control" type="password" name="password" required autocomplete="new-password" />
            </div>
            <div class="form-group mb-4">
             
                <x-jet-input id="password_confirmation" placeholder="Confirm Password" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <div class="form-group">
              
              <button type="submit" class="btn btn-primary rounded submit p-3">Register</button>
            </div>
          
        <div class="flex items-center justify-end mt-4">
            

            
        </div>
    </form>

          
          <div class="w-100 social-wrap">
            <p>
              <span>or</span>
              <span>Signup with</span>
            </p>
            <p class="social-media d-flex justify-content-center">
              <a href="#" class="social-icon facebook d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
              <a href="#" class="social-icon twitter d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
            </p>
            <p class="mt-4">I'm already a member! <a href="/login">Register</a></p>
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

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
>>>>>>> 7944cc807be33acfc79da641d4a5e14aa307f9fe
