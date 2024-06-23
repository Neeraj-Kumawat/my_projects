  
        <div class="page-wrapper">
        <div class="content container-fluid">

        <div class="page-header">
        <div class="row align-items-center">
        <div class="col-sm-12">
        <div class="page-sub-header">
        <h3 class="page-title">Settings Manager</h3>
        <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="students.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Settings</li>
        </ul>
        </div>
        </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-12">
        <div class="card comman-shadow">
        <div class="card-body">
          @if(session('success'))
          <div class="alert alert-primary alert-dismissible fade show" role="alert">
              <strong>Success:</strong> {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
        <form method="POST" action="<?= url('/update-settings'); ?>" enctype="multipart/form-data">
            @csrf
        

        <div class="row">
        <div class="col-12">
        <h5 class="form-title student-info">Website Basic Details </h5>
        </div>
        <div class="col-12">
          <div class="form-group local-forms">
          <label>Website Titel<span class="login-danger">*</span></label>
          <textarea name="site_title" id="basic-icon-default-message" class="form-control"
      aria-describedby="basic-icon-default-message2">{{ $site_title ? $site_title->fieldvalue : '' }} </textarea>
          </div>
          </div>
        <div class="form-group">
          <p class="settings-label">Favicon <span class="star-red">*</span></p>
          <input name="favicon" class="form-control" type="file">
          <h6 class="settings-size">Recommended image size is <span>150px x 150px</span></h6>
          <div class="upload-images">
            @if(isset($favicon))
            <img name="favicon" src="{{ asset('public/settinges/' . $favicon->fieldvalue) }}" alt="Image">
        @else
            <p>No footer logo available</p>
        @endif
          <a href="javascript:void(0);" class="btn-icon logo-hide-btn">
          <i class="feather-x-circle"></i>
          </a>
          </div>
          </div>
    
          <div class="form-group">
            <p class="settings-label">Logo <span class="star-red">*</span></p>
            <input name="logo" class="form-control" type="file">
            <h6 class="settings-size">Recommended image size is <span>150px x 150px</span></h6>
            <div class="upload-images">
              @if($logo)
                <img name="logo" src="{{ asset('public/settinges/' . $logo->fieldvalue) }}" alt="Image">
            @else
                <p>No footer logo available</p>
            @endif
            <a href="javascript:void(0);" class="btn-icon logo-hide-btn">
            <i class="feather-x-circle"></i>
            </a>
            </div>
            </div>
      

          <div class="col-12">
            <h5 class="form-title student-info">Contact Us Information <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
            </div>


             
            <div class="col-12 col-sm-4">
          <div class="form-group local-forms">
          <label>Email Address<span class="login-danger">*</span></label>
          <input name="email_address" value="{{ $email_address ? $email_address->fieldvalue : '' }}" class="form-control"  type="text" placeholder="Enter Your Email Address">
          
          </div>
          </div>
          <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
            <label>Phone<span class="login-danger">*</span></label>
            <input name="phone" value="{{ $phone ? $phone->fieldvalue : '' }}" class="form-control" type="text" placeholder="Enter Your Phone Number">
           
            </div>
            </div>
            
          <div class="col-12">
            <div class="form-group local-forms">
            <label>Address<span class="login-danger">*</span></label>
            <textarea name="conact_address" id="basic-icon-default-message" class="form-control"
        aria-describedby="basic-icon-default-message2">{{ $conact_address ? $conact_address->fieldvalue : '' }} </textarea>
            </div>
            </div>
     
      
          <div class="col-12">
            <div class="form-group local-forms">
            <label>Google Map<span class="login-danger">*</span></label>
            <textarea name="google_map"  class="form-control"> {{ $google_map ? $google_map->fieldvalue : '' }} </textarea>
            </div>
            </div>
          <div class="col-12">
            <h5 class="form-title student-info">Working Hours <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
            </div>
          <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
            <label>Monday<span class="login-danger">*</span></label>
            <input name="monday" value="{{ $monday ? $monday->fieldvalue : '' }}" class="form-control" type="text" placeholder="Enter Your Monday Time">
       
            </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="form-group local-forms">
              <label>Tuesday<span class="login-danger">*</span></label>
              <input name="tuesday" value="{{ $tuesday ? $tuesday->fieldvalue : '' }}" class="form-control" type="text" placeholder="Enter Your Tuesday Time">
            
              </div>
              </div>
              <div class="col-12 col-sm-4">
                <div class="form-group local-forms">
                <label>Wednesday <span class="login-danger">*</span></label>
                <input name="wednesday"  value="{{ $wednesday ? $wednesday->fieldvalue : '' }}" class="form-control" type="text" placeholder="Enter Your Wednesday Time">
               
                </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-group local-forms">
                  <label>Thursday<span class="login-danger">*</span></label>
                  <input name="thursday" value="{{ $thursday ? $thursday->fieldvalue : '' }}" class="form-control" type="text" placeholder="Enter Your Thursday Time">
                
                  </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="form-group local-forms">
                    <label>Friday<span class="login-danger">*</span></label>
                    <input name="friday" value="{{ $friday ? $friday->fieldvalue : '' }}" class="form-control" type="text" placeholder="Enter Your Friday Time">
                    
                    </div>
                    </div>
                    <div class="col-12 col-sm-4">
                      <div class="form-group local-forms">
                      <label>Saturday<span class="login-danger">*</span></label>
                      <input name="saturday" value="{{ $saturday ? $saturday->fieldvalue : '' }}" class="form-control" type="text" placeholder="Enter Your Saturday Time">
                     
                      </div>
                      </div>
       
                      <div class="col-12">
                        <h5 class="form-title student-info">Footer Section<span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                        </div>
                  
                        <div class="col-12">
                          <div class="form-group local-forms">
                          <label>Footer About us Text<span class="login-danger">*</span></label>
                          <textarea name="footer_about" id="basic-icon-default-message" class="form-control"
                      aria-describedby="basic-icon-default-message2">{{ $footer_about ? $footer_about->fieldvalue : '' }} </textarea>
                          </div>
                          </div>
                          <div class="col-12 col-sm-12">
                            <div class="form-group local-forms">
                                <label for="footer_descripition">Footer Description</label>
                                <textarea name="footer_descripition" class="form-control">{{ $footer_descripition ? $footer_descripition->fieldvalue : '' }}</textarea>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12">
                            <div class="form-group local-forms">
                                <label for="footer_copy_right_text">Footer Copy Right Text</label>
                                <textarea name="footer_copy_right_text" class="form-control">{{ $footer_copy_right_text ? $footer_copy_right_text->fieldvalue : '' }}</textarea>
                            </div>
                        </div>
                        
                     
                              
                      
                        <div class="form-group">
                          <p class="settings-label">Footer Logo <span class="star-red">*</span></p>
                          <input name="footer_logo" class="form-control" type="file">
                          <h6 class="settings-size">Recommended image size is <span>150px x 150px</span></h6>
                          <div class="upload-images">
                            @if($footer_logo)
                              <img name="footer_logo" src="{{ asset('public/settinges/' . $footer_logo->fieldvalue) }}" alt="Image">
                          @else
                              <p>No footer logo available</p>
                          @endif
                          <a href="javascript:void(0);" class="btn-icon logo-hide-btn">
                          <i class="feather-x-circle"></i>
                          </a>
                          </div>
                          </div>


                          <div class="col-12">
                            <h5 class="form-title student-info">OUR Icon<span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                            </div>

                              <div class="settings-form">
                                      <div class="links-info">
                                      <div class="row form-row links-cont">
                                      <div class="form-group form-placeholder d-flex">
                                      <button class="btn social-icon">
                                      <i class="feather-facebook"></i>
                                      </button>
                                      <input name="facebook" type="text" value="{{ $facebook ? $facebook->fieldvalue : '' }}" class="form-control" placeholder="https://www.facebook.com">
                                      
                                      </div>
                                      </div>
                                      </div>
                                      <div class="links-info">
                                              <div class="row form-row links-cont">
                                              <div class="form-group form-placeholder d-flex">
                                              <button class="btn social-icon">
                                              <i class="feather-instagram"></i>
                                              </button>
                                              <input type="text" name="twitter" value="{{ $twitter ? $twitter->fieldvalue : '' }}" class="form-control" placeholder="https://www.youtube.com">
                                            
                                              </div>
                                              </div>
                                              </div>
                                      <div class="links-info">
                                      <div class="row form-row links-cont">
                                      <div class="form-group form-placeholder d-flex">
                                      <button class="btn social-icon">
                                      <i class="feather-twitter"></i>
                                      </button>
                                      <input name="instagram" type="text"  value="{{ $instagram ? $instagram->fieldvalue : '' }}" class="form-control" placeholder="https://www.twitter.com">
                                   
                                      </div>
                                      </div>
                                      </div>
                                     
                                      <div class="links-info">
                                      <div class="row form-row links-cont">
                                      <div class="form-group form-placeholder d-flex">
                                      <button class="btn social-icon">
                                      <i class="feather-linkedin"></i>
                                      </button>
                                      <input type="text" name="linkedin" value="{{ $linkedin ? $linkedin->fieldvalue : '' }}" class="form-control" placeholder="https://www.linkedin.com">
                                    
                                      </div>
                                      </div>
                                      </div>
                                      </div>
                            
                    
    
 

        <div class="col-12">
        <div class="student-submit">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>

        </div>
        <script src="{{url('assets/js/jquery-3.6.0.min.js')}}"></script>

        <script src="{{url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <script src="{{url('assets/js/feather.min.js')}}"></script>

        <script src="{{url('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

        <script src="{{url('assets/plugins/datatables/datatables.min.js')}}"></script>

        <script src="{{url('assets/js/script.js')}}"></script>
        <script src="{{url('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{url('assets/plugins/select2/js/select2.min.js')}}"></script>
        <script src="{{url('assets/plugins/moment/moment.min.js')}}"></script>
        </body>
        </html>