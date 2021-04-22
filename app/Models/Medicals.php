<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicals extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'rapportMedical',
        'dateRapport'
    ];
    //relation avec la table Animaux
    public function animalSoin()
    {
        return $this->belongsTo(Animaux::class);
    }
}
