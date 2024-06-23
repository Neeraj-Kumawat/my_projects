


        <div class="page-wrapper">
        <div class="content container-fluid">

        <div class="page-header">
        <div class="row align-items-center">
        <div class="col-sm-12">
        <div class="page-sub-header">
        <h3 class="page-title">Working Time Manager</h3>
        <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="students.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Add Time</li>
        </ul>
        </div>
        </div>
        </div>
        </div>

        <div class="row">
        <div class="col-sm-12">
        <div class="card comman-shadow">
        <div class="card-body">
          <form method="POST" action="<?= url('admin/time/update/'.$time->id); ?>" enctype="multipart/form-data">
            @csrf
        <div class="row">
        <div class="col-12">
        <h5 class="form-title student-info">Time Information </h5>
        </div>
       
        <div class="col-12 col-sm-4">
          <div class="form-group local-forms">
              <label>Category: ID <span class="login-danger">*</span></label>
              <select name="category_id" class="form-control">
                  @foreach($hours as $product)
                      <option value="{{ $product->id }}" {{ $product->id == $time->id ? 'selected' : '' }}>
                          {{ $product->title }}
                      </option>
                  @endforeach
              </select>
              <span class="text-danger">
                  @error('category_id')
                      {{ $message }}                                
                  @enderror
              </span>
          </div>
      </div>
      
        <div class="col-12 col-sm-4">
        <div class="form-group local-forms">
        <label>Time<span class="login-danger">*</span></label>
        <input name="time" value="{{$time->time}}" class="form-control" type="text" placeholder="Enter Your Time Name">
        <span class="text-danger">
            @error('time')
            {{$message}}                                
            @enderror
          </span>
        </div>
        </div>
        <div class="col-12 col-sm-4">
          <div class="form-group local-forms">
          <label>Class Type<span class="login-danger">*</span></label>
          <input name="class_type" value="{{$time->class_type}}" class="form-control" type="text" placeholder="Enter Your Class Type">
          <span class="text-danger">
              @error('class_type')
              {{$message}}                                
              @enderror
            </span>
          </div>
          </div>
          <div class="col-12 col-sm-4">
            <div class="form-group local-forms">
            <label>Coach Name<span class="login-danger">*</span></label>
            <input name="coach_name" value="{{$time->coach_name}}" class="form-control" type="text" placeholder="Enter Your Coach Name">
            <span class="text-danger">
                @error('coach_name')
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
                      <option value="ACTIVE" {{ $time->status == 'ACTIVE' ? 'selected' : '' }}>ACTIVE</option>
                      <option value="INACTIVE" {{ $time->status == 'INACTIVE' ? 'selected' : '' }}>INACTIVE</option>
                  </select>
              <span class="text-danger">
                      @error('status')
                      {{$message}}                                
                      @enderror
                    </span>
              </div>
              </div>      
                  
              <div class="col-12 col-sm-12">
                <div class="form-group local-forms">
                  <input name="img" class="form-control" type="file" placeholder="Enter First Name">
                <img src="{{ asset('public/uploads/') }}/{{$time->img}}" style="width: 50px; height: 50px;" />                                                                    <label>Feature Image<span class="login-danger">*</span></label>
               
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