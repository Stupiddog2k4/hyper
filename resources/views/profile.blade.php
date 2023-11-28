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
    
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
    <meta name="theme-color" content="#ffffff">
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
                                    src="{{asset('assets/img/favicons/favicon-32x32.png')}}" alt="" width="40" /><span
                                    class="font-sans-serif">yper</span></div>
                        </a>
                        <ul class="navbar-nav align-items-center d-none d-lg-block">
                            <li class="nav-item">
                                <div class="search-box" data-list='{"valueNames":["title"]}'>
                                    <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                                        <input class="form-control search-input fuzzy-search" type="search"
                                            placeholder="Search..." aria-label="Search" />
                                        <span class="fas fa-search search-box-icon"></span>
                                    </form>
                                    <div class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none"
                                        data-bs-dismiss="search"><button class="btn btn-link btn-close-falcon p-0"
                                            aria-label="Close"></button></div>
                                   
                                </div>
                            </li>
                        </ul>
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
                                <a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="avatar avatar-xl">
                                        <img class="rounded-circle" src="'{{asset('assets/img/team/3-thumb.png')}}'" alt="" />
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                                    aria-labelledby="navbarDropdownUser">
                                    <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                        <a class="dropdown-item" href="{{route('users.profile',['user'=>$user])}}">Profile &amp;
                                            account</a>
                                        <div class="dropdown-divider"></div>
                                       
                                        <a class="dropdown-item" href="{{route('users.signout')}}">Logout</a>
                                    </div>
                                </div>
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
                                                            href="">Calendar</a>
                                                        <p class="nav-link text-700 mb-0 fw-bold">Social</p><a
                                                            class="nav-link py-1 link-600 fw-medium"
                                                            href="">Feed</a><a
                                                            class="nav-link py-1 link-600 fw-medium"
                                                            href="">Notifications</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    id="moduless">Global Markets</a>
                                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                                    aria-labelledby="moduless">
                                    <div class="card navbar-card-components shadow-none dark__bg-1000">
                                        <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                                                src="{{asset('assets/img/icons/spot-illustrations/authentication-corner.png')}}"
                                                width="130" alt="" />
                                          
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
                                src="{{asset('assets/img/favicons/favicon-32x32.png')}}" alt="" width="30" /><span
                                class="font-sans-serif">yper</span></div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                    <div class="navbar-vertical-content scrollbar">
                        <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                            <li class="nav-item">
                                <!-- parent pages-->
                                <a class="nav-link" href="{{route('landing')}}" role="button"
                                    >
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
                                <a class="nav-link" href="" role="button">
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
                                        <a class="nav-link" href="">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Feed</span></div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">
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
                                        <a class="nav-link" href="{{route('users.profile',['user'=>$user])}}">
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
                                <a class="nav-link" href="" role="button">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-euro-sign"></span></span><span
                                            class="nav-link-text ps-1">Forex</span></div>
                                </a>
                                <!-- parent pages-->
                                <a class="nav-link" href="" role="button">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="far fa-money-bill-alt"></span></span><span
                                            class="nav-link-text ps-1">Indices</span></div>
                                </a>
                                <!-- parent pages-->
                                <a class="nav-link" href="" role="button">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fab fa-envira"></span></span><span
                                            class="nav-link-text ps-1">Commodities</span></div>
                                </a>
                                <!-- parent pages-->
                                <a class="nav-link" href="" role="button">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fab fa-apple"></span></span><span
                                            class="nav-link-text ps-1">Stock CFDs</span></div>
                                </a>
                                <!-- parent pages-->
                                <a class="nav-link" href="" role="button">
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
                            src="{{asset('assets/img/favicons/favicon-32x32.png')}}" alt="" width="40" /><span
                            class="font-sans-serif">falcon</span></div>
                </a>
                
               
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
                                src="{{asset('assets/img/favicons/favicon-32x32.png')}}" alt="" width="40" /><span
                                class="font-sans-serif">alcon</span></div>
                    </a>
                    <ul class="navbar-nav align-items-center d-none d-lg-block">
                        <li class="nav-item">
                            <div class="search-box" data-list='{"valueNames":["title"]}'>
                                <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                                        class="form-control search-input fuzzy-search" type="search"
                                        placeholder="Search..." aria-label="Search" />
                                    <span class="fas fa-search search-box-icon"></span>
                                </form>
                               
                                
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
                                                            <strong>Mia Khalifa's</strong> status</p>
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
                                            href="">View all</a></div>
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
                                    <a class="dropdown-item" href="{{route('users.profile',['user'=>$user])}}">Profile &amp;
                                        account</a>
                                    <div class="dropdown-divider"></div>
                                    
                                    <a class="dropdown-item" href="{{route('users.signout')}}">Logout</a>
                                </div>
                            </div>
                        </li>
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
                                src="{{asset('assets/img/favicons/favicon-32x32.png')}}" alt="" width="40" /><span
                                class="font-sans-serif">alcon</span></div>
                    </a>
                  
                    
                </nav>
              <div class="card mb-3">
                <div class="card-header position-relative min-vh-25 mb-7">
                    <div class="bg-holder rounded-3 rounded-bottom-0" style="background-image:url(C:\Users\nhanb\Hyper\public\assets\img\team\3.jpg);"></div>
                    <!--/.bg-holder-->
                    <div class="avatar avatar-5xl avatar-profile"><img class="rounded-circle img-thumbnail shadow-sm" src="{{asset('assets/img/team/3.jpg')}}" width="200" alt="" /></div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <h4 class="mb-1"> {{$user->name}}<span data-bs-toggle="tooltip" data-bs-placement="right" title="Verified"><small class="fa fa-check-circle text-primary" data-fa-transform="shrink-4 down-2"></small></span></h4>
                            <h5 class="fs-0 fw-normal">Student at VKU</h5>
                            
                            <div class="border-bottom border-dashed my-4 d-lg-none"></div>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-8 pe-lg-2">
                        <div class="card mb-3">
                            <div class="card-header bg-light">
                                <h5 class="mb-0">Intro</h5>
                            </div>
                            <div class="card-body text-justify">
                                <p class="mb-0 text-1000">My name is {{$user->name}}, and I'm thrilled to have the opportunity to introduce myself. I hail from the beautiful country of Vietnam and am currently 19 years old. As a passionate individual with a keen interest in technology, I am pursuing my studies in IT at the prestigious Vietnam-Korea University of Information and Communication Technology.</p>
                                <div class="collapse show" id="profile-intro">
                                    <p class="mt-3 text-1000">From an early age, I have been fascinated by the power of technology and its ability to transform the world around us. This curiosity led me to embark on this educational journey, where I am constantly expanding my knowledge and skills in various areas of IT. Whether it's programming, web development, or data analysis, I enjoy exploring the vast possibilities that the field offers. </p>
                                    <p class="text-1000">One of the reasons I chose the Vietnam-Korea University of Information and Communication Technology is the excellent academic environment it provides. The university's dynamic curriculum and emphasis on practical learning have allowed me to gain hands-on experience, working on exciting projects and collaborating with fellow students who share the same passion.</p>
                                    <p class="text-1000 mb-0">There’s always something new to learn, especially in IT-related fields. People like working with me because I can explain technology to everyone, from staff to executives who need me to tie together the details and
                                        the big picture. I can also implement the technologies that successful projects need.</p>
                                </div>
                            </div>
                            <div class="card-footer bg-light p-0 border-top"><button class="btn btn-link d-block w-100 btn-intro-collapse" type="button" data-bs-toggle="collapse" data-bs-target="#profile-intro" aria-expanded="true" aria-controls="profile-intro">Show <span class="less">less<span class="fas fa-chevron-up ms-2 fs--2"></span></span><span class="full">full<span class="fas fa-chevron-down ms-2 fs--2"></span></span></button></div>
                        </div>
                        
                        
                        <div class="card mb-3 mb-lg-0">
                            <div class="card-header bg-light">
                                <h5 class="mb-0">Photos</h5>
                            </div>
                            <div class="card-body overflow-hidden">
                                <div class="row g-0">
                                    <div class="col-6 p-1"><a class="glightbox" href="{{ asset('assets/img/generic/4.jpg')}}" data-gallery="gallery1" data-glightbox="data-glightbox"><img class="img-fluid rounded" src="{{asset('assets/img/generic/4.jpg')}}" alt="..." /></a></div>
                                    <div class="col-6 p-1"><a class="glightbox" href="{{ asset('assets/img/generic/5.jpg')}}" data-gallery="gallery1" data-glightbox="data-glightbox"><img class="img-fluid rounded" src="{{asset('assets/img/generic/5.jpg')}}" alt="..." /></a></div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ps-lg-2">
                        <div class="sticky-sidebar">
                            <div class="card mb-3">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Experience</h5>
                                </div>
                                <div class="card-body fs--1">
                                    <div class="d-flex"><a href="#!"> <img class="img-fluid" src="{{asset('assets/img/logos/g.png')}}" alt="" width="56" /></a>
                                        <div class="flex-1 position-relative ps-3">
                                            <h6 class="fs-0 mb-0">Big Data Engineer<span data-bs-toggle="tooltip" data-bs-placement="top" title="Verified"><small class="fa fa-check-circle text-primary" data-fa-transform="shrink-4 down-2"></small></span></h6>
                                            <p class="mb-1"> <a href="#!">Google</a></p>
                                            <p class="text-1000 mb-0">Apr 2012 - Present &bull; 6 yrs 9 mos</p>
                                            <p class="text-1000 mb-0">California, USA</p>
                                            <div class="border-bottom border-dashed my-3"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex"><a href="#!"> <img class="img-fluid" src="{{asset('assets/img/logos/apple.png')}}" alt="" width="56" /></a>
                                        <div class="flex-1 position-relative ps-3">
                                            <h6 class="fs-0 mb-0">Software Engineer<span data-bs-toggle="tooltip" data-bs-placement="top" title="Verified"><small class="fa fa-check-circle text-primary" data-fa-transform="shrink-4 down-2"></small></span></h6>
                                            <p class="mb-1"> <a href="#!">Apple</a></p>
                                            <p class="text-1000 mb-0">Jan 2012 - Apr 2012 &bull; 4 mos</p>
                                            <p class="text-1000 mb-0">California, USA</p>
                                            <div class="border-bottom border-dashed my-3"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex"><a href="#!"> <img class="img-fluid" src="{{asset('assets/img/logos/nike.png')}}" alt="" width="56" /></a>
                                        <div class="flex-1 position-relative ps-3">
                                            <h6 class="fs-0 mb-0">Mobile App Developer<span data-bs-toggle="tooltip" data-bs-placement="top" title="Verified"><small class="fa fa-check-circle text-primary" data-fa-transform="shrink-4 down-2"></small></span></h6>
                                            <p class="mb-1"> <a href="#!">Nike</a></p>
                                            <p class="text-1000 mb-0">Jan 2011 - Apr 2012 &bull; 1 yr 4 mos</p>
                                            <p class="text-1000 mb-0">Beaverton, USA</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header bg-light">
                                    <h5 class="mb-0">Education</h5>
                                </div>
                                <div class="card-body fs--1">
                                    <div class="d-flex">
                                        <a href="#!">
                                            <div class="avatar avatar-3xl">
                                                <div class="avatar-name rounded-circle"><span>VKU</span></div>
                                            </div>
                                        </a>
                                        <div class="flex-1 position-relative ps-3">
                                            <h6 class="fs-0 mb-0"> <a href="#!"> VietNam - Korea University of Information and Communication Technology<span data-bs-toggle="tooltip" data-bs-placement="top" title="Verified"><small class="fa fa-check-circle text-primary" data-fa-transform="shrink-4 down-2"></small></span></a></h6>
                                            <p class="mb-1">Computer Science and Engineering</p>
                                            <p class="text-1000 mb-0">2022 - 2027 • 5 yrs</p>
                                            <p class="text-1000 mb-0">Da Nang, Viet Nam</p>
                                            <div class="border-bottom border-dashed my-3"></div>
                                        </div>
                                    </div>
                                    
                                </div>
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
                                    href="http://vku.udn.vn/" target="_blank">VietNam - Korea University of Information and Communication Technology</a></p>
                        </div>
                        
                    </div>
                </footer>
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