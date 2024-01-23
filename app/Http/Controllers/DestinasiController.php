<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;
use App\Models\Genre;
use Illuminate\Support\Facades\Storage;

class DestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres = Genre::all();
        $destinasis = Destinasi::all();

        return view('admin.destinasi.destinasi', compact('genres', 'destinasis'));
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
            'wisata' => 'required',
            'genre_id' => 'required|exists:genre,id',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tiket_anak' => 'required',
            'tiket_remaja' => 'required',
            'tiket_dewasa' => 'required',
        ], [
            'wisata.required' => 'Data harus diisi',
            'genre_id.exists' => 'Data harus diisi',
            'foto.required' => 'Data harus diisi',
            'tiket_anak.required' => 'Data harus diisi',
            'tiket_remaja.required' => 'Data harus diisi',
            'tiket_dewasa.required' => 'Data harus diisi'
        ]);

        $fotoPath = null;

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('fotos', 'public');
        }

        // $pega = Destinasi::create([
        //     'wisata' => $request->input('wisata'),
        //     'genre_id' => $request->input('genre_id'),
        //     'foto' => $fotoPath, // Ganti dengan $path
        $data = Destinasi::create([
            'wisata' => $request->input('wisata'),
            'genre_id' => $request->input('genre_id'),
            'foto' => $fotoPath,

            'tiket_anak' => $request->input('tiket_anak'),
            'tiket_remaja' => $request->input('tiket_remaja'),
            'tiket_dewasa' => $request->input('tiket_dewasa'),
        ]);

        // dd($data);

        return redirect('/destinasi')->with('success', 'Berhasil menambah data!');
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
        $destinasi = Destinasi::findOrFail($id);

        $existingPhotoPath = $destinasi->foto;

        if ($request->hasFile('foto')) {
            if ($destinasi->foto) {
                $path = storage_path('app/public/' . $destinasi->foto);
                if (file_exists($path)) {
                    unlink($path);
                }
            }

            $photoPath = $request->file('foto')->store('fotos', 'public');
            $destinasi->foto = $photoPath;
        }

        $destinasi->wisata=$request->input('wisata');
        $destinasi->genre_id=$request->input('genre_id');
        $destinasi->tiket_anak=$request->input('tiket_anak');
        $destinasi->tiket_remaja=$request->input('tiket_remaja');
        $destinasi->tiket_dewasa=$request->input('tiket_dewasa');

        $destinasi->save();

        if (!$request->hasFile('foto') && $existingPhotoPath) {
            $destinasi->foto = $existingPhotoPath;
            $destinasi->save();
        }

        return redirect('/destinasi')->with('success', 'Berhasil mengedit data!');

        // $rules = $request->validate([
        //     'wisata' => 'required',
        //     'genre_id' => 'required|exists:genre,id',
        //     'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'tiket_anak' => 'required',
        //     'tiket_remaja' => 'required',
        //     'tiket_dewasa' => 'required',
        // ], [
        //     'wisata.required' => 'Data harus diisi',
        //     'genre_id.exists' => 'Data harus diisi',
        //     'foto.required' => 'Data harus diisi',
        //     'tiket_anak.required' => 'Data harus diisi',
        //     'tiket_remaja.required' => 'Data harus diisi',
        //     'tiket_dewasa.required' => 'Data harus diisi'
        // ]);

        // // Ambil data dokter berdasarkan ID

        // // Cek apakah ada file foto yang diunggah
        // if ($request->hasFile('foto')) {
        //     $foto = $request->file('foto');

        //     if ($destinasi->foto) {
        //         Storage::delete('public/' . $destinasi->foto);
        //     }

        //     // Update data ke dalam tabel
        //     $destinasi->update([
        //         'wisata' => $request->input('wisata'),
        //         'genre_id' => $request->input('genre_id'),
        //         'foto' => $foto,
        //         'tiket_anak' => $request->input('tiket_anak'),
        //         'tiket_remaja' => $request->input('tiket_remaja'),
        //         'tiket_dewasa' => $request->input('tiket_dewasa'),
        //     ]);

        //     return redirect('/destinasi')->with('success', 'Berhasil mengedit data!');

        //     } else {

        //     $destinasi->update([
        //         'wisata' => $request->input('wisata'),
        //         'genre_id' => $request->input('genre_id'),
        //         'tiket_anak' => $request->input('tiket_anak'),
        //         'tiket_remaja' => $request->input('tiket_remaja'),
        //         'tiket_dewasa' => $request->input('tiket_dewasa'),
        //     ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destinasis = Destinasi::FindOrFail($id);
        $destinasis->delete();
        return redirect()->route('destinasi.index')->with('success', 'berhasil menghapus data');
    }
}