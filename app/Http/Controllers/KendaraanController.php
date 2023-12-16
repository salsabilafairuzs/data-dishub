<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['kendaraan'] = Kendaraan::get(); //mengambil seluruh data di model kendaraan dimana model kendaraan adalah tabel di database yang bernama kendaraans

        return view('master.kendaraan.kendaraan', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('master.kendaraan.tambah-kendaraan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $kendaraan = new Kendaraan();
        $kendaraan->jenis_kendaraan= $request['kendaraan'];
        $kendaraan->jumlah_unit = $request['jml_unit'];
        $kendaraan->tahun = $request['tahun'];
        $kendaraan->save();

        return redirect('/kendaraan');
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
        $data['kendaraan'] = Kendaraan::where('id', $id)->first();

        return view('master.kendaraan.edit-kendaraan', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kendaraan= Kendaraan::where('id', $id)->first();
        $kendaraan->jenis_kendaraan= $request['kendaraan'];
        $kendaraan->jumlah_unit = $request['jml_unit'];
        $kendaraan->tahun = $request['tahun'];
        $kendaraan->update();

        return redirect('/kendaraan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kendaraan= Kendaraan::where('id', $id)->first();
        $kendaraan->delete();

        return redirect('/kendaraan');
    }
}
