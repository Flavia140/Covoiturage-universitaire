<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
</head>
<body>
<div class="search-trip-container">
    <div class="search-form-wrapper">
        <div class="form-header">

            <h1>Rechercher un Trajet</h1>
            <p>Trouvez un trajet rapidement et partagez votre voyage avec d'autres !</p>
        </div>
        <form method="GET" action="{{ route('search') }}" id="search-form">
            
            <div class="form-group">
                <label for="departure_city">Ville de départ</label>
                <input type="text" id="departure_city" name="departure_city" placeholder="Ex : Calavi" required>
            </div>
            <div class="form-group">
                <label for="arrival_city">Ville d'arrivée</label>
                <input type="text" id="arrival_city" name="arrival_city" placeholder="Ex : Gbegamey" required>
            </div>
            <div class="form-group">
                <label for="date">Date du trajet</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="seats">Nombre de places</label>
                <input type="number" id="seats" name="seats" min="1" placeholder="1" required>
            </div>
            <div class="form-group">
                <label for="trip_type">Type de trajet</label>
                <select id="trip_type" name="trip_type">
                    <option value="one_way">Aller simple</option>
                    <option value="round_trip">Aller-retour</option>
                </select>
            </div>
            <button type="submit" class="submit-button">Rechercher</button>
        </form>
    </div>
</div>

<script src="{{ asset('js/search.js') }}" defer></script>
</body>
</html>

