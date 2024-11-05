<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    //Menampilkan semua data BarangMasuk
    public function index()
    {
        $BarangMasuks = BarangMasuk::all();
        return view('BarangMasuk.index', compact('BarangMasuks'));
    }

    //Menampilkan form untuk membuat BarangMasuk baru
    public function create()
    {
        return view('BarangMasuk.create');
    }

    // Menyimpan data BarangMasuk ke database
    public function store(Request $request) {
        $validated = $request->validate([
            'id_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:255',
            'jml_masuk' => 'nullable|string',
            'jml_keluar' => 'nullable|string|max:15',
            'total_barang' => 'nullable|integer',
        ]);

        BarangMasuk::create($validated);

        return redirect()->route('BarangMasuk.index')->with('success', 'BarangMasuk berhasil ditambahkan.');
    }

    // Menghapus data BarangMasuk dari database
    public function destroy(BarangMasuk $BarangMasuk)
    {
        $BarangMasuk->delete();

        return redirect()->route('BarangMasuk.index')->with('success', 'Data BarangMasuk berhasil dihapus.');
    }

    // Show the edit form for a specific supplier
    public function edit($id)
    {
        $BarangMasuk = BarangMasuk::find($id);

        // Check if the BarangMasuk exists
        if (!$BarangMasuk) {
            return redirect()->route('BarangMasuk.index')->with('error', 'BarangMasuk not found.');
        }
        return view('BarangMasuk.edit', compact('BarangMasuk'));
    }

    public function update(BarangMasuk $BarangMasuk, Request $request)
    {
        // Validasi data request jika diperlukan
        $validatedData = $request->validate([
            'id_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:255',
            'jml_masuk' => 'nullable|string',
            'jml_keluar' => 'nullable|string|max:15',
            'total_barang' => 'nullable|integer',
        ]);

        // Update data BarangMasuk
        $BarangMasuk->update($validatedData);

        return redirect()->route('BarangMasuk.index')->with('success', 'BarangMasuk data successfully updated.');
    }
}
