@extends('layouts.frontend.main')

@section('page_title')
    {{ env('APP_NAME') }} | Login
@endsection

@section('main-title')
    <h1>
        <strong>Login</strong>
    </h1>
@endsection

@section('content')
    <div class="site-section" id="sign-in-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form action="{{ route('login') }}" method="post">
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
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password">
                                    @error('password')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mt-2 m-auto">
                                    <button type="submit" class="btn btn-block btn-primary text-white">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
