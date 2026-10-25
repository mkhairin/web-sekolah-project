<div>
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <select name={{ $name }} class="form-select bg-light" required>
        <option value="">{{ $placeholder }}</option>
        @foreach ($options as $key => $text)
            <option value="{{ $key }}" @selected(old($name, $value) == $key)>
                {{ $text }}
            </option>
        @endforeach
    </select>

    @error($name)
        <div class="text-danger small">
            {{ $message }}
        </div>
    @enderror
</div>
