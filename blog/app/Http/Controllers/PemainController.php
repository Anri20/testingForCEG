<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PemainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $semua_pemain = Pemain::all();
        return view('pemain.index', compact('semua_pemain'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pemain.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $gender_pemain = $request['pemain_gender'];

        $pemain_baru = new Pemain();
        $pemain_baru->nama = $request['pemain_name'];
        $pemain_baru->gender = $gender_pemain;
        $pemain_baru->save();

        $status = "Berhasil menambahkan data baru";
        return redirect()->route('pemain.index')->with('status', $status);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemain  $pemain
     * @return \Illuminate\Http\Response
     */
    public function show(Pemain $pemain_tertentu)
    {
        // $pemain_tertentu = DB::table('pemain')->where('idpemain', $idpemain);
        return view('pemain.detail', compact('pemain_tertentu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemain  $pemain
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemain $pemain)
    {
        //
        return view('pemain.edit', compact('pemain'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pemain  $pemain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemain $pemain)
    {
        $nama_baru = $request['pemain_name'];
        $gender_baru = $request['pemain_gender'];
        // Set untuk masuk database
        $pemain->nama = $nama_baru;
        $pemain->gender = $gender_baru;
        $pemain->save();

        $status = "Berhasil update";
        return redirect()->route('pemain.index')->with('status', $status);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemain  $pemain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemain $pemain)
    {
        $pemain->delete();
        $status = "Berhasil dihapus";
        return redirect()->route('pemain.index')->with('status', $status);
    }
}
