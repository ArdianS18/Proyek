@extends('layouts.admin-dash')

@section('content')

<h1>Data Wisata</h1>
{{-- <small>Data Wisata</small><br> --}}

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahdata">+ Tambah Wisata</button>

<div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="tambahdataLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahdataLongTitle">Tambah Wisata</h5>
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
                  <input type="text" id="wisata" name="wisata" class="form-control @error('wisata') is-invalid @enderror" placeholder="Nama Wisata" value="{{old('wisata')}}">
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

                <div class="form-group">
                    <label for="lokasi_id">Pilih Lokasi Wisata :</label>
                    <select class="form-select @error('lokasi_id') is-invalid @enderror" name="lokasi_id" value="{{ old('lokasi_id')}}" aria-label="Default select example">
                        <option selected>Pilih Lokasi Wisata</option>
                        @foreach ($lokasis as $lokasi)
                            <option value="{{$lokasi->id}}">{{$lokasi->lokasi}}</option>
                        @endforeach
                    </select>
                    @error('lokasi_id')
                    <span class="invalid-feedback" role="alert" style="color: red;">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>


            <label for="">Foto Wisata:</label>
            <div class="form-group">
                <input type="file" id="foto" name="foto" class="form-control @error('foto') is-invalid @enderror" placeholder="Foro Wisata" value="{{old('foto')}}">
                @error('foto')
                <span class="invalid-feedback" role="alert" style="color: red;">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
              <label for="">Harga Tiket Anak:</label>
              <div class="form-group">
                  <input type="text" id="tiket_anak" name="tiket_anak" class="form-control @error('tiket_anak') is-invalid @enderror" placeholder="Harga Tiket Anak" value="{{old('tiket_anak')}}">
                  @error('tiket_anak')
                  <span class="invalid-feedback" role="alert" style="color: red;">
                      <strong>{{$message}}</strong>
                  </span>
                  @enderror
              </div>
              <label for="">Harga Tiket Remaja:</label>
              <div class="form-group">
                  <input type="text" id="tiket_remaja" name="tiket_remaja" class="form-control @error('tiket_remaja') is-invalid @enderror" placeholder="Harga Tiket Remaja" value="{{old('tiket_remaja')}}">
                  @error('tiket_remaja')
                  <span class="invalid-feedback" role="alert" style="color: red;">
                      <strong>{{$message}}</strong>
                  </span>
                  @enderror
              </div>
              <label for="">Harga Tiket Dewasa:</label>
              <div class="form-group">
                  <input type="text" id="tiket_dewasa" name="tiket_dewasa" class="form-control @error('tiket_dewasa') is-invalid @enderror" placeholder="Harga Tiket Dewasa" value="{{old('tiket_dewasa')}}">
                  @error('tiket_dewasa')
                  <span class="invalid-feedback" role="alert" style="color: red;">
                      <strong>{{$message}}</strong>
                  </span>
                  @enderror
              </div>
              <br><div class="form-group">
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-success">Simpan Wisata</button>
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
        <th>Lokasi Wisata</th>
        <th>foto</th>
        <th>Harga Tiket Anak</th>
        <th>Harga Tiket Remaja</th>
        <th>Harga Tiket Dewasa</th>
        <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($destinasis as $key => $destinasi)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{$destinasi->wisata}}</td>
            <td>{{$destinasi->genre->genre}}</td>
            <td>{{$destinasi->lokasi->lokasi}}</td>
            <td><img src="{{ asset('storage/'.$destinasi->foto) }}" width="60px" alt="foto"></td>
            <td>{{ $destinasi->tiket_anak }}</td>
            <td>{{ $destinasi->tiket_remaja }}</td>
            <td>{{ $destinasi->tiket_dewasa }}</td>
            <td class="text-center">
                {{-- <a href="/destinasi/{{ $destinasi->id }}" type="button" class="btn btn-primary d-inline mr-2">Detail</a> --}}
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editdata{{ $destinasi->id }}" class="d-inline mr-2">
                    Edit
                </button>
                <form action="/destinasi/{{ $destinasi->id }}" method="post" onclick="return confirm('Yakin Akan menghapus data?')" class="d-inline">
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

                            <label for="genre_id">Kategori Wisata:</label>
                            <div class="form-group">
                                <select name="genre_id" class="form-select">
                                    @foreach ($genres as $genre)
                                        <option value="{{ $genre->id }}" {{ old('genre_id', $destinasi->genre_id) == $genre->id ? 'selected' : '' }}>{{ $genre->genre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="foto">Foto Dokter</label>
                                <input type="file" class="form-control form-select @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}">
                                @error('foto')
                                    <span class="invalid-feedback" role="alert" style="color: red;">
                                        <small class="text-danger">{{ $message }}</small>
                                    </span>
                                @enderror
                            </div>

                    <div class="mb-3">
                        <label for="foto">Foto Wisata</label>
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
                            <button type="submit" class="btn btn-success">Simpan Wisata</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endforeach
    </tbody>
</table>

@endsection
