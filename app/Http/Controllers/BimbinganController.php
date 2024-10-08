<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bimbingan;

class BimbinganController extends Controller
{
    // Method untuk menampilkan seluruh data bimbingan
    public function index()
    {
        $bimbingan = Bimbingan::all();
        return view('bimbingan.index', compact('bimbingan'));
    }

    // Method untuk menampilkan form pembuatan bimbingan
    public function create()
    {
        return view('bimbingan.create');
    }

    // Method untuk menyimpan data bimbingan baru
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'mahasiswa' => 'required|string|max:255',
            'nim' => 'required|integer',
            'status' => 'required|in:belum mulai,proses,selesai',
            'tanggal_bimbingan' => 'required|date',
            'aktif' => 'required|boolean',
        ]);

        // Debug: Lihat isi request
        

        // Simpan data ke dalam database
        Bimbingan::create([
            'mahasiswa' => $request->mahasiswa,
            'nim' => $request->nim,
            'status' => $request->status,
            'tanggal_bimbingan' => $request->tanggal_bimbingan,
            'aktif' => $request->aktif,
        ]);

        return redirect()->route('bimbingan.index')->with('success', 'Data bimbingan berhasil disimpan.');
    }

    // Method untuk menampilkan form edit bimbingan
    public function edit($id)
    {
        $bimbingan = Bimbingan::findOrFail($id);
        return view('bimbingan.edit', compact('bimbingan'));
    }

    // Method untuk memperbarui data bimbingan
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'mahasiswa' => 'required|string|max:255',
            'nim' => 'required|integer',
            'status' => 'required|in:belum mulai,proses,selesai',
            'tanggal_bimbingan' => 'required|date',
            'aktif' => 'required|boolean',
        ]);

        $bimbingan = Bimbingan::findOrFail($id);
        $bimbingan->update($validated);

        return redirect()->route('bimbingan.index')->with('success', 'Bimbingan berhasil diperbarui.');
    }

    // Method untuk menghapus bimbingan
    public function destroy($id)
    {
        $bimbingan = Bimbingan::findOrFail($id);
        $bimbingan->delete();
        
        return redirect()->route('bimbingan.index')->with('success', 'Bimbingan berhasil dihapus.');
    }
}