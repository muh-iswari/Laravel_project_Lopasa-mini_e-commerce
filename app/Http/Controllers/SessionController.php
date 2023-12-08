<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request-> email,
            'password' => $request-> password,
        ];
        

        if (Auth::attempt($infologin)) {
            $user = Auth::user();
        
            if ($user->role == 1) {
                // Jika peran adalah admin, arahkan ke tampilan admin
                return view('admin');
            } else {
                // Selain itu (peran bukan admin), arahkan ke tampilan home biasa
                $products = Product::all();
                return view('home', compact('products'))->with('success', 'Berhasil login');
            }
        } else {
            return redirect('login')->withErrors('Username dan password yang dimasukkan tidak valid');
        }
        

    }

    function logout(){
        Auth::logout();
        return redirect('')->with('success', 'Berhasil logout');
    }

    function register() {
        return view('register');
    }

    function create(Request $request) {
        Session::flash('nama', $request->nama);
        Session::flash('email', $request->email);
        Session::flash('alamat', $request->alamat);
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required|email|unique:user',
            'password' => 'required|min:6',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silahkan Masukkan email yang valid',
            'alamat.required' => 'Alamat wajib diisi',
            'alamat.unique' => 'Email sudah pernah digunakan, silahkan pilih email yang lain',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minimum password yang diizinkan 6 karakter',
        ]);

        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'password' => Hash::make($request->password),
        ];

        User::create($data);

        $infologin = [
            'email' => $request-> email,
            'password' => $request-> password,
        ];

        if (Auth::attempt($infologin)) {
            $products = Product::all(); 
            return view('home', compact('products'))->with('success', Auth::user()->name .'Berhasil login');
        } else {
            return redirect('login')->withErrors('Username dan password yang dimasukkan tidak valid');
        }

        return view('home');
    }
}
