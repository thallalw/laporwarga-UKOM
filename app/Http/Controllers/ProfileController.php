<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();

        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'nullable|string|min:4', // Nullable agar tidak wajib diisi jika hanya ingin ganti nama
        ]);

        // Update nama
        $user->name = $request->name;

        // Jika form password diisi, enkripsi dan simpan yang baru
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return back()->with('success', 'Profil dan kata sandi berhasil diperbarui!');
    }
}