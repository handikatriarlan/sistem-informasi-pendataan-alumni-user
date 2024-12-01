<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>{{ $pageTitle }} | SMP Swasta Rahmat Islamiyah</title>

    @vite('resources/css/app.css')
    @vite('resources/js/main.js')
    @vite('resources/js/alumni.js')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-gray-50">
    @include('layouts.app.header')

    @yield('content')

    @include('layouts.app.footer')
</body>

</html>
