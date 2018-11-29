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
                        <img alt="" src="{{ asset('public/assets/images/loading.png') }}">
                    </span>
                    <span class="login100-form-title p-b-34 p-t-27">
                        Registration
                    </span>
                    <div class="row">
                        <div class="col-lg-6 p-t-20">
                            <div class="wrap-input100 validate-input" data-validate="Enter username">
                                <input class="input100 username" type="text" name="username" placeholder="Username">
                                <i class="material-icons focus-input1001">person</i>
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="wrap-input100 validate-input" data-validate="Enter email">
                                <input class="input100 email" type="email" name="email" placeholder="Email">
                                <i class="material-icons focus-input1001">person</i>
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="wrap-input100 validate-input" data-validate="Enter password">
                                <input class="input100 pass" type="password" name="pass" placeholder="Password">
                                <i class="material-icons focus-input1001">person</i>
                            </div>
                        </div>
                        <div class="col-lg-6 p-t-20">
                            <div class="wrap-input100 validate-input" data-validate="Enter password again">
                                <input class="input100 pass2" type="password" name="pass2" placeholder="Confirm password">
                                <i class="material-icons focus-input1001">person</i>
                            </div>
                        </div>

                        <select class="form-control user_package">
                                <option value="">Select Package</option>
                            @foreach($packages as $pk)
                                <option value="{{$pk->package_id}}">{{$pk->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    {{--<div class="contact100-form-checkbox">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value=""> Remember me
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>
                    </div>--}}
                    <div class="alert alert-danger hidden error_message" style="display:none">
                    </div>
                    <br>
                    <div class="container-login100-form-btn">
                        <input type="button" name="button" style="background-color: #fff;" class="login100-form-btn sign-up-btn" value="Sign Up" />
                    </div>
                    {{--<div class="text-center p-t-50">
                        <a class="txt1" href="sign-in.html">
                            You already have a membership?
                        </a>
                    </div>--}}
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


<!-- Mirrored from www.radixtouch.in/templates/admin/roxa/source/light/pages/examples/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Nov 2018 10:40:59 GMT -->
</html>