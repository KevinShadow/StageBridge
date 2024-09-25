<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;





use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Etablissement extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'etablissement';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $fillable = [
        'nom_etablissement',
        'email_etablissement',
        'site_etablissement',
        'numero_etablissement',
        'password',
        'nom_responsable',
        'email_responsable'
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function getAuthIdentifierName()
    {
        return 'email_etablissement';
    }

    public function etudiants(){
        return $this->hasmany(Etudiant::class, "id_etudiant");
    }



}
