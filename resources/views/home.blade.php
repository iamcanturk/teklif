@extends('layouts.main')
@section('content')
    <div class="container-full">

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="box box-primary pull-up">
                        <div class="box-body">
                            <div class="d-flex align-items-center font-size-18">
                                <div class="icon">
                                    <i class="mdi mdi-star-circle text-white mr-10"></i>
                                </div>
                                <p class="font-weight-medium mb-0 text-white">Sales</p>
                            </div>
                            <div class="d-flex align-items-center flex-wrap">
                                <h2 class="font-weight-normal text-white">96587</h2>
                                <div class="badge badge-light badge-pill ml-10">
                                    <div class="d-flex align-items-baseline">
                                        <span class="mr-2">High</span>
                                        <span class="mb-0">485</span>
                                        <span class="mdi mdi-arrow-up"></span>
                                    </div>
                                </div>
                            </div>
                            <small class="font-weight-medium d-block text-white-50">Total for this month</small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="box box-info pull-up">
                        <div class="box-body">
                            <div class="d-flex align-items-center font-size-18">
                                <div class="icon">
                                    <i class="mdi mdi-truck text-white mr-10"></i>
                                </div>
                                <p class="font-weight-medium mb-0 text-white">Returns</p>
                            </div>
                            <div class="d-flex align-items-center flex-wrap">
                                <h2 class="font-weight-normal text-white">85469</h2>
                                <div class="badge badge-light badge-pill ml-10">
                                    <div class="d-flex align-items-baseline">
                                        <span class="mr-2">High</span>
                                        <span class="mb-0">563</span>
                                        <span class="mdi mdi-arrow-up"></span>
                                    </div>
                                </div>
                            </div>
                            <small class="font-weight-medium d-block text-white-50">Total for this month</small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="box box-success pull-up">
                        <div class="box-body">
                            <div class="d-flex align-items-center font-size-18">
                                <div class="icon">
                                    <i class="mdi mdi-basket text-white mr-10"></i>
                                </div>
                                <p class="font-weight-medium mb-0 text-white">Purchases</p>
                            </div>
                            <div class="d-flex align-items-center flex-wrap">
                                <h2 class="font-weight-normal text-white">74589</h2>
                                <div class="badge badge-light badge-pill ml-10">
                                    <div class="d-flex align-items-baseline">
                                        <span class="mr-2">Low</span>
                                        <span class="mb-0">123</span>
                                        <span class="mdi mdi-arrow-down"></span>
                                    </div>
                                </div>
                            </div>
                            <small class="font-weight-medium d-block text-white-50">Total for this month</small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="box box-danger pull-up">
                        <div class="box-body">
                            <div class="d-flex align-items-center font-size-18">
                                <div class="icon">
                                    <i class="mdi mdi-package-down text-white mr-10"></i>
                                </div>
                                <p class="font-weight-medium mb-0 text-white">Downloads</p>
                            </div>
                            <div class="d-flex align-items-center flex-wrap">
                                <h2 class="font-weight-normal text-white">2548</h2>
                                <div class="badge badge-light badge-pill ml-10">
                                    <div class="d-flex align-items-baseline">
                                        <span class="mr-2">Low</span>
                                        <span class="mb-0">235</span>
                                        <span class="mdi mdi-arrow-down"></span>
                                    </div>
                                </div>
                            </div>
                            <small class="font-weight-medium d-block text-white-50">Total for this month</small>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-12">
                    <div class="box">
                        <div class="box-header no-border">
                            <h4 class="box-title">Revenue Overview</h4>
                            <ul class="box-controls pull-right">
                                <li class="dropdown">
                                    <a data-toggle="dropdown" href="#" class="btn btn-success-light px-10 base-font">Export</a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                        <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                        <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="box-body py-0">
                            <div class="row">
                                <div class="col-6">
                                    <div class="py-10">
                                        <div class="text-fade font-weight-600">Avg. Profit</div>
                                        <div class="font-size-18 font-weight-600">$150K</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="py-10">
                                        <div class="text-fade font-weight-600">Revenue</div>
                                        <div class="font-size-18 font-weight-600">$15,250k</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="py-10">
                                        <div class="text-fade font-weight-600">Taxes</div>
                                        <div class="font-size-18 font-weight-600">$50k</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="py-10">
                                        <div class="text-fade font-weight-600">Yly. Income</div>
                                        <div class="font-size-18 font-weight-600">$44,850k</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-body p-0 overflow-hidden">
                            <div id="revenue4" class="text-dark"></div>
                        </div>
                    </div>
                    <a href="#" class="box bg-danger bg-hover-danger">
                        <div class="box-body">
                            <span class="text-white icon-Cart2 font-size-40"><i class="ti-shopping-cart"></i></span>
                            <div class="text-white font-weight-600 font-size-18 mb-2 mt-5">Shopping Cart</div>
                            <div class="text-white font-size-16">Duis, Faucibus, Lorem, Vitae</div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-12">
                    <div class="box bg-img box-inverse" style="background-image: url(../images/gallery/landscape14.jpg);" data-overlay="5">
                        <div class="box-header no-border">
                            <h4><i class="fa fa-android"></i></h4>
                            <ul class="box-controls pull-right">
                                <li><a class="box-btn-close" href="#"></a></li>
                            </ul>
                        </div>
                        <div class="box-body mt-25">
                            <span class="badge" data-overlay="5">New</span>
                            <h2 class="text-white mb-0">Contrary to popular</h2>
                            <p class="text-white">There are many variations of passages</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-body text-center">
                            <div class="mb-20 mt-20">
                                <img src="../images/avatar5.jpg" width="100" class="rounded-circle bg-info" alt="user">
                                <h4 class="mt-20 mb-0">johen doe</h4>
                                <a href="mailto:dummy@gmail.com">dummy@gmail.com</a>
                            </div>
                            <div class="badge badge-pill badge-info font-size-16">Dashboard</div>
                            <div class="badge badge-pill badge-primary font-size-16">UI</div>
                            <div class="badge badge-pill badge-danger font-size-16">UX</div>
                            <div class="badge badge-pill badge-warning font-size-16" data-toggle="tooltip" data-placement="top" title="" data-original-title="3 more">+10</div>
                        </div>
                        <div class="p-20 mt-10 bt-1">
                            <div class="row text-center">
                                <div class="col-6 br-1">
                                    <a href="#" class="link d-flex align-items-center justify-content-center font-medium">
                                        <span class="icon-Mail font-size-20 mr-5"></span>Message</a>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="link d-flex align-items-center justify-content-center font-medium">
                                        <span class="icon-Code1 font-size-20 mr-5"><span class="path1"></span><span class="path2"></span></span>Portfolio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Orders Overview</h4>
                        </div>
                        <div class="box-body">
                            <div id="charts_widget_1_chart"></div>
                        </div>
                    </div>
                    <a href="#" class="box bg-info bg-hover-info">
                        <div class="box-body">
                            <span class="text-white icon-Layout-arrange font-size-40"><i class="mdi mdi-layers"></i></span>
                            <div class="text-white font-weight-600 font-size-18 mb-2 mt-5">Apartamentos</div>
                            <div class="text-white font-size-16">Duis, Faucibus, Lorem, Vitae</div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-6 col-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Recent Stats</h4>
                        </div>
                        <div class="box-body">
                            <div id="recent_trend"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Trending Items
                                <small class="subtitle">More than 400+ new members</small>
                            </h4>
                        </div>
                        <div class="box-body p-0">
                            <div class="table-responsive">
                                <table class="table no-border table-vertical-center">
                                    <thead>
                                    <tr>
                                        <th class="p-0" style="width: 50px"></th>
                                        <th class="p-0" style="min-width: 200px"></th>
                                        <th class="p-0" style="min-width: 150px"></th>
                                        <th class="p-0" style="min-width: 40px"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="h-50 w-50 l-h-50 rounded text-center overflow-h">
                                                <img src="../images/avatar2.jpg" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark font-weight-600 hover-primary font-size-16">Vivamus consectetur</a>
                                            <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column w-p100">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
														<span class="text-fade">
															65%
														</span>
                                                    <span class="text-fade">
															Progress
														</span>
                                                </div>
                                                <div class="progress progress-xs w-p100">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a href="#" class="btn btn-info btn-sm"><i class="ti-arrow-right"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="h-50 w-50 l-h-50 rounded text-center overflow-h">
                                                <img src="../images/avatar3.jpg" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark font-weight-600 hover-primary font-size-16">Phasellus venenatis nisi</a>
                                            <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column w-p100">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
														<span class="text-fade">
															83%
														</span>
                                                    <span class="text-fade">
															Progress
														</span>
                                                </div>
                                                <div class="progress progress-xs w-p100">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a href="#" class="btn btn-info btn-sm"><i class="ti-arrow-right"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="h-50 w-50 l-h-50 rounded text-center overflow-h">
                                                <img src="../images/avatar5.jpg" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark font-weight-600 hover-primary font-size-16">Aliquam in magna</a>
                                            <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column w-p100">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
														<span class="text-fade">
															47%
														</span>
                                                    <span class="text-fade">
															Progress
														</span>
                                                </div>
                                                <div class="progress progress-xs w-p100">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 47%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a href="#" class="btn btn-info btn-sm"><i class="ti-arrow-right"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="h-50 w-50 l-h-50 rounded text-center overflow-h">
                                                <img src="../images/avatar5.jpg" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark font-weight-600 hover-primary font-size-16">Duis faucibus lorem</a>
                                            <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column w-p100">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
														<span class="text-fade">
															71%
														</span>
                                                    <span class="text-fade">
															Progress
														</span>
                                                </div>
                                                <div class="progress progress-xs w-p100">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 71%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a href="#" class="btn btn-info btn-sm"><i class="ti-arrow-right"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="h-50 w-50 l-h-50 rounded text-center overflow-h">
                                                <img src="../images/avatar04.png" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark font-weight-600 hover-primary font-size-16">Duis faucibus lorem</a>
                                            <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column w-p100">
                                                <div class="d-flex align-items-center justify-content-between mb-2">
														<span class="text-fade">
															50%
														</span>
                                                    <span class="text-fade">
															Progress
														</span>
                                                </div>
                                                <div class="progress progress-xs w-p100">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <a href="#" class="btn btn-info btn-sm"><i class="ti-arrow-right"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
