<div class="checkbox">
    <label>
        <input type="{{ $type??'checkbox' }}" name="{{ $name }}" {{ isset($checked) && $checked ? 'CHECKED ' : '' }} value="{{ $value??'1' }}" {{ isset($disabled) && $disabled ? 'DISABLED' : '' }} class="{{ $classes??'' }}"> {{ $label }}
    </label>

    @if ($errors->has($name))
        <span class="help-block text-danger">
            <strong>{{ $errors->first($name) }}</strong>
        </span>
    @endif
</div>
