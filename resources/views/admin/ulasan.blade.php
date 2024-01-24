@extends('layouts.admin-dash')

@section('content')

<nav>
<div class="container">
    <div class="row justify-content-center">
        <h1>Data Review</h1>
        <small>Data Review</small><br>


        <table class="table table-bordered">
            <thead>
                <tr>
                <th>No</th>
                <th>Rivew user</th>
                <th>Aksi</th>
                </tr>
            </thead>
            @foreach ($ulasans as $key => $ulasan)
            <tbody>
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{$ulasan->ulasan}}</td>
                    <td>
                        {{-- <a href="/genre/{{$ulasan->id}}" type="button" class="btn btn-primary"><i class="fa fa-book"></i></a>    --}}
                        {{-- <a href="/genre/{{$ulasan->id}}/edit" class="btn btn-warning btn-xs">Edit</a> --}}
                        {{-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editdata{{$ulasan->id}}">
                            <i class="fa fa-edit"></i>
                        </button> --}}

                            <form action="/ulasanadmin/{{$ulasan->id}}" method="post" onclick="return confirm('Yakin Akan menghapus data?')" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
