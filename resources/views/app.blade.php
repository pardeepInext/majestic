<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="asset" content="{{ asset('') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('/img/favicons/favicon.ico') }}" type="image/x-icon">
</head>
<body>
    @inertia
    <script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>