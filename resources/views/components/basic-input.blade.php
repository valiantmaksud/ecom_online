<div class="mb-3 row">
    <label for="{{ $name }}" class="col-md-2 col-form-label">
        {{ $title }}
        @if ($required)
            <sup class="text-danger">*</sup>
        @endif
    </label>
    <div class="col-md-10">
        <input class="form-control" type="{{ $type }}" value="{{ $value }}" id="{{ $name }}" placeholder="{{ $placeholder ?? 'Type '. $name }}">
    </div>
</div>