
@extends('layouts.admin')

@section('content')

<nav>
<div class="container">
    <div class="row justify-content-center">
        <h1>Data genre</h1>
        <small>Data genre</small><br>
        <a href="/genre/create" class="btn btn-success">+ Tambah Data genre</a><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>No</th>
                <th>Nama Genre</th>
                <th>Aksi</th>
                </tr>
            </thead>
            @foreach ($genres as $key => $genre)
            <tbody>
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{$genre->genre}}</td>
                    <td>
                        <a href="/genre/{{$genre->id}}" type="button" class="btn btn-primary" >Detail</a>
                        <a href="/genre/{{$genre->id}}/edit" class="btn btn-warning btn-xs">Edit</a>
                        <form action="/genre/{{$genre->id}}" method="post" onclick="return confirm('Yakin Akan menghapus data?')" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>
               
                    </td>

                </tr>
            </tbody>
            @endforeach

        </table>

    </div>
</div>
</nav>
@endsection
