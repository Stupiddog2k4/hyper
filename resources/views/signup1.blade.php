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
        <div class="container-fluid">
            <div class="row min-vh-100 flex-center g-0">
                <div class="col-lg-8 col-xxl-5 py-3 position-relative"><img class="bg-auth-circle-shape" src="{{ asset('assets/img/icons/spot-illustrations/bg-shape.png')}}" alt="" width="250"><img class="bg-auth-circle-shape-2" src="../../../assets/img/icons/spot-illustrations/shape-1.png" alt="" width="150">
                    <div class="card overflow-hidden z-index-1">
                        <div class="card-body p-0">
                            <div class="row g-0 h-100">
                                <div class="col-md-5 text-center bg-card-gradient">
                                    <div class="position-relative p-4 pt-md-5 pb-md-7 light">
                                        <div class="bg-holder bg-auth-card-shape" style="background-image:url(../../../assets/img/icons/spot-illustrations/half-circle.png);"></div>
                                        <!--/.bg-holder-->
                                        <div class="z-index-1 position-relative"><a class="link-light mb-4 font-sans-serif fs-4 d-inline-block fw-bolder" href="{{route('landing')}}">Hyper</a>
                                            <p class="opacity-75 text-white"></p>
                                        </div>
                                    </div>
                                    <div class="mt-3 mb-4 mt-md-4 mb-md-5 light">
                                        <p class="pt-3 text-white">Have an account?<br><a class="btn btn-outline-light mt-2 px-4" href="{{route('users.signin')}}">Log In</a></p>
                                    </div>
                                </div>
                                <div class="col-md-7 d-flex flex-center">
                                    <div class="p-4 p-md-5 flex-grow-1">
                                        <h3>Register</h3>
                                        <form method="POST" action="{{ route('users.store') }}">
                                            @csrf
                                            <div class="mb-3"><label class="form-label" for="card-name">Name</label><input name="name" class="form-control" type="text" autocomplete="on" id="card-name" value="{{ old('name') }}" />
                                                @error('name')
                                                    <div class="signup-form_nameerr" style="color: red;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3"><label class="form-label" for="card-email">Email address</label><input name="email" class="form-control" type="email" autocomplete="on" id="card-email" value="{{ old('email') }}" />
                                                @error('email')
                                                    <div class="signup-form_nameerr" style="color: red;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="row gx-2">
                                                <div class="mb-3 col-sm-6"><label class="form-label" for="card-password">Password</label><input name="password" class="form-control" type="password" autocomplete="on" id="card-password"  />
                                                </div>
                                                <div class="mb-3 col-sm-6"><label class="form-label" for="card-confirm-password">Confirm Password</label><input name="retype_password" class="form-control" type="password" autocomplete="on" id="card-confirm-password" value="" />
                                                </div>
                                                @if ($errors->first('password'))
                                                    @error('password')
                                                        <p class="signup-form__row-notmatch" style="color: red;">{{ $message }}</p>
                                                    @enderror
                                                    @else
                                                        @error('retype_password')
                                                            <p class="signup-form__row-notmatch" style="color: red;">{{ $message }}</p>
                                                        @enderror
                                                @endif
                                            </div>
                                            <!-- <div class="form-check"><input name="checkbox" class="form-check-input" type="checkbox" id="card-register-checkbox" /><label class="form-label" for="card-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label></div> -->
                                            <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button></div>
                                        </form>
                                        <div class="position-relative mt-4">
                                            <hr />
                                            <div class="divider-content-center">or register with</div>
                                        </div>
                                        <div class="row g-2 mt-2">
                                            <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                                            <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
   
    <script src="../../../vendors/popper/popper.min.js"></script>
    <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../../vendors/is/is.min.js"></script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="../../../assets/js/theme.js"></script>
</body>

</html>