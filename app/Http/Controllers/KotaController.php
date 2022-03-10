<?php

namespace App\Http\Controllers;

use App\models\Kota;
use Illuminate\Http\Request;

use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

// Get semua data



class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinces = Province::all();
        return view('kota.index',compact('provinces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getkabupaten(request $request)
    {
        $id_provinsi = $request->id_provinsi;

        $kabupatens = Regency::where('province_id', $id_provinsi)->get();

        foreach ($kabupatens as $kabupaten){
            echo "<option value='$kabupaten->id'>$kabupaten->name</option>";
        }
    }

    public function getkecamatan(request $request)
    {
        $id_kabupaten = $request->id_kabupaten;

        $kecamatans = District::where('regency_id', $id_kabupaten)->get();

        foreach ($kecamatans as $kecamatan){
            echo "<option value='$kecamatan->id'>$kecamatan->name</option>";
        }
    }


    public function getdesa(request $request)
    {
        $id_kecamatan = $request->id_kecamatan;

        $desas = Village::where('district_id', $id_kecamatan)->get();

        foreach ($desas as $desa){
            echo "<option value='$desa->id'>$desa->name</option>";
        }
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
     * @param  \App\models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function show(Kota $kota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function edit(Kota $kota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kota $kota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kota $kota)
    {
        //
    }
}
