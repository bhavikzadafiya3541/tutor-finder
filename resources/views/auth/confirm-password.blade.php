@extends('layouts.frontend.main')

@section('page_title')
    {{ env('APP_NAME') }} | Confirm Password
@endsection

@section('main-title')
    <h1>
        <strong>Confirm Password</strong>
    </h1>
@endsection

@section('content')
    <div class="site-section" id="confirm-password-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <p>This is a secure area of the application. Please confirm your password before continuing.</p>
                    <form action="{{ route('password.confirm') }}" method="post">
                        @csrf
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password">
                                    @error('password')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mt-2 m-auto">
                                    <button type="submit" class="btn btn-block btn-primary text-white">Confirm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
