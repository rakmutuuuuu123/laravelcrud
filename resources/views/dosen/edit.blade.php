<h1>Edit Dosen</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{ $dosen->nama }}" required>
    </div>
    <div>
        <label for="nip">NIP:</label>
        <input type="text" name="nip" id="nip" value="{{ $dosen->nip }}" required>
    </div>
    <!-- tambahkan input lainnya -->
    <button type="submit">Simpan</button>
</form>

<a href="{{ route('dosen.index') }}">Kembali ke Daftar Dosen</a>
