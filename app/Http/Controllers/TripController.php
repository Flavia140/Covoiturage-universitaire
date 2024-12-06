<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripController extends Controller
{
    public function create()
    {
        return view('trip.publish'); // Vue pour publier un trajet
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'departure' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'seats' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        // Save the trip
        Trip::create([
            'departure' => $request->departure,
            'destination' => $request->destination,
            'date' => $request->date,
            'time' => $request->time,
            'seats' => $request->seats,
            'price' => $request->price,
            'user_id' => auth()->id(), // Assuming users must be logged in
        ]);
        return redirect()->route('trips.index')->with('success', 'Trajet publié avec succès !');

        }

        public function index()
{
    $trips = Trip::with('user')->latest()->get(); // Récupère tous les trajets avec leurs utilisateurs

    return view('trips.index', compact('trips')); // Vue pour afficher la liste
}


}
