@extends('layouts.no-nav')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh; background-color: #007bff;">
    <div class="card shadow" style="width: 300px; border-radius: 8px; background-color: white;">
        <div class="card-body text-center">
            <div class="mb-4">
                <i class="bi-hexagon-fill" style="color: #007bff; font-size: 50px;"></i>
            </div>
            <h4 class="mb-4">Employee Data Master</h4>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Your Email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Your Password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100 mb-3" href="{{ route('default') }}">
                    {{ __('Log In') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </form>
        </div>
    </div>
</div>

@endsection