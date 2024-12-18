<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'departure',
        'destination',
        'date',
        'time',
        'seats',
        'price',
    ];
    public function user()
{
    return $this->belongsTo(User::class);
}

}
