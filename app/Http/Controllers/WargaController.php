<?php

namespace App\Http\Controllers;

use App\models\Warga;
use App\models\Kota;
use App\User;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $kota = Kota::all();
        $data = Warga::where('user_id',$id)->first();
        // dd($data->id);
        return view('warga.profile',compact('data','kota'));
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
     * @param  \App\models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function show(Warga $warga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function edit(Warga $warga,$id)
    {
        $data = Warga::find($id);
        return view('warga.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Warga  $warga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warga $warga)
    {
        //
    }
}
