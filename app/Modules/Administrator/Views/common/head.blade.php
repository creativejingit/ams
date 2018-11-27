<!-- Mirrored from www.radixtouch.in/templates/admin/roxa/source/light/pages/dashboard/dashboard2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Nov 2018 10:40:59 GMT -->

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>AMS - Account Management System</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset ('public/assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- Plugins Core Css -->
    <link href="{{ asset ('public/assets/css/app.min.css') }}" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{ asset ('public/assets/css/style.css') }}" rel="stylesheet" />

    <!-- You can choose a theme from css/styles instead of get all themes -->
    <link href="{{ asset ('public/assets/css/styles/all-themes.css') }}" rel="stylesheet" />

<!-- EOF CSS INCLUDE --> 
<meta name="csrf-token" content="{{ csrf_token() }}">
   
<!-- APP URL -->
    <script type="text/javascript">
        var APP_URL = {!! json_encode(url('/')) !!}
    </script>
<!-- END APP URL -->
