<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Find easily a doctor and book online an appointment" />
    <meta name="author" content="Ansonika" />
    <title>RID | Home Maintenance Application</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" type="image/x-icon" href="t/img/apple-touch-icon-57x57-precomposed.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="t/img/apple-touch-icon-114x114-precomposed.png" />
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="t/img/apple-touch-icon-144x144-precomposed.png" />

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <!-- BASE CSS -->
    <link href="t/css/bootstrap.min.css" rel="stylesheet" />
    <link href="t/css/style.css" rel="stylesheet" />
    <link href="t/css/menu.css" rel="stylesheet" />
    <link href="t/css/vendors.css" rel="stylesheet" />
    <link href="t/css/icon_fonts/css/all_icons_min.css" rel="stylesheet" />

    <!-- YOUR CUSTOM CSS -->
    <link href="t/css/custom.css" rel="stylesheet" />
</head>

<body>
    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- End Preload -->

    <header class="header_sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div id="logo_home">
                        <h1><a href="index.html" title="Findoctor">Findoctor</a></h1>
                    </div>
                </div>
                <nav class="col-lg-9 col-6">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu
                            mobile</span></a>
                    <ul id="top_access">

                        @if (Route::has('login'))
                            @auth

                                <x-app-layout>
                                </x-app-layout>
                            @else
                                <a class="btn btn-primary"style="padding: 5px 29px 5px 29px; background: #e74e84; border: 1px solid #e74e84;color:white;"
                                    href="{{ route('login') }}">Sing In</a>

                                </li>
                                <li>
                                    <!-- Added an inline stylling to beautify the bootstrap buttons-->
                                    <a class="btn btn-success"style="background:#3f4079;padding: 5px 29px 5px 29px;color:white;"
                                        href="{{ route('register') }}">Register</a>
                                </li>
                            @endauth
                        @endif
                    </ul>
                    <div class="main-menu">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#0">About Us</a></li>
                            <li><a href="#0">Contact Us</a></li>
                        </ul>
                    </div>
                    <!-- /main-menu -->
                </nav>
            </div>
        </div>
        <!-- /container -->
    </header>
    <!-- /header -->
