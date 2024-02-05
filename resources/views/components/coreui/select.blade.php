@php
    if (old($name)) {
        $value = old($name);
    }
@endphp
<label class="form-label" for="{{ $name }}Form">{{ $label }}</label>
<select class="form-select" id="{{ $name }}Form" name="{{ $name }}">
    <option selected disabled value>Choose...</option>
    @foreach ($options as $key => $label)
        <option value="{{ $key }}" @if ($value == $key) selected @endif>{{ $label }}
    @endforeach
</select>
@error($name)
    <div class="invalid-feedback">{{ $message }}</div>
@enderror
