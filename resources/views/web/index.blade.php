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
<section class="banner-home bg-holder" data-jarallax='{"speed": 0.6}' style="background-image: url(assets/assets/images/slider/01.jpg);">
  <div class="swiper-container">
    <div class="swiper-wrapper position-relative">
      <div class="swiper-slide">
        <div class="banner align-items-center d-flex">
        <div class="swipeinner container">
          <div class="row h-100">
            <div class="col-sm-11 offset-sm-1">
              <div class="banner-content">
                <h3 class="text-uppercase text-white mb-3" data-swiper-animation="fadeInDown" data-duration="1s" data-delay="0.5s">Trainer in gym gives you training how to be fit </h3>
                <h1 class="text-uppercase text-white banner-title" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="1.0s">Love <span class="d-block text-primary">your body.</span></h1>
                <p class="text-uppercase text-white lead mb-0" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="1.5s">DO NOT LOSE TRACK OF YOUR GOAL DUE TO HEALTH ISSUES.</p>
              </div>
            </div>
           </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="banner align-items-center d-flex">
        <div class="swipeinner container">
          <div class="row h-100">
            <div class="col-sm-11 offset-sm-1">
              <div class="banner-content">
                <h3 class="text-uppercase text-white mb-3" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.5s">Nothing tastes as good as being fit feels.</h3>
                <h1 class="text-uppercase text-white banner-title" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="1.0s">Making  <span class="d-block text-primary">fitness fun.</span></h1>
                <p class="text-uppercase text-white lead mb-0" data-swiper-animation="fadeInUp" data-duration="1s" data-delay="1.5s">Success never comes to those who quit.</p>
              </div>
            </div>
           </div>
          </div>
        </div>
      </div>
     </div>
     <!-- Add Pagination -->
     <div class="swiper-pagination"></div>
     <div class="social d-flex align-items-center justify-content-center">
      <div class="d-flex share">
        <h6 class="text-white text-uppercase m-0">Share</h6>
      </div>
      <ul class="list-unstyled m-0">
        <li><a href="{{settingsContentByKey('facebook') }}" target="_blank"> <i class="fab fa-facebook-f"></i> </a></li>
        <li><a href="{{settingsContentByKey('twitter') }}" target="_blank"> <i class="fab fa-twitter"></i> </a></li>
        <li><a href="{{settingsContentByKey('instagram') }}" target="_blank"> <i class="fab fa-instagram"></i> </a></li>
        <li><a href="{{settingsContentByKey('linkedin') }}" target="_blank"> <i class="fab fa-linkedin-in"></i> </a></li>
      </ul>
     </div>
      <div class="container">
       <div class="row g-0 align-items-end">
        <div class="col-md-4">
          <div class="feature-box d-flex align-items-center justify-content-center">
            <i class="flaticon-treadmill-1 font-xxxl"></i>
            <h4 class="ms-4 mb-0">Modern <br>equipment</h4>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box d-flex align-items-center active">
            <i class="flaticon-tank-top font-xxxl"></i>
            <h4 class="ms-4 mb-0">Coaches <br>champions</h4>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box d-flex align-items-center justify-content-center">
            <i class="flaticon-showers font-xxxl"></i>
            <h4 class="ms-4 mb-0">Swimming pools <br>available</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
banner -->


<!--=================================
Features -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="section-title text-center">
          <span class="sub-title text-secondary"><span class="title-shape me-2"></span> Why choose us?</span>
          <h2>Our key features See some</h2>
        </div>
      </div>
    </div>
      <div class="row">
      @foreach($featureshow as $product)
      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <div class="feature text-center">
          <div class="feature-img">
            <img class="img-fluid" src="{{ url('public/uploads/' . $product->image) }}" alt="">
          </div>
          <div class="feature-content">
           <h5 class="title">{{ $product->title }}</h5>
           <p class="font-md mt-3 mb-0">{{ $product->descripition }}</p>
          </div>
        </div>
      </div>
      @endforeach
     
     
    </div>

  </div>
</section>
<!--=================================
 Features -->

<!--================================
Sub banner -->
<section class="">
  <div class="container-fluid p-0">
    <div class="row g-0">
      <div class="col-lg-4">
        <div class="bg-holder p-5" style="background-image: url(assets/assets/images/shop/sub-banner-01.jpg);">
          <div class="position-relative py-0 py-lg-5 my-4">
            <h2 class="mb-2 text-white">50% off <br> this week only</h2>
            <h3 class="text-primary">MODERN EQUIPMENT </h3>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="bg-holder p-5 text-center" data-jarallax='{"speed": 0.6}' style="background-image: url(assets/assets/images/shop/sub-banner-02.jpg);">
          <div class="position-relative py-0 py-lg-5 my-4">
            <h2 class="mb-2 text-white">Runners <br> Never Give Up</h2>
            <h3 class="text-primary">A Moments of Fit</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="bg-holder p-5 text-end" style="background-image: url(assets/assets/images/shop/sub-banner-03.jpg);">
          <div class="position-relative py-0 py-lg-5 my-4">
            <h2 class="mb-2 text-white">catchy gym <br> advertising</h2>
            <h3 class="text-primary">Look in shape</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
 Sub banner -->

<!--=================================
About -->
<section class="bg-white space-pt">
  <div class="container">
    <div class="row align-items center">
      <div class="col-md-6">
        <div class="space-ptb">
          <div class="section-title">
            <span class="sub-title"><span class="title-shape me-2"></span> About our company</span>
            <h2>Who we are and what we do</h2>
            <p class="pre-title">The first thing to remember about success is that it is a process – nothing more, nothing less. There is really no magic to it and it’s not reserved only for a select few people. As such, success really has nothing.</p>
          </div>
            <div class="row my-4 mb-lg-4">
              <div class="col-lg-6">
                <ul class="list-unstyled">
                  <li class="mb-3 d-flex"><i class="far fa-plus-square pe-2 text-primary mt-1"></i>Get the oars in the water and start rowing</li>
                  <li class="mb-3 d-flex"><i class="far fa-plus-square pe-2 text-primary mt-1"></i>Most people believe that success is difficult.</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled">
                  <li class="mb-3 d-flex"><i class="far fa-plus-square pe-2 text-primary mt-1"></i>Success is something of which we all want more.</li>
                  <li class="mb-3 d-flex"><i class="far fa-plus-square pe-2 text-primary mt-1"></i>Introspection is the trick.</li>
                </ul>
              </div>
            </div>
            <a class="btn btn-primary btn-skew" href="#"><span>Read More</span></a>
        </div>
      </div>
      <div class="col-md-6 align-self-end">
        <img class="img-fluid" src="{{ url('assets/assets/images/about/11.png') }}" alt="">
      </div>
    </div>
   </div>
  </section>
<!--=================================
 About -->

 <!--=================================
Classes -->
<section  class="space-ptb bg-holder bg-overlay-black-90" data-jarallax='{"speed": 0.6}' style="background-image: url(assets/assets/images/bg/05.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="section-title text-center">
          <span class="sub-title dark-title text-primary"><span class="title-shape me-2"></span> Class list by goals</span>
          <h2 class="text-white">What is timetable for classes</h2>
        </div>
      </div>
    </div>
    <div class="row">
     
      <div class="col-12">
        <ul class="nav nav-tabs nav-pills mb-3" role="tablist">
          @foreach($workinghours as $workinghoursshow)
          <li class="nav-item flex-sm-fill justify-content-center text-center">
              {{-- <a class="nav-link active" id="monday-tab" data-bs-toggle="pill" role="tab" aria-controls="monday" aria-selected="true" href="{{ route('home'.$workinghoursshow->id]) }}">
                  <i class="icon-options"></i> {{ $workinghoursshow->title }}
              </a> --}}
              <a class="nav-link active" href="{{ route('home') }}?cat_id={{ $workinghoursshow->id }}">
                <i class="icon-options"></i>{{ $workinghoursshow->title }}
            </a>
          </li>
      @endforeach
          {{-- <li class="nav-item flex-sm-fill text-center">
            <a class="nav-link" id="tuesday-tab" data-bs-toggle="pill" href="#tuesday" role="tab" aria-controls="tuesday" aria-selected="false">Tuesday</a>
          </li>
          <li class="nav-item flex-sm-fill text-center">
            <a class="nav-link" id="wednesday-tab" data-bs-toggle="pill" href="#wednesday" role="tab" aria-controls="wednesday" aria-selected="false">Wednesday</a>
          </li>
          <li class="nav-item flex-sm-fill text-center">
            <a class="nav-link" id="thursday-tab" data-bs-toggle="pill" href="#thursday" role="tab" aria-controls="thursday" aria-selected="false">Thursday</a>
          </li>
          <li class="nav-item flex-sm-fill text-center">
            <a class="nav-link" id="friday-tab" data-bs-toggle="pill" href="#friday" role="tab" aria-controls="friday" aria-selected="false">Friday</a>
          </li>
          <li class="nav-item flex-sm-fill text-center">
            <a class="nav-link" id="saturday-tab" data-bs-toggle="pill" href="#saturday" role="tab" aria-controls="saturday" aria-selected="false">Saturday</a>
          </li>
          <li class="nav-item flex-sm-fill text-center">
            <a class="nav-link" id="sunday-tab" data-bs-toggle="pill" href="#sunday" role="tab" aria-controls="sunday" aria-selected="false">Sunday</a>
          </li> --}}
        </ul>
        <div class="tab-content text-center" id="pills-tabContent">
          <div class="tab-pane fade show active" id="monday" role="tabpanel" aria-labelledby="monday-tab">
            <div class="table-responsive">
              <table class="table table-borderless table-striped mb-0">
                <thead>
                  <tr class="bg-secondary">
                    <th class="text-primary">Time</th>
                    <th class="text-primary">Class Type</th>
                    <th class="text-primary">Coach Name</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($CategoryProducts as $workingtimeshow)
                  <tr>
                    <td> {{ $workingtimeshow->time }}</td>
                    <td>{{ $workingtimeshow->class_type }}</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('public/uploads/') }}/{{$workingtimeshow->img}}"  style="width: 40px; height: 40px;"  />
                        <span class="ms-3 mb-0 pe-4">{{ $workingtimeshow->coach_name }}</span>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                  {{-- <tr class="bg-secondary">
                    <td>07.00 - 08.00</td>
                    <td>Boxcycle</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/02.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Ricardo Marshall</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>08.00 - 09.00</td>
                    <td>Body builing</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/03.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Joana Williams</span>
                      </div>
                    </td>
                  </tr>
                  <tr class="bg-secondary">
                    <td>09.00 - 10.00</td>
                    <td>Crosfit</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/04.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Gwen Bass</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>10.00 - 11.00</td>
                    <td>Cardio</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/05.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Melanie Byrd</span>
                      </div>
                    </td>
                  </tr>
                  <tr class="bg-secondary">
                    <td>11.00 - 12.00</td>
                    <td>Yoga Basics</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/06.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Maria Fields</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>12.00 - 01.00</td>
                    <td>Sports</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/07.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Melvin Harvey</span>
                      </div>
                    </td>
                  </tr> --}}
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="tuesday" role="tabpanel" aria-labelledby="tuesday-tab">
            <div class="table-responsive">
              <table class="table table-borderless table-striped table-skew mb-0">
                <thead class="bg-secondary">
                  <tr>
                    <th class="text-primary">Time</th>
                    <th class="text-primary">Class Type</th>
                    <th class="text-primary">Coach Name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>06.00 - 07.00</td>
                    <td>Fitness</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/01.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Paul Flavius</span>
                      </div>
                    </td>
                  </tr>
                  <tr class="bg-secondary">
                    <td>07.00 - 08.00</td>
                    <td>Boxcycle</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/02.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Ricardo Marshall</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>08.00 - 09.00</td>
                    <td>Body builing</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/03.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Joana Williams</span>
                      </div>
                    </td>
                  </tr>
                  <tr class="bg-secondary">
                    <td>09.00 - 10.00</td>
                    <td>Crosfit</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/04.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Gwen Bass</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>10.00 - 11.00</td>
                    <td>Cardio</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/05.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Melanie Byrd</span>
                      </div>
                    </td>
                  </tr>
                  <tr class="bg-secondary">
                    <td>11.00 - 12.00</td>
                    <td>Yoga Basics</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/06.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Maria Fields</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>12.00 - 01.00</td>
                    <td>Sports</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/07.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Melvin Harvey</span>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="wednesday" role="tabpanel" aria-labelledby="wednesday-tab">
            <div class="table-responsive">
              <table class="table table-borderless table-striped table-skew mb-0">
                <thead class="bg-secondary">
                  <tr>
                    <th class="text-primary">Time</th>
                    <th class="text-primary">Class Type</th>
                    <th class="text-primary">Coach Name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>06.00 - 07.00</td>
                    <td>Fitness</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/01.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Paul Flavius</span>
                      </div>
                    </td>
                  </tr>
                  <tr class="bg-secondary">
                    <td>07.00 - 08.00</td>
                    <td>Boxcycle</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/02.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Ricardo Marshall</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>08.00 - 09.00</td>
                    <td>Body builing</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/03.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Joana Williams</span>
                      </div>
                    </td>
                  </tr>
                  <tr class="bg-secondary">
                    <td>09.00 - 10.00</td>
                    <td>Crosfit</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/04.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Gwen Bass</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>10.00 - 11.00</td>
                    <td>Cardio</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/05.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Melanie Byrd</span>
                      </div>
                    </td>
                  </tr>
                  <tr class="bg-secondary">
                    <td>11.00 - 12.00</td>
                    <td>Yoga Basics</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/06.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Maria Fields</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>12.00 - 01.00</td>
                    <td>Sports</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/07.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Melvin Harvey</span>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="thursday" role="tabpanel" aria-labelledby="thursday-tab">
            <div class="table-responsive">
              <table class="table table-borderless table-striped table-skew mb-0">
                <thead class="bg-secondary">
                  <tr>
                    <th class="text-primary">Time</th>
                    <th class="text-primary">Class Type</th>
                    <th class="text-primary">Coach Name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>06.00 - 07.00</td>
                    <td>Fitness</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/01.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Paul Flavius</span>
                      </div>
                    </td>
                  </tr>
                  <tr class="bg-secondary">
                    <td>07.00 - 08.00</td>
                    <td>Boxcycle</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/02.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Ricardo Marshall</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>08.00 - 09.00</td>
                    <td>Body builing</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/03.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Joana Williams</span>
                      </div>
                    </td>
                  </tr>
                  <tr class="bg-secondary">
                    <td>09.00 - 10.00</td>
                    <td>Crosfit</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/04.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Gwen Bass</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>10.00 - 11.00</td>
                    <td>Cardio</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/05.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Melanie Byrd</span>
                      </div>
                    </td>
                  </tr>
                  <tr class="bg-secondary">
                    <td>11.00 - 12.00</td>
                    <td>Yoga Basics</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/06.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Maria Fields</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>12.00 - 01.00</td>
                    <td>Sports</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/07.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Melvin Harvey</span>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="friday" role="tabpanel" aria-labelledby="friday-tab">
            <div class="table-responsive">
              <table class="table table-borderless table-striped table-skew mb-0">
                <thead class="bg-secondary">
                  <tr>
                    <th class="text-primary">Time</th>
                    <th class="text-primary">Class Type</th>
                    <th class="text-primary">Coach Name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>06.00 - 07.00</td>
                    <td>Fitness</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/01.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Paul Flavius</span>
                      </div>
                    </td>
                  </tr>
                  <tr class="bg-secondary">
                    <td>07.00 - 08.00</td>
                    <td>Boxcycle</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/02.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Ricardo Marshall</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>08.00 - 09.00</td>
                    <td>Body builing</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/03.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Joana Williams</span>
                      </div>
                    </td>
                  </tr>
                  <tr class="bg-secondary">
                    <td>09.00 - 10.00</td>
                    <td>Crosfit</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/04.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Gwen Bass</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>10.00 - 11.00</td>
                    <td>Cardio</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/05.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Melanie Byrd</span>
                      </div>
                    </td>
                  </tr>
                  <tr class="bg-secondary">
                    <td>11.00 - 12.00</td>
                    <td>Yoga Basics</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/06.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Maria Fields</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>12.00 - 01.00</td>
                    <td>Sports</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/07.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Melvin Harvey</span>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="saturday" role="tabpanel" aria-labelledby="saturday-tab">
            <div class="table-responsive">
              <table class="table table-borderless table-striped table-skew mb-0">
                <thead class="bg-secondary">
                  <tr>
                    <th class="text-primary">Time</th>
                    <th class="text-primary">Class Type</th>
                    <th class="text-primary">Coach Name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>06.00 - 07.00</td>
                    <td>Fitness</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/01.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Paul Flavius</span>
                      </div>
                    </td>
                  </tr>
                  <tr class="bg-secondary">
                    <td>07.00 - 08.00</td>
                    <td>Boxcycle</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/02.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Ricardo Marshall</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>08.00 - 09.00</td>
                    <td>Body builing</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/03.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Joana Williams</span>
                      </div>
                    </td>
                  </tr>
                  <tr class="bg-secondary">
                    <td>09.00 - 10.00</td>
                    <td>Crosfit</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/04.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Gwen Bass</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>10.00 - 11.00</td>
                    <td>Cardio</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/05.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Melanie Byrd</span>
                      </div>
                    </td>
                  </tr>
                  <tr class="bg-secondary">
                    <td>11.00 - 12.00</td>
                    <td>Yoga Basics</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/06.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Maria Fields</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>12.00 - 01.00</td>
                    <td>Sports</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/07.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Melvin Harvey</span>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="sunday" role="tabpanel" aria-labelledby="sunday-tab">
            <div class="table-responsive">
              <table class="table table-borderless table-striped table-skew mb-0">
                <thead class="bg-secondary">
                  <tr>
                    <th class="text-primary">Time</th>
                    <th class="text-primary">Class Type</th>
                    <th class="text-primary">Coach Name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>06.00 - 07.00</td>
                    <td>Fitness</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/01.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Paul Flavius</span>
                      </div>
                    </td>
                  </tr>
                  <tr class="bg-secondary">
                    <td>07.00 - 08.00</td>
                    <td>Boxcycle</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/02.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Ricardo Marshall</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>08.00 - 09.00</td>
                    <td>Body builing</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/03.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Joana Williams</span>
                      </div>
                    </td>
                  </tr>
                  <tr class="bg-secondary">
                    <td>09.00 - 10.00</td>
                    <td>Crosfit</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/04.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Gwen Bass</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>10.00 - 11.00</td>
                    <td>Cardio</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/05.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Melanie Byrd</span>
                      </div>
                    </td>
                  </tr>
                  <tr class="bg-secondary">
                    <td>11.00 - 12.00</td>
                    <td>Yoga Basics</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/06.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Maria Fields</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>12.00 - 01.00</td>
                    <td>Sports</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid avatar avatar-sm" src="{{ url('assets/assets/images/avatar/07.jpg') }}" alt="">
                        <span class="ms-3 mb-0 pe-4">Melvin Harvey</span>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
   
    </div>
  </div>
</section>
<!--=================================
Classes -->

<!--=================================
Trainers -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        <div class="section-title">
          <span class="sub-title text-secondary"><span class="title-shape me-2"></span> Train with experts</span>
          <h2>Meet the magnificent Trainers</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row no-gutters">
      <div class="col-12">
        <div class="owl-carousel" data-animateOut="fadeOut" data-nav-arrow="false" data-items="4" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xx-items="1" data-space="15">
         
          @foreach($teamshow as $team)
          <div class="item">
            <div class="team">
              <div class="team-image">
                <img class="img-fluid" src="{{ url('public/photo/' . $team->img) }}" alt="">
              </div>
              <div class="team-info">
              <div class="team-name">
                <h5 class="mb-0"><a href="#">{{ $team->name }}</a></h5>
                <span class="font-md">{{ $team->short_descripition }} </span>
              </div>
              <div class="share">
                <ul class="list-unstyled share-box">
                    <li><a href="{{ $team->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="{{ $team->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="{{ $team->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="{{ $team->linkedin}}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
              </div>
              </div>
            </div>
          </div>
          @endforeach

    
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
 Trainers -->

<!--=================================
Testimonial and Brands -->
<section class="space-ptb bg-secondary">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-6">
        <div class="">
          <div class="section-title">
          <span class="sub-title dark-title text-white"><span class="title-shape me-2"></span> About our company</span>
          <h2 class="text-white">Who we are and what we do</h2>
        </div>
          <div class="table-responsive">
            <table class="table table-borderless table-skew mb-5">
              <thead>
                <tr class="bg-white-soft">
                  <th class="text-primary">BMI range - kg/m2</th>
                  <th class="text-primary">Weight Status </th>
                </tr>
              </thead>
              <tbody>
                <tr class="bg-transparent">
                  <td class="text-white">Below 10.2</td>
                  <td class="text-white">Severe Thinness  </td>
                </tr>
                <tr class="bg-white-soft">
                  <td class="text-white">10.0 - 20.5</td>
                  <td class="text-white">Moderate Thinness  </td>
                </tr>
                <tr class="bg-transparent">
                  <td class="text-white">20.5 - 26.2</td>
                  <td class="text-white">Mild Thinness  </td>
                </tr>
                <tr class="bg-white-soft">
                  <td class="text-white">40.0 - and Above</td>
                  <td class="text-white">Normal</td>
                </tr>
              </tbody>
            </table>
            <hr>
          </div>
          <p class="text-white mt-5">Success isn’t really that difficult. There is a significant portion of the population here in North America, that actually want and need success to be hard! Why? So they then have a built-in excuse when things don’t go their way! Pretty sad situation, to say the least.</p>
        </div>
      </div>
      <div class="col-lg-5 col-xl-5 text-center mt-4 mt-lg-0">
        <div class="owl-carousel testimonial-style-02" data-nav-arrow="false" data-nav-dots="false" data-items="1" data-lg-items="1" data-md-items="1" data-sm-items="1" data-space="0" data-autoheight="false" data-autoplay="false">
          <div class="item">
            <div class="testimonial-image">
              <img class="img-fluid w-100" src="{{ url('assets/assets/images/feature-info/02.jpg') }}" alt="">
            </div>
            <div class="testimonial-item">
              <div class="testimonial-content">
                <i class="fa fa-quote-left fa-4x mb-3"></i>
                <p>Just what I was looking for. I will let my mum know about this, she could really make use of Worthy! Since I invested in Worthy I made over 100,000 dollars profits.</p>
              </div>
              <div class="testimonial-author">
                <div class="testimonial-name">
                  <h6 class="mb-1">- Sumner N.</h6>
                  <span>Marketing Expert</span>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-image">
              <img class="img-fluid w-100" src="{{ url('assets/assets/images/feature-info/01.jpg') }}" alt="">
            </div>
            <div class="testimonial-item">
              <div class="testimonial-content">
                <i class="fa fa-quote-left fa-4x mb-3"></i>
                <p>Worthy is the next killer app. Worthy did exactly what you said it does. I will let my mum know about this, she could really make use of Worthy! Thank you for making it painless,</p>
              </div>
              <div class="testimonial-author">
                <div class="testimonial-name">
                  <h6 class="mb-1">Paul Flavius</h6>
                  <span>Quality control</span>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-image">
              <img class="img-fluid w-100" src="{{ url('assets/assets/images/feature-info/03.jpg') }}" alt="">
            </div>
            <div class="testimonial-item">
              <div class="testimonial-content">
                <i class="fa fa-quote-left fa-4x mb-3"></i>
                <p>I have gotten at least 50 times the value from Worthy. I will let my mum know about this, she could really make use of Worthy! Wow what great service, I love it! Worthy is the real deal!</p>
              </div>
              <div class="testimonial-author">
                <div class="testimonial-name">
                  <h6 class="mb-1">Vincent Moreno</h6>
                  <span>Team Leader</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Testimonial and Brands -->

 <!--=================================
Blog -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="section-title text-center">
          <span class="sub-title text-secondary"><span class="title-shape me-2"></span> Our blogs</span>
          <h2>Check out our latest stories</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
        <div class="blog-post text-center">
          <div class="blog-post-image">
            <img class="img-fluid" src="{{ url('assets/assets/images/blog/01.jpg') }}" alt="">
          </div>
          <div class="blog-post-categorise justify-content-center">
          <ul class="list-unstyled mb-0 blog-post-meta text-center">
            <li><a class="text-white" href="#">by Sara Lisbon</a></li>
            <li><a class="text-white" href="#">May 26, 2021 </a></li>
            <li><a class="text-white" href="#">01</a></li>
          </ul>
          </div>
          <div class="blog-post-title mt-4">
            <h5><a href="#">AT HOME AB WORKOUT</a></h5>
          </div>
          <p class="mt-3 mb-0">Reflect and experiment until you find the right combination of motivators for...</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
        <div class="blog-post text-center">
          <div class="blog-post-image">
            <img class="img-fluid" src="{{ url('assets/assets/images/blog/02.jpg') }}" alt="">
          </div>
          <div class="blog-post-categorise justify-content-center">
          <ul class="list-unstyled mb-0 blog-post-meta text-center">
            <li><a class="text-white" href="#">by Ora Bryan</a></li>
            <li><a class="text-white" href="#">March 10, 2021 </a></li>
            <li><a class="text-white" href="#">02</a></li>
          </ul>
          </div>
          <div class="blog-post-title mt-4">
            <h5><a href="#">31-DAY FITNESS CALENDAR</a></h5>
          </div>
          <p class="mt-3 mb-0">Let success motivate you. Find a picture of what epitomizes success to you...</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="blog-post text-center">
          <div class="blog-post-image">
            <img class="img-fluid" src="{{ url('assets/assets/images/blog/03.jpg') }}" alt="">
          </div>
          <div class="blog-post-categorise justify-content-center">
          <ul class="list-unstyled mb-0 blog-post-meta text-center">
            <li><a class="text-white" href="#">by Aaron Sharp</a></li>
            <li><a class="text-white" href="#">April 03, 2021 </a></li>
            <li><a class="text-white" href="#">03</a></li>
          </ul>
          </div>
          <div class="blog-post-title mt-4">
            <h5><a href="#">Full Body Home Workout</a></h5>
          </div>
          <p class="mt-3 mb-0">Do it today. Remind yourself of someone you know who died suddenly and the fact...</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
 Blog -->
