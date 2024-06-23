            <div class="page-wrapper">
            <div class="content container-fluid">

            <div class="page-header">
            <div class="row align-items-center">
            <div class="col">
            <h3 class="page-title">Contact Manager</h3>
            <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Contact List</li>
            </ul>
            </div>
            </div>
            </div>
        @if(session('Success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success:</strong> {{ session('Success') }}
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
            <h3 class="page-title">Contact List</h3>
            </div>
            {{-- <div class="col-auto text-end float-end ms-auto download-grp">
            <a href="<?php echo url('Admin/Add-User') ?>" class="btn btn-primary"><i class="fas fa-plus">𝐀𝐝𝐝  </i></a>
            </div> --}}
            </div>
            </div>

            <div class="table-responsive">
            <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
            <thead class="student-thread">
            <tr>
                <th>S.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Numbar</th>
            <th>Message</th>
            <th>status</th>
        

            <th class="text-end">Action</th>
            </tr>
            </thead>
           <tbody>
                @foreach ($contact as $contact)
                    
             
            <tr>
                {{-- <td>{{ $loop->index+1}}</td> --}}
                <td>{{$contact->id}}</td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->phone}}</td>
                <td>{{$contact->message}}</td>
                 <td>
    @if($contact->status == '1')
        <a href="{{ route('contact.update', ['id' => $contact->id]) }}" class="btn btn-sm btn-rounded btn-success active-button">
           <i class="fa fa-check-circle fa-inverse"></i> <span class="text-white">Active</span></a>
       @else
        <a href="{{ route('contact.update', ['id' => $contact->id]) }}" class="btn btn-sm btn-rounded btn-danger inactive-button">
           <i class="fa fa-times fa-inverse"></i> <span class="text-white">Inactive</span></a>
    @endif
</td>
                {{-- <td>
                    <a href="{{ route('contact.update', ['id' => $contact->id]) }}" class="btn {{$contact->status ? 'btn-success' : 'btn-danger'}}">
                        {{$contact->status ? 'Enable' : 'Disable'}}
                    </a>
                </td> --}}
              
                <td class="text-end">
                    <div class="actions">
                    <a href="{{url('admin/contact/contact_delete')}}/{{$contact->id}}" class="servideletebtn btn btn-sm bg-success-light me-2"><i class="fa-solid fa-trash-can"></i></a>
                    {{-- <a href="{{url('admin/contact/edit')}}/{{$contact->id}}" class="btn btn-sm bg-danger-light"><i class="feather-edit"></i></a> --}}
    
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
            </body>
            </html>