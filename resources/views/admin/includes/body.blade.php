<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Widget</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Statistics</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-4 col-lg-12">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <h4 class="card-title">Resolved Queries</h4>
                    </div>

                </div>
            </div>







            <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-4">
                <div class="widget-stat card bg-primary">
                    <div class="card-body p-4">
                        <div class="media">
                            <span class="mr-3">
                                <i class="flaticon-381-user-7"></i>
                            </span>
                            <div class="media-body text-white text-right">
                                <p class="mb-1">
                                    TOTAL TENANTS

                                </p>
                                <h3 class="text-white">{{ $total_tenants  }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-4">
                <div class="widget-stat card bg-primary">
                    <div class="card-body  p-4">
                        <div class="media">
                            <span class="mr-3">
                                <i class="la la-users"></i>
                            </span>
                            <div class="media-body text-white">
                                <p class="mb-1">
                                    REGISTERED TENANTS TODAY
                                </p>
                                <h3 class="text-white">3280</h3>
                                <div class="progress mb-2 bg-secondary">
                                    <div class="progress-bar progress-animated bg-light" style="width: 80%">
                                    </div>
                                </div>
                                <small>80% Increase in 20 Days</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-4">
                <div class="widget-stat card bg-info">
                    <div class="card-body p-4">
                        <div class="media">
                            <span class="mr-3">
                                <i class="la la-user"></i>
                            </span>
                            <div class="media-body text-white">
                                <p class="mb-1">
                                    Total Queries this Month
                                </p>
                                <h3 class="text-white">{{  $total_queries }}</h3>
                                <div class="progress mb-2 bg-primary">
                                    <div class="progress-bar progress-animated bg-light" style="width: 50%">
                                    </div>
                                </div>
                                <small>50% Increase in 25 Days</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-4">
                <div class="widget-stat card bg-secondary">
                    <div class="card-body p-4">
                        <div class="media">
                            <span class="mr-3">
                                <i class="la la-graduation-cap"></i>
                            </span>
                            <div class="media-body text-white">
                                <p class="mb-1">
                                    PENDING QUERIES
                                </p>
                                <h3 class="text-white">{{  $pending_queries }}</h3>
                                <div class="progress mb-2 bg-primary">
                                    <div class="progress-bar progress-animated bg-light" style="width: 76%">
                                    </div>
                                </div>
                                <!-- <small>76% Increase in 20 Days</small> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-4">
                <div class="widget-stat card bg-danger ">
                    <div class="card-body p-4">
                        <div class="media">
                            <span class="mr-3">
                                <i class="la la-dollar"></i>
                            </span>
                            <div class="media-body text-white">
                                <p class="mb-1">
                                    UN-ANSWERED QUEIRES
                                </p>
                                <h3 class="text-white">{{  $cancelled_queries }}</h3>
                                <div class="progress mb-2 bg-secondary">
                                    <div class="progress-bar progress-animated bg-light" style="width: 30%">
                                    </div>
                                </div>
                                <small>30% Increase in 30 Days</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--**********************************
                        Content body start
                    ***********************************-->

            <div class="content-body" style="margin-top: -150px;">
                <div class="container-fluid">

                    <!-- row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mt-5">
                                <div class="card-header">
                                    <h4 class="card-title">All Submitted Request</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-responsive-md">
                                            <thead>
                                                <tr>
                                                    <th class="width80"><strong>#</strong></th>
                                                    <th><strong>NAME</strong></th>
                                                    <th><strong>PHONE</strong></th>
                                                    <th><strong>DATE</strong></th>
                                                    <th><strong>STATUS</strong></th>
                                                    <th><strong>FLAT NO</strong></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($requests as $request)
                                                <tr>
                                                    <td><strong> {{ $request->id  }} </strong></td>
                                                    <td>Mr. {{  $request->lastName  }}</td>
                                                    <td> {{  $request->telephone }} </td>
                                                    <td> {{  $request->created_at  }} </td>
                                                        @if($request->status == "pending")
                                                            <td><span class="badge light badge-warning"> {{  $request->status }} </span></td>
                                                        @elseif($request->status == "approved")
                                                            <td><span class="badge light badge-success"> {{  $request->status }} </span></td>
                                                        @else
                                                            <td><span class="badge light badge-danger"> {{  $request->status }} </span></td>
                                                        @endif
                                                    <td>66</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn btn-success light sharp"
                                                                data-toggle="dropdown">
                                                                <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0"
                                                                            width="24" height="24" />
                                                                        <circle fill="#000000" cx="5"
                                                                            cy="12" r="2" />
                                                                        <circle fill="#000000" cx="12"
                                                                            cy="12" r="2" />
                                                                        <circle fill="#000000" cx="19"
                                                                            cy="12" r="2" />
                                                                    </g>
                                                                </svg>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a href="{{ route('admin_request_detail_page', ['id'=> $request->id])  }}" class="dropdown-item" href="#">View Request</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach()
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-responsive-sm">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Status</th>
                                                    <th>Date</th>
                                                    <th>Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>1</th>
                                                    <td>Kolor Tea Shirt For Man</td>
                                                    <td><span class="badge badge-primary light">Sale</span>
                                                    </td>
                                                    <td>January 22</td>
                                                    <td class="color-primary">$21.56</td>
                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <td>Kolor Tea Shirt For Women</td>
                                                    <td><span class="badge badge-success">Tax</span>
                                                    </td>
                                                    <td>January 30</td>
                                                    <td class="color-success">$55.32</td>
                                                </tr>
                                                <tr>
                                                    <th>3</th>
                                                    <td>Blue Backpack For Baby</td>
                                                    <td><span class="badge badge-danger">Extended</span>
                                                    </td>
                                                    <td>January 25</td>
                                                    <td class="color-danger">$14.85</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->



                    </div>
                </div>
            </div>
            <!--**********************************
                        Content body end
                    ***********************************-->

        </div>

        <!--/ Recent-->
    </div>
</div>