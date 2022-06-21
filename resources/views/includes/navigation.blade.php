<nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html"><img src="t/img/logo.png" data-retina="true" alt="" width="163"
            height="36"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <br>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="{{ url('dashboard') }}">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="{{ url('user/profile') }}">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Profile</span>
                </a>
            </li>


            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
                <a class="nav-link" href="{{ url('submit_request') }}">
                    <i class="fa fa-fw fa-envelope-open"></i>
                    <span class="nav-link-text">Request Maintenance </span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
                <a class="nav-link" href="{{ url('submitted_request') }}">
                    <i class="fa fa-fw fa-envelope-open"></i>
                    <span class="nav-link-text">View Submitted Request</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
                <a class="nav-link" href="{{ url('submitted_request') }}">
                    <i class="fa fa-fw fa-envelope-open"></i>
                    <span class="nav-link-text">View Submitted Request</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
                <a class="nav-link" href="messages.html">
                    <i class="fa fa-fw fa-envelope-open"></i>
                    <span class="nav-link-text">View Maintenance History</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
                <a class="nav-link" href="messages.html">
                    <i class="fa fa-fw fa-envelope-open"></i>
                    <span class="nav-link-text">Suggestions & Complains</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
                <a class="nav-link" href="messages.html">
                    <i class="fa fa-fw fa-envelope-open"></i>
                    <span class="nav-link-text">Logout</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <!--
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents"
                    data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-gear"></i>
                    <span class="nav-link-text">Components</span>
                </a>-->
                <!--
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                        <a href="charts.html">Charts</a>
                    </li>
                    <li>
                        <a href="tables.html">Tables</a>
                    </li>
                </ul>
            </li>
        -->

        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">



            <li class="nav-item">
                <x-app-layout>
                </x-app-layout>
            </li>
        </ul>
    </div>
</nav>
