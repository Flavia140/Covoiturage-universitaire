<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm()
{
    return view('auth.register');
}
use Illuminate\Http\Request;
use App\Models\User; // Assurez-vous que le modèle User existe
use Illuminate\Support\Facades\Hash;

public function register(Request $request)
{
    // Valider les données
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'phone' => 'required|string|min:10|max:15',
        'university' => 'nullable|string|max:255',
        'password' => 'required|string|min:8|confirmed',
        'user_type' => 'required|in:driver,passenger',
    ]);

    
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'university' => $request->university,
        'password' => Hash::make($request->password),
        'user_type' => $request->user_type,
    ]);

    auth()->login($user);
    return redirect()->route('home')->with('success', 'Inscription réussie !');
}


}
