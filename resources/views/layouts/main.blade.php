<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('cdns')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    @yield('styles')
    <title>{{ env('APP_NAME') }}</title>
</head>

<body class="d-flex flex-column h-100">
    @include('includes.header')

    <main class="flex-shrink-0">

        @yield('content')

    </main>

    @include('includes.footer')

    @yield('scripts')
</body>

</html>
