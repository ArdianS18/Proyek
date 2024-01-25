<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokasis = Lokasi::all();

        return view('admin.lokasi.lokasi', compact('lokasis'));
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
            'lokasi' => 'required',
        ],  [
            'lokasi.required' => 'Data harus diisi'
        ]);

        $existingData = Lokasi::where([
            'lokasi' => $request->lokasi,
        ])->exists();

        if ($existingData) {
            return redirect('/lokasi')->withInput()->with('error', 'Data yang anda masukkan sudah ada!!');
        }

        Lokasi::create([
            'lokasi' => $request->input('lokasi'),
        ]);
        return redirect('/lokasi')->with('success', 'berhasil menambah data!');
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
        $rules = $request->validate([
            'lokasi' => 'required',
        ],  [
            'lokasi.required' => 'Data harus diisi'
        ]);

        $existingData = Lokasi::where([
            'lokasi' => $request->lokasi,
        ])->exists();

        if ($existingData) {
            return redirect('/lokasi')->withInput()->with('error', 'Data yang anda masukkan sudah ada!!');
        }

        Lokasi::where('id', $id)
                ->update($rules);
        return redirect('/lokasi')->with('success', 'berhasil mengedit data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lokasis = Lokasi::FindOrFail($id);
        $lokasis->delete();
        return redirect()->route('lokasi.index')->with('success', 'berhasil menghapus data');
    }
}
