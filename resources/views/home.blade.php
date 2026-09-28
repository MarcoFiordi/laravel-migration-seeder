<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tabellone Treni</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap"
        rel="stylesheet">

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>

    <main class="board">

        <div class="board-header">
            <h1>PARTENZE</h1>
            <span>DEPARTURES</span>
        </div>

        <div class="train-table">

            <div class="train-row train-heading">
                <span>Treno</span>
                <span>Azienda</span>
                <span>Partenza</span>
                <span>Destinazione</span>
                <span>Arrivo</span>
                <span>Stato</span>
            </div>

            @foreach ($trains as $train)

            <div class="train-row">

                <span class="train-code">
                    {{ $train->train_code }}
                </span>

                <span>
                    {{ $train->company }}
                </span>

                <span>
                    {{ $train->departure_time }}
                </span>

                <span>
                    {{ $train->arrival_station }}
                </span>

                <span>
                    {{ $train->arrival_time }}
                </span>

                <span>
                    @if ($train->is_cancelled)
                    <span class="status cancelled">
                        CANCELLATO
                    </span>

                    @elseif (!$train->is_on_time)
                    <span class="status delayed">
                        RITARDO
                    </span>

                    @else
                    <span class="status on-time">
                        IN ORARIO
                    </span>
                    @endif
                </span>

            </div>

            @endforeach

        </div>

    </main>

</body>

</html>