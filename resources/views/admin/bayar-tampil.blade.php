@extends('layouts.admin-dash')

@section('content')

<head>
    <title>Pembayaran</title>
</head>

<nav>
<div class="container">
    <div class="row justify-content-center">
        <h1>Data Pembayaran</h1>
        <small>Data Pembayaran</small><br>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Destinasi
                            </th>
                            {{-- <th scope="col" class="px-6 py-3">
                                Total Harga
                            </th> --}}
                            <th scope="col" class="px-6 py-3">
                                Pembayaran
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>

                        </tr>
                    </thead>
                    @foreach ($bayars as $key => $bayar)
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ ++$key }}
                            </td>
                            <td class="px-6 py-4">
                                {{$bayar->tiket->atas_nama}}
                            </td>
                            <td class="px-6 py-4">
                                {{$bayar->destinasi->wisata}}
                            </td>
                            {{-- <td class="px-6 py-4">
                                {{$bayar->tiket->tkt}}
                            </td> --}}
                            <td class="px-6 py-4">
                                {{$bayar->byr}}
                            </td>
                            <td class="px-6 py-4">
                                {{$bayar->tiket->status}}
                            </td>
                    </tbody>
                    @endforeach
                </table>
            </div>
    </div>
</div>
</nav>
@endsection
