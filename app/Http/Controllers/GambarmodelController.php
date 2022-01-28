<?php

namespace App\Http\Controllers;

use App\Models\gambarmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GambarmodelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function datagambar()
    {
        $viewgambar = gambarmodel::all();
        return view('datagambar')->with([
            'viewgambar' => $viewgambar
        ]);
        
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
    public function upload(Request $request)
    {
        $validateData = $request->validate([
            'gambar1' => 'required|image|file|mimes:jpeg,png,jpg,gif,svg,pdf|max:1024',
            'gambar2' => 'required|image|file|mimes:jpeg,png,jpg,gif,svg,pdf|max:1024',
            'gambar3' => 'required|image|file|mimes:jpeg,png,jpg,gif,svg,pdf|max:1024',
            'gambar4' => 'required|image|file|mimes:jpeg,png,jpg,gif,svg,pdf|max:1024'
        ]);

        if($request->file('gambar1')&&('gambar2')&&('gambar3')&&('gambar4')){
            // $imgName = time().'.'.$request->file('gambar1')->extension();
            $validateData['gambar1'] = $request->file('gambar1')->store('post-images');
            // $imgName2 = time().'.'.$request->file('gambar2')->extension();
            $validateData['gambar2'] = $request->file('gambar2')->store('post-images');
            // $imgName3 = time().'.'.$request->file('gambar3')->extension();
            $validateData['gambar3'] = $request->file('gambar3')->store('post-images');
            // $imgName4 = time().'.'.$request->file('gambar4')->extension();
            $validateData['gambar4'] = $request->file('gambar4')->store('post-images');
        }

        gambarmodel::create($validateData);

        return redirect('FPendataan')->with('Berhasil', 'Gambar Berhasil di Upload !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gambarmodel  $gambarmodel
     * @return \Illuminate\Http\Response
     */
    public function show(gambarmodel $gambarmodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gambarmodel  $gambarmodel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gambarmodel = gambarmodel::findOrFail($id);
        return view('editgambar')->with([
            'gambarmodel' => $gambarmodel
        ]);

        // return view('editgambar',[
        //     'gambarmodel' => $gambarmodel,
        //     'gambarmodel' => gambarmodel::findOrFail($id)
        // ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gambarmodel  $gambarmodel
     * @return \Illuminate\Http\Response
     */
    public function updategambar(Request $request, $id)
    {
        $data = $request->validate([
            'gambar1' => 'image|file|mimes:jpeg,png,jpg,gif,svg,pdf|max:1024',
            'gambar2' => 'image|file|mimes:jpeg,png,jpg,gif,svg,pdf|max:1024',
            'gambar3' => 'image|file|mimes:jpeg,png,jpg,gif,svg,pdf|max:1024',
            'gambar4' => 'image|file|mimes:jpeg,png,jpg,gif,svg,pdf|max:1024'
        ]);

        $item = gambarmodel::findOrFail($id);
        $data = $request->except(['_token']);

        if($request->file('gambar1')&&('gambar2')&&('gambar3')&&('gambar4')){
            if($item->gambar1 !=''){
                storage::delete($item->gambar1);
                storage::delete($item->gambar2);
                storage::delete($item->gambar3);
                storage::delete($item->gambar4);
                // storage::delete($request->oldImage);
            }
            // $imgName1 = time().'.'.$request->file('gambar1')->extension();
            // $imgName2 = time().'.'.$request->file('gambar2')->extension();
            // $imgName3 = time().'.'.$request->file('gambar3')->extension();
            // $imgName4 = time().'.'.$request->file('gambar4')->extension();
            $data['gambar1'] = $request->file('gambar1')->store('post-images');
            $data['gambar2'] = $request->file('gambar2')->store('post-images');
            $data['gambar3'] = $request->file('gambar3')->store('post-images');
            $data['gambar4'] = $request->file('gambar4')->store('post-images');
        }

        
       
         $item->update($data);

        // gambarmodel::where('id', $id)
        // ->update($data);

        return redirect('/datagambar')->with('Berhasil', 'Gambar Berhasil di Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gambarmodel  $gambarmodel
     * @return \Illuminate\Http\Response
     */
    public function destroyimage(gambarmodel $gambarmodel, $id)
    {
        if($gambarmodel->gambar1)
        {
            Storage::delete($gambarmodel->gambar1);
            Storage::delete($gambarmodel->gambar2);
            Storage::delete($gambarmodel->gambar3);
            Storage::delete($gambarmodel->gambar4);
        }
        $gambarmodel= gambarmodel::findOrFail($id);
        $gambarmodel->delete();
        return redirect('/datagambar');
    }
}
