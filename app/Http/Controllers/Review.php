<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Genre;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class Review extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $genres = Genre::all();
        $lokasis = Lokasi::all();

        $searchTerm = $request->input('search', '');

        if ($searchTerm) {
            $destinasis = Destinasi::where('wisata', 'like', '%' . $searchTerm . '%')->latest()->paginate(5);
            $destinasis->appends(['search' => $searchTerm]);
        } else {
            $destinasis = Destinasi::latest()->paginate(5);
        }

        return view('user.user-dash', compact('genres', 'destinasis', 'lokasis'));
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
        //
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
