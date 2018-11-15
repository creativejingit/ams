<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.radixtouch.in/templates/admin/roxa/source/light/pages/examples/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Nov 2018 10:40:57 GMT -->
<head>
    @include('common/head')
    <link href="{{ asset ('public/assets/css/pages/extra_pages.css') }}" rel="stylesheet" />
</head>

<body class="login-page">
    <div class="limiter">
        <div class="container-login100 page-background">
            <div class="wrap-login100">
                <form class="login100-form validate-form">
                    <span class="login100-form-logo">
                        <img alt="" src="{{ asset ('public/assets/images/loading.png') }}">
                    </span>
                    <span class="login100-form-title p-b-34 p-t-27">
                        Log in
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Enter Email">
                        <input class="input100 email" type="text" name="email" placeholder="Email">
                        <i class="material-icons focus-input1001">person</i>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100 password" type="password" name="pass" placeholder="Password">
                        <i class="material-icons focus-input1001">lock</i>
                    </div>
                    <div class="contact100-form-checkbox">
                        {{--<div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value=""> Remember me
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>--}}
                    </div>
                    <div class="alert alert-danger hidden error_message" style="display:none">
                    </div>
                    <div class="container-login100-form-btn">
                        <input type="button" name="button" style="background-color: #fff;" class="login100-form-btn login-btn" value="Login" />
                    </div>
                    <div class="text-center p-t-50">
                        <a class="txt1" href="forgot-password.html">
                            Forgot Password?
                        </a>
                    </div>
                    <div class="text-center p-t-50">
                        <a class="txt1" href="{{ url('register') }}">
                            New Member? Register Here
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Plugins Js -->
    <script src="{{ asset ('public/assets/js/app.min.js') }}"></script>
    <!-- functionality JS -->
    <script type="text/javascript" src="{{ URL::asset('public/js/auth.js') }}"></script>
    <!-- Extra page Js -->
    <script src="{{ asset ('public/assets/js/pages/examples/pages.js') }}"></script>

</body>
</html> 
