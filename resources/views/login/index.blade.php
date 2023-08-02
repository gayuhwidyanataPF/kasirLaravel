@extends('layouts.main')

@section('container')
<div class="row justify-content-center align-items-center pt-5">
    <div class="col-lg-6 pt-5">
        <h1><i class="bi bi-box-arrow-in-right"></i> Login</h1>
        <form method="post" action="/login">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label @error('username') is-invalid @enderror">Username</label>
                <input type="text" class="form-control" id="username" name="username" autofocus required value="{{ old('username') }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" name=password class="form-label @error('password') is-invalid @enderror">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>
@endsection