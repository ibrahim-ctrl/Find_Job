<?php

namespace App\Http\Controllers;

use App\Models\lowongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {

    // }
    public function indexlowongan()
    {
        $data = lowongan::all();
        return view('lowongan')->with([
        'data' => $data
        ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createlowongan()
    {
        return view('inputlowongan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storelowongan(Request $request)
    {
        $lowongan = $request->validate([
            'gambar' => 'image|file|max:1024',
            'judul' => 'required',
            'isi' => 'required'
        ]);

        if($request->file('gambar')){
            // $imgName = time().'.'.$request->file('gambar')->extension();
            $lowongan['gambar'] = $request->file('gambar')->store('post-images');
        }

        lowongan::create($lowongan);

        return redirect('inputlowongan')->with('Berhasil', 'Data Berhasil di Upload !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lowongan  $lowongan
     * @return \Illuminate\Http\Response
     */
    public function show(lowongan $lowongan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lowongan  $lowongan
     * @return \Illuminate\Http\Response
     */
    public function edit(lowongan $lowongan, $id)
    {
        $lowongan = lowongan::findOrFail($id);
        return view('editlowongan')->with([
            'lowongan' => $lowongan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\lowongan  $lowongan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lowongan $lowongan, $id)
    {
        $data = $request->validate([
            'gambar' => 'image|file|max:1024',
            'judul'  => 'required',
            'isi'    => 'required'
        ]);

        $lowongan = lowongan::findOrFail($id);
        $data = $request->except(['_token']);

        if($request->file('gambar')){
            if($lowongan->gambar !=''){
                storage::delete($lowongan->gambar);
                // storage::delete($request->oldImage);
            }
            // $imgName = time().'.'.$request->file('gambar')->extension();
            $data['gambar'] = $request->file('gambar')->store('post-images');
        }

        
       
        $lowongan->update($data);

        // gambarmodel::where('id', $id)
        // ->update($validateData);

        return redirect('lowongan')->with('Berhasil', 'Gambar Berhasil di Update !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lowongan  $lowongan
     * @return \Illuminate\Http\Response
     */
    public function destroy(lowongan $lowongan, $id)
    {
        if($lowongan->gambar)
        {
            Storage::delete($lowongan->gambar);
        }
        $lowongan= lowongan::findOrFail($id);
        $lowongan->delete();
        return redirect('/lowongan');
    }
}
