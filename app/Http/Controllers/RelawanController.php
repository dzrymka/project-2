<?php

namespace App\Http\Controllers;

use App\Models\Relawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class RelawanController extends Controller
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
        return view('relawan.index', [
            'title' => 'PMI | Relawan',
            'relawans' => Relawan::where([
                ['deleted_at', null]
            ])->get()->all()
        ]);
    }


    public function create()
    {
        return view('relawan.add', [
            'title' => 'PMI | Add Relawan',
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

        $photoName = $request->file('foto_rel')->store('relawan');

        Relawan::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'awal_masuk' => $request->awal_masuk,
            'foto_rel' => "storage/$photoName",
            'status' => 'aktif',
        ]);

        return redirect()->route('relawan.index')->with([
            'title' => 'Add Relawan',
            'icon' => 'success',
            'text' => 'Berhasil Menambahkan Relawan!'
        ]);
    }

    public function show(Relawan $relawan)
    {
        return view('relawan.detail', [
            'title' => 'PMI | Relawan Detail',
            'relawan' => $relawan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Relawan $relawan)
    {
        return view('relawan.edit', [
            'title' => 'PMI | Relawan Edit',
            'relawan' => $relawan
        ]);
    }

    public function update(Request $request, Relawan $relawan)
    {
        $rules = [
            'nama' => 'required|string|max:255',
            'umur' => 'required|integer',
            'alamat' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_telp' => 'required|string|max:15',
            'awal_masuk' => 'required|date',
            'status' => 'required|string|max:15',
            'foto_rel' => ['image', 'mimes:png,jpg,jpeg', 'max:5048']
        ];
        if ($request->file('foto_rel')) {
            $validatedData['foto_rel'] = $request->file('foto_rel')->store('relawan-images');
        }
        $validatedData = $request->validate($rules);

        $relawan->update($validatedData);  // Update the relawan directly

        return redirect()->route('relawan.index')->with([
            'title' => 'Edit Relawan',
            'icon' => 'success',
            'text' => 'Berhasil Mengupdate Relawan!'
        ]);
    }


    public function destroy($id)
    {
        $relawan = Relawan::find($id);
        if ($relawan) {
            $relawan->delete();
            return response()->json(['success' => 'Relawan deleted successfully!']);
        } else {
            return response()->json(['error' => 'Relawan not found!'], 404);
        }
    }
}
