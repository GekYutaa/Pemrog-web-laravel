<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Academy')</title>
    <link rel="stylesheet" href="{{ asset('/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>

<body>
    <div class="d-flex flex-nowrap">
        @include('layout.sidebar')
        <div class="flex-grow-1 p-3">
            @yield('content', '')
        </div>
    </div>
    <script src="{{ asset('/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
