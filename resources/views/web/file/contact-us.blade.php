<script>
  @if(session('success'))
toastr.success('{{ session('success') }}');
@elseif(session('error'))
toastr.error('{{ session('error') }}');
@elseif(session('warning'))
toastr.warning('{{ session('warning') }}');
@elseif(session('info'))
toastr.info('{{ session('info') }}');
@endif
</script>
<!--=================================
banner -->
<section class="inner-banner bg-holder bg-overlay-black-70" data-jarallax='{"speed": 0.6}' style="background-image: url(assets/assets/images/bg/06.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 text-center">
        <h1 class="text-primary display-3 font-weight-bold text-uppercase">Contact Us</h1>
        <p class="text-white lead mb-0">Create more robust client connections, make more sales, and save time with our end to end solution.</p>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <h4 style="color: white;">
                  <a href="{{url('/')}}" style="color: white;">Home</a>
                  <span style="color: white;"> / Contact Us</span>
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
contact -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-5 text-center">
        <div class="position-relative z-index-1">
          <h4 class="">Need assistance? please complete the contact form</h4>
        
        
             <form class="mt-4" action="{{url('admin/contact-form') }}" method="POST">
              @csrf
              <div class="form-row">
                <div class="form-group col-12">
                  <input type="text" name="name" class="form-control" placeholder="Name">
                  <span style="padding-right: 545px;" class="text-danger">
                    @error('name')
                    {{$message}}                                
                    @enderror
                  </span>
                </div>
                <div class="form-group col-12">
                  <input type="text" name="email" class="form-control" placeholder="Email">
                  <span style="padding-right: 545px;" class="text-danger">
                    @error('email')
                    {{$message}}                                
                    @enderror
                  </span>
                </div>
                <div class="form-group col-12">
                  <input  type="text" name="phone" class="form-control" placeholder="Phone Number">
                  <span style="padding-right: 545px;" class="text-danger">
                    @error('phone')
                    {{$message}}                                
                    @enderror
                  </span>
                </div>
                <div class="form-group col-12 mb-0">
                  <textarea  name="message" class="form-control h-auto" placeholder="Message" rows="4"></textarea>
                </div>
                <span class="text-danger">
                  @error('message')
                  {{$message}}                                
                  @enderror
                </span>
                <div class="col-12 mt-4">
                  <button type="submit" class="btn btn-primary">Submit</button>

                </div>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
 contact -->

<!--=================================
Office -->
<section class="space-pb">
  <div class="container">
    <div class="row g-0 row-eq-height">
      <div class="col-md-4 bg-light">
        <div class="p-5">
        <h4 class="mb-4">USA Office</h4>
        <div class="d-flex mb-3">
          <i class="fas fa-map-marker-alt text-secondary fa-fw font-xxl"></i>
          <div class="ms-3">
            <h6>Address</h6>
            <p>{{settingsContentByKey('conact_address') }}</p>
          </div>
        </div>
        <div class="d-flex mb-3">
          <i class="far fa-envelope-open text-secondary fa-fw font-xxl"></i>
          <div class="ms-3">
            <h6>Email</h6>
            <p>{{settingsContentByKey('email_address') }}</p>
          </div>
        </div>
        <div class="d-flex mb-3">
          <i class="fas fa-mobile-alt text-secondary fa-fw font-xxl"></i>
          <div class="ms-3">
            <h6>Phone Number</h6>
            <p>{{settingsContentByKey('phone') }}</p>
          </div>
        </div>
       </div>
      </div>
      <div class="col-md-4 bg-dark">
        <div class="text-white p-5">
        <h4 class="mb-4 text-white">Training Details</h4>
        <div class="d-flex mb-3">
          <i class="fas fa-map-marker-alt  fa-fw font-xxl"></i>
          <div class="ms-3">
            <h6 class="text-white">Address</h6>
            <p>{{settingsContentByKey('conact_address') }}</p>
          </div>
        </div>
        <div class="d-flex mb-3">
          <i class="far fa-envelope-open fa-fw font-xxl"></i>
          <div class="ms-3">
            <h6 class="text-white">EMAIL</h6>
            <p>{{settingsContentByKey('email_address') }} </p>
          </div>
        </div>
        <div class="d-flex mb-3">
          <i class="fas fa-mobile-alt fa-fw font-xxl"></i>
          <div class="ms-3">
            <h6 class="text-white">Phone Number</h6>
            <p>{{settingsContentByKey('phone') }}</p>
          </div>
        </div>

      </div>
      </div>
      <div class="col-md-4 bg-primary">
       <div class="p-5">
        <h4 class="mb-4 text-white">Working Hours</h4>
        <ul class="list-unstyled mb-0">
          <li class="p-3 bg-light d-flex">Monday <span class="ms-auto">{{settingsContentByKey('monday') }}</span></li>
          <li class="p-3 d-flex text-white">Tuesday <span class="ms-auto">{{settingsContentByKey('tuesday') }}</span></li>
          <li class="p-3 bg-light d-flex">Wednesday <span class="ms-auto">{{settingsContentByKey('wednesday') }}</span></li>
          <li class="p-3 d-flex text-white">Thursday <span class="ms-auto">{{settingsContentByKey('thursday') }}</span></li>
          <li class="p-3 bg-light d-flex">Friday <span class="ms-auto">{{settingsContentByKey('friday') }}</span></li>
          <li class="p-3 pb-0 d-flex text-white">Saturday <span class="ms-auto">{{settingsContentByKey('saturday') }}</span></li>
        </ul>
       </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
 Office -->

<!--=================================
map -->
<section>
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-md-12">
        <div class="map">
          {!!settingsContentByKey('google_map') !!}
        
        </div>
      </div>
    </div>
  </div>
</section>
 <!--=================================
map -->
