<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Train</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main >
        <div class="container">
            <h1>Train</h1>
            <div class="row">
                @foreach ($trains as $train)
                    <div class="col-3">{{ $train->departure_time }}</div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>
