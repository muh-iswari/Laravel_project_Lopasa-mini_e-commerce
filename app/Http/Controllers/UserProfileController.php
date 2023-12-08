<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function show()
    {
        $user = auth()->user(); // Mengambil informasi user yang sedang login

        return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth()->user(); // Mengambil informasi user yang sedang login

        // Validasi data yang diterima dari form update profile
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:user,email,'.$user->id,
            'alamat' => 'required|string|max:255',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan validasi foto profil sesuai kebutuhan
        ]); 

        // Update data profil pengguna
        $user->nama = $validatedData['nama'];
        $user->email = $validatedData['email'];
        $user->alamat = $validatedData['alamat'];

        // Update foto profil jika ada
        if ($request->hasFile('profile_picture')) {
            $image = $request->file('profile_picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/profile_images'), $imageName);
            $user->profile_picture = $imageName;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
    }
}
