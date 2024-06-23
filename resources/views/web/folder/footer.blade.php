
<!--=================================
footer-->
<footer class="footer space-pt">
    <div class="container">
      <div class="row pb-5">
        <div class="col-lg-3 col-md-6">
          <div class="footer-contact-info">
            <h5 class="text-white mb-4">{{settingsContentByKey('footer_about') }}</h5>
            <p class="text-white mb-4 mt-3">{{settingsContentByKey('footer_descripition') }}</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
          <h5 class="text-white mb-4">Useful Links</h5>
          <div class="footer-useful-List">
            <ul class="list-unstyled mb-0">
              <li><a href="{{url('about-us')}}">About Us</a></li>
              <li><a href="{{url('faqs')}}">Faqs</a></li>
           
            </ul>
            <ul class="list-unstyled mb-0">
              <li><a href="{{url('blog')}}">Blog</a></li>
              <li><a href="{{url('contact-us')}}">Contact-Us</a></li>

            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="footer-link">
            <h5 class="text-white mb-4">Subscribe us</h5>
            <div class="footer-subscribe">
              <p class="text-white">Sign up to our newsletter to get the latest news and offers.</p>
              <form class="mt-4" action="{{url('footer/contacts') }}" method="POST">
                @csrf
                <div class="form-group">
                  <input type="email" name="subemail" class="form-control" placeholder="Enter email">
                  <span class="text-danger">
                    @error('subemail')
                    {{$message}}                                
                    @enderror
                  </span>
                </div>
                <button type="submit" name="submit" class="btn btn-sm btn-primary"> <span> Get notified </span> </button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="footer-insta">
              <h5 class="text-white mb-4">OUR GALLERY</h5>
              <ul class="list-unstyled d-flex flex-wrap mb-0">
                  @foreach(getImageUrls() as $imageUrl)
                  <li class="mb-0"><a href="#"><img class="avatar avatar-lg" src="{{ asset('public/gallery/' . $imageUrl) }}" alt="Image"></a></li>
                  @endforeach
              </ul>
          </div>
      </div>
      </div>
      <hr class="m-0" />
      <div class="footer-bottom mt-0">
        <div class="row align-items-center">
          <div class="col-md-3 text-center text-md-start">
            <a class="footer-logo" href="{{url('/')}}">
              <img class="img-fluid logo" src="{{ asset('public/settinges/' . settingsContentByKey('footer_logo')) }}" alt="logo" />
            </a>
          </div>
          <div class="col-md-5 text-center text-md-left my-2 my-md-0">
            <p class="mb-0 text-white">{{settingsContentByKey('footer_copy_right_text') }} </p>
          </div>
          <div class="col-md-4 text-center text-md-right">
            <ul class="list-unstyled list-inline mb-0">
              <li class="list-inline-item"><a class="text-white" href="#">Terms & Conditions</a></li>
              <li class="list-inline-item"><a class="text-white" href="#">API Use Policy</a></li>
              <li class="list-inline-item"><a class="text-white" href="#">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--=================================
  footer-->
  
  <!--=================================
  Back To Top-->
  
   <div id="back-to-top" class="back-to-top">
    <a href="#"> <i class="fas fa-angle-up"></i></a>
   </div>
  
  <!--=================================
  Back To Top-->
  
  <!--=================================
  Javascript -->
  
    <!-- JS Global Compulsory (Do not remove)-->
    <script src="{{ url('assets/assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ url('assets/assets/js/popper/popper.min.js') }}"></script>
    <script src="{{ url('assets/assets/js/bootstrap/bootstrap.min.js') }}"></script>
    
  
    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="{{ url('assets/assets/js/jquery.appear.js') }}"></script>
    <script src="{{ url('assets/assets/js/select2/select2.full.js') }}"></script>
    <script src="{{ url('assets/assets/js/range-slider/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ url('assets/assets/js/counter/jquery.countTo.js') }}"></script>
    <script src="{{ url('assets/assets/js/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ url('assets/assets/js/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ url('assets/assets/js/swiper/swiper.min.js') }}"></script>
    <script src="{{ url('assets/assets/js/swiperanimation/SwiperAnimation.min.js') }}"></script> 
    <script src="{{ url('assets/assets/js/slick/slick.min.js') }}"></script>
    <script src="{{ url('assets/assets/js/shuffle/shuffle.min.js') }}"></script>
    <script src="{{ url('assets/assets/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
   
    <!-- Template Scripts (Do not remove)-->
    <script src="{{ url('assets/assets/js/custom.js') }}"></script>
    <script>
      //     $(document).ready(function () {
      //       $('.servideletebtn').click(function (e) {
      //         e.preventDefault();
    
      //         var URL = $(this).attr('href');
    
      //         //alert(URL);
    
      // swal({ 
      //     title: "Are you sure?",
      //     text: "Once deleted, you will not be able to recover this imaginary file!",
      //     icon: "warning",
      //     buttons: true,
      //     dangerMode: true,
      //   })
      //   .then((willDelete) => {
      //     if (willDelete) { 
    
      //       window.location.href = URL;
      //       // swal("Poof! Your imaginary file has been deleted!", {
      //       //   icon: "success",
      //       // });
      //     } 
      // });
      //       });
    
    
            $("#close").click(function(){
    $(this).parent().remove();
    });
    </script>
  
  </body>
  
  <!-- Mirrored from themes.potenzaglobalsolutions.com/html/fitness/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Nov 2023 08:56:01 GMT -->
  </html>
  