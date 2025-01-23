<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="{{ config('app.name') }} Dashboard">
    <meta name="author" content="{{ config('app.name') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <title>{{ config('app.name') }} Dashboard</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/dashboard/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
    <script src="{{ asset('js/dashboard/jquery.min.js') }}"></script>
    <script src="{{ asset('js/dashboard/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('js/dashboard/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('js/dashboard/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('js/dashboard/jquery.vmap.canada.js') }}"></script>
    <script src="{{ asset('js/dashboard/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/dashboard/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/dashboard/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/dashboard/app.js') }}"></script>
    @stack('scripts')
</head>

<body>
    <form id="logoutForm" action="{{ route('logout')}}" method="post" class="d-none">
        @csrf
    </form>

    @include('dashboard.layaout.sidebar')

    <div class="content content-page">
        <div class="header">
            <div class="header-left align-items-center">
                <a href="" class="burger-menu">
                    <i class="fa fa-angles-left"></i>
                    <i class="fa fa-angles-right"></i>
                </a>
                <h4 class="mg-b-0">@yield('content-title')</h4>
            </div>
            <div class="header-right">
                <div class="dropdown dropdown-loggeduser">
                    <a href="" class="dropdown-link" data-toggle="dropdown">
                        <div class="avatar avatar-sm">
                            <img src="{{ asset('assets/avatar.png') }}" class="rounded-circle" alt="">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-menu-header">
                            <div class="media align-items-center">
                                <div class="avatar">
                                    <img src="{{ asset('assets/avatar.png') }}" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body mg-l-10">
                                    <h6>
                                      
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-menu-body">
                            <a href="" class="dropdown-item"
                                onclick="document.querySelector('#logoutForm').submit(); return false;">
                                <div class="fa fa-arrow-right-from-bracket mg-r-4"></div> Sign Out
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            @yield('content')
        </div>
    </div>
  
</body>

</html>