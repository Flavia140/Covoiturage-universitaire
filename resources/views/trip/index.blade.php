<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Liste des trajets</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Départ</th>
                <th>Destination</th>
                <th>Date & Heure</th>
                <th>Places Disponibles</th>
                <th>Publié par</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($trips as $trip)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $trip->depart }}</td>
                    <td>{{ $trip->destination }}</td>
                    <td>{{ $trip->date_heure }}</td>
                    <td>{{ $trip->places_disponibles }}</td>
                    <td>{{ $trip->user->name }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Aucun trajet trouvé.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>  
</body>
</html>



