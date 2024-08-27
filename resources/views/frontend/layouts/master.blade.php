<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <title>Document</title>
    <style>
        body {
            font-family: 'figtree', sans-serif;
        }
    </style>
    @yield('styles')
</head>
<body>
<header>
    @include('frontend.components.header')
</header>
<main>
    @yield('content')
</main>
<footer>
   @include('frontend.components.footer')
</footer>
@yield('scripts')
</body>
</html>
