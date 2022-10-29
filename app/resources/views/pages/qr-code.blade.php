@extends('layouts.default')

@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
        <h1 class="text-secondary fw-bolder mb-4">{{ $profile->name }}</h1>
        <h2 class="text-secondary fw-bolder mt-4 mb-4">Scan Me</h2>

        <img src="data:image/png;base64, {{ $profile->qr_code }}">
        <a href="{{ route('profile', ['profile' => $profile->slug]) }}" class="btn btn-outline-secondary btn-md mt-4">Profile <i class="fa-solid fa-chevron-right"></i></a>
    </div>
@endsection