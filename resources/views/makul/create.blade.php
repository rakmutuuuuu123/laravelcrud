<h1>Tambah Matakuliah</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('makul.store') }}" method="POST">
    @csrf
    <div>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
    </div>
    <div>
        <label for="kode">Kode:</label>
        <input type="text" name="kode" id="kode" required>
    </div>
    <!-- tambahkan input lainnya -->
    <button type="submit">Simpan</button>
</form>

<a href="{{ route('makul.index') }}">Kembali ke Daftar Matakuliah</a>
