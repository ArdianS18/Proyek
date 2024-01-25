<?php

namespace App\Http\Controllers;

use App\Models\Genre;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres = Genre::all();

        return view('admin.genre.genre', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            'genre' => 'required',
        ],  [
            'genre.required' => 'Data harus diisi'
        ]);

        $existingData = Genre::where([
            'genre' => $request->genre,
        ])->exists();

        if ($existingData) {
            return redirect('/genre')->withInput()->with('error', 'Data yang anda masukkan sudah ada!!');
        }

        Genre::create([
            'genre' => $request->input('genre'),
        ]);
        return redirect('/genre')->with('success', 'berhasil menambah data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $rules = $request->validate([
            'genre' => 'required',
        ],  [
            'genre.required' => 'Data harus diisi'
        ]);
        Genre::where('id', $id)
                ->update($rules);
        return redirect('/genre')->with('success', 'berhasil mengedit data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $genres = Genre::FindOrFail($id);
        $genres->delete();
        return redirect()->route('genre.index')->with('success', 'berhasil menghapus data');
    }
}
