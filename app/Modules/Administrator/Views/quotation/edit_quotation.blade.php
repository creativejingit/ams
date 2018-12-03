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
									<a href="{{url('/package/add-package')}}"> Add Quotation </a> 
									
								</li>
								<li class="breadcrumb-item active">   @if($id) Edit @else Create  @endif Quotation </li>
							</ul>
						</div>
					</div>
				</div>
				
				
				
			    <div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card">
							<div class="header">
								<h2><strong> @if($id) Edit @else Create  @endif  Quotation </strong></h2>
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
									{!! Form::model($quotation, ['url' => url('admin/quotation/save', ['id' => $id]),'class'=>'quotation' ,'id' => 'form_advanced_validation']) !!}

									<div class="form-group form-float">
										<div class="form-line">
											{!! Form::date('date',null, [
														'class' => 'form-control',
														'id'=>'date',
														'min' => '0',
														 'aria-invalid'=>'true'
													]) !!}
											<label class="form-label">DATE</label>
										</div>
										
										@if(isset($errors))
											<label id="date-error" class="error" for="date">{{ $errors->first('date') }}</label>
										@endif
										
										<div class="help-info">DATE Input accept Date</div>
										
									</div>

									<div class="form-group form-float">
										<div class="form-line">
											{!! Form::text('reference_no',null, [
														'class' => 'form-control',
														'id'=>'reference_no',
														'min' => '0',
														 'aria-invalid'=>'true'
													]) !!}
											<label class="form-label">REFERENCE NUMBER</label>
										</div>
										
										@if(isset($errors))
											<label id="reference_no" class="error" for="reference_no">{{ $errors->first('reference_no') }}</label>
										@endif
										
										<div class="help-info">REFERENCE NUMBER Input accept string</div>
										
									</div>


									<div class="form-group form-float">
										<div class="form-line">
											{!! Form::text('to',null, [
														'class' => 'form-control',
														'id'=>'to',
														'min' => '0',
														 'aria-invalid'=>'true'
													]) !!}
											<label class="form-label">TO</label>
										</div>
										
										@if(isset($errors))
											<label id="to" class="error" for="to">{{ $errors->first('to') }}</label>
										@endif
										
										<div class="help-info">TO Input accept string</div>
										
									</div>


									<div class="form-group form-float">
										<div class="form-line">
											{!! Form::text('client',null, [
														'class' => 'form-control',
														'id'=>'client',
														'min' => '0',
														 'aria-invalid'=>'true'
													]) !!}
											<label class="form-label">CLIENT</label>
										</div>
										
										@if(isset($errors))
											<label id="client" class="error" for="client">{{ $errors->first('client') }}</label>
										@endif
										
										<div class="help-info">CLIENT Input accept string</div>
										
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
											<label id="address" class="error" for="address">{{ $errors->first('address') }}</label>
										@endif
										
										<div class="help-info">ADDRESS Input accept string</div>
										
									</div>

									<div class="form-group form-float">
										<div class="form-line">
											{!! Form::text('contact_no',null, [
														'class' => 'form-control',
														'id'=>'contact_no',
														'min' => '0',
														 'aria-invalid'=>'true'
													]) !!}
											<label class="form-label">CONTACT NO</label>
										</div>
										
										@if(isset($errors))
											<label id="contact_no" class="error" for="contact_no">{{ $errors->first('contact_no') }}</label>
										@endif
										
										<div class="help-info">CONTACT NO Input accept string</div>
										
									</div>


									<div class="form-group form-float">
										<div class="form-line">
											{!! Form::text('dollar_rate',null, [
														'class' => 'form-control',
														'id'=>'dollar_rate',
														'min' => '0',
														 'aria-invalid'=>'true'
													]) !!}
											<label class="form-label">DOLLAR RATE</label>
										</div>
										
										@if(isset($errors))
											<label id="dollar_rate" class="error" for="dollar_rate">{{ $errors->first('dollar_rate') }}</label>
										@endif
										
										<div class="help-info">DOLLAR RATE Input accept string</div>
										
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
	