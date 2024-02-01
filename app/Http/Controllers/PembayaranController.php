<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Pembayaran;
use App\Models\Tiket;
use App\Models\User;
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
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'totalharga' => 'required',
        ],  [
            'foto.required' => 'Data harus diisi',
            // 'totalharga.required' => 'Data harus diisi',
        ]);

        $fotoPath = null;

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('buktifoto', 'public');
        }

    $payment = Pembayaran::create([
        'tiket_id' => $request->input('tiket_id'),
        'nama' => $request->input('nama'),
        'foto' => $fotoPath,
        'destinasi_id' => $request->input('destinasi_id'),
        'totalharga' => $request->input('totalharga'),
    ]);

    $tiket = Tiket::find($request->input('tiket_id'));
    $tiket->status = 'Sudah Bayar';
    $tiket->save();

    $destinasi = Destinasi::find($request->destinasi_id);

    if ($request->tkt <= $destinasi->stok) {
        $destinasi->stok -= $request->tkt;
        $destinasi->save();
    } else {
        return redirect()->back()->with('warning', "Jumlah stok kurang, maksimal tersedia $destinasi->stok tiket.");
    }


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
        $bayars = Pembayaran::findOrFail($id);

        // $rules = $request->validate([
        //     'byr' => 'required',
        // ],  [
        //     'byr.required' => 'Data harus diisi',
        // ]);

        // $existingData = Tiket::where([
        //     'lokasi' => $request->lokasi,
        // ])->exists();

        // if ($existingData) {
        //     return redirect('/lokasi')->withInput()->with('error', 'Data yang anda masukkan sudah ada!!');
        // }

        $exit = $bayars->foto;

        if ($request->hasFile('foto')) {
            // Delete existing photo if any
            if ($bayars->foto) {
                $path = storage_path('app/public/' . $bayars->foto);
                if (file_exists($path)) {
                    unlink($path);
                }
            }

            $photoPath = $request->file('foto')->store('fotos', 'public');
            $bayars->foto = $photoPath;
        }

        // $bayars->byr = $request->input('byr');
        $bayars->save();

        if (!$request->hasFile('foto') && $exit) {
            $bayars->foto = $exit;
            $bayars->save();
        }
        return redirect('/tiket')->with('success', 'Berhasil membayar ulang!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bayars = Pembayaran::FindOrFail($id);

        $bayars->delete();
        return redirect()->route('pembayaran')->with('success', 'berhasil menghapus data');
    }
}
