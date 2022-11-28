<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TestingController extends Controller
{

    function testing()
    {

        return view('testing');
    }

    function testing2()
    {
        return view('testing2');
    }

    function nampilin(Request $request)
    {
        $param = $request->get('nama');

        $send = "berhasil";
        // return view('namaFile', compact('data'));

        // return response()->json(array(
        //     'send' => $send
        // ), 200);

        // -------------------------------

        // return response()->json(array(
        //     'send' => "berhasil"
        // ), 200);

        DB::table('movie')
            ->where('idmovie', 1)
            ->update(['skor' => 0, 'sinopsis' => 'au ah']);

        $data = DB::table('movie')->where('idmovie', 1)->get();

        return response()->json(array(
            'send' => "update success",
            'data' => $data[0]->skor,
            'nama' => $param
        ), 200);
    }

    function show()
    {
        // select * from movie
        $data = DB::table('movie')->get();
        // dd($data);
        // $data = $data[0]->skor;
        return view('namaFile', compact('data'));
    }
}
