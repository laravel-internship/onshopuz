<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/mdb.min.css') }}">

    <!-- Your custom styles (optional) -->
    <style>

    </style>
    @livewireStyles

</head>

<body class="fixed-sn white-skin">

    <!--Main Navigation-->
    <header>

        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed">
            <ul class="custom-scrollbar">
                <!-- Logo -->
                <li class="logo-sn waves-effect">
                    <div class="text-center">
                        <a href="#" class="pl-0"><img
                                src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png"
                                class=""></a>
                    </div>
                </li>
                <!--/. Logo -->
                {{-- <!--Search Form-->
                <li>
                    <form class="search-form" role="search">
                        <div class="form-group md-form mt-0 pt-1 waves-light">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>
                </li>
                <!--/.Search Form--> --}}

                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">
                        @if (auth()->user()->hasRole('admin'))
                            <li><a class="collapsible-header waves-effect arrow-r" href="{{ route('index') }}">Home</a>
                            </li>
                            <li><a class="collapsible-header waves-effect arrow-r" href="{{ route('user') }}">User</a>
                            </li>
                            <li><a class="collapsible-header waves-effect arrow-r" href="{{ route('product') }}">
                                    Products</a>

                            </li>
                            <li><a class="collapsible-header waves-effect arrow-r" href="{{ route('category') }}">
                                    Categories</a>

                            </li>
                        @endif

                        <li><a class="collapsible-header waves-effect arrow-r" href="{{ route('order') }}">Order</a>
                        </li>


                    </ul>
        </div>
        <div class="sidenav-bg mask-strong"></div>
        </div>
        <!--/. Sidebar navigation -->

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse black-text"><i
                        class="fas fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <p>Home Admin</p>
            </div>

            <!--Navbar links-->
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                @foreach (\LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" rel="alternate"
                            hreflang="{{ $localeCode }}"
                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $localeCode }}
                        </a>
                    </li>
                @endforeach
                <!-- Dropdown -->
                <li class="nav-item dropdown notifications-nav">
                    <a class="nav-link  waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell"></i><span class="badge red">3</span>
                    </a>

                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i> <span
                            class="clearfix d-none d-sm-inline-block">{{ auth()->user() ? auth()->user()->name : 'none' }}</span></a>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item"
                            href="{{ route('profile.show') }}">{{ __('main.myaccount') }}</a>
                        <a class="dropdown-item" href="{{ route('home') }}">{{ __('main.home') }}</a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            @method('POST')
                            <a class="dropdown-item waves-effect waves-light">{{ __('main.logout') }}</a>
                        </form>
                    </div>
                </li>

            </ul>
            <!--/Navbar links-->
        </nav>
        <!-- /.Navbar -->


    </header>
    <!--Main Navigation-->


    <!--Main layout-->
    <main>
        <div class="container-fluid">





            <!--Section: Main panel-->
            <section class="mb-5">

                <!--Card-->
                <div class="card card-cascade narrower">

                    @yield('content')
                    {{-- {{ $slot }} --}}

                </div>
                <!--/.Card-->

            </section>
            <!--Section: Main panel-->

        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer pt-0 mt-5 rgba-stylish-light">

        <!--Copyright-->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                © 2018 Copyright: <a href="{{ route('product') }}" target="_blank">
                    MDBootstrap.com </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="{{ asset('assets/admin/js/jquery-3.3.1.min.js') }}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{ asset('assets/admin/js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('assets/admin/js/bootstrap.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('assets/admin/js/mdb.min.js') }}"></script>
    <!--Initializations-->
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();

        var container = document.querySelector('.custom-scrollbar');
        Ps.initialize(container, {
            wheelSpeed: 2,
            wheelPropagation: true,
            minScrollbarLength: 20
        });

        // Data Picker Initialization
        $('.datepicker').pickadate();

        // Material Select Initialization
        $(document).ready(function() {
            $('.mdb-select').material_select();
        });

        // Tooltips Initialization
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

    <!-- Charts -->
    <script>
        // Small chart
        $(function() {
            $('.min-chart#chart-sales').easyPieChart({
                barColor: "#FF5252",
                onStep: function(from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });
        });

        //Main chart
        var ctxL = document.getElementById("lineChart").getContext('2d');
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "My First dataset",
                    fillColor: "#fff",
                    backgroundColor: 'rgba(255, 255, 255, .3)',
                    borderColor: 'rgba(255, 255, 255)',
                    data: [0, 10, 5, 2, 20, 30, 45],
                }]
            },
            options: {
                legend: {
                    labels: {
                        fontColor: "#fff",
                    }
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: true,
                            color: "rgba(255,255,255,.25)"
                        },
                        ticks: {
                            fontColor: "#fff",
                        },
                    }],
                    yAxes: [{
                        display: true,
                        gridLines: {
                            display: true,
                            color: "rgba(255,255,255,.25)"
                        },
                        ticks: {
                            fontColor: "#fff",
                        },
                    }],
                }
            }
        });
    </script>
    @livewireScripts

</body>

</html>
