


        <div class="page-wrapper">
        <div class="content container-fluid">

        <div class="page-header">
        <div class="row align-items-center">
        <div class="col-sm-12">
        <div class="page-sub-header">
        <h3 class="page-title">Working Hours Manager</h3>
        <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="students.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Add Hours</li>
        </ul>
        </div>
        </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-12">
        <div class="card comman-shadow">
        <div class="card-body">
          <form method="POST" action="<?= url('admin/hours/update/'.$hours->id); ?>" enctype="multipart/form-data">
            @csrf
        <div class="row">
        <div class="col-12">
        <h5 class="form-title student-info">Hours Information </h5>
        </div>
       

        <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
        <label>Title<span class="login-danger">*</span></label>
        <input name="title" value="{{$hours->title}}" class="form-control" type="text" placeholder="Enter Your Title Name">
        <span class="text-danger">
            @error('title')
            {{$message}}                                
            @enderror
          </span>
        </div>
        </div>      
        <div class="col-12 col-sm-4">
          <div class="form-group local-forms">
          <label>Status <span class="login-danger">*</span></label>
          <select name="status" class="form-control">
                  <option value="">Select Status</option>
                  <option value="ACTIVE" {{ $hours->status == 'ACTIVE' ? 'selected' : '' }}>ACTIVE</option>
                  <option value="INACTIVE" {{ $hours->status == 'INACTIVE' ? 'selected' : '' }}>INACTIVE</option>
              </select>
          <span class="text-danger">
                  @error('status')
                  {{$message}}                                
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