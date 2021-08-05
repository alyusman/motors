@include('layouts.header')
<!--main content wrapper-->
<div class="content-wrapper">
    <!--creative states-->
    <div class="creative-state-area basic-gradient">
        <div class="row">
            <div class="col-lg-7 col-12">
                <h4 class="creative-state-title">Dashboard</h4>
            </div>
            <div class="col-lg-5  col-12 text-lg-right">
                <div class="row short-states mb-lg-0 mb-4">
                    <div class="col-6">
                        <span class="pr-2">unique visitors</span>
                        <span id="unique_visitors"></span>
                    </div>
                    <div class="col-6">
                        <span class="pr-2">total visitors</span>
                        <span id="total_visitors"></span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-shadow mb-4">
                    <div class="card-body">
                        <div class="media d-flex align-items-center">
                            <div class="mr-4 rounded-circle bg-warning sr-icon-box bubble-shadow-small">
                                <i class="vl_user-male"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="text-uppercase mb-0 weight500 text-dark">{{$totalProducts}}</h4>
                                <span class="text-muted">Total Stock</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-shadow mb-4">
                    <div class="card-body">
                        <div class="media d-flex align-items-center">
                            <div class="mr-4 rounded-circle bg-purple sr-icon-box bubble-shadow-small">
                                <i class="vl_download"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="text-uppercase mb-0 weight500 text-dark">4,87,654</h4>
                                <span class="text-muted">Downloads</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-shadow mb-4">
                    <div class="card-body">
                        <div class="media d-flex align-items-center">
                            <div class="mr-4 rounded-circle bg-danger sr-icon-box bubble-shadow-small">
                                <i class="vl_shopping-bag2"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="text-uppercase mb-0 weight500 text-dark">4,87,654</h4>
                                <span class="text-muted">Active Installation</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card card-shadow mb-4">
                    <div class="card-body">
                        <div class="media d-flex align-items-center">
                            <div class="mr-4 rounded-circle bg-purple-light sr-icon-box bubble-shadow-small">
                                <i class="vl_cart-empty"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="text-uppercase mb-0 weight500 text-dark">4,87,654</h4>
                                <span class="text-muted">Product Sales</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/creative states-->

    <div class="container-fluid">

        <!--sales statistical overview-->
        <div class="row">
            <div class="col-xl-12">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-info">
                            <div class="custom-title">Sales Statistical Overview</div>
                            <div class=" widget-action-link">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0" data-toggle="dropdown">
                                        <i class=" vl_ellipsis-fill-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                        <a class="dropdown-item" href="#"> Edit</a>
                                        <a class="dropdown-item" href="#"> Delete</a>
                                        <a class="dropdown-item" href="#"> Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3">
                                <span class="text-muted mb-5 d-inline-block"><i class="fa fa-bolt"></i> Page Views</span>
                                <h1 class="mb-0">135,870</h1>
                                <small class="text-muted">Page views in last month december 2018</small>
                                <ul class="list-unstyled mt-5">
                                    <li class="text-muted">
                                        <i class="fa fa-clock-o pr-2"></i> Data from January
                                    </li>
                                    <li class="text-muted">
                                        <i class="fa fa-clock-o pr-2"></i> Last active in 12.01.2018
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xl-9">
                                <canvas id="dash3_sales_chart" height="250"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--/sales statistical overview-->
    </div>



    <!--/main content wrapper-->
    @include('layouts.footer ')
