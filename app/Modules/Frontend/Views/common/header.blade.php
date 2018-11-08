<div class="tg-topbar tg-haslayout">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <ul class="tg-addressinfo">
                    <li>
                        <i class="lnr lnr-envelope"></i>
                        <a href="mailto:info@domain.com">info@domain.com</a>
                    </li>
                    <li>
                        <i class="lnr lnr-phone-handset"></i>
                        <span>+4 1234 567890</span>
                    </li>
                </ul>
                <div class="tg-themedropdown tg-languagesdropdown">
                    <a href="javascript:void(0);" id="tg-languages" class="tg-btndropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <em><img src="{{ asset ('/public/frontend/images/flags/img-01.jpg') }}" alt="image description"></em>
                        <span>eng</span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="tg-dropdownmenu" aria-labelledby="tg-languages">
                        <li>
                            <a href="#">
                                <em><img src="{{ asset ('/public/frontend/images/flags/img-02.jpg') }}" alt="image description"></em>
                                <span>chi</span>
                            </a>
                        </li>
                        <li class="tg-active">
                            <a href="#">
                                <em><img src="{{ asset ('/public/frontend/images/flags/img-03.jpg') }}" alt="image description"></em>
                                <span>eng</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <em><img src="{{ asset ('/public/frontend/images/flags/img-04.jpg') }}" alt="image description"></em>
                                <span>rus</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tg-adminbox">
                    @if (Auth::guest())
                    <div class="tg-loginregister">
                        <a class="tg-btnlogin" href="{{url('/signin')}}">Login</a>
                        <a class="tg-btnregister" href="{{url('/signin')}}">Register</a>
                    </div>
                    @else
                    <div class="tg-useradminbox">
                        <div class="tg-themedropdown tg-userdropdown">
                            <a href="dashboard.html" id="tg-usermenu" class="tg-btndropdown">
                                <em><img src="{{ asset ('/public/frontend/images/thumbnails/img-01.jpg') }}" alt="image description"></em>
                                <span>Hi! Kena Maresca</span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <div class="tg-dropdownmenu tg-usermenu" aria-labelledby="tg-usermenu">
                                <nav id="tg-dashboardnav" class="tg-dashboardnav">
                                    <ul>
                                        <li>
                                            <a href="dashboard.html">
                                                <i class="lnr lnr-database"></i>
                                                <span>Insights</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="dashboardprofilesetting.html">
                                                <i class="lnr lnr-cog"></i>
                                                <span>Profile Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="dashboardbusinesshours.html">
                                                <i class="lnr lnr-clock"></i>
                                                <span>Business Hours</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="dashboardmanageservice.html">
                                                <i class="lnr lnr-briefcase"></i>
                                                <span>Manage Services</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="dashboardmanageteams.html">
                                                <i class="lnr lnr-users"></i>
                                                <span>Manage Team</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="dashboardmanagejobs.html">
                                                <i class="lnr lnr-map"></i>
                                                <span>Manage Jobs</span>
                                            </a>
                                        </li>
                                        <li class="tg-privatemessages tg-hasdropdown">
                                            <a id="tg-btntoggle" class="tg-btntoggle" href="javascript:void(0);">
                                                <i class="lnr lnr-envelope"></i>
                                                <span>Private Messages</span>
                                                <em class="tg-totalmessages">526</em>
                                                <em class="tg-newmessages">1</em>
                                            </a>
                                            <ul class="tg-emailmenu">
                                                <li class="tg-active">
                                                    <a href="dashboardprivatemessages.html">
                                                        <span>inbox</span>
                                                        <em class="tg-totalmessages">526</em>
                                                        <em class="tg-newmessages">1</em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="dashboardprivatemessages.html">
                                                        <span>sent</span>
                                                        <em class="tg-totalmessages">370</em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="dashboardprivatemessages.html">
                                                        <span>trash</span>
                                                        <em class="tg-totalmessages">160</em>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="dashboardprivatemessages.html">
                                                        <span>spam/junk</span>
                                                        <em class="tg-totalmessages">1260</em>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="dashboardappointment.html">
                                                <i class="lnr lnr-calendar-full"></i>
                                                <span>Appointments</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="dashboardappointmentsetting.html">
                                                <i class="lnr lnr-calendar-full"></i>
                                                <span>Appointment Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="dashboardfavoritlisting.html">
                                                <i class="lnr lnr-heart"></i>
                                                <span>Favourite Listings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="dashboardinvoices.html">
                                                <i class="lnr lnr-list"></i>
                                                <span>Invoices</span>
                                                <em class="tg-invoices">23</em>
                                            </a>
                                        </li>
                                        <li class="tg-updatepackage">
                                            <a href="dashboardupgradepackage.html">
                                                <i class="lnr lnr-layers"></i>
                                                <span>Update Package</span>
                                                <em class="lnr lnr-flag tg-taginfo"></em>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="dashboardsecuritysetting.html">
                                                <i class="lnr lnr-construction"></i>
                                                <span>Security Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="dashboardprivacysetting.html">
                                                <i class="lnr lnr-lock"></i>
                                                <span>Privacy Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('signout')}}">
                                                <i class="lnr lnr-exit"></i>
                                                <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tg-navigationarea">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <strong class="tg-logo"><a href="index-2.html"><img src="{{ url(Setting::option('site_logo')) }}" alt="image description"></a></strong>
                <div class="tg-rightarea">
                    <nav id="tg-nav" class="tg-nav">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                            <ul>
                                <li class="menu-item-has-children current-menu-item">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="index-2.html">Home-1</a>
                                        </li>
                                        <li class="current-menu-item">
                                            <a href="index-1.html">Home-2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="aboutus.html">About</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Listings</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="listinggrid-v1.html">Listing Grid</a>
                                        </li>
                                        <li>
                                            <a href="listinggrid-v2.html">Listing Grid 2</a>
                                        </li>
                                        <li>
                                            <a href="listinglist-v1.html">Listing List</a>
                                        </li>
                                        <li>
                                            <a href="listinglist-v2.html">Listing List 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="javascript:void(0);">Categories</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Automotive</a>
                                            <ul class="sub-menu">
                                                <li><a href="categories3col.html">Catagories</a></li>
                                                <li><a href="categories4col.html">Catagories 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Beauty &amp; Personal Care</a>
                                            <ul class="sub-menu">
                                                <li><a href="categories3col.html">Catagories</a></li>
                                                <li><a href="categories4col.html">Catagories 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Business</a>
                                            <ul class="sub-menu">
                                                <li><a href="categories3col.html">Catagories</a></li>
                                                <li><a href="categories4col.html">Catagories 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Child Care</a>
                                            <ul class="sub-menu">
                                                <li><a href="categories3col.html">Catagories</a></li>
                                                <li><a href="categories4col.html">Catagories 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Cleaning</a>
                                            <ul class="sub-menu">
                                                <li><a href="categories3col.html">Catagories</a></li>
                                                <li><a href="categories4col.html">Catagories 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Computer &amp; Mobile Service</a>
                                            <ul class="sub-menu">
                                                <li><a href="categories3col.html">Catagories</a></li>
                                                <li><a href="categories4col.html">Catagories 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Food &amp; Drinks</a>
                                            <ul class="sub-menu">
                                                <li><a href="categories3col.html">Catagories</a></li>
                                                <li><a href="categories4col.html">Catagories 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">General Labor</a>
                                            <ul class="sub-menu">
                                                <li><a href="categories3col.html">Catagories</a></li>
                                                <li><a href="categories4col.html">Catagories 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Construction &amp; Renovation</a>
                                            <ul class="sub-menu">
                                                <li><a href="categories3col.html">Catagories</a></li>
                                                <li><a href="categories4col.html">Catagories 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Health &amp; Fitness</a>
                                            <ul class="sub-menu">
                                                <li><a href="categories3col.html">Catagories</a></li>
                                                <li><a href="categories4col.html">Catagories 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Pet Care</a>
                                            <ul class="sub-menu">
                                                <li><a href="categories3col.html">Catagories</a></li>
                                                <li><a href="categories4col.html">Catagories 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Traning &amp; Education</a>
                                            <ul class="sub-menu">
                                                <li><a href="categories3col.html">Catagories</a></li>
                                                <li><a href="categories4col.html">Catagories 2</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Transportation &amp; Travel</a>
                                            <ul class="sub-menu">
                                                <li><a href="categories3col.html">Catagories</a></li>
                                                <li><a href="categories4col.html">Catagories 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Provider Pages</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="listing-list-detail.html">Single Detail</a>
                                        </li>
                                        <li>
                                            <a href="listingdetail.html">Provider Detail</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Jobs</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="joblisting.html">Job Listing</a>
                                        </li>
                                        <li>
                                            <a href="jobdetail.html">Job Detail</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="bloglist.html">Blog List</a>
                                        </li>
                                        <li>
                                            <a href="bloggrid.html">Blog Grid</a>
                                        </li>
                                        <li>
                                            <a href="blogdetail.html">Blog Detail</a>
                                        </li>
                                        <li>
                                            <a href="contactus.html">Contact Us</a>
                                        </li>
                                        <li>
                                            <a href="loginregister.html">Login/Register</a>
                                        </li>
                                        <li>
                                            <a href="appointment.html">Appointment</a>
                                        </li>
                                        <li>
                                            <a href="404error.html">404 Error</a>
                                        </li>
                                        <li>
                                            <a href="commingsoon.html">Comming Soon</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <a class="tg-btn tg-btnpostanewjob" href="dashboard.html">Post A New Job</a>
                </div>
            </div>
        </div>
    </div>
</div>