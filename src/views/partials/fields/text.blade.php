<div class="form-group {{ $containerClasses??'' }}">
    @if(isset($label))
        <label for="{{ $id??$name }}">{{ $label }}</label>
    @endif
    <input
            type="{{ $type??'text' }}"
            name="{{ $name }}"
            id="{{ $id??$name }}"
            class="form-control {{ $inputClasses??'' }}"
            placeholder="{{ $placeholder??''}}"
            value="{{ old($name, isset($value) ? $value : '') }}"
    >

    @if (($errorIdentifier = isset($errorIdentifier) ? $errorIdentifier : $name) && $errors->has($errorIdentifier))
        <span class="help-block text-danger">
            <strong>{{ $errors->first($errorIdentifier) }}</strong>
        </span>
    @endif
</div>
