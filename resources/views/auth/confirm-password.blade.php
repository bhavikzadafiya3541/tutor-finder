<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }} | Confirm Password</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="Javascript:void(0)" class="h1"><b class="d-block">{{ env('APP_NAME') }}</b>
                    Confirm Password
                </a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">This is a secure area of the application. Please confirm your password before continuing.</p>
                <form action="{{ route('password.confirm') }}" method="post">
                    @csrf
                    <div class="input-group mt-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @error('password')
                        <div>
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <div class="row mt-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary btn-block">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('frontend/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
