@include('home.assets.header')

<main>
    <div class="hero_home version_1">
        <div class="content">
            <h4 class="header-text">
                Your Home Maintenance Now at your finger tips
            </h4>
            <p>
                You can now schedule for a maintenance at your own <br />
                convinent time
            </p>
        </div>
    </div>
    <!-- /Hero -->

    <div class="container margin_120_95">
        <div class="main_title">
            <h2>Schedule your <strong>Maintenance</strong> Online!</h2>
            <p>
                No calls, no emails, No comming down to the office again :)
            </p>
            <p>Schedule now in just 3 easy steps</p>
        </div>
        <div class="row add_bottom_30">
            <div class="col-lg-4">
                <div class="box_feat" id="icon_1">
                    <span></span>
                    <h3>Login</h3>
                    <p>
                        Usu habeo equidem sanctus no. Suas summo id sed, erat erant
                        oporteat cu pri. In eum omnes molestie.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box_feat" id="icon_3">

                    <span></span>
                    <h3>Upload a Picture</h3>
                    <p>
                        Usu habeo equidem sanctus no. Suas summo id sed, erat erant
                        oporteat cu pri. In eum omnes molestie.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box_feat" id="icon_2">
                    <h3>Schedule It!</h3>
                    <p>
                        Usu habeo equidem sanctus no. Suas summo id sed, erat erant
                        oporteat cu pri. In eum omnes molestie.
                    </p>
                </div>
            </div>
        </div>
        <!-- /row -->
        <p class="text-center">
            <a href="list.html" class="btn_1 medium">Try It Now!</a>
        </p>
    </div>
    <!-- /container -->

    <div class="bg_color_1">
        <div class="container margin_120_95">
            <div class="main_title">
                <h2>Type Of Maitenance we cover</h2>
                <p>
                    Here are the list of the maintenance we cover.
                </p>
            </div>
            <div id="reccomended" class="owl-carousel owl-theme">

                <div class="item">
                    <a href="detail-page.html">
                        <div class="views"><i class="icon-eye-7"></i>120</div>
                        <div class="title">
                            <h4>AC /Heating </h4>
                        </div>
                        <img src="http://via.placeholder.com/350x500.jpg" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="views"><i class="icon-eye-7"></i>115</div>
                        <div class="title">
                            <h4>Plumbing</h4>
                        </div>
                        <img src="http://via.placeholder.com/350x500.jpg" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="views"><i class="icon-eye-7"></i>98</div>
                        <div class="title">
                            <h4>Windows /Doors</h4>
                        </div>
                        <img src="http://via.placeholder.com/350x500.jpg" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <div class="views"><i class="icon-eye-7"></i>98</div>
                        <div class="title">
                            <h4>Garage Repair</h4>
                        </div>
                        <img src="http://via.placeholder.com/350x500.jpg" alt="" />
                    </a>
                </div>
            </div>
            <!-- /carousel -->
        </div>
        <!-- /container -->
    </div>
    <!-- /white_bg -->
    <!-- /container -->

    @include('home.assets.appsection')
    <!-- /app_section -->

</main>
<!-- /main content -->

<!-- Footer-->
@include('home.assets.footer')
<!--/ Footer end-->
</body>

</html>
