<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | @yield('title') </title>
    <link rel="icon" href="{{ asset('images/favicon.ico')}}">
    {{-- FONTAWESOME --}}
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css' integrity='sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==' crossorigin='anonymous'/>

    @yield('cdns')

    {{-- STYLE --}}
    @vite('resources/js/app.js')
</head>
<body>
    @include('includes.header')
    @include('includes.jumbotron')

    @yield('content')

    @include('includes.footer')
</body>
</html>