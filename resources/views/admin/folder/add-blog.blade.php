


        <div class="page-wrapper">
        <div class="content container-fluid">

        <div class="page-header">
        <div class="row align-items-center">
        <div class="col-sm-12">
        <div class="page-sub-header">
        <h3 class="page-title">Blog Manager</h3>
        <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="students.html">Dashboard 
        </a></li>
        <li class="breadcrumb-item active">Blog Add</li>
        </ul>
        </div>
        </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-12">
        <div class="card comman-shadow">
        <div class="card-body">
                <form method="POST" action="{{ url('admin/blog-form') }}" enctype="multipart/form-data">
                        @csrf
        <div class="row">

           <div class="page-header">
            <div class="row align-items-center">
            <div class="col">
            <h3 class="page-title">Blog Information</h3>
            </div>
            <div class="col-auto text-end float-end ms-auto download-grp">
            <a href="{{url('admin/blog-list')}}" class="btn btn-primary"><i class="fas fa-plus">𝐁𝐚𝐜𝐤</i></a>
            </div>
            </div>
            </div>
        <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
        <label>Admin<span class="login-danger">*</span></label>
        <input name="by_text" class="form-control" type="text" placeholder="Enter Your Admin Text">
        <span class="text-danger">
                @error('by_text')
                {{$message}}                                
                @enderror
              </span>
        </div>
        </div>
        <div class="col-12 col-sm-4">
                <div class="form-group local-forms">
                <label>Date <span class="login-danger">*</span></label>
                <input name="by_date" class="form-control" type="Date" >
                <span class="text-danger">
                        @error('by_date')
                        {{$message}}                                
                        @enderror
                      </span>
                </div>
                </div>
                <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                        <label>Status <span class="login-danger">*</span></label>
                        <select name="status" class="form-control ">
                                <option value="">Select Status</option>
                        <option value="ACTIVE">ACTIVE</option>
                        <option value="INACTIVE">INACTIVE</option>
                    
                        </select>
                        <span class="text-danger">
                                @error('status')
                                {{$message}}                                
                                @enderror
                              </span>
                        </div>
                        </div>
                <div class="col-12 col-sm-4">
                        <div class="form-group local-forms">
                        <label>Title <span class="login-danger">*</span></label>
                        <input name="title" class="form-control" type="text" placeholder="Enter Your Title Text">
                        <span class="text-danger">
                                @error('title')
                                {{$message}}                                
                                @enderror
                              </span>
                        </div>
                        </div>
                    
        <div class="col-12 col-sm-12">
                <div class="form-group local-forms">
                <label>DESCRIPITION <span class="login-danger">*</span></label>
                <textarea name="descripition" id="basic-icon-default-message" class="form-control"
                placeholder="Hi, Do you have a moment to talk Joe?"
                 aria-label="Hi, Do you have a moment to talk Joe?"
                  aria-describedby="basic-icon-default-message2">  </textarea>
                  <span class="text-danger">
                    @error('descripition')
                    {{$message}}                                
                    @enderror
                  </span>
                </div>
                </div>
              
                
                <div class="col-12 col-sm-12">
                        <div class="form-group local-forms">
                        <label>Image<span class="login-danger">*</span></label>
                        <input name="img" class="form-control" type="file" placeholder="Enter First Name">
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