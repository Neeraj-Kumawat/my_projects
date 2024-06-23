


        <div class="page-wrapper">
        <div class="content container-fluid">

        <div class="page-header">
        <div class="row align-items-center">
        <div class="col-sm-12">
        <div class="page-sub-header">
        <h3 class="page-title">Update Profile</h3>
        <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="students.html">Dashboard 
        </a></li>
        <li class="breadcrumb-item active">Profile Update</li>
        </ul>
        </div>
        </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-12">
        <div class="card comman-shadow">
        <div class="card-body">
               
  <form method="POST" action="<?= url('admin/register_update/'.$registeruser->id); ?>" enctype="multipart/form-data">
     @csrf
    <div class="form-group">
    <label>Username <span class="login-danger">*</span></label>
    <input name="username" value="{{$registeruser->username}}" class="form-control" type="text">
    <span class="profile-views"><i class="fas fa-user-circle"></i></span>
    <span class="text-danger">
        @error('username')
        {{$message}}                                
        @enderror
      </span>
    </div>
    <div class="form-group mb-0">
    <button class="btn btn-primary btn-block" name="submit" type="submit">Register</button>
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