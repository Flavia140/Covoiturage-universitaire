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
    <h1>Liste des Trajets</h1>

    <!-- Affichage du message de succès -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Vérifiez si des trajets existent -->
    @if($trips->isEmpty())
        <p>Aucun trajet disponible pour le moment. Publiez-en un !</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Départ</th>
                    <th>Destination</th>
                    <th>Date</th>
                    <th>Heure</th>
                    <th>Places Disponibles</th>
                    <th>Prix (FCFA)</th>
                    <th>Publié par</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trips as $trip)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $trip->departure }}</td>
                        <td>{{ $trip->destination }}</td>
                        <td>{{ $trip->date }}</td>
                        <td>{{ $trip->time }}</td>
                        <td>{{ $trip->seats }}</td>
                        <td>{{ $trip->price }}</td>
                        <td>{{ $trip->user->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
</body>
</html>
