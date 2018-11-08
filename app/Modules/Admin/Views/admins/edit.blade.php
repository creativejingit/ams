@extends('Admin::layouts.default')
 	@section('content')
		{!! Form::model($admin, ['url' => url('admin/admin_user/save', ['id' => $id]),'class'=>'form-horizontal']) !!}
  <div class="row">
                        
                        <div class="col-md-12" >
                              <img  style="float:right" width="200px" height="50px" src=" <?php echo url(Setting::option('site_logo0')); ?>" />
                        </div>
                    </div>
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>
                                    	@if($id) Create @else Edit @endif Admin User
                                    </strong></h3>
                                </div>
                                <div class="panel-body">
                                  
                                    
                                  
                                	<div class="form-group">
                                	    
                                        <label class="col-md-3 col-xs-12 control-label">Name</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        		{!! Form::text('name', $admin_user->name, [
                                        			'class' => 'form-control',
                                        			'placeholder' => 'Enter Name',
                                        			'id'=>'name'
                                        		]) !!}
                                            </div>
                                       	 	@include('Admin::common.form-error', ['field' => 'name'])
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">E-mail</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-email"></span></span>
                                        		{!! Form::email('email', $admin_user->email, [
                                        			'class' => 'form-control',
                                        			'placeholder' => 'Enter E-mail',
                                        			
                                        			'id'=>'email'
                                        		]) !!}
                                            </div>
                                       	 	@include('Admin::common.form-error', ['field' => 'email'])
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Type</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
			                                    <select name="type" class="form-control" >
													<option >Select User Type</option>
													<option <?php if($admin_user->type=='Admin') echo "selected"; ?> value="Admin" >Admin</option>
													<option  <?php if($admin_user->type=='Painting') echo "selected"; ?> value="Painting" >Painting</option>
													<option  <?php if($admin_user->type=='Photographic') echo "selected"; ?> value="Photographic" >Photographic</option>
													<option  <?php if($admin_user->type=='Paint protection') echo "selected"; ?>  value="Paint protection" >Paint protection</option>
												</select>
                                            </div>            
			                                @include('Admin::common.form-error', ['field' => 'type'])
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