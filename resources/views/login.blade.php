@extends('site_layout')

@section('main')



<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">





<section class="ftco-section">
    <div class="container">
        {{-- <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Sign In</h2>
            </div>
        </div> --}}
        <div class="row justify-content-center">
            
            <div class="col-md-7 col-lg-6 col-xl-5">
                <div class="login-wrap p-4 p-md-5">
              <h3 class="mb-4 text-center">Login! </h3>
              
              <form action="#" class="signin-form">
                <div class="form-group mb-3">
                    <label class="label" for="name">Username</label>
                    <input type="text" class="form-control" placeholder="Username" required>
                </div>
          <div class="form-group mb-3">
              <label class="label" for="password">Password</label>
            <input type="password" class="form-control" placeholder="Password" required>
          </div>
          <div class="form-group">
              <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
          </div>
          <div class="form-group d-md-flex">
              <div class="w-50 text-left">
                  <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                              </label>
                          </div>
                          <div class="w-50 text-md-right">
                              <a href="#">Forgot Password</a>
                          </div>
          </div>
        </form>
            
           
         
         
        </div>
            </div>
        </div>
    </div>
        
</section>

@endsection