<?php

namespace App\Http\Controllers;

use App\Models\Makul;
use Illuminate\Http\Request;

class MakulController extends Controller
{
    public function index()
    {
        // Mendapatkan semua data matakuliah dari database
        $makuls = Makul::all();

        // Mengirim data matakuliah ke view index.blade.php
        return view('makul.index', compact('makuls'));
    }

    public function create()
    {
        // Menampilkan halaman form untuk membuat matakuliah baru
        return view('makul.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama' => 'required',
            'kode' => 'required',
            // tambahkan validasi untuk atribut lainnya
        ]);

        // Simpan data matakuliah baru ke database
        Makul::create($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/makul')->with('success', 'Matakuliah berhasil ditambahkan');
    }

    public function edit($id)
    {
        // Mengambil data matakuliah berdasarkan ID
        $makul = Makul::find($id);

        // Menampilkan halaman form untuk mengedit data matakuliah
        return view('makul.edit', compact('makul'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama' => 'required',
            'kode' => 'required',
            // tambahkan validasi untuk atribut lainnya
        ]);

        // Update data matakuliah ke database
        Makul::find($id)->update($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/makul')->with('success', 'Data matakuliah berhasil diperbarui');
    }

    public function destroy($id)
    {
        // Hapus data matakuliah dari database
        Makul::destroy($id);

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/makul')->with('success', 'Data matakuliah berhasil dihapus');
    }
}
