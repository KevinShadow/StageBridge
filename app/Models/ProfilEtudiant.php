<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilEtudiant extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_profil_etudiant';

    protected $fillable = [
        'id_etudiant',
        'image',
        'nom',
        'prenom',
        'niveau',
        'description',
        'nom_etablissement',
    ];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'id_etudiant');
    }
}
