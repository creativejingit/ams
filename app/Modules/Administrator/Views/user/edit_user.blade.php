@extends('layouts.default')
    @section('content')
        
		<?php /*
		{!! Form::model($payment, ['url' => url('admin/payment/save', ['id' => $id]),'class'=>'form-horizontal']) !!}
*/ ?>
            
		<section class="content">
			<div class="container-fluid">
				<div class="block-header">
					<div class="row">
						<div class="col-xl-12 col-lg-5 col-md-4 col-sm-12">
							<ul class="breadcrumb breadcrumb-style">
								<li class="breadcrumb-item 	bcrumb-1">
									<a href="javascript:void(0);">
										<i class="material-icons">home</i> Home</a>
								</li>
								<li class="breadcrumb-item bcrumb-2">
									<a href="javascript:void(0);">AMS</a>
									
								</li>
								<li class="breadcrumb-item bcrumb-3">
									<a href="{{url('/package/add-package')}}"> Add User </a> 
									
								</li>
								<li class="breadcrumb-item active">   @if($id) Edit @else Create  @endif User </li>
							</ul>
						</div>
					</div>
				</div>
				
				
				
			    <div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card">
							<div class="header">
								<h2><strong> @if($id) Edit @else Create  @endif  User </strong></h2>
								<ul class="header-dropdown m-r--5">
									<li class="dropdown">
										<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
											aria-haspopup="true" aria-expanded="false">
											<i class="material-icons">more_vert</i>
										</a>
										<ul class="dropdown-menu pull-right">
											<li>
												<a href="javascript:void(0);">Action</a>
											</li>
											<li>
												<a href="javascript:void(0);">Another action</a>
											</li>
											<li>
												<a href="javascript:void(0);">Something else here</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="body">

									{!! Form::model($user, ['url' => url('admin/user/save', ['id' => $id]),'class'=>'user' ,'id' => 'form_advanced_validation']) !!}

									<div class="form-group form-float">
										<div class="form-line">
											<select class="form-control" name="organization_id">
					                                <option value="">Select Organization</option>
					                            @foreach($organization_all as $org)
					                                <option value="{{$org->organization_id}}">{{$org->name}}</option>
					                            @endforeach
					                        </select>
					                    </div>
					                </div>


					                <div class="form-group form-float">
										<div class="form-line">
					                        <select class="form-control" name="group_id">
					                                <option value="">Select Group</option>
					                            @foreach($groups as $group)
					                                <option value="{{$group->group_id}}">{{$group->name}}</option>
					                            @endforeach
					                        </select>
					                    </div>
					                </div>


					                <div class="form-group form-float">
										<div class="form-line">
											{!! Form::text('name',null, [
												'class' => 'form-control',
												'id'=>'name',
												'aria-invalid'=>'true'
											 ]) !!}
											<label class="form-label">NAME</label>
										</div>
										
										@if(isset($errors))
											<label id="name_error" class="error" for="name">{{ $errors->first('name') }}</label>
										@endif
										
										<div class="help-info">Name Input accept string</div>
									</div>


									<div class="form-group form-float">
										<div class="form-line">
											{!! Form::email('email',null, [
														'class' => 'form-control',
														'id'=>'email',
														'min' => '0',
														 'aria-invalid'=>'true'
													]) !!}
											<label class="form-label">EMAIL</label>
										</div>
										
										@if(isset($errors))
											<label id="email_error" class="error" for="email">{{ $errors->first('email') }}</label>
										@endif
										
										<div class="help-info">EMAIL Input accept email</div>
									</div>


									<div class="form-group form-float">
										<div class="form-line">
											{!! Form::password('password', [
													'class' => 'form-control',
													'id'=>'password',
													 'aria-invalid'=>'true'
											]) !!}    

											<label class="form-label">Password</label>
										</div>
										
										@if(isset($errors))
											<label id="name-error" class="error" for="password">{{ $errors->first('password') }}</label>
										@endif
										
										<div class="help-info">password Input accept string</div>
									</div>

									<button class="btn btn-primary waves-effect" type="submit">Save</button>
								{!! Form::close() !!}
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	
			
			
			
			
			
    
    @endsection()
	
	
		
	@section('script')
			
			
			<script src="{{ asset ('public/assets/js/table.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/dataTables.buttons.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/jszip.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/pdfmake.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/vfs_fonts.js') }}"></script>
			<script src="{{ asset ('public/assets/js/buttons.html5.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/pages/tables/jquery-datatable.js') }}"></script>
			
	@endsection()
	