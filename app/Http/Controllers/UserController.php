<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Menampilkan semua data suplier
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }
    //Menampilkan form untuk membuat user baru
    public function create()
    {
        return view('user.create');
    }
    // Menyimpan data user ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_user' => 'required|integer',
            'nama' => 'required|string|max:255',
            'username' => 'required|string',
            'password' => 'required|string|max:255',
            'level' => 'required|string|max:255',
        ]);
        User::create($validated);
        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan.');
    }

    // Menghapus data user dari database
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Data User berhasil dihapus.');
    }

    // Show the edit form for a specific supplier
    public function edit($id)
    {
        $user = User::find($id);

        // Check if the supplier exists
        if (!$user) {
            return redirect()->route('user.index')->with('error', 'User not found.');
        }
        return view('user.edit', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        // Validasi data request jika diperlukan
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string',
            'password' => 'required|string|max:255',
            'level' => 'required|string|max:255',
        ]);

        // Update data suplier
        $user->update($validatedData);

        return redirect()->route('user.index')->with('success', 'User data successfully updated.');
    }
}