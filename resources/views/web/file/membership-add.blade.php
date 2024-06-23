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
          <h1 class="text-primary display-3 font-weight-bold text-uppercase">welocme</h1>
          <p class="text-white lead mb-0">Create more robust client connections, make more sales, and save time with our end to end solution.</p>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <h4 style="color: white;">
                    <a href="{{url('/')}}" style="color: white;">Home</a>
                    <span style="color: white;"> / Welcome</span>
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
        <div class="col-md-2">
 
        </div>
        <div class="col-md-4">
          <img src="{{url('assets/assets/images/success.png')}}" alt="">
          <h5>membership/success</h5>
          </div>
     

      </div>
    </div>
  </section>
  <!--=================================
  Login -->
  