<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
        'impact_projet',
        'partenaire_id',
    ];

    //manage relation ship 

    public function partenaire(): BelongsTo
    {
        return $this->belongsTo(Partenaire::class);
    }

    //project_status 
    public function getStatusProject()
    {
        return [
            '99' => 'En Cours',
            '1' => 'Finalisé',
            '2' => 'Non debuté',
            '0' => 'Reporté ou Annulé'
        ];
    }
}
