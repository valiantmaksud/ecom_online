<x-backend-layout>
    <x-slot name="title">Add Banner</x-slot>
    <x-slot name="content">
        <form action="{{ route('admin.banners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-9">
                    <div class="card">
                        <div class="card-body">
                            <x-floating-input name="title" title="Title" required="1" />
                            <div class="mb-3">
                                <label> <strong>Feature Image </strong></label>
                                <input type="file" class="form-control file-upload" name="image" required>
                            </div>
                            <x-floating-input name="link" title="Link" type="link" required="1" />

                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-save"></i> Save
                            </button>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </form>
    </x-slot>
    <x-slot name="script">
        @include('admin.products._inc.script')
    </x-slot>
</x-backend-layout>
