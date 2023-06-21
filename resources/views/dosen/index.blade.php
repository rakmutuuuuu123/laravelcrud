<h1>Daftar Dosen</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>NIP</th>
            <!-- tambahkan kolom lainnya -->
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dosens as $dosen)
            <tr>
                <td>{{ $dosen->nama }}</td>
                <td>{{ $dosen->nip }}</td>
                <!-- tambahkan kolom lainnya -->
                <td>
                    <a href="{{ route('dosen.edit', $dosen->id) }}">Edit</a>
                    <form action="{{ route('dosen.delete', $dosen->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('dosen.create') }}">Tambah Dosen</a>
