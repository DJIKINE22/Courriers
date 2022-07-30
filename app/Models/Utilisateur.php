<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Utilisateur as Authenticatable;

class Utilisateur extends Authenticatable
{
    use HasFactory;
    protected $table = 'utilisateur';
    protected $primaryKey = 'id_utilisateur';
    protected $fillable = ['nom','prenom','adresse','email','mot_de_pass','telephone'];
}
