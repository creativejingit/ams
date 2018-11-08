@extends('Admin::layouts.default')
    @section('content')
        {!! Form::model($user, ['url' => url('admin/user/save', ['id' => $id]),'class'=>'form-horizontal']) !!}

            
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>
                                        @if($id) Create @else Edit @endif User
                                    </strong></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">User Type</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                {!! Form::select('role',[
                                                        '1'=>'Service Seeker',
                                                        '2'=>'Service Provider'
                                                    ], null,[
                                                    'class' => 'form-control',
                                                    'placeholder' => 'User Type',
                                                    'id'=>'role',
                                                ]) !!}
                                            </div>
                                            @include('Admin::common.form-error', ['field' => 'role'])
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">First Name</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                {!! Form::text('first_name', null, [
                                                    'class' => 'form-control',
                                                    'placeholder' => 'Enter First Name',
                                                    'id'=>'first_name'
                                                ]) !!}
                                            </div>
                                            @include('Admin::common.form-error', ['field' => 'first_name'])
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Last Name</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                {!! Form::text('last_name', null, [
                                                    'class' => 'form-control',
                                                    'placeholder' => 'Enter Last Name',
                                                    'id'=>'last_name'
                                                ]) !!}
                                            </div>
                                            @include('Admin::common.form-error', ['field' => 'last_name'])
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Gender</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                {!! Form::select('gender',[
                                                        'male'=>'Male',
                                                        'female'=>'Female'
                                                    ], null,[
                                                    'class' => 'form-control',
                                                    'placeholder' => 'Gender',
                                                    'id'=>'gender',
                                                ]) !!}
                                            </div>            
                                            @include('Admin::common.form-error', ['field' => 'gender'])
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Phone</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                                {!! Form::text('phone', null, [
                                                    'class' => 'form-control',
                                                    'placeholder' => 'Phone',
                                                    'id'=>'phone'
                                                ]) !!}
                                            </div>
                                            @include('Admin::common.form-error', ['field' => 'phone'])
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">E-mail</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
                                                {!! Form::email('email', null, [
                                                    'class' => 'form-control',
                                                    'placeholder' => 'Enter E-mail',
                                                    
                                                    'id'=>'email'
                                                ]) !!}
                                            </div>
                                            @include('Admin::common.form-error', ['field' => 'email'])
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Password</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                {!! Form::password('password', [
                                                    'class' => 'form-control',
                                                    'placeholder' => 'Enter Password',
                                                    'id'=>'password'
                                                ]) !!}
                                            </div>            
                                            @include('Admin::common.form-error', ['field' => 'password'])
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Confirm Password</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                {!! Form::password('password_confirmation', [
                                                    'class' => 'form-control',
                                                    'placeholder' => 'Confirm Password'
                                                ]) !!}
                                            </div>            
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <a href="{{ url('admin/user') }}"class="btn btn-default">Cancel</a>                                    
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                </div>
        {!! Form::close() !!}
    @endsection()