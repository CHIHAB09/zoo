<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalTable extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name',
        'dateEntrer',
        'dateSortie',
        'dateNaissance',
        'sexe',
        'poids',
        'sortieCage'
    ];
    //relation avec la table medicals
    public function medicaux()
    {
        return $this->hasMany(MedicalTable::class);
    }
    //relation avec la table race
    public function races()
    {
        return $this->hasMany(RaceAnimTable::class);
    }
    //relat avec la table haliment
    public function horaireAlim()
    {
        return $this->hasMany(HalimentTable::class);
    }
}
