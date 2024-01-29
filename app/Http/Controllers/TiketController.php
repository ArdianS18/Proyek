<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Pembayaran;
use App\Models\Tiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $pembayarans=Pembayaran::all();

        return view('user.tiket-user', compact('tikets', 'destinasis', 'pembayarans'));
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
            'tkt' => 'required',
        ], [
            'atas_nama.required' => 'Data harus diisi',
            'tanggal.required' => 'Data harus diisi',
            'destinasi_id.required' => 'Data harus diisi',
            'tkt.required' => 'Data harus diisi',
        ]);

        Tiket::create([
            'atas_nama' => $request->input('atas_nama'),
            'tanggal' => $request->input('tanggal'),
            'destinasi_id' => $request->input('destinasi_id'),
            'tkt' => $request->input('tkt'),
        ]);

        return redirect('/tiket')->with('success', 'Berhasil menambah data!');
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
            'terima' => 'required',
            'alasan' => 'required'
        ],  [
            'terima.required' => 'Data harus diisi',
            'alasan.required' => 'Data harus diisi',
        ]);

        // $existingData = Tiket::where([
        //     'lokasi' => $request->lokasi,
        // ])->exists();

        // if ($existingData) {
        //     return redirect('/lokasi')->withInput()->with('error', 'Data yang anda masukkan sudah ada!!');
        // }

        Tiket::where('id', $id)
                ->update($rules);
        return redirect('/tiketadmin')->with('success', 'berhasil mengedit data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tikets = Tiket::FindOrFail($id);
        $tikets->delete();
        return redirect('/tiketadmin')->with('success', 'berhasil menghapus data');
    }
}
