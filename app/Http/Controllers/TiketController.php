<?php

namespace App\Http\Controllers;

use App\Charts\TiketBayarChart;
use App\Models\Destinasi;
use App\Models\Pembayaran;
use App\Models\Tiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// untuk tanggal berbahasa indonesia
setlocale(LC_TIME, 'id_ID');
\Carbon\Carbon::setLocale('id');

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tikets=Tiket::latest()->get();
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
        // $destinasis=Destinasi::all();
        $rules = $request->validate([
            'atas_nama' => 'required',
            'tanggal' => 'required|date|after_or_equal:today',
            'destinasi_id' => 'required',
            'tkt' => 'required|integer|min:1',

        ], [
            'atas_nama.required' => 'Data harus diisi',
            'tanggal.required' => 'Data harus diisi',
            'tanggal.after_or_equal' => 'Tanggal harus hari ini atau setelah hari ini',
            'destinasi_id.required' => 'Data harus diisi',
            'tkt.required' => 'Data harus diisi',

            'tkt.integer' => 'Data harus berupa angka',
            'tkt.min' => 'Data tidak boleh kurang dari 1',
        ]);

        Tiket::create([
            'atas_nama' => $request->input('atas_nama'),
            'tanggal' => $request->input('tanggal'),
            'destinasi_id' => $request->input('destinasi_id'),
            'tkt' => $request->input('tkt'),
        ]);


     $destinasi = Destinasi::find($request->destinasi_id);

    if ($request->tkt <= $destinasi->stok) {
        $destinasi->stok -= $request->tkt;
        $destinasi->save();
    } else {
        return redirect()->back()->with('warning', "Jumlah stok kurang, maksimal tersedia $destinasi->stok tiket.");
        // return false;
    }
        // if ($request->tkt<$destinasis->stok){
        //     $destinasis->stok -= $request->tkt;
        // } else{
        //     return redirect()->back()-with('warning', "'stok berkurang, max $destinasis->stok");
        // }

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


        try {
            $tiket = Tiket::findOrFail($id);
            $destinasi = Destinasi::find($tiket->destinasi_id);

            $stokBaru = $destinasi->stok + $tiket->tkt - $request->tkt;

            if ($stokBaru < 0) {
                return redirect()->back()->with('warning', "Jumlah stok kurang dari jumlah keluar");
            } else {
                $destinasi->stok = $stokBaru;
                $destinasi->save();
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', "Error: " . $e->getMessage());
        }

        Tiket::where('id', $id)->update($rules);

        return redirect('/tiketadmin')->with('success', 'Berhasil mengedit data!');
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

        try {
            $tikets->delete();
            return redirect()->route('tiketadmin.index')->with('success', 'berhasil menghapus data');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data sedang di pakai!');
        }


        // $tikets = Tiket::FindOrFail($id);
        // $tikets->delete();
        // return redirect('/tiketadmin')->with('success', 'berhasil menghapus data');
    }
}
