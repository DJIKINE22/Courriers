<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Utilisateur as Authenticatable;
use App\Models\Utlisateur;

class Utilisateur extends Model
{
    use HasFactory;
    protected $table = 'utilisateur';
    protected $primaryKey = 'id_utilisateur';
    protected $fillable = ['nom','prenom','adresse','email','mot_de_pass','telephone'];
}
