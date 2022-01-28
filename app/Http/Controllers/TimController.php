<?php

namespace App\Http\Controllers;

use App\Models\tim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indextim()
    {
        $data = tim::all();
        return view('tim')->with([
        'data' => $data
        ]); 
    }

    public function createtim()
    {
        return view ('inputtim');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storetim(Request $request)
    {
        $tim = $request->validate([
            'gambar' => 'image|file|max:1024',
            'nama' => 'required',
            'nim' => 'required'
        ]);

        if($request->file('gambar')){
            // $imgName = time().'.'.$request->file('gambar')->extension();
            $tim['gambar'] = $request->file('gambar')->store('post-images');
        }

        tim::create($tim);

        return redirect('inputtim')->with('Berhasil', 'Data Berhasil di Upload !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tim  $tim
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tim  $tim
     * @return \Illuminate\Http\Response
     */
    public function edittim($id)
    {
        $tim = tim::findOrFail($id);
        return view('edittim')->with([
            'tim' => $tim
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tim  $tim
     * @return \Illuminate\Http\Response
     */
    public function updatetim(Request $request, $id)
    {
        $tim = $request->validate([
            'gambar' => 'image|file|max:1024',
            'nama'  => 'required',
            'nim'    => 'required'
        ]);

        $data= tim::findOrFail($id);
        $tim = $request->except(['_token']);

        if($request->file('gambar')){
            if($data->gambar !=''){
                storage::delete($data->gambar);
                // storage::delete($request->oldImage);
            }
            // $imgName = time().'.'.$request->file('gambar')->extension();
            $tim["gambar"] = $request->file('gambar')->store('post-images');
        }

        
       
        $data->update($tim);

        // gambarmodel::where('id', $id)
        // ->update($validateData);

        return redirect('tim')->with('Berhasil', 'Gambar Berhasil di Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tim  $tim
     * @return \Illuminate\Http\Response
     */
    public function destroytim(tim $tim, $id)
    {
        if($tim->gambar)
        {
            Storage::delete($tim->gambar);
        }
        $lowongan= tim::findOrFail($id);
        $lowongan->delete();
        return redirect('/tim');
    }
}
