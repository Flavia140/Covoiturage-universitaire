<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/trip.css') }}">
</head>
<body>
<div class="container">
        <div class="header">
            <h1>Publier un Trajet</h1>
            <p>Proposez un trajet pour aider les étudiants à voyager facilement !</p>
        </div>
        <form class="form" action="{{ route('trips.store') }}" method="POST">
        @csrf <!-- Ajoutez cette ligne -->
            <div class="form-group">
                <label for="departure">Point de départ</label>
                <input type="text" id="departure" name="departure" placeholder="Ex. : ENEAM" required>
            </div>
            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" id="destination" name="destination" placeholder="Ex. : Centre-ville" required>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="time">Heure de départ</label>
                <input type="time" id="time" name="time" required>
            </div>
            <div class="form-group">
                <label for="seats">Nombre de places disponibles</label>
                <input type="number" id="seats" name="seats" min="1" placeholder="Ex. : 3" required>
            </div>
            <div class="form-group">
                <label for="price">Prix par place (FCFA)</label>
                <input type="number" id="price" name="price" step="0.01" placeholder="Ex. : 500" required>
            </div>
            <div>
                <button type="submit">Publier le Trajet</button>
            </div>
        </form>
    </div>


</body>
</html>

