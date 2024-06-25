<?php

namespace App\Http\Controllers;

use App\Models\Blood;
use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('donor.index', [
            'title' => 'PMI | Donor',
            'donors' => Donor::where([
                ['deleted_at', null]
            ])->get()->all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('donor.add', [
            'title' => 'PMI | Add Donor',
            'bloods' => Blood::where([
                ['deleted_at', null]
            ])->get()->all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|numeric',
            'blood' => 'required|not_in:pilih',
            'name' => 'required',
            'phone' => 'required|numeric',
            'ukuran_kantong' => 'required|numeric',
            'age' => 'required|numeric',
            'address' => 'required',
            'qty' => 'required|numeric',
            'ukuran_kantong' => 'required|numeric',
            'expired' => 'required',
        ]);

        $blood_selected = Blood::find($request->blood);

        Donor::insert([
            'nik' => $request->nik,
            'name' => $request->name,
            'phone' => $request->phone,
            'ukuran_kantong' => $request->ukuran_kantong,
            'age' => $request->age,
            'blood_id' => $request->blood,
            'address' => $request->address,
            'qty' => $request->qty,
            'ukuran_kantong' => $request->ukuran_kantong,
            'expired' => $request->expired
        ]);

        $blood_selected->blood_stock->qty += $request->qty;
        $blood_selected->blood_stock->save();

        return redirect()->route('donor.index')->with([
            'title' => 'Add Donor',
            'icon' => 'success',
            'text' => 'Successfully Added Donor!'
        ]);
    }

    public function show(Donor $donor)
    {
        return view('donor.detail', [
            'title' => 'PMI | Donor Detail',
            'donor' => $donor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donor $donor)
    {
        return view('donor.edit', [
            'title' => 'PMI | Blood Edit',
            'donor' => $donor
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donor $donor)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $donor->name = $request->name;
        $donor->description = $request->description;
        $donor->save();

        return redirect()->route('donor.index')->with([
            'title' => 'Edit Donor',
            'icon' => 'success',
            'text' => 'Successfully Edited Donor!'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donor $donor)
    {
        //
    }
}
