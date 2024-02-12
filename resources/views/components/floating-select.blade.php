<div class="form-floating mb-3">

    <select class="form-select" name="{{ $name }}" id="{{ $name }}" aria-label="{{ $placeholder }}" data-selected="{{ $selected }}" @if($required) required @endif>
        <option value=""></option>
        @foreach ($collections ?? [] as $id => $name)
            <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
      </select>
      
    <label for="{{ $name }}">
        {{ $title }}
        @if ($required)
            <sup class="text-danger">*</sup>
        @endif
    </label>
</div>
