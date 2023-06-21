<h1>Daftar Mahasiswa</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <!-- tambahkan kolom lainnya -->
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mahasiswas as $mahasiswa)
            <tr>
                <td>{{ $mahasiswa->nama }}</td>
                <td>{{ $mahasiswa->nim }}</td>
                <!-- tambahkan kolom lainnya -->
                <td>
                    <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}">Edit</a>
                    <form action="{{ route('mahasiswa.delete', $mahasiswa->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a>
