<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galery;

class GaleryadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeris = Galery::all();
        return view('admin.galeri-admin', compact('galeris'));
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
            'galeri' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'galeri.required' => 'Data harus diisi',
        ]);

        $fotoPath = null;

        if ($request->hasFile('galeri')) {
            $fotoPath = $request->file('galeri')->store('fotos', 'public');
        }

        $data = Galery::create([
            'galeri' => $fotoPath,

        ]);

        $existingData = Galery::where([
            'galeri' => $request->galeri,
        ])->exists();

        if ($existingData) {
            return redirect('admin.galeri-admin')->withInput()->with('error', 'Data yang anda masukkan sudah ada!!');
        }

        // Galery::create([
        //     'galeri' => $request->input('galeri'),
        // ]);
        return redirect('/galeri')->with('success', 'berhasil menambah data!');
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
        $galeris = Galery::findOrFail($id);

        $rules = $request->validate([
            'galeri' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'galeri.required' => 'Data harus diisi',
        ]);


        $exit = $galeris;

        if ($request->hasFile('galeri')) {
            // Delete existing photo if any
            if ($galeris->galeri) {
                $path = storage_path('app/public/' . $galeris->galeri);
                if (file_exists($path)) {
                    unlink($path);
                }
            }

            // Store the new photo
            $photoPath = $request->file('galeri')->store('fotos', 'public');
            $galeris->galeri = $photoPath;
        }

    
        // Check if a new photo is provided

        // Save the updated model
        
        $galeris->save();
        return redirect('/galeri')->with('success', 'Berhasil mengedit data!');

        // if (!$request->hasFile('galeri') && $exit) {
        //     $galeris->galeri = $exit;
        // }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeris = Galery::FindOrFail($id);
        $galeris->delete();
        return redirect()->route('galeri.index')->with('success', 'berhasil menghapus data');
    }
}
