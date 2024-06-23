
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);


        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Count'],
                   ['Total Customers', {{ $customerCount }}],
                ['Active Customers', {{ $activeCustomerCount }}],
                ['Inactive Customers', {{ $inactiveCustomerCount }}],
                ['Membership Customers', {{ $membershipAddCount }}]
            ]);

            var options = {
                title: 'User and Membership Data'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
  
        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    @if(session('success'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    
                    
                    @if(session('error'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <strong>Error:</strong> {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                 
                                        <h6>Users</h6>
                                        <h3>{{ $customerCount }}</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Active Customer</h6>
                                        <h3>{{ $activeCustomerCount }}</h3>
                                    </div>
                                    <div class="db-icon">
                        <img src="assets/img/icons/1.png" alt="Dashboard Icon" style="width: 100%;">
                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                      <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Inactive Customer</h6>
                                        <h3>{{ $inactiveCustomerCount }}</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="assets/img/icons/2.jpeg" alt="Dashboard Icon" width="100%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Membership Customer</h6>
                                        <h3>{{ $membershipAddCount  }}</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="assets/img/icons/dash-icon-04.svg" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div id="piechart" style="width: 900px; height: 500px;"></div>
                </div>
               




            
            </div>
         
        </div>
    </div>
    <script src="{{ url('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/js/feather.min.js') }}"></script>
    <script src="{{ url('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ url('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ url('assets/plugins/apexchart/chart-data.js') }}"></script>
    <script src="{{ url('assets/js/script.js') }}"></script>
</body>

</html>