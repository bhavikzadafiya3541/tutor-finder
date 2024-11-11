@extends('layouts.frontend.main')

@section('page_title')
    {{ env('APP_NAME') }} | Forgot Password
@endsection

@section('main-title')
    <h1>
        <strong>Forgot Password</strong>
    </h1>
@endsection

@section('content')
    <div class="site-section" id="forgot-password-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <p><span class="font-weight-bold">Forgot your password? </span> No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                    <form action="{{ route('password.email') }}" method="post">
                        @csrf
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email Address">
                                    @error('email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mt-2 m-auto">
                                    <button type="submit" class="btn btn-block btn-primary text-white">Forgot Password</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
