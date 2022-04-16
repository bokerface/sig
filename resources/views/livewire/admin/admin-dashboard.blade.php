<div>
    @section('page-title')
    Dashboard
    @endsection


    
    <!-- Begin Page Content -->
        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                
                <div class="bg-sigov-red">
                <div class="card border-left-danger shadow h-100 py-2 bg-sigov-red">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    EXCHANGE</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $exchange }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="icon-repeat h1"></i>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    LETTER</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $letter }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="icon-file-text h1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info border-left-sigov-red shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Transcript Application
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $transcript }}</div>
                                {{-- <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">65</div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="col-auto">
                                <i class="icon-printer h1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Secondary Supervisor</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $secondary_supervisor }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="icon-users h1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->
</div>
