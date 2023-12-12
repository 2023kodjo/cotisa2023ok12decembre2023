<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id_entreprise', 
        'entreprise',
        'nom', 
        'prenom',
        'date_de_naissance',
        'genre',
        'profession',
        'validation', 
    ];
}
