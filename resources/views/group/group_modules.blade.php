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
										<a href="{{url('groups/view-group')}}"> Groups </a> 
										
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
			
<?php 

		print_r($_REQUEST['modules']);
		print_r($_REQUEST['methods']);
?>

				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card">
							<div class="header">
								<h2><strong>Groups</strong></h2>
								<div class="header-dropdown m-r--5">
									<div class="row clearfix demo-icon-container">
										<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
											<div class="demo-google-material-icon">
												<a href="{{url('groups/add-group')}}">
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
										<form action="#" method="get" />

										
									<table id="tableExport" class="display table  table-bordered table-striped table-hover table-checkable order-column m-t-20 width-per-500">
										<thead>
											<tr>
													<th></th>
													<th>Modules</th>
													<th>Methods</th>
													<th></th>
											</tr>
										</thead>

										<tbody>

											@php($id = 1)
												@foreach($module as $td)
<tr id="trow_{{$id}}">
	 
	<td><div class="col-sm-2 col-lg-3">
        <p>
            <label>
                <input name="modules[]" value="{{$td->module_id}}" onChange="checkModules($(this),{{$td->module_id}},{{$id}})" data-id="{{$td->module_id}}" data-row-id="{{$id}}" type="checkbox"/>
                <span></span>
            </label>
        </p>
    </div></td>
	<td>{{$td->name}}</td>
	<td style="width:300px;">
		
		<select name="methods[]" class="multisel_selected_{{$id}} form-group col-10" style="width:300px;"
		 data-row-id="{{$id}}" multiple>
			<?php
			foreach($method as $row)
			{
				if($row->module_id == $td->module_id)
				{
			?>

					<option data-row-id="{{$id}}" class="multisel_{{$id}}"
					 value='{{$row->method_id}}'>{{$row->name}}
					</option>

			<?php
				}
			?>

			<?php
			}	
			 ?>
		</select>
		
	</td>
	<td>
		<!--
		<input type="submit" name="Save" value="Save" onClick="saveModules($(this),{{$td->module_id}},{{$id}})" class="multi_modules_{{$id}}" /></td>
-->
		
</tr>
												@php($id++)
												@endforeach

										</tbody>
										<tfoot>
											<tr>
												<th></th>
												<th>Modules</th>
												<th>Methods</th>							
											</tr>
										</tfoot>
									</table>


	<input type="submit" value="save" />
												</form>									
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
    		<script type="text/javascript" src="{{ URL::asset('public/js/group.js') }}"></script>
   
			
	@endsection
	
	
