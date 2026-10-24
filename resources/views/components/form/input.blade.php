<div>
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" class="form-control bg-light" placeholder="{{ $placeholder }}"
        value="{{ old($name, $value) }}" @required($required)>
</div>
