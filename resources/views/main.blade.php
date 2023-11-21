<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/modern-normalize@2.0.0/modern-normalize.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style-main.css') }}">

    <title>Teh Poci</title>
</head>

<body>
    {{-- begin navbar --}}
    @include('partials/navbar')
    {{-- end navbar --}}

    {{-- begin home --}}
    @include('layouts/home')
    {{-- end home --}}


</body>

</html>
