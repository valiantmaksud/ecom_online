<x-backend-layout>
    <x-slot name="title">Customers</x-slot>
    <x-slot name="content">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-nowrap mb-0 align-middle">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th class="text-center" style="width: 10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($customers as $key => $item)
                                <tr>
                                    <td>{{ $customers->firstItem() + $key }}</td>
                                    <td>
                                        <p>{{ $item->name }}</p>
                                    </td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    
                                    <td>
                                        <span class="badge bg-{{ $item->status ? 'success' : 'warning' }}">{{ $item->status ? 'Active' : 'Deactive' }}</span>
                                    </td>
                                    <td class="text-center">
    
                                       
    
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
    
                    <x-paginate :collections="$customers"/>
    
    
                </div>
            </div>
        </div>
    </x-slot>
</x-backend-layout>