@extends('Admin::layouts.default')
 	@section('content')
		{!! Form::model($orders, ['url' => url('admin/service/category/save', ['id' => $id]),'class'=>'form-horizontal']) !!}
                                     <div class="row">
                        
                        <div class="col-md-12" >
                              <img  style="float:right" width="200px" height="50px" src=" <?php echo url(Setting::option('site_logo0')); ?>" />
                        </div>
                    </div>
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>
                                    	@if($id) Edit @else Create @endif  Order
                                    </strong></h3>
                                </div>
                                <div class="panel-body">
                                	<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Customer Name</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        		{!! Form::text('customer_name', null, [
                                        			'class' => 'form-control',
                                        			'placeholder' => 'Enter Customer Name',
                                        			'id'=>'customer_name'
                                        		]) !!}
                                            </div>
                                       	 	@include('Admin::common.form-error', ['field' => 'customer_name'])
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Phone Number</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-"></span></span>
												{!! Form::text('phone_number', null, [
                                        			'class' => 'form-control',
                                        			'placeholder' => 'Enter Phone Number'
                                        		]) !!}
                                            </div>
											@include('Admin::common.form-error', ['field' => 'phone_number'])
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Invoice Number</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-"></span></span>
												{!! Form::text('invoice_number', null, [
                                        			'class' => 'form-control',
                                        			'placeholder' => 'Enter Invoice Number'
                                        		]) !!}
                                            </div>
											@include('Admin::common.form-error', ['field' => 'invoice_number'])
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Order Detail</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-"></span></span>
                                        		{!! Form::textarea('order_detail', null, [
                                        			'class' => 'form-control',
                                        			'placeholder' => 'Enter Order Detail'
                                        		]) !!}
                                            </div>
											@include('Admin::common.form-error', ['field' => 'order_detail'])
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Invoice Photo</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                            {!! Helper::dropZone('invoice_photo', [
                                                'acceptedFiles' => 'image/*',
                                                'url' => url('admin/upload/image')
                                            ],$orders->invoice_photo,'image',true) !!}
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <input type="hidden" name="u_id" value="{{$u_id}}" />
                                    
                                    
                                </div>
                                <div class="panel-footer">
                                    <a href="{{ url('admin/service/category') }}"class="btn btn-default">Cancel</a>                                    
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                </div>
		{!! Form::close() !!}
 	@endsection()