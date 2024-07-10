@extends('layouts.app')

@section('page-title')
Prossime Partenze
@endsection


@section('next_departures')

<div class="text-center">
    <h1>Next Departures</h1>
</div>
<div class="col-12 row justify-content-center"> 
    @foreach ($trains as $train)
        <div class="card mx-3 my-3" style="width: 18rem;">
            <img src="https://media.cnn.com/api/v1/images/stellar/prod/240118102613-04-italy-to-slovenia-train.jpg?c=16x9&q=h_653,w_1160,c_fill/f_webp" class="card-img-top" alt="...">
            <div class="card-body">
            <p class="card-text">Company: <span class="fw-bolder">{{ $train->azienda }}</span></p>
            <p class="card-text">Train Code: <span class="fw-bolder">{{ $train->codice_treno }}</span> </p>
            <p class="card-text">Departures Date: <span class="fw-bolder">{{$train->data_partenza->format('d/m/Y')}}</span></p>
            <a href="{{ route('train.details', ['id' => $train->id]) }}" class="btn btn-primary">details</a>
            </div>
        </div>
    @endforeach
</div>
@endsection



