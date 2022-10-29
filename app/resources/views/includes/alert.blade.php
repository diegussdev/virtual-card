@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible fade show w-100" role="alert">
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif