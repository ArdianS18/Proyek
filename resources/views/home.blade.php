@extends('layouts.admin-dash')

@section('content')
    <div class="container">
        <h1>Halaman home Dashboard</h1>
        <p>Selamat datang <b>{{ Auth::user()->name }} !!</b> di halaman dashboard admin!</p>
        <!-- Tambahkan konten dan komponen admin di sini -->
    </div>
@endsection
