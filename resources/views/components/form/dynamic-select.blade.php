<div>
    <label for="{{ $name }}" class="form-label">
        {{ $label }}
    </label>

    <select name="{{ $name }}" id="{{ $name }}" for="{{ $role }}" class="form-select bg-light"
        required>
        <option value="">Pilih data {{ $role === 'teacher' ? 'Guru' : 'Siswa' }}</option>

        @foreach ($users as $user)
            <option value="{{ $user->id }}" @selected((string) old($name, $value) === (string) $user->id)>
                {{ $user->name }}
            </option>
        @endforeach
    </select>
</div>
