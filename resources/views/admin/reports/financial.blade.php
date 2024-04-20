<x-backend-layout>
    <x-slot name="title">Orders</x-slot>
    <x-slot name="content">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">

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
                                        {{ $item->order_id }}
                                    </td>
                                    <td>{{ optional($item->user)->name }}</td>
                                    <td>
                                        @php
                                            $arr = [ 
                                                ['key'=>'0','name'=>'Pending', 'badge' => 'warning'],
                                                ['key'=>'1','name'=>'Processing', 'badge' => 'info'],
                                                ['key'=>'2','name'=>'Completed', 'badge' => 'success'],
                                                ['key'=>'3','name'=>'Returned', 'badge' => 'primary'],
                                            ];
                                            $key = $arr[array_search($item->order_status, array_column($arr,'key'))]['badge'];
                                            $value = $arr[array_search($item->order_status, array_column($arr,'key'))]['name'];
                                        @endphp
                                        
                                        <span class="badge bg-{{ $key }}">{{ $value ?? '' }}</span>
                                    </td>
                                    <td>{{ $item->order_note }}</td>

                                    <td>{{ number_format($item->total, 2) }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            @if ($item->status != 'accepted' || auth()->id() == 2 || auth()->id() == 1)
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle card-drop"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
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
                                                        <a href="{{ route('admin.orders.show', $item->id) }}" class="dropdown-item">
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
                                            @endif
                                            <a href="{{ route('admin.orders.show', $item->id) }}?type=invoice"
                                                target="_blank">
                                                <i class="fas fa-print fa-2x"></i>
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
