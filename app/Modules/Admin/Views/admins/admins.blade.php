@extends('Admin::layouts.default')
	@section('content')
	  <div class="row">
                        
                        <div class="col-md-12" >
                              <img  style="float:right" width="200px" height="50px" src=" <?php echo url(Setting::option('site_logo0')); ?>" />
                        </div>
                    </div>
		<div class="panel-heading">
			<h3 class="panel-title">Admin Users</h3>
			<ul class="panel-controls">
				<li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
				<li><a href="{{url('admin/admin_user/add')}}"><span class="fa fa-plus"></span></a></li>
			</ul>
		</div>
        @include('Admin::common.grid', ['tds' => $admins->get()])
	@endsection()