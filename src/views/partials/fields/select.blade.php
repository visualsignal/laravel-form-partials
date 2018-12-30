<div class="form-group {{ $containerClasses or '' }}">
    @if(isset($label))
        <label for="{{ $id or $name }}">{{ $label }}</label>
    @endif
    <select
            name="{{ $name }}"
            id="{{ $id or $name }}"
            class="form-control {{ $inputClasses or '' }}"
    >
        @if (isset($includeBlank) && $includeBlank)
            <option value="">{{ $blankOptionText or '---' }}</option>
        @endif
        @foreach($options as $key => $optionValue)
            <option value="{{ $key }}" {{ isset($value) && $key == $value ? 'SELECTED ' : ''}}>{{ $optionValue }}</option>
        @endforeach
    </select>

    @if ($errors->has($name))
        <span class="help-block text-danger">
            <strong>{{ $errors->first($name) }}</strong>
        </span>
    @endif
</div>
