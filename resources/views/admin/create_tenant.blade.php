<!DOCTYPE html>
<html lang="en">

@include('admin/includes/header')

<body>

    <!--*******************
        Preloader start
    ********************-->
    @include('admin/includes/preloader')
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        @include('admin/includes/navbar')
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            TOp Menu bar start
        ***********************************-->
        @include('admin/includes/topmenu')
        <!--**********************************
            TOp Menu bar end
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('admin/includes/sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                    </ol>
                </div>
                <!-- row -->
                <center>

                </center>
                <h1 style="font-size:22px;">Create a New Teneant Acount </h1>
                <br>
                <div class="col-xl-10 col-lg-8" style="padding-left:20%; padding-right:10%;">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All fields are conpulsory</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">

                                <form action="{{ url('/add_tenant') }}" method="POST">
                                    @csrf
                                    <div class="form-group">

                                        <input type="text"name="tenant" class="form-control input-default "
                                            placeholder="Tenant Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control input-rounded"
                                            placeholder="Tenant Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control input-rounded"
                                            placeholder="Flat Number">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="number" class="form-control input-rounded"
                                            placeholder="Tenant Phone Number">
                                    </div>
                                    <div class="form-group">
                                        <label style="text-align:left!important; color:white" for="password"></label>
                                        <input type="password" class="form-control input-rounded"
                                            placeholder="Choose a default password for the Tenant ">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

    </div>


    <!--**********************************
            Footer start
        ***********************************-->
    @include('admin/includes/footer')
    <!--**********************************
            Footer end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    @include('admin/includes/scripts')

    <!--**********************************
        End Scripts
    ***********************************-->




</body>



</html>
