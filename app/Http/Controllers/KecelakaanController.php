<?php

namespace App\Http\Controllers;

use App\Models\Kecelakaan;
use Illuminate\Http\Request;

class KecelakaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['kecelakaan'] = Kecelakaan::get();

        return view('master.kecelakaan.kecelakaan',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('master.kecelakaan.tambah-kecelakaan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $kecelakaan = new Kecelakaan();
        $kecelakaan->tahun = $request['tahun'];
        $kecelakaan->bulan = $request['bulan'];
        $kecelakaan->jml_kejadian = $request['jml_kejadian'];
        $kecelakaan->jml_korban_meninggal = $request['jml_korban_meninggal'];
        $kecelakaan->jml_korban_luka_berat = $request['jml_korban_luka_berat'];
        $kecelakaan->jml_korban_luka_ringan = $request['jml_korban_luka_ringan'];
        $kecelakaan->kerugian_material = $request['kerugian_material'];
        $kecelakaan->save();

        return redirect('/kecelakaan');
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
        $data['kecelakaan'] = Kecelakaan::where('id', $id)->first();

        return view('master.kecelakaan.edit-kecelakaan', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kecelakaan = Kecelakaan::where('id', $id)->first();
        $kecelakaan->tahun = $request['tahun'];
        $kecelakaan->bulan = $request['bulan'];
        $kecelakaan->jml_kejadian = $request['jml_kejadian'];
        $kecelakaan->jml_korban_meninggal = $request['jml_korban_meninggal'];
        $kecelakaan->jml_korban_luka_berat = $request['jml_korban_luka_berat'];
        $kecelakaan->jml_korban_luka_ringan = $request['jml_korban_luka_ringan'];
        $kecelakaan->kerugian_material = $request['kerugian_material'];
        $kecelakaan->update();

        return redirect('/kecelakaan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kecelakaan = Kecelakaan::where('id', $id)->first();
        $kecelakaan->delete();

        return redirect('/kecelakaan');
    }
}
