<h1>Tambah Dosen</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('dosen.store') }}" method="POST">
    @csrf
    <div>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
    </div>
    <div>
        <label for="nip">NIP:</label>
        <input type="text" name="nip" id="nip" required>
    </div>
    <!-- tambahkan input lainnya -->
    <button type="submit">Simpan</button>
</form>

<a href="{{ route('dosen.index') }}">Kembali ke Daftar Dosen</a>
