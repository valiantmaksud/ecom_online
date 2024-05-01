<x-backend-layout>
    <x-slot name="content">
        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6 class="font-size-xs text-uppercase">Completed Orders</h6>
                                <h4 class="mt-4 font-weight-bold mb-2 d-flex align-items-center">
                                    {{ $total_completed_orders }}
                                </h4>
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
                                <h6 class="font-size-xs text-uppercase">Total Category</h6>
                                <h4 class="mt-4 font-weight-bold mb-2 d-flex align-items-center">
                                    {{ $categories }}
                                </h4>

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
                                <h6 class="font-size-xs text-uppercase">Total Products</h6>
                                <h4 class="mt-4 font-weight-bold mb-2 d-flex align-items-center">
                                    {{ $total_products ?? 0 }}
                                </h4>
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
                                    {{ $total_orders ?? 0 }}
                                </h4>
                            </div>
                        </div>
                        <div class="apex-charts mt-3" id="sparkline-chart-4"></div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
    </x-slot>
</x-backend-layout>