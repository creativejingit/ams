@extends('layouts.default')

	@section('content')

		<section class="content">
			<div class="container-fluid">			
				<div class="block-header">
					<div class="row">
						<div class="col-xl-6 col-lg-5 col-md-4 col-sm-12">
							<ul class="breadcrumb breadcrumb-style">
								<li class="breadcrumb-item 	bcrumb-1">
										<a href="javascript:void(0);">
											<i class="material-icons">home</i> Home
										</a>
									</li>
									<li class="breadcrumb-item bcrumb-2">
										<a href="javascript:void(0);">AMS</a>
										
									</li>
									<li class="breadcrumb-item active">
										<a href="{{url('package/index')}}"> Packages </a> 
										
									</li>
							</ul>
						</div>
					</div>
				</div>
				
									
				@if( $message = session('success') )
					<div class="alert bg-green alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
						{!! $message !!}
					</div>
				@endif

				@if( $message = session('error') )
					<div class="alert alert-danger">
						<strong>Oh snap!</strong>
						 {!! $message !!}
					</div>
				@endif
			


				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card">
							<div class="header">
								<h2><strong>Packages</strong></h2>
								<div class="header-dropdown m-r--5">
									<div class="row clearfix demo-icon-container">
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
											<div class="demo-google-material-icon">
												<a href="{{url('package/add')}}">
													<i class="material-icons">add_box</i>
													<span class="icon-name"></span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="body">
								<div class="table-responsive">
																			
									<table id="tableExport" class="display table  table-bordered table-striped table-hover table-checkable order-column m-t-20 width-per-500">
										<thead>
											<tr>
											   
												@foreach($grid['columns'] as $th)
													<th>{{$th['label']}}</th>
												@endforeach
												<th width="100">ACTIONS</th>
											</tr>
										</thead>
										
										<tbody>

												@php($id = 1)
												@foreach($package	 as $td)
												<tr id="trow_{{$id}}">
													@foreach($grid['columns'] as $key=>$value)
													@if($key=='module_selection')
														<td style="width:300px;">

															

															<select name="modules" onChange="savePackageModule($(this),{{$id}})" class="multisel form-group col-10" style="width:300px;"  data-package-id="{{$id}}" data-package_id="{{$id}}" multiple>
																<?php 
																		
																		/*foreach($module as $row ) 
																		{
																?>
																			<?php 

																			//echo $td->package_id; 
																			//echo $row->module_id;
																			//print_r($package_module); 

																			// $package_module[$td->package_id][$row->module_id];


																			  ?>


																			<option

																			<?php
																				$status = 0;
																				if(isset($package_module[$td->package_id][$row->module_id]))

																					if($package_module[$td->package_id][$row->module_id]==1)
																					{
																								echo 'selected ';
																								$status = 1; 
																					}

																			?>
																			 value='{{$td->package_id.','.$row->module_id.','.$status}}'>{{$row->name}}


																			</option>
																		
																<?php 
																		}
																		*/
																?>

																<?php 
																		
																	foreach($module as $row ) 
																		{
																?>
																			<?php 

																			//echo $td->package_id; 
																			//echo $row->module_id;
																			//print_r($package_module); 

																			// $package_module[$td->package_id][$row->module_id];


																			  ?>


																			<option

																			<?php
																				$status = 0;
																				if(isset($package_module[$td->package_id][$row->module_id]))

																					if($package_module[$td->package_id][$row->module_id]==1)
																					{
																								echo 'selected ';
																								$status = 1; 
																					}

																			?>
																			 value='{{$row->module_id}}'>{{$row->name}}

																			<?php /*  value='{{$td->package_id.','.$row->module_id.','.$status}}'>{{$row->name}} */ ?>


																			</option>
																		
																<?php 
																		}
																?>

                                    						</select>
                                    					</td>
													@else 
														<td>{{$td->$key}}</td>
													@endif
													@endforeach
													<td class="" style="width: 12%;">
															 
															<a href="{{url('package/edit/'.$td->package_id)}}"  data-row="trow_{{$id}}">
															
																	<button type="button" class="btn btn-info waves-effect">
																		<i class="material-icons">edit</i>
																	</button>
																	
															</a>
														
															<button class="btn btn-info waves-effect js-sweetalert"
																
																		data-id="{{$td->super_administrator_id}}" 
																		data-url="{{url('super-administrator/delete')}}"  
																		data-row="trow_{{$id}}"
																		data-type="ajax-loader"
																> 
																<i class="material-icons">delete</i>
															</button>


																	
													</td>

												</tr>
												@php($id++)
												@endforeach
												
										</tbody>
										<tfoot>
											<tr>
												@foreach($grid['columns'] as $th)
													<th>{{$th['label']}}</th>
												@endforeach
												<th width="100">ACTIONS</th>
												
											</tr>
										</tfoot>
									</table>
									
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>




		
		
	
	@endsection

	@section('script')
			
			<script src="{{ asset ('public/assets/js/table.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/dataTables.buttons.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/jszip.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/pdfmake.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/vfs_fonts.js') }}"></script>
			<script src="{{ asset ('public/assets/js/buttons.html5.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/pages/tables/jquery-datatable.js') }}"></script>
			<script src="{{ asset ('public/assets/js/pages/ui/dialogs.js') }}"></script>
			<script src="{{ asset ('public/assets/js/pages/forms/advanced-form-elements.js') }}"></script>
			
			<!-- functionality JS -->
    		<script type="text/javascript" src="{{ URL::asset('public/js/package.js') }}"></script>
   
			
	@endsection
	
	
