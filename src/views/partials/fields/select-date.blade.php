@php
    $fieldCount = count($displays) ?? 2;
    if ($fieldCount === 1) {
        $fieldCount = 2;
    }
    $colCount = 12 / $fieldCount;
    $setTime = null;
    $startYear = date('Y');
    $endYear = (date('Y') + 12);
    if (strtotime($value)) {
        $setTime = new \DateTime($value);
        $endYear = date('Y');
        $startYear = (date('Y') - 100);
    }
@endphp
<div class="form-group {{ $containerClasses or '' }}">
    <label for="{{ $id or $name }}Month">{{ $label }}</label>
    <div class="row">
        @if(isset($displays) && in_array('d', $displays))
            <div class="col-xs-{{ $colCount }}">
                <select
                        name="{{ $name }}Day"
                        id="{{ $id or $name }}Day"
                        class="form-control {{ $inputClasses or '' }}"
                >
                    @if (isset($includeBlank) && $includeBlank)
                        <option value="">---</option>
                    @endif
                    @for($i = 1; $i <= 31; $i++)
                        <option value="{{ $i }}"
                                @if(isset($setTime) && $setTime->format('d') == $i)
                                selected
                                @endif
                        >{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</option>
                    @endfor
                </select>
            </div>
        @endif
        <div class="col-xs-{{ $colCount }}">
            <select
                    name="{{ $name }}Month"
                    id="{{ $id or $name }}Month"
                    class="form-control {{ $inputClasses or '' }}"
            >
                @if (isset($includeBlank) && $includeBlank)
                    <option value="">---</option>
                @endif
                @for($i = 1; $i <= 12; $i++)
                    <option value="{{ $i }}"
                            @if(isset($setTime) && $setTime->format('m') == $i)
                            selected
                            @endif
                    >{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</option>
                @endfor
            </select>
        </div>

        <div class="col-xs-{{ $colCount }}">
            <select
                    name="{{ $name }}Year"
                    id="{{ $id or $name }}Year"
                    class="form-control col-xs-6 {{ $inputClasses or '' }}"
            >
                @if (isset($includeBlank) && $includeBlank)
                    <option value="">---</option>
                @endif

                @for($i = $startYear; $i <= $endYear; $i++)
                    <option value="{{ $i }}"
                            @if(isset($setTime) && $setTime->format('Y') == $i)
                            selected
                            @endif
                    >{{ $i }}</option>
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
