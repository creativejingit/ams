@extends('Admin::layouts.default')
    @section('content')
        {!! Form::model($payment, ['url' => url('admin/payment/save', ['id' => $id]),'class'=>'form-horizontal']) !!}

            
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>
                                        @if($id) Create @else Edit @endif Payment
                                    </strong></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Type</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                {!! Form::select('type',[
                                                        'Free'=>'Free',
                                                        'Monthly'=>'Monthly',
														'Yearly'=>'Yearly'
                                                    ], null,[
                                                    'class' => 'form-control',
                                                    'placeholder' => 'Payment Type',
                                                    'id'=>'type',
                                                ]) !!}
                                            </div>
                                            @include('Admin::common.form-error', ['field' => 'type'])
                                        </div>
                                    </div>
									<div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Amount</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                {!! Form::text('amount', null, [
                                                    'class' => 'form-control',
                                                    'placeholder' => 'Enter Amount',
                                                    'id'=>'amount'
                                                ]) !!}
                                            </div>
                                            @include('Admin::common.form-error', ['field' => 'amount'])
                                        </div>
                                    </div>
									
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Discount</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                {!! Form::text('discount', null, [
                                                    'class' => 'form-control',
                                                    'placeholder' => 'Enter Discount',
                                                    'id'=>'discount'
                                                ]) !!}
                                            </div>
                                            @include('Admin::common.form-error', ['field' => 'discount'])
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Status</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                {!! Form::select('status',[
                                                        'Active'=>'Active',
                                                        'Inactive'=>'Inactive'
                                                    ], null,[
                                                    'class' => 'form-control',
                                                    'placeholder' => 'Status',
                                                    'id'=>'status',
                                                ]) !!}
                                            </div>            
                                            @include('Admin::common.form-error', ['field' => 'status'])
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="panel-footer">
                                    <a href="{{ url('admin/user') }}"class="btn btn-default">Cancel</a>                                    
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                </div>
        {!! Form::close() !!}
    @endsection()