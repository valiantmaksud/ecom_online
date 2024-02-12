<div class="form-floating mb-3">
    <input type="{{ $type }}" name="{{ $name }}" class="form-control input-sm" id="{{ $name }}_1" value="{{ $value }}" placeholder="{{  'Enter '. $name }}"/>
    <label for="{{ $name }}">
        {{ $title }}
        @if ($required)
            <sup class="text-danger">*</sup>
        @endif
    </label>
</div>
