
<!--=================================
banner -->
<section class="inner-banner bg-holder bg-overlay-black-70" data-jarallax='{"speed": 0.6}' style="background-image: url(assets/assets/images/bg/06.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 text-center">
        <h1 class="text-primary display-3 font-weight-bold text-uppercase">Gallery</h1>
        <p class="text-white lead mb-0">Create more robust client connections, make more sales, and save time with our end to end solution.</p>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <h4 style="color: white;">
                  <a href="{{url('/')}}" style="color: white;">Home</a>
                  <span style="color: white;"> / Gallery</span>
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

<section>
  <div class="container">
  <form method="POST" action="<?= url('web/register_update/'.$registeruser->id); ?>" enctype="multipart/form-data">
     @csrf
     <div class="form-group">
      <label>Username <span class="login-danger">*</span></label>
      <input name="username" value="{{$registeruser->username}}" class="form-control" type="text">
      <span class="text-danger">
          @error('username')
          {{$message}}                                
          @enderror
        </span>
      </div>
      <div class="col-12 col-sm-12">
        <div class="form-group local-forms">
        <label>Image<span class="login-danger">*</span></label>
        <input name="img" class="form-control" type="file" >                          
        </div>
        </div>
      <div class="form-group mb-0">
      <button class="btn btn-primary btn-block" name="submit" type="submit">Register</button>
      </div>
      </form>
  </div>
</section>
<!--=================================
Gallery -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
   
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
 Gallery -->
