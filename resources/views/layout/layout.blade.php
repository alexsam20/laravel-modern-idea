<!DOCTYPE html>
<html lang="EN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="./bootstrap.min.css"/>
    <link rel="stylesheet" href="./all.min.css"/>
</head>
<body>
    @include('layout.nav')
    <div class="container py-4">
        {{-- Page content goes here --}}
        @yield('content')
    </div>
    <script src="./bootstrap.bundle.min.js"></script>
</body>
</html>
