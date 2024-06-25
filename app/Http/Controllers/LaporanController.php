<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{

    public function index()
    {
        $laporan = laporan::latest()->get();

        $data = [
            'laporan' => $laporan,
            'title' => 'Title'
        ];

        $laporan = Laporan::all();
        return view('laporan.index', $data);
    }

    public function create()
    {
        $laporan = Laporan::latest()->get();

        $data = [
            'laporan' => $laporan,
            'title' => 'Title'
        ];

        return view('laporan.add', $data);
    }

    public function store(Request $request)
    {

        laporan::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'tanggal_kegiatan' => $request->tanggal_kegiatan,
            'tmpt_pelkegiatan' => $request->tmpt_pelkegiatan,

        ]);

        return redirect()->route('laporan.indexkelola')->with([
            'title' => 'Tambah Donor',
            'icon' => 'success',
            'text' => 'Successfully Tambah Laporan!'
        ]);
    }

    public function detail($id)
    {
        $laporan = laporan::findorfail($id);
        return view('laporan.detail', [
            'laporan' => $laporan,
            'title' => 'Detail laporan'
        ]);
    }


    public function edit($id)
    {
        $laporan = laporan::findorfail($id);

        $data = [
            'laporan' => $laporan,
            'title' => 'Title'
        ];

        return view('laporan.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $laporan = laporan::findorfail($id);
        $laporan->update($request->all());


        return redirect()->route('laporan')->with('success', 'Data Berhasil Update', $id);
    }

    public function destroy($id)
    {
        $laporan = Laporan::find($id);
        if ($laporan) {
            $laporan->delete();
            return response()->json(['success' => 'laporan deleted successfully!']);
        } else {
            return response()->json(['error' => 'laporan not found!'], 404);
        }
    }
}
