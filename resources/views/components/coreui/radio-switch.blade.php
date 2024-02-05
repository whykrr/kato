<label class="form-check-label" for="{{ $name }}Swich">{{ $label }}</label>
<div class="form-check form-switch form-switch-xl">
    <input class="form-check-input" name="{{ $name }}" id="{{ $name }}Swich" type="checkbox"
        @if ($value) checked @endif value="1">
</div>
