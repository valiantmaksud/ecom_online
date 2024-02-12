<div class="row">
    <div class="col-xl-3 col-sm-6">
        <!-- Card -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6 class="font-size-xs text-uppercase">Total Revenue</h6>
                        <h4 class="mt-4 font-weight-bold mb-2 d-flex align-items-center">
                            {{ number_format($totalEarning ?? 0, 2, '.', '') }}
                        </h4>
                        <div class="text-muted">Earning this month</div>
                    </div>
                    <div>
                        <div class="dropdown">
                            <a class="dropdown-toggle btn btn-light btn-sm" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><span class="text-muted">Monthly<i
                                        class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Monthly</a>
                                <a class="dropdown-item" href="#">Yearly</a>
                                <a class="dropdown-item" href="#">Weekly</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="apex-charts mt-3" id="sparkline-chart-1"></div>
            </div>
        </div>
    </div>
    <!-- end col -->
    <div class="col-xl-3 col-sm-6">
        <!-- Card -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6 class="font-size-xs text-uppercase">Total Refunds</h6>
                        <h4 class="mt-4 font-weight-bold mb-2 d-flex align-items-center">
                            {{ number_format($totalRefund ?? 0, 2, '.', '') }}
                        </h4>
                        <div class="text-muted">Refunds this month</div>
                    </div>
                    <div>
                        <div class="dropdown">
                            <a class="dropdown-toggle btn btn-light btn-sm" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><span class="text-muted">Monthly<i
                                        class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Monthly</a>
                                <a class="dropdown-item" href="#">Yearly</a>
                                <a class="dropdown-item" href="#">Weekly</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="apex-charts mt-3" id="sparkline-chart-2"></div>
            </div>
        </div>
    </div>
    <!-- end col -->
    <div class="col-xl-3 col-sm-6">
        <!-- Card -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6 class="font-size-xs text-uppercase">Total Customers</h6>
                        <h4 class="mt-4 font-weight-bold mb-2 d-flex align-items-center">
                            {{ $totalCustomer ?? 0 }}
                        </h4>
                        <div class="text-muted">Customers overall</div>
                    </div>
                    
                </div>
                <div class="apex-charts mt-3" id="sparkline-chart-3"></div>
            </div>
        </div>
    </div>
    <!-- end col -->
    <div class="col-xl-3 col-sm-6">
        <!-- Card -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6 class="font-size-xs text-uppercase">All Time Orders</h6>
                        <h4 class="mt-4 font-weight-bold mb-2 d-flex align-items-center">
                            {{ $totalOrder ?? 0 }}
                        </h4>
                        <div class="text-muted">Total Number of Orders</div>
                    </div>
                    <div>
                        <div class="dropdown">
                            <a class="dropdown-toggle btn btn-light btn-sm" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><span class="text-muted">Yearly<i
                                        class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Monthly</a>
                                <a class="dropdown-item" href="#">Yearly</a>
                                <a class="dropdown-item" href="#">Weekly</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="apex-charts mt-3" id="sparkline-chart-4"></div>
            </div>
        </div>
    </div>
    <!-- end col -->
</div>



<div class="row">
    <div class="card card-h-100">
        <div class="card-body">
            <div class="float-end">
                <div class="dropdown">
                    <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="fw-semibold">Sort By:</span> <span class="text-muted">Yearly<i
                                class="mdi mdi-chevron-down ms-1"></i></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Yearly</a>
                        <a class="dropdown-item" href="#">Monthly</a>
                        <a class="dropdown-item" href="#">Weekly</a>
                        <a class="dropdown-item" href="#">Today</a>
                    </div>
                </div>
            </div>
            <h4 class="card-title mb-4">Sales Analytics</h4>

            <div class="mt-1">
                <ul class="list-inline main-chart mb-0 text-center">
                    <li class="list-inline-item chart-border-left me-0 border-0">
                        <h3 class="text-primary">BDT<span data-plugin="counterup">{{ number_format($totalEarning ?? 0, 2, '.', '') }}</span><span
                                class="text-muted d-inline-block fw-normal font-size-15 ms-2">Income</span>
                        </h3>
                    </li>
                    <li class="list-inline-item chart-border-left me-0">
                        <h3><span data-plugin="counterup">{{ $totalOrder ?? 0 }}</span><span
                                class="text-muted d-inline-block fw-normal font-size-15 ms-2">Sales</span>
                        </h3>
                    </li>
                    <li class="list-inline-item chart-border-left me-0">
                        <h3><span data-plugin="counterup">{{ $totalCustomer ?? 0 }}</span><span
                                class="text-muted d-inline-block fw-normal font-size-15 ms-2">Users</span>
                        </h3>
                    </li>
                </ul>
            </div>

            <div class="mt-3">
                <div id="sales-analytics-chart" class="apex-charts" dir="ltr"></div>
            </div>
        </div> <!-- end card-body-->
    </div>
</div>