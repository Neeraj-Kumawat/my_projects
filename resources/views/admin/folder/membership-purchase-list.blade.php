<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Membership Booking</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active">Booking List</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card card-table">
<div class="card-body">


<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Booking List</h3>
</div>
 <div class="col-auto text-end float-end ms-auto download-grp">
    <a href="{{ route('membership.export') }}?{{ http_build_query(request()->except('_token')) }}" class="btn btn-primary">
        <i class="fas fa-file-excel"></i> Export CSV
    </a>
</div>

</div>
</div>
  @if(session('Danger'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Success:</strong> {{ session('Danger') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
   
<div class="table-responsive">
<table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
<thead class="student-thread">
<tr>
   
<th>S.No</th>
<th>User id</th>
<th>User/ Name /Email</th>
<th>Features </th>
<th>Membership </th>
<th>Year</th>
<th>Current Date</th>
<th>Date 30 Days</th>
<th>Day</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
    
   
    @foreach ($membershippurchase as $membershippurchaseshow)
        <tr>
    
    <td>{{$membershippurchaseshow->id}}</td>
    <td>{{$membershippurchaseshow->user_id}}</td>
    {{-- <td>{{$membershippurchaseshow->user_id}}</td> --}}
     <td>
        @foreach ($registered as $user)
        @if ($user->id == $membershippurchaseshow->user_id)
            <div>
                Username: {{$user->username}}
            </div>
            <div>
                Email: {{$user->email}}
            </div>
        @endif
    @endforeach
    </td>
    <td>
        @php
            $products = explode(',', $membershippurchaseshow->product);
        @endphp
        <ul>
            @foreach($products as $product)
                <li>{{$product}}</li>
            @endforeach
        </ul>
    </td>
    
    <td>{{$membershippurchaseshow->username}}</td>
    <td>{{$membershippurchaseshow->year}}</td>
    <td>{{$membershippurchaseshow->current_date}}</td>
    <td>{{$membershippurchaseshow->date_30_days_from_now}}</td>
    <td>{{(int)\Carbon\Carbon::parse($membershippurchaseshow->date_30_days_from_now)->diffInDays(\Carbon\Carbon::now()) }}
  
    </td>





    <td class="text-end">
        <div class="actions">
        <a href="{{url('web/membership_delete/')}}/{{$membershippurchaseshow->id}}" class="servideletebtn btn btn-sm bg-success-light me-2"><i class="fa-solid fa-trash-can"></i></a>
        {{-- <a href="{{url('admin/membership/membership_edit')}}/{{$membershippurchaseshow->id}}" class="btn btn-sm bg-danger-light"><i class="feather-edit"></i></a> --}}
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