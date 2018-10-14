<div class="form-group {{ $containerClasses or '' }}">
    @if(isset($label))
        <label for="{{ $id or $name }}">{{ $label }}</label>
    @endif
    <textarea name="{{ $name }}" id="{{ $id or $name }}" class="form-control {{ $inputClasses or '' }}" rows="{{ $rows ?? 10 }}">{{ old($name, isset($value) ? $value : '') }}</textarea>
    @if ($errors->has($name))
        <span class="help-block text-danger">
            <strong>{{ $errors->first($name) }}</strong>
        </span>
    @endif
</div>

@if(isset($inputClasses) && strpos($inputClasses, 'wysiwyg') !== false)
    @push('js')
        <script src="{{ elixir('js/vendor/tinymce.min.js') }}"></script>
        <script>
            tinymce.init({
                selector: '.wysiwyg'
            });
        </script>
    @endpush
@endif
