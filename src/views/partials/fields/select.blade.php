<div class="form-group {{ $containerClasses??'' }}">
    @if(isset($label))
        <label for="{{ $id??$name }}">{{ $label }}</label>
    @endif
    <select
            name="{{ $name }}"
            id="{{ $id??$name }}"
            class="form-control {{ $inputClasses??'' }}"
    >
        @if (isset($includeBlank) && $includeBlank)
            <option value="">{{ $blankOptionText??'---' }}</option>
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
