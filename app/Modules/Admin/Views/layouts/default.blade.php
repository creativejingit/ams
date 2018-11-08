<!DOCTYPE html>
<html lang="en">

<head>
    @include('Admin::common/head')
</head>
    
<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">
        <!-- START PAGE SIDEBAR -->
        <div class="page-sidebar">
            @include('Admin::common/sidebar')
        </div>    
        <!-- END PAGE SIDEBAR -->
            
        <!-- PAGE CONTENT -->
        <div class="page-content">
        	@include('Admin::common/header')
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                    @include('Admin::common/message')
                    @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT -->
    </div>
	<!-- END PAGE CONTAINER -->
    @include('Admin::common/footer')
    @include('Admin::common/footer-scripts')

</body>
</html>