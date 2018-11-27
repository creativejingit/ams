@extends('layouts.default')
    @section('content')            
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
									<a href="{{url('/groups/add-group')}}"> Add Group </a> 
									
								</li>
								<li class="breadcrumb-item active">   @if($id) Edit @else Create  @endif Group </li>
							</ul>
						</div>
					</div>
				</div>
				
				
				
			    <div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card">
							<div class="header">
								<h2><strong> @if($id) Edit @else Create  @endif  Group </strong></h2>
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
								
									{!! Form::model($group, ['url' => url('groups/save', ['id' => $id]),'class'=>'groups_creation' ,'id' => 'form_advanced_validation']) !!}

									<div class="form-group form-float">
										<div class="form-line">
											{!! Form::text('name',null, [
												'class' => 'form-control',
												'id'=>'name',
												'aria-invalid'=>'true'
											 ]) !!}
											<label class="form-label">Name </label>
										</div>
										
										@if(isset($errors))
											<label id="name-error" class="error" for="name">{{ $errors->first('name') }}</label>
										@endif
										
										<div class="help-info">Name Input accept string</div>
									</div>
									
									 <div class="form-group form-float">
										<div class="form-line">
											{!! Form::text('description',null, [
														'class' => 'form-control',
														'id'=>'price',
														'min' => '0',
														 'aria-invalid'=>'true'
													]) !!}
											<label class="form-label">Description</label>
										</div>
										
										@if(isset($errors))
											<label id="description-error" class="error" for="description">{{ $errors->first('description') }}</label>
										@endif
										
										<div class="help-info">Description Input accept string</div>
										
									</div>
									<div class="form-group form-float">
										<select class="form-control" name="organization">
					                        <option value="">Select Organization</option>
					                        @foreach($organization as $key => $org)
					                        	<option value="{{$org->organization_id}}" 
					                        		@if(isset($id))
					                        		@if ($org->organization_id == $group->organization_id)
					                        			selected="selected"
					                        		@endif
					                        		@endif
					                        	>{{$org->name}}</option>
					                        @endforeach
					                    </select>

					                    @if(isset($errors))
											<label id="package-type-error" class="error" for="company">{{ $errors->first('name') }}</label>
										@endif
										
										<div class="help-info">Select Organization</div>
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
	