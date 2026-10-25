<div>
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input name="{{ $name }}" type="{{ $type }}" id="{{ $name }}" class="form-control bg-light" placeholder="{{ $placeholder }}"
        value="{{ old($name, $value) }}" @required($required)>

    @error($name)
        <div class="text-danger small">
            {{ $message }}
        </div>
    @enderror
</div>
