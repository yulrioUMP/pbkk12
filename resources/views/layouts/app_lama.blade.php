<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi @yield('title')</title>
</head>
<body>
    <h1>Ini Blog Saya</h1>
    @include('layouts.navigasi')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>