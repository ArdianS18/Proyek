<?php

namespace App\Http\Controllers;

use Exception;

use App\Models\Destinasi;
use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Lokasi;
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
        $lokasis = Lokasi::all();
        $destinasis = Destinasi::all();

        return view('admin.destinasi.destinasi', compact('genres', 'lokasis', 'destinasis'));
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
            'wisata' => 'required',
            'genre_id' => 'required|exists:genre,id',
            'lokasi_id' => 'required|exists:lokasi,id',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tiket_anak' => 'required',
            'tiket_remaja' => 'required',
            'tiket_dewasa' => 'required',
        ], [
            'wisata.required' => 'Data harus diisi',
            'genre_id.exists' => 'Data harus diisi',
            'lokasi_id.exists' => 'Data harus diisi',
            'foto.required' => 'Data harus diisi',
            'tiket_anak.required' => 'Data harus diisi',
            'tiket_remaja.required' => 'Data harus diisi',
            'tiket_dewasa.required' => 'Data harus diisi'
        ]);

        $fotoPath = null;

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('fotos', 'public');
        }

        $data = Destinasi::create([
            'wisata' => $request->input('wisata'),
            'genre_id' => $request->input('genre_id'),
            'lokasi_id' => $request->input('lokasi_id'),
            'foto' => $fotoPath,

            'tiket_anak' => $request->input('tiket_anak'),
            'tiket_remaja' => $request->input('tiket_remaja'),
            'tiket_dewasa' => $request->input('tiket_dewasa'),
        ]);

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
        $destinasis = Destinasi::findOrFail($id);
        // $genres = Genre::findOrFail($id);

        $existingPhotoPath = $destinasis->foto;

        if ($request->hasFile('foto')) {
            if ($destinasis->foto) {
                $path = storage_path('app/public/' . $destinasis->foto);
                if (file_exists($path)) {
                    unlink($path);
                }
            }

            $photoPath = $request->file('foto')->store('fotos', 'public');
            $destinasis->foto = $photoPath;
        }

        $destinasis->update([
            'wisata' => $request->wisata,
            'genre_id' => $request->genre_id,
            'tiket_anak' => $request->tiket_anak,
            'tiket_remaja' => $request->tiket_remaja,
            'tiket_dewasa' => $request->tiket_dewasa,
          ]);


        $destinasis->save();

        if (!$request->hasFile('foto') && $existingPhotoPath) {
            $destinasis->foto = $existingPhotoPath;
            $destinasis->save();
        }

        return redirect('/destinasi')->with('success', 'Berhasil mengedit data!');
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

        if ($destinasis->foto) {
            $path = storage_path('app/public/' . $destinasis->foto);

            if (file_exists($path)) {
                unlink($path);
            }
        }

        $destinasis->delete();
        return redirect()->route('destinasi.index')->with('success', 'berhasil menghapus data');
    }
}
