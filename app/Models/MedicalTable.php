<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalTable extends Model
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
    //relation avec la table Animals
    public function animalSoin()
    {
        return $this->belongsTo(AnimalTable::class);
    }
}
