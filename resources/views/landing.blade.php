<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Hyper | Dashboard &amp; Forex Website</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.ico')}}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <script src="{{ asset('assets/js/config.js')}}"></script>
    <script src="{{ asset('vendors/simplebar/simplebar.min.js')}}"></script>
    <script src="{{ asset('vendors/echarts/echarts.min.js')}}"></script>
    <script src="{{ asset('vendors/list.js/list.min.js')}}"></script>
    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('vendors/simplebar/simplebar.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/theme-rtl.min.css')}}" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('assets/css/theme.min.css')}}" rel="stylesheet" id="style-default">
    <link href="{{ asset('assets/css/user-rtl.min.css')}}" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('assets/css/user.min.css')}}" rel="stylesheet" id="user-style-default">
    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>


<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <script>
                var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                if (isFluid) {
                    var container = document.querySelector('[data-layout]');
                    container.classList.remove('container');
                    container.classList.add('container-fluid');
                }
            </script>
            <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg"
                data-double-top-nav="data-double-top-nav" style="display: none;">
                <div class="w-100">
                    <div class="d-flex flex-between-center">
                        <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarDoubleTop" aria-controls="navbarDoubleTop"
                            aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                                    class="toggle-line"></span></span></button>
                        <a class="navbar-brand me-1 me-sm-3" href="{{route('landing')}}">
                            <div class="d-flex align-items-center"><img class="me-2"
                                    src="{{asset('assets/img/favicons/favicon-32x32.png')}}" alt=""
                                    width="40" /><span class="font-sans-serif">yper</span></div>
                        </a>
                        <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                            <li class="nav-item">
                                <div class="theme-control-toggle fa-icon-wait px-2"><input
                                        class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                                        type="checkbox" data-theme-control="theme" value="dark" onclick="" /><label
                                        class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                        for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="Switch to light theme"><span
                                            class="fas fa-sun fs-0"></span></label><label
                                        class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                        for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                                    id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"
                                    data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell"
                                        data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
                                    aria-labelledby="navbarDropdownNotification">
                                    <div class="card card-notification shadow-none">
                                        <div class="card-header">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    <h6 class="card-header-title mb-0">Notifications</h6>
                                                </div>
                                                <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal"
                                                        href="#">Mark all as read</a></div>
                                            </div>
                                        </div>
                                        <div class="scrollbar-overlay" style="max-height:19rem">
                                            <div class="list-group list-group-flush fw-normal fs--1">
                                                <div class="list-group-title border-bottom">NEW</div>
                                                <div class="list-group-item">
                                                    <a class="notification notification-flush notification-unread"
                                                        href="#!">
                                                        <div class="notification-avatar">
                                                            <div class="avatar avatar-2xl me-3">
                                                                <img class="rounded-circle"
                                                                    src="{{asset('assets/img/team/1-thumb.png')}}" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="notification-body">
                                                            <p class="mb-1"><strong>Emma Watson</strong> replied to your
                                                                comment : "Hello world 😍"</p>
                                                            <span class="notification-time"><span class="me-2"
                                                                    role="img" aria-label="Emoji">💬</span>Just
                                                                now</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="list-group-item">
                                                    <a class="notification notification-flush notification-unread"
                                                        href="#!">
                                                        <div class="notification-avatar">
                                                            <div class="avatar avatar-2xl me-3">
                                                                <div class="avatar-name rounded-circle"><span>AB</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="notification-body">
                                                            <p class="mb-1"><strong>Albert Brooks</strong> reacted to
                                                                <strong>Mia Khalifa's</strong> status
                                                            </p>
                                                            <span class="notification-time"><span
                                                                    class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="list-group-title border-bottom">EARLIER</div>
                                                <div class="list-group-item">
                                                    <a class="notification notification-flush" href="#!">
                                                        <div class="notification-avatar">
                                                            <div class="avatar avatar-2xl me-3">
                                                                <img class="rounded-circle"
                                                                    src="{{asset('assets/img/icons/weather-sm.jpg')}}" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="notification-body">
                                                            <p class="mb-1">The forecast today shows a low of 20&#8451;
                                                                in California. See today's weather.</p>
                                                            <span class="notification-time"><span class="me-2"
                                                                    role="img" aria-label="Emoji">🌤️</span>1d</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="list-group-item">
                                                    <a class="border-bottom-0 notification-unread  notification notification-flush"
                                                        href="#!">
                                                        <div class="notification-avatar">
                                                            <div class="avatar avatar-xl me-3">
                                                                <img class="rounded-circle"
                                                                    src="{{asset('assets/img/logos/oxford.png')}}" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="notification-body">
                                                            <p class="mb-1"><strong>University of Oxford</strong>
                                                                created an event : "Causal Inference Hilary 2019"</p>
                                                            <span class="notification-time"><span class="me-2"
                                                                    role="img" aria-label="Emoji">✌️</span>1w</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="list-group-item">
                                                    <a class="border-bottom-0 notification notification-flush"
                                                        href="#!">
                                                        <div class="notification-avatar">
                                                            <div class="avatar avatar-xl me-3">
                                                                <img class="rounded-circle" src="{{asset('assets/img/team/10.jpg')}}"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="notification-body">
                                                            <p class="mb-1"><strong>James Cameron</strong> invited to
                                                                join the group: United Nations International Children's
                                                                Fund</p>
                                                            <span class="notification-time"><span class="me-2"
                                                                    role="img" aria-label="Emoji">🙋‍</span>2d</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        //routenotifications
                                        <div class="card-footer text-center border-top"><a class="card-link d-block"
                                                href="#">View all</a></div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="avatar avatar-xl">
                                        <img class="rounded-circle" src="{{asset('assets/img/team/3-thumb.png')}}" alt="" />
                                    </div>
                                </a>
                                
                                @auth
                                <?php
                                    $user = session("user");
                                ?>
                                    <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                                    aria-labelledby="navbarDropdownUser">
                                        <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                            <a class="dropdown-item"
                                                href="{{route('users.profile')}}">{{$user['name']}} <i class="fi fi-sr-user"></i></a>
                                            <div class="dropdown-divider"></div>
                                            <form action="{{route('users.signout')}}" method="post">
                                                @csrf
                                                <a class="dropdown-item"  >
                                                    <button class="btn">
                                                        sign out
                                                    </button>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                    @else
                                    <a class="nav-link" href="{{ route('users.signin')}}">Sign in</a>
                                    <a class="nav-link" href="{{ route('users.create')}}">Sign up</a>
                                @endauth
                                
                            </li>
                        </ul>
                    </div>
                    <hr class="my-2 d-none d-lg-block" />
                    <div class="collapse navbar-collapse scrollbar py-lg-2" id="navbarDoubleTop">
                        <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    id="apps">App</a>
                                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                                    aria-labelledby="apps">
                                    <div class="card navbar-card-app shadow-none dark__bg-1000">
                                        <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                                                src="{{asset('assets/img/icons/spot-illustrations/authentication-corner.png')}}"
                                                width="130" alt="" />
                                            <div class="row">
                                                <div class="col-6 col-md-4">
                                                    <div class="nav flex-column"><a
                                                            class="nav-link py-1 link-600 fw-medium"
                                                            href="{{asset('html/calendar.html')}}">Calendar</a>
                                                        <p class="nav-link text-700 mb-0 fw-bold">Social</p><a
                                                            class="nav-link py-1 link-600 fw-medium"
                                                            href="{{asset('html/feed.html')}}">Feed</a><a
                                                            class="nav-link py-1 link-600 fw-medium"
                                                            href="{{asset('html/notification.html')}}">Notifications</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
                <script>
                    var navbarStyle = localStorage.getItem("navbarStyle");
                    if (navbarStyle && navbarStyle !== 'transparent') {
                        document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
                    }
                </script>
                <div class="d-flex align-items-center">
                    <div class="toggle-icon-wrapper">
                        <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span
                                class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    </div>
                    <a class="navbar-brand" href="{{route('landing')}}">
                        <div class="d-flex align-items-center py-3"><img class="me-2"
                                src="{{asset('assets/img/favicons/favicon-32x32.png')}}" alt=""
                                width="30" /><span class="font-sans-serif">yper</span></div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                    <div class="navbar-vertical-content scrollbar">
                        <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                            <li class="nav-item">
                                <!-- parent pages-->
                                <a class="nav-link" href="#dashboard" role="button" data-bs-toggle="collapse"
                                    aria-expanded="true" aria-controls="dashboard">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-chart-pie"></span></span><span
                                            class="nav-link-text ps-1">Dashboard</span></div>
                                </a>
                                <!-- <ul class="nav collapse show" id="dashboard">
                                    
                                </ul> -->
                            </li>
                            <li class="nav-item">
                                <!-- label-->
                                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                    <div class="col-auto navbar-vertical-label">App</div>
                                    <div class="col ps-0">
                                        <hr class="mb-0 navbar-vertical-divider" />
                                    </div>
                                </div>
                                <!-- parent pages-->
                                <a class="nav-link" href="{{asset('html/calendar.html')}}" role="button">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-calendar-alt"></span></span><span
                                            class="nav-link-text ps-1">Calendar</span></div>
                                </a>
                                <!-- parent pages-->
                                <a class="nav-link dropdown-indicator" href="#social" role="button"
                                    data-bs-toggle="collapse" aria-expanded="false" aria-controls="social">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-share-alt"></span></span><span
                                            class="nav-link-text ps-1">Social</span></div>
                                </a>
                                <ul class="nav collapse" id="social">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{asset('html/feed.html')}}">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Feed</span></div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{asset('html/notification.html')}}">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Notifications</span></div>
                                        </a>
                                    </li>
                                </ul>
                                <a class="nav-link dropdown-indicator" href="#user" role="button"
                                    data-bs-toggle="collapse" aria-expanded="false" aria-controls="user">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-user"></span></span><span
                                            class="nav-link-text ps-1">User</span></div>
                                </a>
                                <ul class="nav collapse" id="user">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('users.profile')}}">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Profile</span></div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <!-- label-->
                                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                    <div class="col-auto navbar-vertical-label">Global Markets</div>
                                    <div class="col ps-0">
                                        <hr class="mb-0 navbar-vertical-divider" />
                                    </div>
                                </div>
                                
                                <!-- parent pages-->
                                <a class="nav-link" href="{{asset('html/forex.html')}}" role="button">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-euro-sign"></span></span><span
                                            class="nav-link-text ps-1">Forex</span></div>
                                </a>
                                <!-- parent pages-->
                                <a class="nav-link" href="{{asset('html/indices.html')}}" role="button">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="far fa-money-bill-alt"></span></span><span
                                            class="nav-link-text ps-1">Indices</span></div>
                                </a>
                                <!-- parent pages-->
                                <a class="nav-link" href="{{asset('html/commodities.html')}}"
                                    role="button">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fab fa-envira"></span></span><span
                                            class="nav-link-text ps-1">Commodities</span></div>
                                </a>
                                <!-- parent pages-->
                                <a class="nav-link" href="{{asset('html/stock.html')}}" role="button">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fab fa-apple"></span></span><span
                                            class="nav-link-text ps-1">Stock CFDs</span></div>
                                </a>
                                <!-- parent pages-->
                                <a class="nav-link" href="{{asset('html/coin.html')}}" role="button">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fab fa-bitcoin"></span></span><span
                                            class="nav-link-text ps-1">Cryptocurrencies</span></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;">
                <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard"
                    aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                            class="toggle-line"></span></span></button>
                <a class="navbar-brand me-1 me-sm-3" href="{{route('landing')}}">
                    <div class="d-flex align-items-center"><img class="me-2"
                            src="{{asset('assets/img/favicons/favicon-32x32.png')}}" alt=""
                            width="40" /><span class="font-sans-serif">yper</span></div>
                </a>
                <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
                    <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">App</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                                aria-labelledby="apps">
                                <div class="card navbar-card-app shadow-none dark__bg-1000">
                                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                                            src="{{asset('assets/img/icons/spot-illustrations/authentication-corner.png')}}"
                                            width="130" alt="" />
                                        <div class="row">
                                            <div class="col-6 col-md-4">
                                                <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium"
                                                        href="{{asset('html/calendar.html')}}">Calendar</a>
                                                    <p class="nav-link text-700 mb-0 fw-bold">Social</p><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="{{asset('html/feed.html')}}">Feed</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/social/activity-log.html">Activity log</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="{{asset('html/notification.html')}}">Notifications</a><a
                                                        class="nav-link py-1 link-600 fw-medium"
                                                        href="app/social/followers.html">Followers</a>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                    <li class="nav-item">
                        <div class="theme-control-toggle fa-icon-wait px-2"><input
                                class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                                type="checkbox" data-theme-control="theme" value="dark" /><label
                                class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label><label
                                class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label></div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                            id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span
                                class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                        <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
                            aria-labelledby="navbarDropdownNotification">
                            <div class="card card-notification shadow-none">
                                <div class="card-header">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <h6 class="card-header-title mb-0">Notifications</h6>
                                        </div>
                                        <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark
                                                all as read</a></div>
                                    </div>
                                </div>
                                <div class="scrollbar-overlay" style="max-height:19rem">
                                    <div class="list-group list-group-flush fw-normal fs--1">
                                        <div class="list-group-title border-bottom">NEW</div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush notification-unread" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl me-3">
                                                        <img class="rounded-circle" src="{{asset('assets/img/team/1-thumb.png')}}"
                                                            alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>Emma Watson</strong> replied to your comment
                                                        : "Hello world 😍"</p>
                                                    <span class="notification-time"><span class="me-2" role="img"
                                                            aria-label="Emoji">💬</span>Just now</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush notification-unread" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl me-3">
                                                        <div class="avatar-name rounded-circle"><span>AB</span></div>
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>Albert Brooks</strong> reacted to
                                                        <strong>Mia Khalifa's</strong> status
                                                    </p>
                                                    <span class="notification-time"><span
                                                            class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-title border-bottom">EARLIER</div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl me-3">
                                                        <img class="rounded-circle"
                                                            src="{{asset('assets/img/icons/weather-sm.jpg')}}" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1">The forecast today shows a low of 20&#8451; in
                                                        California. See today's weather.</p>
                                                    <span class="notification-time"><span class="me-2" role="img"
                                                            aria-label="Emoji">🌤️</span>1d</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item">
                                            <a class="border-bottom-0 notification-unread  notification notification-flush"
                                                href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-xl me-3">
                                                        <img class="rounded-circle" src="{{asset('assets/img/logos/oxford.png')}}"
                                                            alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>University of Oxford</strong> created an
                                                        event : "Causal Inference Hilary 2019"</p>
                                                    <span class="notification-time"><span class="me-2" role="img"
                                                            aria-label="Emoji">✌️</span>1w</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item">
                                            <a class="border-bottom-0 notification notification-flush" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-xl me-3">
                                                        <img class="rounded-circle" src="{{asset('assets/img/team/10.jpg')}}"
                                                            alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>James Cameron</strong> invited to join the
                                                        group: United Nations International Children's Fund</p>
                                                    <span class="notification-time"><span class="me-2" role="img"
                                                            aria-label="Emoji">🙋‍</span>2d</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center border-top"><a class="card-link d-block"
                                        href="#">View all</a></div>
                            </div>
                        </div>
                    </li>
                    @auth
                       
                    <li class="nav-item dropdown">
                        <a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="{{asset('assets/img/team/3-thumb.png')}}" alt="" />
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                            aria-labelledby="navbarDropdownUser">
                            <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                <a class="dropdown-item" href="{{route('users.profile')}}">
                                    {{$user['name']}} <i class="fi fi-sr-user"></i>
                                    </a>
                                <div class="dropdown-divider"></div>
                                <form action="{{route('users.signout')}}" method="post">
                                    @csrf
                                    <a class="dropdown-item"  >
                                        <button class="btn">
                                            sign out
                                        </button>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </li>
                    @else
                    <a class="nav-link" href="{{ route('users.signin')}}">Sign in</a>
                                    <a class="nav-link" href="{{ route('users.create')}}">Sign up</a>
                    @endauth
                </ul>
            </nav>
            <div class="content">
                <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
                    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                        aria-controls="navbarVerticalCollapse" aria-expanded="false"
                        aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                                class="toggle-line"></span></span></button>
                    <a class="navbar-brand me-1 me-sm-3" href="{{route('landing')}}">
                        <div class="d-flex align-items-center"><img class="me-2"
                                src="{{asset('assets/img/favicons/favicon-32x32.png')}}" alt=""
                                width="40" /><span class="font-sans-serif">yper</span></div>
                    </a>
                    <ul class="navbar-nav align-items-center d-none d-lg-block">
                        <li class="nav-item">
                            <div class="search-box" data-list='{"valueNames":["title"]}'>
                                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                                        class="form-control search-input fuzzy-search" type="search"
                                        placeholder="Search..." aria-label="Search" />
                                    <span class="fas fa-search search-box-icon"></span>
                                </form>
                                <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none"
                                    data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0"
                                        aria-label="Close"></button></div>
                                <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                        <li class="nav-item">
                            <div class="theme-control-toggle fa-icon-wait px-2"><input
                                    class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                                    type="checkbox" data-theme-control="theme" value="dark" /><label
                                    class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                    for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label><label
                                    class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                    for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label></div>
                        </li>
                        @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                                id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell"
                                    data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
                                aria-labelledby="navbarDropdownNotification">
                                <div class="card card-notification shadow-none">
                                    <div class="card-header">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <h6 class="card-header-title mb-0">Notifications</h6>
                                            </div>
                                            <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal"
                                                    href="#">Mark all as read</a></div>
                                        </div>
                                    </div>
                                    <div class="scrollbar-overlay" style="max-height:19rem">
                                        <div class="list-group list-group-flush fw-normal fs--1">
                                            <div class="list-group-title border-bottom">NEW</div>
                                            <div class="list-group-item">
                                                <a class="notification notification-flush notification-unread"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <img class="rounded-circle"
                                                                src="{{asset('assets/img/team/1-thumb.png')}}" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>Emma Watson</strong> replied to your
                                                            comment : "Hello world 😍"</p>
                                                        <span class="notification-time"><span class="me-2" role="img"
                                                                aria-label="Emoji">💬</span>Just now</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-group-item">
                                                <a class="notification notification-flush notification-unread"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <div class="avatar-name rounded-circle"><span>AB</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>Albert Brooks</strong> reacted to
                                                            <strong>Mia Khalifa's</strong> status
                                                        </p>
                                                        <span class="notification-time"><span
                                                                class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-group-title border-bottom">EARLIER</div>
                                            <div class="list-group-item">
                                                <a class="notification notification-flush" href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <img class="rounded-circle"
                                                                src="{{asset('assets/img/icons/weather-sm.jpg')}}" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1">The forecast today shows a low of 20&#8451; in
                                                            California. See today's weather.</p>
                                                        <span class="notification-time"><span class="me-2" role="img"
                                                                aria-label="Emoji">🌤️</span>1d</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-group-item">
                                                <a class="border-bottom-0 notification-unread  notification notification-flush"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-xl me-3">
                                                            <img class="rounded-circle"
                                                                src="{{asset('assets/img/logos/oxford.png')}}" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>University of Oxford</strong> created an
                                                            event : "Causal Inference Hilary 2019"</p>
                                                        <span class="notification-time"><span class="me-2" role="img"
                                                                aria-label="Emoji">✌️</span>1w</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-group-item">
                                                <a class="border-bottom-0 notification notification-flush" href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-xl me-3">
                                                            <img class="rounded-circle" src="{{asset('assets/img/team/10.jpg')}}"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>James Cameron</strong> invited to join
                                                            the group: United Nations International Children's Fund</p>
                                                        <span class="notification-time"><span class="me-2" role="img"
                                                                aria-label="Emoji">🙋‍</span>2d</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center border-top"><a class="card-link d-block"
                                            href="#">View all</a></div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-xl">
                                    <img class="rounded-circle" src="{{asset('assets/img/team/3-thumb.png')}}" alt="" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                                aria-labelledby="navbarDropdownUser">
                                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                    <a class="dropdown-item" href="{{route('users.profile')}}">{{$user['name']}} <i class="fi fi-sr-user"></i></a>
                                    <div class="dropdown-divider"></div>
                                    <form action="{{route('users.signout')}}" method="post">
                                        @csrf
                                        <a class="dropdown-item"  >
                                            <button class="btn">
                                                sign out
                                            </button>
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </li>
                            @else
                                <a class="nav-link" href="{{route('users.signin')}}">Sign in</a>
                                <a class="nav-link" href="{{route('users.create')}}">Sign up</a>
                        @endauth
                        
                    </ul>
                </nav>
                <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;"
                    data-move-target="#navbarVerticalNav" data-navbar-top="combo">
                    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                        aria-controls="navbarVerticalCollapse" aria-expanded="false"
                        aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                                class="toggle-line"></span></span></button>
                    <a class="navbar-brand me-1 me-sm-3" href="{{route('landing')}}">
                        <div class="d-flex align-items-center"><img class="me-2"
                                src="{{asset('assets/img/favicons/favicon-32x32.png')}}" alt=""
                                width="40" /><span class="font-sans-serif">Hyper</span></div>
                    </a>
                    <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
                        <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    id="apps">App</a>
                                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                                    aria-labelledby="apps">
                                    <div class="card navbar-card-app shadow-none dark__bg-1000">
                                        <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                                                src="{{asset('assets/img/icons/spot-illustrations/authentication-corner.png')}}"
                                                width="130" alt="" />
                                            <div class="row">
                                                <div class="col-6 col-md-4">
                                                    <div class="nav flex-column"><a
                                                            class="nav-link py-1 link-600 fw-medium"
                                                            href="{{asset('html/calendar.html')}}">Calendar</a>
                                                        <p class="nav-link text-700 mb-0 fw-bold">Social</p><a
                                                            class="nav-link py-1 link-600 fw-medium"
                                                            href="{{asset('html/feed.html')}}">Feed</a><a
                                                            class="nav-link py-1 link-600 fw-medium"
                                                            href="{{asset('html/notification.html')}}">Notifications</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                        <li class="nav-item">
                            <div class="theme-control-toggle fa-icon-wait px-2"><input
                                    class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                                    type="checkbox" data-theme-control="theme" value="dark" /><label
                                    class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                    for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label><label
                                    class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                    for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label></div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                                id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"
                                data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell"
                                    data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
                                aria-labelledby="navbarDropdownNotification">
                                <div class="card card-notification shadow-none">
                                    <div class="card-header">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <h6 class="card-header-title mb-0">Notifications</h6>
                                            </div>
                                            <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal"
                                                    href="#">Mark all as read</a></div>
                                        </div>
                                    </div>
                                    <div class="scrollbar-overlay" style="max-height:19rem">
                                        <div class="list-group list-group-flush fw-normal fs--1">
                                            <div class="list-group-title border-bottom">NEW</div>
                                            <div class="list-group-item">
                                                <a class="notification notification-flush notification-unread"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <img class="rounded-circle"
                                                                src="{{asset('assets/img/team/1-thumb.png')}}" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>Emma Watson</strong> replied to your
                                                            comment : "Hello world 😍"</p>
                                                        <span class="notification-time"><span class="me-2" role="img"
                                                                aria-label="Emoji">💬</span>Just now</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-group-item">
                                                <a class="notification notification-flush notification-unread"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <div class="avatar-name rounded-circle"><span>AB</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>Albert Brooks</strong> reacted to
                                                            <strong>Mia Khalifa's</strong> status
                                                        </p>
                                                        <span class="notification-time"><span
                                                                class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-group-title border-bottom">EARLIER</div>
                                            <div class="list-group-item">
                                                <a class="notification notification-flush" href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-2xl me-3">
                                                            <img class="rounded-circle"
                                                                src="{{asset('assets/img/icons/weather-sm.jpg')}}" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1">The forecast today shows a low of 20&#8451; in
                                                            California. See today's weather.</p>
                                                        <span class="notification-time"><span class="me-2" role="img"
                                                                aria-label="Emoji">🌤️</span>1d</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-group-item">
                                                <a class="border-bottom-0 notification-unread  notification notification-flush"
                                                    href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-xl me-3">
                                                            <img class="rounded-circle"
                                                                src="{{asset('assets/img/logos/oxford.png')}}" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>University of Oxford</strong> created an
                                                            event : "Causal Inference Hilary 2019"</p>
                                                        <span class="notification-time"><span class="me-2" role="img"
                                                                aria-label="Emoji">✌️</span>1w</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="list-group-item">
                                                <a class="border-bottom-0 notification notification-flush" href="#!">
                                                    <div class="notification-avatar">
                                                        <div class="avatar avatar-xl me-3">
                                                            <img class="rounded-circle" src="{{asset('assets/img/team/10.jpg')}}"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="notification-body">
                                                        <p class="mb-1"><strong>James Cameron</strong> invited to join
                                                            the group: United Nations International Children's Fund</p>
                                                        <span class="notification-time"><span class="me-2" role="img"
                                                                aria-label="Emoji">🙋‍</span>2d</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center border-top"><a class="card-link d-block"
                                            href="#">View all</a></div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown px-1">
                            <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button"
                                data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="43" viewBox="0 0 16 16" fill="none">
                                    <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                                    <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                                    <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                                    <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                                    <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                                    <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                                    <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                                    <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                                    <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                                </svg></a>
                        </li>
                    </ul>
                </nav>
                <script>

                    var navbarPosition = localStorage.getItem('navbarPosition');
                    var navbarVertical = document.querySelector('.navbar-vertical');
                    var navbarTopVertical = document.querySelector('.content .navbar-top');
                    var navbarTop = document.querySelector('[data-layout] .navbar-top:not([data-double-top-nav');
                    var navbarDoubleTop = document.querySelector('[data-double-top-nav]');
                    var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');

                    var a = 1, b = 0;
                    var r = document.querySelector(':root');
                    var rs = getComputedStyle(r);

                    function week() {
                        if (a == 0) {
                            document.getElementById("money").innerHTML = "$49M";
                            document.getElementById("percent").innerHTML = "+4%";
                            document.getElementById("alltime").style.color = rs.getPropertyValue("--falcon-navbar-vertical-link-color");
                            document.getElementById("week").style.color = "#2c7be5";
                            document.getElementById("chart").classList.remove("echart-default-total-order");
                            document.getElementById("chart").removeAttribute("data-echarts");
                            document.getElementById("chart").removeAttribute("data-echart-responsive");
                            document.getElementById("chart").classList.add("echart-bar-weekly-sales");
                            document.getElementById("chart").classList.add("h-100");

                            a = 1;
                            b = 0;
                        }

                    }
                    function alltime() {
                        if (b == 0) {
                            document.getElementById("money").innerHTML = "$143M"
                            document.getElementById("percent").innerHTML = "+7%"
                            document.getElementById("week").style.color = rs.getPropertyValue("--falcon-navbar-vertical-link-color");
                            document.getElementById("alltime").style.color = "#2c7be5"
                            document.getElementById("chart").classList.remove("echart-bar-weekly-sales");
                            document.getElementById("chart").classList.remove("h-100");

                            document.getElementById("chart").classList.add("echart-default-total-order");
                            document.getElementById("chart").setAttribute("data-echarts", '{"tooltip":{"trigger":"axis","formatter":"{b0} : {c0}"},"xAxis":{"data":["Week 4","Week 5","Week 6","Week 7"]},"series":[{"type":"line","data":[20,40,100,120],"smooth":true,"lineStyle":{"width":3}}],"grid":{"bottom":"2%","top":"2%","right":"10px","left":"10px"}}');
                            document.getElementById("chart").setAttribute("data-echart-responsive", "true");

                            b = 1;
                            a = 0;
                        }
                    }

                    if (localStorage.getItem('navbarPosition') === 'double-top') {
                        document.documentElement.classList.toggle('double-top-nav-layout');
                    }

                    if (navbarPosition === 'top') {
                        navbarTop.removeAttribute('style');
                        navbarTopVertical.remove(navbarTopVertical);
                        navbarVertical.remove(navbarVertical);
                        navbarTopCombo.remove(navbarTopCombo);
                        navbarDoubleTop.remove(navbarDoubleTop);
                    } else if (navbarPosition === 'combo') {
                        navbarVertical.removeAttribute('style');
                        navbarTopCombo.removeAttribute('style');
                        navbarTop.remove(navbarTop);
                        navbarTopVertical.remove(navbarTopVertical);
                        navbarDoubleTop.remove(navbarDoubleTop);
                    } else if (navbarPosition === 'double-top') {
                        navbarDoubleTop.removeAttribute('style');
                        navbarTopVertical.remove(navbarTopVertical);
                        navbarVertical.remove(navbarVertical);
                        navbarTop.remove(navbarTop);
                        navbarTopCombo.remove(navbarTopCombo);
                    } else {
                        navbarVertical.removeAttribute('style');
                        navbarTopVertical.removeAttribute('style');
                        navbarTop.remove(navbarTop);
                        navbarDoubleTop.remove(navbarDoubleTop);
                        navbarTopCombo.remove(navbarTopCombo);
                    }
                </script>
                <div class="row g-3 mb-3">
                    <div class="col-md-6 col-xxl-3">
                        <div class="card h-md-100 ecommerce-card-min-width">
                            <div class="card-header pb-0">
                                <h6 class="mb-0 mt-2 d-flex align-items-center"><span>Volume: <a id="week" href="#"
                                            class="active" onclick="week()" style="text-decoration:none;">Weekly</a> |
                                        <a id="alltime" class="active" href="#"
                                            style="text-decoration:none; color: var(--falcon-navbar-vertical-link-color);"
                                            onclick="alltime()">All time
                                        </a></span><span class="ms-1 text-400" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Calculated according to last week's sales"><span
                                            class="far fa-question-circle" data-fa-transform="shrink-1"></span></span>
                                </h6>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-end">
                                <div class="row">
                                    <div class="col">
                                        <p class="font-sans-serif lh-1 mb-1 fs-4" id="money">$49M</p><span
                                            class="badge badge-soft-success rounded-pill fs--2"
                                            id="percent">+3.5%</span>
                                    </div>
                                    <div class="col-auto ps-0">
                                        <div id="chart" class="echart-bar-weekly-sales h-100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-3">
                        <div class="card h-md-100">
                            <div class="card-header pb-0">
                                <h6 class="mb-0 mt-2">Transactions</h6>
                            </div>
                            <div class="card-body d-flex flex-column justify-content-end">
                                <div class="row justify-content-between">
                                    <div class="col-auto align-self-end">
                                        <div class="fs-4 fw-normal font-sans-serif text-700 lh-1 mb-1">58.4M</div><span
                                            class="badge rounded-pill fs--2 bg-200 text-primary"><span
                                                class="fas fa-caret-up me-1"></span>13.6%</span>
                                    </div>
                                    <div class="col-auto ps-0 mt-n4">
                                        <div class="echart-default-total-order"
                                            data-echarts='{"tooltip":{"trigger":"axis","formatter":"{b0} : {c0}"},"xAxis":{"data":["Week 4","Week 5","Week 6","Week 7"]},"series":[{"type":"line","data":[20,40,100,120],"smooth":true,"lineStyle":{"width":3}}],"grid":{"bottom":"2%","top":"2%","right":"10px","left":"10px"}}'
                                            data-echart-responsive="true"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-3">
                        <div class="card h-md-100">
                            <div class="card-body">
                                <div class="row h-100 justify-content-between g-0">
                                    <div class="col-5 col-sm-6 col-xxl pe-2">
                                        <h6 class="mt-1">Market Share</h6>
                                        <div class="fs--2 mt-3">
                                            <div class="d-flex flex-between-center mb-1">
                                                <div class="d-flex align-items-center"><span
                                                        class="dot bg-primary"></span><span
                                                        class="fw-semi-bold">Samsung</span></div>
                                                <div class="d-xxl-none">33%</div>
                                            </div>
                                            <div class="d-flex flex-between-center mb-1">
                                                <div class="d-flex align-items-center"><span
                                                        class="dot bg-info"></span><span
                                                        class="fw-semi-bold">Huawei</span></div>
                                                <div class="d-xxl-none">29%</div>
                                            </div>
                                            <div class="d-flex flex-between-center mb-1">
                                                <div class="d-flex align-items-center"><span
                                                        class="dot bg-300"></span><span
                                                        class="fw-semi-bold">Apple</span></div>
                                                <div class="d-xxl-none">20%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto position-relative">
                                        <div class="echart-market-share"></div>
                                        <div class="position-absolute top-50 start-50 translate-middle text-dark fs-2">
                                            26M</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-3">
                        <div class="card h-md-100">
                            <div class="card-header d-flex flex-between-center pb-0">
                                <h6 class="mb-0">Weather</h6>
                                <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                                        class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                                        type="button" id="dropdown-weather-update" data-bs-toggle="dropdown"
                                        data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                                            class="fas fa-ellipsis-h fs--2"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end border py-2"
                                        aria-labelledby="dropdown-weather-update"><a class="dropdown-item"
                                            href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                            href="#!">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-2">
                                <div class="row g-0 h-100 align-items-center">
                                    <div class="col">
                                        <div class="d-flex align-items-center"><img class="me-3"
                                                src="{{asset('assets/img/icons/weather-icon.png')}}" alt="" height="60" />
                                            <div>
                                                <h6 class="mb-2">Da Nang City</h6>
                                                <div class="fs--2 fw-semi-bold">
                                                    <div class="text-warning">Sunny</div>Precipitation: 50%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto text-center ps-2">
                                        <div class="fs-4 fw-normal font-sans-serif text-primary mb-1 lh-1">31&deg;</div>
                                        <div class="fs--1 text-800">32&deg; / 25&deg;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 pe-lg-2 mb-3">
                        <div class="card h-lg-100 overflow-hidden">
                            <div class="card-header bg-light">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="mb-0">New Projects</h6>
                                    </div>
                                    <div class="col-auto text-center pe-x1"><select class="form-select form-select-sm">
                                            <option>Running Time</option>
                                            <option>Estimated Time</option>
                                        </select></div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                                    <div class="col ps-x1 py-1 position-static">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xl me-3">
                                                <div class="avatar-name rounded-circle bg-soft-primary text-dark"><span
                                                        class="fs-0 text-primary">1</span></div>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 d-flex align-items-center"><a
                                                        class="text-800 stretched-link" href="#!">A</a><span
                                                        class="badge rounded-pill ms-2 bg-200 text-primary">38%</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col py-1">
                                        <div class="row flex-end-center g-0">
                                            <div class="col-auto pe-2">
                                                <div class="fs--1 fw-semi-bold">12:00:00</div>
                                            </div>
                                            <div class="col-5 pe-x1 ps-2">
                                                <div class="progress bg-200 me-2" style="height: 5px;">
                                                    <div class="progress-bar rounded-pill" role="progressbar"
                                                        style="width: 38%" aria-valuenow="38" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                                    <div class="col ps-x1 py-1 position-static">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xl me-3">
                                                <div class="avatar-name rounded-circle bg-soft-success text-dark"><span
                                                        class="fs-0 text-success">2</span></div>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 d-flex align-items-center"><a
                                                        class="text-800 stretched-link" href="#!">B</a><span
                                                        class="badge rounded-pill ms-2 bg-200 text-primary">79%</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col py-1">
                                        <div class="row flex-end-center g-0">
                                            <div class="col-auto pe-2">
                                                <div class="fs--1 fw-semi-bold">25:00:00</div>
                                            </div>
                                            <div class="col-5 pe-x1 ps-2">
                                                <div class="progress bg-200 me-2" style="height: 5px;">
                                                    <div class="progress-bar rounded-pill" role="progressbar"
                                                        style="width: 79%" aria-valuenow="79" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                                    <div class="col ps-x1 py-1 position-static">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xl me-3">
                                                <div class="avatar-name rounded-circle bg-soft-info text-dark"><span
                                                        class="fs-0 text-info">3</span></div>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 d-flex align-items-center"><a
                                                        class="text-800 stretched-link" href="#!">C</a><span
                                                        class="badge rounded-pill ms-2 bg-200 text-primary">90%</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col py-1">
                                        <div class="row flex-end-center g-0">
                                            <div class="col-auto pe-2">
                                                <div class="fs--1 fw-semi-bold">58:00:00</div>
                                            </div>
                                            <div class="col-5 pe-x1 ps-2">
                                                <div class="progress bg-200 me-2" style="height: 5px;">
                                                    <div class="progress-bar rounded-pill" role="progressbar"
                                                        style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                                    <div class="col ps-x1 py-1 position-static">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xl me-3">
                                                <div class="avatar-name rounded-circle bg-soft-warning text-dark"><span
                                                        class="fs-0 text-warning">4</span></div>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 d-flex align-items-center"><a
                                                        class="text-800 stretched-link" href="#!">D</a><span
                                                        class="badge rounded-pill ms-2 bg-200 text-primary">40%</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col py-1">
                                        <div class="row flex-end-center g-0">
                                            <div class="col-auto pe-2">
                                                <div class="fs--1 fw-semi-bold">21:00:00</div>
                                            </div>
                                            <div class="col-5 pe-x1 ps-2">
                                                <div class="progress bg-200 me-2" style="height: 5px;">
                                                    <div class="progress-bar rounded-pill" role="progressbar"
                                                        style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0 align-items-center py-2 position-relative">
                                    <div class="col ps-x1 py-1 position-static">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-xl me-3">
                                                <div class="avatar-name rounded-circle bg-soft-danger text-dark"><span
                                                        class="fs-0 text-danger">5</span></div>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 d-flex align-items-center"><a
                                                        class="text-800 stretched-link" href="#!">E</a><span
                                                        class="badge rounded-pill ms-2 bg-200 text-primary">70%</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col py-1">
                                        <div class="row flex-end-center g-0">
                                            <div class="col-auto pe-2">
                                                <div class="fs--1 fw-semi-bold">31:00:00</div>
                                            </div>
                                            <div class="col-5 pe-x1 ps-2">
                                                <div class="progress bg-200 me-2" style="height: 5px;">
                                                    <div class="progress-bar rounded-pill" role="progressbar"
                                                        style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block w-100 py-2"
                                    href="#!">Show all projects<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-2 mb-3">
                        <div class="card h-lg-100">
                            <div class="card-header">
                                <div class="row flex-between-center">
                                    <div class="col-auto">
                                        <h6 class="mb-0">Total Volume</h6>
                                    </div>
                                    <div class="col-auto d-flex"><select
                                            class="form-select form-select-sm select-month me-2">
                                            <option value="0">January</option>
                                            <option value="1">February</option>
                                            <option value="2">March</option>
                                            <option value="3">April</option>
                                            <option value="4">May</option>
                                            <option value="5">Jun</option>
                                            <option value="6">July</option>
                                            <option value="7">August</option>
                                            <option value="8">September</option>
                                            <option value="9">October</option>
                                            <option value="10">November</option>
                                            <option value="11">December</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body h-100 pe-0">
                                <!-- Find the JS file for the following chart at: src\js\charts\echarts\total-sales.js-->
                                <!-- If you are not using gulp based workflow, you can find the transpiled code at: public\assets\js\theme.js-->
                                <div class="echart-line-total-sales h-100" data-echart-responsive="true"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class=" col-lg-12 col-xl-12 pe-lg-2 mb-3 ">
                        <div class="card h-lg-100 overflow-hidden">
                            <div class="card-body p-0">
                                <div class="table-responsive scrollbar">
                                    <table class="table table-dashboard mb-0 table-borderless  border-200">
                                        <thead class="bg-light">
                                            <tr class="text-900">
                                                <th>Most popular </th>
                                                <th class="text-end">Buy price</th>
                                                <th class="text-end">Sell price</th>
                                                <th class=" text-end">Change (%)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-bottom border-200">
                                                <td>
                                                    <div class="d-flex align-items-center position-relative"><img
                                                            class="rounded-1 border border-200"
                                                            src="{{asset('assets/img/products/12.svg')}}" width="60" alt="" />
                                                        <div class="flex-1 ms-3">
                                                            <h6 class="mb-1 fw-semi-bold "><a
                                                                    class="text-dark stretched-link "
                                                                    href="#!">Bitcoin</a></h6>
                                                            <p class="fw-semi-bold mb-0 text-500">Cryptocurrencies</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-end fw-semi-bold">$21311</td>
                                                <td class="align-middle text-end fw-semi-bold">$21211</td>
                                                <td class="align-middle pe-x1 text-end fw-semi-bold ms-2">1%</td>
                                            </tr>
                                            <tr class="border-bottom border-200">
                                                <td>
                                                    <div class="d-flex align-items-center position-relative"><img
                                                            class="rounded-1 border border-200"
                                                            src="{{asset('assets/img/products/aapl_us.svg')}}" width="60" alt="" />
                                                        <div class="flex-1 ms-3">
                                                            <h6 class="mb-1 fw-semi-bold"><a
                                                                    class="text-dark stretched-link " href="#!">Aplle
                                                                    Inc</a></h6>
                                                            <p class="fw-semi-bold mb-0 text-500">Stock CFDs</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-end fw-semi-bold">$180.58</td>
                                                <td class="align-middle text-end fw-semi-bold">$181.16</td>
                                                <td class="align-middle text-end pe-x1 fw-semi-bold ms-2">0.6%</td>
                                            </tr>
                                            <tr class="border-bottom border-200">
                                                <td>
                                                    <div class="d-flex align-items-center position-relative"><img
                                                            class="rounded-1 border border-200"
                                                            src="{{asset('assets/img/products/tsla_us.svg')}}" width="60" alt="" />
                                                        <div class="flex-1 ms-3">
                                                            <h6 class="mb-1 fw-semi-bold"><a
                                                                    class="text-dark stretched-link" href="#! ">Tesla
                                                                    Motors Inc</a></h6>
                                                            <p class="fw-semi-bold mb-0 text-500">Stock CFDs</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-end fw-semi-bold">$214.49</td>
                                                <td class="align-middle text-end fw-semi-bold">$215.18</td>
                                                <td class="align-middle text-end pe-x1 fw-semi-bold ms-2">0.3%</td>
                                            </tr>
                                            <tr class="border-bottom border-200">
                                                <td>
                                                    <div class="d-flex align-items-center position-relative"><img
                                                            class="rounded-1 border border-200"
                                                            src="{{asset('assets/img/products/gold.svg')}}" width="60" alt="" />
                                                        <div class="flex-1 ms-3">
                                                            <h6 class="mb-1 fw-semi-bold"><a
                                                                    class="text-dark stretched-link " href="#!">GOLD</a>
                                                            </h6>
                                                            <p class="fw-semi-bold mb-0 text-500">Commodities</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-end fw-semi-bold">$1948.51</td>
                                                <td class="align-middle text-end fw-semi-bold">$1948.81</td>
                                                <td class="align-middle text-end pe-x1 fw-semi-bold ms-2">0.1%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center position-relative"><img
                                                            class="rounded-1 border border-200"
                                                            src="{{asset('assets/img/products/uk100.svg')}}" width="60" alt="" />
                                                        <div class="flex-1 ms-3">
                                                            <h6 class="mb-1 fw-semi-bold"><a
                                                                    class="text-dark stretched-link " href="#!">US100
                                                                </a></h6>
                                                            <p class="fw-semi-bold mb-0 text-500">Indicies</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-end fw-semi-bold">$14579.08</td>
                                                <td class="align-middle text-end fw-semi-bold">$14579.98</td>
                                                <td class="align-middle text-end pe-x1 fw-semi-bold ms-2">0.02%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">By Phuoc Thanh and Hieu Nhan<span
                                    class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2023 &copy; <a
                                    href="http://vku.udn.vn/" target="_blank">VietNam - Korea University of Information
                                    and Communication Technology</a></p>
                        </div>

                    </div>
                </footer>
            </div>
            <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog"
                aria-labelledby="authentication-modal-label" aria-hidden="true">
                <div class="modal-dialog mt-6" role="document">
                    <div class="modal-content border-0">
                        <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                            <div class="position-relative z-index-1 light">
                                <h4 class="mb-0 text-white" id="authentication-modal-label">Sign up</h4>
                                <p class="fs--1 mb-0 text-white">Please create your free Hyper account</p>
                            </div><button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body py-4 px-5">
                            <form>
                                <div class="mb-3"><label class="form-label" for="modal-auth-name">Name</label><input
                                        class="form-control" type="text" autocomplete="on" id="modal-auth-name" /></div>
                                <div class="mb-3"><label class="form-label" for="modal-auth-email">Email
                                        address</label><input class="form-control" type="email" autocomplete="on"
                                        id="modal-auth-email" /></div>
                                <div class="row gx-2">
                                    <div class="mb-3 col-sm-6"><label class="form-label"
                                            for="modal-auth-password">Password</label><input class="form-control"
                                            type="password" autocomplete="on" id="modal-auth-password" /></div>
                                    <div class="mb-3 col-sm-6"><label class="form-label"
                                            for="modal-auth-confirm-password">Confirm Password</label><input
                                            class="form-control" type="password" autocomplete="on"
                                            id="modal-auth-confirm-password" /></div>
                                </div>
                                <div class="form-check"><input class="form-check-input" type="checkbox"
                                        id="modal-auth-register-checkbox" /><label class="form-label"
                                        for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a
                                            href="#!">privacy policy</a></label></div>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit"
                                        name="submit">Sign up</button></div>
                            </form>
                            <div class="position-relative mt-5">
                                <hr />
                                <div class="divider-content-center">or sign up with</div>
                            </div>
                            <div class="row g-2 mt-2">
                                <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100"
                                        href="#"><span class="fab fa-google-plus-g me-2"
                                            data-fa-transform="grow-8"></span> google</a></div>
                                <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100"
                                        href="#"><span class="fab fa-facebook-square me-2"
                                            data-fa-transform="grow-8"></span> facebook</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{asset('vendors/popper/popper.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/anchorjs/anchor.min.js')}}"></script>
    <script src="{{asset('vendors/is/is.min.js')}}"></script>
    <script src="{{asset('vendors/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('vendors/fontawesome/all.min.js')}}"></script>
    <script src="{{asset('vendors/lodash/lodash.min.js')}}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{asset('vendors/list.js/list.min.js')}}"></script>
    <script src="{{asset('assets/js/theme.js')}}"></script>
</body>

</html>