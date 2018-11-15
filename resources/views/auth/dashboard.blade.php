@extends('layouts.default')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xl-6 col-lg-5 col-md-4 col-sm-12">
                        <ul class="breadcrumb breadcrumb-style">
                            <li class="breadcrumb-item  bcrumb-1">
                                <a href="../../index.html">
                                    <i class="material-icons">home</i>
                                    Home</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard 2</li>
                        </ul>
                    </div>
                    <div class="col-xl-6 col-lg-7 col-md-8 col-sm-12 text-right">
                        <div class="breadcrumb-chart m-l-50">
                            <div class="float-right">
                                <div class="icon m-b-10">
                                    <div class="chart header-bar">
                                        <canvas width="49" height="40"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="float-right m-r-10">
                                <div class="chart-info m-t-5">
                                    <i class="fas fa-dollar-sign m-r-5"></i>
                                    <span>$8,968</span>
                                    <p>Total Income</p>
                                </div>
                            </div>
                        </div>
                        <div class="breadcrumb-chart m-l-50">
                            <div class="float-right">
                                <div class="icon m-b-10">
                                    <div class="chart header-bar2">
                                        <canvas width="49" height="40"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="float-right m-r-10">
                                <div class="chart-info m-t-5">
                                    <i class="fas fa-user-tie m-r-5"></i>
                                    <span>2,568</span>
                                    <p>New Users</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="plain-card">
                        <div class="card-inner">
                            <h6 class="tx-primary m-b-10">Sales Report</h6>
                            <div class="row">
                                <div class="col col-block">
                                    <label class="font-14">Today</label>
                                    <p>1,898</p>
                                </div>
                                <div class="col col-block">
                                    <label class="font-14">This Week</label>
                                    <p>32,112</p>
                                </div>
                                <div class="col col-block">
                                    <label class="font-14">This Month</label>
                                    <p>72,067</p>
                                </div>
                            </div>

                            <div class="progress shadow-style">
                                <div class="progress-bar l-bg-cyan width-per-70" role="progressbar" aria-valuenow="62"
                                    aria-valuemin="0" aria-valuemax="100">70%</div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                    <div class="plain-card">
                        <div class="card-inner">
                            <h6 class="tx-primary m-b-10">Sales Report</h6>
                            <div class="row">
                                <div class="col col-block">
                                    <label class="font-14">Today</label>
                                    <p>1,898</p>
                                </div>
                                <div class="col col-block">
                                    <label class="font-14">This Week</label>
                                    <p>32,112</p>
                                </div>
                                <div class="col col-block">
                                    <label class="font-14">This Month</label>
                                    <p>72,067</p>
                                </div>
                            </div>

                            <div class="progress shadow-style">
                                <div class="progress-bar l-bg-purple width-per-70" role="progressbar" aria-valuenow="62"
                                    aria-valuemin="0" aria-valuemax="100">70%</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                    <div class="plain-card">
                        <div class="card-inner">
                            <h6 class="tx-primary m-b-10">Sales Report</h6>
                            <div class="row">
                                <div class="col col-block">
                                    <label class="font-14">Today</label>
                                    <p>1,898</p>
                                </div>
                                <div class="col col-block">
                                    <label class="font-14">This Week</label>
                                    <p>32,112</p>
                                </div>
                                <div class="col col-block">
                                    <label class="font-14">This Month</label>
                                    <p>72,067</p>
                                </div>
                            </div>

                            <div class="progress shadow-style">
                                <div class="progress-bar l-bg-orange width-per-70" role="progressbar" aria-valuenow="62"
                                    aria-valuemin="0" aria-valuemax="100">70%</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row clearfix">
                <!-- Line Chart -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Line</strong> Chart</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:void(0);">Action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Another action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row text-center">
                                <div class="col-sm-3 col-6">
                                    <h4 class="margin-0">$ 209
                                        <i class="material-icons col-green">trending_up</i>
                                    </h4>
                                    <p class="text-muted"> Today's Sales</p>
                                </div>
                                <div class="col-sm-3 col-6">
                                    <h4 class="margin-0">$ 837
                                        <i class="material-icons col-red">trending_down</i>
                                    </h4>
                                    <p class="text-muted">This Week's Sales</p>
                                </div>
                                <div class="col-sm-3 col-6">
                                    <h4 class="margin-0">$ 3410
                                        <i class="material-icons col-green">trending_up</i>
                                    </h4>
                                    <p class="text-muted">This Month's Sales</p>
                                </div>
                                <div class="col-sm-3 col-6">
                                    <h4 class="margin-0">$ 78,000
                                        <i class="material-icons col-green">trending_up</i>
                                    </h4>
                                    <p class="text-muted">This Year's Sales</p>
                                </div>
                            </div>
                            <div id="line_chart" class="graph"></div>
                        </div>
                    </div>
                </div>
                <!-- #END# Line Chart -->
            </div>
            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Recent</strong> Orders</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:void(0);">Action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Another action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tableBody">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Item</th>
                                            <th>Status</th>
                                            <th>Quantity</th>
                                            <th>Progress</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="table-img">
                                                <img src="{{ asset ('public/assets/images/user/user1.jpg') }}" alt="">
                                            </td>
                                            <td>John Doe</td>
                                            <td>iPhone X</td>
                                            <td>
                                                <span class="label bg-green shadow-style">Placed</span>
                                            </td>
                                            <td>2</td>
                                            <td>
                                                <div class="progress shadow-style">
                                                    <div class="progress-bar l-bg-green width-per-62" role="progressbar"
                                                        aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="{{ asset ('public/assets/images/user/user2.jpg') }}" alt="">
                                            </td>
                                            <td>Sarah Smith</td>
                                            <td>Pixel 2</td>
                                            <td>
                                                <span class="label l-bg-purple shadow-style">Shipped</span>
                                            </td>
                                            <td>1</td>
                                            <td>
                                                <div class="progress shadow-style">
                                                    <div class="progress-bar l-bg-purple width-per-40" role="progressbar"
                                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="{{ asset ('public/assets/images/user/user3.jpg') }}" alt="">
                                            </td>
                                            <td>Airi Satou</td>
                                            <td>OnePlus</td>
                                            <td>
                                                <span class="label l-bg-orange shadow-style">Pending</span>
                                            </td>
                                            <td>2</td>
                                            <td>
                                                <div class="progress shadow-style">
                                                    <div class="progress-bar l-bg-orange width-per-72" role="progressbar"
                                                        aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="{{ asset ('public/assets/images/user/user4.jpg') }}" alt="">
                                            </td>
                                            <td>Angelica Ramos</td>
                                            <td>Galaxy</td>
                                            <td>
                                                <span class="label l-bg-cyan shadow-style">Delivered</span>
                                            </td>
                                            <td>3</td>
                                            <td>
                                                <div class="progress shadow-style">
                                                    <div class="progress-bar l-bg-cyan width-per-95" role="progressbar"
                                                        aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="{{ asset ('public/assets/images/user/user5.jpg') }}" alt="">
                                            </td>
                                            <td>Ashton Cox</td>
                                            <td>Moto Z2</td>
                                            <td>
                                                <span class="label bg-green shadow-style">Placed</span>
                                            </td>
                                            <td>4</td>
                                            <td>
                                                <div class="progress shadow-style">
                                                    <div class="progress-bar l-bg-green width-per-87" role="progressbar"
                                                        aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-img">
                                                <img src="{{ asset ('public/assets/images/user/user6.jpg') }}" alt="">
                                            </td>
                                            <td>Cara Stevens</td>
                                            <td>Nokia</td>
                                            <td>
                                                <span class="label bg-green shadow-style">Placed</span>
                                            </td>
                                            <td>6</td>
                                            <td>
                                                <div class="progress shadow-style">
                                                    <div class="progress-bar l-bg-green width-per-62" role="progressbar"
                                                        aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Total</strong> Revenue</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:void(0);">Action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Another action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="body text-center">
                                <h4 class="m-b-20">Total Visitors</h4>
                                <h6 class="m-b-30">5,98,345</h6>
                                <input type="text" class="dial" value="93" data-width="120" data-height="120"
                                    data-thickness="0.12" data-fgColor="#9C27B0">
                                <h4 class="m-t-30">Satisfaction Rate</h4>
                                <h6 class="displayblock m-t-10">36% Average</h6>
                                <div class="icon m-t-25">
                                    <div class="chart chart-bar2">6,4,8,6,8,10,5,6,7,9,5,6,4,8,6,8,10,5,6,7,9,5,10,5,6,7,9,5,6,4,8,6,8</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
            <div class="row clearfix">
                <!-- Customer Review -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Customer</strong> Review</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:void(0);">Action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Another action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="review-block">
                                <div class="row">
                                    <div class="review-img">
                                        <img src="{{ asset ('public/assets/images/user/user1.jpg') }}" alt="">
                                    </div>
                                    <div class="col">
                                        <h6 class="m-b-15">Alis Smith
                                            <span class="float-right m-r-10 text-muted"> a week ago
                                            </span>
                                        </h6>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_half</i>
                                        <i class="material-icons">star_border</i>
                                        <p class="m-t-15 m-b-15 text-muted">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Etiam vel rutrum ex, at
                                            ornare mi. In quis scelerisque dui, eget rhoncus orci. Fusce et sodales
                                            ipsum.
                                            Nam id nunc euismod, aliquet arcu quis, mattis nisi.
                                        </p>
                                        <a href="#!">
                                            <i class="material-icons m-r-10">thumb_up</i>
                                        </a>
                                        <a href="#!">
                                            <i class="material-icons m-r-10 col-red">thumb_down</i>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="review-img">
                                        <img src="{{ asset ('public/assets/images/user/user2.jpg') }}" alt="">
                                    </div>
                                    <div class="col">
                                        <h6 class="m-b-15">John Dio
                                            <span class="float-right m-r-10 text-muted"> a week ago
                                            </span>
                                        </h6>
                                        <i class="material-icons">star</i>
                                        <i class="material-icons">star_half</i>
                                        <i class="material-icons">star_border</i>
                                        <i class="material-icons">star_border</i>
                                        <i class="material-icons">star_border</i>
                                        <p class="m-t-15 m-b-15 text-muted">Nam quis ligula est. Nunc sed risus non
                                            turpis tristique tempor. Ut sollicitudin
                                            faucibus magna nec gravida. Suspendisse ullamcorper justo vel porta
                                            imperdiet.
                                            Nunc nec ipsum vel augue placerat faucibus. </p>
                                        <a href="#!">
                                            <i class="material-icons m-r-10">thumb_up</i>
                                        </a>
                                        <a href="#!">
                                            <i class="material-icons m-r-10 col-red">thumb_down</i>
                                        </a>
                                    </div>
                                </div>
                                <div class="text-center  m-b-5">
                                    <a href="#!" class="b-b-primary text-primary">View all Customer Reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Customer Review -->
                <div class="col-md-4 col-sm-12 col-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Earning</strong> Source</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:void(0);">Action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Another action</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="totalEarning">
                                <h2>$90,808</h2>
                            </div>
                            <div class="p-t-10">
                                <span class="pull-left progress-label">envato.com</span>
                                <span class="pull-right progress-percent label label-info m-b-5">17%</span>
                            </div>
                            <div class="earningProgress">
                                <div class="progress shadow-style">
                                    <div class="progress-bar l-bg-green width-per-17" role="progressbar" aria-valuenow="17"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="p-t-10">
                                <span class="pull-left progress-label">google.com</span>
                                <span class="pull-right progress-percent label label-danger m-b-5">27%</span>
                            </div>
                            <div class="earningProgress">
                                <div class="progress shadow-style">
                                    <div class="progress-bar l-bg-purple width-per-27" role="progressbar" aria-valuenow="27"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="p-t-10">
                                <span class="pull-left progress-label">yahoo.com</span>
                                <span class="pull-right progress-percent label label-primary m-b-5">25%</span>
                            </div>
                            <div class="earningProgress">
                                <div class="progress shadow-style">
                                    <div class="progress-bar l-bg-orange width-per-25" role="progressbar" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="p-t-10">
                                <span class="pull-left progress-label">store</span>
                                <span class="pull-right progress-percent label label-success m-b-5">18%</span>
                            </div>
                            <div class="earningProgress">
                                <div class="progress shadow-style">
                                    <div class="progress-bar l-bg-cyan width-per-18" role="progressbar" aria-valuenow="18"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="p-t-10">
                                <span class="pull-left progress-label">Others</span>
                                <span class="pull-right progress-percent label label-warning m-b-5">13%</span>
                            </div>
                            <div class="earningProgress">
                                <div class="progress shadow-style">
                                    <div class="progress-bar l-bg-red width-per-13" role="progressbar" aria-valuenow="13"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection