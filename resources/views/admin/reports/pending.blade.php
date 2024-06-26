<x-backend-layout>
    <x-slot name="title">Pending Order</x-slot>
    <x-slot name="content">
        <div class="card">
            <div class="card-body">
                <div class="table-responsives">

                    <table class="table table-hover table-nowrap mb-0 align-middle">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Date</th>
                                <th>Order No.</th>
                                <th>Customer</th>
                                <th>Status</th>
                                <th>Note</th>
                                <th class="text-right">Total</th>
                                <th class="text-center" style="width: 10%">Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($orders as $key => $item)
                                <tr>
                                    <td>{{ $orders->firstItem() + $key }}</td>
                                    <td>
                                        {{ $item->date }}
                                    </td>
                                    <td>
                                        {{ $item->order_number }}
                                    </td>
                                    <td>{{ optional($item->user)->name }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="me-2">
                                                <i class="mdi mdi-check-circle-outline text-success"></i>
                                            </div>
                                            <div>
                                                <p class="mb-0">{{ $item->status }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $item->notes }}</td>

                                    <td>{{ number_format($item->total, 2) }}</td>
                                    <td class="text-center">
                                        <div class="btn-group btn-corner">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle card-drop"
                                                data-bs-toggle="dropdown">
                                                <i class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a href="{{ route('admin.orders.show', $item->id) }}" class="dropdown-item">
                                                        <i class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                        Update Status
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-item">
                                                        <i class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                        Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-item">
                                                        <i class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        {{-- <a href="{{ route('admin.orders.show', $item->id) }}" class="btn btn-sm btn-info bs-tooltip" title="Show">
                                            <i class="fas fa-eye"></i>
                                        </a> --}}
                                        <a href="{{ route('admin.orders.show', $item->id) }}?type=invoice" target="_blank" class="btn btn-sm btn-danger bs-tooltip" title="Invoice Print" style="margin-left:10px">
                                            <i class="fas fa-print"></i>
                                        </a>
                                    </div>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="30" class="text-center text-danger py-3"
                                        style="background: #eaf4fa80 !important; font-size: 18px">
                                        <strong>No records found!</strong>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{-- <x-paginate />
                    @include('admin.partials._paginate', ['data' => $products]) --}}


                </div>
            </div>
        </div>
    </x-slot>
</x-backend-layout>
