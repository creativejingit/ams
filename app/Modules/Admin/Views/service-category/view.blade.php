@extends('Admin::layouts.default')
 	@section('content')
	    <div class="form-horizontal" >
	          <div class="row">
                        
                        <div class="col-md-12" >
                              <img  style="float:right" width="200px" height="50px" src=" <?php echo url(Setting::option('site_logo0')); ?>" />
                        </div>
                    </div>
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>
                                          View  Order Detail
                                    </strong></h3>
                                </div>
                          
                                <div class="panel-body">
                                	<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Customer Name</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        		{!! Form::text('customer_name', $orders->customer_name, [
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
												{!! Form::text('phone_number', $orders->phone_number, [
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
												{!! Form::text('invoice_number', $orders->invoice_number, [
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
                                        		{!! Form::textarea('order_detail', $orders->order_detail, [
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
                                           
                                            <img width="200px" height="200px" src="<?php echo url('/').'/'.$orders->invoice_photo; ?> ">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <input type="hidden" name="u_id" value="{{$u_id}}" />
                                    
                                    
                                </div>
                </div>
 	@endsection()