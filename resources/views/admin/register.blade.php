<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" conten    t="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Register</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/feather/feather.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  @if (session()->has('message'))
          <div class="alert alert-primary" id="alert">
              <button type="button" class="close" id="close" data-dismiss="alert">x</button>
             {{session()->get('message')}}
           </div>
         @endif
<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container">
<div class="loginbox">
<div class="login-left">
<img class="img-fluid" src="assets/img/login.png" alt="Logo">
</div>
<div class="login-right">
<div class="login-right-wrap">
<h1>Sign Up</h1>
<p class="account-subtitle">Enter details to create your account</p>

<form method="POST" action="{{ url('admin/registered_page') }}">
    @csrf
<div class="form-group">
<label>Username <span class="login-danger">*</span></label>
<input name="username" class="form-control" type="text">
<span class="profile-views"><i class="fas fa-user-circle"></i></span>
<span class="text-danger">
    @error('username')
    {{$message}}                                
    @enderror
  </span>
</div>
<div class="form-group">
<label>Email <span class="login-danger">*</span></label>
<input name="email" class="form-control" type="text">
<span class="profile-views"><i class="fas fa-envelope"></i></span>
<span class="text-danger">
    @error('email')
    {{$message}}                                
    @enderror
  </span>
</div>
<div class="form-group">
<label>Password <span class="login-danger">*</span></label>
<input name="password" class="form-control pass-input" type="text">
<span class="profile-views feather-eye toggle-password"></span>
<span class="text-danger">
    @error('password')
    {{$message}}                                
    @enderror
  </span>
</div>
<div class="form-group">
<label>Confirm password <span class="login-danger">*</span></label>
<input name="confirm_password" class="form-control pass-confirm" type="text">
<span class="profile-views feather-eye reg-toggle-password"></span>
<span class="text-danger">
    @error('confirm_password')
    {{$message}}                                
    @enderror
  </span>
</div>
<div class=" dont-have">Already Registered? <a href="{{url('login')}}">Login</a></div>
<div class="form-group mb-0">
<button class="btn btn-primary btn-block" name="submit" type="submit">Register</button>
</div>
</form>

<div class="login-or">
<span class="or-line"></span>
<span class="span-or">or</span>
</div>

<div class="social-login">
<a href="#"><i class="fab fa-google-plus-g"></i></a>
<a href="#"><i class="fab fa-facebook-f"></i></a>
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-linkedin-in"></i></a>
</div>

</div>
</div>
</div>
</div>
</div>
</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>