<?php

namespace App\Http\Controllers;

use App\Models\authmodel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthmodelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('registrasi');
    }

    public function loginuser()
    {
        return view('Flogin');
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
    public function registerstore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4'
        ]);

        $data['password'] = bcrypt($data['password']);

        User::create($data);

        return redirect('registrasi')->with('berhasil', 'Input Data Berhasil!');
    }

    public function loginuserstore(Request $request)
    {
        $credentials = $request -> validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/Fadmin');
        }
            return back()->with('error', 'Username atau Password salah !');
        
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\authmodel  $authmodel
     * @return \Illuminate\Http\Response
     */
    public function show(authmodel $authmodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\authmodel  $authmodel
     * @return \Illuminate\Http\Response
     */
    public function edit(authmodel $authmodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\authmodel  $authmodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, authmodel $authmodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\authmodel  $authmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(authmodel $authmodel)
    {
        //
    }
}
