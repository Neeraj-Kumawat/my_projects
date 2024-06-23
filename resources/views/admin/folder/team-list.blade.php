            <div class="page-wrapper">
            <div class="content container-fluid">

            <div class="page-header">
            <div class="row align-items-center">
            <div class="col">
            <h3 class="page-title">Team Manager</h3>
            <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Team List</li>
            </ul>
            </div>
            </div>
            </div>
            @if(session('success'))
          <div class="alert alert-primary alert-dismissible fade show" role="alert">
              <strong>Success:</strong> {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
            @if(session('Danger'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Success:</strong> {{ session('Danger') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
              @if(session('Info'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success:</strong> {{ session('Info') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

            <div class="row">
            <div class="col-sm-12">
            <div class="card card-table">
            <div class="card-body">

            <div class="page-header">
            <div class="row align-items-center">
            <div class="col">
            <h3 class="page-title">Team List</h3>
            </div>
            <div class="col-auto text-end float-end ms-auto download-grp">
            <a href="{{url('admin/add-team')}}" class="btn btn-primary"><i class="fas fa-plus">𝐀𝐝𝐝</i></a>
            </div>
            </div>
            </div>

            <div class="table-responsive">
            <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
            <thead class="student-thread">
            <tr>
            <th>S.No.</th>
            <th>Profile</th>
            <th>Name</th>
            <th>Short Descripition</th>
            <th>facebook</th>
            <th>instagram</th>
            <th>twitter</th>
            <th>linkedin</th>
            <th>Status</th>
         

            <th class="text-end">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($teamshow as $team)  

            
   
        <tr>
                <td>{{$team->id}}</td>
                <td>
                    <img src="{{ asset('public/photo/') }}/{{$team->img}}" class="rounded-circle" style="width: 50px; height: 50px;"  />
                    </td>
                <td>{{$team->name}}</td>
                <td>{{$team->short_descripition}}</td>
                <td>{{$team->facebook}}</td>
                <td>{{$team->instagram}}</td>
                <td>{{$team->twitter}}</td>
                <td>{{$team->linkedin}}</td>
              
               
                <?php
                    if($team->status == "ACTIVE"){
                        $badge = "<span class='badge bg-success'>Active</span>";
                    }else {
                        $badge = "<span class='badge bg-danger'>Inactive</span>";
                    }
          
                    ?>
                      <td><?php echo $badge; ?>
                <td class="text-end">
                    <div class="actions">
                    <a href="{{url('admin/team/delete/')}}/{{$team->id}}" class="servideletebtn btn btn-sm bg-success-light me-2"><i class="fa-solid fa-trash-can"></i></a>
                    <a href="{{url('admin/team/edit/')}}/{{$team->id}}" class="btn btn-sm bg-danger-light"><i class="feather-edit"></i></a>
    
                    </div>
                    </td>
            </tr>

            @endforeach 



            </tbody>
            </table>
            </div>
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