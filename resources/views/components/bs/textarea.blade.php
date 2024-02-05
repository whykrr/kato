@php
    if (old($name)) {
        $value = old($name);
    }
@endphp
<label for="{{ $name }}Textarea" class="form-label">{{ $label }}</label>
<textarea name="{{ $name }}" class="form-control form-control-sm" id="{{ $name }}Textarea" rows="5"
    aria-describedby="{{ $name }}Help">{{ $value }}</textarea>
@error($name)
    <div id="{{ $name }}Help" class="form-text text-danger">{{ $message }}</div>
@enderror
