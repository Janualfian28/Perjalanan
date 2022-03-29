<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\models\Kota;
use Auth;
use PDF;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $kota = Kota::all();
        $data = User::where('user_id', Auth::user()->id);
        return view('profile.copy',compact('data','kota'));
    }

    public function datauser(){
        $data = User::all();
        return view('profile.datauser',compact('data'));
    }

    public function cetakPdf()
    {
    	$data = User::all();

    	$pdf = PDF::loadview('profile.cetak-profile',compact('data'));
    	return $pdf->stream();
    }

    public function dashboard()
    {
        return view('profile.dashboar');
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
        $data = User::find($id);
        $kota = Kota::all();
        // dd($data);
        return view('profile.profile',compact('data','kota'));
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
        //  $v_foto = "";
        // dd($request->all());
        if($request->foto > 0){
            $foto = $request->foto;
            $v_foto = time().rand(100,999).".".$foto->getClientOriginalName();
        }


        $model = User::find($id);
        $data = [
            'name'=>$request->name,
            'nik'=>$request->nik,
            'telp'=>$request->telp,
            'username'=>$request->username,
            'email'=>$request->email,
            'alamat'=>$request->alamat,
        ];

        if($request->foto > 0 && isset($v_foto)){
            $model->foto = $v_foto;
        }

        if(isset($v_foto) > 0){
            $foto->move(public_path().'/foto',$v_foto);
        }

        // dd($v_foto);
        $model->update($data);

        return redirect("/profile/index/$id");
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
