    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="{{ asset ('/public/admin/js/plugins/jquery/jquery-ui.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset ('/public/admin/js//plugins/bootstrap/bootstrap.min.js') }}"></script>
        <script type="text/javascript">
            const basePath = $('base').attr('href');
        </script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src="{{ asset ('/public/admin/js/plugins/icheck/icheck.min.js') }}"></script>        
        <script type="text/javascript" src="{{ asset ('/public/admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset ('/public/admin/js/plugins/scrolltotop/scrolltopcontrol.js') }}"></script>
        
        <script type="text/javascript" src="{{ asset ('/public/admin/js/plugins/morris/raphael-min.js') }}"></script>
        <script type="text/javascript" src="{{ asset ('/public/admin/js/plugins/morris/morris.min.js') }}"></script>       
        <script type="text/javascript" src="{{ asset ('/public/admin/js/plugins/rickshaw/d3.v3.js') }}"></script>
        <script type="text/javascript" src="{{ asset ('/public/admin/js/plugins/rickshaw/rickshaw.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset ('/public/admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset ('/public/admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>                
        <script type='text/javascript' src="{{ asset ('/public/admin/js/plugins/bootstrap/bootstrap-datepicker.js') }}"></script>                
        <script type="text/javascript" src="{{ asset ('/public/admin/js/plugins/owl/owl.carousel.min.js') }}"></script>                 
        
        <script type="text/javascript" src="{{ asset ('/public/admin/js/plugins/moment.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset ('/public/admin/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
        
		<script type="text/javascript" src="{{ asset ('/public/admin/js/plugins/nvd3/lib/d3.v3.js') }}"></script>        
        <script type="text/javascript" src="{{ asset ('/public/admin/js/plugins/nvd3/nv.d3.min.js') }}"></script>
		<!-- END THIS PAGE PLUGINS-->        
		
        <!-- START THIS PAGE PLUGINS-->        

		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDNRjJuZWnGvGDA6HuzgLuXVkqvp_HraQU&amp;libraries=places"></script>
		
		

        <script type='text/javascript' src="{{ asset ('/public/admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset ('/public/admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script type='text/javascript' src="{{ asset ('/public/admin/js/plugins/jvectormap/jquery-jvectormap-europe-mill-en.js') }}"></script>
        <script type='text/javascript' src="{{ asset ('/public/admin/js/plugins/jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
		
		
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{ asset ('/public/admin/js/settings.js') }}"></script>
        
        <script type="text/javascript" src="{{ asset ('/public/admin/js/plugins.js') }}"></script>        
        <script type="text/javascript" src="{{ asset ('/public/admin/js/actions.js') }}"></script>
        <script type="text/javascript" src="{{ asset ('/public/admin/js/demo_charts_nvd3.js') }}"></script>
		
		
        <script type="text/javascript" src="{{ asset ('/public/admin/js/demo_maps.js') }}"></script>
        <script type="text/javascript" src="{{ asset ('/public/admin/js/demo_dashboard.js') }}"></script>
        <script type="text/javascript" src="{{ asset ('/public/admin/js/demo_tables.js')}}"></script>     
        <script type="text/javascript" src="{{ asset ('/public/admin/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset ('/public/admin/js/plugins/dropzone/dropzone.min.js')}}"></script>    
        @yield('footer-script')

        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
