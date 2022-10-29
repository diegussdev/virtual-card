@extends('layouts.default')

@section('content')
    <div class="container d-flex flex-column justify-content-center align-items-start w-100 h-100">
        <h3 class="fw-bolder mt-4 mb-4">Hello, my name is {{ $profile->name }}</h3>

        <h1 class="fw-bolder mt-4">My history</h1>
        <p class="text-secondary fw-bolder mt-2 mb-4">{{ $profile->about }}</p>

        <div class="d-flex gap-2">

            @if ($profile->linkedin_url)
            <a href="{{ $profile->linkedin_url }}" class="btn btn-primary btn-md mt-4"><i class="fa-brands fa-linkedin"></i> LinkedIn</i></a>
            @endif
            @if ($profile->github_url)
                <a href="{{ $profile->github_url }}" class="btn btn-dark btn-md mt-4"><i class="fa-brands fa-square-github"></i> Github</i></a>
            @endif
            <a href="{{ url('qr-code', ['profile' => $profile->slug]) }}" class="btn btn-warning btn-md mt-4"><i class="fa-solid fa-qrcode"></i> QR Code</i></a>
        </div>

    </div>
@endsection