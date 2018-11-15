@extends('layouts.default')
	@section('content')

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
                            <li class="breadcrumb-item active"> Super Administrator</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Exportable Table -->
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
                                                <td style="width: 10%;">
                                                    @foreach($grid['urls'] as $action=>$url)
                                                         
														<a data-href="{{url($url['url'].'/'.$td->super_administrator_id)}}" class=" @if($action=='deleteUrl') delete_row @else   @endif " data-row="trow_{{$id}}"
														
														>
														
														
														
																<button type="button" class="btn btn-info waves-effect">
																	<i class="material-icons">{{ $url['icon'] }}</i>
																</button>
														</a>
													@endforeach
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
            <!-- #END# Exportable Table -->
        </div>
    </section>




		
		
		
		
		
    <?php /*    @include('Admin::common.grid', ['tds' => $payment->get()]) */ ?>
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
	
	
