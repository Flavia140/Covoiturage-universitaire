@extends('layouts.app')

@section('content')
<div class="results-container">
    <h1>Résultats de la recherche</h1>

    @if($trips->isEmpty())
        <p>Aucun trajet trouvé. Essayez avec d'autres critères.</p>
    @else
        <ul>
            @foreach($trips as $trip)
                <li>
                    <strong>Départ :</strong> {{ $trip->departure_city }}<br>
                    <strong>Arrivée :</strong> {{ $trip->arrival_city }}<br>
                    <strong>Date :</strong> {{ $trip->date }}<br>
                    <strong>Places disponibles :</strong> {{ $trip->seats }}<br>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
