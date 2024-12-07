<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Affiche la page de création d'un trajet.
     */
    public function create()
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Vous devez être connecté pour accéder à cette page.');
        }
     
        return view('trip.publish'); // Assurez-vous que la vue "trip.publish" existe
    }

    /**
     * Enregistre un nouveau trajet.
     */
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'departure' => 'required|in: ENEAM,UAC,Cotonou,Abomey-Calavi',
            'destination' => 'required|in: ENEAM,UAC,Cotonou,Abomey-Calavi',
            'date' => 'required|date',
            'time' => 'required',
            'seats' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        // Création d'un nouveau trajet
        Trip::create([
            'departure' => $request->departure,
            'destination' => $request->destination,
            'date' => $request->date,
            'time' => $request->time,
            'seats' => $request->seats,
            'price' => $request->price,
            'user_id' => auth()->id(), // L'utilisateur doit être connecté
        ]);

        return redirect()->route('trips.index')->with('success', 'Trajet publié avec succès !');
    }

    /**
     * Affiche la liste des trajets.
     */
    public function index()
    {
        // Récupère tous les trajets avec leur utilisateur associé
        $trips = Trip::with('user')->latest()->get();

        return view('trip.index', compact('trips')); // Assurez-vous que la vue "trips.index" existe
    }

    public function show($id)
    {
        $trip = Trip::with('user')->findOrFail($id); // Charge le trajet avec l'utilisateur associé
    
        return view('trip.show', compact('trip')); // Assurez-vous que la vue "trip.show" existe
    }
    
}
