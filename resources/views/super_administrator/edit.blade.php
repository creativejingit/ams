@extends('layouts.default')
    @section('content')
        
		<?php /*
		{!! Form::model($payment, ['url' => url('admin/payment/save', ['id' => $id]),'class'=>'form-horizontal']) !!}
*/ ?>
            
		<section class="content">
			<div class="container-fluid">
				<div class="block-header">
					<div class="row">
						<div class="col-xl-6 col-lg-5 col-md-4 col-sm-12">
							<ul class="breadcrumb breadcrumb-style">
								<li class="breadcrumb-item 	bcrumb-1">
									<a href="../../index.html">
										<i class="material-icons">home</i> Home</a>
								</li>
								<li class="breadcrumb-item bcrumb-2">
									<a href="javascript:void(0);">AMS</a>
								</li>
								<li class="breadcrumb-item active">  @if($id) Create @else Edit @endif Super Administrator</li>
							</ul>
						</div>
					</div>
				</div>
		    <!-- Advanced Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong> @if($id) Create @else Edit @endif Super Administrator </strong></h2>
                        </div>
                        <div class="body">
                            <!--<form id="form_advanced_validation" method="POST">-->
							{!! Form::model($super_administrator, ['method'=>'post','url' => url('super-administrator/save', ['id' => $id]),'class'=>'form-horizontal']) !!}

                                <div class="form-group form-float">
                                    <div class="form-line">
										<!--
                                        <input type="text" class="form-control" name="minmaxlength" maxlength="10"
                                            minlength="3" required>
											'placeholder' => 'Enter Amount',
										-->
											{!! Form::text('amount', null, [
                                                    'class' => 'form-control',
                                                    'id'=>'amount',
													"name"=>"name",
													"maxlength"=>"10",
													"minlength"=>"3",
													"required"=>'required'
                                                ]) !!}
                                        <label class="form-label">Name</label>
                                    </div>
									@if(isset($errors) && $errors->has('status'))
										  <div class="help-info">{{ $errors->first('status') }}</div>
									@endif
                                  
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Validation -->
		</div>
	</section>
	
			
			
			
			
			
    <?php /*    {!! Form::close() !!}  */ ?>
    @endsection()
	
	
		
	@section('script')
			
			
			<script src="{{ asset ('public/assets/js/table.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/admin.js') }}"></script>
			<script src="{{ asset ('public/assets/js/dataTables.buttons.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/jszip.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/pdfmake.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/vfs_fonts.js') }}"></script>
			<script src="{{ asset ('public/assets/js/buttons.html5.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/pages/tables/jquery-datatable.js') }}"></script>
			<script src="{{ asset ('public/assets/js/demo.js') }}"></script>
			
	@endsection()
	