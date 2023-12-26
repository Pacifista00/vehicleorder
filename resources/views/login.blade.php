@extends('./layouts/main')
@section('container')

<div class="min-vh-100 d-flex flex-column align-items-center justify-content-center">
    <form action="/login" method="POST" class="my-bg-yellow p-5">
        @if(session('errorMessage'))
            <span class="text-danger">{{ session('errorMessage') }}</span>
        @endif
        @csrf
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <button class="btn my-btn">Login</button>
    </form>
</div>

@endsection