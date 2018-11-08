@extends('Admin::layouts.default')
	@section('content')
		<div class="panel-heading">
			<h3 class="panel-title">Payment</h3>
			<ul class="panel-controls">
				<li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
				<li><a href="{{url('admin/payment/add')}}"><span class="fa fa-plus"></span></a></li>
			</ul>
		</div>
        @include('Admin::common.grid', ['tds' => $payment->get()])
	@endsection()