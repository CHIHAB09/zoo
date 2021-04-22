<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Haliments extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'quAdonner',
        'heure'
    ];

    public function animalNouriture()
    {
        return $this->belongsTo(Animaux::class);
    }
}
