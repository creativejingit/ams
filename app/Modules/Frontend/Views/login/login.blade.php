@extends('Frontend::layouts/default')
    @section('banner')
    <!--************************************
            Inner Page Banner Start
    *************************************-->
    <div class="tg-innerpagebanner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="tg-pagetitle">
                        <h1>Login / Register</h1>
                    </div>
                    <ol class="tg-breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="tg-active">Login - Register</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!--************************************
            Inner Page Banner End
    *************************************-->
    @endsection
    @section('content')
    <!--************************************
            Login Register Start
    *************************************-->
    <div class="tg-main-section tg-haslayout">
        <div class="container">
            <div class="row">
                <div id="tg-content" class="tg-content">
                    <div class="tg-themeform tg-formlogin-register">
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            <div class="tg-heading">
                                <h2>Register As</h2>
                                @include('Frontend::common.message')
                            </div>
                            <fieldset>
                                <ul class="tg-tabnav" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#regularuser" data-toggle="tab">
                                            <span class="lnr lnr-user"></span>
                                            <div class="tg-navcontent">
                                                <h3>Regular Single User</h3>
                                                <span>Register As Service Seeker</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#company" data-toggle="tab">
                                            <span class="lnr lnr-briefcase"></span>
                                            <div class="tg-navcontent">
                                                <h3>Company / Professional</h3>
                                                <span>Register As Service Provider</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tg-themetabcontent tab-content">
                                    <div class="tab-pane active fade in" id="regularuser">
                                    {!! Form::open(['url'=>url('/register')]) !!}
                                    <div class="row">
                                        <div class="form-group">
                                        </div>
                                        <div class="form-group">
                                            <div class="tg-registeras">
                                                <span>Already have an account?<a href="#"> Login Now</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            {!! Form::hidden('role', 1) !!}
                                            {!! Form::text('first_name', null, [
                                                'class' => 'form-control',
                                                'placeholder' => 'First Name',
                                                'id'=>'first_name'
                                            ]) !!}
                                            @include('Frontend::common.form-error', ['field' => 'first_name'])
                                        </div>
                                        <div class="form-group">
                                            {!! Form::text('last_name', null, [
                                                'class' => 'form-control',
                                                'placeholder' => 'Last Name',
                                                'id'=>'last_name'
                                            ]) !!}
                                            @include('Frontend::common.form-error', ['field' => 'last_name'])
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <span class="tg-select">
                                            {!! Form::select('gender',[
                                                    'male'=>'Male',
                                                    'female'=>'Female'
                                                ], null,[
                                                'class' => 'form-control',
                                                'placeholder' => 'Gender',
                                                'id'=>'gender',
                                            ]) !!}
                                            </span>
                                            @include('Frontend::common.form-error', ['field' => 'gender'])
                                        </div>
                                        <div class="form-group">
                                            {!! Form::text('phone', null, [
                                                'class' => 'form-control',
                                                'placeholder' => 'Phone',
                                                'id'=>'phone'
                                            ]) !!}
                                            @include('Frontend::common.form-error', ['field' => 'phone'])
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            {!! Form::email('email', null, [
                                                'class' => 'form-control',
                                                'placeholder' => 'E-mail',
                                                'id'=>'email'
                                            ]) !!}
                                            @include('Frontend::common.form-error', ['field' => 'email'])
                                        </div>
                                        <div class="form-group">
                                            {!! Form::password('password', [
                                                'class' => 'form-control',
                                                'placeholder' => 'Password',
                                                'id'=>'password'
                                            ]) !!}
                                            @include('Frontend::common.form-error', ['field' => 'password'])
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            {!! Form::password('password_confirmation', [
                                                'class' => 'form-control',
                                                'placeholder' => 'Retype Password'
                                            ]) !!}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <img src="{{ asset ('/public/frontend/images/placeholder/img-02.png') }}" alt="image description">
                                        </div>
                                        <div class="form-group">
                                            <div class="tg-checkbox">
                                                <input type="checkbox" id="terms">
                                                <label for="terms">I have read the <a href="#">Terms &amp; Conditions</a> and accept them</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="tg-btn" type="submit">Register Now</button>
                                        <ul class="tg-socialicons tg-socialsharewithtext">
                                            <li class="tg-facebook">
                                                <a class="tg-roundicontext" href="javascript:void(0);">
                                                    <em class="tg-usericonholder">
                                                    <i class="fa fa-facebook-f"></i>
                                                    <span>facebook</span>
                                                    </em>
                                                </a>
                                            </li>
                                            <li class="tg-twitter">
                                                <a class="tg-roundicontext" href="javascript:void(0);">
                                                    <em class="tg-usericonholder">
                                                    <i class="fa fa-twitter"></i>
                                                    <span>twitter</span>
                                                    </em>
                                                </a>
                                            </li>
                                            <li class="tg-linkedin">
                                                <a class="tg-roundicontext" href="javascript:void(0);">
                                                    <em class="tg-usericonholder">
                                                    <i class="fa fa-linkedin"></i>
                                                    <span>linkdin</span>
                                                    </em>
                                                </a>
                                            </li>
                                            <li class="tg-googleplus">
                                                <a class="tg-roundicontext" href="javascript:void(0);">
                                                    <em class="tg-usericonholder">
                                                    <i class="fa fa-google-plus"></i>
                                                    <span>googl+</span>
                                                    </em>
                                                </a>
                                            </li>
                                            <li class="tg-tumblr">
                                                <a class="tg-roundicontext" href="javascript:void(0);">
                                                    <em class="tg-usericonholder">
                                                    <i class="fa fa-tumblr"></i>
                                                    <span>tumblr</span>
                                                    </em>
                                                </a>
                                            </li>
                                            <li class="tg-vimeo">
                                                <a class="tg-roundicontext" href="javascript:void(0);">
                                                    <em class="tg-usericonholder">
                                                    <i class="fa fa-vimeo"></i>
                                                    <span>vimeo</span>
                                                    </em>
                                                </a>
                                            </li>
                                        </ul>
                                    {!! Form::close() !!}
                                    </div>
                                    <div class="tab-pane fade in" id="company">
                                    {!! Form::open(['url'=>url('/register')]) !!}
                                        <div class="form-group">
                                            <div class="tg-registeras">
                                                <span>Register As:</span>
                                                <div class="tg-radio">
                                                    <input type="radio" id="business" name="register" checked>
                                                    <label for="business">Business</label>
                                                </div>
                                                <div class="tg-radio">
                                                    <input type="radio" id="professional" name="register">
                                                    <label for="professional">professional</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <span class="tg-select">
                                                <select>
                                                    <option>Business Category</option>
                                                    <option>Business Category</option>
                                                    <option>Business Category</option>
                                                    <option>Business Category</option>
                                                    <option>Business Category</option>
                                                </select>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <span class="tg-select">
                                                <select>
                                                    <option>Business Sub Category</option>
                                                    <option>Business Sub Category</option>
                                                    <option>Business Sub Category</option>
                                                    <option>Business Sub Category</option>
                                                    <option>Business Sub Category</option>
                                                </select>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="text" class="form-control" placeholder="Your Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="text" class="form-control" placeholder="Company Title">
                                        </div>
                                        <div class="form-group tg-inputwithicon">
                                            <input type="text" name="geolocation" class="form-control" placeholder="Geo Location">
                                            <i class="fa fa-crosshairs tg-icon"></i>
                                            <i class="fa fa-angle-down tg-icon"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="retype-password" class="form-control" placeholder="Retype Password">
                                        </div>
                                        <div class="form-group">
                                            <img src="{{ asset ('/public/frontend/images/placeholder/img-02.png') }}" alt="image description">
                                        </div>
                                        <div class="form-group">
                                            <div class="tg-checkbox">
                                                <input type="checkbox" id="conditions">
                                                <label for="conditions">I have read the <a href="#">Terms &amp; Conditions</a> and accept them</label>
                                            </div>
                                        </div>
                                        <button class="tg-btn" type="submit">Register Now</button>
                                        <ul class="tg-socialicons tg-socialsharewithtext">
                                            <li class="tg-facebook">
                                                <a class="tg-roundicontext" href="javascript:void(0);">
                                                    <em class="tg-usericonholder">
                                                    <i class="fa fa-facebook-f"></i>
                                                    <span>facebook</span>
                                                    </em>
                                                </a>
                                            </li>
                                            <li class="tg-twitter">
                                                <a class="tg-roundicontext" href="javascript:void(0);">
                                                    <em class="tg-usericonholder">
                                                    <i class="fa fa-twitter"></i>
                                                    <span>twitter</span>
                                                    </em>
                                                </a>
                                            </li>
                                            <li class="tg-linkedin">
                                                <a class="tg-roundicontext" href="javascript:void(0);">
                                                    <em class="tg-usericonholder">
                                                    <i class="fa fa-linkedin"></i>
                                                    <span>linkdin</span>
                                                    </em>
                                                </a>
                                            </li>
                                            <li class="tg-googleplus">
                                                <a class="tg-roundicontext" href="javascript:void(0);">
                                                    <em class="tg-usericonholder">
                                                    <i class="fa fa-google-plus"></i>
                                                    <span>googl+</span>
                                                    </em>
                                                </a>
                                            </li>
                                            <li class="tg-tumblr">
                                                <a class="tg-roundicontext" href="javascript:void(0);">
                                                    <em class="tg-usericonholder">
                                                    <i class="fa fa-tumblr"></i>
                                                    <span>tumblr</span>
                                                    </em>
                                                </a>
                                            </li>
                                            <li class="tg-vimeo">
                                                <a class="tg-roundicontext" href="javascript:void(0);">
                                                    <em class="tg-usericonholder">
                                                    <i class="fa fa-vimeo"></i>
                                                    <span>vimeo</span>
                                                    </em>
                                                </a>
                                            </li>
                                        </ul>
                                    {!! Form::close() !!}
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="tg-loginarea">
                                <div class="tg-bordertitle">
                                    <h3>Login Now</h3>
                                </div>
                                @if($error = Session::get('error'))
                                <p class="error-text">{{ $error }}</p>
                                @endif
                                {!! Form::open(['url'=>url('/signin')]) !!}
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::email('signin_email', null, ['class' => 'form-control', 'placeholder' => 'E-mail']) !!}
                                        @include('Frontend::common.form-error', ['field' => 'signin_email'])
                                    </div>
                                    <div class="form-group">
                                        {!! Form::password('signin_password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
                                        @include('Frontend::common.form-error', ['field' => 'signin_password'])
                                    </div>
                                    <div class="form-group">
                                        <button class="tg-btn tg-btn-lg" type="submit">Login Now</button>
                                    </div>
                                    <a class="tg-btnforgotpass" href="#">Forgot your password?</a>
                                </fieldset>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
    <!--************************************
                Login Register End
    *************************************-->
    @endsection