<div>
    <label for="{{ $name }}" class="form-label">Nama Siswa</label>
    <select name={{ $name }} class="form-select bg-light" required>
        @foreach ($users as $user)
            <option value="">Pilih data Siswa</option>
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
</div>
