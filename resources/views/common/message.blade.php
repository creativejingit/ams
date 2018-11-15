@if( $message = session('success') )
    <div class="alert alert-success">
	    <strong>Well done!</strong> You successfully read this important alert message.
	</div>
@endif

@if( $message = session('error') )
    <div class="alert alert-danger">
        <strong>Oh snap!</strong> Change a few things up and try submitting again.
    </div>
@endif