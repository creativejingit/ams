<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>{{Setting::option('admin_title')}}</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo url('/').'/public/admin/css/theme-default.css' ?>"/>
        <link rel="stylesheet" type="text/css" id="theme" href="{{ asset ('/public/admin/css/style.css') }}"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        
        <div class="login-container lightmode">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Log In</strong> to your account</div>
                    @if($error = Session::get('error'))
                        <p class="error-text">{{ $error }}</p>
                    @endif
                    {!! Form::open(['url'=>url('admin/signin'),"class"=>"form-horizontal"]) !!}
                    <div class="form-group">
                        <div class="col-md-12">
                            {!! Form::email('email', 'zeeshan@zpanel.com', ['class' => 'form-control', 'placeholder' => 'E-mail']) !!}
                            @include('Admin::common.form-error', ['field' => 'email'])
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            {!! Form::text('password',"admin123", ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                            @include('Admin::common.form-error', ['field' => 'password'])
                        </div>
                    </div>
                    <div class="form-group">
						<!--
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>
						-->
                        <div class="col-md-12">
                            <button class="btn btn-info btn-block" type="submit">Log In</button>
                        </div>
                    </div>
					<!--
                    <div class="login-or">OR</div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <button class="btn btn-info btn-block btn-twitter"><span class="fa fa-twitter"></span> Twitter</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-info btn-block btn-facebook"><span class="fa fa-facebook"></span> Facebook</button>
                        </div>
                        <div class="col-md-4">                            
                            <button class="btn btn-info btn-block btn-google"><span class="fa fa-google-plus"></span> Google</button>
                        </div>
                    </div>
                    <div class="login-subtitle">
                        Don't have an account yet? <a href="#">Create an account</a>
                    </div>
					-->
                    {!! Form::close() !!}
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; {{date('Y')}} 
                    </div>
					<!--
                    <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>
                    </div>
					-->
                </div>
            </div>
            
        </div>
        
    </body>
</html>






