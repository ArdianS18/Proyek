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
        $destinasis = Destinasi::paginate(5);

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
            'tiket' => 'required',
            'stok' => 'required',
        ], [
            'wisata.required' => 'Data harus diisi',
            'genre_id.exists' => 'Data harus diisi',
            'lokasi_id.exists' => 'Data harus diisi',
            'foto.required' => 'Data harus diisi',
            'tiket.required' => 'Data harus diisi',
            'stok.required' => 'Data harus diisi',
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
            'tiket' => $request->input('tiket'),
            'stok' => $request->input('stok'),

        ]);
        return redirect('/destinasi')->with('success', 'berhasil mengedit data!');
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
        // Find the destination by ID
        $destinasi = Destinasi::findOrFail($id);

        $exit = $destinasi->foto;

        if ($request->hasFile('foto')) {
            // Delete existing photo if any
            if ($destinasi->foto) {
                $path = storage_path('app/public/' . $destinasi->foto);
                if (file_exists($path)) {
                    unlink($path);
                }
            }

            // Store the new photo
            $photoPath = $request->file('foto')->store('fotos', 'public');
            $destinasi->foto = $photoPath;
        }

        // Set values from the request to the model
        $destinasi->wisata = $request->input('wisata');
        $destinasi->genre_id = $request->input('genre_id');
        $destinasi->lokasi_id = $request->input('lokasi_id');
        $destinasi->tiket = $request->input('tiket');
        $destinasi->stok = $request->input('stok');

        // Check if a new photo is provided

        // Save the updated model
        $destinasi->save();

        if (!$request->hasFile('foto') && $exit) {
            $destinasi->foto = $exit;
            $destinasi->save();
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
