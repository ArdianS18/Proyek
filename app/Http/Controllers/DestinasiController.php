<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinasis = Destinasi::all();

        return view('admin.destinasi.destinasi', compact('destinasis'));
        //
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
        $rules = $request->validate([
            'nama_destinasi' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'harga' => 'required',
        ],  [
            'nama_destinasi.required' => 'Data harus diisi',
            'deskripsi.required' => 'Data harus diisi',
            'lokasi.required' => 'Data harus diisi',
            'harga.required' => 'Data harus diisi'
        ]);

        Destinasi::create([
            'nama_destinasi' => $request->input('nama_destinasi'),
            'deskripsi' => $request->input('deskripsi'),
            'lokasi' => $request->input('lokasi'),
            'harga' => $request->input('harga'),
        ]);
        return redirect('/destinasi')->with('success', 'berhasil menambah data!');

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
        //
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
        //
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
