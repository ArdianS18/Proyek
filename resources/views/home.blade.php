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

    <div class="container">
        <h1>Halaman home Dashboard</h1>
        <p>Selamat datang <b>{{ Auth::user()->name }} !!</b> di halaman dashboard !</p>


    <div class="boxes flex " style="width: 100vw;">
        <div class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" >
            <div class="icon">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" style="color: #ffffff">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.3-2a6 6 0 0 0 0-6A4 4 0 0 1 20 8a4 4 0 0 1-6.7 3Zm2.2 9a4 4 0 0 0 .5-2v-1a6 6 0 0 0-1.5-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.5Z" clip-rule="evenodd"/>
                </svg>
            </div>
            <div class="content">
                <h1>Total User</h1>
                <h2>Total : {{ $totaluser }}</h2>
            </div>
        </div>
        <div class="box focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" >
            <div class="icon">
                <svg style="color: #ffffff" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M2 6c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6Zm5 2a1 1 0 0 0 0 2 1 1 0 1 0 0-2Zm4 0a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2h-6Zm-4 3a1 1 0 1 0 0 2Zm4 0a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2h-6Zm-4 3a1 1 0 1 0 0 2 1 1 0 1 0 0-2Zm4 0a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2h-6Zm-4 3a1 1 0 1 0 0 2 1 1 0 1 0 0-2Zm4 0a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2h-6Z" clip-rule="evenodd"/>
                </svg>
            </div>
            <div class="content">
                <h1>Kategori Wisata</h1>
                <h2>Total : {{ $totalkat }}</h2>
            </div>
        </div>
        <div class="box focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
            <div class="icon">
                <svg style="color: #ffffff" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 2a8 8 0 0 1 6.6 12.6l-.1.1-.6.7-5.1 6.2a1 1 0 0 1-1.6 0L6 15.3l-.3-.4-.2-.2v-.2A8 8 0 0 1 11.8 2Zm3 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" clip-rule="evenodd"/>
                </svg>
            </div>
            <div class="content">
                <h1>Lokasi Wisata</h1>
                <h2>Total : {{ $totallokasi }}</h2>
            </div>
        </div>
        <div class="box text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
            <div class="icon">
                <svg style="color: #ffffff" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M5 3.8A1 1 0 0 1 6 3h12c.5 0 .9.3 1 .8l1.8 8.2h-4.2a2 2 0 0 0-1.9 1.2 3 3 0 0 1-5.4 0A2 2 0 0 0 7.4 12H3.2L5 3.8ZM3 14v5a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-5h-4.4a5 5 0 0 1-9.2 0H3Z" clip-rule="evenodd"/>Destinasi
                </svg>
            </div>
            <div class="content">
                <h1>Destinasi</h1>
                <h2>Total : {{ $totalwisata }}</h2>
            </div>
        </div>
        <div class="box focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">
            <div class="icon">
                <svg style="color: #ffffff" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.5 12A2.5 2.5 0 0 1 21 9.5V7a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v2.5a2.5 2.5 0 0 1 0 5V17a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2.5a2.5 2.5 0 0 1-2.5-2.5Z"/>
                </svg>
            </div>
            <div class="content">
                <h1>Tiket Di Pesan</h1>
                <h2>Total : {{ $totaltiket }}</h2>
            </div>
        </div>
    </div>

    </div>

    <style>

        .boxes {
            display: flex;
            gap: 20px;
            width: 150%;
        }

        .box {
            width: 50%;
            /* justify-content: flex-end; */
            /* align-items: flex-start; */
            /* background-color: #000; */
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
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: center;
        }

        .content h1 {
            text-align: left;
            font-size: 1.8rem;
            color: #ffffff;
            margin-bottom: 8px;
        }

        .content h2 {
            text-align: left;
            font-size: 1.4rem;
            color: #ffffff;
        }
    </style>
@endsection

@endif
