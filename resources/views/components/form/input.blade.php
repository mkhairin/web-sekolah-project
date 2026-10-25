<div>
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" class="form-control bg-light" placeholder="{{ $placeholder }}"
        value="{{ old($name, $value) }}" @required($required)>

    @error($name)
        <div class="text-danger small">
            {{ $message }}
        </div>
    @enderror
</div>
