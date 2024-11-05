<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use Illuminate\Http\Request;

class StokController extends Controller
{
    //Menampilkan semua data stok
    public function index()
    {
        $stoks = Stok::all();
        return view('stok.index', compact('stoks'));
    }
    //Menampilkan form untuk membuat stok baru
    public function create()
    {
        return view('stok.create');
    }

    // Menyimpan data Stok ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:255',
            'jml_masuk' => 'nullable|string',
            'jml_keluar' => 'nullable|string|max:15',
            'total_barang' => 'nullable|integer',
        ]);

        Stok::create($validated);
        return redirect()->route('stok.index')->with('success', 'Stok berhasil ditambahkan.');
    }

    // Menghapus data Stok dari database
    public function destroy(Stok $stok)
    {
        $stok->delete();

        return redirect()->route('stok.index')->with('success', 'Data Stok berhasil dihapus.');
    }

    // Show the edit form for a specific supplier
    public function edit($id)
    {
        $stok = Stok::find($id);

        // Check if the stok exists
        if (!$stok) {
            return redirect()->route('stok.index')->with('error', 'Stok not found.');
        }
        return view('stok.edit', compact('stok'));
    }

    public function update(Stok $stok, Request $request)
    {
        // Validasi data request jika diperlukan
        $validatedData = $request->validate([
            'id_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:255',
            'jml_masuk' => 'nullable|string',
            'jml_keluar' => 'nullable|string|max:15',
            'total_barang' => 'nullable|integer',
        ]);

        // Update data stok
        $stok->update($validatedData);

        return redirect()->route('stok.index')->with('success', 'Stok data successfully updated.');
    }
}
