 @if (auth()->user()->name=="Admin")

{{--@extends('layouts.admin-dash')


@section('content')
    <div class="container">
        <h1>Halaman home Dashboard</h1>
        <p>Selamat datang <b>{{ Auth::user()->name }} !!</b> di halaman dashboard !</p>
    </div>

    <div class="boxes">
        <div class="box" style="background-color: red;">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.3-2a6 6 0 0 0 0-6A4 4 0 0 1 20 8a4 4 0 0 1-6.7 3Zm2.2 9a4 4 0 0 0 .5-2v-1a6 6 0 0 0-1.5-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.5Z" clip-rule="evenodd"/>
              </svg>
            <h1>Pengguna</h1>
            <p>{{ $totaluser }}</p>
        </div>
        <div class="box">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.3-2a6 6 0 0 0 0-6A4 4 0 0 1 20 8a4 4 0 0 1-6.7 3Zm2.2 9a4 4 0 0 0 .5-2v-1a6 6 0 0 0-1.5-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.5Z" clip-rule="evenodd"/>
              </svg>
            <h1>Kategori</h1>
            <p>{{ $totalkat }}</p>
        </div>
    </div>

    <style>


        .box {
            width: 30%;
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
            text-align: center;
        }

    </style>

<style>

    .boxes {
            display: flex;
            gap: 20px;
        }
    .box {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: #ffffff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease-in-out;
    }

    .box:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .box svg {
        width: 100px;
        height: 100px;
        margin-bottom: 12px;
    }

    .box h1 {
        font-size: 1.8rem;
        color: #333333;
        margin-bottom: 8px;
    }

    .box p {
        font-size: 1.4rem;
        color: #666666;
    }
</style>





@endsection
--}}


@extends('layouts.admin-dash')

@section('content')
    {{-- <div class="container">
        <h1>Halaman home Dashboard</h1>
        <p>Selamat datang <b>{{ Auth::user()->name }} !!</b> di halaman dashboard !</p>
        <!-- Tambahkan konten dan komponen admin di sini -->
    </div> --}}

    <div class="boxes">
        <div class="box" style="background-color: rgb(12, 180, 213);">
            <div class="icon">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.3-2a6 6 0 0 0 0-6A4 4 0 0 1 20 8a4 4 0 0 1-6.7 3Zm2.2 9a4 4 0 0 0 .5-2v-1a6 6 0 0 0-1.5-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.5Z" clip-rule="evenodd"/>
                </svg>
            </div>
            <div class="content">
                <h1>Pengguna</h1>
                <h2>{{ $totaluser }}</h2>
            </div>
        </div>
        <div class="box">
            <div class="icon">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.3-2a6 6 0 0 0 0-6A4 4 0 0 1 20 8a4 4 0 0 1-6.7 3Zm2.2 9a4 4 0 0 0 .5-2v-1a6 6 0 0 0-1.5-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.5Z" clip-rule="evenodd"/>
                </svg>
            </div>
            <div class="content">
                <h1>Kategori</h1>
                <h2>{{ $totalkat }}</h2>
            </div>
        </div>
    </div>

    <style>
        .boxes {
            display: flex;
            gap: 20px;
        }

        .box {
            width: 30%;
            flex-direction: column;
            align-items: flex-start;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out;
        }

        .box:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .icon {
            width: 100%;
            text-align: center;
        }

        .icon svg {
            width: 100px;
            height: 100px;
            margin-bottom: 12px;
        }

        .content {
            text-align: center;
        }

        .content h1 {
            text-align: left;
            font-size: 1.8rem;
            color: #333333;
            margin-bottom: 8px;
        }

        .content h2 {
            text-align: right;
            font-size: 1.4rem;
            color: #666666;
        }
    </style>
@endsection

@endif
