<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publier un Trajet</title>
    <link rel="stylesheet" href="{{ asset('css/trip.css') }}">
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Publier un Trajet</h1>
        <p>Proposez un trajet pour aider les étudiants à voyager facilement !</p>
    </div>
    <form class="form" action="{{ route('trips.store') }}" method="POST">
        @csrf <!-- Protection CSRF -->

        <!-- Point de départ -->
        <div class="form-group">
            <label for="departure">Point de départ</label>
            <select id="departure" name="departure" required>
                <option value="" disabled selected> Sélectionnez le point de départ </option>
                <option value="ENEAM">ENEAM</option>
                <option value="Université d'Abomey-Calavi">Université d'Abomey-Calavi</option>
                <option value="Cotonou">Cotonou</option>
                <option value="Abomey-Calavi">Abomey-Calavi</option>
            </select>
        </div>

        <!-- Destination -->
        <div class="form-group">
            <label for="destination">Destination</label>
            <select id="destination" name="destination" required>
                <option value="" disabled selected> Sélectionnez la destination </option>
                <option value="ENEAM">ENEAM</option>
                <option value="UAC">UAC</option>
                <option value="Cotonou">Cotonou</option>
                <option value="A-C"><Abomey-Calavi></Abomey-Calavi></option>
            </select>
        </div>  

        <!-- Date -->
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" id="date" name="date" required>
        </div>

        <!-- Heure -->
        <div class="form-group">
            <label for="time">Heure de départ</label>
            <input type="time" id="time" name="time" required>
        </div>

        <!-- Nombre de places -->
        <div class="form-group">
            <label for="seats">Nombre de places disponibles</label>
            <input type="number" id="seats" name="seats" min="1" placeholder="Ex. : 3" required>
        </div>

        <!-- Prix -->
        <div class="form-group">
            <label for="price">Prix par place (FCFA)</label>
            <input type="number" id="price" name="price" step="0.01" placeholder="Ex. : 500" required>
        </div>

        <!-- Bouton -->
        <div>
            <button type="submit">Publier le Trajet</button>
        </div>
    </form>
</div>
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

</body>
</html>
