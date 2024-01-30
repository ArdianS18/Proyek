@extends('user.user')
<head>
    <title>Email Verified</title>
</head>
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div>
                        Silahkan verifikasi email Anda
                    </div>
                    <div>
                        {{Auth::user()->email}}
                    </div>
                </div>

                <div class="card-body">
                    {{ __('Sebelum melanjutkan, silakan periksa email Anda untuk tautan verifikasi.') }}
                    {{ __('Jika Anda tidak menerima email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('kirim ulang email') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
