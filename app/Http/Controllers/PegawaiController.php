<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(Request $request)
    {
        // $search = $request->input('search');

        // if ($search) {
        //     $relawan = Relawan::where('nama', 'LIKE', "%{$search}%")
        //         ->orWhere('umur', 'LIKE', "%{$search}%")
        //         ->orWhere('alamat', 'LIKE', "%{$search}%")
        //         ->orWhere('email', 'LIKE', "%{$search}%")
        //         ->orWhere('no_telp', 'LIKE', "%{$search}%")
        //         ->get();
        // } else {
        //     $relawan = Relawan::latest()->get();
        // }
        return view('pegawai.index', [
            'title' => 'PMI | Pegawai',
            'pegawais' => Pegawai::where([
                ['deleted_at', null]
            ])->get()->all()
        ]);
    }


    public function create()
    {
        return view('pegawai.add', [
            'title' => 'PMI | Add pegawai',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'required|integer',
            'alamat' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_telp' => 'required|string|max:15',
            'awal_masuk' => 'required|date',
            'foto_rel' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);

        // Handle the photo upload if present
        // $photoName = null;
        // if ($request->hasFile('foto_rel')) {
        //     $photo = $request->file('foto_rel');
        //     $photoName = time() . '.' . $photo->getClientOriginalExtension();
        //     $photo->move(public_path('images'), $photoName);
        // }

        $photoName = $request->file('foto_rel')->store('pegawai');

        Pegawai::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'awal_masuk' => $request->awal_masuk,
            'foto_rel' => "storage/$photoName",
            'status' => 'aktif',
        ]);

        return redirect()->route('pegawai.index')->with([
            'title' => 'Add pegawai',
            'icon' => 'success',
            'text' => 'Berhasil Menambahkan pegawai!'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        //
    }
}
