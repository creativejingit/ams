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
									<a href="{{url('/package/add-package')}}"> Add Foreign Exchange Rate </a> 
									
								</li>
								<li class="breadcrumb-item active">   @if($id) Edit @else Create  @endif Foreign Exchange Rate </li>
							</ul>
						</div>
					</div>
				</div>
				
				
				
			    <div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card">
							<div class="header">
								<h2><strong> @if($id) Edit @else Create  @endif  Foreign Exchange Rate </strong></h2>
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
									{!! Form::model($foreign_exchange_rate, ['url' => url('admin/foreign-exchange-rate/save', ['id' => $id]),'class'=>'foreign_exchange_rate' ,'id' => 'form_advanced_validation']) !!}

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
											{!! Form::text('usd_conversion_rate',null, [
														'class' => 'form-control',
														'id'=>'usd_conversion_rate',
														'min' => '0',
														 'aria-invalid'=>'true'
													]) !!}
											<label class="form-label">USD CONVERSION RATE</label>
										</div>
										
										@if(isset($errors))
											<label id="usd_conversion_rate" class="error" for="usd_conversion_rate">{{ $errors->first('usd_conversion_rate') }}</label>
										@endif
										
										<div class="help-info">USD CONVERSION RATE Input accept string</div>
										
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
	