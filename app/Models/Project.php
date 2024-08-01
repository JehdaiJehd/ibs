<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Partenaire;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [

        'nom_projet',
        'statut_projet',
        'details_projet',
        'date_debut',
        'date_fin',
        'partenaire_id',
    ];

    //manage relation ship 

    public function partenaire(): BelongsTo
    {
        return $this->belongsTo(Partenaire::class);
    }
}
