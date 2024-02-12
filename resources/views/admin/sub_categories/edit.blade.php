<div class="cards">
    <h4>Edit Sub Category</h4>
<div class="card-body">
    <form action="{{ route('admin.subcategories.update', $subcategory->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $subcategory->name) }}" placeholder="Enter name">
        </div>
        <div class="mb-3">
            <label for="parent-category">Category</label>
            <select name="category_id" class="form-control select2" data-placeholder="--Category--">
                <option value="">Select Category</option>
                @foreach ($categories ?? [] as $category)
                    <option value="{{ $category->id }}" {{ old('parent_id', $subcategory->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label> <strong>Image </strong></label>
            <input type="file" class="form-control file-upload" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
</div>