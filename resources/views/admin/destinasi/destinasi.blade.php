@extends('layouts.admin-dash')

@section('content')

<a href="booking.php" class="card-link">
    <div class="card">
        <h2>Booking</h2>
        <p>Halaman Untuk Melihat List Booking</p>
    </div>
    </a>
    
<h1>Data Kategori Destinasi</h1>
<small>Data Kategori Destinasi</small><br>

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahdata">+ Tambah Destinasi</button>

<div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="tambahdataLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahdataLongTitle">Tambah Destinasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
          <form action="{{ route('destinasi.store') }}" method="post" enctype="multipart/form-data">

            @csrf
              @csrf

              <label for="">Nama Wisata :</label>
              <div class="form-group">
                  <input type="text" id="wisata" name="wisata" class="form-control @error('wisata') is-invalid @enderror" placeholder="Kategori Destinasi" value="{{old('wisata')}}">
                  @error('wisata')
                  <span class="invalid-feedback" role="alert" style="color: red;">
                      <strong>{{$message}}</strong>
                  </span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="genre_id">Kategori Wisata :</label>
                <select class="form-select @error('genre_id') is-invalid @enderror" name="genre_id" value="{{ old('genre_id')}}" aria-label="Default select example">
                    <option selected>Pilih Kategoti</option>
                    @foreach ($genres as $genre)
                        <option value="{{$genre->id}}">{{$genre->genre}}</option>
                    @endforeach
                </select>
                @error('genre_id')
                <span class="invalid-feedback" role="alert" style="color: red;">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            
            <label for="">Foto Wisata:</label>
            <div class="form-group">
                <input type="file" id="foto" name="foto" class="form-control @error('foto') is-invalid @enderror" placeholder="foto Destinasi" value="{{old('foto')}}">
                @error('foto')
                <span class="invalid-feedback" role="alert" style="color: red;">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
              <label for="">Harga Tiket Anak:</label>
              <div class="form-group">
                  <input type="text" id="tiket_anak" name="tiket_anak" class="form-control @error('tiket_anak') is-invalid @enderror" placeholder="Kategori Destinasi" value="{{old('tiket_anak')}}">
                  @error('tiket_anak')
                  <span class="invalid-feedback" role="alert" style="color: red;">
                      <strong>{{$message}}</strong>
                  </span>
                  @enderror
              </div>
              <label for="">Harga Tiket Remaja:</label>
              <div class="form-group">
                  <input type="text" id="tiket_remaja" name="tiket_remaja" class="form-control @error('tiket_remaja') is-invalid @enderror" placeholder="Kategori Destinasi" value="{{old('tiket_remaja')}}">
                  @error('tiket_remaja')
                  <span class="invalid-feedback" role="alert" style="color: red;">
                      <strong>{{$message}}</strong>
                  </span>
                  @enderror
              </div>
              <label for="">Harga Tiket Dewasa:</label>
              <div class="form-group">
                  <input type="text" id="tiket_dewasa" name="tiket_dewasa" class="form-control @error('tiket_dewasa') is-invalid @enderror" placeholder="Kategori Destinasi" value="{{old('tiket_dewasa')}}">
                  @error('tiket_dewasa')
                  <span class="invalid-feedback" role="alert" style="color: red;">
                      <strong>{{$message}}</strong>
                  </span>
                  @enderror
              </div>
              <br><div class="form-group">
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-success">Simpan Ketogori</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
              </div>
          </form>
      </div>
    </div>
  </div>
</div>


<table class="table table-bordered">
    <thead>
        <tr>
        <th>No</th>
        <th>Nama Wisata</th>
        <th>Kategori Wisata</th>
        <th>foto</th>
        <th>Harga Tiket Anak</th>
        <th>Harga Tiket Remaja</th>
        <th>Harga Tiket Dewasa</th>
        <th>Aksi</th>
        </tr>
    </thead>
    @foreach ($destinasis as $key => $destinasi)
    <tbody>
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{$destinasi->wisata}}</td>
            <td>{{$destinasi->genre->genre}}</td>
            <td><img src="{{ asset('storage/'.$destinasi->foto) }}" width="60px" alt="foto"></td>
            <td>{{$destinasi->tiket_anak}}</td>
            <td>{{$destinasi->tiket_remaja}}</td>
            <td>{{$destinasi->tiket_dewasa}}</td>
            <td>
                <a href="/destinasi/{{$destinasi->id}}" type="button" class="btn btn-primary" class="d-inline">Detail</a>
                {{-- <a href="/genre/{{$genre->id}}/edit" class="btn btn-warning btn-xs">Edit</a> --}}
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editdata{{$destinasi->id}}" class="d-inline">
                    Edit
                </button>

                <form action="/destinasi/{{$destinasi->id}}" method="post" onclick="return confirm('Yakin Akan menghapus data?')" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">Delete</button>
                </form>

            </td>

        </tr>

         <!-- Modal Edit -->
<div class="modal fade" id="editdata{{$destinasi->id}}" tabindex="-1" role="dialog" aria-labelledby="editdata{{$destinasi->id}}LongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editdata{{$destinasi->id}}LongTitle">Edit Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="{{ route('destinasi.update', ['destinasi' => $destinasi->id]) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <label for="">Nama Wisata : </label>
                    <div class="form-group">
                        <input type="text" id="wisata" name="wisata" class="form-control" placeholder="nama wisata" value="{{$destinasi->wisata}}">
                    </div>
                    <label for="">Kategori Wisata : </label>
                    <div class="form-group">
                        <input type="text" id="genre_id" name="genre_id" class="form-control" placeholder="kategori wisata" value="{{$destinasi->genre->genre}}">
                    </div>
                    <div class="mb-3">
                        <label for="foto">Foto Dokter</label>
                        <input type="file"  class="form-control form-select @error('foto') is-invalid @enderror" name="foto" value="{{old('foto')}}">
                        @error('foto')
                        <span class="invalid-feedback" role="alert" style="color: red;">
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <label for="">Harga Tiket Anak : </label>
                    <div class="form-group">
                        <input type="text" id="tiket_anak" name="tiket_anak" class="form-control" placeholder="harga tiket_anak" value="{{$destinasi->tiket_anak}}">
                    </div>
                    <label for="">Harga Tiket Remaja : </label>
                    <div class="form-group">
                        <input type="text" id="tiket_remaja" name="tiket_remaja" class="form-control" placeholder="harga tiket remaja" value="{{$destinasi->tiket_remaja}}">
                    </div>
                    <label for="">Harga Tiket Dewasa : </label>
                    <div class="form-group">
                        <input type="text" id="tiket_dewasa" name="tiket_dewasa" class="form-control" placeholder="harga tiket dewasa" value="{{$destinasi->tiket_dewasa}}">
                    </div>
                    <div class="form-group">
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Simpan Kategori</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</tbody>
@endforeach
</table>
@endsection
