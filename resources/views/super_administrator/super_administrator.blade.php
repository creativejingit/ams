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
											<i class="material-icons">home</i> Home</a>
									</li>
									<li class="breadcrumb-item bcrumb-2">
										<a href="javascript:void(0);">AMS</a>
										
									</li>
									<li class="breadcrumb-item active">
										<a href="{{url('/super-administrator')}}"> Super Administrator </a> 
										
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
								<h2><strong>Super Administrator</strong></h2>
								<div class="header-dropdown m-r--5">
									<div class="row clearfix demo-icon-container">
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
											<div class="demo-google-material-icon">
												<a href="{{url('super-administrator/add')}}">
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
												@foreach($super_administrator as $td)
												<tr id="trow_{{$id}}">
													@foreach($grid['columns'] as $key=>$value)
													<td>{{$td->$key}}</td>
													@endforeach
													<td class="" style="width: 12%;">
															 
															<a href="{{url('super-administrator/edit/'.$td->super_administrator_id)}}"  data-row="trow_{{$id}}">
															
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
			
			<script src="{{ asset ('public/assets/js/admin.js') }}"></script>
			<script src="{{ asset ('public/assets/js/table.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/dataTables.buttons.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/jszip.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/pdfmake.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/vfs_fonts.js') }}"></script>
			<script src="{{ asset ('public/assets/js/buttons.html5.min.js') }}"></script>
			<script src="{{ asset ('public/assets/js/pages/tables/jquery-datatable.js') }}"></script>
			<script src="{{ asset ('public/assets/js/pages/ui/dialogs.js') }}"></script>
			<script src="{{ asset ('public/assets/js/demo.js') }}"></script>
			
			
	@endsection
	
	
