<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $users = Auth::user()->$id;

        $exit = $users->profile_image;

        if ($request->hasFile('profile_image')) {
            // Delete existing photo if any
            if ($users->profile_image) {
                $path = storage_path('app/public/' . $users->profile_image);
                if (file_exists($path)) {
                    unlink($path);
                }
            }

            // Store the new photo
            $photoPath = $request->file('profile_image')->store('fotos', 'public');
            $users->profile_image = $photoPath;
        }

        // Set values from the request to the model
        $users->name = $request->input('name');

        // Check if a new photo is provided

        // Save the updated model
        $users->save();

        if (!$request->hasFile('profile_image') && $exit) {
            $users->foto = $exit;
            $users->save();
        }
        return redirect()->back()->with('success', 'Berhasil mengedit data!');

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
