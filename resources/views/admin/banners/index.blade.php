<x-backend-layout>
    <x-slot name="title">Banners</x-slot>
    <x-slot name="content">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-nowrap mb-0 align-middle">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Link</th>
                                <th>Status</th>
                                <th class="text-center" style="width: 10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($banners as $key => $item)
                                <tr>
                                    <td>{{ $banners->firstItem() + $key }}</td>
                                    <td>
                                        <p>{{ $item->title }}</p>
                                    </td>
                                    <td> <img src="{{ asset($item->image) }}" alt="{{ $item->name }}" width="80px" height="80px"></td>
                                    <td>
                                        <a href="{{ $item->link }}" target="_blank">
                                            <i class="fa fa-link"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <span class="badge bg-{{ $item->status ? 'success' : 'warning' }}">{{ $item->status ? 'Active' : 'Deactive' }}</span>
                                    </td>
                                    <td class="text-center">
    
                                        <div class="btn-group btn-corner">
                                            <a href="{{ route('admin.banners.edit', $item->id) }}"
                                                class="btn btn-sm btn-outline-info">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="javascript:void(0)" onclick="delete_item(`{{ route('admin.banners.destroy', $item->id) }}`)" class="btn btn-sm btn-outline-danger">
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
    
                    <x-paginate :collections="$banners"/>
    
    
                </div>
            </div>
        </div>
    </x-slot>
</x-backend-layout>