<div class="cards">
    <h4>Edit Category</h4>
<div class="card-body">
    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}" placeholder="Enter name">
        </div>

        <div class="mb-3">
            <label> <strong>Image </strong></label>
            <input type="file" class="form-control file-upload" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
</div>