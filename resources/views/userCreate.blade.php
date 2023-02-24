<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>𝐃𝐚𝐬𝐡𝐛𝐨𝐚𝐫𝐝</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Vendor CSS-->
    <link href="{{ asset('vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ asset('vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('images/icon/logo.png') }}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{ route('admin#home') }}" style="text-decoration: none">
                                <i class="fa-solid fa-house"></i>𝐇𝐨𝐦𝐞 𝐏𝐚𝐠𝐞
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                                <div class="account-wrap">
                                    <h1 class="text-center">Admin Dashboard</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">

                                        <div class="overview-wrap">
                                            <h2 class="title-1">𝐔𝐬𝐞𝐫 𝐂𝐫𝐞𝐚𝐭𝐞 𝐏𝐚𝐠𝐞</h2>
                                        </div>

                                    </div>
                                    <div class="table-data__tool-right">
                                        <div class="d-flex">
                                            <a href="{{ route('admin#home') }}">
                                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                                    𝐛𝐚𝐜𝐤
                                                </button>
                                            </a>
                                            <form action="{{ route('logout') }}" method="post" class="ml-3">
                                                @csrf
                                                <button class="au-btn au-btn-icon bg-danger au-btn--small ms-4">
                                                    𝐋𝐨𝐠𝐨𝐮𝐭
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2 col-12">
                                    <form action="{{ route('admin#create') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label class="">𝐔𝐬𝐞𝐫 𝐍𝐚𝐦𝐞</label>
                                            <input type="text" class="form-control rounded shadow-sm" name="userName"
                                                placeholder="Enter Username">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label class="">𝐄𝐦𝐚𝐢𝐥 𝐚𝐝𝐝𝐫𝐞𝐬</label>
                                            <input type="email" class="form-control rounded shadow-sm"
                                                name="userEmail" placeholder="Enter Email">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label class="" for="exampleInputPassword1">𝐏𝐚𝐬𝐬𝐰𝐨𝐫𝐝
                                            </label>
                                            <input type="password" class="form-control rounded shadow-sm"
                                                name="userPassword" placeholder="Password">
                                        </div>
                                        <button type="submit"
                                            class="btn btn-primary mt-3 rounded shadow-sm">𝐂𝐫𝐞𝐚𝐭𝐞</button>
                                    </form>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <!-- Vendor JS       -->
    <script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ asset('vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/counter-up/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
<!-- end document-->
