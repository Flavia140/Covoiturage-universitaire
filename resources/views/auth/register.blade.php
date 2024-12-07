<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">

</head>
<body>
@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
  
<div class="signup-container">
    <div class="logo">
    
    </div>
    <p>Rejoignez notre réseau de covoiturage universitaire !</p>
    <form class="signup-form" id="signup-form" action="{{route('register')}} " method="POST">
        @csrf <!-- CSRF protection -->
        <input type="text" id="full-name" name="name" placeholder="Prénom et Nom" required>
        <input type="email" id="email" name="email" placeholder="Adresse e-mail" required>
        <input type="tel" id="phone" name="phone" placeholder="Numéro de téléphone" required>
        <input type="text" id="university" name="university" placeholder="Université">
        <input type="password" id="password" name="password" placeholder="Mot de passe" required>
        <input type="password" id="confirm-password" name="password_confirmation" placeholder="Confirmez le mot de passe" required>
        <select id="user-type" name="user_type" required>
            <option value="" disabled selected>Type d'utilisateur</option>
            <option value="driver">Conducteur</option>
            <option value="passenger">Passager</option>
        </select>
        <label>
            <input type="checkbox" id="terms" required> J'accepte les <a href="#">conditions générales d'utilisation</a>.
        </label>
        <button type="submit">Créer mon compte</button>
        <p>Déjà inscrit ? <a href="{{ route('login') }}">Connectez-vous ici</a>.</p>
    </form>
</div> 
</body>
</html>


