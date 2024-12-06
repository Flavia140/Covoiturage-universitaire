<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Search; // Le modèle associé aux trajets

class SearchController extends Controller
{
    /**
     * Affiche le formulaire de recherche.
     */
    public function search()
    {
        return view('trip.search');
    }

    /**
     * Gère les résultats de la recherche.
     */
    public function results(Request $request)
    {
        // Valider les données reçues
        $validated = $request->validate([
            'departure_city' => 'required|string|max:255',
            'arrival_city' => 'required|string|max:255',
            'date' => 'required|date',
            'seats' => 'required|integer|min:1',
        ]);

        // Rechercher les trajets dans la base de données
        $trips = Search::where('departure_city', $validated['departure_city'])
            ->where('arrival_city', $validated['arrival_city'])
            ->whereDate('date', $validated['date'])
            ->where('seats', '>=', $validated['seats'])
            ->get();

        // Retourner la vue des résultats avec les trajets trouvés
        return view('trip.search_results', ['trips' => $trips]);
    }
}

