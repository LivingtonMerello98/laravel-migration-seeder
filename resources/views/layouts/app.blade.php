<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>@yield('page-title')</title>
</head>

<body>
    @include('shared.header')
    <main>
        <div class="container py-5">
            @yield('departure_trains')
        </div>
    </main>
    @include('shared.footer')
</body>

</html>