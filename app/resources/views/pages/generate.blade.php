@extends('layouts.default')

@section('content')
    <div class="container d-flex flex-column justify-content-center align-items-center w-100 h-100">
        <h1 class="fw-bolder mb-4">QR Code Image Generator</h1>
        
        @include('includes.alert')
        
        <div class="container mt-4">
            <form class="form-floating" method="post" action="{{ url('profile-store') }}">
                @csrf
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input required type="text" class="form-control" id="name" name="name">
                    </div>
                </div>
                    
                <div class="mb-3 row">
                    <label for="linkedin_url" class="col-sm-2 col-form-label">LinkedIn URL</label>
                    <div class="col-sm-10">
                        <input required type="text" class="form-control" id="linkedin_url" name="linkedin_url">
                    </div>
                </div>
                
                <div class="mb-3 row">
                    <label for="github_url" class="col-sm-2 col-form-label">Github URL</label>
                    <div class="col-sm-10">
                      <input required type="text" class="form-control" id="github_url" name="github_url">
                    </div>
                </div>

                <div class="mt-4 row">
                    <label for="about" class="col-sm-2 col-form-label">About me</label>
                    <div class="col-sm-10">
                        <textarea required class="form-control" id="about" name="about" rows="3"></textarea>
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-4">
                    <input class="btn btn-primary btn-lg" type="submit" value="Generate Image">
                </div>
            </form>
        </div>

    </div>
@endsection