<x-backend-layout>
    <x-slot name="title">Category</x-slot>
    <x-slot name="content">
        <div class="row">
            <div class="col-4">
                @if (!isset($category))
                    @include('admin.categories.create')                    
                @else
                    @include('admin.categories.edit')
                @endif
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Categories</h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-hover table-nowrap mb-0 align-middle table-check girdjs-table">
                            <thead class="bg-light">
                                <tr>
                                    <th width="15%">Name</th>
                                    <th width="12%">Image</th>
                                    <th class="text-center" width="2%">Status</th>
                                    <th class="text-center" width="8%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>
                                            <span class="text-purple">{{ $category->name }}</span>
                                            <p><strong>Created At:</strong> {{ $category->created_at->format('Y-m-d H:i A') }}</p>
                                        </td>
                                        <td>
                                            <img src="{{ asset($category->image) }}" alt="{{ $category->name }}" width="80px" height="80px">
                                        </td>
                                       
                                        <td>
                                            {{ $category->status ? 'Active' : 'InActive' }}
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group btn-corner">
                                                <a href="{{ route('admin.categories.edit', $category->id) }}"
                                                    class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></a>
                                                <a href="javascript:void(0)" onclick="delete_item(`{{ route('admin.categories.destroy', $category->id) }}`)" class="btn btn-sm btn-outline-danger">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <x-slot name="script">
        {{-- <script>
            const grid = new Grid({
                columns: ['Name', 'Slug'],
                pagination: {
                    enabled: true,
                    limit: 1,
                    server: {
                        url: (prev, page, limit) => `${prev}?page=${limit}&limit=${page}`,
                    }
                },
                server: {
                    url: '{{ route('admin.categories.index') }}',
                    then: data => data.results.map(pokemon => [
                        pokemon.name, html(`<a href='${pokemon.url}'>Link to ${pokemon.name}</a>`)
                    ]),
                    total: data => data.total
                }
            });
        </script> --}}
    </x-slot>
</x-backend-layout>
