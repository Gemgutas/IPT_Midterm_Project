<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{env('APP_NAME')}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('./css/style.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg  p-0  bg-primary pt-2 pb-2">
        <div class="container">
            <div class="container-fluid bg-primary p-1 d-flex justify-content-between">
                <div>
                    <a class="navbar-brand text-white custom-style" href="#">IPT Midterm Project</a>
                </div>

                <div class="collapse navbar-collapse d-flex align-items-center justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white p-0 ml-5 custom" aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white p-0 ml-5 custom" aria-current="page" href="{{url('/users')}}">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white p-0 ml-5 custom" aria-current="page" href="{{url('/accounts')}}">Accounts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <div class="container">
        @yield('content')
    </div>

</body>
</html>
