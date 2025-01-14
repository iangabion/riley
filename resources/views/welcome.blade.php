<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Riley's Catering Services and Party Supplies</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('/images/lenzy_logo_small.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.8.95/css/materialdesignicons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

</head>

<body class="antialiased">

    <div id="app">
        <div id="app2">

        </div>
        <script async defer src="{{ mix('js/app.js') }}"></script>
        <script async defer src="{{ mix('js/app2.js') }}"></script>
        <!-- <script src="{{ asset('js/app.js') }}"></script> -->
</body>

</html>