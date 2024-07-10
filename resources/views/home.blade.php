<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco Treni</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Treni in Partenza Oggi</h1>
        
        @if ($trains->isEmpty())
            <p>Nessun treno in partenza oggi.</p>
        @else
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Azienda</th>
                            <th>Stazione Partenza</th>
                            <th>Data Partenza</th>
                            <th>Stazione Arrivo</th>
                            <th>Orario Partenza</th>
                            <th>Orario Arrivo</th>
                            <th>Codice Treno</th>
                            <th>Numero Carrozze</th>
                            <th>In Orario</th>
                            <th>Cancellato</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $train)
                            <tr>
                                <td>{{ $train->azienda }}</td>
                                <td>{{ $train->stazione_partenza }}</td>
                                <td>{{ $train->data_partenza->format('d-m-Y') }}</td>
                                <td>{{ $train->stazione_arrivo }}</td>
                                <td>{{ $train->orario_partenza->format('H:i:s') }}</td>
                                <td>{{ $train->orario_arrivo->format('H:i:s') }}</td>
                                <td>{{ $train->codice_treno }}</td>
                                <td>{{ $train->numero_carrozze }}</td>
                                <td>{{ $train->in_orario ? 'Sì' : 'No' }}</td>
                                <td>{{ $train->cancellato ? 'Sì' : 'No' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</body>
</html>
