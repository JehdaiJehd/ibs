<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Partenaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_partenaire',
        'secteur',
        'localisation',
        'commentaires',
        'image_logo'

    ];

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }

}
