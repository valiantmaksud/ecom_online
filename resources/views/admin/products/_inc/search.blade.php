<div class="card">
    <div class="card-body">
        <form action="">
            <div class="row mb-3">

                <div class="col-sm-3">
                    <div class="input-group">
                        <div class="input-group-text">Product</div>
                        <input type="text" name="name" value="{{ request('name') }}" class="form-control">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="input-group">
                        <div class="input-group-text">Category</div>
                        <select name="category_id" class="form-control select2" data-selected="{{ request('category_id') }}">
                            <option value=""></option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="input-group">
                        <div class="input-group-text">SubCategory</div>
                        <select name="subcategory_id" class="form-control select2" data-selected="{{ request('subcategory_id') }}">
                            <option value=""></option>
                            @foreach ($subcategories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="input-group">
                        <div class="input-group-text">Status</div>
                        <select name="status" class="form-control select2" data-placeholder="Select Status" data-selected="{{ request('status') }}">
                            <option value=""></option>
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="float-end">
                <button class="btn btn-sm btn-outline-info">
                    <i class="fa fa-search"></i> Search
                </button>
                <a href="{{ request()->url() }}" class="btn btn-sm btn-outline-danger">
                    <i class="fa fa-refresh" aria-hidden="true"></i> Refresh
                </a>
            </div>

        </form>
    </div>
</div>
