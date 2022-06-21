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
                <li class="breadcrumb-item active">Request Detail page</li>
            </ol>


            <!--Form -->

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
