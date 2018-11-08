<!-- META SECTION -->
<title>{{Setting::option('admin_title')}}</title>            
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="_token" content="{{ csrf_token() }}">

<link rel="icon" href="favicon.ico" type="image/x-icon" />
<!-- END META SECTION -->
        
<!-- CSS INCLUDE -->        
<link rel="stylesheet" type="text/css" id="theme" href="{{ asset ('/public/admin/css/theme-default.css') }}"/>
<link rel="stylesheet" type="text/css" id="theme" href="{{ asset ('/public/admin/css/style.css') }}"/>
<link rel="stylesheet" type="text/css" id="theme" href="{{ asset ('/public/admin/css/dropzone/dropzone.css') }}"/>
<script type="text/javascript" src="{{ asset ('/public/admin/js/plugins/jquery/jquery.min.js') }}"></script>

<base href="{{ url('/') }}">

<!-- EOF CSS INCLUDE -->                                    
