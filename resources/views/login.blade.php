<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="{{ config('app.name') }} Login">
    <meta name="author" content="{{ config('app.name') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <title>{{ config('app.name') }} Login</title>

    <!-- template css -->
    <link rel="stylesheet" href="{{ asset('css/dashboard/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/app.css') }}">
</head>

<body>

    <div class="signin-panel">
        <img src="{{ asset('assets/login-bg.svg') }}" alt="Login Background" class="login-bg img-fluid">

        <div class="signin-sidebar">
            <div class="signin-sidebar-body">
                <a class="sidebar-logo mg-b-40">
                    <img src="{{ asset('assets/logo.png') }}" alt="DemandGine" class="img-fluid logo">
                    {{-- <span>here<span class="brand-color">X</span>here</span> --}}
                </a>
                <h4 class="signin-title">Welcome back!</h4>
                <h5 class="signin-subtitle">Please signin to continue.</h5>

                <form class="signin-form" action="{{ route('authenticate') }}" method="post">
                    @if($errors->any())
                    <div class="alert alert-solid alert-danger" role="alert">
                        @foreach ($errors->all() as $message)
                        <div>{{ $message }}</div>
                        @endforeach
                    </div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email address" />
                    </div>

                    <div class="form-group">
                        <label class="d-flex justify-content-between">
                            <span>Password</span>
                        </label>
                        <input type="password" name="password" class="form-control" placeholder="Enter your password" />
                    </div>

                    <div class="form-group d-flex mg-b-0">
                        <button class="btn btn-brand btn-uppercase flex-fill">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/dashboard/jquery.min.js') }}"></script>
</body>

</html>