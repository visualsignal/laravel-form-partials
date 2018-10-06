<div class="form-group {{ $containerClasses or '' }}">
    <label for="{{ $id or $name }}Month">{{ $label }}</label>
    <div class="row">
        <div class="col-xs-6">
            <select
                    name="{{ $name }}Month"
                    id="{{ $id or $name }}Month"
                    class="form-control {{ $inputClasses or '' }}"
            >
                @if (isset($includeBlank) && $includeBlank)
                    <option value="">---</option>
                @endif
                @for($i = 1; $i <= 12; $i++)
                    <option value="{{ $i }}">{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</option>
                @endfor
            </select>
        </div>

        <div class="col-xs-6">
            <select
                    name="{{ $name }}Year"
                    id="{{ $id or $name }}Year"
                    class="form-control col-xs-6 {{ $inputClasses or '' }}"
            >
                @if (isset($includeBlank) && $includeBlank)
                    <option value="">---</option>
                @endif
                @for($i = date('Y'); $i <= (date('Y') + 12); $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>
    </div>

    @if ($errors->has($name))
        <span class="help-block text-danger">
            <strong>{{ $errors->first($name) }}</strong>
        </span>
    @endif
</div>
