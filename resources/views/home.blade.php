<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabellone Treni</title>
</head>
<body>

    <h1>Tabellone Treni</h1>

    @foreach ($trains as $train)
        <div>
            <h2>{{ $train->train_code }}</h2>

            <p>Azienda: {{ $train->company }}</p>
            <p>Partenza: {{ $train->departure_station }}</p>
            <p>Arrivo: {{ $train->arrival_station }}</p>
            <p>Orario partenza: {{ $train->departure_time }}</p>
            <p>Orario arrivo: {{ $train->arrival_time }}</p>
            <p>Carrozze: {{ $train->carriages }}</p>

            <hr>
        </div>
    @endforeach

</body>
</html>