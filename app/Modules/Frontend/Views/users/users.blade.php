 

	 @extends('Admin::layouts.default')
	 	@section('content')
            @include('Admin::common.grid', ['tds' => $users->get()])
	 	@endsection()