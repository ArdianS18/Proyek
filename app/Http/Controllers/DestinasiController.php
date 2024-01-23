<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;
use App\Models\Genre;

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

        Destinasi::create([
            'wisata' => $request->input('wisata'),
            'genre_id' => $request->input('genre_id'),
            'foto' => $path, // Ganti dengan $path
            'tiket_anak' => $request->input('tiket_anak'),
            'tiket_remaja' => $request->input('tiket_remaja'),
            'tiket_dewasa' => $request->input('tiket_dewasa'),
        ]);

    
            dd($path, $request->all());
    
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
    
        // Ambil data dokter berdasarkan ID
        $destinasis = Destinasi::findOrFail($id);
    
        // Cek apakah ada file foto yang diunggah
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
    
            // Buat nama file acak dengan panjang 20 karakter
            $filename = Str::random(20) . '.' . $foto->getClientOriginalExtension();
            $path = '' . $filename;
    
            // Simpan foto ke dalam folder img
            $foto->storeAs('public', $path);
    
            // Hapus foto lama jika ada
            if ($dokter->foto) {
                Storage::delete('public/' . $dokter->foto);
            }
    
            // Update data ke dalam tabel
            $dokter->update([
                'wisata' => $request->input('wisata'),
                'genre_id' => $request->input('genre_id'),
                'foto' => $path, // Ganti dengan $path
                'tiket_anak' => $request->input('tiket_anak'),
                'tiket_remaja' => $request->input('tiket_remaja'),
                'tiket_dewasa' => $request->input('tiket_dewasa'),
            ]);
    
            return redirect('/destinasi')->with('success', 'Berhasil mengedit data!');
        } else {
            // Jika tidak ada file foto diunggah, update data kecuali foto
            $destinasi->update([
                'wisata' => $request->input('wisata'),
                'foto' => $path,
                'genre_id' => $request->input('genre_id'),
                'tiket_anak' => $request->input('tiket_anak'),
                'tiket_remaja' => $request->input('tiket_remaja'),
                'tiket_dewasa' => $request->input('tiket_dewasa'),
            ]);
    
            return redirect('/destinasi')->with('success', 'Berhasil mengedit data!');
        }
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
