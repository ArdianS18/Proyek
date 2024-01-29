<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Pembayaran;
use App\Models\Tiket;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tikets = Tiket::all();
        $destinasis = Destinasi::all();
        $bayars = Pembayaran::all();

        return view('admin.bayar-tampil', compact('destinasis', 'tikets', 'bayars'));
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
            'byr' => 'required',
        ],  [
            'byr.required' => 'Data harus diisi'
        ]);

        // $fotoPath = null;

        // if ($request->hasFile('foto')) {
        //     $fotoPath = $request->file('foto')->store('fotos', 'public');
        // }

    $payment = Pembayaran::create([
        'tiket_id' => $request->input('tiket_id'),
        'byr' => $request->input('byr'),
        'nama' => $request->input('nama'),
        'destinasi_id' => $request->input('destinasi_id'),
    ]);

    $tiket = Tiket::find($request->input('tiket_id'));
    $tiket->status = 'Sudah Bayar';
    $tiket->save();

    return redirect('/tiket')->with('success', 'Berhasil melakukan Pembayaran');

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
