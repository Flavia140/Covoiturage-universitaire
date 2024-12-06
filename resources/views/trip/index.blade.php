<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Trajets</title>
    <link rel="stylesheet" href="{{ asset('css/trip.css') }}">
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Liste des Trajets Disponibles</h1>
        <p>Découvrez les trajets disponibles et réservez une place !</p>
    </div>
    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif
    <div class="trip-list">
        @forelse ($trips as $trip)
            <div class="trip-card">
                <h3>Trajet de {{ $trip->departure }} à {{ $trip->destination }}</h3>
                <p><strong>Date :</strong> {{ $trip->date }}</p>
                <p><strong>Heure :</strong> {{ $trip->time }}</p>
                <p><strong>Places disponibles :</strong> {{ $trip->seats }}</p>
                <p><strong>Prix par place :</strong> {{ $trip->price }} FCFA</p>
            </div>
        @empty
            <p>Aucun trajet disponible pour le moment. Publiez-en un !</p>
        @endforelse
    </div>
</div>
</body>
</html>
