<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = DB::table('mahasiswa')->get();
        return view('index',['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('mahasiswa')->insert([
			'mahasiswa_nama' => $request->nama,
			'mahasiswa_alamat' => $request->alamat,
            'mahasiswa_divisi' => $request->divisi,
		]);
		return redirect('/mahasiswa');
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
        $mahasiswa = DB::table('mahasiswa')->where('mahasiswa_id',$id)->get();
		return view('edit',['mahasiswa' => $mahasiswa]);
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
        DB::table('mahasiswa')->where('mahasiswa_id',$request->id)->update([
			'mahasiswa_nama' => $request->nama,
			'mahasiswa_alamat' => $request->alamat,
            'mahasiswa_divisi' => $request->divisi,
		]);
		// alihkan halaman ke halaman mahasiswa
		return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('mahasiswa')->where('mahasiswa_id',$id)->delete();
		
		// alihkan halaman ke halaman mahasiswa
		return redirect('/mahasiswa');
    }
}
