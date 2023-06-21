<h1>Edit Mahasiswa</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{ $mahasiswa->nama }}" required>
    </div>
    <div>
        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" value="{{ $mahasiswa->nim }}" required>
    </div>
    <!-- tambahkan input lainnya -->
    <button type="submit">Simpan</button>
</form>

<a href="{{ route('mahasiswa.index') }}">Kembali ke Daftar Mahasiswa</a>
