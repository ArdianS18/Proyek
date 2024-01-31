@extends('layouts.userlayout')
@section('content')

<head>
  <style>
        .user-review {
        border: 1px solid #ddd;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 15px;
        }
        .review-time {
            color: #777;
            font-size: 12px;
            margin-top: 8px;
        }
  </style>
</head>

<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact Us</h2>
        <p>Contact us the get started</p>
      </div>

      <div class="row">


        <div data-aos="fade-up" data-aos-delay="200">
            <form action="{{ route('ulasan.store') }}" method="post">
                @csrf
                <div class="php-email-form">
            <div class="row">
              <div class="form-group col-md-10">
                <h2>Rating dan Ulasan</h2>
                        <p>Berikan rating Anda untuk pengalaman pemesanan tiket ini:</p>
                <label for="ulasan">Tulis ulasan anda :</label>
                <textarea name="ulasan" class="form-control @error('ulasan') is-invalid @enderror" rows="4" placeholder="Masukkan ulasan anda">{{ old('ulasan') }}</textarea>
                @error('ulasan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
             
              <div class="form-group">
                <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Kirim Ulasan</button>
            </div>
       
          </form>
          <section>
            <h2>Ulasan Pengguna Lainnya</h2>
            @foreach ($ulasans->sortByDesc('created_at') as $key => $ulasan)
                <div class="user-review">
                 <b>{{Auth::user()->name}} <br></b> 
                    {{ $ulasan->ulasan }}
                    <div class="review-time">{{ \Carbon\Carbon::parse($ulasan->created_at)->locale('id')->diffForHumans() }}</div>
                </div>
            @endforeach
        </section>
       </div>
      </div>

      </div>

    </div>
  </section>

@endsection