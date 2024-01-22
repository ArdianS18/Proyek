@extends('layouts.admin')

@section('content')

<h1>Tambah Data genre</h1>
<a href="/genre" class="btn btn-primary btn-sm mb-3">Kembali</a>
<form action="/genre" method="post">
    @csrf
    <div class="mb-3">
        <label for="">Nama genre</label>
        <input type="text"  class="form-control form-select @error('genre') is-invalid @enderror" value="{{ old('genre')}}" name="genre">
        @error('genre')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
    </div>
    <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
</form>
@endsection