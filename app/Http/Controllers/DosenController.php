<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        // Mendapatkan semua data dosen dari database
        $dosens = Dosen::all();

        // Mengirim data dosen ke view index.blade.php
        return view('dosen.index', compact('dosens'));
    }

    public function create()
    {
        // Menampilkan halaman form untuk membuat dosen baru
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            // tambahkan validasi untuk atribut lainnya
        ]);

        // Simpan data dosen baru ke database
        Dosen::create($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/dosen')->with('success', 'Dosen berhasil ditambahkan');
    }

    public function edit($id)
    {
        // Mengambil data dosen berdasarkan ID
        $dosen = Dosen::find($id);

        // Menampilkan halaman form untuk mengedit data dosen
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            // tambahkan validasi untuk atribut lainnya
        ]);

        // Update data dosen ke database
        Dosen::find($id)->update($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/dosen')->with('success', 'Data dosen berhasil diperbarui');
    }

    public function destroy($id)
    {
        // Hapus data dosen dari database
        Dosen::destroy($id);

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/dosen')->with('success', 'Data dosen berhasil dihapus');
    }
}
