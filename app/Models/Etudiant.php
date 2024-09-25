<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Etudiant extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'id_etudiant';


    protected $guard = 'etudiant';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'email',
        'password',
        'id_etablissement',
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
        return 'email';
    }



    public function etablissement(){
        return $this->belongsTO(Etablissement::class, 'id_etablissement');
    }

    public function stages(){
        return $this->belongsToMany(Stage::class);
    }
    public function postulers()
    {
        return $this->hasMany(Postuler::class, 'id_etudiant');
    }

    public function profil()
    {
        return $this->hasOne(ProfilEtudiant::class, 'id_etudiant');
    }

}
