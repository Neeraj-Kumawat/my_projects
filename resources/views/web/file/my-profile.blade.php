
<!--=================================
banner -->
<section class="inner-banner bg-holder bg-overlay-black-70" data-jarallax='{"speed": 0.6}' style="background-image: url(assets/assets/images/bg/06.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 text-center">
        <h1 class="text-primary display-3 font-weight-bold text-uppercase">My Profile</h1>
        <p class="text-white lead mb-0">Create more robust client connections, make more sales, and save time with our end to end solution.</p>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <h4 style="color: white;">
                  <a href="{{url('/')}}" style="color: white;">Home</a>
                  <span style="color: white;"> / My Profile</span>
              </h4>
          </ol>
      </nav>
      </div>
    </div>
  </div>
  <svg class="banner-shape" xmlns="http://www.w3.org/2000/svg" width="100%" height="100" viewBox="0 0 1920 70">
  <path class="cls-1" d="M0,0L1920,60V70H0V0Z"/>
</svg>
</section>
<!--=================================
banner -->

<!--=================================
Faq -->

@if (session()->has('message'))
<div class="alert alert-primary" id="alert">
    <button type="button" class="close" id="close" data-dismiss="alert">x</button>
   {{session()->get('message')}}
 </div>
@endif
<section class="space-ptb">
  <div class="container">
    <div class="page-wrapper">
      <div class="content container-fluid">
      
      
      <div class="row">
      <div class="col-md-12">
      <div class="profile-header">
      <div class="row align-items-center">
      <div class="col-auto profile-image">
      <a href="#">
      <img class="rounded-circle" alt="User Image" src="{{url('assets/img/profiles/avatar-02.jpg')}}">
      </a>
      </div>
      <div class="col ms-md-n2 profile-user-info">
      <h4 class="user-name mb-0">{{$loggedInUser->username}}</h4>
      {{-- <h6 class="text-muted">UI/UX Design Team</h6> --}}
      <div class="user-Location"><i class="fas fa-envelope"></i> {{$loggedInUser->email}}</div>
      {{-- <div class="about-text">Lorem ipsum dolor sit amet.</div> --}}
      </div>
      <div class="col-auto profile-btn">
      <a href="{{url('web/register_edit/')}}/{{$loggedInUser->id}}" class="btn btn-primary">
      Edit
      </a>
      </div>
      </div>
      </div>
      
      <div class="tab-content profile-tab-cont">
      
      <div class="tab-pane fade show active" id="per_details_tab">
      
      <div class="row">
      <div class="col-lg-12">
      <div class="card">
      <div class="card-body">
      <h5 class="card-title d-flex justify-content-between">
      <span>Personal Details</span>
      <a href="{{url('web/register_edit/')}}/{{$loggedInUser->id}}" class="btn btn-sm bg-danger-light"><i class="feather-edit">Edit</i></a>
      
      </h5>
      <div class="row">
      <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name</p>
      <p class="col-sm-9">{{$loggedInUser->username}}</p>
      </div>
      {{-- <div class="row">
      <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Date of Birth</p>
      <p class="col-sm-9">24 Jul 1983</p>
      </div> --}}
      <div class="row">
      <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email ID</p>
      <p class="col-sm-9"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a1cbcec9cfc5cec4e1c4d9c0ccd1cdc48fc2cecc">{{$loggedInUser->email}}</a></p>
      </div>
      
      </div>
      </div>
      </div>
      
      </div>
      
      </div>
      
      
      <div >
      <div class="card">
      <div class="card-body">
      <h5 class="card-title">Change Password</h5>
      <div class="row">
      <div class="col-md-10 col-lg-6">
        <form method="POST" action="{{ route('web.change.password.post') }}">
          @csrf
      <div class="form-group">
      <label>Old Password</label>
      <input type="text" name="old_password" class="form-control">
      <span class="text-danger">
        @error('old_password')
        {{$message}}                                
        @enderror
      </span>
      </div>
      <div class="form-group">
      <label>New Password</label>
      <input type="text" name="new_password" class="form-control">
      <span class="text-danger">
        @error('new_password')
        {{$message}}                                
        @enderror
      </span>
      </div>
      <div class="form-group">
      <label>Confirm Password</label>
      <input type="text" name="confirm_password" class="form-control">
      <span class="text-danger">
        @error('confirm_password')
        {{$message}}                                
        @enderror
      </span>
      </div>
      <button class="btn btn-primary" type="submit">Save Changes</button>
      </form>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      
      </div>
      
      
      <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>
      
      <script src="{{url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      
      <script src="{{url('assets/js/feather.min.js')}}"></script>
      
      <script src="{{url('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
      
      <script src="{{url('assets/js/script.js')}}"></script>
      </body>
      </html>
    </div>
  </div>
</section>
<!--=================================
 Faq -->

