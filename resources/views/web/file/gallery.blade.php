
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

<!--=================================
Gallery -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        {{-- <div class="filters-group mb-2 mb-lg-5">
          <button class="btn-filter  active" data-group="all"><span>All</span></button>
          <button class="btn-filter" data-group="boxing"><span>Boxing</span></button>
          <button class="btn-filter" data-group="fitness"><span>fitness</span></button>
          <button class="btn-filter" data-group="yoga"><span>Yoga</span></button>
          <button class="btn-filter" data-group="cardio"><span>Cardio</span></button>
        </div> --}}
        <div class="my-shuffle-container columns-3 popup-gallery">
          <!-- item START -->
          @foreach($gallery as $galleryshow)
          <div class="grid-item" data-groups='["boxing"]'>
            <div class="portfolio-item">
              <img class="img-fluid" src="{{ url('public/gallery/' . $galleryshow->img) }}" alt="">
              <div class="portfolio-info">
                <span class="portfolio-category">
                  <a href="#">{{$galleryshow->title}} </a>

                </span>
                <div class="me-4">
                  {{-- <a href="gallery-single.html" class="portfolio-title">Innovation</a> --}}
                </div>
              </div>
              <div class="portfolio-icon">
                <a class="portfolio-img" href="{{ url('public/gallery/' . $galleryshow->img) }}">
                  <i class="far fa-plus-square"></i>
                </a>
              </div>
            </div>
          </div>
          @endforeach
          <!-- item End -->
          <!-- item START -->
          {{-- <div class="grid-item" data-groups='["fitness"]'>
            <div class="portfolio-item">
             <img class="img-fluid" src="{{ url('assets/assets/images/about/01.jpg') }}" alt="">
              <div class="portfolio-info">
                <span class="portfolio-category">
                  <a href="#">Fitness, </a>
                  <a href="#">Yoga</a>
                </span>
                <div class="me-4">
                  <a href="gallery-single.html" class="portfolio-title">Motivation</a>
                </div>
              </div>
              <div class="portfolio-icon">
                <a class="portfolio-img" href="{{ url('assets/assets/images/gallery/02.jpg') }}">
                  <i class="far fa-plus-square"></i>
                </a>
              </div>
            </div>
          </div> --}}
          <!-- item End -->
          <!-- item START -->
          {{-- <div class="grid-item" data-groups='["yoga"]'>
           <div class="portfolio-item">
             <img class="img-fluid" src="{{ url('assets/assets/images/gallery/03.jpg') }}" alt="">
              <div class="portfolio-info">
                <span class="portfolio-category">
                  <a href="#">Yoga, </a>
                  <a href="#">GYM</a>
                </span>
                <div class="me-4">
                  <a href="gallery-single.html" class="portfolio-title">Innovation</a>
                </div>
              </div>
              <div class="portfolio-icon">
                <a class="portfolio-img" href="{{ url('assets/assets/images/gallery/03.jpg') }}">
                  <i class="far fa-plus-square"></i>
                </a>
              </div>
            </div>
          </div> --}}
          <!-- item End -->
          <!-- item START -->
          {{-- <div class="grid-item" data-groups='["cardio", "fitness"]'>
            <div class="portfolio-item">
             <img class="img-fluid" src="{{ url('assets/assets/images/gallery/04.jpg') }}" alt="">
              <div class="portfolio-info">
                <span class="portfolio-category">
                  <a href="#">GYM, </a>
                  <a href="#">Cardio</a>
                </span>
                <div class="me-4">
                  <a href="gallery-single.html" class="portfolio-title">Innovation</a>
                </div>
              </div>
              <div class="portfolio-icon">
                <a class="portfolio-img" href="{{ url('assets/assets/images/gallery/04.jpg') }}">
                  <i class="far fa-plus-square"></i>
                </a>
              </div>
            </div>
          </div>
          <!-- item End -->
          <!-- item START -->
          <div class="grid-item" data-groups='["cardio"]'>
            <div class="portfolio-item">
             <img class="img-fluid" src="{{ url('assets/assets/images/gallery/05.jpg') }}" alt="">
              <div class="portfolio-info">
                <span class="portfolio-category">
                  <a href="#">GYM, </a>
                  <a href="#">Yoga</a>
                </span>
                <div class="me-4">
                  <a href="gallery-single.html" class="portfolio-title">Innovation</a>
                </div>
              </div>
              <div class="portfolio-icon">
                <a class="portfolio-img" href="{{ url('assets/assets/images/gallery/05.jpg') }}">
                  <i class="far fa-plus-square"></i>
                </a>
              </div>
            </div>
          </div>
          <!-- item End -->
          <!-- item START -->
          <div class="grid-item" data-groups='["boxing"]'>
           <div class="portfolio-item">
             <img class="img-fluid" src="{{ url('assets/assets/images/gallery/06.jpg') }}" alt="">
              <div class="portfolio-info">
                <span class="portfolio-category">
                  <a href="#">Cardio, </a>
                  <a href="#">Fitness</a>
                </span>
                <div class="me-4">
                  <a href="gallery-single.html" class="portfolio-title">Innovation</a>
                </div>
              </div>
              <div class="portfolio-icon">
                <a class="portfolio-img" href="{{ url('assets/assets/images/gallery/06.jpg') }}">
                  <i class="far fa-plus-square"></i>
                </a>
              </div>
            </div>
          </div> --}}
          <!-- item End -->
          <!-- item START -->
          {{-- <div class="grid-item" data-groups='["cardio"]'>
           <div class="portfolio-item">
             <img class="img-fluid" src="{{ url('assets/assets/images/gallery/07.jpg') }}" alt="">
              <div class="portfolio-info">
                <span class="portfolio-category">
                  <a href="#">Fitness, </a>
                  <a href="#">Boxing</a>
                </span>
                <div class="me-4">
                  <a href="gallery-single.html" class="portfolio-title">Innovation</a>
                </div>
              </div>
              <div class="portfolio-icon">
                <a class="portfolio-img" href="{{ url('assets/assets/images/gallery/07.jpg') }}">
                  <i class="far fa-plus-square"></i>
                </a>
              </div>
            </div>
          </div>
          <!-- item End -->
          <!-- item START -->
          <div class="grid-item" data-groups='["boxing", "fitness"]'>
            <div class="portfolio-item">
             <img class="img-fluid" src="{{ url('assets/assets/images/gallery/08.jpg') }}" alt="">
              <div class="portfolio-info">
                <span class="portfolio-category">
                  <a href="#">GYM, </a>
                  <a href="#">Fitness</a>
                </span>
                <div class="me-4">
                  <a href="gallery-single.html" class="portfolio-title">Innovation</a>
                </div>
              </div>
              <div class="portfolio-icon">
                <a class="portfolio-img" href="{{ url('assets/assets/images/gallery/08.jpg') }}">
                  <i class="far fa-plus-square"></i>
                </a>
              </div>
            </div>
          </div>
          <!-- item End -->
          <!-- item START -->
          <div class="grid-item" data-groups='["cardio"]'>
            <div class="portfolio-item">
             <img class="img-fluid" src="{{ url('assets/assets/images/gallery/09.jpg') }}" alt="">
              <div class="portfolio-info">
                <span class="portfolio-category">
                  <a href="#">GYM, </a>
                  <a href="#">Cardio</a>
                </span>
                <div class="me-4">
                  <a href="gallery-single.html" class="portfolio-title">Innovation</a>
                </div>
              </div>
              <div class="portfolio-icon">
                <a class="portfolio-img" href="{{ url('assets/assets/images/gallery/09.jpg') }}">
                  <i class="far fa-plus-square"></i>
                </a>
              </div>
            </div>
          </div> --}}
          <!-- item End -->
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
 Gallery -->
