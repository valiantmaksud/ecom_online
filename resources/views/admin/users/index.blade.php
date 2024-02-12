<x-backend-layout>
    <x-slot name="content">
        <div class="card">
            <div class="card-body">
                <div class="table-responsives">

                    <table class="table table-hover table-nowrap mb-0 align-middle">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th class="text-center" style="width: 10%">Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($users as $key => $item)
                                <tr>
                                    <td>{{ $users->firstItem() + $key }}</td>
                                    <td>
                                        {{ $item->name }}
                                    </td>
                                    <td>
                                        {{ $item->email }}
                                    </td>
                                    <td>{{ $item->mobile }}</td>
                                    <td>
                                        @if ($item->status == 1)
                                        <span class="badge bg-success">Active</span>
                                            
                                        @else
                                        <span class="badge bg-danger">Inactive</span>
                                        @endif
                                        
                                    </td>
                                    <td>{{ $item->created_at->format('Y-m-d H:i s') }}</td>

                                    <td class="text-center">

                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle card-drop"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal font-size-18 text-muted"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a href="#" class="dropdown-item"><i
                                                            class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                        Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-item"><i
                                                            class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
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
