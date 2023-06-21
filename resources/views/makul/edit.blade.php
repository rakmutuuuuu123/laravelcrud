<h1>Edit Matakuliah</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('makul.update', $makul->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{ $makul->nama }}" required>
    </div>
    <div>
        <label for="kode">Kode:</label>
        <input type="text" name="kode" id="kode" value="{{ $makul->kode }}" required>
    </div>
    <!-- tambahkan input lainnya -->
    <button type="submit">Simpan</button>
</form>

<a href="{{ route('makul.index') }}">Kembali ke Daftar Matakuliah</a>
