<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaceAnimTable extends Model
{
    use HasFactory;

    public function animalRace()
    {
        return $this->belongsTo(AnimalTable::class);
    }
}
