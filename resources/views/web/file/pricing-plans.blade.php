
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
        <h1 class="text-primary display-3 font-weight-bold text-uppercase">Pricing Plans</h1>
        <p class="text-white lead mb-0">Create more robust client connections, make more sales, and save time with our end to end solution.</p>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <h4 style="color: white;">
                  <a href="{{url('/')}}" style="color: white;">Home</a>
                  <span style="color: white;"> / Pricing Plans</span>
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
Pricing plans -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
@foreach ($membership as $membershipshow)
    <div class="col-md-4">
        <div class="pricing bg-light p-4 p-lg-5 mb-4 mb-md-0">
            <div class="text-center">
                <h5 class="pricing-title text-uppercase mb-3">{{ $membershipshow->title }}</h5>
                <p>{{ $membershipshow->descripition }}</p>
                <span class="pricing-price d-block mb-4 mt-3">
                    <strong class="display-4 font-weight-bold text-dark">{{ $membershipshow->year }}</strong>/mo
                </span>
            </div>
            <ul class="list-unstyled pricing-list mb-4 bg-white">
              @php
              $products = explode(',', $membershipshow->product);
          @endphp
          @foreach ($productmembership as $product)
          <li class="d-flex text-dark mb-3">{{ $product->title }}
                 @if (in_array($product->title, $products))
                  @php
                      $icon = $product->status == "ACTIVE" ? "<i class='fas fa-check text-success'></i>" : "<i class='fas fa-times text-danger'></i>";
                  @endphp
                  {!! $icon !!}
              @else
                  <i class='fas fa-times text-danger'></i>
              @endif
          </li>
      @endforeach
      <form action="
      
      
      
      
      
      
      
      
      "></form>

        </ul>
            <a class="btn btn-outline-secondary d-block" href="{{url('admin/membership/add/')}}/{{$membershipshow->id}}"><span>Become A Member</span></a>
        </div>
    </div>
@endforeach




    </div>
  </div>
</section>
<!--=================================
 Pricing plans -->


 <!--=================================
FAQ -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <div class="section-title">
          <h2>Frequently Asked Questions </h2>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($faqs as $faqshow)
          <div class="col-lg-6">
              <div class="mb-5">
                  <h5 class="mb-3">{{$faqshow->title}}</h5>
                  <p> {!! htmlspecialchars_decode($faqshow->content) !!}</p>
              </div>
          </div>
      @endforeach
  </div>
  </div>
</section>
<!--=================================
FAQ -->


