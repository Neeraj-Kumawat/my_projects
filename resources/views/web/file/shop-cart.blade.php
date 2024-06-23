
<!--=================================
banner -->
<section class="inner-banner bg-holder bg-overlay-black-70" data-jarallax='{"speed": 0.6}' style="background-image: url(assets/assets/images/bg/06.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 text-center">
        <h1 class="text-primary display-3 font-weight-bold text-uppercase">Shop Cart</h1>
        <p class="text-white lead mb-0">Create more robust client connections, make more sales, and save time with our end to end solution.</p>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Shop Cart</li>
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
Compare properties -->
<section class="space-ptb bg-holder">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mb-5 mb-lg-0">
        <div class="cart-table">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="product-remove">&nbsp;</th>
                  <th class="product-thumbnail">&nbsp;</th>
                  <th class="product-name">Product</th>
                  <th class="product-price">Price</th>
                  <th class="product-quantity">Quantity</th>
                  <th class="product-subtotal">Subtotal</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="product-remove"><a href="#"><i class="far fa-trash-alt"></i></a></td>
                  <td class="product-thumbnail"><a href="#"><img src="{{ url('assets/assets/images/shop/product/01.jpg') }}" alt=""></a></td>
                  <td class="product-name"><a href="#">Women Style Dumbbell</a></td>
                  <td class="product-price"><span class="amount">$9.82</span></td>
                  <td class="product-quantity">
                    <form>
                      <div class="form-group">
                        <input type="number" class="form-control" id="number" value="1">
                      </div>
                    </form>
                  </td>
                  <td class="product-subtotal"><span class="subtotal">$9.82</span></td>
                </tr>
                <tr>
                  <td class="product-remove"><a href="#"><i class="far fa-trash-alt"></i></a></td>
                  <td class="product-thumbnail"><a href="#"><img src="{{ url('assets/assets/images/shop/product/02.jpg') }}" alt=""></a></td>
                  <td class="product-name"><a href="#">Jukebox Single Gym Towel</a></td>
                  <td class="product-price"><span class="amount">$9.82</span></td>
                  <td class="product-quantity">
                    <form>
                      <div class="form-group">
                        <input type="number" class="form-control" id="number2" value="2">
                      </div>
                    </form>
                  </td>
                  <td class="product-subtotal"><span class="subtotal">$9.82</span></td>
                </tr>
                <tr>
                  <td class="product-remove"><a href="#"><i class="far fa-trash-alt"></i></a></td>
                  <td class="product-thumbnail"><a href="#"><img src="{{ url('assets/assets/images/shop/product/03.jpg') }}" alt=""></a></td>
                  <td class="product-name"><a href="#">5 feet straight Rodr</a></td>
                  <td class="product-price"><span class="amount">$9.82</span></td>
                  <td class="product-quantity">
                    <form>
                      <div class="form-group">
                        <input type="number" class="form-control" id="number3" value="3">
                      </div>
                    </form>
                  </td>
                  <td class="product-subtotal"><span class="subtotal">$9.82</span></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="actions">
            <div class="coupon mt-3 mt-lg-0 mt-md-0 mt-sm-0">
              <form>
                <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code">
                <a class="btn btn-primary" href="#"> Apply coupon</a>
              </form>
            </div>
            <div class="update-cart mt-3 mt-sm-0"> <a class="btn btn-primary" href="#"> Update cart</a></div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="cart-totals">
          <h4 class="cart-totals-title">Cart totals</h4>
          <div class="table-responsive">
            <table class="table table-bordered">
              <tbody>
                <tr class="cart-subtotal">
                  <th>Subtotal</th>
                  <td><span class="subtotal">$9.82</span></td>
                </tr>
                <tr class="shipping">
                  <th>Shipping</th>
                  <td>
                    <form>
                      <div class="form-group">
                        <div class="custom-control custom-radio">
                          <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio1">Flat rate</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio2">Local pickup</label>
                        </div>
                      </div>
                    </form>
                    <p>Shipping to <strong>CA.</strong></p>
                    <a href="#">Change address <i class="fas fa-shopping-cart"></i></a>
                  </td>
                </tr>
                <tr class="order-total">
                  <th>Total</th>
                  <td>
                    <span class="amount">$9.82</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="text-center">
            <a href="shop-checkout.html" class="btn btn-dark checkout-button">Proceed to checkout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Compare properties -->
