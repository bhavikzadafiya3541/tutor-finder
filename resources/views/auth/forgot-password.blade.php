<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }} | Forgot Password</title>
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
                    Forgot Password
                </a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                <form action="{{ route('password.email') }}" method="post">
                    @csrf
                    <div class="input-group">
                        <input type="email" name="email" value="{{  old('email')  }}" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('email')
                        <div>
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                    @enderror
                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-primary">Email Password Reset Link</button>
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