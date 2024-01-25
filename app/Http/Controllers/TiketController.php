<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Tiket;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tikets=Tiket::all();
        $destinasis=Destinasi::all();

        return view('user.tiket-user', compact('tikets', 'destinasis'));
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
            'atas_nama' => 'required',
            'tanggal' => 'required',
            'destinasi_id' => 'required',
            'tkt_anak' => 'required',
            'tkt_remaja' => 'required',
            'tkt_dewasa' => 'required',
        ], [
            'atas_nama.required' => 'Data harus diisi',
            'tanggal.required' => 'Data harus diisi',
            'destinasi_id.required' => 'Data harus diisi',
            'tkt_anak.required' => 'Data harus diisi',
            'tkt_remaja.required' => 'Data harus diisi',
            'tkt_dewasa.required' => 'Data harus diisi'
        ]);

        Tiket::create([
            'atas_nama' => $request->input('atas_nama'),
            'tanggal' => $request->input('tanggal'),
            'destinasi_id' => $request->input('destinasi_id'),
            'tkt_anak' => $request->input('tkt_anak'),
            'tkt_remaja' => $request->input('tkt_remaja'),
            'tkt_dewasa' => $request->input('tkt_dewasa'),
        ]);

        return redirect('/user')->with('success', 'Berhasil menambah data!');
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
