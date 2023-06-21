<h1>Daftar Matakuliah</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Kode</th>
            <!-- tambahkan kolom lainnya -->
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($makuls as $makul)
            <tr>
                <td>{{ $makul->nama }}</td>
                <td>{{ $makul->kode }}</td>
                <!-- tambahkan kolom lainnya -->
                <td>
                    <a href="{{ route('makul.edit', $makul->id) }}">Edit</a>
                    <form action="{{ route('makul.delete', $makul->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('makul.create') }}">Tambah Matakuliah</a>
