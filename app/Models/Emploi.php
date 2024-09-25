<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_entreprise',
        'titre',
        'image',
        'description',
        'competence_requis',
        'location',
        "durer",
    ];
}
