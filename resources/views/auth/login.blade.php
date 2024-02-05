@extends('layouts.lognres')

@section('content')

    <head>
        <title>Login</title>
    </head>

    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-1" style="background-image"><img src="{{ asset('photo/login-image.jpeg') }}"
                alt=""></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3>Login to <strong>Wisata Yuk</strong></h3>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group first">
                                <label for="email">{{ __('Email Address') }}</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group last mb-3">
                                <label for="password">{{ __('Password') }}</label>

                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <h7>Belum punya Akun?</h7>
                            <div class="d-flex mb-5 align-items-center">
                                <br><a href="/register" class="forgot-pass">Daftar Sekarang</a>
                            </div>

                            <button type="submit" class="btn btn-block btn-primary">
                                {{ __('Login') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
