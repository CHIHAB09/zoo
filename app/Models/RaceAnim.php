<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaceAnim extends Model
{
    use HasFactory;



    public function animalRace()
    {
        return $this->belongsTo(Animaux::class);
    }
}
