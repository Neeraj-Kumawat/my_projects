
<div class="page-wrapper">
            <div class="content container-fluid">

            <div class="page-header">
            <div class="row align-items-center">
            <div class="col">
            <h3 class="page-title">Subscribs Manager</h3>
            <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Subscribs List</li>
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

            <div class="row">
            <div class="col-sm-12">
            <div class="card card-table">
            <div class="card-body">

            <div class="page-header">
            <div class="row align-items-center">
            <div class="col">
            <h3 class="page-title">Subscribs List</h3>
            </div>

            </div>
            </div>

            <div class="table-responsive">
            <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
            <thead class="student-thread">
            <tr>
            <th>S.No.</th>
            <th>Email</th>
            
         

            <th class="text-end">Action</th>
            </tr>
            </thead>
         <tbody>
                @foreach ($featureshow as $team)  

            
   
        <tr>
                <td>{{$team->id}}</td>
                <td>{{$team->email}}</td>
                
                              <td class="text-end">
                    <div class="actions">
                    <a href="{{url('admin/subscribe/subscribe_delete/')}}/{{$team->id}}" class="servideletebtn btn btn-sm bg-success-light me-2"><i class="fa-solid fa-trash-can"></i></a>
                    {{-- <a href="" class="btn btn-sm bg-danger-light"><i class="feather-edit"></i></a> --}}
    
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