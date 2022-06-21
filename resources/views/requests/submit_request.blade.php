<!DOCTYPE html>
<html lang="en">

@include('includes/header')

<body class="fixed-nav sticky-footer" id="page-top">
    <!-- Navigation-->
    @include('includes/navigation')
    <!-- /Navigation-->

    <div class="content-wrapper">



        <!-- container-fluid  -->
        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Add listing</li>
            </ol>


            <!--Form -->
            <form method="post" action="{{ route('save_request') }}" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="user_id" value="{{ Auth()->user()->id }}">

                <!-- Basic Info -->
                <div class="box_general padding_bottom">
                    <div class="header_box version_2">
                        <h2><i class="fa fa-file"></i>Basic info</h2>
                    </div>


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $message)
                                <p class="text-danger">
                                    <li> {{ $message }}</li>
                                </p>
                            @endforeach
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input name="firstName" required value="{{ old('firstName') }}" type="text"
                                    class="form-control" placeholder="Your name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last name</label>
                                <input name="lastName" required value="{{ old('lastName') }}" type="text"
                                    class="form-control" placeholder="Your last name">
                            </div>
                        </div>
                    </div>
                    <!-- /row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Telephone</label>
                                <input required name="telephone" value="{{ old('telephone') }}" type="tel"
                                    class="form-control" placeholder="Your telephone number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Flat Number</label>
                                <input name="email" required value="{{ old('flatno') }}" type="text"
                                    class="form-control" placeholder="Your Flat Number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" required value="{{ old('email') }}" type="email"
                                    class="form-control" placeholder="Your email">
                            </div>

                        </div>
                        <!-- /row-->
                        <!-- /row-->
                    </div>
                    <!-- Basic Info -->



                    <!-- Select Maintenance -->
                    <div class="box_general padding_bottom">
                        <div class="header_box version_2">
                            <h2><i class="fa fa-map-marker"></i>Select Maintenance </h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>What type of Maintenance do you need?</label>
                                    <select name="typeOfMaintenance" required class="form-control">
                                        <option value="">Select One</option>
                                        <option>AC/Heating Issues </option>
                                        <option>Plumbing Issue</option>
                                        <option>Eletrical Issues</option>
                                        <option>Windows and Doors</option>

                                        <!--
                                    <option value="">Select One</option>
                                    <option value="New York">AC/Heating Issues </option>
                                    <option value="Chicago">Plumbing Issue</option>
                                    <option value="Miami">Eletrical Issues</option>
                                    <option value="Los Angeles">Windows and Doors</option>
                                   -->
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>How long did you notice this damage?</label>
                                    <input name="damageDate" value="{{ old('damageDate') }}"required type="number"
                                        class="form-control" placeholder="How many days ">
                                </div>
                            </div>
                        </div>
                        <!-- /row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select a prefered date for Inspection/Fixing</label>
                                    <input name="inspectionDate" value="{{ old('inspectionDate') }}" required
                                        type="date" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select a prefered Time</label>
                                    <input required name="preferedTime" value="{{ old('preferedTime') }}"
                                        type="time" class="form-control" placeholder="Your zip code">
                                </div>
                            </div>
                        </div>

                        <div class="box_general padding_bottom">
                            <div class="header_box version_2">
                                <h2><i class="fa fa-file-text"></i>Discuss Issues</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Discuss Issues in details to enable our enginners ubderstand what needs
                                            to be
                                            done </label>
                                        <div class="editor">
                                            <textarea rows="4" cols="100">
                                        </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /row-->

                            <!-- /row-->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Upload a picture reference</label>
                                    <input type="file" accept="image/*" name="picture">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Maintenance -->


                    <div class="row">
                        <div class="col-md-5">
                            <button type="submit" class="btn btn-outline-primary btn-block">Submit Request </button>
                        </div>
                    </div>

            </form>
            <!-- End of form  -->

        </div>
        <!-- /.container-fluid-->

    </div>
    <!-- /.container-wrapper-->


    @include('includes/footer')




    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    @include('includes/scripts')


</body>

</html>
