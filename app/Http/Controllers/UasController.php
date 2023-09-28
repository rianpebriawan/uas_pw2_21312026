<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uas;
use RealRashid\SweetAlert\Facades\Alert;

class UasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Uas = Uas::all();
        return view('Npm21312026.index', compact('Uas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Npm21312026.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Uas = new Uas;

        $request->validate([
            'no_mahasiswa' => 'required',
            'nama_mahasiswa' => 'required',
            'program_studi' => 'required',
        ]);

        $Uas->no_mahasiswa = $request->no_mahasiswa;
        $Uas->nama_mahasiswa = $request->nama_mahasiswa;
        $Uas->program_studi = $request->program_studi;

        $simpan = $Uas->save();
        if ($simpan) {
            Alert::success('Success', 'Data Berhasil ditambah');
            return redirect('/Npm21312026');
        } else {
            Alert::error('Failed', 'Gagal menambahkan data');
        }
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
        $Uas = Uas::where('id', $id)->first();
        return view('Npm21312026.edit', compact('Uas'));
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
        $request->validate([
            'no_mahasiswa' => 'required',
            'nama_mahasiswa' => 'required',
            'program_studi' => 'required',
        ]);

        $Uas = Uas::find($id);

        $Uas->no_mahasiswa = $request->no_mahasiswa;
        $Uas->nama_mahasiswa = $request->nama_mahasiswa;
        $Uas->program_studi = $request->program_studi;

        $ubah = $Uas->save();

        if ($ubah) {
            Alert::success('Success', 'Data berhasil diubah');
            return redirect('/Npm21312026');
        } else {
            Alert::error('Failed', 'Gagal Mengubah data');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Uas = Uas::find($id);
        $remove = $Uas->delete();
        if ($remove) {
            Alert::success('Success', 'Data Berhasil Dihapus');
            return redirect('/Npm21312026');
        } else {
            Alert::error('Failed', 'Gagal Menghapus data');
        }
    }
}
