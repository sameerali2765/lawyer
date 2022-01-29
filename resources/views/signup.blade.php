@extends('site_layout')

@section('main')




<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">





<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Sign Up </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-6 col-xl-5">
                <div class="login-wrap p-4 p-md-5">
              <h3 class="mb-4">Hello! <span>Please signup to continue</span></h3>
              <a href="#" class="img d-flex align-items-center justify-content-center"><span class="fa fa-user-o"></span></a>
                    <form action="#" class="signup-form">
                  <div class="form-group mb-4">
                      <label class="label" for="name">Full Name</label>
                      <input type="text" class="form-control" placeholder="John Doe">
                  </div>
                  <div class="form-group mb-4">
                      <label class="label" for="email">Email Address</label>
                      <input type="text" class="form-control" placeholder="johndoe@gmail.com">
                  </div>
            <div class="form-group mb-4">
                <label class="label" for="password">Password</label>
              <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group mb-4">
                <label class="label" for="password">Confirm Password</label>
              <input type="password" class="form-control" placeholder="Confirm Password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary rounded submit p-3">Sign Up</button>
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
                        <p class="mt-4">I'm already a member! <a href="#signin">Sign In</a></p>
          </div>
        </div>
            </div>
        </div>
    </div>
</section>

@endsection