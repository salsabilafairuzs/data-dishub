<?php

namespace App\Http\Controllers;

use App\Models\RuasJalan;
use Illuminate\Http\Request;

class RuasJalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['ruas-jalan'] = RuasJalan::get();

        return view('master.ruas-jalan.kondisi-ruas-jalan', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('master.ruas-jalan.tambah-ruas-jalan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ruas = new RuasJalan();
        $ruas->ruas= $request['ruas'];
        $ruas->pangkal_ruas= $request['pangkal'];
        $ruas->ujung_ruas= $request['ujung'];
        $ruas->panjang_ruas= $request['panjang'];
        $ruas->lebar_ruas= $request['lebar'];
        $ruas->panjang_jalan_km_akhir= $request['panjang_akhir'];
        $ruas->type_jalan= $request['type'];
        $ruas->kelas_jalan= $request['kelas'];
        $ruas->save();

        return redirect('/ruas-jalan');
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
        $data['ruas'] = RuasJalan::where('id', $id)->first();

        return view('master.ruas-jalan.edit-ruas-jalan', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ruas = RuasJalan::where('id', $id)->first();
        $ruas->ruas= $request['ruas'];
        $ruas->pangkal_ruas= $request['pangkal'];
        $ruas->ujung_ruas= $request['ujung'];
        $ruas->panjang_ruas= $request['panjang'];
        $ruas->lebar_ruas= $request['lebar'];
        $ruas->panjang_jalan_km_akhir= $request['panjang_akhir'];
        $ruas->type_jalan= $request['type'];
        $ruas->kelas_jalan= $request['kelas'];
        $ruas->update();

        return redirect('/ruas-jalan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ruas = RuasJalan::where('id', $id)->first();
        $ruas->delete();

        return redirect('/ruas-jalan');
    }
}
