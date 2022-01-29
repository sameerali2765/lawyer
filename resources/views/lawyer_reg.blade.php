@extends('site_layout')

@section('main')



<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">





<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Welcome To Lawyer </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            
            <div class="col-md-7 col-lg-6 col-xl-5">
                <div class="login-wrap p-4 p-md-5">
              <h3 class="mb-4 text-center">Sign Up <span></span> </h3>
              
              <form action="#" class="signin-form">
                <div class="form-group mb-3">
                    <label class="label" for="name">First Name</label>
                    <input type="text" class="form-control rounded email px-3" required>
                </div>
          <div class="form-group mb-3">
              <label class="label" for="last_name">Last Name</label>
            <input type="text" class="form-control rounded email px-3"  required>
          </div>
          <div class="form-group mb-3">
            <label class="label" for="email">Email Address</label>
          <input type="email"  for="email" class="form-control rounded email px-3"  required>
        </div>
          <div class="form-group mb-3">
              <button type="submit" class="form-control btn btn-primary rounded submit px-3">Next</button>
          </div>
      
        </form>
            
           
         
         
        </div>
            </div>
        </div>
    </div>
        
</section>

@endsection