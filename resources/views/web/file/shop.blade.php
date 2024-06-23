
<!--=================================
banner -->
<section class="inner-banner bg-holder bg-overlay-black-70" data-jarallax='{"speed": 0.6}' style="background-image: url(assets/assets/images/bg/06.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 text-center">
        <h1 class="text-primary display-3 font-weight-bold text-uppercase">Shop</h1>
        <p class="text-white lead mb-0">Create more robust client connections, make more sales, and save time with our end to end solution.</p>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Shop</li>
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
banner -->membership-add.blade

<!--=================================
product -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <h5 class="mb-4">Product filters</h5>
        <div class="row">
          <div class="col-lg-4">
            <input type="search" id="shop-filter-search" class="search-field form-group" placeholder="Search products…" value="" name="s">
          </div>
          <div class="col-lg-4">
            <div class="form-group select-border">
              <select class="form-control basic-select">
                <option value="1" selected="selected">Accessories</option>
                <option value="3">Belts</option>
                <option value="4">Chair</option>
                <option value="2">Stick</option>
              </select>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group select-border">
              <select class="form-control basic-select">
                <option value="1" selected="selected">Any rating</option>
                <option value="2">5 Star</option>
                <option value="3">4 Star</option>
                <option value="4">3 Star</option>
                <option value="5">2 Star</option>
                <option value="6">1 Star</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group select-border">
              <select class="form-control basic-select">
                <option value="1" selected="selected">Any color</option>
                <option value="1">Black, brown</option>
                <option value="2">Blue</option>
                <option value="3">Dark grey</option>
                <option value="4">Green</option>
                <option value="5">Pink</option>
                <option value="6">Red</option>
              </select>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group select-border">
              <select class="form-control basic-select">
                <option value="1" selected="selected">Any size</option>
                <option value="2">L</option>
                <option value="2">M</option>
                <option value="3">S</option>
                <option value="4">XS</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row my-2 align-items-center">
          <div class="col-lg-8">
            <p>Showing all 2 results</p>
          </div>
          <div class="col-lg-4">
            <div class="form-group select-border">
              <select class="form-control basic-select">
                <option value="1" selected="selected">Default sorting</option>
                <option value="2">Sort by popularity</option>
                <option value="3">Sort by average rating</option>
                <option value="4">Sort by latest</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-6 col-lg-4 col-sm-6 mb-5">
            <div class="product">
              <div class="product-image">
                <img class="img-fluid mx-auto" src="{{ url('assets/assets/images/shop/product/01.jpg') }}" alt="">
                <div class="product-overlay">
                 <div class="add-to-cart">
                    <a href="shop-cart.html"> <span> add to cart </span> </a>
                  </div>
                </div>
              </div>
              <div class="product-description">
                <div class="product-title">
                  <a href="shop-single.html">Women Style Dumbbell</a>
                </div>
                <div class="product-price">
                  <del>$24.99</del> <ins>$12.49</ins>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-sm-6 mb-5">
            <div class="product">
              <div class="product-image">
                <img class="img-fluid mx-auto" src="{{ url('assets/assets/images/shop/product/02.jpg') }}" alt="">
                <div class="product-overlay">
                 <div class="add-to-cart">
                    <a href="shop-cart.html"> <span> add to cart </span> </a>
                  </div>
                </div>
              </div>
              <div class="product-description">
                <div class="product-title">
                  <a href="shop-single.html">Jukebox Single Gym Towel</a>
                </div>
                <div class="product-price">
                  <del>$20.00</del> <ins>$15.00</ins>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-sm-6 mb-5">
            <div class="product">
              <div class="product-image">
                <img class="img-fluid mx-auto" src="{{ url('assets/assets/images/shop/product/03.jpg') }}" alt="">
               <div class="product-overlay">
                <div class="add-to-cart">
                  <a href="shop-cart.html"> <span> add to cart </span> </a>
                </div>
              </div>
              </div>
              <div class="product-description">
                <div class="product-title">
                  <a href="shop-single.html">5 feet straight Rod</a>
                </div>
                <div class="product-price">
                  <del>$21.99</del> <ins>$17.49</ins>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-sm-6 mb-5">
            <div class="product">
              <div class="product-image">
                <img class="img-fluid mx-auto" src="{{ url('assets/assets/images/shop/product/04.jpg') }}" alt="">
              <div class="product-overlay">
               <div class="add-to-cart">
                  <a href="shop-cart.html"> <span> add to cart </span> </a>
                </div>
              </div>
              </div>
              <div class="product-description">
                <div class="product-title">
                  <a href="shop-single.html">Yoga leggings</a>
                </div>
                <div class="product-price">
                  <del>$24.99</del> <ins>$12.49</ins>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-sm-6 mb-5 mb-lg-0">
            <div class="product">
              <div class="product-image">
                <img class="img-fluid mx-auto" src="{{ url('assets/assets/images/shop/product/05.jpg') }}" alt="">
              <div class="product-overlay">
                <div class="add-to-cart">
                  <a href="shop-cart.html"> <span> add to cart </span> </a>
                </div>
              </div>
              </div>
              <div class="product-description">
                <div class="product-title">
                  <a href="shop-single.html">Woman running on stairs</a>
                </div>
                <div class="product-price">
                  <ins>$25.49</ins>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-sm-6 mb-5 mb-lg-0">
            <div class="product">
              <div class="product-image">
                <img class="img-fluid mx-auto" src="{{ url('assets/assets/images/shop/product/06.jpg') }}" alt="">
              <div class="product-overlay">
                <div class="add-to-cart">
                  <a href="shop-cart.html"> <span> add to cart </span> </a>
                </div>
              </div>
              </div>
              <div class="product-description">
                <div class="product-title">
                  <a href="shop-single.html">Steel Dumble Black Stud</a>
                </div>
                <div class="product-price">
                  <del>$27.00</del> <ins>$20.00</ins>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-sm-6 mb-5 mb-lg-0">
            <div class="product">
              <div class="product-image">
                <img class="img-fluid mx-auto" src="{{ url('assets/assets/images/shop/product/07.jpg') }}" alt="">
               <div class="product-overlay">
                 <div class="add-to-cart">
                    <a href="shop-cart.html"> <span> add to cart </span> </a>
                  </div>
               </div>
              </div>
              <div class="product-description">
                <div class="product-title">
                  <a href="shop-single.html">Yoga Mat with Shoulder Strap</a>
                </div>
                <div class="product-price">
                  <del>$25.99</del> <ins>$10.49</ins>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-sm-6 mb-5 mb-lg-0">
            <div class="product">
              <div class="product-image">
                <img class="img-fluid mx-auto" src="{{ url('assets/assets/images/shop/product/09.jpg') }}" alt="">
                 <div class="product-overlay">
                 <div class="add-to-cart">
                  <a href="shop-cart.html"> <span> add to cart </span> </a>
                 </div>
                </div>
              </div>
              <div class="product-description">
                <div class="product-title">
                  <a href="shop-single.html">Squats at the gym</a>
                </div>
                <div class="product-price">
                  <del>$30.00</del> <ins>$25.00</ins>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-sm-6">
            <div class="product">
              <div class="product-image">
                <img class="img-fluid mx-auto" src="{{ url('assets/assets/images/shop/product/08.jpg') }}" alt="">
                 <div class="product-overlay">
                  <div class="add-to-cart">
                    <a href="shop-cart.html"> <span> add to cart </span> </a>
                  </div>
                </div>
               </div>
               <div class="product-description">
                <div class="product-title">
                  <a href="shop-single.html">Jukebox Single Gym Towel</a>
                </div>
                <div class="product-price">
                  <del>$20.00</del> <ins>$15.00</ins>
                </div>
               </div>
              </div>
           </div>
        </div>
      </div>
      <div class="col-lg-3 mt-5 mt-lg-0">
        <div class="shop-sidebar">
          <div class="widget">
            <div class="widget-title">
              <h5>Filter by price</h5>
            </div>
            <div class="form-group">
              <div class="collapse show" id="price">
                <div class="property-price-slider">
                  <input type="text" id="property-price-slider" name="example_name" value="" />
                </div>
              </div>
            </div>
            <div class="price-filter">
              <div class="price_label">
                Price: <span class="from">$10 — $382</span>
              </div>
              <a class="" href="#"><i class="fas fa-filter"></i>Filter</a>
            </div>
          </div>
          <div class="widget">
            <div class="widget-title">
              <h5>Filter by color</h5>
            </div>
            <div class="custom-control form-check custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck2">
              <label class="custom-control-label" for="customCheck2">Black, brown</label>
              <span class="text-secondary">(2)</span>
            </div>
            <div class="custom-control form-check custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck3">
              <label class="custom-control-label" for="customCheck3">Blue</label>
              <span class="text-secondary">(1)</span>
            </div>
            <div class="custom-control form-check custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck4">
              <label class="custom-control-label" for="customCheck4">Dark grey</label>
              <span class="text-secondary">(2)</span>
            </div>
            <div class="custom-control form-check custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck5">
              <label class="custom-control-label" for="customCheck5">Pink</label>
              <span class="text-secondary">(3)</span>
            </div>
            <div class="custom-control form-check custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck6">
              <label class="custom-control-label" for="customCheck6">Green</label>
              <span class="text-secondary">(1)</span>
            </div>
            <div class="custom-control form-check custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck7">
              <label class="custom-control-label" for="customCheck7">Red</label>
              <span class="text-secondary">(1)</span>
            </div>
          </div>
          <div class="widget">
            <div class="widget-title">
              <h5>Filter by size</h5>
            </div>
            <div class="custom-control form-check custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck8">
              <label class="custom-control-label" for="customCheck8">XS</label>
              <span class="text-secondary">(2)</span>
            </div>
            <div class="custom-control form-check custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck9">
              <label class="custom-control-label" for="customCheck9">SM</label>
              <span class="text-secondary">(1)</span>
            </div>
            <div class="custom-control form-check custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck10">
              <label class="custom-control-label" for="customCheck10">LG</label>
              <span class="text-secondary">(2)</span>
            </div>
            <div class="custom-control form-check custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck11">
              <label class="custom-control-label" for="customCheck11">XL</label>
              <span class="text-secondary">(3)</span>
            </div>
            <div class="custom-control form-check custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck12">
              <label class="custom-control-label" for="customCheck12">XXL</label>
              <span class="text-secondary">(1)</span>
            </div>
            <div class="custom-control form-check custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck13">
              <label class="custom-control-label" for="customCheck13">XXXL</label>
              <span class="text-secondary">(1)</span>
            </div>
          </div>
          <div class="widget">
            <div class="widget-title">
              <h5>Categories</h5>
            </div>
            <div class="widget-categories">
              <ul class="list-unstyled list-style mb-0">
                <li><a href="#">Pet health</a></li>
                <li><a href="#">Daycare insurance</a></li>
                <li><a href="#">General surgery</a></li>
                <li><a href="#">24 Hour care</a></li>
                <li><a href="#">In-House pharmacy</a></li>
              </ul>
            </div>
          </div>
          <div class="widget">
            <div class="widget-title">
              <h5>Follow on</h5>
            </div>
            <div class="social">
              <ul class="list-unstyled">
                <li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                <li><a href="#"> <i class="fab fa-instagram"></i> </a></li>
                <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
                <li><a href="#"> <i class="fab fa-dribbble"></i> </a></li>
              </ul>
            </div>
          </div>
          <div class="widget">
            <div class="widget-title">
              <h5>Tags</h5>
            </div>
            <div class="tagcloud">
              <ul class="list-unstyled">
                <li><a href="#"> <span> Bodybuilding </span></a></li>
                <li><a href="#"> <span> Class </span></a></li>
                <li><a href="#"> <span> Fitness </span></a></li>
                <li><a href="#"> <span> Coach </span></a></li>
                <li><a href="#"> <span> Fitness </span></a></li>
                <li><a href="#"> <span> Health </span></a></li>
                <li><a href="#"> <span> Workout </span></a></li>
                <li><a href="#"> <span> Training </span></a></li>
                <li><a href="#"> <span> Bootstrap </span></a></li>
                <li><a href="#"> <span> HTML5 </span></a></li>
                <li><a href="#"> <span> CSS3 </span></a></li>
              </ul>
            </div>
          </div>
          <div class="bg-holder px-4 py-5 bg-overlay-black-70" style="background-image: url('assets/assets/images/shop/siderbar-banner.jpg');">
            <div class="position-relative">
              <span class="text-white">Accessories</span>
              <h2 class="text-white">SALE</h2>
              <a href="#" class="btn btn-primary btn-sm mt-2"> <span> Click Here </span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
product -->
