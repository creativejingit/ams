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
									<a href="{{url('/package/add-package')}}"> Add Company Creation Form </a> 
									
								</li>
								<li class="breadcrumb-item active">   @if($id) Edit @else Create  @endif Company Creation Form </li>
							</ul>
						</div>
					</div>
				</div>
				
				
				
			    <div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card">
							<div class="header">
								<h2><strong> @if($id) Edit @else Create  @endif  Company Creation Form </strong></h2>
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
								
									{!! Form::model($company_creation, ['url' => url('admin/company-creation/save', ['id' => $id]),'class'=>'company_creation_form' ,'id' => 'form_advanced_validation','files'=>'true']) !!}

									<div class="form-group form-float">
										<div class="form-line">
											{!! Form::text('company_name',null, [
												'class' => 'form-control',
												'id'=>'company_name',
												'aria-invalid'=>'true'
											 ]) !!}
											<label class="form-label">COMPANY NAME</label>
										</div>
										
										@if(isset($errors))
											<label id="company_name_error" class="error" for="name">{{ $errors->first('company_name') }}</label>
										@endif
										
										<div class="help-info">Company Name Input accept  string</div>
									</div>
									
									 <div class="form-group form-float">
										<div class="form-line">
											{!! Form::date('date_of_formation',null, [
														'class' => 'form-control',
														'id'=>'date_of_formation',
														'min' => '0',
														 'aria-invalid'=>'true'
													]) !!}
											<label class="form-label">DATE OF FORMATION</label>
										</div>
										
										@if(isset($errors))
											<label id="price-error" class="error" for="date_of_formation">{{ $errors->first('date_of_formation') }}</label>
										@endif
										
										<div class="help-info">DATE OF FORMATION Input accept Date</div>
										
									</div>

									<div class="form-group form-float">
										<div class="form-line">
											{!! Form::text('nature_of_business',null, [
														'class' => 'form-control',
														'id'=>'nature_of_business',
														'min' => '0',
														 'aria-invalid'=>'true'
													]) !!}
											<label class="form-label">NATURE OF BUSINESS</label>
										</div>
										
										@if(isset($errors))
											<label id="nature_of_business_error" class="error" for="company">{{ $errors->first('nature_of_business') }}</label>
										@endif
										
										<div class="help-info">NATURE OF BUSINESS Input accept string</div>
										
									</div>
									
									
									<div class="form-group form-float">
										<div class="form-line">
											{!! Form::number('ntn',null, [
														'class' => 'form-control',
														'id'=>'ntn',
														'min' => '0',
														 'aria-invalid'=>'true'
													]) !!}
											<label class="form-label">NTN</label>
										</div>
										
										@if(isset($errors))
											<label id="ntn-error" class="error" for="ntn">{{ $errors->first('ntn') }}</label>
										@endif
										
										<div class="help-info">NTN Input accept integer</div>
										
									</div>


									<div class="form-group form-float">
										<div class="form-line">
											{!! Form::number('sstn',null, [
														'class' => 'form-control',
														'id'=>'sstn',
														'min' => '0',
														 'aria-invalid'=>'true'
													]) !!}
											<label class="form-label">SSTN</label>
										</div>
										
										@if(isset($errors))
											<label id="sstn-error" class="error" for="sstn">{{ $errors->first('sstn') }}</label>
										@endif
										
										<div class="help-info">SSTN Input accept integer</div>
										
									</div>

									<div class="form-group form-float">
										<div class="form-line">
											{!! Form::number('point_of_contact',null, [
														'class' => 'form-control',
														'id'=>'point_of_contact',
														'min' => '0',
														 'aria-invalid'=>'true'
													]) !!}
											<label class="form-label">POINT OF CONTACT</label>
										</div>
										
										@if(isset($errors))
											<label id="point_of_contact_error" class="error" for="sstn">{{ $errors->first('point_of_contact') }}</label>
										@endif
										
										<div class="help-info">POINT OF CONTACT Input accept integer</div>
										
									</div>


									<div class="form-group form-float">
										<div class="form-line">
											{!! Form::text('address',null, [
														'class' => 'form-control',
														'id'=>'address',
														'min' => '0',
														 'aria-invalid'=>'true'
													]) !!}
											<label class="form-label">ADDRESS</label>
										</div>
										
										@if(isset($errors))
											<label id="address_error" class="error" for="address">{{ $errors->first('address') }}</label>
										@endif
										
										<div class="help-info">ADDRESS Input accept string</div>
										
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
											{!! Form::text('website',null, [
														'class' => 'form-control',
														'id'=>'website',
														'min' => '0',
														 'aria-invalid'=>'true'
													]) !!}
											<label class="form-label">WEBSITE</label>
										</div>
										
										@if(isset($errors))
											<label id="website_error" class="error" for="website">{{ $errors->first('website') }}</label>
										@endif
										
										<div class="help-info">WEBSITE Input accept string</div>
										
									</div>


									<div class="form-group form-float">
										<div class="form-line">
											{!! Form::number('phone_no',null, [
														'class' => 'form-control',
														'id'=>'phone_no',
														'min' => '0',
														 'aria-invalid'=>'true'
													]) !!}
											<label class="form-label">PHONE NO.</label>
										</div>
										
										@if(isset($errors))
											<label id="phone_no_error" class="error" for="phone_no">{{ $errors->first('phone_no') }}</label>
										@endif
										
										<div class="help-info">PHONE NO. Input accept integer</div>
										
									</div>


									<div class="form-group form-float">
										<div class="form-line">
											{!! Form::file('logo',null, [
														'class' => 'form-control',
														'id'=>'logo',
														 'aria-invalid'=>'true'
													]) !!}
											<!-- <label class="form-label">PHONE NO.</label> -->
										</div>
										
										@if(isset($errors))
											<label id="logo_error" class="error" for="image">{{ $errors->first('logo') }}</label>
										@endif
										
										<div class="help-info">Logo Input accept file</div>
										
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
	