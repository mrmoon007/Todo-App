<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <title>Todo app</title>
</head>
<body>

    @yield('content')

</body>
</html>
