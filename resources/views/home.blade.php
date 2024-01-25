{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@if (auth()->user()->name=="Admin")

@extends('layouts.admin-dash')

    <head><title>Home</title></head>

@section('content')
    <div class="container">
        <h1>Halaman home Dashboard</h1>
        <p>Selamat datang <b>{{ Auth::user()->name }} !!</b> di halaman dashboard !</p>
        <!-- Tambahkan konten dan komponen admin di sini -->
    </div>
@endsection

@endif
