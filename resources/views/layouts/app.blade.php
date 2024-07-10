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

        <div class="container py-4">
            @yield('departure_trains')
        </div>

        <div class="container py-4">
            <div class="row">
                @yield('next_departures')
            </div>
        </div>


    </main>
    @include('shared.footer')
</body>

</html>