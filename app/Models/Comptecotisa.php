<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comptecotisa extends Model
{
    use HasFactory;
    protected $fillable = [
        'role', 
        'name',
        'email',
        'matricule',
        'password',
    ];

   

}
 