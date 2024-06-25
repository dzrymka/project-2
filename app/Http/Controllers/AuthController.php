<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function register()
    {
        return view('auth.register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:100',
            'email' => ['required', 'unique:users', 'email:dns'],
            'password' => ['required', 'min:5', 'max:255'],
            'role' => ['required', 'in:admin,pegawai,relawan,keuangan']
        ]);

        $validatedData['password'] = Hash::make($request->password);

        User::create($validatedData);

        return redirect('/login')->with('toats_success', 'Berhasil Registrasi! Harap Login Sekarang');
    }


    public function login()
    {
        if (Auth::check()) {
        } else {
            return view('auth.login', [
                'title' => 'Login'
            ]);
        }
        return redirect('/admin')->with('success', 'Anda Berhasil Login');
        return response()->json([
            'title' => 'Loginss',
            'icon' => 'success',
            'text' => 'Berhasil Login!'
        ]);
    }

    public function forgotpassword()
    {
        if (Auth::check()) {
            return redirect('/admin');
        } else {
            return view('auth.forgotpassword', [
                'title' => 'Forgot Password'
            ]);
        }
    }
    public function credentials(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            return redirect('admin');
        } else {
            return redirect('login')->withErrors('username dan password tidak sesuai')->withInput();
        }

        // if (Auth::attempt($credentials, $request)) {
        //     $request->session()->regenerate();

        //     // Ambil pengguna yang berhasil login
        //     $user = Auth::user();

        //     // Redirect sesuai dengan role pengguna
        //     switch ($user->role) {
        //         case 'admin':
        //             return redirect()->intended('/admin');
        //             break;
        //         case 'pegawai':
        //             return redirect()->intended('/pegawai');
        //             break;
        //         case 'relawan':
        //             return redirect()->intended('/relawan');
        //             break;
        //         case 'keuangan':
        //             return redirect()->intended('/keuangan');
        //             break;
        //         default:
        //             return redirect('/login')->with('error', 'Role tidak valid');
        //             break;
        //     }
        // }

    }



    public function logout(Request $request)
    {
        Auth::logout();

        session()->flush();

        return response()->json([
            'title' => 'Logout',
            'icon' => 'success',
            'text' => 'Berhasil logout!'
        ]);
    }
}
