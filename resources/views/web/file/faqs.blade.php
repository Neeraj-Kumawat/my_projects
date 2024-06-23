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
        <h1 class="text-primary display-3 font-weight-bold text-uppercase">Faqs</h1>
        <p class="text-white lead mb-0">Create more robust client connections, make more sales, and save time with our end to end solution.</p>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <h4 style="color: white;">
                  <a href="{{url('/')}}" style="color: white;">Home</a>
                  <span style="color: white;"> / Faqs</span>
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
<section class="space-ptb">
  <div class="container">
   <div class="row">
      <div class="col-lg-8 col-md-7">
       <div class="accordion" id="accordion">
        
@foreach($faqs as $faqshow)
    <div class="accordion-item">
        <h2 class="accordion-header" id="heading{{$faqshow->id}}">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$faqshow->id}}" aria-expanded="false" aria-controls="collapse{{$faqshow->id}}">
                {{ $faqshow->title }}<i class="fas fa-chevron-down fa-xs ms-auto"></i>
            </button>
        </h2>
        <div id="collapse{{$faqshow->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$faqshow->id}}" data-bs-parent="#accordion">
            <div class="accordion-body">
                {!! htmlspecialchars_decode($faqshow->content) !!}
            </div>
        </div>
    </div>
@endforeach
    
      {{--  <div class="accordion-item">
          <h2 class="accordion-header" id="headingfour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
              04) I use this success to make a difference for others? <i class="fas fa-chevron-down fa-xs ms-auto"></i>
            </button>
          </h2>
          <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordion">
            <div class="accordion-body">
                <p>Motivation is not an accident or something that someone else can give you — you are the only one with the power to motivate you. Motivation cannot be an external force, it must come from within as the natural product of your desire to achieve something and your belief that you are capable to succeed at your goal. Success is something of which we all want more.</p>
                <ul class="ps-3 mb-0">
                  <li class="mb-2">Commitment is something that comes from understanding that!</li>
                  <li class="mb-2">Its price and then having the willingness to pay that price.</li>
                  <li class="mb-2">his is important because nobody wants to put significant.</li>
                  <li class="mb-2">Effort into something, only to find. </li>
                  <li>Out after the fact that the price was too high.</li>
                </ul>
            </div>
          </div>
        </div>
       {{-- <div class="accordion-item mb-0">
          <h2 class="accordion-header" id="headingfive">
            <button class="accordion-button collapsed d-flex align-items-center ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
              05) How will this achievement change my life? <i class="fas fa-chevron-down fa-xs ms-auto"></i>
            </button>
          </h2>
          <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordion">
            <div class="accordion-body">
                <p>Motivation is not an accident or something that someone else can give you — you are the only one with the power to motivate you. Motivation cannot be an external force, it must come from within as the natural product of your desire to achieve something and your belief that you are capable to succeed at your goal. Success is something of which we all want more.</p>
                <ul class="ps-3 mb-0">
                  <li class="mb-2">Commitment is something that comes from understanding that!</li>
                  <li class="mb-2">Its price and then having the willingness to pay that price.</li>
                  <li class="mb-2">his is important because nobody wants to put significant.</li>
                  <li class="mb-2">Effort into something, only to find. </li>
                  <li>Out after the fact that the price was too high.</li>
                </ul>
            </div>
          </div>
        </div> --}}
      </div>
      </div>
      <div class="col-lg-4 col-md-5 mt-5 mt-md-0">
        <div class="blog-sidebar sidebar">
          <div class="widget">
            <div class="widget-title">
              <h6>Search</h6>
            </div>
            <div class="search">
              <i class="fas fa-search text-white"></i>
              <input type="text" class="form-control" placeholder="Search....">
            </div>
          </div>
          @if (session()->has('message'))
          <div class="alert alert-primary" id="alert">
              <button type="button" class="close" id="close" data-dismiss="alert">x</button>
             {{session()->get('message')}}
           </div>
         @endif
          <div class="widget bg-secondary p-4 p-sm-5">
            <div class="widget-title">
              <h6 class="text-white">PLEASE COMPLETE THE CONTACT FORM
              </h6>
            </div>
            <form method="POST" action="{{ url('admin/contact-form') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name">
                <span  class="text-danger">
                  @error('name')
                  {{$message}}                                
                  @enderror
                </span>
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email">
                <span  class="text-danger">
                  @error('email')
                  {{$message}}                                
                  @enderror
                </span>
              </div>
              <div class="form-group">
                <input type="text" name="phone" class="form-control" placeholder="Phome">
                <span  class="text-danger">
                  @error('phone')
                  {{$message}}                                
                  @enderror
                </span>
              </div>
              <div class="form-group">
                <textarea  name="message" class="form-control" rows="4" placeholder="Message"></textarea>
              </div>
              <div class="form-group mb-0">
                <button type="submit" class="btn btn-primary btn-block"> <span> Submit </span> </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
 Faq -->

<!--=================================
Action box -->
<section class="space-ptb bg-secondary">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 text-center">
        <div class="section-title mb-4">
          <span class="text-white">Join our Monthly Membership</span>
          <h3 class="text-white">Take any class at your free time flexibly for whole month</h3>
        </div>
        <a class="btn btn-primary btn-skew" href="#"> <span> Become a member </span> </a>
      </div>
    </div>
  </div>
</section>
<!--=================================
 Action box -->
