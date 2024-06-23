


        <div class="page-wrapper">
        <div class="content container-fluid">

        <div class="page-header">
        <div class="row align-items-center">
        <div class="col-sm-12">
        <div class="page-sub-header">
        <h3 class="page-title">Membership Manager</h3>
        <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="students.html">Dashboard 
        </a></li>
        <li class="breadcrumb-item active">Membership Add</li>
        </ul>
        </div>
        </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-12">
        <div class="card comman-shadow">
        <div class="card-body">
        <form method="POST" action="{{ url('admin/membership-form') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
              <div class="page-header">
            <div class="row align-items-center">
            <div class="col">
            <h3 class="page-title">Membership Information</h3>
            </div>
            <div class="col-auto text-end float-end ms-auto download-grp">
            <a href="{{url('admin/membership-list')}}" class="btn btn-primary"><i class="fas fa-plus">𝐁𝐚𝐜𝐤</i></a>
            </div>
            </div>
            </div>
        

        <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
        <label>Title <span class="login-danger">*</span></label>
        <input name="title" class="form-control" type="text" placeholder="Enter Your Title">
        <span class="text-danger">
        @error('title')
        {{$message}}                                
        @enderror
        </span>
        </div>
        </div>
        <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
        <label>Year <span class="login-danger">*</span></label>
        <input name="year" class="form-control" type="text" placeholder="Enter Your Year">
        <span class="text-danger">
        @error('year')
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
        <div class="col-12 col-sm-4">
                <div class="form-group local-forms">
                        <h5>Features Add</h5>
                        @foreach($product as $membershipshow) 
                        <label class="custom_check mr-2 mb-0 d-inline-flex remember-me" style="column-gap: 10px;">  </label>
                            <input type="checkbox" name="product[]" value="{{ $membershipshow->title }}">
                            <span class="checkmark"></span>
                            {{$membershipshow->title}}           
                    @endforeach
                 
                    <span class="text-danger">
                        @error('categoery_id')
                            {{ $message }}                                
                        @enderror
                    </span>
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