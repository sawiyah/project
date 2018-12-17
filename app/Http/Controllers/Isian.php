<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelKorporat;
use Illuminate\View\View;
//use Illuminate\Support\Facades\View;

class Isian extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelKorporat::all();
        return view('isian',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        {
            return view('create_laporan');
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
        $data = new ModelKorporat();
        $data->rt = $request->rt;
        $data->desa = $request->desa;
        $data->kecamatan = $request->kecamatan;
        $data->laporan = $request->laporan;
        $data->save();
        //return view('isian',['data'=>$data]);
        //return view('isian');
        return redirect()->route('isian.index')->with('alert-success','Data berhasil ditambah!');
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
        $data = ModelKorporat::where('id',$id)->get();
       // $data = ModelKorporat::all();
        return view('edit_korporat',compact('data'));
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
        $data = ModelKorporat::where('id',$id)->first();
        $data->rt = $request->rt;
        $data->desa = $request->desa;
        $data->kecamatan = $request->kecamatan;
        $data->laporan = $request->laporan;
        $data->save();
        //return View('isian');
        return redirect()->route('isian.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ModelKorporat::find($id)->delete();
        //return view('isian');
        // return view('isian')->with('alert-success','Data berhasil diubah!');
        return redirect()->route('isian.index')->with('alert-success','Data berhasil dihapus!');
    }
}
