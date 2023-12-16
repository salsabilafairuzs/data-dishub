<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LokasiFlashing;

class LokasiFlashingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['flashing'] = LokasiFlashing::get();

        return view('master.lokasi-flashing.lokasi-flashing', $data);
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('master.lokasi-flashing.tambah-lokasi-flashing');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $flashing = new LokasiFlashing();
        $flashing->nama_jalan= $request['jalan'];
        $flashing->status_jalan= $request['status'];
        $flashing->lokasi= $request['lokasi'];
        $flashing->sistem_listrik= $request['sistem_listrik'];
        $flashing->save();

        return redirect('/flashing');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['flashing'] = LokasiFlashing::where('id', $id)->first();

        return view('master.lokasi-flashing.edit-lokasi-flashing', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request;

        $flashing = LokasiFlashing::where('id', $id)->first();
        $flashing->nama_jalan= $request['jalan'];
        $flashing->status_jalan= $request['status'];
        $flashing->lokasi= $request['lokasi'];
        $flashing->sistem_listrik= $request['sistem_listrik'];
        $flashing->update();

        return redirect('/flashing');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $flashing = LokasiFlashing::where('id', $id)->first();
        $flashing->delete();

        return redirect('/flashing');
    }
}

