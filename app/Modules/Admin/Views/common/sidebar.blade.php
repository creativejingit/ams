<ul class="x-navigation">
    <li class="xn-logo">
        <a href="{{url('/admin')}}">
        {{Setting::option('admin_title')}}
        </a>
        <a href="#" class="x-navigation-control"></a>
    </li>
    <li class="xn-profile">
        <a href="#" class="profile-mini">
            <img src="{{ asset ('/public/admin/assets/images/users/avatar.jpg')}}" alt="John Doe"/>
        </a>
        <div class="profile">
            <div class="profile-image">
                <img src="<?php 
                                    if(Auth::guard('admin')->user()->type=='Admin')
                                         echo url(Setting::option('site_logo')); 
                                    
                                     if(Auth::guard('admin')->user()->type=='Painting')
                                          echo url(Setting::option('site_logo1')); 
                                          
                                     if(Auth::guard('admin')->user()->type=='Photographic')
                                          echo url(Setting::option('site_logo2')); 
                                          
                                     if(Auth::guard('admin')->user()->type=='Paint Protection')
                                          echo url(Setting::option('site_logo3'));
                                         
                                         
                            ?>" alt="John Doe"/>
            </div>
            <div class="profile-data">
                <div class="profile-data-name">
                    
                    <?php 
                    
                  
                    if(isset(auth()->guard('admin')->user()->name)) echo  auth()->guard('admin')->user()->name;
                    
                    
                    ?></div>
            </div>
            <div class="profile-controls">
              <!--  <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>-->
            </div>
        </div>
    </li>
    <li class="xn-title">Navigation</li>
    <li class="@if(!isset($menu_active)) active @endif">
        <a href="{{url('/admin')}}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
    </li>
    @foreach($menus as $key => $menu)
		@if($key=='users' || $key=='setting')
			@if($u_id = Auth::guard('admin')->user()->type=='Admin')	
				<li class="@if( isset($menu['menus']) && is_array($menu['menus']) ) xn-openable @endif @if( isset($menu_active) && $key == $menu_active ) active @endif">
					<a href="@if( isset($menu['menus']) && is_array($menu['menus']) ) # @else {{$menu['url']}} @endif">
						@if(isset($menu['icon']))
						<span class="{{ $menu['icon'] }}"></span>
						<span class="xn-text">{{ $menu['label'] }}</span>
						@endif
					</a>
					@if( isset($menu['menus']) && is_array($menu['menus']) )
					<ul>
						@foreach($menu['menus'] as $sub_menu)
						<li class="@if(isset($menu_active) && $key == $menu_active ) active @endif">
							<a href="{{ $sub_menu['url'] }}">
								<span class="{{ $sub_menu['icon'] }}"></span>
								{{ $sub_menu['label'] }}
							</a>
						</li>
						@endforeach
					</ul>
					@endif
				</li>
			@endif
		@else
			<li class="@if( isset($menu['menus']) && is_array($menu['menus']) ) xn-openable @endif @if( isset($menu_active) && $key == $menu_active ) active @endif">
					<a href="@if( isset($menu['menus']) && is_array($menu['menus']) ) # @else {{$menu['url']}} @endif">
						@if(isset($menu['icon']))
						<span class="{{ $menu['icon'] }}"></span>
						<span class="xn-text">{{ $menu['label'] }}</span>
						@endif
					</a>
					@if( isset($menu['menus']) && is_array($menu['menus']) )
					<ul>
						@foreach($menu['menus'] as $sub_menu)
						<li class="@if(isset($menu_active) && $key == $menu_active ) active @endif">
							<a href="{{ $sub_menu['url'] }}">
								<span class="{{ $sub_menu['icon'] }}"></span>
								{{ $sub_menu['label'] }}
							</a>
						</li>
						@endforeach
					</ul>
					@endif
				</li>
		@endif
    @endforeach
</ul>