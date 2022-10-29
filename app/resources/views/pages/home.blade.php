@extends('layouts.default')

@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center w-100 h-100">
        <i class="fa-solid fa-qrcode fs-1"></i> 
        <h1 class="text-danger fw-bolder">Virtual Card</h1>
        <a href="{{ route('generate') }}" class="btn btn-outline-danger btn-lg mt-4">Generate</a>
    </div>
@endsection