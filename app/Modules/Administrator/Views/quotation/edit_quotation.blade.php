@extends('layouts.default')
	@section('link')
		<link href="{{ asset ('public/assets/css/form.min.css') }}" rel="stylesheet">
	@endsection()
		
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
											{!! Form::date('date', \Carbon\Carbon::now(), [
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


									            <!-- Masked Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <!-- <strong>Masked</strong> Input</h2> -->
                            <!-- <ul class="header-dropdown m-r--5">
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
                            </ul> -->
                        </div>
                        <div class="body">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <b>Project</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <div class="form-line">
                                              
												{!! Form::text('project',null, [
														 'class' => 'form-control',
														 'id'=>'project',
														 'placeholder'=>"Ex: ABC ",
														 'aria-invalid'=>'true'
													]) !!}
										   </div>
	                                    @if(isset($errors))
											<label id="project" class="error" for="project">{{ $errors->first('project') }}</label>
										@endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Description</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <!-- <i class="material-icons">access_time</i> -->
                                            </span>
                                            <div class="form-line">
													{!! Form::text('description',null, [
														 'class' => 'form-control',
														 'id'=>'description',
														 'placeholder'=>"Ex: ABC ",
														 'aria-invalid'=>'true'
													]) !!}
                                            </div>
	                                    @if(isset($errors))
											<label id="description" class="error" for="description">{{ $errors->first('description') }}</label>
										@endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <b>Estimated Time</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">access_time</i>
                                            </span>
                                            <div class="form-line">
										
													{!! Form::text('estimated_time',null, [
														 'class' => 'form-control estimated_time',
														 'id'=>'estimated_time',
														 'placeholder'=>"Ex: Wednesday 01 January 2018 - 05:14",
														 'aria-invalid'=>'true'
													]) !!}
												
												
												
												
											</div>
	                                    @if(isset($errors))
											<label id="estimated_time" class="error" for="estimated_time">{{ $errors->first('estimated_time') }}</label>
										@endif                               
                                        </div>
                                    </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

				<div>
	            	@if(isset($errors))
					<label id="Item" class="error" for="Item" style="font-size: 12px;display: block;margin-top: 5px;font-weight: normal;color: #F44336;">{{ $errors->first('Item.0') }}</label>
					<label id="Description" class="error" for="Description" style="font-size: 12px;display: block;margin-top: 5px;font-weight: normal;color: #F44336;">{{ $errors->first('Description.0') }}</label>
					<label id="Quantity" class="error" for="Quantity" style="font-size: 12px;display: block;margin-top: 5px;font-weight: normal;color: #F44336;">{{ $errors->first('Quantity.0') }}</label>
					<label id="Total_Cost" class="error" for="Total_Cost" style="font-size: 12px;display: block;margin-top: 5px;font-weight: normal;color: #F44336;">{{ $errors->first('Total_Cost.0') }}</label>
					@endif
	            </div>
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>ITEMS</strong>
                            </h2>
                            <!-- <ul class="header-dropdown m-r--5">
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
                            </ul> -->
                        </div>
							
                        <div class="header">
								<div class="header-dropdown m-r--5">
									<div class="row clearfix demo-icon-container">
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
											<div class="demo-google-material-icon">
												<a href="javascript:void(0)">
													<i data-info='<?php if(isset($quotation_detail)) echo count($quotation_detail); else echo "1"; ?>' class="material-icons add_row">add_box</i>
													<span class="icon-name"></span>
												</a>
											</div>
										</div>
									</div>
								</div>
						</div>
                        <div class="body">
                            <table id="mainTable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Description</th>
                                        <th>Quantity</th>
                                        <th>Total Cost</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
								
									<?php 
									
									if(isset($quotation_detail)) 
									{	$c=1; 
										
										foreach($quotation_detail as $row)
										{
											///	print_r($row); exit; 
								?>
											<tr class="rows row_<?php echo $c; ?>" data-info='<?php echo $c; ?>'>
												<input type="hidden" value="<?php echo $row->quotation_detail_id; ?>" name="quotation_detail_id[]"></td>
												
												<td><input type="text" value="<?php echo $row->title; ?>" name="item_title[]"></td>
												<td><input type="text" value="<?php echo $row->description; ?>"  name="item_description[]"></td>
												<td><input type="text" value="<?php echo $row->quantity; ?>" name="item_quantity[]"></td>
												<td><input type="text" value="<?php echo $row->total_cost; ?>"  name="item_total_cost[]"></td>
												<td><input type="hidden" value="<?php echo $c; ?>" name="item_row_id[]"></td>
												<td>
													<a href="javascript:void(0);" data-quotation_detail_id="<?php echo $row->quotation_detail_id; ?>" class="todo-remove row_<?php echo $c; ?>" data-row="row_<?php echo $c; ?>">
														<i class="material-icons">clear</i>
													</a>
												</td>
											</tr>
								<?php
											$c++;
										}
									}
									else 
									{
								?>
											<tr class="rows row_1" data-info='1'>
												<td>
														
														{!! Form::text('item_title[]',null, [
															 'class' => 'form-control',
															 'id'=>'item_title',
															 'aria-invalid'=>'true'
														]) !!}
												</td>
												<td>
														
														{!! Form::text('item_description[]',null, [
															 'class' => 'form-control',
															 'id'=>'item_description',
															 'aria-invalid'=>'true'
														]) !!}
												</td>
												<td>
														{!! Form::text('item_quantity[]',null, [
															 'class' => 'form-control',
															 'id'=>'item_quantity',
															 'aria-invalid'=>'true'
														]) !!}
												</td>
												<td>
														{!! Form::text('item_total_Cost[]',null, [
															 'class' => 'form-control',
															 'id'=>'item_total_Cost',
															 'aria-invalid'=>'true'
														]) !!}
												</td>
												<td>
														
														{!! Form::text('item_row_id[]',null, [
															 'class' => 'form-control',
															 'type'=>'hidden',
															 'value'=>'1',
															 'aria-invalid'=>'true'
														]) !!}
												</td>
												<td>
													<a href="javascript:void(0);" data-quotation_detail_id="0" class="todo-remove row_1" data-row="row_1">
														<i class="material-icons">clear</i>
													</a>
												</td>
											</tr>
								<?php 
									}
								?>
									
									
									
									
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th class="text-right">
                                            <strong>TOTAL NET COST (PKR)</strong>
                                        </th>
                                        <th></th>
                                        <th></th>
                                        <th>
										
										
											
											{!! Form::text('total_net_cost',null, [
												 'class' => 'form-control',
												 'id'=>'total_net_cost',
												 'placeholder'=>"0.0",
												 'aria-invalid'=>'true'
											]) !!}
												
											
											@if(isset($errors))
												<label id="total_net_cost" class="error" for="total_net_cost" style="font-size: 12px;display: block;margin-top: 5px;font-weight: normal;color: #F44336;">{{ $errors->first('total_net_cost') }}</label>
											@endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="text-right">
                                            <strong>TAX SST @ 13% (PKR)</strong>
                                        </th>
                                        <th></th>
                                        <th></th>
                                        <th>
										
											
											{!! Form::text('tax_sst',null, [
												 'class' => 'form-control',
												 'id'=>'tax_sst',
												 'placeholder'=>"0.0",
												 'aria-invalid'=>'true'
											]) !!}
											
											
											
											@if(isset($errors))
												<label id="tax_sst" class="error" for="tax_sst" style="font-size: 12px;display: block;margin-top: 5px;font-weight: normal;color: #F44336;">{{ $errors->first('tax_sst') }}</label>
											@endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="text-right">
                                            <strong>GROSS TOTAL (PKR)</strong>
                                        </th>
                                        <th></th>
                                        <th></th>
                                        <th>
										
											
											{!! Form::text('gross_total',null, [
												 'class' => 'form-control',
												 'id'=>'gross_total',
												 'placeholder'=>"0.0",
												 'aria-invalid'=>'true'
											]) !!}
											
											
											@if(isset($errors))
												<label id="gross_total" class="error" for="gross_total" style="font-size: 12px;display: block;margin-top: 5px;font-weight: normal;color: #F44336;">{{ $errors->first('gross_total') }}</label>
											@endif
                                        </th>                                        
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
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
			
			<script src="{{ asset ('public/assets/js/form.min.js') }}"></script>

			<script src="{{ asset ('public/assets/js/table.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/dataTables.buttons.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/jszip.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/pdfmake.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/vfs_fonts.js') }}"></script>
			<script src="{{ asset ('public/assets/js/buttons.html5.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/pages/tables/jquery-datatable.js') }}"></script>
			<script src="{{ asset ('public/assets/js/pages/tables/editable-table.js') }}"></script>
			<script>
			
			$(function () {
				 
				//Datetimepicker plugin
				$('.estimated_time').bootstrapMaterialDatePicker({
					format: 'dddd DD MMMM YYYY - HH:mm',
					clearButton: true,
					weekStart: 1
				});

			
			  
				$('.add_row').on('click', function(){
					let html = '';
					let getIncVal = parseInt($(this).attr('data-info'));	
					let inc = parseInt(getIncVal + 1);
					$(this).attr('data-info',inc);
						html += '<tr class="rows row_'+parseInt(inc)+'" data-info="'+parseInt(inc)+'">';
						html += '<td><input type="text" name="item_title[]"></td>';
						html += '<td><input type="text" name="item_description[]"></td>';
						html += '<td><input type="text" name="item_quantity[]"></td>';
						html += '<td><input type="text" name="item_total_cost[]"></td>';
						html += '<td><input type="hidden" value='+parseInt(inc)+' name="item_row_id[]"></td>';
						html += '<td><a href="javascript:void(0);"  data-quotation_detail_id="0" data-row="row_'+parseInt(inc)+'" class="todo-remove row_'+parseInt(inc)+'"><i class="material-icons">clear</i></a></td>';
						html += '</tr>';
					$('#mainTable').append(html);
					$('#mainTable').editableTableWidget();
				});

				$(document).on('click', '.todo-remove', function(){
					let row = $(this).attr('data-row');
					var quotation_detail_id = $(this).attr('data-quotation_detail_id');
					alert(quotation_detail_id); 
					$('.'+row).remove();
					
					
					$.get("<?php echo url('admin/quotationDetail/delete') ;?>/"+quotation_detail_id,function(data){});
					  
  
				});
			
			});		
				
			</script>
	@endsection()