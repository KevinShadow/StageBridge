<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_avis';
    protected $fillable = [
        'id_postuler',
        'id_etablissement',
        'status',
        'message',
    ];

    public function postuler()
    {
        return $this->belongsTo(Postuler::class, 'id_postuler', 'id_postuler');
    }

    public function etablissement()
    {
        return $this->belongsTo(Etablissement::class, 'id_etablissement', 'id_etablissement');
    }
}
