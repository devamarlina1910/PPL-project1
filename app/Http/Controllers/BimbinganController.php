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
    public function create()
{
    return view('bimbingan.create');
}

public function store(Request $request)
{
    $request->validate([
        'mahasiswa' => 'required|string|max:255',
        'nim' => 'required|integer',
        'status' => 'required|in:belum mulai,proses,selesai',
        'tanggal_bimbingan' => 'required|date',
        'aktif' => 'required|boolean',
    ]);

    Bimbingan::create([
        'mahasiswa' => $request->mahasiswa,
        'nim' => $request->nim,
        'status' => $request->status,
        'tanggal_bimbingan' => $request->tanggal_bimbingan,
        'aktif' => $request->aktif,
    ]);

    return redirect()->route('bimbingan.index')->with('success', 'Data bimbingan berhasil disimpan.');
}


}