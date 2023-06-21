<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Mendapatkan semua data mahasiswa dari database
        $mahasiswas = Mahasiswa::all();

        // Mengirim data mahasiswa ke view index.blade.php
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        // Menampilkan halaman form untuk membuat mahasiswa baru
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            // tambahkan validasi untuk atribut lainnya
        ]);

        // Simpan data mahasiswa baru ke database
        Mahasiswa::create($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/mahasiswa')->with('success', 'Mahasiswa berhasil ditambahkan');
    }

    public function edit($id)
    {
        // Mengambil data mahasiswa berdasarkan ID
        $mahasiswa = Mahasiswa::find($id);

        // Menampilkan halaman form untuk mengedit data mahasiswa
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            // tambahkan validasi untuk atribut lainnya
        ]);

        // Update data mahasiswa ke database
        Mahasiswa::find($id)->update($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil diperbarui');
    }

    public function destroy($id)
    {
        // Hapus data mahasiswa dari database
        Mahasiswa::destroy($id);

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil dihapus');
    }
}
