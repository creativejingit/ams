<!DOCTYPE html>
<html lang="en">

<head>
    @include('common/head')
	<style>
			@yield('style')
	</style>
</head>


@php
    $data = Session::get('user_data')['theme_setting'];
    
    if ($data['sidebar_menu_colors'] == 'btn-sidebar-light') :
        $class = "submenu-closed logo-white";
        $skin = "theme-".$data['skins'];
    elseif ($data['sidebar_menu_colors'] == 'btn-sidebar-dark') : 
        $class = "menu_dark logo-black submenu-closed";
        $skin = "theme-".$data['skins'];
    else : 
        $class = "submenu-closed logo-white";
        $skin = "theme-".$data['skins'];
    endif;
@endphp
<body class="skin-setting">


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

<script type="text/javascript">
    // $(window).load('load', 'body', function(){
    //     $('.skin-setting').attr('class', '');
    // });
</script>