<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use App\Models\Genre;
use App\Models\Lokasi;
use App\Models\Tiket;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totaluser = User::where('role', 'user')->count();
        $totalkat = Genre::count();
        $totallokasi = Lokasi::count();
        $totalwisata = Destinasi::count();
        $totaltiket = Tiket::count();

        return view('home', compact('totaluser', 'totalkat', 'totallokasi', 'totalwisata', 'totaltiket'));
    }
}
