<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pemain;
use Illuminate\Support\Facades\DB;

class DaftarPemainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kriteria = DB::table('kriterias')
        ->join('pemains', 'kriterias.id_pemain', '=', 'pemains.id')
        ->select('pemains.id', 'pemains.nama', 'kriterias.nilai_pemain_menyerang', 
        'kriterias.nilai_pemain_tengah', 'kriterias.nilai_pemain_bertahan')->get();
        // // return $kriteria;
        // if(count($kriteria < 0)){
        //     return view('daftar-pemain')->with('kriteria', $kriteria);
        // }
        // dd($kriteria);
        if($kriteria->isEmpty()){
            // return "kosong";
            return view('daftar-pemain')->with('kriteria', $kriteria);
        }
        else{
            // return "ada";
            return view('daftar-pemain')->with('kriteria', $kriteria);
        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
