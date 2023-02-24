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
    <link href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

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
                {{-- <a href="#">
                    <img src="{{ asset('images/icon/logo.png') }}" alt="Cool Admin" />
                </a> --}}
                <h3>Khant Bhone</h3>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{ route('admin#home') }}">
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
                                            <h2 class="title-1">𝐔𝐬𝐞𝐫 𝐋𝐢𝐬𝐭
                                            </h2>
                                        </div>

                                    </div>
                                    <div class="table-data__tool-right">
                                        <div class="d-flex">
                                            <a href="{{ route('admin#createPage') }}">
                                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                                    <i class="zmdi zmdi-plus"></i>𝐀𝐝𝐝 𝐍𝐞𝐰 𝐔𝐬𝐞𝐫
                                                </button>
                                            </a>
                                            <form action="{{ route('logout') }}" method="post" class="ml-3">
                                                @csrf
                                                <button class="au-btn au-btn-icon btn-danger au-btn--small">
                                                    𝐋𝐨𝐠𝐨𝐮𝐭
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2 col-10">
                                    <table class="table table-data2 ">
                                        <thead>
                                            <tr>
                                                <th>𝐧𝐚𝐦𝐞</th>
                                                <th>𝐞𝐦𝐚𝐢𝐥</th>
                                                <th>𝐎𝐩𝐭𝐢𝐨𝐧𝐬</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($user as $item)
                                                <tr class="tr-shadow">
                                                    <td>{{ $item->name }}</td>
                                                    <td>
                                                        <span class="block-email">{{ $item->email }}</span>
                                                    </td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a href="{{ route('admin#delete', $item->id) }}"
                                                                class="text-decoration-none"><button class="item"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="Delete">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr class="spacer"></tr>
                                        </tbody>
                                    </table>
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
    <script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
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
