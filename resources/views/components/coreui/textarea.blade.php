@php
    if (old($name)) {
        $value = old($name);
    }
    $rows = 2;
    if ($large) {
        $rows = 8;
    }
@endphp
<label class="form-label" for="{{ $name }}Textarea">{{ $label }}</label>
<textarea class="form-control @error($name) is-invalid @enderror" name="{{ $name }}"
    id="{{ $name }}Textarea" placeholder="{{ $ph }}" rows="{{ $rows }}">{{ $value }}</textarea>
@error($name)
    <div class="invalid-feedback">{{ $message }}</div>
@enderror
