@extends('Admin::layouts.default')
	@section('content')
	  <div class="row">
                        
                        <div class="col-md-12" >
                              <img  style="float:right" width="200px" height="50px" src=" <?php echo url(Setting::option('site_logo0')); ?>" />
                        </div>
                    </div>
		<div class="panel-heading">
			<h3 class="panel-title">Orders</h3>
			<ul class="panel-controls">
				<li><a href="" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
				<li><a href="{{url('admin/service/category/add')}}"><span class="fa fa-plus"></span></a></li>
			</ul>
		</div>
    <?php    
	   //@include('Admin::common.grid', ['tds' => $orders->get()])
	   
	  
		?>
		
		<div class="panel-body">
                                    <table class="table datatable table-actions">
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
                                            @foreach($orders->get() as $row)
                                            <tr id="trow_{{$id}}">
                                                <td>{{$row->id}}</td>
                                                <td>{{$row->customer_name}}</td>
												<td>{{$row->phone_number}}</td>
											    <td>{{$row->invoice_number}}</td>
											   
											   
												<td>
													<a href="<?php echo url('/').'/'.$row->invoice_photo; ?>" target="_blank">
													    <img width="30px" height="50px" src="<?php echo url('/').'/'.$row->invoice_photo; ?>" />
													</a>
												</td>
											   
                                                <td style="width: 15%;">
                                                    @foreach($grid['urls'] as $action=>$url)
                                                        <a href="{{url($url['url'].'/'.$row->id)}}" class="btn @if($action=='deleteUrl') btn-danger delete_row @else btn-default  @endif btn-rounded btn-sm" data-row="trow_{{$id}}"><span class="{{$url['icon']}}"></span></a>
                                                    @endforeach
                                                </td>
                                            </tr>
                                            @php($id++)
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	@endsection()