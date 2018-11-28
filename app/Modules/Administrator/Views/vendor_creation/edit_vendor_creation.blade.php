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
									<a href="{{url('/package/add-package')}}"> Add Vendor Creation Form </a> 
									
								</li>
								<li class="breadcrumb-item active">   @if($id) Edit @else Create  @endif Vendor Creation Form </li>
							</ul>
						</div>
					</div>
				</div>
				
				
				
			    <div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card">
							<div class="header">
								<h2><strong> @if($id) Edit @else Create  @endif  Vendor Creation Form </strong></h2>
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
									{!! Form::model($vendor_creation, ['url' => url('admin/vendor-creation/save', ['id' => $id]),'class'=>'client_creation_form' ,'id' => 'form_advanced_validation','files'=>'true']) !!}

									<div class="form-group form-float">
										<div class="form-line">
											{!! Form::text('vendor_name',null, [
												'class' => 'form-control',
												'id'=>'vendor_name',
												'aria-invalid'=>'true'
											 ]) !!}
											<label class="form-label">VENDOR NAME</label>
										</div>
										
										@if(isset($errors))
											<label id="vendor_name_error" class="error" for="vendor_name">{{ $errors->first('vendor_name') }}</label>
										@endif
										
										<div class="help-info">Vendor Name Input accept string</div>
									</div>

									<div class="form-group form-float">
										<div class="form-line">
											{!! Form::text('currency',null, [
														'class' => 'form-control',
														'id'=>'currency',
														'min' => '0',
														 'aria-invalid'=>'true'
													]) !!}
											<label class="form-label">CURRENCY</label>
										</div>
										
										@if(isset($errors))
											<label id="currency_error" class="error" for="currency">{{ $errors->first('currency') }}</label>
										@endif
										
										<div class="help-info">CURRENCY Input accept string</div>
										
									</div>

									<div class="form-group form-float">
										<div class="form-line">
											{!! Form::text('credit_term',null, [
														'class' => 'form-control',
														'id'=>'credit_term',
														'min' => '0',
														 'aria-invalid'=>'true'
													]) !!}
											<label class="form-label">CREDIT TERM</label>
										</div>
										
										@if(isset($errors))
											<label id="credit_term_error" class="error" for="credit_term">{{ $errors->first('credit_term') }}</label>
										@endif
										
										<div class="help-info">CREDIT TERM Input accept string</div>
										
									</div>


									<div class="form-group form-float">
										<div class="form-line">
											{!! Form::text('sales_tax_rate',null, [
														'class' => 'form-control',
														'id'=>'sales_tax_rate',
														'min' => '0',
														 'aria-invalid'=>'true'
													]) !!}
											<label class="form-label">SALES TAX RATE</label>
										</div>
										
										@if(isset($errors))
											<label id="sales_tax_rate_error" class="error" for="sales_tax_rate">{{ $errors->first('sales_tax_rate') }}</label>
										@endif
										
										<div class="help-info">SALES TAX RATE Input accept string</div>
										
									</div>


									<div class="form-group form-float">
										<div class="form-line">
											{!! Form::text('sales_tax_no',null, [
														'class' => 'form-control',
														'id'=>'sales_tax_no',
														'min' => '0',
														 'aria-invalid'=>'true'
													]) !!}
											<label class="form-label">SALES TAX NO</label>
										</div>
										
										@if(isset($errors))
											<label id="sales_tax_no_error" class="error" for="sales_tax_no">{{ $errors->first('sales_tax_no') }}</label>
										@endif
										
										<div class="help-info">SALES TAX NO Input accept string</div>
										
									</div>
									
									
									<div class="form-group form-float">
										<div class="form-line">
											{!! Form::text('point_of_contact',null, [
														'class' => 'form-control',
														'id'=>'point_of_contact',
														'min' => '0',
														 'aria-invalid'=>'true'
													]) !!}
											<label class="form-label">POINT OF CONTACT</label>
										</div>
										
										@if(isset($errors))
											<label id="point_of_contact_error" class="error" for="point_of_contact">{{ $errors->first('point_of_contact') }}</label>
										@endif
										
										<div class="help-info">POINT OF CONTACT Input accept string</div>
										
									</div>
									

									<div class="form-group form-float">
										<div class="form-line">
											{!! Form::text('wht_rate',null, [
														'class' => 'form-control',
														'id'=>'wht_rate',
														'min' => '0',
														 'aria-invalid'=>'true'
													]) !!}
											<label class="form-label">WTH RATE</label>
										</div>
										
										@if(isset($errors))
											<label id="wht_rate_error" class="error" for="wht_rate">{{ $errors->first('wht_rate') }}</label>
										@endif
										
										<div class="help-info">WTH RATE Input accept string</div>
										
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
											{!! Form::text('ntn',null, [
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
										
										<div class="help-info">NTN Input accept string</div>
										
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
	