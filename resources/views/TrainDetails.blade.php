@extends('layouts.app')

@section('details')
<div class="d-flex justify-content-center">
    <div class="card" style="width: 50rem;">
        <img src="https://media.cnn.com/api/v1/images/stellar/prod/240118102613-04-italy-to-slovenia-train.jpg?c=16x9&q=h_653,w_1160,c_fill/f_webp" class="card-img-top" alt="Beautiful Landscape" style="height: 300px; object-fit: cover;">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h3>Dettagli del Treno</h3>
            <p><strong>Azienda:</strong> {{ $train->azienda }}</p>
            <p><strong>Codice Treno:</strong> {{ $train->codice_treno }}</p>
            <p><strong>Stazione di Partenza:</strong> {{ $train->stazione_partenza }}</p>
            <p><strong>Stazione di Arrivo:</strong> {{ $train->stazione_arrivo }}</p>
            <p><strong>Data di Partenza:</strong> {{ $train->data_partenza->format('d/m/Y') }}</p>
            <p><strong>Orario di Partenza:</strong> {{ $train->orario_partenza }}</p>
            <p><strong>Orario di Arrivo:</strong> {{ $train->orario_arrivo }}</p>
            <p><strong>Numero Carrozze:</strong> {{ $train->numero_carrozze }}</p>
            <p><strong>In Orario:</strong> {{ $train->in_orario ? 'Sì' : 'No' }}</p>
            <p><strong>Cancellato:</strong> {{ $train->cancellato ? 'Sì' : 'No' }}</p>
            <a href="#" class="btn btn-primary">Buy</a>
        </div>
    </div>
</div>

@endsection


  