@extends('layouts.admin-dash')

@section('content')

{{-- <head>
    <title>Pengguna</title>
</head> --}}

<nav>
<div class="container">
    <div class="row justify-content-center">
        <h1>Data Pengguna</h1>
        <small>Data Pengguna</small><br>

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
                                Email
                            </th>

                        </tr>
                    </thead>
                    @foreach ($users as $key => $user)
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ ++$key }}
                            </td>
                            <td class="px-6 py-4">
                                {{$user->name}}
                            </td>
                            <td class="px-6 py-4">
                                {{$user->email}}
                            </td>
                    </tbody>
                    @endforeach
                </table>
            </div>
    </div>
</div>
</nav>
@endsection
