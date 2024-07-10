@extends('layouts.app')

@section('page-title')
HomePage
@endsection

@section('departure_trains')

<div class="py-3 text-center">
    <h1 class="mt-5 mb-4">Treni in Partenza Oggi</h1>
</div>
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

@endsection

