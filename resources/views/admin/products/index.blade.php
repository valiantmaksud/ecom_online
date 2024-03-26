<x-backend-layout>
    <x-slot name="title">Products</x-slot>
    <x-slot name="content">
        @include('admin.products._inc.search')
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-hover table-nowrap mb-0 align-middle">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Subcategory</th>
                                <th class="text-right">Product Price</th>
                                <th class="text-center">Selling Price</th>
                                <th class="text-center">Discount</th>
                                <th class="text-center">Final Price</th>
                                <th>Status</th>
                                <th class="text-center" style="width: 10%">Action</th>
                            </tr>
                        </thead>
    
                        <tbody>
    
                            @forelse ($products as $key => $item)
                                <tr>
                                    <td>{{ $products->firstItem() + $key }}</td>
                                    <td>
                                        <p>{{ $item->name }}</p>
                                        <span><b>Created At:</b> {{ $item->created_at->format('Y-m-d h:i A') }}</span>
                                    </td>
                                    <td> <img src="{{ asset($item->image) }}" alt="{{ $item->name }}" width="80px" height="80px"></td>
                                    <td>{{ optional($item->category)->name }}</td>
                                    <td>{{ optional($item->subcategory)->name }}</td>
                                    <td class="text-right">
                                        {{ number_format($item->product_cost, 2) }}
                                    </td>
                                    <td class="text-right">
                                        {{ number_format($item->selling_price, 2) }}
                                    </td>
                                    <td class="text-right">
                                        {{ number_format($item->discount_price, 2) }}
                                    </td>
                                    <td class="text-right">
                                        {{ number_format($item->final_price, 2) }}
                                    </td>
                                    <td>
                                        <span class="badge bg-{{ $item->status ? 'success' : 'warning' }}">{{ $item->status ? 'Active' : 'Deactive' }}</span>
                                    </td>
                                    <td class="text-center">
    
                                        <div class="btn-group btn-corner">
                                            <a href="{{ route('admin.products.edit', $item->id) }}"
                                                class="btn btn-sm btn-outline-info">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="delete_item(`{{ route('admin.products.destroy', $item->id) }}`)" class="btn btn-sm btn-outline-danger">
                                                <i class="fa fa-trash"></i>
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
    
                    <x-paginate :collections="$products"/>
    
    
                </div>
            </div>
        </div>
    </x-slot>
</x-backend-layout>