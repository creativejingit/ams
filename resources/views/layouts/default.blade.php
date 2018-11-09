<!DOCTYPE html>
<html lang="en">

<head>
    @include('common/head')
</head>
    
<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">
        <!-- START PAGE SIDEBAR -->
        <div class="page-sidebar">
            @include('common/sidebar')
        </div>    
        <!-- END PAGE SIDEBAR -->
            
        <!-- PAGE CONTENT -->
        <div class="page-content">
        	@include('common/header')
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                    @include('common/message')
                    @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT -->
    </div>
	<!-- END PAGE CONTAINER -->
    @include('common/footer-scripts')

</body>
</html>