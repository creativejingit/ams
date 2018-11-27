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
    $parseJson = json_decode($data);
    $sidebarMenuColor = json_decode(Session::get('user_data')['theme_setting'])->sidebar_menu_colors;
    $skins = json_decode(Session::get('user_data')['theme_setting'])->skins;
    
    if ($sidebarMenuColor == 'btn-sidebar-light') :
        $class = "submenu-closed logo-white";
        $skin = "theme-".$skins;
    elseif ($sidebarMenuColor == 'btn-sidebar-dark') : 
        $class = "menu_dark logo-black submenu-closed";
        $skin = "theme-".$skins;
    else : 
        $class = "submenu-closed logo-white";
        $skin = "theme-".$skins;
    endif;
@endphp

<body class="{!!$skin!!} {!!$class!!}">


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