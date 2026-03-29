<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTES</title>
    <link rel="stylesheet" href="{{'assets/bootstrap/bootstrap.min.css'}}">
    <link rel="stylesheet" href="{{ 'assets/fontawesome/css/all.min.css' }}">
    <link rel="shortcut icon" href="{{'assets/images/favicon.png' }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-white">

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
