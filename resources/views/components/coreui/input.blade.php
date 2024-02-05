@php
    if (old($name)) {
        $value = old($name);
    }

    $realName = $name;
    $errorName = $name;
    $name = str_replace('[]', '', $name);

    if ($multiple) {
        $errorName = "$name.*";
    }
@endphp
<label class="form-label" for="{{ $name }}Form">{{ $label }}</label>
<input class="form-control @error($errorName) is-invalid @enderror" name="{{ $realName }}" id="{{ $name }}Form"
    type="{{ $type }}" aria-describedby="{{ $name }}Feedback" value="{{ $value }}"
    @if ($multiple) multiple @endif>

@error($errorName)
    <div class="invalid-feedback" id="{{ $name }}Feedback">{{ $message }}</div>
@enderror
