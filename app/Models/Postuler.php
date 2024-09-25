<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postuler extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_postuler';

    protected $fillable = [
        'id_etudiant',
        'id_stage',
        'status',
    ];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'id_etudiant');
    }

    public function stage()
    {
        return $this->belongsTo(Stage::class, 'id_stage');
    }
    public function avis()
    {
        return $this->hasMany(Avis::class, 'id_postuler', 'id_postuler');
    }
}
