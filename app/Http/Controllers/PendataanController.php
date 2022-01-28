<?php

namespace App\Http\Controllers;

use App\Models\PendataanModel;
use App\Models\lowongan;
use App\Models\tim;
use Illuminate\Http\Request;

class PendataanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        $datas = lowongan::all();
        $datases = tim::all();
        return view('index')->with([
        'datas' => $datas,
        'datases' => $datases
        ]); 
              
         
    }

    public function admin()
    {
        $data = PendataanModel::all();
        return view('Fadmin')->with([
        'data' => $data
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('FPendataan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> except(['_token']);
        PendataanModel::insert($data);
        return redirect('/FPendataan')->with('success', 'Data Berhasil Diinput !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = PendataanModel::findOrFail($id);
        return view('editadmin')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
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
        $item = PendataanModel::findOrFail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('/Fadmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyadmin($id)
    {
        $item = PendataanModel::findOrFail($id);
        $item->delete();
        return redirect('/Fadmin');
    }
}
