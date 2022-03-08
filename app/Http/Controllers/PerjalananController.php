<?php

namespace App\Http\Controllers;

use App\models\Perjalanan;
use App\models\Kota;
use Illuminate\Http\Request;
use Auth;

class PerjalananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = Perjalanan::where('user_id', Auth::user()->id) ->paginate(3);
        return view('perjalanan.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perjalanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $data = [
            'tanggal'=>$request->tanggal,
            'jam'=>$request->jam,
            'lokasi'=>$request->lokasi,
            'suhu_tubuh'=>$request->suhu_tubuh,
            'user_id'=>Auth::user()->id
        ];
        Perjalanan::create($data);
        return redirect('/perjalanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function show(Perjalanan $perjalanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perjalanan $perjalanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perjalanan $perjalanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Perjalanan  $perjalanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perjalanan $perjalanan)
    {
        //
    }
}
