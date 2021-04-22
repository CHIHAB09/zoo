<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animaux extends Model
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
        return $this->hasMany(Medicals::class);
    }
    //relation avec la table race
    public function races()
    {
        return $this->hasMany(RaceAnim::class);
    }
    //relat avec la table haliment
    public function horaireAlims()
    {
        return $this->hasMany(Haliments::class);
    }
}
