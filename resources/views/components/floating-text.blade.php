<div class="form-floating mb-3">
    <textarea name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $placeholder }}" style="height: {{ $height }}px">{{ $value }}</textarea>
    <label for="{{ $name }}">
        {{ $title }}
        @if ($required)
            <sup class="text-danger">*</sup>
        @endif
    </label>
</div>