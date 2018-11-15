<!DOCTYPE html>
<html lang="en">

<head>
    @include('common/head')
</head>
    
<body>

	<!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="{{ asset ('public/assets/images/loading.png') }}" width="20" height="20" alt="admin">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <!-- Top Bar -->                   
	
	@include('common/navbar')
	@include('common/sidebar')
	
	@yield('content')
	
	
    @include('common/footer-scripts')

</body>
</html>