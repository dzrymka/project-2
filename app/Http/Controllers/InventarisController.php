<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use App\Models\InventarisType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class InventarisController extends Controller
{
    public function index()
    {
        $inventaris = Inventaris::with('inventaristype')->paginate(2);
        $title = 'Inventaris List';
        $inventaris = Inventaris::all();
        return view('inventaris.index', compact('inventaris', 'title'));
    }


    public function create()
    {
        $types = InventarisType::all();
        $title = 'Create Inventaris';
        return view('inventaris.add', compact('types', 'title'));
    }

    public function store(Request $request)
    {
        // Tambahkan 'inventaristype_id' ke dalam validasi dan pastikan nilainya tidak kosong
        $request->validate([
            'kode_bar' => 'required|max:255',
            'nama_bar' => 'required|max:255',
            'inventaristype_id' => 'required',
            'des_barang' => 'required',
            'jumlah_bar' => 'required|numeric',
            'foto_bar' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Tambahkan 'inventaristype_id' ke dalam $data
        $data = $request->only(['kode_bar', 'nama_bar', 'inventaristype_id', 'des_barang', 'jumlah_bar', 'status']);

        // Setelah itu, lanjutkan dengan kode yang sama


        if ($request->hasFile('foto_bar')) {
            $photoName = $request->file('foto_bar')->store('inventaris', 'public');
            $data['foto_bar'] = "storage/$photoName";
        } else {
            $data['foto_bar'] = null;
        }

        $data['status'] = "ready";

        Inventaris::create($data);

        return redirect()->route('inventaris.index')->with('success', 'Inventaris created successfully.');
    }


    public function show($inventaris)
    {
        $inventaris = Inventaris::findOrFail($inventaris);
        return view('inventaris.detail', compact('inventaris'));
    }

    public function edit($id)
    {
        $inventaris = Inventaris::findOrFail($id);
        $jenis_inventaris = InventarisType::all(); // Ambil semua jenis inventaris dari model InventarisType
        $title = 'Edit Inventaris'; // Tambahkan variabel title
        return view('inventaris.edit', compact('inventaris', 'jenis_inventaris', 'title')); // Teruskan variabel ke view
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'kode_bar' => 'required|max:255',
            'nama_bar' => 'required|max:255',
            'inventaristype_id' => 'required',
            'des_barang' => 'required',
            'jumlah_bar' => 'required|numeric',
            'foto_bar' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('foto_bar')) {
            $photoName = $request->file('foto_bar')->store('inventaris', 'public');
            $validatedData['foto_bar'] = "storage/$photoName";
        } else {
            $validatedData['foto_bar'] = null;
        }

        $validatedData['status'] = "ready";

        Inventaris::whereId($id)->update($validatedData);

        return redirect()->route('inventaris.index')->with('success', 'Inventaris updated successfully.');
    }

    public function destroy($id)
    {
        $inventaris = Inventaris::find($id);
        if ($inventaris) {
            $inventaris->delete();
            return response()->json(['success' => 'Inventaris deleted successfully!']);
        } else {
            return response()->json(['error' => 'inventaris not found!'], 404);
        }
    }
}
