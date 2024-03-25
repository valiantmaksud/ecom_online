<x-backend-layout>
    <x-slot name="title">Edit Product</x-slot>
    <x-slot name="content">
        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-sm-9">
                    <div class="card">
                        <div class="card-header">
                            <x-floating-input name="name" title="Add New Product" required="1" :value="$product->name" />
                           
                            <div class="mb-3">
                                <label>Description<sup class="text-danger">*</sup></label>
                                <textarea name="description" id="ckeditor-classic">{{ old('description',$product->description) }}</textarea>
                            </div>

                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="attribute"
                                            class="form-label font-size-13 text-muted">Category</label>
                                        <select class="form-control select2" name="category_id" data-placeholder="-Select Category-" required>
                                            <option value="">Category</option>
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}" {{ old('category_id', $product->category_id) == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
        
                                    <div class="mb-3">
                                        <label for="attribute"
                                            class="form-label font-size-13 text-muted">SubCategory</label>
                                        <select class="form-control select2" name="subcategory_id" data-placeholder="-Select Category-" required>
                                            <option value="">SubCategory</option>
                                            @foreach ($subcategories as $item)
                                                <option value="{{ $item->id }}" {{ old('subcategory_id', $product->subcategory_id) == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
            
            
        
                                    <div class="mb-3">
                                        <label for="attribute"
                                            class="form-label font-size-13 text-muted">Brand</label>
                                        <select class="form-control select2" name="brand_id">
                                            <option value="">Brand</option>
                                            @foreach ($brands as $item)
                                                <option value="{{ $item->id }}" {{ old('brand_id', $product->brand_id) == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>
                    
                </div>
                <div class="col-sm-3">
                    
                    <div class="card">
                        <div class="card-body">
                            
                            <div class="form-group mb-3">
                                <label for="">Product Cost</label>
                                <div class="square-switch">
                                    <input type="number" class="form-control" value="{{ old('product_cost', $product->product_cost) }}" name="product_cost" placeholder="Product Cost" />
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Selling Price</label>
                                <div class="square-switch">
                                    <input type="number" class="form-control" name="selling_price" value="{{ old('selling_price', $product->selling_price) }}" placeholder="Selling Price" />
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Discount Price</label>
                                <div class="square-switch">
                                    <input type="number" class="form-control" name="discount_price" value="{{ old('discount_price', $product->discount_price) }}" placeholder="Discount Price" />
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Final Price</label>
                                <div class="square-switch">
                                    <input type="number" class="form-control" name="final_price" value="{{ old('final_price', $product->final_price) }}" placeholder="Final Price" />
                                </div>
                            </div>

                            <div class="mb-3">
                                <label> <strong>Feature Image </strong></label>
                                <input type="file" class="form-control file-upload" name="image">
                                @if (file_exists($product->image))
                                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" width="56" height="56">
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5>Publish</h5>
                        </div>
                        <div class="card-body">
                            <div class="btn-groups">
                                <button type="submit" name="status" value="1" class="btn btn-success">
                                    <i class="fa fa-save"></i> Save
                                </button>
                                <button type="submit" name="status" value="0" class="btn btn-danger">
                                    <i class="fa fa-file"></i> Draft
                                </button>
                            </div>
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
