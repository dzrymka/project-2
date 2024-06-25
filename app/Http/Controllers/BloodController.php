<?php

namespace App\Http\Controllers;

use App\Models\Blood;
use App\Models\BloodStock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BloodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('blood.index', [
            'title' => 'PMI | Bloods',
            'bloods' => Blood::where([
                ['deleted_at', null]
            ])->get()->all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blood.add', [
            'title' => 'PMI | Add Blood',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $id = Blood::insertGetId([
            'name' => $request->name,
            'description' => $request->description,
            'created_at' => now('Asia/Jakarta')
        ]);

        BloodStock::insert([
            'blood_id' => $id,
            'qty' => 0,
            'created_at' => now('Asia/Jakarta')
        ]);

        return redirect()->route('blood.index')->with([
            'title' => 'Add Blood',
            'icon' => 'success',
            'text' => 'Successfully Added new Blood!'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Blood $blood)
    {
        $search = $request->input('search');

        if ($search) {
            $donors = $blood->donor()->where(function ($query) use ($search) {
                $query->where('nik', 'LIKE', "%{$search}%")
                    ->orWhere('name', 'LIKE', "%{$search}%")
                    ->orWhere('age', 'LIKE', "%{$search}%")
                    ->orWhere('qty', 'LIKE', "%{$search}%")
                    ->orWhere('ukuran_kantong', 'LIKE', "%{$search}%")
                    ->orWhere('expired', 'LIKE', "%{$search}%");
            })->get();
        } else {
            $donors = $blood->donor;
        }

        return view('blood.detail', [
            'title' => 'PMI | Blood Detail',
            'blood' => $blood,
            'donors' => $donors,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blood $blood)
    {
        return view('blood.edit', [
            'title' => 'PMI | Blood Edit',
            'blood' => $blood
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blood $blood)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $blood->name = $request->name;
        $blood->description = $request->description;
        $blood->save();

        return redirect()->route('blood.index')->with([
            'title' => 'Edit Blood',
            'icon' => 'success',
            'text' => 'Successfully Edited Blood!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blood $blood)
    {
        //
    }
}
