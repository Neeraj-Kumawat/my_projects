
<!--=================================
banner -->
<section class="inner-banner bg-holder bg-overlay-black-70" data-jarallax='{"speed": 0.6}' style="background-image: url(assets/assets/images/bg/06.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 text-center">
        <h1 class="text-primary display-3 font-weight-bold text-uppercase">Login</h1>
        <p class="text-white lead mb-0">Create more robust client connections, make more sales, and save time with our end to end solution.</p>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <h4 style="color: white;">
                  <a href="{{url('/')}}" style="color: white;">Home</a>
                  <span style="color: white;"> / Login</span>
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
Login -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
          <ul class="nav nav-pills mb-3 nav-tabs nav-tabs-02 justify-content-center text-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Log in</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Register</a>
            </li>
          </ul>
          @if (session()->has('message'))
          <div class="alert alert-primary" id="alert">
              <button type="button" class="close" id="close" data-dismiss="alert">x</button>
             {{session()->get('message')}}
           </div>
         @endif
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <form class="form-row row mt-4 align-items-center"  enctype="multipart/form-data">
                @csrf
                <div class="form-group col-sm-12">
                    <input name="email" type="text" class="form-control" placeholder="Email">
                
                </div>
                <div class="form-group col-sm-12">
                    <input name="password" type="password" class="form-control" placeholder="Password">
                   
                </div>
                <div class="col-6 d-grid">
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Sign up</button>
                </div>
                <div class="col-6">
                    <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                        <li class="me-1"><a class="text-dark" href="#"><b>Already Registered User? Click here to login</b></a></li>
                    </ul>
                </div>
            </form>
            
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <form class="form-row row mt-4 mb-5 align-items-center"  enctype="multipart/form-data">
                  @csrf
                <div class="form-group col-sm-12">
                  <input name="username" type="text" class="form-control" placeholder="Username">
                 
                </div>
                <div class="form-group col-sm-12">
                  <input name="email" type="email" class="form-control" placeholder="Email Address">
               
                </div>
                <div class="form-group col-sm-12">
                  <input name="password" type="Password" class="form-control" placeholder="Password">
              
                </div>
                <div class="form-group col-sm-12">
                  <input name="confirm_password" type="Password" class="form-control" placeholder="Confirm Password">
                 
                </div>
                <div class="col-6 d-grid">
                  <button type="submit" name="submit" class="btn btn-primary btn-block">Sign up</button>
                </div>
                <div class="col-6">
                  <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                    <li class="me-1"><a class="text-dark" href="#"><b>Already Registered User? Click here to login</b></a></li>
                  </ul>
                </div>
              </form>
            </div>
            <div class="login-social-media border ps-4 pe-4 pb-4 pt-0 rounded mt-5">
              <div class="mb-4 d-block text-center"><b class="bg-white ps-2 pe-2 mt-3 d-block">Login or Sign in with</b></div>
              <form class="row">
                <div class="col-sm-12">
                  <a class="btn bg-facebook d-block mb-3 text-white" href="#"><span><i class="fab fa-facebook-f"></i>Login with Facebook</span></a>
                </div>
              </form>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Login -->
