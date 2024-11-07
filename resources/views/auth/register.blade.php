@extends('layouts.frontend.main')

@section('page_title')
    {{ env('APP_NAME') }} | Register
@endsection

@section('main-title')
    <h1>
        <strong>Register</strong>
    </h1>
@endsection

@section('content')
    <div class="site-section bg-light" id="sign-up-section">
        <div class="container">
            @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('message') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Enter Email Address">
                                @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2 mt-2 m-auto">
                                <button type="submit" class="btn btn-block btn-primary text-white">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
