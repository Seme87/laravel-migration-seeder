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
                    <div class="col-4">
                        <ul class="list_train">
                            <li> <h2>{{ $train->agency }}</h2></li>
                            <li>Stazione di Partenza: {{ $train->departure_station }}</li>
                            <li>Stazione di arrivo: {{ $train->arrival_station}}</li>
                            <li>orario di partenza: {{ $train->departure_time}}</li>
                            <li>orario di arrivo: {{ $train->arrival_time}}</li>

                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>
