<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_stage';

    protected $fillable = [
        'id_entreprise',
        'titre',
        'domaine',
        'image',
        'description',
        'competence_requis',
        'location',
        "fichier",
        "durer",
    ];

    public function etudiant(){
        return $this->belongsToMany(Etudiant::class);
    }

    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class);
    }

    public function postulers()
    {
        return $this->hasMany(Postuler::class);
    }

    public function postulations()
    {
        return $this->hasMany(Postuler::class);
    }

    public function postulants()
    {
        return $this->belongsToMany(Etudiant::class, 'postulers', 'id_stage', 'id_etudiant')
                    ->withPivot('status')
                    ->withTimestamps();
    }

}
