 

	 @extends('Admin::layouts.default')
	 	@section('content')
            @include('Admin::common.grid', ['tds' => $admins->get()])
	 	@endsection()