<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bimbingan;

class BimbinganController extends Controller
{
    // Method untuk menampilkan seluruh data bimbingan
    public function index()
    {
        $bimbingan = Bimbingan::with('mahasiswas')->get(); // Memuat mahasiswa terkait
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
        $request->validate([
            'mahasiswa' => 'required|string|max:255',
            'nim' => 'required|integer',
            'status' => 'required|in:belum mulai,proses,selesai',
            'tanggal_bimbingan' => 'required|date',
            'aktif' => 'required|boolean',
        ]);

        Bimbingan::create($request->all());

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

    // Method untuk menampilkan detail bimbingan
    public function show($id)
{
    $bimbingan = Bimbingan::with('mahasiswa')->findOrFail($id);
    return view('bimbingan.show', compact('bimbingan'));
}

}