@php
    if (old($name)) {
        $value = old($name);
    }
@endphp
<label for="{{ $name }}Select" class="form-label">{{ $label }}</label>
<select class="form-select" id="{{ $name }}Select" aria-label="{{ $label }}">
    <option selected>Choose</option>
    @foreach ($options as $key => $label)
        <option value="{{ $key }}" @if ($value == $key) selected @endif>{{ $label }}
        </option>
    @endforeach
</select>
@error($name)
    <div id="{{ $name }}Help" class="form-text text-danger">{{ $message }}</div>
@enderror
