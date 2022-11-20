<?php

namespace App\Http\Controllers;

use App\Models\DetailPemain;
use Illuminate\Http\Request;

class DetailPemainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Raw Query
    // SELECT * FROM pemain; --> mengambil semua data yg ada pada tabel pemain
    // Query Builder
    // DB::table('pemain')->all();
    // Eloquent
    // Pemain::all();

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailPemain  $detailPemain
     * @return \Illuminate\Http\Response
     */
    public function show(DetailPemain $detailPemain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailPemain  $detailPemain
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailPemain $detailPemain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailPemain  $detailPemain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailPemain $detailPemain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailPemain  $detailPemain
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailPemain $detailPemain)
    {
        //
    }
}
