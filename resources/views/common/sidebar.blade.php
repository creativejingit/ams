@php 
    $profile_pic = Session::get('user_data')['profile_pic'];
    $name = Session::get('user_data')['name'];
    $type = Session::get('user_data')['type'];
@endphp 

    <div>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="sidebar-user-panel active">
                        <div class="user-panel">
                            <div class=" image">
                                <img src="{{ asset ('public/uploads/profile_pic/').'/'.$profile_pic }}" class="img-circle user-img-circle" alt="User Image" />
                            </div>
                        </div>
                        <div class="profile-usertitle">
                            <div class="sidebar-userpic-name"> {{$name}} </div>
                            <div class="profile-usertitle-job ">{{$type}} </div>
                        </div>
                        <!-- <div class="sidebar-userpic-btn">
                            <a class="tooltips" href="../examples/profile.html" data-toggle="tooltip" title="Profile">
                                <i class="far fa-user sidebarQuickIcon"></i>
                            </a>
                            <a class="tooltips" href="../email/inbox.html" data-toggle="tooltip" title="Mail">
                                <i class="far fa-envelope sidebarQuickIcon"></i>
                            </a>
                            <a class="tooltips" href="../apps/chat.html" data-toggle="tooltip" title="Chat">
                                <i class="far fa-comment-alt sidebarQuickIcon"></i>
                            </a>
                            <a class="tooltips" href="../examples/sign-in.html" data-toggle="tooltip" title="Logout">
                                <i class="fas fa-sign-out-alt sidebarQuickIcon"></i>
                            </a>
                        </div> -->
                    </li>
					
					<?php 
							
							if($type=="super_administrator")
							{
					?>
								<li>
									<a href="{{ url('package/') }}">
										<i class="fab fa-wpforms"></i>
										<span>Package</span>
									</a>
								</li>
					<?php 
							}
							if($type=="administrator")
							{
					?>
								<li>
									<a href="{{ url('organization/view-organization') }}">
										<i class="fab fa-wpforms"></i>
										<span>Organization</span>
									</a>
								</li>
								<li>
									<a href="{{ url('groups/view-group') }}">
										<i class="fab fa-wpforms"></i>
										<span>Groups</span>
									</a>
								</li>
								<li>
									<a href="{{ url('admin/user') }}">
										<i class="fab fa-wpforms"></i>
										<span>User</span>
									</a>
								</li>
								<li>
									<a href="javascript:void(0);" class="menu-toggle">
										<i class="fas fa-angle-double-down"></i>
										<span>Setup Form</span>
									</a>
									<ul class="ml-menu">
										
										<li>
											<a href="{{ url('admin/foreign-exchange-rate') }}">
												<i class="fab fa-wpforms"></i>
												<span>Foreign Exchange Rate</span>
											</a>
										</li>
										<li>
											<a href="{{ url('admin/vendor-creation') }}">
												<i class="fab fa-wpforms"></i>
												<span>Vendor</span>
											</a>
										</li>
										<li>
											<a href="{{ url('admin/company-creation') }}">
												<i class="fab fa-wpforms"></i>
												<span>Company</span>
											</a>
										</li>
										<li>
											<a href="{{ url('admin/client-creation') }}">
												<i class="fab fa-wpforms"></i>
												<span>Client</span>
											</a>
										</li>
										<!--
										<li>
											<a href="javascript:void(0);" class="menu-toggle">
												<span>Level - 2</span>
											</a>
											<ul class="ml-menu">
												<li>
													<a href="javascript:void(0);">
														<span>Menu Item</span>
													</a>
												</li>
												<li>
													<a href="javascript:void(0);" class="menu-toggle">
														<span>Level - 3</span>
													</a>
													<ul class="ml-menu">
														<li>
															<a href="javascript:void(0);">
																<span>Level - 4</span>
															</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										-->
									</ul>
								</li>
					
					<?php 
							}
							if($type=="user")
							{
					?>
								
								<li>
									<a href="{{ url('admin/quotation') }}">
										<i class="fab fa-wpforms"></i>
										<span>Quotation</span>
									</a>
								</li>

                    

								
                    
					<?php 
							}
					?>
                    <!-- <li>
                        <a href="{{ url('groups/group-modules') }}">
                            <i class="fab fa-wpforms"></i>
                            <span>Group Modules</span>
                        </a>
                    </li> -->


<!--                     <li class="header">Main</li>
                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Home</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../../index.html">Dashboard 1</a>
                            </li>
                            <li class="active">
                                <a href="dashboard2.html">Dashboard 2</a>
                            </li>
                            <li>
                                <a href="dashboard3.html">Dashboard 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../apps/calendar.html">
                            <i class="far fa-calendar"></i>
                            <span>Events</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-mail-bulk"></i>
                            <span>Email</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../email/inbox.html">Inbox</a>
                            </li>
                            <li>
                                <a href="../email/compose.html">Compose</a>
                            </li>
                            <li>
                                <a href="../email/view-mail.html">Read Email</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fab fa-google-play"></i>
                            <span>Apps</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../apps/chat.html">Chat</a>
                            </li>
                            <li>
                                <a href="../apps/contact_list.html">Contact List</a>
                            </li>
                            <li>
                                <a href="../apps/contact_grid.html">Contact Grid</a>
                            </li>
                            <li>
                                <a href="../apps/support.html">Support</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../widgets/widget.html">
                            <i class="fas fa-braille"></i>
                            <span>Widgets</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-drafting-compass"></i>
                            <span>User Interface (UI)</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../ui/alerts.html">Alerts</a>
                            </li>
                            <li>
                                <a href="../ui/animations.html">Animations</a>
                            </li>
                            <li>
                                <a href="../ui/badges.html">Badges</a>
                            </li>


                            <li>
                                <a href="../ui/buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="../ui/collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="../ui/dialogs.html">Dialogs</a>
                            </li>
                            <li>
                                <a href="../ui/cards.html">Cards</a>
                            </li>
                            <li>
                                <a href="../ui/icons.html">Icons</a>
                            </li>
                            <li>
                                <a href="../ui/labels.html">Labels</a>
                            </li>
                            <li>
                                <a href="../ui/list-group.html">List Group</a>
                            </li>
                            <li>
                                <a href="../ui/media-object.html">Media Object</a>
                            </li>
                            <li>
                                <a href="../ui/notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="../ui/preloaders.html">Preloaders</a>
                            </li>
                            <li>
                                <a href="../ui/progressbars.html">Progress Bars</a>
                            </li>
                            <li>
                                <a href="../ui/range-sliders.html">Range Sliders</a>
                            </li>
                            <li>
                                <a href="../ui/sortable-nestable.html">Sortable &amp; Nestable</a>
                            </li>
                            <li>
                                <a href="../ui/tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="../ui/waves.html">Waves</a>
                            </li>
                            <li>
                                <a href="../ui/typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="../ui/helper-classes.html">Helper Classes</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fab fa-wpforms"></i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../forms/basic-form-elements.html">Basic Form Elements</a>
                            </li>
                            <li>
                                <a href="../forms/advanced-form-elements.html">Advanced Form Elements</a>
                            </li>
                            <li>
                                <a href="../forms/form-examples.html">Form Examples</a>
                            </li>
                            <li>
                                <a href="../forms/form-validation.html">Form Validation</a>
                            </li>
                            <li>
                                <a href="../forms/form-wizard.html">Form Wizard</a>
                            </li>
                            <li>
                                <a href="../forms/editors.html">Editors</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-table"></i>
                            <span>Tables</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../tables/normal-tables.html">Normal Tables</a>
                            </li>
                            <li>
                                <a href="../tables/jquery-datatable.html">Advance Datatables</a>
                            </li>
                            <li>
                                <a href="../tables/group-table.html">Grouping</a>
                            </li>
                            <li>
                                <a href="../tables/editable-table.html">Editable Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="far fa-images"></i>
                            <span>Medias</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../medias/image-gallery.html">Image Gallery</a>
                            </li>
                            <li>
                                <a href="../medias/carousel.html">Carousel</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-chart-line"></i>
                            <span>Charts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../charts/morris.html">Morris</a>
                            </li>
                            <li>
                                <a href="../charts/flot.html">Flot</a>
                            </li>
                            <li>
                                <a href="../charts/chartjs.html">ChartJS</a>
                            </li>
                            <li>
                                <a href="../charts/sparkline.html">Sparkline</a>
                            </li>
                            <li>
                                <a href="../charts/jquery-knob.html">Jquery Knob</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="far fa-file-alt"></i>
                            <span>Example Pages</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../examples/timeline.html">Timeline</a>
                            </li>
                            <li>
                                <a href="../examples/sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a href="../examples/sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="../examples/forgot-password.html">Forgot Password</a>
                            </li>
                            <li>
                                <a href="../examples/profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="../examples/pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="../examples/invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a href="../examples/faqs.html">Faqs</a>
                            </li>
                            <li>
                                <a href="../examples/blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="../examples/locked.html">Locked</a>
                            </li>
                            <li>
                                <a href="../examples/404.html">404 - Not Found</a>
                            </li>
                            <li>
                                <a href="../examples/500.html">500 - Server Error</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-globe-americas"></i>
                            <span>Maps</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../maps/google.html">Google Map</a>
                            </li>
                            <li>
                                <a href="../maps/jqvmap.html">Vector Map</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fas fa-angle-double-down"></i>
                            <span>Multi Level Menu</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <span>Menu Item - 2</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Level - 2</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span>Menu Item</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="menu-toggle">
                                            <span>Level - 3</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <span>Level - 4</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
		<!-- #END# Left Sidebar -->
	    <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation">
                    <a href="#skins" data-toggle="tab" class="active">SKINS</a>
                </li>
                <!-- <li role="presentation">
                    <a href="#settings" data-toggle="tab">SETTINGS</a>
                </li> -->
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane in active in active stretchLeft" id="skins">
                    <div class="demo-skin">
                        <!-- <div class="rightSetting">
                            <p>GENERAL SETTINGS</p>
                            <ul class="setting-list list-unstyled m-t-20">
                                <li>
                                    <div class="form-check">
                                        <div class="form-check m-l-10">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked> Save
                                                History
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <div class="form-check m-l-10">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked> Show
                                                Status
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <div class="form-check m-l-10">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked> Auto
                                                Submit Issue
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <div class="form-check m-l-10">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked> Show
                                                Status To All
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> -->



                        <div class="rightSetting btn-sidebar-menu-color">
                            <p>SIDEBAR MENU COLORS</p>
                            <button type="button" data-menu-color = 'btn-sidebar-light' class="btn sidebar-menu-colors btn-sidebar-light btn-border-radius p-l-20 p-r-20">Light</button>
                            <button type="button" data-menu-color = 'btn-sidebar-dark' class="btn btn-sidebar-dark btn-default btn-border-radius p-l-20 p-r-20">Dark</button>
                        </div>
                                              
                        
                        <div class="rightSetting">
                            <p>SKINS</p>
                            <ul class="demo-choose-skin choose-theme list-unstyled skin-selected">
                                <li data-theme="black" >
                                    <div class="black-theme"></div>
                                </li>
                                <li data-theme="white">
                                    <div class="white-theme white-theme-border"></div>
                                </li>
                                <li data-theme="purple" class="actived">
                                    <div class="purple-theme"></div>
                                </li>
                                <li data-theme="blue">
                                    <div class="blue-theme"></div>
                                </li>
                                <li data-theme="cyan">
                                    <div class="cyan-theme"></div>
                                </li>
                                <li data-theme="green">
                                    <div class="green-theme"></div>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange-theme"></div>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="rightSetting">
                            <p>Disk Space</p>
                            <div class="sidebar-progress">
                                <div class="progress m-t-20">
                                    <div class="progress-bar l-bg-cyan shadow-style width-per-45" role="progressbar"
                                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="progress-description">
                                    <small>26% remaining</small>
                                </span>
                            </div>
                        </div>
                        <div class="rightSetting">
                            <p>Server Load</p>
                            <div class="sidebar-progress">
                                <div class="progress m-t-20">
                                    <div class="progress-bar l-bg-orange shadow-style width-per-63" role="progressbar"
                                        aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="progress-description">
                                    <small>Highly Loaded</small>
                                </span>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- <div role="tabpanel" class="tab-pane stretchRight" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever switch-col-green"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever switch-col-blue"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever switch-col-purple"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever switch-col-cyan"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="lever switch-col-red"></span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label>
                                        <input type="checkbox">
                                        <span class="lever switch-col-lime"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
		
		