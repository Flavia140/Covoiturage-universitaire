<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    use HasFactory;

    protected $table = 'searches'; // Si votre table s'appelle "searches"
    protected $fillable = ['departure_city', 'arrival_city', 'date', 'seats'];
}
