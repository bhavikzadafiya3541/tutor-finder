@extends('layouts.frontend.main')

@section('page_title')
    {{ env('APP_NAME') }} | Verify Email
@endsection

@section('main-title')
    <h1>
        <strong>Verify Email</strong>
    </h1>
@endsection

@section('content')
    <div class="site-section bg-light" id="verify-email-section">
        <div class="container">
            <p class="login-box-msg">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you did not receive the email, we will gladly send you another.</p>
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('verification.send') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-2 mt-2 m-auto">
                                <button type="button" class="btn btn-block btn-primary text-white">Resend Verification Email</button>
                            </div>
                        </div>
                    </form>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-2 mt-2 m-auto">
                                <button type="submit" class="btn btn-block btn-info text-white">Log Out</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
