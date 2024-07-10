@extends('layouts.app')

@section('page-title')
Treni in partenza oggi
@endsection

@section('departure_trains')

<div class="py-3 text-center">
    <h1 class="mt-5 mb-4">Departures Today</h1>
</div>
        @if ($trains->isEmpty())
            <p>Nessun treno in partenza oggi.</p>
        @else
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Company</th>
                            <th>Departure Station</th>
                            <th>Departure Date</th>
                            <th>Arrival Station</th>
                            <th>Departure Time</th>
                            <th>Arrival Time</th>
                            <th>Train Code</th>
                            <th>Number of Carriages</th>
                            <th>On Time</th>
                            <th>Cancelled</th>

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

