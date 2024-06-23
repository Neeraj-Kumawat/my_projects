
<!--=================================
banner -->
<section class="inner-banner bg-holder bg-overlay-black-70" data-jarallax='{"speed": 0.6}' style="background-image: url(assets/assets/images/bg/06.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 text-center">
        <h1 class="text-primary display-3 font-weight-bold text-uppercase">Blog</h1>
        <p class="text-white lead mb-0">Create more robust client connections, make more sales, and save time with our end to end solution.</p>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <h4 style="color: white;">
                  <a href="{{url('/')}}" style="color: white;">Home</a>
                  <span style="color: white;"> / Blog</span>
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
Blog -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      
      @foreach($blogs as $product)
      <div class="col-lg-4 col-md-6 mb-5">
        <div class="blog-post text-center">
          <div class="blog-post-image">
            <img class="img-fluid" src="{{ url('public/blog/' . $product->img) }}" alt="">
          </div>
          <div class="blog-post-categorise justify-content-center">
          <ul class="list-unstyled mb-0 blog-post-meta text-center">
            <li><a class="text-white" href="{{('blog-single')}}">{{$product->by_text}}</a></li>
            <li><a class="text-white" href="#">{{$product->by_date}}</a></li>
          </ul>
          </div>
          <div class="blog-post-title mt-4">
            <h5><a href="#">{{$product->title}}</a></h5>
          </div>
          <p class="mt-3">{{$product->descripition}}</p>
        </div>
      </div>
      @endforeach
 

      <div class="col-12">
        <ul class="pagination justify-content-center mb-0">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><span>Previous</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#"><span>1</span></a></li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="#"> <span>2</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#"><span>3</span></a></li>
          <li class="page-item">
            <a class="page-link" href="#"><span>Next</span></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!--=================================
 Blog -->
