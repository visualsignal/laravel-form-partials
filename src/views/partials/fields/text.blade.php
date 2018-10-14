<div class="form-group {{ $containerClasses or '' }}">
    @if(isset($label))
        <label for="{{ $id or $name }}">{{ $label }}</label>
    @endif
    <input
            type="{{ $type or 'text' }}"
            name="{{ $name }}"
            id="{{ $id or $name }}"
            class="form-control {{ $inputClasses or '' }}"
            placeholder="{{ $placeholder or ''}}"
            value="{{ old($name, isset($value) ? $value : '') }}"
    >

    @if ($errors->has($name))
        <span class="help-block text-danger">
            <strong>{{ $errors->first($name) }}</strong>
        </span>
    @endif
</div>
