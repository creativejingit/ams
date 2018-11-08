<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    @include('Frontend::common/head')
</head>
    
<body class="tg-home">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--************************************
            Preloader Start
    *************************************-->
    <div class="preloader-outer">
        <div class="pin"></div>
        <div class="pulse"></div>
    </div>
    <!--************************************
            Preloader End
    *************************************-->
    <!--************************************
            Wrapper Start
    *************************************-->
    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
        <!--************************************
                Header Start
        *************************************-->
        <header id="tg-header" class="tg-header tg-haslayout">
            @include('Frontend::common/header')
        </header>
        <!--************************************
                Header End
        *************************************-->
        @yield('banner')
        <!--************************************
                Main Start
        *************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">
            @yield('content')
        </main>
        <!--************************************
                Main End
        *************************************-->
        <!--************************************
                Footer Start
        *************************************-->
        <footer id="tg-footer" class="tg-footer tg-haslayout">
            @include('Frontend::common/footer')
        </footer>
        <!--************************************
                Footer End
        *************************************-->
    </div>
    <!--************************************
            Wrapper End
    *************************************-->
    @include('Frontend::common/footer-scripts')

</body>
</html>