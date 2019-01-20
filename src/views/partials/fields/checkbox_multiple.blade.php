<label>{{ $label }}</label>
@foreach($options as $value => $displayName)
<div class="checkbox">
    <label>
        <input type="{{ $type??'checkbox' }}" name="{{ $name }}[]" {{ isset($values) && in_array($value, $values) ? 'CHECKED ' : '' }} value="{{ $value??'1' }}" {{ isset($disabled) && $disabled ? 'DISABLED' : '' }} class="{{ $classes??'' }}"> {{ $displayName }}
    </label>
</div>
@endforeach
@if ($errors->has($name))
    <span class="help-block text-danger">
        <strong>{{ $errors->first($name) }}</strong>
    </span>
@endif
