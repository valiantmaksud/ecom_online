<div class="mb-3">
    <div class="input-group input-group-sm">
        <span class="input-group-text">
            {{ request()->getSchemeAndHttpHost() }}/{{ $prefix ?? 'product' }}/
        </span>
        <input type="text" class="form-control" name="slug" id="slug" style="background: none" value="{{ $slug ?? null }}">
        <span class="input-group-text editable" style="cursor: pointer">
            <i class="fa fa-edit"></i>
        </span>
      </div>
</div>