@php
    if (old($name)) {
        $value = old($name);
    }
@endphp
<label for="{{ $name }}Form" class="form-label">{{ $label }}</label>
<input type="{{ $type }}" class="form-control form-control-sm" id="{{ $name }}Form"
    aria-describedby="{{ $name }}Help" placeholder="{{ $ph }}" value="{{ $value }}">
@error($name)
    <div id="{{ $name }}Help" class="form-text text-danger">{{ $message }}</div>
@enderror
